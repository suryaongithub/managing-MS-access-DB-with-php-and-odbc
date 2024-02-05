<?php

$way = $_SERVER["REQUEST_METHOD"];
echo $way;


$question = $_POST["question"];
$concept = $_POST["concept"];
$chapter = $_POST["chapter"];
$dificulty = $_POST["difficulty"];
$subject = $_POST["subject"];
$answer = $_POST["answer"];

// echo $question,$concept,$chapter,$dificulty,$subject,$answer;

// echo "<br>";

$con = odbc_connect("studies","","");

if($con) {
    // echo "Connected";
    // echo "<br>";
}
else
{
    echo "failed";
}

if($answer == "YES"){
$var = [$question,$concept,$chapter,$dificulty,$subject,TRUE];

$sql="INSERT INTO questionnaire (question,concept,chapter,subject,difficulty,answered) VALUES('" .$question. "','". $concept . "',".$chapter. ",'".$subject. "',".$dificulty. ",1)";


}
else{
    $sql="INSERT INTO questionnaire (question,concept,chapter,subject,difficulty,answered) VALUES('" .$question. "','". $concept . "',".$chapter. ",'".$subject. "',".$dificulty. ",0)";
}
if(odbc_exec($con,$sql)){
    echo $sql;
    header('Location: ../tempo/tempo.html');
}
else{
    header("Location:../tempo/error.html");
}