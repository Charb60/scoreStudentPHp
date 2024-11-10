<?php
// generate_pdf.php
require_once('TCPDF-main/tcpdf.php');
// require_once('/Applications/MAMP/htdocs/scoreStudentPHp/TCPDF-main/tcpdf.php');


// เชื่อมต่อฐานข้อมูล
$conn = new mysqli('localhost', 'root', 'root', 'student_scores');
$sql = "SELECT * FROM scores";
$result = $conn->query($sql);

$pdf = new TCPDF();
$pdf->AddPage();

$html = '<h2>Student Scores</h2><table border="1"><tr><th>Student</th><th>Subject</th><th>Score</th></tr>';
while ($row = $result->fetch_assoc()) {
    $html .= "<tr><td>{$row['student_name']}</td><td>{$row['subject']}</td><td>{$row['score']}</td></tr>";
}
$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('student_scores.pdf', 'D');

$conn->close();
?>
