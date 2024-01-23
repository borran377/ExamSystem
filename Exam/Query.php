<?php
include "../Server/Connect.php";
@$Name=$_GET["name"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>查詢系統</title>
    </head>
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
    </style>
    <body>
        <h1>查詢系統</h1><br><br>
        <form action="Query.php" method="post">
            <h1>ID:<input type="text" name="ID" style="font-size: 20pt"></h1><br>
            <h1>Name:<input type="text" name="Name" style="font-size: 20pt"></h1><br>
            <button type="submit"><div style="font-size: 20pt">Search</div></button>
            <?php
                echo "<a href='../Result.php?name=$Name'><div style='font-size: 20pt'>返回</div></a>";
            ?>
        </form>
        <?php
           function QueryData(){
               echo "<table>";
               echo "<tr>";
               echo "<th>ID</th>";
               echo "<th>Name</th>";
               echo "<th>Student</th>";
               echo "<th>Exam</th>";
               echo "</tr>";
               @$UserID=$_POST["ID"];
               @$UserName=$_POST["Name"];
               $Result=new Connect();
               $Query="select * from exam where id='$UserID' or Name='$UserName'";
               $Start=$Result->MyConnect()->query($Query);
               foreach ($Start->fetchAll() as $StartValue){
                   SetTable($StartValue);
               }
               echo "</table>";
           }
           function SetTable($Value){
               echo "<tr>";
               echo "<td>".$Value['id']."</td>";
               echo "<td>".$Value['Name']."</td>";
               echo "<td>".$Value['Student']."</td>";
               echo "<td>".$Value['Exam']."</td>";
               echo "</tr>";
           }
           QueryData();
        ?>
    </body>
</html>