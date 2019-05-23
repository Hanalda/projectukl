<?php ?>
<!DOCTYPE html>
<html lang="en">
<!--untuk menyatakan bahasa yang digunakan (en untuk bahasa inggris)-->
<head>
    <link rel="stylesheet" href="../login/style.css">
    <script src="../login/validasi.js"></script>
        <title>L O G I N</title>
</head>
<body onload="myFunction()">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
    <div class="login">
        <h2 class="login-header">ARJUNA'S CAR LOGIN</h2>
        <form action="login.php" method="post" class="animate-bottom">
        <p>
            <input type="text" name="username" placeholder="Username" id="username">
        </p>
        <p>
            <input type="password" name="password" placeholder="Password" id="password">
        </p>
        <p>
            <input type="submit" name="submit" value="LOGIN HERE" onclick="return validasiLogin()">
        </p>
        </form>
        <script>
        var myVar;
        function myFunction(){
            myVar = setTimeout(showPage, 500);
        }
        function showPage(){
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
        </script>
    </div> 
</body>
</html>