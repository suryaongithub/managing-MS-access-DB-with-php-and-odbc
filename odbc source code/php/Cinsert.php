<?php
echo $_SERVER['REQUEST_METHOD'];

$concept = $_POST["concept"];
$subject = $_POST["subject"];
$time = $_POST["time"];
$remark = $_POST["remark"];
$chapter = $_POST["chapter"];
$difficulty = $_POST["difficulty"];

// Establish connection
$con = odbc_connect("studies","","");

if($con) {
    echo "Connected";
    echo "<br>";
}
else
{
    echo "failed";
}
$sql="INSERT INTO concept (concept,subject,difficulty,chapter,time_req,remark) VALUES('$concept','$subject',$difficulty,$chapter,'$time','$remark')";

if(odbc_exec($con,$sql)){
    echo $sql;
    header('Location: ../tempo.html');
}
else{
    header("Location:../error.html");
}

?>