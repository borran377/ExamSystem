<?php
    include "../Server/Connect.php";
    $SetName=$_GET["name"];
    echo "<h1 style='text-align: right'><a href='../index.html'>".$SetName."</a>您好</h1>";
?>

<html>
    <head>
        <link rel="stylesheet" href="../Framework.css">
        <meta charset="UTF-8">
        <title>系統管理員</title>
    </head>
    <body>
        <h1>系統管理員</h1><br><br>
        <center>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Passowrd</th>
                    <th>功能1</th>
                    <th>功能2</th>
                </tr>
                <?php
                    $Result=new Connect();
                    $SqlData="select * from data";
                    $QueryData=$Result->MyConnect()->query($SqlData);
                    foreach ($QueryData->fetchAll() as $Query){
                        echo "<tr>";
                        echo "<td>".$Query['id']."</td>";
                        echo "<td>".$Query['Name']."</td>";
                        echo "<td>".$Query['Username']."</td>";
                        echo "<td>".$Query['Password']."</td>";
                        echo "<td><a href='UpdateData.php?id=$Query[id]&&name=$Query[Name]
                              &&username=$Query[Username]&&password=$Query[Password]'>編輯</a></td>";
                        echo "<td><a href='Server/DeleteDataServer.php?id=$Query[id]'>刪除</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table><br><br>
            <a href="../index.html">返回</a>
        </center>
    </body>
</html>
