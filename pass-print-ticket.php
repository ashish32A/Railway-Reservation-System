<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['pass_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <!--Head-->
    <?php include('assets/inc/head.php');?>
  <!--End Head-->
  <body>
    <div class="be-wrapper be-fixed-sidebar">
    <!--Nav Bar-->
      <?php include('assets/inc/navbar.php');?>
      <!--End Navbar-->
      <!--Sidebar-->
        <?php include('assets/inc/sidebar.php');?>
      <!--End Sidebar-->
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Train Ticket</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Dashbaord</a></li>
              <li class="breadcrumb-item"><a href="#">Tickets</a></li>
              <li class="breadcrumb-item active">Print</li>
            </ol>
          </nav>
        </div>

        <?php
          /**
            *Server side code to get details of single passenger using id 
            */
            $aid=$_SESSION['pass_id'];
            $ret="select * from orrs_passenger where pass_id=?";//fetch details of pasenger
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
            {
        ?>
        <!--get details of logged in user-->
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-lg-12">

            <!--Train Details-->
              <div id='printReceipt' class="invoice">
                <div class="row invoice-header">
                  <div class="col-sm-7">
                    <div class="invoice-logo"></div>
                  </div>
                  <div class="col-sm-5 invoice-order"><span class="invoice-id">Train Ticket For</span><span class="incoice-date"><?php echo $row->pass_fname;?> <?php echo $row->pass_lname;?></span></div>
                </div>
                <div class="row invoice-data">
                  <div class="col-sm-5 invoice-person"><span class="name"><?php echo $row->pass_fname;?> <?php echo $row->pass_lname;?></span><span><?php echo $row->pass_email;?></span><span><?php echo $row->pass_addr;?></span></div>
                  <div class="col-sm-2 invoice-payment-direction"></div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <h2>PNR no.<?php echo " ".rand(1111111111,9999999999);  ?></h2>
                    <table class="table table-bordered" >
                    <thead>
                      <tr>
                        <th>Train Number</th>
                        <th>Train</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Dep.Time</th>
                        <th>Fare</th>
                        <th>Coach no.</th>
                        <th>Seat no.</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        /**
                         *Lets select train booking details of logged in user using PASSENGER ID as the session
                         */
                            //$aid=$_SESSION['pass_id'];
                            $ret="select * from orrs_passenger where pass_id=?";//sql to get details of our user
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$aid);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();

                            //$cnt=1;
                        while($row=$res->fetch_object())
                        {
                        ?>
                      <tr>
                        <td><?php echo $row->pass_train_number;?></td>
                        <td><?php echo $row->pass_train_name;?></td>
                        <td><?php echo $row->pass_dep_station;?></td>
                        <td><?php echo $row->pass_arr_station;?></td>
                        <td><?php echo $row->pass_dep_time;?></td>
                        <td>₹<?php echo $row->pass_train_fare;?></td>
                        <td><?php echo $row->coach_no;?></td>
                        <td><?php echo $row->seat_no;?></td>
                      </tr>
                      <hr>
                      
                   

                        <?php }?>
                       
                    </tbody>
                    </table>
                    <h1>General Rules/ Information for E-ticket Passengers</h1>

<h2>Status of E-tickets after Chart preparation:</h2>
<ul>
    <li><strong>Confirmed E ticket:</strong> E-ticket where all passengers are confirmed.</li>
    <li><strong>Partially Waitlist/Confirmed/RAC E ticket:</strong> E-ticket where some passengers are confirmed/RAC and others are waitlisted.</li>
    <li><strong>Fully Waitlisted E tickets:</strong> E-ticket where all passengers are waitlisted.</li>
</ul>

<h2>Authorization to board the train:</h2>
<ul>
    <li>Passengers with confirmed E ticket are permitted to board the train. Their names will appear on the reservation chart.</li>
    <li>Name of passengers with Partially Waitlisted/Confirmed/RAC will appear on the chart (including the waitlisted passengers).</li>
</ul>

<h2>Cancellation & refund rules:</h2>
<ol>
    <li><strong>Confirmed E-ticket before chart preparation:</strong> E-ticket can be cancelled online, and the amount will be refunded electronically to the respective agent's account used for booking.</li>
    <li><strong>Confirmed E-ticket after chart preparation:</strong> Cancellation/Refund requests received after chart preparation are forwarded by IRCTC to the concerned railway for manual processing. Refund amount received from the railway will be credited back to the respective agent's account used for booking by IRCTC.</li>
    <li><strong>Partially waitlisted E-ticket before chart preparation:</strong> E-ticket can be cancelled online, and the amount will be refunded electronically to the respective agent's account used for booking.</li>
    <li><strong>Partially waitlisted E-ticket after chart preparation:</strong> E-ticket cannot be cancelled online after chart preparation. The e-ticket holder can claim a refund for passengers who have not traveled by submitting the original certificate issued by TTE/Conductor to IRCTC after filing an online refund request through the respective agent.</li>
</ol>
                  </div>
                </div>
              </div>
              <hr>

             
              <div class="row invoice-footer">
                  <div class="col-lg-12">
                    <button id="print" onclick="printContent('printReceipt');" class="btn btn-lg btn-space btn-primary">Print</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!--Close logged in user instance-->
    <?php }?>
    <!--footer-->
    <?php include('assets/inc/footer.php');?>
    <!--end footer-->
      </div>
      
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
    <!--print train ticket js-->
    <script>
      function printContent(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        }
     </script>
  </body>

</html>