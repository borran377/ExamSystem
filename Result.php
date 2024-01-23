<?php
include "Server/Connect.php";
$Name=$_GET["name"];
echo "<h1><a href='index.html'>".$Name."</a>您好</h1>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>成績登記系統</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                width: 25%;
            }
            th,td{
                font-size: 20pt;
                text-align: center;
            }
            a{
                font-size: 20pt;
            }
        </style>
    </head>
    <body>
        <h1>成績登記系統</h1><br>
        <?php
            echo "<a href='Exam/InsertExam.php?name=$Name'>新增成績</a><br><br>";
            echo "<a href='Exam/Query.php?name=$Name'>查詢</a><br>";
        ?><br><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Student</th>
                <th>Number</th>
                <th>功能1</th>
                <th>功能2</th>
            </tr>
            <?php
                $Result=new Connect();
                $Sql="select * from exam";
                $Data=$Result->MyConnect()->query($Sql);
                foreach ($Data->fetchAll() as $DataQuery){
                    echo "<tr>";
                    echo "<td>".$DataQuery['id']."</td>";
                    echo "<td>".$DataQuery['Name']."</td>";
                    echo "<td>".$DataQuery['Student']."</td>";
                    echo "<td>".$DataQuery['Exam']."</td>";
                    echo "<td><a href='Exam/UpdateExam.php?id=$DataQuery[id]&&name=$DataQuery[Name]
                              &&student=$DataQuery[Student]&&exam=$DataQuery[Exam]'>編輯</a></td>";
                    echo "<td><a href='Exam/DeleteExam.php?id=$DataQuery[id]'>刪除</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <a href="index.html">返回</a>
    </body>
</html>
