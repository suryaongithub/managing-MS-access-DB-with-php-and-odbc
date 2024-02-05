<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }


        h2 {
            color: #333;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            text-align: left;
            padding: 12px; 
            border: 1px solid #00000056;
        }

        th {
            background-color: #f0f0f0;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    
    <table id="questionTable">
        <thead>
            <tr>
                <th>Question</th>
                <th>Concept</th>
                <th>Chapter</th>
                <th>Subject</th>
                <th>Difficulty</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

    <script>
        // add another line in the table
        function add(q, c, ch, s, d) {
            var t = document.getElementById('questionTable');
            var ln = t.insertRow(-1);
            
            ln.insertCell(0).innerHTML=q;
            ln.insertCell(1).innerHTML=c;
            ln.insertCell(2).innerHTML=ch;
            ln.insertCell(3).innerHTML=s;
            ln.insertCell(4).innerHTML=d;

            // console.log(q[0]);
            // console.log(q[1]);
            // console.log(q[2]);
            // console.log(q[3]);
            // console.log(q[4]);

            console.log(q)

            return "done";

        }

    </script>

</body>
</html>

<?php
$subject = "'" . $_POST["subject"] . "'";
// $subject = "'"."TTT"."'";
$concept = "'" . $_POST["concept"] . "'";
$difficulty = (int) $_POST["difficulty"];

$con = odbc_connect("studies", "", "");

if ($con) {
    if (strlen($concept) > 2) {
        if ($subject == "'All'") {
            $sql = "SELECT * FROM questionnaire WHERE concept=$concept AND difficulty >= $difficulty ";
            $result = odbc_exec($con, $sql);

            while ($row = odbc_fetch_array($result)) {
                $q = "'" . $row["question"] . "'";
                $c = "'" . $row["concept"] . "'";
                $d = "'" . $row["difficulty"] . "'";
                $ch = "'" . $row["chapter"] . "'";
                $s = "'" . $row["subject"] . "'";

                echo "<script> add($q,$c,$ch,$s,$d)</script>";
            }
        } else {
            $sql = "SELECT * FROM questionnaire WHERE subject=$subject AND concept=$concept AND difficulty >= $difficulty";
            $result = odbc_exec($con, $sql);

            while ($row = odbc_fetch_array($result)) {
                $q = "'" . $row["question"] . "'";
                $c = "'" . $row["concept"] . "'";
                $d = "'" . $row["difficulty"] . "'";
                $ch = "'" . $row["chapter"] . "'";
                $s = "'" . $row["subject"] . "'";

                echo "<script> add($q,$c,$ch,$s,$d)</script>";
            }
        }
    } else {
        if ($subject == "'All'") {
            $sql = "SELECT * FROM questionnaire WHERE difficulty >= $difficulty";
            $result = odbc_exec($con, $sql);

            while ($row = odbc_fetch_array($result)) {
                $q = "'" . $row["question"] . "'";
                $c = "'" . $row["concept"] . "'";
                $d = "'" . $row["difficulty"] . "'";
                $ch = "'" . $row["chapter"] . "'";
                $s = "'" . $row["subject"] . "'";

                echo "<script> add($q,$c,$ch,$s,$d)</script>";
            }
        } else {
            $sql = "SELECT * FROM questionnaire WHERE subject=$subject AND difficulty >= $difficulty";
            $result = odbc_exec($con, $sql);

            while ($row = odbc_fetch_array($result)) {
                $q = "'" . $row["question"] . "'";
                $c = "'" . $row["concept"] . "'";
                $d = "'" . $row["difficulty"] . "'";
                $ch = "'" . $row["chapter"] . "'";
                $s = "'" . $row["subject"] . "'";

                echo "<script> add($q,$c,$ch,$s,$d)</script>";
            }
        }
    }
} else {
    die("Could not connect: " . mysql_error());
}
?>
    
  