<?php
    session_start();
    include('assets/inc/config.php');
    //date_default_timezone_set('Africa /Nairobi');
    include('assets/inc/checklogin.php');
    check_login();
    $aid=$_SESSION['pass_id'];
    if(isset($_POST['train_fare_checkout']))
    {

           
            

$pass_fare_payment_code = $_POST['pass_fare_payment_code'];
$query = "SELECT * FROM payment_transaction WHERE order_id = ?";

// Prepare the statement
if ($stmt = $mysqli->prepare($query)) {
    // Bind the parameter
    $stmt->bind_param('i', $pass_fare_payment_code); // Assuming order_id is a string (change 's' if it's a different type)
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Fetch rows
    while ($row = $result->fetch_assoc()) {
        // Process each row
        // Example: echo $row['column_name'];
    }
    
    // Close statement
    $stmt->close();
}

            if($stmt)
            {
                $succ = "Ticket Paid Please Proceed To Confirm Your Payment";
            }
            else 
            {
                $err = "Please Try Again Later";
            }
            #echo"<script>alert('Your Profile Has Been Updated Successfully');</script>";
            }
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include('assets/inc/head.php');?>
<!--End Head-->
  <body>
    <div class="be-wrapper be-fixed-sidebar ">
    <!--Navigation Bar-->
      <?php include('assets/inc/navbar.php');?>
      <!--End Navigation Bar-->

      <!--Sidebar-->
      <?php include('assets/inc/sidebar.php');?>
      <!--End Sidebar-->
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Train Tickt Checkout </h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="pass-dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Tickets</a></li>
              <li class="breadcrumb-item"><a href="#">Checkout</a></li>
            </ol>
          </nav>
        </div>
            <?php if(isset($succ)) {?>
                                <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success!","<?php echo $succ;?>!","success");
                            },
                                100);
                </script>

        <?php } ?>
        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed!","<?php echo $err;?>!","Failed");
                            },
                                100);
                </script>

        <?php } ?>
        <div class="main-content container-fluid">
        <?php
            $aid=$_SESSION['pass_id'];
            $ret="select * from orrs_passenger where pass_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-success">
                <div class="card-header card-header-divider"><span class="card-subtitle">Fill All Details</span></div>
                <div class="card-body">
                  <form method ="POST">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> First Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_fname;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Last Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_lname;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Phone Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly value="<?php echo $row->pass_phone;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Address</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_addr;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Booked Train Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_train_number;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Booked Train Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_train_name;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Departure </label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_dep_station;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3"> Arrival </label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_arr_station;?>" id="inputText3" type="text">
                      </div>
                    </div>                   
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Train Fare</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly  value="<?php echo $row->pass_train_fare;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Transaction ID</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" value = "<?php echo $row->pass_fare_payment_code;?>" name= "pass_fare_payment_code"  id="inputText3" type="text">
                      </div>
                    </div>

                    <div class="col-sm-6">
                        <p class="text-right">
                          <input class="btn btn-space btn-success" value ="Checkout" name = "train_fare_checkout" type="submit">
                          <button class="btn btn-space btn-danger">Cancel</button>
                        </p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
       
        <?php }?>
        
        </div>
        <!--footer-->
        <?php include('assets/inc/footer.php');?>
        <!--EndFooter-->
      </div>

    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="assets/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
  </body>

</html>