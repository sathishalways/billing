<style>
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top:1px solid #ccc !important;
    margin-bottom: 9px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
select {
     border: 1px solid #ccc; 
	 margin: 0 0 15px 0;
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

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('<tr> <td>  <select>  <option>Motorola</option>  <option>Sony Ericsson</option>  <option>Nokia</option>  <option>Apple</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td><td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);        
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>


<script type='text/javascript'>
$(window).load(function(){ 
$(document).ready(function() {

	    var cust_type_id = $("#cust_type").val();
		var land = cust_type_id.split('-');
		var id = land['0'];
		var corp = land['1'];
		//alert(id+'_'+corp);
		if(corp=='CORPORATE' || corp=='corporate' || corp=='Corporate' || corp=='corporate'){
			$(".box").not(".ready").hide();
			$(".box1").not(".ready1").hide();
			$(".ready").show();
			$(".ready1").show();
		}else{
			$(".box").not(".del").hide();
			$(".box1").not(".del1").hide();
			$(".del").show();
			$(".del1").show();
		}
		
		
		
		var cust_id = $('#customer_id').val();
		if(cust_id.length == '5'){
			var customerid = id+cust_id;
			$('#customer_id').val(customerid);
		}else{
			var cust_id2 = cust_id.substring(2, cust_id.length);
			var customerid = id+cust_id2;
			$('#customer_id').val(customerid);
		//var zoneid = cust_id1+zone_id;
		//$('#customer_id').val(zoneid);
	}
	
	});
});
</script>





<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var customer_id = document.frmCust.customer_id.value,
   customer_name = document.frmCust.customer_name.value,
   cust_type = document.frmCust.cust_type.value,
   company_name = document.frmCust.company_name.value,
   //mobile = document.frmCust.mobile.value,
   //email = document.frmCust.email.value,
   address = document.frmCust.address.value,
   //address1 = document.frmCust.address1.value,
   city = document.frmCust.city.value,
   state = document.frmCust.state.value,
   pincode = document.frmCust.pincode.value,
   cal_ref = document.frmCust.cal_ref.value;
	 
  
  /*  if( mobile == "" )
   {
     document.frmCust.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   } */
 if( customer_id == "" )
   { 
    document.frmCust.customer_id.focus() ;
	document.getElementById("errorBox").innerHTML = "enter the customer id.";
     return false;
   }
 if( customer_name == "" )
   {
     document.frmCust.customer_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name";
     return false;
   }
   if( cust_type == "" )
   {
     document.frmCust.cust_type.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer type";
     return false;
   }
   if( company_name == "" )
   {
     document.frmCust.company_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the sub company name";
     return false;
   }
   
  /* if( email == "" )
   {
     document.frmCust.email.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email";
     return false;
   } */
   
   
    if( address == "" )
   {
     document.frmCust.address.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the address";
     return false;
   }
    /* if( address1 == "" )
   {
     document.frmCust.address1.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the address1";
     return false;
   } */
   if( city == "" )
   {
     document.frmCust.city.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the city";
     return false;
   }
   if( state == "" )
   {
     document.frmCust.state.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the state";
     return false;
   }
   if( pincode == "" )
   {
     document.frmCust.pincode.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the pincode";
     return false;
   }
   
    if( cal_ref == "" )
   {
     document.frmCust.cal_ref.focus() ;
	 document.getElementById("errorBox").innerHTML = "select the call reference";
     return false;
   }
  
}

</script>
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
 
 .box{          
          box-shadow:none !important;

        }
		
		.box1{
       display: none;
		box-shadow:none !important;
      
    }
		
 </style>
<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
	var zone = $('#service_zone').val();
	var zones = zone.split('-');
	var zoneid = zones['0'];
	var zone_coverage = zones['2'];
	// alert(zoneid);
	
    var datastring='countid='+vl1+'&zoneid='+zoneid+'&zone_coverage='+zone_coverage;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>customer/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#myTable').append(result);
} 
});

});
  
});
</script>
  <script>
$(document).ready(function(){
   $('#cust_type').change(function(){ 
	    var cust_type_id = $(this).val();
		var land = cust_type_id.split('-');
		var id = land['0'];
		var corp = land['1'];
		//alert(id+'_'+corp);
		if(corp=='CORPORATE' || corp=='corporate' || corp=='Corporate' || corp=='corporate'){
			$(".box").not(".ready").hide();
			$(".box1").not(".ready1").hide();
			$(".ready").show();
			$(".ready1").show();
		}else{
			$(".box").not(".del").hide();
			$(".box1").not(".del1").hide();
			$(".del").show();
			$(".del1").show();
		}
		
		
		
		var cust_id = $('#customer_id').val();
		if(cust_id.length == '5'){
			var customerid = id+cust_id;
			$('#customer_id').val(customerid);
		}else{
			var cust_id2 = cust_id.substring(2, cust_id.length);
			var customerid = id+cust_id2;
			$('#customer_id').val(customerid);
		//var zoneid = cust_id1+zone_id;
		//$('#customer_id').val(zoneid);
	}
	
	
   });
   
   $('#service_zone').change(function(){ 
   
   if(document.getElementById('cust_type').selectedIndex == 0){
	   alert("Kindly Select Customer Type first");
   }else{
	   
	   var z_id = $(this).val();
	   var arr = z_id.split('-');
	   var zonid = arr['0'];
		var zone_id = arr['1'];
		var zone_coverage = arr['2'];
		
		$('#service_zone_loc option').each(function(){
			//alert(zonid);
			if(zonid==this.value){
				 //alert("Value: "+this.value);
				 $('#service_loc_coverage').val(zone_coverage);
				 $('#service_zone_loc').val(zonid);
			}
       
		
   });
		
		
	   //alert(zone_id);
   var cust_type_id = $('#customer_id').val();
   //alert(cust_type_id);
   if(cust_type_id.length == '7'){
	  // var cust_id = cust_type_id+zone_id;
	  var position = 2;
	   var output = [cust_type_id.slice(0, position), zone_id, cust_type_id.slice(position)].join('');
	   //alert(output)
	    $('#customer_id').val(output);
	}else{
	    //var cust_id1 = cust_type_id.substring(0, cust_type_id.length 2);
		//alert(str.replaceAt(2, zone_id));
		
		String.prototype.replaceAt=function(index, character) {
			return this.substr(0, index) + character + this.substr(index+character.length);
		}	
		strss = cust_type_id.replaceAt(2, zone_id);
		$('#customer_id').val(strss);
	}
	
	
   }
   
   
   });
 });
</script>
  <style>

.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}


.plusbutton {
    display: inline-block;
    padding: 0px 5px !important;
    margin-bottom: 10px !important;
    font-size: 14px;
	height: inherit !important;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
	background-color: #dbd0e1;
}
.plusbutton:hover{
	background-color: #dbd0e1;
	color:#fff;
	border:1px solid #dbd0e1;
}
.delbutton {
    display: inline-block;
    padding: 0px 5px !important;
    margin-bottom: 10px !important;
    font-size: 14px;
	height: inherit !important;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
	background-color: #dbd0e1;
}
.delbutton:hover{
	background-color: #dbd0e1;
	color:#fff;
	border:1px solid #dbd0e1;
}
</style>

<script>
$(document).ready(function(){
$('.del').keyup(function() { 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/checkMob",
data: dataString,
cache: false,
success: function(data) 
{ 	
	document.getElementById("errorBox").innerHTML = data;
	
} 
});

});

$('.ready').keyup(function() { 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/checkland_ln",
data: dataString,
cache: false,
success: function(data) 
{ 	
	document.getElementById("errorBox").innerHTML = data;
	
} 
});

});


});
</script>
 <script>
$(document).ready(function(){
$('#pincode').keyup(function() { 
var id=$(this).val();
//alert(id);
$("#service_zone > option").remove(); 

var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		if(data.service_loc.length > 0){
		   $('#service_zone').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#area_name').val(data.area_name);
		   $('#area_id').val(data.area_id);
		   
    });
} 
});

});



});
</script>

<script>
$(document).ready(function(){
$('.re_pincode').keyup(function() { 
//var id=$(this).val();

var idd=$(this).closest(this).attr('id');
//alert(idd);

var arr = idd.split('_');
var row_id = arr['1'];
 var id = $('#re-pincode_'+row_id).val();
//alert(pin);

$('#service_zone_loc_'+row_id+ "> option").remove();

var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone_loc_'+row_id).append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#service_zone_loc_'+row_id).append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#rearea_name_'+row_id).val(data.area_name);
		   $('#rearea_id_'+row_id).val(data.area_id);
		   
    });
} 
});

});



});
</script>



<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Edit Customer Details</h2>
<hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                 <form action="<?php echo base_url(); ?>customer/edit_customer" method="post" name="frmCust" onsubmit="return frmValidate()" autocomplete="off">
                      
<div id="errorBox"></div>
<?php foreach($list as $key){?> 
<table class="tableadd">

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Type Of Customer<span style="color:red;">*</span></label>
<select name="cust_type" id="cust_type" readonly>
 <option value="">---Select---</option>
 <?php foreach($customer_type as $custtypekey){ 
		if( $custtypekey->id==$key->customer_type){
	?>
			<option selected="selected" value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
		   <?php }	 else{?>
		   <option value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
 <?php } }?>
 
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<?php if($key->mobile=="" && isset($key->mobile)){?>
<label class="del1 box1">Mobile No<span style="color:red;">*</span></label>
<?php } ?>
<?php if($key->land_ln=="" && isset($key->land_ln)){?>
<label class="ready1 box1">Landline No<span style="color:red;">*</span></label>
<?php } ?>

<?php if($key->mobile!="" && isset($key->mobile)){?>
<label class="del box">Mobile No<span style="color:red;">*</span></label>
<?php } ?>
<?php if($key->land_ln!="" && isset($key->land_ln)){?>
<label class="ready box">Landline No<span style="color:red;">*</span></label>
<?php } ?>


<?php if($key->mobile=="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="" class="del1 box1">
<?php } ?>
<?php if($key->land_ln=="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="" class="ready1 box1">
<?php } ?>


<?php if($key->mobile!="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="<?php echo $key->mobile;?>" class="del box">
<?php } ?>
<?php if($key->land_ln!="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="<?php echo $key->land_ln;?>" class="ready box">
<?php } ?>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Customer ID<span style="color:red;">*</span></label>
<input type="text" name="customer_id" id="customer_id" class="customer" value="<?php echo $key->customer_id; ?>" readonly><input class="" value="<?php echo $key->id; ?>" name="cus_id" type="hidden" value="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Customer Name<span style="color:red;">*</span></label>
<input type="text" name="company_name" class="company" value="<?php echo $key->company_name; ?>">
</div>

</div>





<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Pincode<span style="color:red;">*</span></label>
<input type="text" name="pincode" id="pincode" class="pincode" value="<?php echo $key->pincode; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Zone<span style="color:red;">*</span></label>
<select name="service_zone" id="service_zone" readonly>
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		  if( $zonekey->id==$key->service_zone){
	?>
			<option selected="selected" value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{?>
			<option value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>	
	<?php } } ?>			
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Area</label>
<input type="text" name="area_name" class="" id="area_name" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key->area_name){echo $pinkey->area_name;}} ?>"><input type="hidden" name="area_id" class="" id="area_id" value="<?php echo $key->area_name; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Contact Name<span style="color:red;">*</span></label>
<input type="text" name="customer_name" id="customer_name" class=""  value="<?php echo $key->customer_name; ?>">
</div>
</div>


<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email Id</label>
<input type="text" name="email" id="email" class="email" value="<?php echo $key->email_id; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address<span style="color:red;">*</span></label>
<input type="text" name="address" id="address" class="adress" value="<?php echo $key->address; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address1</label>
<input type="text" name="address1" class="adress1" id="address1" value="<?php echo $key->address1; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Delivery Address</label>
<input type="text" name="del_address" class="adress1" id="del_address" value="<?php echo $key->del_address; ?>">
</div>

</div>


<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>City<span style="color:red;">*</span></label>
<input type="text" name="city" class="city" id="search-box" value="<?php echo $key->city; ?>"><div id="suggesstion-box" ></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>State<span style="color:red;">*</span></label>
	<select name="state" id="state">
  <option value="">---Select---</option>
	<?php foreach($state_list as $statekey){ 
		if( $statekey->id==$key->state){
	?>
			<option selected="selected" value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
	<?php } } ?>	
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Call Reference<span style="color:red;">*</span></label>
<select name="cal_ref" id="cal_ref">
			<option value="">---Select---</option>
			<option value="sr" <?php if($key->cal_ref=='sr'){?>selected="selected"<?php }?>>S.R Scales</option>
			<option value="am" <?php if($key->cal_ref=='am'){?>selected="selected"<?php }?>>Arihant Marketing</option>
		</select>
</div>


</div	>
<!--<tr>
<td><label>Type Of Customer<span style="color:red;">*</span></label></td>
<td>
 <select name="cust_type" id="cust_type" readonly>
 <option value="">---Select---</option>
 <?php foreach($customer_type as $custtypekey){ 
		if( $custtypekey->id==$key->customer_type){
	?>
			<option selected="selected" value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
		   <?php }	 else{?>
		   <option value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
 <?php } }?>
 
</select>
</td>

<td >
<?php if($key->mobile=="" && isset($key->mobile)){?>
<label class="del1 box1">Mobile No<span style="color:red;">*</span></label>
<?php } ?>
<?php if($key->land_ln=="" && isset($key->land_ln)){?>
<label class="ready1 box1">Landline No<span style="color:red;">*</span></label>
<?php } ?>




<?php if($key->mobile!="" && isset($key->mobile)){?>
<label class="del box">Mobile No<span style="color:red;">*</span></label>
<?php } ?>
<?php if($key->land_ln!="" && isset($key->land_ln)){?>
<label class="ready box">Landline No<span style="color:red;">*</span></label>
<?php } ?>


</td>



<td>
<?php if($key->mobile=="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="" class="del1 box1">
<?php } ?>
<?php if($key->land_ln=="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="" class="ready1 box1">
<?php } ?>


<?php if($key->mobile!="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="<?php echo $key->mobile;?>" class="del box">
<?php } ?>
<?php if($key->land_ln!="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="<?php echo $key->land_ln;?>" class="ready box">
<?php } ?>




</td>

<!--<td><label>Mobile No<span style="color:red;">*</span></label></td><td><input type="text" name="mobile" id="mobile" class="mobile" value="<?php echo $key->mobile; ?>"></td>-->


<!--</tr>

<tr>
<td><label>Customer ID<span style="color:red;">*</span></label></td><td><input type="text" name="customer_id" id="customer_id" class="customer" value="<?php echo $key->customer_id; ?>" readonly><input class="" value="<?php echo $key->id; ?>" name="cus_id" type="hidden" value=""></td>
<td><label>Customer Name<span style="color:red;">*</span></label></td><td><input type="text" name="company_name" class="company" value="<?php echo $key->company_name; ?>"></td>

</tr>
<tr>
<td><label>Pincode<span style="color:red;">*</span></label></td><td><input type="text" name="pincode" id="pincode" class="pincode" value="<?php echo $key->pincode; ?>"></td>
<td><label>Service Zone<span style="color:red;">*</span></label></td>
<td>
 <select name="service_zone" id="service_zone" readonly>
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		  if( $zonekey->id==$key->service_zone){
	?>
			<option selected="selected" value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{?>
			<option value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>	
	<?php } } ?>			
</select>
</td>
</tr>
<tr>
<td><label>Area</label></td><td><input type="text" name="area_name" class="" id="area_name" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key->area_name){echo $pinkey->area_name;}} ?>"><input type="hidden" name="area_id" class="" id="area_id" value="<?php echo $key->area_name; ?>"></td>
<td><label>Contact Name<span style="color:red;">*</span></label></td><td><input type="text" name="customer_name" id="customer_name" class=""  value="<?php echo $key->customer_name; ?>"></td>

</tr>
<tr>
<td><label>Email Id</label></td><td><input type="text" name="email" id="email" class="email" value="<?php echo $key->email_id; ?>"></td>
<td><label>Address<span style="color:red;">*</span></label></td><td><input type="text" name="address" id="address" class="adress" value="<?php echo $key->address; ?>"></td>
</tr>
<tr>
<td><label>Address1</label></td><td><input type="text" name="address1" class="adress1" id="address1" value="<?php echo $key->address1; ?>"></td>
<td><label>Delivery Address</label></td><td><input type="text" name="del_address" class="adress1" id="del_address" value="<?php echo $key->del_address; ?>"></td>

</tr>
<tr>
<td><label>City<span style="color:red;">*</span></label></td><td><input type="text" name="city" class="city" id="search-box" value="<?php echo $key->city; ?>"><div id="suggesstion-box" ></div></td>
<td><label>State<span style="color:red;">*</span></label></td><td>
	<select name="state" id="state">
  <option value="">---Select---</option>
	<?php foreach($state_list as $statekey){ 
		if( $statekey->id==$key->state){
	?>
			<option selected="selected" value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
	<?php } } ?>	
</select>
</td>
</tr>


<tr>
	<td><label>Call Reference<span style="color:red;">*</span></label></td>
	<td>
		<select name="cal_ref" id="cal_ref">
			<option value="">---Select---</option>
			<option value="sr" <?php if($key->cal_ref=='sr'){?>selected="selected"<?php }?>>S.R Scales</option>
			<option value="am" <?php if($key->cal_ref=='am'){?>selected="selected"<?php }?>>Arihant Marketing</option>
		</select>
	</td>
</tr>-->


</table>

<?php } ?>

<!-- </table>
 <table id="table1" class="tableadd2" style="margin-bottom: 20px;">
  
  
<label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>

 
  
  <tr class="back" >
  <td>Product Name</td>
  <td>Category</td>
  <td>Model</td>
  <td>Serial No</td>  
  </tr>
   <tr>
  <td>
  <select>
  <option>Motorola</option>
  <option>Sony Ericsson</option>
  <option>Nokia</option>
  <option>Apple</option>
  </select>
  </td>
  <td><input type="text" value="" name="" class="" id=""></td>
  <td><input type="text" value="" name="" class="" id=""></td>
  <td><input type="text" value="" name="" class="" id=""></td>
 
  </tr>
  </table>


<a id="addRowBtn" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 10px;
color: white; border-radius:5px;">Add Row</a>

<table class="tableadd">-->

<div class="col-md-12" id="table2">

		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>Lab Name<span style="color:red;">*</span></label>
			 
			  <div id="customer_name_error" style="color:red;"></div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label><span style="color:red;"></span></label>
			
		</div>		
        <div class="col-md-3 col-sm-6 col-xs-12">
			<a class="btn plusbutton" id="addRowBtn"><i class="fa fa-plus-circle" aria-hidden="true" style="font-size:10px"></i></a>
											</div>	
</div>
<?php foreach($lablist as $roww){ ?>
<div class="col-md-12" id="table3">

		<div class="col-md-3 col-sm-6 col-xs-12">
			
			 <select id="route" name="lab_name[]" class="form-control1 myroute ">
											   <option value="">Select lab</option>
											
				<?php							
											
		if($roww->customer_id == $key->id){
	?>
			<option selected="selected" value="<?php echo $roww->id; ?>"><?php echo $roww->lab_name; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $roww->id; ?>"><?php echo $roww->lab_name; ?></option>
	<?php } ?>
												</select>
			  <div id="customer_name_error" style="color:red;"></div>
		</div>
		<input type="hidden" name="lab_id[]" value="<?php echo $roww->cutslab;?>">
		<div class="col-md-3 col-sm-6 col-xs-12">
			
			<input type="text" class="form-control" name="lab_value[]" value="<?php echo $roww->lab_value;?>"/>
		</div>		
        <div class="col-md-3 col-sm-6 col-xs-12">
			<a class="btn delRowBtn delbutton" id="<?php echo $roww->cutslab;?>" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
											</div>	
</div>
  <script>
  $(function(){
$('.delRowBtn').click(function(event) {
	//alert("asfh");
                               var currentElemID = $(this).attr("id");
							   //alert(currentElemID);
							   
							      var dataString = 'currentElemID='+currentElemID;

  //alert(dataString);
$.post('<?php  echo base_url(); ?>Customer/delete_status',dataString,function(data){ 
      
       });
							  
							  
      
});	  
  });
  </script>
<?php } ?>	
<div class="lastdiv"></div>
<table id="myTable" class="tableadd">
<h4><strong>Add Service Location</strong></h4><br/>

<?php $i=1; foreach($list1 as $key1){ if($key1->branch_name!=""){?>
<!--<tr>
<td><label style="font-weight: bold;font-size: 14px;color: #000;line-height: 4;">Add Service Location</label></td>
</tr>-->
<?php if($i==1){?>
<!--<tr>
<td colspan="2">
<input type="checkbox" name="billingtoo" id="billingtoo" style="margin-left:-95px;height: 14px !important;">
<em style="font-style: normal;
color: rgb(5, 94, 135); margin-left: -80px;">Same as above address</em></td>
</tr>-->
<?php } ?>

<?php if($i==1){?>
<div class="col-md-12">
<input type="checkbox" name="billingtoo" id="billingtoo">
<em style="font-style: normal;
color: rgb(5, 94, 135);margin-bottom: 13px;
">Same as above address</em>
</div>
<?php } ?>

<div class="col-md-12">

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Branch Name</label>
<input type="text" name="branch_name[]" class="branch_name" value="<?php echo $key1->branch_name; ?>"><input class="" value="<?php echo $key1->id; ?>" name="cust_id[]" type="hidden" value="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Landline No</label>
<input type="text" name="phone[]" id="phone" class="mobile" value="<?php echo $key1->landline; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address</label>
<input type="text" name="re_address[]" class="re_address" id="re_address" value="<?php echo $key1->address; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address 1</label>
<input type="text" name="re_address1[]" class="re_address1" id="re_address1" value="<?php echo $key1->address1; ?>">
</div>

</div>





<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>City </label>
<input type="text" name="re_city[]" class="city" id="re_city" value="<?php echo $key1->city; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>State</label>
<input type="text" name="re_state[]" class="re_state" id="re_state" value="<?php echo $key1->state; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Pincode</label>
<input type="text" name="re_pincode[]" id="re-pincode_<?php echo $i; ?>" class="re_pincode" value="<?php echo $key1->pincode; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Zone</label>
<select name="service_zone_loc[]" id="service_zone_loc_<?php echo $i; ?>">
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		if($zonekey->id == $key1->service_zone_loc){
	?>
			<option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
	<?php } }?>
</select>
<input type="hidden" name="service_loc_coverage[]" id="service_loc_coverage" class="contact_name" value="<?php echo $key1->zone_coverage; ?>">
</div>

</div>



<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Area</label>
<input type="text" name="area_name" class="" id="rearea_name_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $pinkey->area_name;}} ?>"><input type="hidden" name="area_idd[]" class="rearea_id" id="rearea_id_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $key1->area;}} ?>  ">
</div>

</div>


<!--<tr>
<td><label>Branch Name</label></td><td><input type="text" name="branch_name[]" class="branch_name" value="<?php echo $key1->branch_name; ?>"><input class="" value="<?php echo $key1->id; ?>" name="cust_id[]" type="hidden" value=""></td>
<td><label>Landline No</label></td><td><input type="text" name="phone[]" id="phone" class="mobile" value="<?php echo $key1->landline; ?>"></td>


</tr>

<tr>
<td><label>Address</label></td><td><input type="text" name="re_address[]" class="re_address" id="re_address" value="<?php echo $key1->address; ?>"></td>
<td><label>Address 1</label></td><td><input type="text" name="re_address1[]" class="re_address1" id="re_address1" value="<?php echo $key1->address1; ?>"></td>

</tr>
<tr>
<td><label>City </label></td><td><input type="text" name="re_city[]" class="city" id="re_city" value="<?php echo $key1->city; ?>"></td><td><label>State</label></td><td><input type="text" name="re_state[]" class="re_state" id="re_state" value="<?php echo $key1->state; ?>"></td>
</tr>

<tr>
<td><label>Pincode</label></td><td><input type="text" name="re_pincode[]" id="re-pincode_<?php echo $i; ?>" class="re_pincode" value="<?php echo $key1->pincode; ?>"></td>
<td><label>Service Zone</label></td>
<td>
 <select name="service_zone_loc[]" id="service_zone_loc_<?php echo $i; ?>">
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		if($zonekey->id == $key1->service_zone_loc){
	?>
			<option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
	<?php } }?>
</select>
<input type="hidden" name="service_loc_coverage[]" id="service_loc_coverage" class="contact_name" value="<?php echo $key1->zone_coverage; ?>">
</td>
</tr>
<tr><td><label>Area</label></td><td><input type="text" name="area_name" class="" id="rearea_name_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $pinkey->area_name;}} ?>"><input type="hidden" name="area_idd[]" class="rearea_id" id="rearea_id_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $key1->area;}} ?>  "></td></tr>-->

<!--<tr><td><label style="font-weight: bold;">Add Contact</label></td><td></td></tr>
<tr>
<td><label>Contact Name</label></td><td><input type="text" name="contact_name[]" id="re_contact_name" class="contact_name" value="<?php echo $key1->contact_name; ?>"></td><td><label>Designation</label></td><td><input type="text" name="designation[]" class="designation" value="<?php echo $key1->designation; ?>"></td>
</tr>

<tr>
<td><label>Mobile</label></td><td><input type="text" name="mobiles[]" id="re_mobiles" class="mobile" value="<?php echo $key1->mobile; ?>"></td>
<td><label>Email Id</label></td><td><input type="text" name="emails[]" id="re_emails" class="email" value="<?php echo $key1->email_id; ?>"></td>
</tr>-->
<?php } $i++; } ?>

<h4><strong>Add Contact</strong></h4><br>
<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Contact Name</label>
<input type="text" name="contact_name[]" id="re_contact_name" class="contact_name" value="<?php echo $key1->contact_name; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Designation</label>
<input type="text" name="designation[]" class="designation" value="<?php echo $key1->designation; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Mobile</label>
<input type="text" name="mobiles[]" id="re_mobiles" class="mobile" value="<?php echo $key1->mobile; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email Id</label>
<input type="text" name="emails[]" id="re_emails" class="email" value="<?php echo $key1->email_id; ?>">
</div>

</div>
</table>
<input type="hidden" id="countid" name="countid" value="<?php echo $i; ?>">
<br/><br/>


<a class="link" id="addMoreRows" >Add Service & Contact</a><button class="btn cyan waves-effect waves-light " type="submit" >Submit
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
  
<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
  <script type='text/javascript'>
$(function(){
    var tbl = $(".lastdiv");
 var i = 1;   
    $("#addRowBtn").click(function(){
        $('<div class="col-md-12"><div class="col-md-3 col-sm-6 col-xs-12"><select id="route" name="lab_name[]" class="form-control1 myroute "><option value="">Select lab</option><?php foreach($lab as $roww){?><option value="<?php echo $roww->id;?>"><?php echo $roww->lab_name;?></option> <?php } ?></select><div id="customer_name_error" style="color:red;"></div></div><div class="col-md-3 col-sm-6 col-xs-12"><input type="text" class="form-control" name="lab_value[]"/></div><div class="col-md-3 col-sm-6 col-xs-12"><a class="btn btn-danger delbutton delRowBtn"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>').appendTo(tbl); 
			
    });
	
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });    
    
});
</script>

<script>
$(document).ready(function(){
   $('#billingtoo').click(function(){//alert("haiiii");
	//$addr = $('#address').val();
	var id = $(this).val();
	//alert(id);
	//var stateid = $('#state').val();
	$('#re_address').val($('#address').val());
	$('#re_address1').val($('#address1').val());
	$('#re_city').val($('#search-box').val());
	//$('#re_state').val($('#state').val());
	$('#re-pincode').val($('#pincode').val());
	$('#rearea_name').val($('#area_name').val());
	$('#rearea_id').val($('#area_id').val());
	$('#re_contact_name').val($('#customer_name').val());
	$('#re_emails').val($('#email').val());
	$('#re_mobiles').val($('#mobile').val());
	
	$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_state",
		data:'stateid='+$('#state').val(),
		
		success: function(data)
			
			{ 
			$.each(data, function(index, data){//alert(data.branch_name);
            $('#re_state').val(data.state);
            });
} 
		
		});
		
   });
 });
</script>

<script type='text/javascript'>//<![CDATA[ 
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
    f.re_address.value = f.address.value;
	 f.re_address1.value = f.address1.value;
    f.re_city.value = f.city.value;
	f.re_state.value = f.state.value;
	f.re_pincode.value = f.pincode.value;
  }
 
}

</script>

  
  <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
  
  <script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_city",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data)
			
			{ 
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
} 
		
		});
	});
});

function selectCountry(val) { 
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
  
  
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
  
 
  
    
      <script type='text/javascript' src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js"></script>
	  
	  <script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
    $('#phone').mask('(999) 99999999');
    $('#mobile').mask('9999999999');
	$('#mobiles').mask('9999999999');
    $('#pincode').mask('999999');
     $('#re-pincode').mask('999999');
   $('#re-pincode11').mask('999999');
});
});//]]> 

</script>

  <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  -->  

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var jQuery_2_1_1 = $.noConflict(true);
		</script>
</body>

</html>