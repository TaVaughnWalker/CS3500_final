<?php

# Ensure the user arrived at signup.php properly.
if (isset($_POST["submit"])) 
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'utils.inc.php';

    # Validate that all fields are fullfilled.
    if (emptyInputSignup() !== false)
    {
        # If the value is anything besides false this error will be throw.
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
}
# Redirect to signup page if the user arrived here inproperly.
else {
    header("location: ../signup.php");
    exit();
}