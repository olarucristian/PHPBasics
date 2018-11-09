<html>
<head>
    <title>Login Page</title>

    <?php
    if ( isset( $_POST['Submit1'] ) ) { }
    $username = $_POST['username'];
    $password = $_POST['password'];
    print("<b>Your entered username is:</b> ". $username. " <b><br>Your entered password is: </b>". $password);

        if ($username =="olaru" AND $password =="123")
        {
            print "<br>Welcome back my friend";
        }
        else if ($username =="username" AND $password=="password")
        {
            print ("<br>Introduce some data please !");
        }
        else
            print ("<br>Your data is not correct!")


    ?>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION = "basicForm.php">

    <INPUT TYPE = "TEXT" VALUE ="username" NAME = "username">
    <INPUT TYPE = "TEXT" VALUE = "password" NAME = "password">
    <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">



</FORM>

</body>
</html>

