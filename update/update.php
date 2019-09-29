
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Employees</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: white;">
    <div class="main">

        <div class="container" >
            <div class="signup-content">
                <div class="signup-form" style="width: 100%;">
                    <form method="POST" action = "update1.php" class="register-form" id="register-form">
                        <div class="form-row" >
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Experience</label>
                                    <input type="number" name="exp" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Email ID</label>
                                    <input type="text" name="emailid" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Password</label>
                                    <input type="Password" name="pass" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phoneno" />
                                </div>
                            </div>
                            <div class="form-group">
                               
                                    <div class="form-input">
                                        <label for="meal_preference">Department</label>
                                        <input type="number" name="deptno" min="1" max="9" id="chequeno" />
                                    </div>
                                
                                <div class="form-input">
                                    <label for="chequeno">Address</label>
                                    <input type="text" name="address" />
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Bank Name</label>
                                    <input type="text" name="bank" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Account No.</label>
                                    <input type="number" name="accntno" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Degree</label>
                                    <input type="text" name="degree" />
                                </div>


                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="chequeno">Date Of Birth</label>
                                    <input type="Date" name="dob" />
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Manager ID</label>
                                    <input type="number" name="manid"  />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Designation</label>
                                    <input type="text" name="design"  />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Salary</label>
                                    <input type="number" name="salary" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>