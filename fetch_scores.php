<?php
// fetch_scores.php
$conn = new mysqli('localhost', 'root', 'root', 'student_scores');
$sql = "SELECT * FROM scores";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>แสดงคะแนนนักเรียน</title>
</head>
<body>
    <h2>คะแนนนักเรียน</h2>
    <table border="1">
        <tr>
            <th>ชื่อนักเรียน</th>
            <th>วิชา</th>
            <th>คะแนน</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['score']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="generate_pdf.php">ดาวน์โหลดเป็น PDF</a>
</body>
</html>
