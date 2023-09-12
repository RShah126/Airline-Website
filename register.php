<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="welcomedesign.css">  
</head>
    <body id = "bg_reg">
        <img src="airlinelogo.png" width="376.25" height="76.75">
        
        <nav>
        <ul>
        <li><a href="main.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="login.php">Login</a></li>
        </ul>
        </nav>
        <h2> Register now! At GoFar Airlines </h2>

        <form action = "sqlstoreaccount.php" method = "post" >
            <input type = "text" id = "Name" name = "GetName" value = "Username" ><br><br>
            <input type = "text" id = "Password" name = "GetPassword" value = "Password" ><br><br>
            <input type = "text" id = "Age" name = "GetAge" value = "Age"><br><br>
            <input type = "submit" id = "submit" value = "Register" ><br><br>
            <a href="login.php">Already Registered?</a><br>
                <style>
                    body{
                        background-color: white;
                    }
                    #Name {
                        position: absolute;
                        
                    }
                    #bg_reg{
                        background-image: url('a.jpg');
                        background-size: cover;
                        background-repeat: no-repeat;
                    }

                    #Age {
                        position: absolute;
                       
                   }
                   #submit {
                        position: absolute;
                        
                   }
                   #Password {
                        position: absolute;
                        
                   }
                   .bg_reg {
	                    background-image: url('c.png');
                    }
                    ul {

                    }
                </style>
        </form> 
    </body>
</html>