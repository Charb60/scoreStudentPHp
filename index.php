<!-- add_score.html -->
<!DOCTYPE html>
<html>
<head>
    <title>บันทึกคะแนนนักเรียน</title>
</head>
<body>
    <form action="insert_score.php" method="POST">
        ชื่อนักเรียน: <input type="text" name="student_name" required><br>
        วิชา: <input type="text" name="subject" required><br>
        คะแนน: <input type="number" name="score" required><br>
        <input type="submit" value="บันทึก">
    </form>
</body>
</html>
