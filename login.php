<?php
include('./connection.php');
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    $total = mysqli_num_rows($result);
    if($total > 0){
       $row = mysqli_fetch_assoc($result);
        if($password === $row['password']){
            // echo "Login Successful!!";
            $_SESSION['userEmail'] = $email;
            header('location:profile.php');
        }else{
            echo "login Failed!!";
        }
    }
}

?>

<h1>Login User</h1>
<form method="POST" action=""> 
    User Email : <input type="text" name="email" /><br><br>
    User PWS : <input type="text" name="password" /><br><br>
    <button type="submit" name="submit">Submit</button>
</form>