


 <style>
 .link{
	 padding: 9px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
margin-right:20px;

 }
 .link:hover
 {
	 color:black;
	 text-decoration:none;
	 
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .tableadd tr td input {
    width: 210px !important;
 }
 .chosen-container .chosen-drop .chosen-search input
 {
	width:200px !important;
 }
 #myTable tr td label{
	 width:150px !important;
	 
 }
 #myTable1 tr td label{
	 width:150px !important;
	 
 }
 .chosen-container {
    width: 210px !important;
}
#errorBox{
 color:#F00;
 }
 h5
{
	font-size: 22px;
 border-bottom: 1px solid #055E87 !important;
text-align: center;
width: 170px;
margin: auto auto 35px;
}
h6
{
	font-weight: bold;
font-size: 16px;
margin: 0px;
border-bottom: 1px solid gray;
width: 145px;
margin-top:2%;
}
#rowadd
{
	border: 1px solid #055E87 !important;
background: #093F88 none repeat scroll 0% 0% !important;
padding: 6px;
border-radius: 5px;
color: #FFF;
font-weight: bold;
font-family: calibri;
font-size: 17px;
margin-left: 47%;

}
.tableadd tr td{
	height:40px;
}
.right p
{
	line-height:5px;
	font-size: 12px;
}
.right h1
{
	line-height:5px;
}
.toaddress h4
{
	line-height:5px;
}
.toaddress p
{
	line-height: 5px;

margin-left: 2%;
}
.toaddress
{
	margin-bottom: 25px;
	margin-top: 20px;
}
.subject
{
	/*margin-left:30px;*/
}
.box{
       
        display: none;
		box-shadow:none !important;
      
    }
	.comprehensive
		{
		display:block;
		}
		.message p
		{
				/*text-indent: 30px;*/
				text-align:justify;
		}
		.message p.dear
		{
				text-indent: 0px;
				
		}
		input
		{
			border: 1px solid #093F88;
border-radius: 3px;
		}
		table tr td
		{
			width:150px;
			height:30px;
		}
		table tr td.dot
		{
			width:50px;
		}
		table tr td.bank
		{
			width:350px;
		}
		table tr td.bank .address
		{
			margin-right:20px;
		}
		table
		{
			margin-left: 10%;
		}
		b
		{
			text-decoration:underline;
		}
		.service
		{
			width:400px;
		}
		.service b
		{
			font-weight:normal;
			text-decoration:none;
		}
 </style>
  <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
		
        if($(this).attr("value")=="comprehensive"){
            $(".box").not(".comprehensive").hide();
            $(".comprehensive").show();
        }
        if($(this).attr("value")=="service_only"){
            $(".box").not(".service_only").hide();
			
            $(".service_only").show();
        }
        
    });
});
</script>
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("#fromdate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
		$("#todate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
		$("#startdate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
		$("#enddate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });

}//]]>  

</script>
<section id="content">

     
        <div class="container">
          <div class="section">
		  
		  
		   <div id="reportheader" >
	<div class="left" style="float:left;width:20%;">	
	<img src="../../assets/images/maxsell-logo1.png" style="width:190px; margin-top: 14px;">
	</div>
	<div class="right" style="float:right;width:79%; text-align:center;">	
	
	<h1 class="headingprint breadcrumbs-title" style="font-size:18px;">Arihant Marketing</h1>
	<p>10, Gowdia Mutt Road,Royapettah,Chennai - 600014,Tamilnadu, India</p>
	<p>Tel:+91 44 2813 1159 / 69, Fax:+91 44 2813 2111</p>
	</div>
	<div style="height:13%;border-bottom:1px dashed gray; "></div>
	</div>
		  
	
            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                <form action="<?php echo base_url(); ?>createpdf/pdf" method="post" name="frmServiceStatus">
                               
<div id="errorBox"></div>
<?php error_reporting(0);
						$servername = "localhost";
						$username = "srscales_srscalesuser";
						$password = "srscales@2016";
						$dbname = "srscales_serviceEff";
						
						$con = mysql_connect($servername,$username,$password);
						mysql_select_db($dbname,$con);
					   $date1 = date('Y-m-d');
						//echo "SELECT unix_timestamp(warranty_date) from order_details where id='52'";
						
						$qry = mysql_query("SELECT ord.id,cust.customer_name,cust.customer_id,pro.product_name,pro.model, ordt.purchase_date,ordt.warranty_date,ordt.prev_main,ser_loc.service_loc, (
			CASE 
				WHEN ordt.warranty_date!='' THEN 'Warranty'
				WHEN ordt.prev_main!='' THEN 'Preventive'
				WHEN ordt.paid!='' THEN 'Paid'
				ELSE 1
				END) AS machine_status

	 FROM `order_details` As ordt
							inner join orders As ord ON ord.id = ordt.order_id
							inner join customers As cust ON cust.id = ord.customer_id
							inner join products As pro ON pro.id = ordt.model_id
							inner join service_location As ser_loc ON ser_loc.id = ordt.service_loc_id
							WHERE ord.id ='$id'");
							while($res = mysql_fetch_array($qry)){
							$customer_id = $res['customer_id'];
							$customer_name = $res['customer_name'];
							$model = $res['model'];
							$purchase_date = $res['purchase_date'];
							$warranty_date = $res['warranty_date'];
							$service_loc = $res['service_loc'];
							$machine_status = $res['machine_status'];
	}
?>



<!--<table class="tableadd">

<tr>
<td><label>Customer Name</label></td><td><input type="text" name="cust_name" class="email" value="<?php echo $customer_name; ?>"><input type="hidden" name="orderid" class="email" value="<?php echo $id; ?>"><input type="hidden" name="custid" class="email" value="<?php echo $customer_id; ?>"></td><td><label>Machine Status</label></td><td><input type="text" name="machine_status" id="machine_status" class="adress" value="<?php echo $machine_status; ?>"></td>
</tr>

<tr>
<td><label>Machine Model</label></td><td><input type="text" name="model" class="email" value="<?php echo $model; ?>"></td><td><label>Charge</label></td><td><input type="text" name="charge" class="email" value=""></td>
</tr>

<tr>
<td><label>AMC From date</label></td><td><input type="text" name="amc_frmdate" id="fromdate" class="date"></td><td><label>AMC To date</label></td><td><input type="text" name="amc_todate" id="todate" class="date"></td>
</tr>

</table>-->


<p style="float:right;">Date:24/11/2015</p>
<div class="toaddress">
<b>To:</b>
<div>
<p>Customer Name</p>
<p>Address 1</p>
<p>Address 2</p>
</div>
</div>

<div class="subject">
<p><b>Attention:</b> Mr.Contact Name</p>
<p><b>Sub:</b> AMC for <input type="text" name="" class="" value="" placeholder="Product">-<input type="text" name="" class="" value="" placeholder="Model No"> Purchased on <input type="text" id="fromdate" class="date" value="" ></p>
</div>


<div class="message">
<p class="dear"><b>Dear Sir/Madam:</b></p>
<p>We thank you for your continued patronage to our products.It has been our pleasure to serve you and we always endeavour to put our best foot forward, which serving you.We hope that we have been able to satisfy your requirements.</p>
<p>In order to maintain the above instruction prime condition for your use, we hereby extend our AMC services for <input type="text" name="" class="" value=""></p>
<p>The current service contract expires on <input type="text" id="todate" class="date" value="">. We recommend that you renew service contract, which will prevent operation failure and also wear & tear of the instrument. Details of the AMC package are as follows:</p>

<table>
<tr>
<td><label>Service Type</label></td><td class="dot">:</td><td class="service"><input type="radio" name="type" class="" checked="checked" value="comprehensive"><b>Comprehensive</b><input type="radio" name="type" class="" value="service_only"><b>Service Only</b></td>
</tr>
<tr>
<td><label>Service Cost</label></td><td class="dot">:</td><td><input type="text" name="" class="" value=""></td>
</tr>
<tr>
<td><label>AMC Start Date</label></td><td class="dot">:</td><td><input type="text" name="" class="" value="" id="startdate"></td>
</tr>
<tr>
<td><label>AMC End Date</label></td><td class="dot">:</td><td><input type="text" name="" class="" value="" id="enddate"></td>
</tr>
<tr>
<td><label>No of preventive maintenance</label></td><td class="dot">:</td><td><input type="text" name="" class="" value="" id="enddate"></td>
</tr>
</table>
<p>Please confirm the AMC Quotation by return email and remit the AMC charges to the bank as follows:</p>

<table>

<tr>
<td><label>Bank Name</label></td><td class="dot">:</td><td><input type="text" name="" class="" value=""></td>
</tr>
<tr>
<td><label>Bank Address & City</label></td><td class="dot">:</td><td class="bank"><input type="text" name="" class="address" value="" ><input type="text" name="" class="city" value="" ></td>
</tr>
<tr>
<td><label>IFSC (RTGS)</label></td><td class="dot">:</td><td><input type="text" name="" class="" value="" id="enddate"></td>
</tr>
<tr>
<td><label>A/C No</label></td><td class="dot">:</td><td><input type="text" name="" class="" value="" id="enddate"></td>
</tr>
</table>

<table></table>

</div>



<p class="dear"><b>Terms & Conditions:</b></p>

<ul class="comprehensive box">

<li>This is covers all services including Spare parts replacement and its cost along with conveyances & services charges.</li>
<li>Only machine will be covered under AMC .Online UPS , Isolation transformer and battery service will not be covered.</li>
<li>Preventive maintenance appointment will be scheduled as per our Engineers/Maintenance plan.</li>
</ul>

<ul class="service_only box">

<li>This is covers all services no spare parts replacement and its cost along with conveyances & services charges.</li>
<li>Only machine will be covered under AMC .Online UPS , Isolation transformer and battery service will not be covered.</li>
<li>Preventive maintenance appointment will be scheduled as per our Engineers/Maintenance plan.</li>
</ul>

<br/><br/>


<button class="btn cyan waves-effect waves-light " type="submit" id="rowadd">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>




<table class="tableadd">

<tr>

<td style="padding-top: 25px;">
 
</td>
</tr>
</table>

					
                         
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
  </section>


  </div>
  

  </div>
  
  
  
    
  

  <!-- <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
   


   
 
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     
	
	  
     
  
  

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

	 <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	 
	
	 
		
</body>

</html>