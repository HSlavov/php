<?php
 
$pageTitle='Вход';
include 'header.php';
 
 require('admin/db/connect.php');

if (array_key_exists('username', $_SESSION)) {
    header('Location: index.php');
    exit;
}

 
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT username,password FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
    header('Location: index.php');

 
}else{
 }

?>

            <form method="POST">
                <div>
                    Име:<input type="text" name="username">
                </div>
                <div>
                    Парола:<input type="password" name="password">
                </div>
                <div>
                    <input type="submit" value="Вход">
                </div>
            </form>
        </div>
    </body>
</html>

