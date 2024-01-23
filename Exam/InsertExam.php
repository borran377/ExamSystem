<?php
$Name=$_GET["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增成績</title>
    <style>
        body{
            background-color: bisque;
        }
    </style>
</head>
<body>
    <center>
        <h1>登記成績</h1><br>
        <form action="Server/InsertServer.php" method="post">
            <h1>姓名：<input type="text" name="Name" style="font-size: 20pt" required></h1><br>
            <h1>科目：<select name="Student" style="font-size: 20pt">
                <option>國文</option>
                <option>英文</option>
                <option>數學</option>
                <option>社會</option>
                <option>自然</option>
            </select></h1><br>
            <h1>分數：<input type="text" name="Number" style="font-size: 20pt"></h1><br>
            <button type="submit"><div style="font-size: 20pt">登記</div></button>
            <?php
                echo "<a href='../Result.php?name=$Name'><div style='font-size: 20pt'>返回</div></a>";
            ?>
        </form>
    </center>
</body>
</html>