<?php
// print_r($_REQUEST);
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$mobileNumber=$_REQUEST['mobileNumber'];
$birthday=$_REQUEST['birthday'];
$nicNumber=$_REQUEST['nicNumber'];
$positionApply=$_REQUEST['positionApply'];
$lastcompany=$_REQUEST['lastcompany'];
$lasttittle=$_REQUEST['lasttittle'];
$lastsalary=$_REQUEST['lastsalary'];
$experience=$_REQUEST['experience'];
$accNumber=$_REQUEST['accNumber'];
$accName=$_REQUEST['accName'];
$bankName=$_REQUEST['bankName'];
$branch=$_REQUEST['branch'];
$notes=$_REQUEST['notes'];

// DATA INSERT TO TABLE---------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lara53";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO people (name, address, email, mobileNumber, birthday, nicNumber, positionApply, lastcompany, lasttittle, lastsalary, experience, accNumber, accName, bankName, branch, notes)
VALUES ("."'".$name."'".","."'".$address."'".", "."'".$email."'".","."'".$mobileNumber."'".","."'".$birthday."'".","."'".$nicNumber."'".","."'".$positionApply."'".","."'".$lastcompany."'".","."'".$lasttittle."'".","."'".$lastsalary."'".","."'".$experience."'".","."'".$accNumber."'".","."'".$accName."'".","."'".$bankName."'".","."'".$branch."'".","."'".$notes."'".")";

if ($conn->query($sql) === TRUE) {
    echo "You have been registered successfully! our team will contact you if you're selected to work with us.";
    header("Refresh:5; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

// echo '<pre>';
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
    // echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

// echo 'Here is some more debugging info:';
// print_r($_FILES);

// print "</pre>";

// $conn->close();
?>
