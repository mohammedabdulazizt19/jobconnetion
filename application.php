<?php

    include("include/db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="images/title.ico">
	<title>YARAMAY Computer Maintenance Services</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="navbar"><!-- navbar navbar-default Starts -->
        <div class="container"><!-- container Starts -->
            <div class="navbar-header"><!-- navbar-header Starts -->
                <a class="navbar-brand home" href="index.php"><!-- navbar navbar-brand home Starts -->
                    <img src="images/logo.png" alt="my logo" class="hidden-xs" />
                    <img src="images/logo-2.png" alt="my logo" class="visible-xs"/>
                </a><!-- navbar navbar-brand home Ends -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">
                        Toggle Navigation
                    </span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div><!-- navbar-header Ends -->
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Start -->
                <div class="padding-nav"><!-- padding-nav Start -->
                    <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Start -->
                        <li> 
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="index.php#services">
                                Services
                            </a>
                        </li>
                        <li class="active">
                            <a href="application.php">
                                Application
                            </a>
                        </li>
                        <li>
                            <a href="login.php">
                                Processing
                            </a>
                        </li>
                        <li>
                            <a href="employer_monitor/login.php">
                               Employer Monitor
                            </a>
                        </li>
                        
                        <li>
                            <a href="index.php#about">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="index.php#contact">
                               Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="rescue_mission.php">
                               Rescue Mission
                            </a>
                        </li>
                    </ul><!-- nav navbar-nav navbar-left Start -->
                </div><!-- padding-nav Ends -->
			</div><!-- navbar-collapse collapse Ends -->
        </div><!-- container Ends -->
    </div><!-- navbar navbar-default Ends -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2>
                            Application Form
                        </h2>
                    </center>
                </div>
                <form action="" method="post" class="form-horizontal"><!-- form Starts -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position1">
                                Position 1
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position1" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)' required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position2">
                                Position 2
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="position2" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)'>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position3">
                                Position 3
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position3" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)'>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">
                                First Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="first_name" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)' required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="middle_name">
                                Middle Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="middle_name" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)'>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">
                                Last Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" maxlength="70" minlength="2" onkeypress='return isAlphaKey(event)' required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="age">
                                Age
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="age" required onkeypress='return isNumericKey(event)' maxlength="2" minlength="2">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="gender">
                                Gender
                            </label>
                            <div class="col-sm-8">
                                <select name="gender" class="form-control">
                                    <option name="gender" value="Male">
                                        Male
                                    </option>
                                    <option name="gender" value="Female">
                                        Female
                                    </option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="contact_number">
                                Contact Number
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="contact_number" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email_address">
                                Email Address
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email_address" maxlength="150" minlength="5" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="address">
                                Address
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" rows="4" maxlength="200" minlength="5" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_place">
                                Birth Place
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="birth_place" rows="3" maxlength="200" minlength="5" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_date">
                                Birth Date
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="birth_date" required>
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="civil_status">
                                Civil Status
                            </label>
                            <div class="col-sm-8">
                                <select name="civil_status" class="form-control">
                                    <option name="civil_status" value="Single">
                                        Single
                                    </option>
                                    <option name="civil_status" value="Married">
                                        Married
                                    </option>
                                    <option name="civil_status" value="Divorced">
                                        Divorced
                                    </option>
                                    <option name="civil_status" value="Widowed">
                                        Widowed
                                    </option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="height">
                                Height
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="height" minlength="2" maxlength="10" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="weight">
                                Weight
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="weight" minlength="2" maxlength="10" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="blood_type">
                                Blood Type
                            </label>
                            <div class="col-sm-8">
                                <select name="blood_type" class="form-control">
                                    <option name="blood_type" value="A+">
                                        A+
                                    </option>
                                    <option name="blood_type" value="A-">
                                        A-
                                    </option>
                                    <option name="blood_type" value="B+">
                                        B+
                                    </option>
                                    <option name="blood_type" value="B-">
                                        B-
                                    </option>
                                    <option name="blood_type" value="AB+">
                                        AB+
                                    </option>
                                    <option name="blood_type" value="AB-">
                                        AB-
                                    </option>
                                    <option name="blood_type" value="O+">
                                        O+
                                    </option>
                                    <option name="blood_type" value="O-">
                                        O-
                                    </option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="religion">
                                Religion
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="religion" minlength="2" maxlength="70">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="language_spoken">
                                Language Spoken
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="language_spoken" minlength="3" maxlength="200" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="father_name">
                                Father Name
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="father_name" minlength="3" maxlength="210">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="mother_name">
                                Mother Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mother_name" minlength="3" maxlength="210">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="passport_number">
                                Passport Number
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="passport_number" maxlength="9" minlength="9" required>
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="date_issue">
                                Date Issue
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_issue" required>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="place_issue">
                                Place Issue
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="place_issue" rows="4" maxlength="200" minlength="5" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="col-md-6">
                <p class="pull-left">
                    Copyright &copy; 2018 <br>
                    <b>YARAMAY Computer Maintenance Services</b> <br>
                    All Rights Reserved
                </p>
            </div>
        </div>
    </div>
    <?php

            if(isset($_POST['submit'])){
        
            $position1 = mysqli_real_escape_string($con,$_POST['position1']);
            $position2 = mysqli_real_escape_string($con,$_POST['position2']);
            $position3 = mysqli_real_escape_string($con,$_POST['position3']);
            $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
            $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
            $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
            $age = mysqli_real_escape_string($con,$_POST['age']);
            $gender = mysqli_real_escape_string($con,$_POST['gender']);
            $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $email_address = mysqli_real_escape_string($con,$_POST['email_address']);
            $address = mysqli_real_escape_string($con,$_POST['address']);
            $birth_place = mysqli_real_escape_string($con,$_POST['birth_place']);
            $birth_date = mysqli_real_escape_string($con,$_POST['birth_date']);
            $civil_status = mysqli_real_escape_string($con,$_POST['civil_status']);
            $height = mysqli_real_escape_string($con,$_POST['height']);
            $weight = mysqli_real_escape_string($con,$_POST['weight']);
            $blood_type = mysqli_real_escape_string($con,$_POST['blood_type']);
            $religion = mysqli_real_escape_string($con,$_POST['religion']);
            $language_spoken = mysqli_real_escape_string($con,$_POST['language_spoken']);
            $father_name = mysqli_real_escape_string($con,$_POST['father_name']);
            $mother_name = mysqli_real_escape_string($con,$_POST['mother_name']);
            $passport_number = mysqli_real_escape_string($con,$_POST['passport_number']);
            $date_issue = mysqli_real_escape_string($con,$_POST['date_issue']);
            $place_issue = mysqli_real_escape_string($con,$_POST['place_issue']);
            
            $name_of_applicant = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);

            function random_code($length = 5){
                                          
                $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

                $shuffled = substr( str_shuffle( $str ), 0, $length );

                return $shuffled;
                                                        
            }    

            $applicant_code = random_code(14);
            $insert_applicant = "insert into tbl_applicants (applicant_code,position1,position2,position3,position_desired,first_name,middle_name,last_name,age,gender,contact_number,email_address,address,birth_place,birth_date,civil_status,height,weight,blood_type,religion,language_spoken,father_name,mother_name,passport_number,date_issue,place_issue,employer_id,agent_id,created_by,date_created,date_hired,date_arrival,date_signed,owwa_sched,biometric_sched,cv_sent,status_abroad,visa_number,remarks,status) values ('$applicant_code','$position1','$position2','$position3','','$first_name','$middle_name','$last_name','$age','$gender','$contact_number','$email_address','$address','$birth_place','$birth_date','$civil_status','$height','$weight','$blood_type','$religion','$language_spoken','$father_name','$mother_name','$passport_number','$date_issue','$place_issue','0','0','',now(),'0000-00-00','0000-00-00','0000-00-00','','','','','','','1')";

            $run_applicant = mysqli_query($con,$insert_applicant);

            if($run_applicant){

                echo "
                    <script>
                        alert('Your Application Has Been Successfully Submitted')
                    </script>
                ";

                echo "
                    <script>
                        window.open('index.php','_self')
                    </script>
                ";

            }else{

                    echo "
                        <script>
                            alert('Error Submitting Application')
                        </script>
                    ";

                }

        }


    ?>

    <script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

     function isAlphaKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return true;

        return false;
    }

    </script>
 	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>