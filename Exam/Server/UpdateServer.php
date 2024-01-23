<?php
include "../../Server/Connect.php";
class UpdateServer{
    public $UpdateName;
    public $UpdateStudent;
    public $UpdateExam;
    public function __construct(){
        $this->UpdateName=$_POST["UpdateName"];
        $this->UpdateStudent=$_POST["UpdateStudent"];
        $this->UpdateExam=$_POST["UpdateExam"];
    }
    public function UpdateExam($Name,$Student,$Exam){
        $Result=new Connect();
        $Sql="update exam set Name='$Name',Student='$Student',Exam='$Exam' where Name='$Name'";
        $Result->MyConnect()->exec($Sql);
        header("location:../../Result.php?name=$Name");
    }
}

$Start=new UpdateServer();
$Start->UpdateExam($Start->UpdateName,$Start->UpdateStudent,$Start->UpdateExam);