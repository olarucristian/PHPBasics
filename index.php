<html>
<head>
    <title>Login Page</title>

    <?php
    if ( isset( $_POST['Submit1'] ) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        //print("<b>Your entered username is:</b> ". $username. " <b><br>Your entered password is: </b>". $password);

        // add users
        switch ($username.$password)
        {
            case 'olaru'.'0':
                print('<br>Welcome');
                break;
            case 'olaru1'.'1':
                print('<br>Welcome');
                break;
            case 'olaru2'.'2':
                print('<br>Welcome');
                break;
            case 'olaru3'.'3':
                print('<br>Welcome');
                break;
            case 'olaru4'.'4':
                print('<br>Welcome');
                break;
            default:
                print("<br> Not correct username or password");

        }}


    ?>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION = "index.php">

    <INPUT TYPE = "TEXT" VALUE ="username" NAME = "username">
    <INPUT TYPE = "TEXT" VALUE = "password" NAME = "password">
    <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">



</FORM>

</body>
</html>