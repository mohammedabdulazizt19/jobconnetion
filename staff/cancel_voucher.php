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

                if(isset($_GET['cancel_voucher'])){

                    $edit_id = $_GET['cancel_voucher'];

                    $edit_document = "select * from tbl_voucher where voucher_id = '$edit_id'";

                    $run_edit = mysqli_query($con,$edit_document);

                    $row_edit = mysqli_fetch_array($run_edit);

                    $e_id = $row_edit['voucher_id'];
                    
                    $e_date = $row_edit['date_release'];
                    
                    $e_amount = $row_edit['amount'];
                    $e_pay = $row_edit['pay_to'];
                    $e_particulars = $row_edit['particulars'];

                }

            ?>
           
           
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-dashboard"></i>
                Dashboard / Voucher
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
                    Voucher
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <h3><center>
                        Are You Sure You Want To Cancel This ?
                        </center>
                    </h3><br>
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Date
                        </label>
                        <div class="col-md-6">
                            <input type="hidden" name="dt" class="form-control" value="<?php echo $e_date; ?>">
                            <input type="date" class="form-control" value="<?php echo $e_date; ?>" disabled>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Pay To
                        </label>
                        <div class="col-md-6">
                            <input type="hidden" name="pay_to" class="form-control" value="<?php echo $e_pay; ?>">
                            <input type="text" class="form-control" value="<?php echo $e_pay; ?>" disabled>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Particulars
                        </label>
                        <div class="col-md-6">
                            <input type="hidden" name="particulars" class="form-control" value="<?php echo $e_particulars; ?>">
                           
                            <textarea class="form-control" rows="3" disabled=""><?php echo $e_particulars; ?></textarea>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Amount
                        </label>
                        <div class="col-md-6">
                            <input type="hidden" name="amount" class="form-control" value="<?php echo $e_amount; ?>">
                            <input type="number" class="form-control" value="<?php echo $e_amount; ?>" disabled>
                        </div>
                    </div><!-- form-group Ends -->
                    
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="hidden" name="prepare_by" class="form-control" required value="<?php echo $staff_name; ?>">
                        </div>
                    </div><!-- form-group Ends -->

                   
                    
                   
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="cancel" value="Yes" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>

                        <div class="col-md-6">
                            <a href="index.php?voucher_list" class="btn btn-danger form-control">
                                No
                            </a>
                        </div>
                    </div><!-- form-group Ends -->
                    
                    
                </form><!-- form-horizontal Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php

    if(isset($_POST['cancel'])){
       

        $edit_emp = "update tbl_voucher set  note = 'Cancelled' where voucher_id = '$edit_id'";

        $run_employer = mysqli_query($con,$edit_emp);

        if($run_employer){

            echo "
                <script>
                    window.open('index.php?voucher_list','_self')
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