<?php
include "../../Server/Connect.php";
class InsertServer
{
    public $Name;
    public $Student;
    public $Number;
    public function __construct()
    {
        $this->Name=$_POST["Name"];
        $this->Student=$_POST["Student"];
        $this->Number=$_POST["Number"];
    }
    public function InsertExam($SetName,$SetStudent,$SetNumber){
        $Result=new Connect();
        $InsertSql="insert into exam(Name,Student,Exam)values ('$SetName','$SetStudent','$SetNumber')";
        $Result->MyConnect()->exec($InsertSql);
        header("location:../../Result.php?name=$SetName");
    }
}
$Start=new InsertServer();
$Start->InsertExam($Start->Name,$Start->Student,$Start->Number);
