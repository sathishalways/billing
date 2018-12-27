
<head>
<style>
input[type=text]:-moz-read-only { /* For Firefox */
    background-color: #eee;
}

input[type=text]:read-only { 
    background-color: #eee;
}
.btn {
    
	text-transform:none !important;
}
.purchasedetail {
    /* position: relative; */
    /* top: -63px; */
    /* left: 50px; */
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="<?php echo base_url(); ?>assets/select/jquery-1.8.0.min.js"></script>


<style>
.delRowBtn{
	background: #055E87 none repeat scroll 0% 0% !important;
	color:#fff;
}
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
			height: 50px;
		}
		.tableadd1 tr td select
		{
			border: 1px solid #9A9A9B;
border-radius: 5px;
width:150px;
		}
		.tableadd1 tr td textarea
		{
			width:200px;
			border: 1px solid #9A9A9B;
			height:70px;
			border-radius: 5px;
		}
		.tableadd1 tr td label {
 
    line-height: 0;
	color:white;
	
   
}
.tableadd1 tr
		{
			height: 35px;
		}
.tableadd1 tr td.plus
{
	padding-top: 14px;
}
.tableadd1 tr td.plus input
{
	width:70px;
}
.tableadd1 tr td input
{
	
	height:25px;
border-radius: 3px;
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
.rowadd {
    border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
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
  border: 1px solid #ccc;
  border-radius: 2px;
  padding: 5px;
  float:right;
  position: relative;
 top: -55px;
    left: -193px;
 }
  input[id=cst]{
	 width: 100px;
  border: 1px solid #ccc;
  border-radius: 2px;
  padding: 5px;
  float:right;
  position: relative;
  top: -61px;
    left: -193px;
 }
  input[id=freight]{
	 width: 100px;
  border: 1px solid #ccc;
  border-radius: 2px;
  padding: 5px;
  float:right;
  position: relative;
  top: -56px;
    left: -81px;
 }
  input[id=totalamount]{
	 width: 100px;
  border: 1px solid #ccc;
  border-radius: 2px;
  padding: 5px;
  float:right;
  position: relative;
  top: -52px;
    left: 30px;
 }
 
.tableadd tr td input {
  width: 238px;
  height: 33px;
  /* border: 1px solid #B3B3B3; */
  border-radius: 5px;
  padding-left: 10px;
}
.rowadd{cursor:pointer;}
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
	$( "#errorbox1" ).text( "Enter the Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'19px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#to_addr" ).val() === "" ) {
	$( "#errorbox2" ).text( "Enter the Address" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#to_cont_name" ).val() === "" ) {
	$( "#errorbox3" ).text( "Enter the Contact Person " ).show().css({'color':'#ff0000','position':'relative','bottom':'19px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#to_cont_no" ).val() === "" ) {
	$( "#errorbox4" ).text( "Enter the Contact No." ).show().css({'color':'#ff0000','position':'relative','bottom':'19px','font-size':'10px'});
    event.preventDefault();
  }
   if ( $( "#spare_name-0" ).val() === "" ) {
	$( "#errorbox5" ).text( "Select the Item Name" ).show().css({'color':'#ff0000','position':'relative','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( ".spare_qty" ).val() === "" ) {
	$( "#errorbox6" ).text( "Enter the Quantity" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#sr_no" ).val() === "" ) {
	$( "#errorbox7" ).text( "Enter the Serial No." ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  

  }); 
});

   </script>
   <script>
    $(document).ready(function(){
	var regemail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		var regemail1=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
	
		$('#pi,#tin').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9]/g,'') );
        });
		
		$('#to_cont_no,#cont_no,#sr_no,.spare_qty').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		
		 $('input:text[id="to_cont_mail"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9@. ]/g,'') );
        });
		
		$('input:text[id="mailv"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9@. ]/g,'') );
        });
		$('input:text[id="cont_name"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z]/g,'') );
        });
		
		$('#from_cont_mail').change(function(){
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
		$("#spare_name-0").change(function(){
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
		
<script>
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
</script>




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
		//alert(check);
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
		<form action="<?php echo base_url(); ?>Spare/update_purchase_order" method="post" name="frmSpareEng" autocomplete="off">
          <div class="section">
		  
		  
		    <h2>Edit Spares Purchase Order</h2>

          
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

<div><label>Company Name </label></div>
<div><input type="text" name="comp_name" id="comp_name" value="<?php echo $comkey->name; ?>"></div>

<div><label>Address </label></div>
<div><textarea name="addr" id="addr" maxlength="250"><?php echo $comkey->addr1.' '.$comkey->addr2; ?></textarea></div>

<div><label>Contact Person </label></div>
<div><input type="text" name="cont_name" id="cont_name" value="Sandhya" maxlength="50"></div>

<div><label>Contact No.</label></div>
<div> <input type="text" name="cont_no" id="cont_no" value="" maxlength="15"></div>

<div><label>Mail ID </label></div>
<div> <input type="text" name="" id="from_cont_mail" value=""></div>

</div>
 <?php } ?>
<?php foreach($get_purchase_ordersbyid as $vendorkey){ ?>
<div class="col-md-3">
<div><label><b>To,</b></label></div>

<div><label>Vendor Name </label><span style="color:red;">*</span></div>
<div><input type="text" name="to_name" id="to_name" maxlength="50" value="<?php echo $vendorkey->to_name; ?>"><span style="color:red;"    id="errorbox1"></span></div>

<!--<input type="text" name="vendor_name" id="vendor_name" value="">-->
<div><label>Address </label><span style="color:red;">*</span></div>
<div><textarea name="to_addr" maxlength="250" id="to_addr"><?php echo $vendorkey->to_addr; ?></textarea><span style="color:red;"    id="errorbox2"></span></div>

<!--<textarea name="vendor_addr" id="vendor_addr"></textarea>-->
<div><label>Contact Person </label><span style="color:red;">*</span></div>
<div><input type="text" class="cperson" name="to_cont_name" id="to_cont_name" maxlength="50" value="<?php echo $vendorkey->to_cont_name; ?>"><span style="color:red;"    id="errorbox3"></span></div>
<!--<input type="text" name="vendor_cont_name" id="vendor_cont_name" value="">-->

<div><label>Contact No. </label><span style="color:red;">*</span></div>
<div><input type="text" name="to_cont_no" id="to_cont_no" value="<?php echo $vendorkey->to_cont_no; ?>" maxlength="15"><span style="color:red;"    id="errorbox4"></span></div>

<!--<input type="text" name="vendor_cont_no" id="vendor_cont_no" value="">-->
<div><label>Mail ID </label></div>
<div><input type="text" name="to_cont_mail" id="to_cont_mail" value="<?php echo $vendorkey->to_cont_mail; ?>"></div>
<!--<input type="text" name="vendor_mail" id="vendor_mail" value="">-->

</div>
<?php } ?>



<?php foreach($get_purchase_ordersbyid as $key2){ ?>
<div class="tableadd tableleft col-md-3" id="addtable" >
<div></div>
<div><label>Date </label></div>
<div><input type="text" id="datepicker" name="todaydate" class="purchasedetail"  value="<?php echo $key2->todaydate;?>"><input type="hidden" name="po_id" id="po_id" value="<?php echo $key2->id; ?>"></div>

<div><label>P.I / Ref No. </label></div>
<div><input type="text" name="refno" class="pipurchasedetail" maxlength="25" value="<?php echo $key2->refno;?>" id="pi"></div>

<div><label>TIN / CST No. </label></div>
<div><input type="text" name="cst_no" class="cstpurchasedetail" maxlength="25" value="<?php echo $key2->cst_no;?>" id="tin"></div>

</div>
<?php } ?>
			   
	</div>		   
			  <div style="margin: 30px 0px;">
			  
			  
			  
<table id="table1" class="tableadd1" style="width:100%;">
<tr style="background: rgb(112, 66, 139) none repeat scroll 0% 0%"><td><label>SI. No.</label><span style="color:red;">*</span></td>
<td><label>Part Number & Item Name</label><span style="color:red;">*</span></td>
<td><label>Qty</label><span style="color:red;">*</span></td>
<td><label>Rate per Unit</label></td>
<td><label>Total Amount</label></td></tr>
<?php $i=0;foreach($get_purchase_orders_sparesbyid as $sparekey){ ?>
<tr>
<td class="plus"><input type="text" class="sino" name="sr_no[]" id="sr_no" value="<?php echo $sparekey->sr_no;?>" maxlength="5"><br><span style="color:red;"id="errorbox7"></td>
<td><select name="spare_name[]" id="spare_name-0" class="chosen-select form-control spare_name">
           <option value="">---Select---</option>
           <?php foreach($spare_list as $sparekey1){
				if($sparekey1->id==$sparekey->spare_name){?>
			<option selected="selected" value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name; ?></option>
		   <?php } else{?>
		 	 <option value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name; ?></option>
		   <?php } }?>
          </select><br><span style="color:red;"id="errorbox5"></td>
		  
		  <td class="plus"><input type="text" name="spare_qty[]" id="spare_qty-0" class="spare_qty" value="<?php if($sparekey->spare_qty !=0){ echo $sparekey->spare_qty;}?>" maxlength="5"><br><span style="color:red;"id="errorbox6"></td>
		  
		  <td class="plus"><input type="text" name="rate[]" id="rate-0" value="<?php if($sparekey->rate !=0){ echo $sparekey->rate;}?>" readonly></td>
		  
		  <td class="plus"><input type="text" name="spare_tot[]" id="spare_tot-0" style="width:100px" value="<?php if($sparekey->spare_tot !=0){echo $sparekey->spare_tot;}?>" readonly></td>
		  <?php if($i==0){?>
		<td style="border:none !important;">
<a id="addMoreRows" class="rowadd " ><i class="fa fa-plus-square" style="color:#70428b;"></i></a></td>
<?php }else{?>
<td style="border:none !important;">
<a onclick="$(this).closest('tr').remove();" ><i class="fa fa-trash" style="color:#70428b;"></i></a></td>
<?php }?>

</tr>
<?php	$i++; } ?>
</table>
<br>
<?php foreach($get_purchase_ordersbyid as $key3){ ?>

<div class="col-md-6" style=" float: right;
    margin-right:-123px;">
<div><label style="margin-left: 51px;">Basic Amount</label></div><br>
<div><input type="text" name="basicamount" id="basicamount" class="bamount" value="<?php if($key3->basicamount !=0){echo $key3->basicamount; }?>" readonly></div>


<div><label style="margin-left: 51px;">
<select name="cst1" id="cst1" class="cst1">
           <?php foreach($tax_list as $taxkey){ 
					if($taxkey->tax_name!="" && isset($taxkey->tax_name)){
						if($taxkey->id==$key3->tax_id){
		   ?>
			<option selected='selected' value="<?php echo $taxkey->id.'-'.$taxkey->tax_percentage; ?>"><?php echo $taxkey->tax_name.'@'.$taxkey->tax_percentage; ?></option>
		   <?php } else{ ?>
			<option value="<?php echo $taxkey->id.'-'.$taxkey->tax_percentage; ?>"><?php echo $taxkey->tax_name.'@'.$taxkey->tax_percentage; ?></option>
		   <?php }}}?>	
			
          </select>
		  </label></div><br>
		  <div><input type="text" name="cst" id="cst" class="bamount" value="<?php if($key3->cst !=0){ echo $key3->cst;} ?>" readonly></div>
		  
		  
		  
<div><label style="margin-left: 51px;">Freight</label></div><br>
<div><input type="text" name="freight" id="freight" class="freight" value="<?php if($key3->freight !=0){echo $key3->freight; }?>" maxlength="10"></div>

<div><label style="margin-left: 51px;">Total Amount</label></div><br>
<div><input type="text" name="totalamount" id="totalamount" class="bamount" value="<?php if($key3->totalamount !=0){echo $key3->totalamount; }?>" maxlength="10" readonly><input type="hidden" name="totalamount1" id="totalamount1" class="bamount" value="<?php echo $key3->totalamount; ?>">
<?php } ?>
<input type="hidden" name="countid" id="countid" class="" value="0">
</div>

</div>

<br><br>




                </div>
				
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
      
<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $sparekey->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->

           
          </div>
		  
		  <p><b>Imp Note:</b> Minimum order value should be Rs. 3000/- for spare parts.</p>
		  <p><b>Note:</b> If Shipping address is different form above address pls mention here.</p>
		 <?php foreach($get_purchase_ordersbyid as $key4){ ?>
		 <!--<p><b>Address:</b> <textarea name="spec_addr" col="5" rows="5" class="form-control" style="width:280px;position:relative;left:70px;top:-23px"><?php echo $key4->spec_addr; ?></textarea></p>
		 
		  <p><b>Any Specific instruction:</b> <textarea name="spec_ins" col="5" rows="5" class="form-control" style="width:280px;position:relative;left:175px;top:-23px"><?php echo $key4->spec_ins; ?></textarea></p><br><br>-->
		  <div class="col-md-12"> 
		  <div class="col-md-3" style="margin-right: 87px;">
		  <div><b>Address:</b></div> 
		  <div><textarea name="spec_addr" col="5" rows="5" class="form-control" style="width:280px;"><?php echo $key4->spec_addr; ?></textarea></p></div>
		  </div>
		  
		  <div style="col-md-3">
		  <div><b>Any Specific instruction:</b></div>
          <div><textarea name="spec_ins" col="5" rows="5" class="form-control"  style="width:280px;"><?php echo $key4->spec_ins; ?></textarea></div>
         </div>
		</div> 
		  
		  
		  
         <?php } ?>
		  <p><b>Terms and Conditions:</b><br>
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
        <a href="<?php echo base_url(); ?>Spare/print_purchase_order/<?php echo $key2->id; ?>" class="btn cyan waves-effect waves-light" style="right: -11px;
    height: 38px;
    width: 163px;
    font-size: 13px;" target="_blank">Print Purchase Order</a>
		
		<button class="btn cyan waves-effect waves-light" type="submit" name="action" style="float:left;position: relative;left: 0px;    width: 100px;">Submit</button>
			
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
		if(cal_amt !=0){
		$('#spare_tot-'+ctid).val(cal_amt);
		}else{
			$('#spare_tot-'+ctid).val('');
		}
   }else{
	   $('#spare_tot-'+ctid).val('');
   }
   
   
    var vals = 0;
   $('input[name="spare_tot[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
                vals += Number($(this).val());
				//alert(val);
				if(vals !=0){
				$('#basicamount').val(vals);
				}else{
				$('#basicamount').val('');
				}
				
				
            });
	
	var cst1 = $('#cst1').val();
	var cst1_arr = cst1.split('-');
	var tax_type = cst1_arr[1];
	
	var tax_amt = (vals * tax_type) / 100;
	
	//var tax_amt = (vals * 14.5) / 100;
	if(tax_amt !=0){
	$('#cst').val(tax_amt);
	}else{
		$('#cst').val('');
	}
	
	var freight_amt = $('#freight').val();
	
	var total_spare_charge = $('#basicamount').val();
	
	if(parseInt($('#freight').val())){
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge) + parseInt(freight_amt);
		//alert(Total_amount);
		if(parseInt(Total_amount)){
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
	}else{
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge);
		//alert(Total_amount);
		if(parseInt(Total_amount)){
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
		}else{
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
		if(Total_amount){
			$('#totalamount').val(Total_amount);
			$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
			$('#totalamount1').val('');
		}
		
	}else{
		var Total_amount = parseInt(basicamount) + parseInt(tax_amt);
		//alert(Total_amount);
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


<script>
$('.freight').keyup(function() { 
	var freight_amt = $(this).val();
	
	var totalamount = $('#totalamount1').val();
	
	if(parseInt($(this).val())){
		var Totall_amount = parseInt(freight_amt) + parseInt(totalamount);
		//alert("1");
		//alert(Totall_amount);
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