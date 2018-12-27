<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('   <table  class="tableadd" ><label style="color: black;    font-size: 15px;    font-weight: bold; margin-bottom:20px;">Add Product</label>  <tr>  <td><label>Serial No</label></td> <td>  <select>  <option>---Select---</option>  <option>12344</option>  <option>34546</option>  <option>456456</option>  <option>34657</option>  </select>  </td><td><label>Category</label></td><td ><select >            <option value="">---Select---</option>           <option value="Motorola">Air Conditioner</option>		  <option value="Sony Ericsson">Television</option>		   <option value="Nokia">Digital Camera</option>		    <option value="Apple">Mobile Phone</option>           <option value="Samsung">Cash Counting Machine</option>		    <option value="Samsung">Washing Machine</option>          </select></td>    </tr><tr><td><label>SubCategory</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Subcategory 1</option>		  <option value="Sony Ericsson">Subcategory 2</option>		   <option value="Nokia">Subcategory 3</option>		    <option value="Apple">Subcategory 4</option>           <option value="Samsung">Subcategory 5</option>  </select></td><td ><label>Brand Name</label></td><td style="width:200px;"><select >            <option value="">---Select---</option>           <option value="Motorola">Brand 1</option>		  <option value="Sony Ericsson">Brand 2</option>		   <option value="Nokia">Brand 3</option>		    <option value="Apple">Brand 4</option>           <option value="Samsung">Brand 5</option> </select></td></tr> <tr> <td><label>Model</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Model 1</option>		  <option value="Sony Ericsson">Model 2</option>		   <option value="Nokia">Model 3</option>		    <option value="Apple">Model 4</option>           <option value="Samsung">Model 5</option>          </select></td><td><label>Warranty Date</label></td><td><input id="datepicker2" type="text" name="datepicker"></td></tr> <tr> <td><label>Machine Status</label></td> <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Site</label></td>    <td><select><option>---Select---</option><option>OnSite</option><option>OffSite</option></select></td></tr> <tr> <td><label>Service Type</label></td>  <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Service Category</label></td>    <td><select><option>---Select---</option><option>Installation</option><option>General</option><option>Extra Fitting</option><option>Major</option></select></td></tr>  <tr>  <td><label>Zone</label></td>  <td><select><option>---Select---</option><option>Chennai</option><option>Bangalore</option><option>Trichy</option><option>Kilpauk</option></select></td><td><label>Problem</label></td>    <td><select><option>---Select---</option><option>Repair</option><option>Problem 1</option><option>Problem 2</option><option>Problem 3</option></select></td></tr>   <tr>   <td><label>Assign To</label></td>   <td><select><option>---Select---</option><option>Vishnu</option><option>Suresh</option><option>Manikandan</option><option>Bala</option></select></td></tr><tr><td><label style="font-weight:bold;">Received</label></td>   </tr>  </table>   <table style="margin-bottom: 40px;"><tr><td><ul class="recei"><li><label>Charger</label></li><li><label>Data Cable</label></li><li><label>Battery</label></li><li><label>Headset</label></li><li><label>Cover</label></li></ul></td></tr><tr><td><ul class="recei"><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li></ul></td></tr></table> ').appendTo(tbl);   
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 

/* $(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
});
}); */
	
    
});
});//]]>  

</script>
<style>
.tableadd2 tr td input {
    border-radius: 5px;
    height: 33px;
    margin-top: 17px;
    width: 85px;
    margin-left: 3px;
    margin-right: 3px;
}
.tableadd2 tr td select {
    width: 95px;
    height: 33px;
    border-width: medium medium 1px;
    border-style: none none solid;
    border-color: -moz-use-text-color -moz-use-text-color #055E87;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    background-color: transparent;
    background-image: linear-gradient(45deg, transparent 50%, #333 50%), linear-gradient(135deg, #070708 50%, transparent 50%), linear-gradient(to right, #F6F8F9, #FBFBFB);
    background-attachment: scroll, scroll, scroll;
    background-clip: border-box, border-box, border-box;
    background-origin: padding-box, padding-box, padding-box;
    background-position: calc(100% - 21px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), 100% 0px;
    background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
    background-repeat: no-repeat;
    font: 300 1em/1.5em "Helvetica Neue",Arial,sans-serif;
    padding: 0.5em 3.5em 0.5em 1em;
    margin: 0px 1px;
    box-sizing: border-box;
    -moz-appearance: none;
    border-radius: 5px;
}
</style>
<script type='text/javascript'>//<![CDATA[ 
/* window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });

}//]]>   */

</script>
<style>
.tableadd tr td input {
    width: 210px !important;
}
.recei li
{
	float:left;
	width:100px;
}
.recei li label
{
	font-size: 14px;
    font-weight: normal;
    color: #000;
    line-height: 4;
}
.tableadd tr td input {
  
    height: 50px;
}
#errorBox{
 color:#F00;
 }
.rowadd {
    border: 1px solid #055E87 !important;
    background: #055E87 none repeat scroll 0% 0% !important;
    padding: 4px;
    border-radius: 5px;
    color: #FFF;
    font-weight: bold;
    font-family: calibri;
    font-size: 15px;
 
	float:right;
}
.box{

            padding: 20px;

            display: none;

            margin-top: 20px;

          box-shadow:none !important;

        }
</style>
<script>
$(document).ready(function(){
   $('#cust_name').change(function(){
	 $("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 
   var id = $(this).val();
  // alert(id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_custbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id)
		   
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_modelnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#modelid').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#modelid').append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
} 
});


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serials",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
            });
} 
});


   });
 });
</script>


<script>
$(document).ready(function(){
   $('#modelid').change(function(){
	 $("#serialno > option").remove(); 
	 $("#service_cat > option").remove();
	$("#prob > option").remove();
   var id = $(this).val();
   //alert(id);
   var cust_id = $('#cust_name').val();
   var dataString = 'id='+id+'&cust_id='+cust_id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serialnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		   
    });

} 
});


$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_orderbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 		
	$.each(data, function(index, data){
			/* if(data.warranty_date.length > 0){
				//$("#warranty_date").removeAttr("disabled"); 
				$('#warranty_date').val(data.warranty_date);
			}else{
				$("#warranty_date").attr("disabled", "disabled"); 
			}
			
			if(data.amc_type.length > 0){
				$('#machine_status').val(data.amc_type);
			}else{
				$('#machine_status').val(data.machine_status);
			} */
			
		   $('#category').val(data.product_category),
		   $('#categoryid').val(data.category),
		   
		   $('#subcategory').val(data.subcat_name),
		   $('#subcategoryid').val(data.subcategory),
		   
		   $('#brandname').val(data.brand_name),
		   $('#brandid').val(data.brand),
		   $('#machine_status').val('Chargeable');
		   
    });

} 
});

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_probcatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 		$('#prob').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#prob').append("<option value='"+data.prob_catid+"'>"+data.prob_category+"</option>");
		   
    });

} 
});


$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_servicecatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 		$('#service_cat').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#service_cat').append("<option value='"+data.sercat_id+"-"+data.service_category+"'>"+data.service_category+"</option>");
		   
    });

} 
});





   });
 });
</script>







<script>
$(document).ready(function(){
   $('#serialno').change(function(){//alert("ddddd");
	$("#service_cat > option").remove();
	$("#prob > option").remove();
	
   var id = $(this).val();
   var dataString = 'serialno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_orderbyid",
data: dataString,
cache: false,
success: function(data) 
{ 		
	$.each(data, function(index, data){
			if(data.warranty_date.length > 0){
				//$("#warranty_date").removeAttr("disabled"); 
				$('#warranty_date').val(data.warranty_date);
			}else{
				$("#warranty_date").attr("disabled", "disabled"); 
			}
			
			if(data.amc_type.length > 0){
				$('#machine_status').val(data.amc_type);
			}else{
				$('#machine_status').val(data.machine_status);
			}
			
		   $('#category').val(data.product_category),
		   $('#categoryid').val(data.catid),
		   
		   $('#subcategory').val(data.subcat_name),
		   $('#subcategoryid').val(data.subcatid),
		   
		   $('#brandname').val(data.brand_name),
		   $('#brandid').val(data.brandid),
		   
		   /* $('#model').val(data.model),
		   $('#modelidd').val(data.modelid), */
		                    
		   $('#zone').val(data.service_loc),
		   $('#locid').val(data.locid),
		   //$('#machine_status').val(data.machine_status),
		   $('#modelid').val(data.modelid)
		   
		   
    });

} 
});

	$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_servicecatbyid",
data: dataString,
cache: false,
success: function(data) 
{ 		$('#service_cat').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#service_cat').append("<option value='"+data.sercat_id+"-"+data.service_category+"'>"+data.service_category+"</option>");
		   
    });

} 
});

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_probcatbyid",
data: dataString,
cache: false,
success: function(data) 
{ 		$('#prob').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#prob').append("<option value='"+data.prob_catid+"'>"+data.prob_category+"</option>");
		   
    });

} 
});

   });
 });
</script>

<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table1').append(result);
} 
});

});
  
});
</script>
<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 //alert(document.frmService.serial_no.value);
 var req_id = document.frmService.req_id.value,
   cust_name = document.frmService.cust_name.value,
   mobile = document.frmService.mobile.value,
   //email_id = document.frmService.email_id.value,
   datepicker = document.frmService.datepicker.value,
   //serial_no = document.frmService.serial_no.value,
   site = document.frmService.site.value;
   
  
 if( req_id == "" )
   {
     document.frmService.req_id.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the request ID.";
     return false;
   }
   if( cust_name == "" )
   {
     document.frmService.cust_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name";
     return false;
   }
   if( mobile == "" )
   {
     document.frmService.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   /* if( email_id == "" )
   {
     document.frmService.email_id.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email id";
     return false;
   } */
   
   if( datepicker == "" )
   {
     document.frmService.datepicker.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the request date";
     return false;
   }
   /* if( serial_no == "" )
   {
     document.frmService.serial_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "select the serial no";
     return false;
   } */
   if( site == "" )
   {
     document.frmService.site.focus() ;
	 document.getElementById("errorBox").innerHTML = "select the site";
     return false;
   }
   
   
   
   
}

</script>
<script>
$(document).ready(function(){
$('#service_cat').change(function(){ 
	empid = $(this).val();
	//alert($(this).val());
	 //$empid = $(this).val()
	var arr = empid.split('-');
		var stamping = arr['1'];
		//alert(stamping);
		//alert($('#assign_to').val('12'));
    if(stamping == 'Stampings' || stamping == 'stampings' || stamping == 'Stamping' || stamping == 'stamping'){
		//var len = $('#assign_to > option').length;
		
		$('#assign_to option').each(function(){
			
        alert("Value: "+this.value);
		stampid = this.value;
		var stid = stampid.split(',');
		var sid1 = stid['0'];
		var sid = stid['1'];
		
		if(sid=='1'){ //alert(sid1);
			$('#assign_to').val(stampid);
			//document.getElementById("assign_to").selectedIndex = sid1;
		}
        //alert("TEXT: "+$(this).text());
   });
		
		//alert($('#assign_to > option').length);
       // $('#assign_to').val('2');
    }
});



$("#site").change(function(){ 
			var site_val= $(this).val();
			//alert(site_val);
            if(site_val == 'Stamping'){ //alert("ssss");

                    $(".box").not(".ready").hide();

                    $(".ready").show();

                }

                else{

                    $(".box").hide();

                }
				
				
        });


});
</script>




<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">New Request</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
				</div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>service/add_service_req" method="post" name="frmService" id="form" onsubmit="return frmValidate()">
                      <div id="errorBox"></div>  
				  

<table class="tableadd">

<!--<tr>
<td><label>Customer Id</label></td>
<td>
<select>
<option>---Select---</option>
<option>001</option>
<option>002</option>
<option>003</option>
</select>
</td>

</tr>-->
<tr>
<td><label>Request Id&nbsp;<span style="color:red;">*</span></label></td>
<td><input type="text" name="req_id" class="" value="<?php echo $cnt; ?>" readonly>
</td>

<td><label>Customer Name&nbsp;<span style="color:red;">*</span></label></td>
<td style="width:220px;">


<select name="cust_name" id="cust_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
			<option value="">---------------Select-------------</option>
			<?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' ( '.$customerkey->mobile.' ) '; ?></option>
		   <?php } ?>
</select></td><td><a href="javascript:;" id="fancybox-manual-b" class="rowadd">Add</a>
</td>

</tr>


<tr>
<td><label>Mobile No&nbsp;<span style="color:red;">*</span></label></td><td><input type="text" name="mobile" class="" id="mobile"></td><td><label>Email ID</label></td><td><input type="text" name="email_id" id="email_id" class=""><input type="hidden" name="status" id="status" class="" value="0"></td></tr>



<tr>
<td><label>Requested Date&nbsp;<span style="color:red;">*</span></label></td><td><input id="datetimepicker7" type="text" name="datepicker" value="<?php echo $req_date; ?>"></td></tr>




</table>
<div id="table1">
  <table  class="tableadd" >
  
  
<label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>

 
 
  <tr>
   <td><label>Model</label></td> <td>
 <select name="modelid" id="modelid">
  <option value="">---Select---</option>
		
  </select>
</td>

  
  <td><label>Serial No</label></td> <td>
  <select name="serial_no" id="serialno">
  <option value="">---Select---</option>
		
  </select>
  </td><td><a href="javascript:;" id="fancybox-manual-c" class="rowadd">Add</a></td>
   
</tr>
<tr>
<td><label>Category</label></td><td >
<input type="text" name="category" id="category" class=""><input type="hidden" name="categoryid" id="categoryid" class="">
</td> 
<td><label>SubCategory</label></td> <td >
<input type="text" name="subcategory" id="subcategory" class=""><input type="hidden" name="subcategoryid" id="subcategoryid" class="">
</td>

</tr>
 
 <tr>
<td ><label>Brand Name</label></td><td style="width:200px;">
<input type="text" name="brandname" id="brandname" class=""><input type="hidden" name="brandid" id="brandid" class="">
</td>

<td><label>Warranty Date</label></td><td><input id="warranty_date" type="text" name="warranty_date"></td>
</tr>
 
 <tr>
 
 <td><label>Machine Status</label></td> <td><input id="machine_status" type="text" name="machine_status">
</td>
<td><label>Site&nbsp;<span style="color:red;">*</span></label></td>    <td>
<select name="site" id="site">
<option value="">---Select---</option>
<option value="Service Center">Service Center</option>
<option value="Customer Site">Customer Site</option>
<option value="Stamping">Stamping</option>
</select>
</td>

</tr>
 
 <tr class="ready box">
	<td><label><b>Year</b></label></td>
	<td>
		<select name="year">
			<option value="">---Select---</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
		</select>
	</td>
	<td><label><b>Quarter</b></label></td>
	<td>
		<select name="qtr">
			<option value="">---Select---</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select>
	</td>
	</tr>
	
	<tr class="ready box">
	<td><label><b>Kg</b></label></td>
	<td>
		<select name="kg">
			<option value="">---Select---</option>
			<option value="10GMTO10KG">10GM TO 10KG</option>
			<option value="11KGTO50KG">11KG TO 50KG</option>
			<option value="51KGTO500KG">51KG TO 500KG</option>
		</select>
	</td>
	<td><label><b>Received</b></label></td>
	<td>
		<select name="stamping_received[]" multiple style="height:60px; background-image:none;border: 1px solid #055E87; border-radius: 5px;">
			<option value="">---Select---</option>
			<option value="vcplate">VC Plate</option>
			<option value="vcpaper">VC Paper</option>
		</select>
	</td>
	
	</tr>
	
	<tr class="ready box">
	<td><label><b>Stamping Charge</b></label></td>
	<td><input type="text" name="stamping_charge" id="stamping_charge" class=""></td>
	<td><label><b>Agent Charge</b></label></td>
	<td><input type="text" name="agn_charge" id="agn_charge" class=""></td>
	
	</tr>
	
	<tr class="ready box">
	<td><label><b>Penalty</b></label></td>
	<td><input type="text" name="penalty" id="penalty" class=""></td>
	<td><label><b>Conveyance Charge</b></label></td>
	<td><input type="text" name="conveyance_charge" id="conveyance_charge" class=""></td>
	
	</tr>
	<tr class="ready box">
		<td><label><b>Total Charge</b></label></td>
	<td><input type="text" name="tot_charge" id="tot_charge" class=""></td>
	</tr>
 
 
 <tr>
 

 <td><label>Service Type</label></td>  <td>
<select name="service_type"> 
<option value="">---Select---</option>
<option value="AMC">AMC</option>
<option value="Out Of Warranty">Out Of Warranty</option>
<option value="Breakdown">Breakdown</option>
<option value="Preventive">Preventive Maintenance</option>
<option value="Reverification">Reverification</option>

<!--<option value="Stampings">Stampings</option>-->
</select>
</td>

<td><label>Service Category</label></td>    <td>
<select name="service_cat" id="service_cat">
<option value="">---Select---</option>

</select>
</td>
</tr>
  <tr>
  
  <td><label>Zone</label></td>  <td>
<input type="text" name="zone" id="zone" class=""><input type="hidden" name="locid" id="locid" class="">
</td>

<td><label>Problem</label></td>    <td>
<select name="probi[]" id="probi" multiple style="height:100px; background-image:none;border: 1px solid #055E87; border-radius: 5px;">
<option value="">---Select---</option>
<?php foreach($problemlist as $probi){?>
<option value="<?php echo $probi->id; ?>"><?php echo $probi->prob_category; ?></option>
<?php } ?>	
</select>
</td>
</tr>
   <tr>
   
   <td><label>Assign To</label></td>   <td>
<select name="assign_to" id="assign_to">
<option value="">---Select---</option>
<?php foreach($employee_list as $empkey){
	
		/* if (preg_match("/\bStampings\b/i", $empkey->serv_category, $match)){
			$st = '1';
		}else{
			$st = '0';
		} */
	?>
			<option value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
		   <?php } ?>
</select>
</td>

<td><label>Service Priority</label></td>    <td>
<select name="service_priority">
<option value="">---Select---</option>
<option value="Critical">Critical</option>
<option value="High">High</option>
<option value="Low">Low</option>
</select>
</td>
</tr>

<tr>


  <td><label>Blanket Approval</label></td><td><input type="text" name="blank_app" id="blank_app" class=""></td>
  
  <td><label >Received</label></td>   

<td>
	<select name="received[]" multiple style="height:100px; background-image:none;border: 1px solid #055E87; border-radius: 5px;">
            <option value="">---Select---</option>
			 <?php foreach($accessories_list as $acckey1){ ?>
			 <option value="<?php echo $acckey1->accessory; ?>"><?php echo $acckey1->accessory; ?></option>
		     <?php } ?>
    </select>
</td>
</tr>

  </table>
  

<table class="tableadd">
<tr>
<td> <label><b>Notes:</b></label></td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea"></textarea></td>
</tr>
</table>
</div>

  

<button class="btn cyan waves-effect waves-light " type="submit" style="margin-right: 20px;">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>
							  <a href="<?php echo base_url(); ?>pages/add_order"style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">New Order</a>
<!--<a id="addRowBtn" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Print Job Sheet</a>-->
<a href="<?php echo base_url(); ?>pages/dash" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Close</a>
<a href="<?php echo base_url(); ?>pages/dash" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Exit</a>





<table class="tableadd1" style="width: 80%;">
<!--<tr>
<td><label style="font-weight: bold;">Problem</label></td><td></td>
</tr>

<tr >
<th><label>Repair</label></th><th><label>Problem 1</label></th><th><label>Problem 2</label></th><th><label>Problem 3</label></th><th><label>Problem 4</label></th>
</tr>
<tr>
<td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td>
</tr>
<tr>
<td><label style="font-weight: bold;">Received</label></td><td></td>
</tr>

<tr >
<th><label>Charger</label></th><th><label>Data Cable</label></th><th><label>Battery</label></th><th><label>Head Set</label></th><th><label>Cover</label></th>
</tr>

<tr>
<td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td>
</tr>

<tr>

<td style="padding-top: 25px;">
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>
</td>
</tr>-->

</table>












					
                         
                        </div>
                     
                   <div class="col-md-1">
				</div>
                      </form>
                  
                
                </div>
             
          
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  
	
	<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
  
  
  <script type="text/javascript">
  $(".chosen-select").chosen().change(function()
{
	$("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 
   var id = $(this).val();
  // alert(id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_custbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){ //alert(data.mobile);
		   $('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id),
		   $('#zone').val(data.service_loc),
		   $('#locid').val(data.service_zone_loc)
		   
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_modelnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#modelid').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#modelid').append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
} 
});


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serials",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
            });
} 
});



});
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
	
	
	

     <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>

   
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
  
      <script type='text/javascript' src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js"></script>
	  
	  <script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
    $('#phone').mask('(999) 999-9999');
    $('#mobile').mask('9999999999');
    $('#pincode').mask('999999');
     $('#re-pincode').mask('999999');
   $('#re-pincode1').mask('999999');
});
});//]]> 

</script>
  
  
  
  
  
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     
	
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  
  


<script type='text/javascript'>//<![CDATA[ 
/* window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });

}//]]>  */ 

</script>   

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   
	   
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
$(document).ready(function(){
$.datetimepicker.setLocale('en');

$('#datetimepicker_mask').datetimepicker({
	mask:'9999-19-39 29:59'
});


var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('#datetimepicker7').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

});
</script>
	
	
<script>
var $= jQuery.noConflict();

$(document).ready(function() { 
	$("#fancybox-manual-b").click(function() { //alert("dsds");
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				//var pageload;
				var _tmpvar;
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>customer/add_quick',
					type : 'iframe',
					padding : 5
				});
			});
			
	$("#fancybox-manual-c").click(function() { //alert("dsds");
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Order/add_sales_quick',
					type : 'iframe',
					padding : 5,
					afterClose: function () { // USE THIS IT IS YOUR ANSWER THE KEY WORD IS "afterClose"
						parent.location.reload(true);
					}
				});
			});
			
});


function setSelectedUser(mobile,customer_name) {
	$('#mobile').val(mobile);
	$('#mobile').val(mobile);
	//$('.chosen-select').append("<option selected='selected' value='"+customer_name+"'>"+customer_name+"</option>");
	//$('#').val(customer_name);
}
</script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">
</body>

</html>