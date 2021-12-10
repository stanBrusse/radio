<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<style>
.fm{
    background-color: red;
    height: 100px;
    width: 100%;
}
</style>
<body>
<?php 

$_SESSION['loggedIn'] = false;
$host = "gc-webhosting.nl";
$dbuser = "sbrusse_radio";
$dbpass = "wachtwoordvoorderadio";
$dbname = "sbrusse_radioGebruikers";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if( $_SESSION['loggedIn'] == false)
{
    // $sql = $pdo->prepare("SELECT * FROM users");
    // $sql->bindParam(1, $_SESSION['lidnummer']);
    // $sql->execute();

    echo "<div class='fm'>";
    echo "101.9";
    echo "</div>";
}else{
    // echo "<div id='inloggen'>";

}

/*
if (headers_sent()) {
        die("Redirect failed. Please click on this link: <a href=../pages/index.php");
        }
        else{
        exit(header("location:index.php"));
        } 
        */ 
?>



    
</body>
</html>