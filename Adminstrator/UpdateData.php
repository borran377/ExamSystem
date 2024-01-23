<?php
    @$UpdateID=$_GET["id"];
    @$UpdateName=$_GET["name"];
    @$UpdateUsername=$_GET["username"];
    @$UpdatePassword=$_GET["password"];
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>更新第<?php echo $UpdateID;?>位Data</title>
    </head>
    <style>
        body{
            background-color: bisque;
        }
        a{
            font-size: 20pt;
        }
    </style>
    <body>
        <h1 style="text-align: center">第<?php echo $UpdateID;?>位</h1><br>
        <center>
            <form action="Server/UpdateDataServer.php?id=<?php echo $UpdateID;?>" method="post">
                <h1>UpdateName:<input type="text" name="UpdateName" value="<?php echo $UpdateName;?>" style="font-size: 20pt;"></h1><br>
                <h1>UpdateUsername:<input type="text" name="UpdateUsername" value="<?php echo $UpdateUsername;?>" style="font-size: 20pt;"></h1><br>
                <h1>UpdatePassword:<input type="password" name="UpdatePassword" value="<?php echo $UpdatePassword;?>" style="font-size: 20pt;"></h1><br>
                <button type="submit"><div style="font-size: 20pt;">UpdateData</div></button>
                <a href="index.php?name=<?php echo $UpdateName;?>">返回</a>
            </form>
        </center>
    </body>
</html>