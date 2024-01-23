<?php
include "Connect.php";
class index
{
    public $SetUser;
    public $SetPassword;
    public function __construct()
    {
        $this->SetUser=$_POST["User"];
        $this->SetPassword=$_POST["Password"];
    }
    public function Data($Username)
    {
        $Result = new Connect();
        $Sql = "select * from data where Username='$Username'";
        $Set = $Result->MyConnect()->query($Sql);
        $Data = $Set->fetchAll();
        if(!$Data)
            header("location:../index.html");
        else{
            foreach ($Data as $query) {
                if(($query["Username"]==$this->SetUser)&&($query["Password"]==$this->SetPassword))
                    header("location:../Result.php?name=$query[Name]");
            }
        }

    }
}

$Wellcome=new index();
if(empty($Wellcome->SetUser)&&empty($Wellcome->SetPassword))
    header("location:../index.html");
else{
    if($Wellcome->SetUser!="aa1236" && $Wellcome->SetPassword!="a32145")
        $Wellcome->Data($Wellcome->SetUser);
    else
        header("location:../../Adminstrator/index.php?name=root");
}
?>