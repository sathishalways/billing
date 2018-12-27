<style>
input[readonly]
{
	border:none;
}
p
{
margin:0px;

}
</style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Print Invoice</h5>

            <div class="divider"></div>
          <div id="printableArea">
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                   <div id="printheader" >
	<div class="pull-left" >

	<h1 class="headingprint" style="font-size: 25px;margin-top: 0px;">S.R SCALES</h1>	
	<P>	No:2,BADRI VEERASAMY LANE,</P>
	<p>(Off:NSC BOSE ROAD) SOWCARPET,CHENNAI-79.</p>
	
	</div>
	<div class="pull-right" >	
	
	<p>Phone : 9710411488</p>
	<p>Fax : 42168883</p>
    <p>Email Id : stamping.showroom@gmail.com</p>
	</div><div style="height:90px;border-bottom:1px dashed gray; "></div>
	</div>
	
             
                 
                      <form action="<?php echo base_url(); ?>delivery/edit_quotereview" method="post" name="frmServiceStatus">
                               
<?php foreach($getQuoteByReqId as $key){?>
<br/>
<div class="table-responsive">
<table class="table table-borderless" >
<tr>
<td><label>Request ID</label><span class="pull-right">:</span></td><td><input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly></td>

<td><label>Time</label><span class="pull-right">:</span></td><td><input type="text" name="" class="" value="<?php date_default_timezone_set('Asia/Calcutta'); echo date("d-m-Y H:i:s");?>" readonly></td>


</tr>
<tr>
<td><label>Customer Name</label><span class="pull-right">:</span></td><td><input type="text" name="" class="" value="<?php echo $key->customer_name; ?>" readonly></td>
<td><label>Address</label><span class="pull-right">:</span></td><td><input type="text" name="" class="" value="<?php echo $key->address.' '.$key->address1; ?>" readonly></td>



</tr>
<tr>
<td><label>Phone</label><span class="pull-right">:</span></td><td><input type="text" name="" class="" value="<?php echo $key->mobile; ?>" readonly></td>
<td><label>Machine Serial No.</label><span class="pull-right">:</span></td><td><input type="text" name="" class="" value="<?php echo $key->serial_no; ?>" readonly><input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>"></td>

</tr>
<tr>
<td><label>Date Of Request</label><span class="pull-right">:</span></td><td><input type="text" name="" value="<?php echo $key->request_date; ?>" readonly></td>
<td><label>Location</label><span class="pull-right">:</span></td><td><input type="text" name="" class="" value="<?php echo $key->service_loc; ?>" readonly></td>

</tr>

<?php } ?>



<?php foreach($stamping_details As $stkey){
		if(isset($stkey->stamping_received)){
					$stamping_received = explode(",",$stkey->stamping_received);
				}
	
	?>

<tr>
	<td><label style="border-bottom:1px solid black;">Stamping Details</label></td>
	
	</tr>


<tr>
	<td><label>Year</label><span class="pull-right">:</span></td>
	<td><input type="text" name="year" id="year" class="" value="<?php echo $stkey->year; ?>" readonly></td>
	<td><label>Quarter</label><span class="pull-right">:</span></td>
	<td><input type="text" name="qtr" id="qtr" class="" value="<?php echo $stkey->quarter; ?>" readonly></td>
	</tr>
	
	<tr>
	<td><label>Kg</label><span class="pull-right">:</span></td>
	<td><input type="text" name="kg" id="kg" class="" value="<?php echo $stkey->kg; ?>" readonly></td>
	<td><label>Received</label><span class="pull-right">:</span></td>
	<td><input type="text" name="kg" id="kg" class="" value="<?php if(in_array('vcplate', $stamping_received)){echo "VC Plate"; } if(in_array('vcpaper', $stamping_received)){echo " VC Paper"; } if(in_array('bothplatepaper', $stamping_received)){echo " VC Plate + Paper"; }?>" readonly>
		</td>
	
	</tr>
	
	<tr>
	<td><label>Stamping Charge</label><span class="pull-right">:</span></td>
	<td><input type="text" name="stamping_charge" id="stamping_charge" class="" value="<?php echo $stkey->stamping_charge; ?>" readonly></td>
	<td><label>Penalty</label><span class="pull-right">:</span></td>
	<td><input type="text" name="agn_charge" id="agn_charge" class="" value="<?php echo $stkey->penalty; ?>" readonly></td>
	
	</tr>
	
	
	<tr>
	<td><label>Total Charge</label><span class="pull-right">:</span></td>
	<td><input type="text" name="tot_charge" id="tot_charge" class="" value="<?php echo $tot_charge; ?>" readonly></td>
	
	</tr>
<?php } ?>
</table>


</div>

<br/>
<label>Customer Signature</label>
<p style="height:50px;"></p>

	<input class="no-print" id="addRowBtn" type="button" onClick="printDiv('printableArea')" value="Print Request"  style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;"/>
           
                        </div>
                   


				   
                  
                      </form>
                  
                
                </div>
             
             <div class="col-md-1">
			  </div>
              </div>
			  </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  


    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  
	  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>   
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  


<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
			
        </script> 

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>