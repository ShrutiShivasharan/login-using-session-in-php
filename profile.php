<?php
include('./connection.php');
session_start();
    // echo "welcome ".$_SESSION['userEmail'];
    $userEmail = $_SESSION['userEmail'];

    $sql = "SELECT * FROM user WHERE email='$userEmail'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    echo "User Name: ".$data['name']."<br><br>";
    echo "User Email: ".$data['email']."<br><br>";
    echo "User Pws: ".$data['password']."<br><br>";
?>

<button onClick="logoutBTN()">Logout</button>

<script>

function logoutBTN(){
    alert("User Logout!!");
    window.location.href = 'logout.php';
}

</script>