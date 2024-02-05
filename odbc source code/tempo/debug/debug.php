<?php
    $pass =  $_POST["password"] or die(header("Location:./wrong.html"));
    if ($pass == "17passco") {
        echo '<head> <title>My Webpage Links</title> <style> body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f0f0; text-align: center; padding: 50px; margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh; } h1 { color: #333; } ul { list-style-type: none; padding: 0; margin: 20px 0; } li { margin: 10px; display: inline-block; width: 30%; /* Each button takes up 30% of the container width */ } a { text-decoration: none; color: #fff; background-color: #4285f4; padding: 15px; border-radius: 5px; display: block; transition: background-color 0.3s ease; } a:hover { background-color: #0d47a1; } .container { max-width: 600px; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); } </style> </head> <body> <div class="container"> <h1>My Webpage Links</h1> <ul> <li><a href="../../index.html">Homepage</a></li> <li><a href="../../forms/questionnaire.html">Questionnaire</a></li> <li><a href="../../forms/concept.html">Concept</a></li> <li><a href="../../tempo/error.html">Error</a></li> <li><a href="../../tempo/tempo.html">Successful</a></li> <li><a href="./debug.html">Dev Window</a></li> </ul> </div> </body>';

    }
    else{
        header("Location:./wrong.html");
    }
?> 