<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Project</title>
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <div class="container">
    <div class="form-box">
    <h1 class="title">Registration</h1>
    <form action="db.php" method="post">
        <div class="input-group">
            
         
            <div class="input-field nameField">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Name" name="name">
            </div><!--end input field-->

            <div class="input-field">
            <i class="fa-solid fa-at"></i>
            <input type="email" placeholder="Email" name="email">
            </div><!--end input field-->

            <div class="input-field contField">
            <i class="fa-solid fa-address-card"></i>
            <input type="contact" placeholder="Contact" name="contact">
            </div><!--end input field-->

            <div class="input-field">
            <i class="fa-solid fa-key"></i>
            <input type="pass" placeholder="Password" name="password">
            </div><!--end input field-->

            <div class="input-field conField">
            <i class="fa-regular fa-circle-check"></i>
            <input type="confirm" placeholder="Confirm Password" name="confirm password">
            </div><!--end input field-->
            <p><b><span class="text">Password suggetions</span><a href="#"> Click here!</a></b></p>
        </div><!--end input group-->

        
        <div class="btn-field">
            <button type="submit" class="regbtn">Registration</button>
            <button type="button" class="disable logbtn">Login</button>
        </div><!--end btn field-->
        <!--<button type="submit" class="btn-submit">Submit</button>-->
    </form>
    </div><!--end form box-->
    </div><!--end container-->
    <script src="script.js"></script>
</body>
</html>