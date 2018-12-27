<style>
input[type=text]:-moz-read-only { /* For Firefox */
    background-color: #eee;
}

input[type=text]:read-only { 
    background-color: #eee;
}
 input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
        background-color: transparent;
        border: 1px solid #ccc;
        /* border-bottom: 1px solid #055E87; */
        border-radius: 2px;
        outline: none;
        height: 2.0rem;
        width: 100%;
        font-size: 12px;
        margin: 0 0 15px 0;
        padding: 4px;
        box-shadow: none;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        transition: all .3s;
    }
</style>
<head>

 <link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
 
 <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
 
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>-->   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="<?php echo base_url(); ?>assets/select/jquery-1.8.0.min.js"></script>


<style>
.btn {
    
	text-transform:none !important;
}

body{background-color:#fff;}
.link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .icon
 {
	padding-right: 20px;
 }
 .fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
		.tableadd1 tr td
		{
			border: 1px solid #6b4289;
text-align: center;
		}
		.tableadd1 tr
		{
			height: 35px;
		}
		.tableadd1 tr td select
		{
			border: 1px solid #9A9A9B;
border-radius: 5px;
width:150px;
		}
		.tableadd1 textarea
		{
			width:200px;
			border: none;
			height:70px;
			border-radius: 5px;
		}
		.tableadd1 tr td label {
 
    line-height: 0;
	color:white;
	
   
}
.tableadd1 tr td.plus
{
	padding-top: 14px;
}
.tableadd1 tr td.plus input
{
	width:70px;
	border:1px solid gray;
	
}
.tableadd1 tr td input
{
	
	height: 33px;
border-radius: 5px;
padding-left: 10px;
}
.tableadd1 tr td.qty
{
	padding-top: 14px;
}
.tableadd1 tr td.qty input
{
	width:100px;
	border:1px solid gray;
	
	
}
.tableadd1 tr td.save .fa {
    font-size: 30px !important;
}
.delRowBtn{
	background: #055E87 none repeat scroll 0% 0% !important;
	color:#fff;
}
.rowadd {
    border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
}
#addtable 
{
	width:50%;
	margin-top:20px;
	float: left
}
#addtable tr td
{
border:none;
text-align:left;

}
#addtable tr td label
{

color:black;
}
#errorBox{
 color:#F00;
 }
 input[id=basicamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
 }
  input[id=cst]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
 }
  input[id=freight]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
 }
  input[id=totalamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
 }
 .purchasedetail{
  left: 50px;
 }
 .pipurchasedetail{
  left: 90px;
 }
 .cstpurchasedetail{
  left: 95px;
 }
.tableadd tr td input {
  width: 238px;
  height: 33px;
  /* border: 1px solid #B3B3B3; */
  border-radius: 5px;
  padding-left: 10px;
}
.cst1{
	width:120px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    border-bottom: none;
    border-radius: 0;
    outline: none;
    /* height: 3.9rem; */
    width: 100%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 0;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
textarea {
	 resize: none;
}
.select2-drop {
    width: 100%;
    margin-top: -1px;
    position: absolute !important;
    z-index: 9999;
    top: 100%;
    background: #fff;
    color: #000;
    border: 1px solid #aaa;
    border-top: 0;
    border-radius: 0 0 4px 4px;
    -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
    box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
}
</style>
<script>
   $(document).ready(function(){
   $( "form" ).submit(function( event ) {
   
  if ( $( "#to_name" ).val() === "" ) {
	$( "#errorbox1" ).text( "Enter the Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'15px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#to_addr" ).val() === "" ) {
	$( "#errorbox2" ).text( "Enter the Address" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#to_cont_name" ).val() === "" ) {
	$( "#errorbox3" ).text( "Enter the Contact Person" ).show().css({'color':'#ff0000','position':'relative','bottom':'19px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#to_cont_no" ).val() === "" ) {
	$( "#errorbox4" ).text( "Enter the Contact No." ).show().css({'color':'#ff0000','position':'relative','bottom':'19px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#cont_no" ).val() === "" ) {
	$( "#errorbox4" ).text( "Enter the Contact No." ).show().css({'color':'#ff0000','position':'relative','bottom':'19px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#spare_name-0" ).val() === "" ) {
	$( "#errorbox5" ).text( "Select the Item Name" ).show().css({'color':'#ff0000','position':'relative','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( ".spare_qty" ).val() === "" ) {
	$( "#errorbox6" ).text( "Enter the Quantity" ).show().css({'color':'#ff0000','position':'relative','bottom':'17px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#sr_no" ).val() === "" ) {
	$( "#errorbox7" ).text( "Enter the Serial No." ).show().css({'color':'#ff0000','position':'relative','bottom':'17px','font-size':'10px'});
    event.preventDefault();
  }
  
  }); 
});

   </script>
   <script>
    $(document).ready(function(){
		/* $('#pi,#tin').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^A-Za-z0-9]/g,'') );
        }); */
		var regemail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		var regemail1=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		$('#to_cont_no').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		
		$('#cont_no').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		
			$('input:text[id="pi"],input:text[id="tin"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9 ]/g,'') );
        });
		$('input:text[id="to_cont_mail"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9@. ]/g,'') );
        });
		
		$('input:text[id="mailv"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9@. ]/g,'') );
        });
		
		
		  $('#to_cont_mail').change(function(){
			var email1=$(this).val();
            if(!regemail.test(email1)){
				alert("Invalid Email Id");
				$(this).val("");
				$(this).focus();
				return false;
			}
        });
		
		$('#mailv').change(function(){
			var email1=$(this).val();
            if(!regemail1.test(email1)){
				alert("Invalid Email");
				$(this).val("");
				$(this).focus();
				return false;
			}
        });
		
		$('#to_cont_no').change(function(){
            if($(this).val().length<10){
				alert("Mobile Number must be atleast 10 digit");
				$(this).val("");
				$(this).focus();
				return false;
			}
        });
		
		$('#cont_no').change(function(){
            if($(this).val().length<10){
				alert("Mobile Number must be atleast 10 digit");
				$(this).val("");
				$(this).focus();
				return false;
			}
        });
		
    });
</script>
   <script>
     $(document).ready(function(){
		$("#to_name").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox1").show();
			}
			else{
				$("#errorbox1").hide();
			}
		});
		$("#to_addr").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox2").show();
			}
			else{
				$("#errorbox2").hide();
			}
		});
		$("#to_cont_name").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox3").show();
			}
			else{
				$("#errorbox3").hide();
			}
		});
		$("#to_cont_no").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox4").show();
			}
			else{
				$("#errorbox4").hide();
			}
		});
	
	$(".spare_name").change(function(){
			if($(this).val()==""){
			    $("#errorbox5").show();
			}
			else{
				$("#errorbox5").hide();
			}
		});
		$(".spare_qty").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox6").show();
			}
			else{
				$("#errorbox6").hide();
			}
		});
		$("#sr_no").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox7").show();
			}
			else{
				$("#errorbox7").hide();
			}
		});
		
		});
		</script>
		
<!--<script>
    $(document).ready(function(){
		var regemail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		$('#to_cont_mail').change(function(){
			var email1=$(this).val();
            if(!regemail.test(email1)){
				alert("Invalid Email");
				$(this).val("");
				$(this).focus();
				return false;
				exit;
			}
        });
		});
</script>-->




<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	//var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/addrow_purchase_order",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
       // $('#table1').append(result);
	    $('#table1').append(result);
} 
});

});
  
});
</script>


<script>
$(document).ready(function(){
   $('.spare_name').change(function(){ //alert("hiiio");
     var id = $(this).val();
	//alert(id);
     var idd=$(this).closest(this).attr('id');
	 
	 var arr= idd.split('-');
	 var vl = arr['1'];
	// alert(vl);
     var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsparedet",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		var check=data.purchase_price;
		if(check !=0)
		{
		   $('#rate-'+vl).val(data.purchase_price)
		}else{
		   $('#rate-'+vl).val('')
		   }
    });

} 
});
   });
 });
</script>





  
 
</head>
<section id="content">
        
      
        <div class="container">
		<form action="<?php echo base_url(); ?>Spare/add_purchase_order" method="post" name="frmSpareEng" autocomplete="off">
          <div class="section">
		  
		  
		    <h2>Create Spares Purchase Order</h2>

          <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
			
               <div class="col-md-12">
			  
			   
<div class="col-md-12 tableadd" id="addtable" style="width:1100px;">
	<div id="errorBox"></div>
	<?php foreach($comp_info as $comkey){ ?>
	<div class="col-md-3">
		<div><label><b>From,</b></label></div>
		
		
		<div style="margin-left: 25px">
			<div><label>Company Name </label></div>
			<div><input type="text" name="comp_name"  id="comp_name" value="<?php echo $comkey->name; ?>" style="border:1px solid #ccc;height:30px;width:200px;"></div>
			
			<div><label>Address </label></div>
			<div><textarea name="addr" id="addr" style="border:1px solid #ccc;height:30px;width:200px;" maxlength="250"><?php echo $comkey->addr1.' '.$comkey->addr2; ?></textarea></div>
			
			<div><label>Contact Person </label></div> 
			<div><input type="text" name="cont_name" id="cont_name" value="Sandhya" style="border:1px solid #ccc;height:30px;width:200px;" maxlength="50"></div> 
			
			<div><label>Contact No.</label></div> 
			<div><input type="text" name="cont_no" maxlength="15" id="cont_no" value="" style="border:1px solid #ccc;height:30px;width:200px;"></div> 
			<div><label>Mail ID </label></div> 
			<div><input type="text" name="" id="mailv" value="" style="border:1px solid #ccc;height:30px;width:200px;"></div> 
		</div>
	</div>
		<?php } ?>
	<div class="col-md-3">
		<div><label><b>To,</b></label></div>
		<div style="margin-left: 25px;">
			<div><label>Vendor Name </label><span style="color:red;">*</span></div>
			<div><input type="text" name="to_name" id="to_name" value="" style="border:1px solid #ccc;height:30px;width:200px;" maxlength="50"> <span style="color:red;"    id="errorbox1"></span></div>
			<!--<input type="text" name="vendor_name" id="vendor_name" value="">-->
			<div><label>Address </label><span style="color:red;">*</span></div>
			<div><textarea name="to_addr" id="to_addr" style="border:1px solid #ccc;height:30px;width:200px;" maxlength="250"></textarea><span style="color:red;" id="errorbox2"></span></div>
			<!--<textarea name="vendor_addr" id="vendor_addr"></textarea>-->
			<div><label>Contact Person </label><span style="color:red;">*</span></div>
			<div><input type="text" class="cperson" name="to_cont_name" id="to_cont_name" value="" style="border:1px solid #ccc;height:30px;width:200px;"  maxlength="50"><span style="color:red;" id="errorbox3"></span></div>
			<!--<input type="text" name="vendor_cont_name" id="vendor_cont_name" value="">-->
			<div><label>Contact No. </label><span style="color:red;">*</span></div>
			<div><input type="text" name="to_cont_no" id="to_cont_no" maxlength="15" value="" style="border:1px solid #ccc;height:30px;width:200px;"><span style="color:red;"id="errorbox4"></span></div>
			<!--<input type="text" name="vendor_cont_no" id="vendor_cont_no" value="">-->
			<div><label>Mail ID </label></div>
			<div><input type="text" name="to_cont_mail" id="to_cont_mail" value="" style="border:1px solid #ccc;height:30px;width:200px;"></div>
			<!--<input type="text" name="vendor_mail" id="vendor_mail" value="">-->
		</div>
	</div>
	
	<div class="tableadd tableleft col-md-3" id="addtable" >
	<div id="errorBox"></div>
	<div>
		<div>
			<div><label>Date </label></div>
			<div><input type="text" id="datepicker" name="todaydate" class="form-control purchasedetail" value="<?php echo $todaydate;?>" style="border:1px solid #ccc;height:30px;width:200px;"></div>
			<div><label>P.I / Ref No. </label></div>
			<div><input type="text" name="refno" id="pi" class="form-control pipurchasedetail" style="border:1px solid #ccc;height:30px;width:200px;" maxlength="25"></div>
			<div><label>TIN / CST No. </label></div>
			<div><input type="text" name="cst_no" id="tin" class="form-control cstpurchasedetail" style="border:1px solid #ccc;height:30px;width:200px;" maxlength="25"></div>
		</div>
	</div>
</div>	
</div>
	

		   
			   
<div style="margin: 30px 0px;">
			  
	<table id="table1" class="tableadd1" style="width:100%;">
		<tr style="background:rgb(112, 66, 139) none repeat scroll 0% 0%">
			<td><label>SI. No.</label><span style="color:red;">*</span></td>
			<td><label>Part Number & Item Name</label><span style="color:red;">*</span></td>
			<td><label>Qty</label><span style="color:red;">*</span></td>
			<td><label>Rate per Unit</label></td>
			<td><label>Total Amount</label></td>
		</tr>
		<tr>
			<td class="plus"><input type="text" class="sino" name="sr_no[]" id="sr_no" maxlength="5"><br><span style="color:red;"id="errorbox7"></span></td>
			<td><select name="spare_name[]" id="spare_name-0" class="chosen-select form-control spare_name">
			<option value="">---Select---</option>
			<?php foreach($spare_list as $sparekey){ if($sparekey->spare_name != null){?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
			<?php }} ?><br>
			</select><span style="color:red;"id="errorbox5"></span></td>
			<td class="plus"><input type="text" name="spare_qty[]" id="spare_qty-0" class="spare_qty"  maxlength="5" value=""><br><span style="color:red;"id="errorbox6"></span></td>
			<td class="plus"><input type="text" name="rate[]" id="rate-0" readonly></td>
			<td class="plus"><input type="text" name="spare_tot[]" id="spare_tot-0" style="width:100px" readonly></td>
			<td style="border:0"><a id="addMoreRows" class="rowadd"><i class="fa fa-plus-square" aria-hidden="true" style="color:#70428b;"></i></td>
		</tr>
	</table>

	<div class="tableadd tableleft" id="addtable" style="    float: right;
    margin-right: -144px;">
		<div><label  style="width:200px;">Basic Amount:</label><input type="text" name="basicamount" id="basicamount" class="bamount" style="border: 1px solid #ccc;
    height: 30px;

    width: 111px;
    margin-left:-7px;" maxlength="10" readonly></div>
		<div>
			<select name="cst1" id="cst1" class="cst1" style="border:1px solid #ccc;height:30px;width:145px;">
			<?php foreach($tax_list as $taxkey){ 
					if($taxkey->tax_name!="" && isset($taxkey->tax_name)){
			?>
			<option value="<?php echo $taxkey->id.'-'.$taxkey->tax_percentage; ?>"><?php echo $taxkey->tax_name.'@'.$taxkey->tax_percentage; ?></option>
			<?php } }?>
					
			</select>
			<input type="text" name="cst" id="cst" class="bamount" style="border:1px solid #ccc;height:30px;width:110px;margin-left: 45px;" readonly>
		</div>
		<div><label style="width: 149px;">Freight</label><input type="text" name="freight" id="freight" class="freight" value="" style="border:1px solid #ccc;height:30px;width:109px;margin-left: 45px;" maxlength="30"></div>
		
		<div><label style="width:149px;">Total Amount</label><input type="text" name="totalamount" id="totalamount" class="bamount" style="border:1px solid #ccc;height:30px;width:109px;margin-left: 45px;" maxlength="10" readonly></div>
		<input type="hidden" name="totalamount1" id="totalamount1" class="bamount"></div>
		<input type="hidden" name="countid" id="countid" class="" value="0">
	</div>

	<!--<div class="tableadd tableleft" id="addtable">
		<a id="addMoreRows" class="rowadd" style="padding: 8.5px;margin-right: 20px;">Add Row</a>
	</div> -->          
</div>
				
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
      
<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $sparekey->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->

           
          </div>
		  
		  <p><b>Imp Note:</b> Minimum order value should be Rs. 3000/- for spare parts.</p>
		  <p><b>Note:</b> If Shipping address is different form above address pls mention here.</p>
		  <br>
		 <div class="col-md-12"> 
		  <div class="col-md-3" style="margin-right: 87px;">
		  <div><b>Address:</b></div> 
		  <div><textarea name="spec_addr" col="5" rows="5" class="form-control" style="width:280px;"></textarea></p></div>
		  </div>
		  
		  <div style="col-md-3">
		  <div><b>Any Specific instruction:</b></div>
          <div><textarea name="spec_ins" col="5" rows="5" class="form-control" style="width:280px;"></textarea></div>
         </div>
		</div> 
		 <br><br>
		 
		  <b>Terms and Conditions:</b><br>
		    <ol>
			    <li>Payment 100% Advance Payment by DD/ Cash in our HDFC Bank account in favor of Arihant Marketing</li>
				<li>If "C" form not received on date, interest @24% per annum will be charged from the actual amount.</li>
				<li>All disputes subject to jurisdication of Chennai Courts.</li>
				<li>Kindly fill your order form with Part Name No clearly and send to concern person.</li>
				<li>For Parts under warranty compulsory send faulty spares for getting replacement of new; with m/c serial no, wherever applicable.</li>
				<li>Order processing will take minimum 2-3 working days.</li>
				<li>No orders will be processsed if PO value is less than Rs 3000/-</li>
				<li>Chick for stock availability before placing order.</li>
                <li>Payment details must be sent for timely dispatch.</li>
			</ol>
        </div>
       <br><br>
        <button class="btn cyan waves-effect waves-light" type="submit" name="action" style="float:left;position: relative;left: 100px;width: 100px;">Submit</button>
		<br><br><br><br>
      </section>

	  

  </div>
  </form>

  </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">

    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

 <script>
    $(function(){
		$("#datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2055"
			
		});
	})
</script>

<script>
$('.spare_qty').keyup(function() { 
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('-');
	var ctid = arr['1'];
	
	if(parseInt($(this).val()) && parseInt($('#rate-'+ctid).val())){
		//alert("hello");
		var cal_amt = parseInt($(this).val()) * parseInt($('#rate-'+ctid).val());
		$('#spare_tot-'+ctid).val(cal_amt);
   }else{
	   $('#spare_tot-'+ctid).val('');
   }
   
   
    var vals = '';
   $('input[name="spare_tot[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
                vals += Number($(this).val());
				//alert(val);
				if(vals != 0){
				$('#basicamount').val(vals);
				}else{
					$('#basicamount').val('');
				}
					
				
				
				
            });
	
	var cst1 = $('#cst1').val();
	var cst1_arr = cst1.split('-');
	var tax_type = cst1_arr[1];
	
	var tax_amt = (vals * tax_type) / 100;
	if(tax_amt !=0){
	$('#cst').val(tax_amt);
	}else{
		$('#cst').val('');
	}
		
	
	var freight_amt = $('#freight').val();
	
	var total_spare_charge = $('#basicamount').val();
	
	if(parseInt($('#freight').val())){
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge) + parseInt(freight_amt);
		//alert("1");
		//alert(Total_amount);
		if(Total_amount)
		{
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
			
	}else{
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge);
			
		if(parseInt(Total_amount))
		{ //alert("2");
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
		}else{ //alert("2");
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
	}
	
   
});


$('#cst1').change(function() {
	var tax_name1 = $(this).val();
	var tax_name1_arr = tax_name1.split('-');
	var tax_name = tax_name1_arr[1];
	
	var basicamount= $('#basicamount').val();

	var tax_amt = (basicamount * tax_name) / 100;
	$('#cst').val(tax_amt);
	
	var freight_amt = $('#freight').val();
	
	if(parseInt($('#freight').val())){
		var Total_amount = parseInt(basicamount) + parseInt(tax_amt) + parseInt(freight_amt);
		//alert(Total_amount);
		//alert("3");
		if(Total_amount ){
			$('#totalamount').val(Total_amount);
			$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
		
	}else{
		var Total_amount = parseInt(basicamount) + parseInt(tax_amt);
		//alert(Total_amount);
		//alert("4");
		if(Total_amount){
			$('#totalamount').val(Total_amount);
			$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
		
	}
	
   
});

</script>


<!--<script>
$('.freight').keyup(function() { 
	var freight_amt = $(this).val();
	
	var totalamount = $('#totalamount1').val();
	
	if(parseInt($(this).val())){
		var Totall_amount = parseInt(freight_amt) + parseInt(totalamount);
		$('#totalamount').val(Totall_amount);
	}else{
		$('#totalamount').val(totalamount);
	}
	
});
</script>-->
<script>
$('.freight').keyup(function() { 
	var freight_amt = $(this).val();
	
	var totalamount = $('#totalamount1').val();
	var quantity= $('#spare_qty-0').val();
	if($('#totalamount1').val() ==''){
		//alert("hii");
		totalamount=0;
	}
	
	
	if(parseInt($(this).val())){
		var Totall_amount = parseInt(freight_amt) + parseInt(totalamount);
		//alert("1");
		
		//alert((Totall_amount));
		if(parseInt(Totall_amount)){
		$('#totalamount').val(Totall_amount);
		}else{
		$('#totalamount').val('');
		}
			
	}else{
		if(parseInt(totalamount)){
			//alert(totalamount);
		$('#totalamount').val(totalamount);
		}else{
		$('#totalamount').val('');
		}
	}
	
});
</script>



    <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css">

    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>
  <script>
   var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
  <script>
        $(function() {
             $(".spare_name").select2(); 
			 
			$(".select2-search, .select2-focusser").remove();

             /*$(".property_name").select2();       
             $(".property_type").select2(); 
             $(".property1_name").select2();  
			  $(".propertymulti").select2();  
			   $(".propertymulti1").select2();  
				 $(".reference_con").select2(); */ 	
                
                  
        });
		
		$(".freight,.spare_qty,.sino").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9 ]/g,""));
		});
		$(".cperson").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z ]/g,""));
		});
		
		$("#cont_name").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z ]/g,""));
		});
    </script>
	 
	 
	 
	 <!-- Add jQuery library -->
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	
<script>
var $= jQuery.noConflict();
function brinfo(id){

		$.fancybox.open({
					href : '<?php  echo base_url(); ?>customer/add_quickforspares/'+id,
					type : 'iframe',
					padding : 5
				});
}

</script>
   
 <script>
 function setSelectedUser(customer_name,cust_idd,spare_rowid) { //alert("JII");
	
	$('#custtest_'+spare_rowid).val(customer_name);
	$('#cust_id_'+spare_rowid).val(cust_idd);
	
}
 </script>

</body>

</html>