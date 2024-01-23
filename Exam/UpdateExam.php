<?php
    $UserID=$_GET["id"];
    $Name=$_GET["name"];
    $Student=$_GET["student"];
    $Exam=$_GET["exam"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新第<?php echo $UserID."位資料";?></title>
    <style>
        body{
            background-color: bisque;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">更新第<?php echo $UserID."位資料";?></h1><br><br>
<form action="Server/UpdateServer.php" method="post">
    <center>
        <h1>姓名：<input type="text" name="UpdateName" style="font-size: 20pt;" value="<?php echo $Name;?>"/></h1><br>
        <h1>科目：<input type="text" name="UpdateStudent" style="font-size: 20pt;" value="<?php echo $Student;?>"/></h1><br>
        <h1>分數：<input type="text" name="UpdateExam" style="font-size: 20pt;" value="<?php echo $Exam;?>"/></h1><br>
        <button type="submit"><div style="font-size: 20pt;">Update</div></button>
        <?php
            echo "<a href='../Result.php?name=$Name'><div style='font-size: 20pt;'>返回</div></a>";
        ?>
    </center>
</form>
</body>
</html>
