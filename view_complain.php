<?php
require_once('./TCPDF-main/tcpdf.php');
include 'connect.php';

$id = $_POST['id'];

$sql = "SELECT * FROM complain WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$complaint = $result->fetch_assoc();

if ($complaint) {
    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Camtel');
    $pdf->SetTitle('Complaint Details');
    $pdf->SetSubject('Complaint Details');
    $pdf->SetKeywords('TCPDF, PDF, complaint, camtel');

    // Add a page
    $pdf->AddPage();

    // Set content
    $html = "
    <h2>Complaint Details</h2>
    <p><strong>ID:</strong> {$complaint['id']}</p>
    <p><strong>Full Name:</strong> {$complaint['fullname']}</p>
    <p><strong>Telephone:</strong> {$complaint['telephone']}</p>
    <p><strong>Address:</strong> {$complaint['address']}</p>
    <p><strong>Complaint:</strong> {$complaint['complain']}</p>
    ";

    // Print text using writeHTML
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output PDF
    $pdf->Output('complaint.pdf', 'I');
} else {
    echo 'No complaint found with the provided ID.';
}

$stmt->close();
$conn->close();
?>
