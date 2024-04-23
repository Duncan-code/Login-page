<?php
include("connection.php");
?>                                                                                                                                                                                                
<!DOCTYPE html>
<html>
    <head>
        <tittle></tittle>
        <link rel="stylesheet" type="text/css" href="styl.css">
        <script type=" text/javascript">
function Alert() {
    alert("Visit admin for assistance!");
}
        </script>
    </head>
    <body>
        <h3 align="center">KUEHNE + NAGEL</h3>
        <p align="center">Staff's attendance portal</p>
        <p align="center">Dear staff provide the below details to log into your portal.
        <div id="form">
            <h1>login</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>username:</label>
                <input type="text" id="user" name="user"><br></br>
                <label>password:</label>
                <input type="password" id="pass" name="pass"><br></br>
                <input type="submit" id="btn" value="login" name="submit"> <input type="reset" style="color:red" id="mmm" value="cancel" name="reset"><br><br>
                <button onclick="Alert()" style="color:aqua">forgot password?</button>
</div>    
<script>
    function isvalid(){
        var user = document.form.user.value;
        var pass = document.form.pass.value;
        if(user.length=="" $$ pass.length==""){
            alert("username and password field is empty");
            return false
        }
        else{
    if(user.length==""){
        alert("user field is empty");
        return false
    }
    if(pass.length==""){
        alert("password field is empty");
        return false
    }
}

    }
</script>
            </body>
    </html>