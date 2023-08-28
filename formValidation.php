<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" onSubmit="return validateform()">
        <div>Signup</div>
        <div>Username: <input type="text" name="un" id="un" required minlength="6"></div>
        <div>Password: <input type="Password" name="pw" id="pw" required></div>
        <!-- HTML validation email -->
        <div>Email1: <input type="email" name="email1" required></div>
        <!-- javasript Validation email -->
        <div>Email2: <input type="text" name="email2" id="email2"></div>
        <div><input type="Submit" value="Signup" name="Submit"></div>
        <div id="emailError"></div>
</form>
<script> 
function validateform(){
    var emailRegex = /[A-za-z0-9]+@[A-za-z0-9]+.[A-za-z]{2,3}/;
    // var emailRegex = new RegExp("[A-za-z0-9]+@[A-za-z0-9].[A-za-z]{2,3}");
 var email2 = document.getElementById('email2').value
 if(emailRegex.test(email2)){
return true
 }
 else{
    document.getElementById("email2").innerHTML = "Invalid email";
    return false;
 }

}
</script> 

</body>
</html>