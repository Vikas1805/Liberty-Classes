<html>
    <head>
        <title>
            Registration
        </title>
        <link rel="stylesheet" a href="css/regcs.css">
        <link rel="stylesheet" a href="css/style.css">
    </head>

    <body class="regbody">
        <div>
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
                    <h1 class="rhead">Student Registration Form</h1><br>
                    <form action="register_process.php" method="POST">
                        <label for="first_name">First Name:</label><br>
                        <input type="text" name="first_name" id="first_name" class="field" required><br><br>
                
                        <label for="last_name">Last Name:</label><br>
                        <input type="text" name="last_name" id="last_name" class="field" required><br><br>
                
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id="email" class="field" required><br><br>
                
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" id="password" class="field" required><br><br>
                
                        <label for="confirm_password">Confirm Password:</label><br>
                        <input type="password" name="confirm_password" id="confirm_password" class="field"required><br><br>
                
                        <label for="date_of_birth">Date of Birth:</label><br>
                        <input type="date" name="date_of_birth" class="field" id="date_of_birth"><br><br>
                
                        <label for="gender">Gender:</label><br>
                        <select name="gender" class="field" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select><br><br>

                        <label for="Class">Select Class</label><br>
                        <select name="class" class="field" id="class">

                            <option value="8">8</option>
                            <option value="8">9</option>
                            <option value="8">10</option>
                            <option value="8">11</option>
                            <option value="8">12</option>
                        </select><br><br>
                
                        <label for="course">Select Course:</label><br>
                        <select name="course" class="field" id="course">
                            
                            <option value="Science">Science</option>
                            <option value="PCM">PCM</option>
                            <option value="PCB">PCB</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Humanities">Humanities</option>
                            <option value="Arts">Arts</option>
                        </select><br><br><br><br>
                
                        <button type="submit" value="Register" style="width:50%; height:50px; margin:1% 25% 5% 25%;">Register</button>
                    </form>

                </div>
        </div>
    </body>
</html>