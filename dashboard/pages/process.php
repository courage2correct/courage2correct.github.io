<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form values
    $fullName = $_POST["name"];
    $mobileNo = $_POST["mobileno"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $skinColor = $_POST["skinColor"];
    $activity = $_POST["activity"];
    $platform = $_POST["platform"];
    $keyword = $_POST["keyword"];

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
    require_once('fpdf/fpdf.php');

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
    $pdf->MultiCell(0, 10, "Full Name: $fullName\nMobile No.: $mobileNo\nE-mail: $email\nPlatform: $platform");
    $pdf->Output($pdfFilename, 'F');
}
?>
