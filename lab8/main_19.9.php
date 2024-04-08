<!-- CSI 3140 - WWW -->
<!-- Lab 8 -->
<!-- @StevenWilson & @EdgarAcosta -->
<!DOCTYPE html>
<html>
<head>
    <title>Url database</title>
</head>
<body>
    <h1>URL database</h1>
    <form action="main_19.9.php" method="post">
        <label>URL:</label> 
            <input type="text" name="url"><br>
        <label>Description:</label>
            <input type="text" name="description"><br>
        <input type="submit" value="Submit">
    </form>
<?php
    $url = isset($_POST["url"]) ? $_POST["url"] : "";
    $description = isset($_POST["description"]) ? $_POST["description"] : "";
    $iserror = false;
    $formerrors =
        array("urlerror" => false, "descriptionerror" => false);
    $inputlist =
        array("url" => "Website", "description" => "information");
    if(isset($_POST["submit"])){
        if (!(filter_var($url, FILTER_VALIDATE_URL))) {
            $formerrors["urlerror"] = true;
            $iserror = true;
        }
        if($url == ""){
            $formerrors["urlerror"] = true;
            $iserror = true;
        }
        if($description == ""){
            $formerrors["descriptionerror"] = true;
            $iserror = true;
        }
        if(!$iserror){
            $query = "INSERT INTO Urltable(url, description) VALUES ($url, $description)";

            if(!($database = mysqli_connect("localhost","iw3htp","password")))
            die("<p>Could not connect to database</p>");

            if(!mysqli_select_db($database, "URL"))
            die("<p>Could not open URL</p>");
            
            if(!($result = mysqli_query($database,$query))){
                print("<p>Could not execute query</p>");
                die();
            }
            mysqli_close($database);
            die();
        }
    }
?>
</body>
</html>