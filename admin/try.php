<?php

	include("../include/db.php");

?>
<?php

    if(isset($_POST['submit'])){

      
        $pay_to = $_POST['pay_to'];
        
        $particulars = $_POST['particulars'];
        
        $amount = $_POST['amount'];
        
        $prepare_by = $_POST['prepare_by'];

        $voucher_no = $_POST['voucher_no'];

      

                
                $get_no = "select * from tbl_voucher";
                $run_get = mysqli_query($con,$get_no);
                $count = mysqli_num_rows($run_get);

                $vc = $count + 1;

       
                $insert_vc = "insert into tbl_voucher (pay_to,particulars,amount,prepared_by,date_release) values ('$pay_to','$particulars','$amount','$prepare_by',now())";

                $run_vc = mysqli_query($con,$insert_vc);

                if($run_vc){

                    echo "
                        <script>
                            window.open('index.php?voucher','_blank')
                        </script>
                    ";

                   

                }else{

                    echo "
                        <script>
                            alert('Error')
                        </script>
                    ";

                }

          

    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>asdad</title>
</head>
<body>
	<label><?php echo $vc; ?></label><br>
	<label><?php echo $pay_to; ?></label><br>
	<label><?php echo $particulars; ?></label>
</body>
</html>