<?php
// insert_score.php
$student_name = $_POST['student_name'];
$subject = $_POST['subject'];
$score = $_POST['score'];

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli('localhost', 'root', 'root', 'student_scores');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// คำสั่ง SQL สำหรับเพิ่มข้อมูล
$sql = "INSERT INTO scores (student_name, subject, score) VALUES ('$student_name', '$subject', '$score')";
if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลสำเร็จ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>