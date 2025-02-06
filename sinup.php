<?php
include('./connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into user (name, email, password) values ('$name', '$email' ,'$password')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "user signup Successfully!!";
    }else{
        echo "User signup error";
    }
}

?>

<h1>Sinup User</h1>
<form method="POST" action="">
    User Name : <input type="text" name="name" /><br><br>
    User Email : <input type="text" name="email" /><br><br>
    User PWS : <input type="text" name="password" /><br><br>
    <button type="submit" name="submit">Submit</button>
</form>