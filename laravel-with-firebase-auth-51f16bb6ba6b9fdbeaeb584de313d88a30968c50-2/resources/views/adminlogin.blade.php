<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="adminlogin.css">


</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="https://cdn-icons-png.flaticon.com/512/147/147144.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="admin" >
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="admin username">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd 
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>-->

        </div>
    </div>
    <!--
    <form action="admin">
        <input id="adminUserName">
        <input type="password" name="adminPassword" id="adminPassword">
        <button type="submit">Admin Login</button>
        <a href="admin" id="admin"></a>
    </form>

    <script>
        var username = "admin";
        var password = "admin";

        function getAdminInfo() {
            var adminUserName = document.getElementById("adminUserName").value
            var adminPassword = document.getElementById("adminPassword").value
            //var aEtiket = document.getElementById("admin").value


            if (adminUserName == username && adminPassword == password) {
                console.log(adminUserName + "admin girişi başarılı")
            }
            console.log("hatalı giriş")
        }
    </script>
    -->
</body>

</html>