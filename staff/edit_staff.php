<?php

                if(!isset($_SESSION['email_address'])){

                    echo "
                        <script>
                            window.open('../login.php','_self')
                        </script>
                    ";

                }else{

            ?>
            <?php

                if(isset($_GET['edit_staff'])){

                    $edit_id = $_GET['edit_staff'];

                    $edit_accnt = "select * from tbl_accounts where account_id = '$edit_id'";

                    $run_edit = mysqli_query($con,$edit_accnt);

                    $row_edit = mysqli_fetch_array($run_edit);

                   
                    
                    $e_fname = $row_edit['first_name'];
                    $e_mname = $row_edit['middle_name'];
                    $e_lname = $row_edit['last_name'];
                    $e_email = $row_edit['email_address'];
                    $e_password = $row_edit['password'];
                    
                    
                    $e_image = $row_edit['image'];

                }

            ?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-dashboard"></i>
                Dashboard / Edit Staff
            </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-plus fa-fw"></i>
                    Edit Staff
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            First Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control" required value="<?php echo $e_fname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Middle Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="middle_name" class="form-control" value="<?php echo $e_mname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Last Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="last_name" class="form-control" required value="<?php echo $e_lname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Username
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="email_address" class="form-control" required value="<?php echo $e_email; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Password
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="password" class="form-control" required value="<?php echo $e_password; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    
                 
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="update" value="Update Staff" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?staffs" class="btn btn-danger form-control">
                                Cancel
                            </a>
                        </div>
                    </div><!-- form-group Ends -->
                </form><!-- form-horizontal Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php

    if(isset($_POST['update'])){

       

        $first_name = $_POST['first_name'];
        
        $middle_name = $_POST['middle_name'];
        
        $last_name = $_POST['last_name'];
      

       
        
        $email_address = $_POST['email_address'];
        
        $password = $_POST['password'];
       

        $edit_emp = "update tbl_accounts set  first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name',  image = '', email_address = '$email_address',password = '$password' where account_id = '$edit_id'";

        $run_employer = mysqli_query($con,$edit_emp);

        if($run_employer){

            echo "
                <script>
                    alert('Staff Has Been Updated')
                </script>
            ";

            echo "
                <script>
                    window.open('index.php?staffs','_self')
                </script>
            ";


        }else{

                    echo "
                        <script>
                            alert('Do Not Use Other Characters in Some Fields')
                        </script>
                    ";

                }

    }

?>
<?php

                }

            ?>