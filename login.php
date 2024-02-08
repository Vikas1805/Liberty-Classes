<html>
    <head>
        <title>
            Login
        </title>
        <link rel="stylesheet" a href="css/style.css">
        <link rel="stylesheet" a href="css/loginstyle.css">
    </head>

    <body>
    <body>    
    <div class="nav">
        <h1 class="logo " id="logos"><a href="index.php">LIBERTY CLASSES</a></h1>
            
            <ul class="logo" id="navigation">
                
                <div class="navmenu"><li><a href="features.php"><h3>FEATURES</h2></a></li></div>
                <div class="navmenu"><li><a href="gallery.php"><h3>GALLERY</h3></a></li></div>
                <div class="navmenu"><li><a href="register.php"><h3>REGISTER</h3></a></li></div>
                <div class="navmenu"><li><a href="ebooks.php"><h3>E-BOOKS</h3></a></li></div>
                <div class="navmenu"><li><a href="about.php"><h3>ABOUT US</h3></a></li></div>
                <div class="navmenu " id="loginbut"><li><h3><a href="login.php">Login </a>| <a href=register.php>Register</a></h3></li></div>
            
            </ul>
        
            <!-- <div ><h4 class="login">login</h4></div> -->
        </div>

            <div class="form-area">
                <div class="form-gr">
                <h1 class="login-head lab" style="margin-left: 30%;">Login</h1>
                <form action="homepage.php" method="post">
                    <div class="lab">
                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="lab">
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>

            </div>
    </body>
</html>