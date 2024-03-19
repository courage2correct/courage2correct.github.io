<?php
require_once('fpdf/fpdf.php');

// Get form data from POST request
$fullName = $_POST['name'] ?? '';
$mobileNo = $_POST['mobileno'] ?? '';
$email = $_POST['email'] ?? '';
$frontFaceImage = $_FILES['file']['name'] ?? '';
$evidenceOption = $_POST['evidence'] ?? '';
$evidenceFile = $_FILES['evidenceFile']['name'] ?? '';
$imageTemplateFile = $_FILES['imageTemplate']['name'] ?? '';
$incidentDate = $_POST['idate'] ?? '';
$incidentType = $_POST['type'] ?? '';
$otherIncidentType = $_POST['othertype'] ?? '';
$platform = $_POST['platform'] ?? '';
$otherPlatform = $_POST['otherplat'] ?? '';
$keyword = $_POST['keyword'] ?? '';
$country = $_POST['country'] ?? '';
$skinColor = $_POST['skinColor'] ?? '';
$activity = $_POST['activity'] ?? '';

// Delete old files if they exist
$textFilename = "victim_details.txt";
$pdfFilename = "victim_details.pdf";
if (file_exists($textFilename)) {
    unlink($textFilename);
}
if (file_exists($pdfFilename)) {
    unlink($pdfFilename);
}

// Create the directories if they don't exist
$evidenceDir = "evidence_files";
$templateDir = "image_templates";
if (!is_dir($evidenceDir)) {
    mkdir($evidenceDir, 0755, true);
}
if (!is_dir($templateDir)) {
    mkdir($templateDir, 0755, true);
}

// Handle uploaded files
if ($_FILES["evidenceFile"]["error"] == UPLOAD_ERR_OK) {
    $evidenceFile = $_FILES["evidenceFile"]["tmp_name"];
    $evidenceFileDestination = "$evidenceDir/" . $_FILES["evidenceFile"]["name"];
    move_uploaded_file($evidenceFile, $evidenceFileDestination);
}

if ($_FILES["imageTemplate"]["error"] == UPLOAD_ERR_OK) {
    $imageTemplate = $_FILES["imageTemplate"]["tmp_name"];
    // Get the serial number for the image template
    $templateSerial = count(glob("$templateDir/template*.png")) + 1;
    $imageTemplateDestination = "$templateDir/template{$templateSerial}.png";
    move_uploaded_file($imageTemplate, $imageTemplateDestination);
}

// Create the text file with skin color, country, activity, and keyword details
$textData = "$skinColor\n$country\n$activity\n$keyword";
file_put_contents($textFilename, $textData);

// Create the PDF file with victim details (excluding victim image)
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Victim Details', 0, 1, 'C');
        $this->Ln(10);
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Add header with victim details
$header = "Full Name: $fullName\nMobile No.: $mobileNo\nE-mail: $email\nPlease share your front face image: $frontFaceImage\nDo you have any evidence?: $evidenceOption\n";
$pdf->MultiCell(0, 10, $header);

// Add evidence file details if available
if ($evidenceOption === 'yes') {
    $evidenceInfo = "Please upload the file: $evidenceFile\nPlease provide the image template from the video in .png format only: $imageTemplateFile\n";
    $pdf->MultiCell(0, 10, $evidenceInfo);
}

// Add Incident Details
$incidentDetails = "Incident Date: $incidentDate\nIncident Type: $incidentType\nOther (If not found in list above): $otherIncidentType\nPlatform of Incident: $platform\nOther (If not found in list above): $otherPlatform\nSelect Platform to find the video: $keyword\n";
$pdf->MultiCell(0, 10, $incidentDetails);

$check = "4";
$pdf->SetFont('ZapfDingbats','', 10);
// Add footer with certification and disclaimer
$checkmark =" $check";
$pdf->MultiCell(0, 10, $checkmark);

$pdf->SetFont('Arial', '', 12);
$footer =" I certify that the information provided by me in the above form is accurate and correct to the best of my knowledge. I understand that withholding of information or giving false information is a criminal offense and may result in legal action against me.\nDISCLAIMER: As per the prevailing laws, FIR of a major crime can only be registered at a Police Station. Please contact your nearest Police Station for the same. This site shall only entertain complaints about cybercrime ('non-cognizable crimes'). Your complaint shall be referred to the concerned Police Station if it is needed, where you may be called for further clarification and/or to give a statement.";;
$pdf->MultiCell(0, 10, $footer);



// Output the PDF to the browser
$pdf->Output($pdfFilename, 'F');
?>
