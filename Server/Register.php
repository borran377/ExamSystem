<?php
include "Connect.php";
class Register
{
    public $NewName;
    public $NewUser;
    public $NewPasswd;
    public function __construct()
    {
        $this->NewName=$_POST["Name"];
        $this->NewUser=$_POST["User"];
        $this->NewPasswd=$_POST["Password"];
    }
    public function InsertData($Name,$Username,$Password){
        if($this->NewName!="" && $this->NewUser!="" && $this->NewPasswd!=""){
            $Result=new Connect();
            $Insert = "insert into data(Name,Username,Password)values ('$Name','$Username','$Password')";
            $Result->MyConnect()->exec($Insert);
            header("location:/index.html");
        }
        else
            header("location:/Register.html");
    }
}

$RegisterServer=new Register();
$RegisterServer->InsertData($RegisterServer->NewName,$RegisterServer->NewUser,$RegisterServer->NewPasswd);

?>