<?php
   if (isset($_POST['Submit1'])) {

$username = $_POST['username'];

if ($username == "letmein") {

print ("Welcome back, friend!");

}
else {

print ("You're not a member of this site");

}

}
else {

$username ="";

}


    ?>
