<html>
<head>
<title>A BASIC HTML FORM</title>
</head>
<body>

<Form name ="form1" Method ="POST" Action ="submitForm.php">

<INPUT TYPE = 'TEXT' Name ='username' VALUE="<?PHP print $username; ?>">
<INPUT TYPE = "TEXT" VALUE ="password" Name ="password">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">

</FORM>

</body>
</html>
