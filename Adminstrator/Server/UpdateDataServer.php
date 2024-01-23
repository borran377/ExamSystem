<?php
include "../../Server/Connect.php";
class UpdateDataServer
{
    public $DataID;
    public $DataName;
    public $DataUsername;
    public $DataPassword;
    public function __construct()
    {
        $this->DataID=$_GET["id"];
        $this->DataName=$_POST["UpdateName"];
        $this->DataUsername=$_POST["UpdateUsername"];
        $this->DataPassword=$_POST["UpdatePassword"];
    }

    public function UpdateData($id,$name,$username,$password){
        $Result=new Connect();
        $UpdateQuery="update data set Name='$name',Username='$username',Password='$password' where id=$id";
        $Result->MyConnect()->exec($UpdateQuery);
        header("location:../index.php?name=root");
    }
}

$Start=new UpdateDataServer();
$Start->UpdateData($Start->DataID,$Start->DataName,$Start->DataUsername,$Start->DataPassword);