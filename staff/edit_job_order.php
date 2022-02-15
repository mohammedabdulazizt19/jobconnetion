
            <?php

                if(isset($_GET['edit_job_order'])){

                    $edit_id = $_GET['edit_job_order'];

                    $edit_accnt = "select * from tbl_jo where jo_no = '$edit_id'";

                    $run_edit = mysqli_query($con,$edit_accnt);

                    $row_edit = mysqli_fetch_array($run_edit);

                   
                    
                    $e_name = $row_edit['jo_name'];
                    $e_contact = $row_edit['jo_contact'];
                    $e_email = $row_edit['jo_email'];
                    $e_password = $row_edit['jo_password'];
                

                }

            ?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-dashboard"></i>
                Dashboard / Edit Job Order
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
                    Edit Job Order
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="jo_name" class="form-control" required value="<?php echo $e_name; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Contact Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" value="<?php echo $e_contact; ?>">
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
                            <input type="submit" name="update" value="Update Job Order" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?job_order" class="btn btn-danger form-control">
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

       

        $name = $_POST['jo_name'];
        
        $contact = $_POST['contact_number'];
        
        $username = $_POST['email_address'];
        $pass = $_POST['password'];
       

        $edit_emp = "update tbl_jo set  jo_name = '$name', jo_contact = '$contact', jo_email = '$username', jo_password = '$pass' where jo_no = '$edit_id'";

        $run_employer = mysqli_query($con,$edit_emp);

        if($run_employer){

            echo "
                <script>
                    alert('Job Order Has Been Updated')
                </script>
            ";

            echo "
                <script>
                    window.open('index.php?job_order','_self')
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