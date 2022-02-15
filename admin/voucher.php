<?php

                if(!isset($_SESSION['email_address'])){

                    echo "
                        <script>
                            window.open('../login.php','_self')
                        </script>
                    ";

                }else{

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
                <form class="form-horizontal" action="../TCPDF/User/voucher.php" target="_blank" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Date
                        </label>
                        <div class="col-md-6">
                            <input type="date" name="dt" class="form-control" required>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Pay To
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="pay_to" class="form-control" required>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Particulars
                        </label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" name="particulars" required></textarea>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Amount
                        </label>
                        <div class="col-md-6">
                            <input type="number" name="amount" class="form-control" required>
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
                            <input type="submit" name="submit" value="Print" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    
                </form><!-- form-horizontal Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->


<?php

                }

            ?>