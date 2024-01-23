<?php
include "../../Server/Connect.php";
class DeleteDataServer{
    public $DataID;
    public function __construct(){
        $this->DataID=$_GET["id"];
    }
    public function DeleteData($ID){
        $Result=new Connect();
        $DeleteQuery="delete from data where id=$ID";
        $Result->MyConnect()->exec($DeleteQuery);
        header("location:../index.php?name=root");
    }
}

$Start=new DeleteDataServer();
$Start->DeleteData($Start->DataID);