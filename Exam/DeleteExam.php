<?php
include "../Server/Connect.php";
class DeleteExam
{
    public function DeleteData(){
        $DeleteID=$_GET["id"];
        $Result=new Connect();
        $Sql="delete from exam where id=$DeleteID";
        $Result->MyConnect()->exec($Sql);
        header("location:../index.html");
    }
}

$Delete=new DeleteExam();
$Delete->DeleteData();