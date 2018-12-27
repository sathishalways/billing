<style>

select{border:1px solid #ccc;}
		input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search]{
    background-color: #fff;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    /* outline: none; */
    /* height: 3.9rem; */
	    height: 28px;
    width: 100%;
    font-size:13px;
    margin: 0 0 15px 0;
    padding: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
textarea.materialize-textarea {
    background-color: #fff;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    /* outline: none; */
    /* height: 3.9rem; */
    width: 130%;
	height:100px;
    font-size:12px;
    margin: 0 0 15px 0;
    padding: 0;
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
        $('   <table  class="tableadd" ><label style="color: black;    font-size: 15px;    font-weight: bold; margin-bottom:20px;">Add Product</label>  <tr>  <td><label>Serial No</label></td> <td>  <select>  <option>---Select---</option>  <option>12344</option>  <option>34546</option>  <option>456456</option>  <option>34657</option>  </select>  </td><td><label>Category</label></td><td ><select >            <option value="">---Select---</option>           <option value="Motorola">Air Conditioner</option>		  <option value="Sony Ericsson">Television</option>		   <option value="Nokia">Digital Camera</option>		    <option value="Apple">Mobile Phone</option>           <option value="Samsung">Cash Counting Machine</option>		    <option value="Samsung">Washing Machine</option>          </select></td>    </tr><tr><td><label>SubCategory</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Subcategory 1</option>		  <option value="Sony Ericsson">Subcategory 2</option>		   <option value="Nokia">Subcategory 3</option>		    <option value="Apple">Subcategory 4</option>           <option value="Samsung">Subcategory 5</option>  </select></td><td ><label>Brand Name</label></td><td style="width:200px;"><select >            <option value="">---Select---</option>           <option value="Motorola">Brand 1</option>		  <option value="Sony Ericsson">Brand 2</option>		   <option value="Nokia">Brand 3</option>		    <option value="Apple">Brand 4</option>           <option value="Samsung">Brand 5</option> </select></td></tr> <tr> <td><label>Model</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Model 1</option>		  <option value="Sony Ericsson">Model 2</option>		   <option value="Nokia">Model 3</option>		    <option value="Apple">Model 4</option>           <option value="Samsung">Model 5</option>          </select></td><td><label>Warranty Date</label></td><td><input id="datepicker2" type="text" name="datepicker"></td></tr> <tr> <td><label>Machine Status</label></td> <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Site</label></td>    <td><select><option>---Select---</option><option>OnSite</option><option>OffSite</option></select></td></tr> <tr> <td><label>Service Type</label></td>  <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Service Category</label></td>    <td><select><option>---Select---</option><option>Installation</option><option>General</option><option>Extra Fitting</option><option>Major</option></select></td></tr>  <tr>  <td><label>Zone</label></td>  <td><select><option>---Select---</option><option>Chennai</option><option>Bangalore</option><option>Trichy</option><option>Kilpauk</option></select></td><td><label>Problem</label></td>    <td><select><option>---Select---</option><option>Repair</option><option>Problem 1</option><option>Problem 2</option><option>Problem 3</option></select></td></tr>   <tr>   <td><label>Assign To</label></td>   <td><select><option>---Select---</option><option>Vishnu</option><option>Suresh</option><option>Manikandan</option><option>Bala</option></select></td></tr><tr><td><label style="font-weight:bold;">Received</label></td>   </tr>  </table>   <table style="margin-bottom: 40px;"><tr><td><ul class="recei"><li><label>Charger</label></li><li><label>Data Cable</label></li><li><label>Battery</label></li><li><label>Headset</label></li><li><label>Cover</label></li></ul></td></tr><tr><td><ul class="recei"><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li></ul></td></tr></table> ').appendTo(tbl);   
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 

$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
});
});
	
    
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

}//]]>  */ 

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

</style>
<script>
$(document).ready(function(){
   $('#cust_name').change(function(){ alert("hellloooo");
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
		if(data.serial_no.length > 0){
			$('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		}
            
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
	$("#probi > option").remove();
   var id = $(this).val();
   var cust_id = $('#cust_name').val();
   //alert(cust_id);
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
		if(data.serial_no.length > 0){
			$('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		}
		   
		   
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
{ 		
	$('.select2-search-choice').remove();
	$('.probi').val(data.prob_catid);
    $('.probi').trigger("chosen:updated");
	
	//$('#probi').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#probi').append("<option value='"+data.prob_catid+"'>"+data.prob_category+"</option>");
		   
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
	$("#probi > option").remove();
	
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
			
		   $('#category').val(data.product_category),
		   $('#categoryid').val(data.catid),
		   
		   $('#subcategory').val(data.subcat_name),
		   $('#subcategoryid').val(data.subcatid),
		   
		   $('#brandname').val(data.brand_name),
		   $('#brandid').val(data.brandid),
		   
		   $('#model').val(data.model),
		   $('#modelidd').val(data.modelid),
		                    
		   $('#zone').val(data.service_loc),
		   $('#locid').val(data.locid),
		   $('#machine_status').val(data.machine_status)
		   
		   
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
{ 		
	$('.select2-search-choice').remove();
	$('.probi').val(data.prob_catid);
    $('.probi').trigger("chosen:updated");
	
	//$('#probi').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#probi').append("<option value='"+data.prob_catid+"'>"+data.prob_category+"</option>");
		   
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
   br_name = document.frmService.br_name.value,
   mobile = document.frmService.mobile.value,
   //email_id = document.frmService.email_id.value,
   modelid = document.frmService.modelid.value,
   datepicker = document.frmService.datepicker.value;
   //serial_no = document.frmService.serial_no.value;
   
  
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
   if( br_name == "" )
   {
     document.frmService.br_name.focus();
	 document.getElementById("errorBox").innerHTML = "enter the branch name";
     return false;
   }
   if( mobile == "" )
   {
     document.frmService.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   
   if( modelid == "" )
   {
     document.frmService.modelid.focus();
	 document.getElementById("errorBox").innerHTML = "select the model";
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
   
   if(document.getElementById("serialno").value==''){
		document.frmService.serialno.focus() ;
		document.getElementById("errorBox").innerHTML = "select the serial no";
		return false;
   }
   
   /* if( serial_no == "" )
   {
     document.frmService.serial_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the serial no";
     return false;
   } */
   
   
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
					$(".appoint").hide();
                    $(".ready").show();

             }
			else if(site_val == 'Customer Site'){
					$(".box21").not(".appoint").hide();
					$(".appoint").show();
					$(".ready").hide();
             }else{
					$(".box").hide();
					$(".box21").hide();		
			}
				
				
        });
});
</script>
<script>
function print_status(id){ //alert(id);
	var r=confirm("Do you want to reprint the job sheet?");
	if (r==true)
		{
			window.location = "<?php echo base_url(); ?>service/print_service/"+id;
		}
	
}

function print_status1(id){ //alert(id);
	var r=confirm("Do you want to reprint the job sheet?");
	if (r==true)
		{
			window.location = "<?php echo base_url(); ?>service/stamping_print_service/"+id;
		}
	
}
</script>

<script type='text/javascript'>//<![CDATA[
$(window).load(function(){ 
$(document).ready(function() {
	
	var id = $("#br_name").val();
	//alert(id);
	var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_branchbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		
		$('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id),
		   $('#landlineno').val(data.landline),
		   $('#address').val(data.address),
			$('#address1').val(data.address1)
		   //$('#zone').val(data.service_loc),
		  // $('#locid').val(data.service_zone_loc)
		   
            
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_cust_servicezone",
data: dataString,
cache: false,
success: function(data) 
{ 	
		$.each(data, function(index, data){
				$('#zone').val(data.service_loc),
				$('#locid').val(data.service_zone_loc)
            });
} 
});


   
   
});
});//]]> 

</script>



<script>
$(document).ready(function(){
   $('#br_name').change(function(){ 
   var id = $(this).val();
   //alert(id);
   $("#serialno > option").remove(); 
   $("#modelid > option").remove(); 
   
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_branchbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		
		$('#mobile').val(data.mobile),
		$('#email_id').val(data.email_id),
		$('#address').val(data.address),
		$('#address1').val(data.address1)		
		   //$('#landlineno').val(data.landline)
		   //$('#zone').val(data.service_loc),
		  // $('#locid').val(data.service_zone_loc)
		   
            
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_cust_servicezone",
data: dataString,
cache: false,
success: function(data) 
{ 	
		$.each(data, function(index, data){
				$('#zone').val(data.service_loc),
				$('#locid').val(data.service_zone_loc),
				$('#service_loc_coverage').val(data.zone_coverage)
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
		  if(data.serial_no.length > 0){
			  //$('#serialno').append("<option value='"+data.serial_no+'-'+data.model_id+'-'+data.cat_id+'-'+data.subcat_id+'-'+data.brand_id+"'>"+data.serial_no+"</option>");
			  $('#serialno').append("<option value='"+data.serial_no+','+data.warranty_date+','+data.machine_status+','+data.amc_type+','+data.batch_no+','+data.model_id+','+data.cat_id+','+data.subcat_id+','+data.brand_id+"'>"+data.serial_no+"</option>");
		  } 
            });
} 
});




var service_ty = $('#service_type').val();

if(service_ty!='soft_up' && service_ty!=''){
	$("#modelid > option").remove(); 
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
}else{
	$('#modelid').append("<option value=''>---Select---</option>");
}

   });
 });
</script>

<script>
 function Sum() {
        var txtFirstNumberValue = document.getElementById('stamping_charge').value;
        var txtSecondNumberValue = document.getElementById('penalty').value;
		
		if(parseInt(txtSecondNumberValue)){
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
		}else{
			var result = parseInt(txtFirstNumberValue);
		}
		
        if(parseInt(result)){
            document.getElementById('tot_charge').value = result;
        }else{
			document.getElementById('tot_charge').value = '';
		}
}
</script>
<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h5 class="breadcrumbs-title">Edit Request</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
				</div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>service/edit_service_req" method="post" name="frmService" onsubmit="return frmValidate()">
						<?php foreach($list as $key){
							?>
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

<!--<tr>
<td><label>Request Id&nbsp;<span style="color:red;">*</span></label></td>
<td><input type="text" name="req_id" class="" value="<?php echo $key->request_id; ?>" readonly><input type="hidden" name="servicereqid" class="" value="<?php echo $key->id; ?>"></td>

<td><label>Customer Name</label></td>
<td>
<select name="cust_name" id="cust_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
			<?php foreach($customerlist as $customerkey){
				  if($customerkey->id==$key->cust_id){
			?>
           <option selected="selected" value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' - ('.$customerkey->customer_id.')'; ?></option>
			<?php } else {?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' - ('.$customerkey->customer_id.')'; ?></option>
			<?php } } ?>
</select>
</td>

</tr>


<tr>
<td><label>Branch Name&nbsp;<span style="color:red;">*</span></label></td><td>
<select name="br_name" id="br_name">
<option>---Select---</option>
			<?php
				  if(!empty($getBranchservicereqbyid)){ 
					foreach($getBranchservicereqbyid As $cslidkey){
			?>
			 <option selected="selected" value="<?php echo $cslidkey->cslid; ?>"><?php echo $cslidkey->branch_name; ?></option>
			<?php } }  ?>
				
</select>
</td>
<td><label>Mobile No&nbsp;<span style="color:red;">*</span></label></td><td><input type="text" name="mobile" class="" id="mobile" value="<?php echo $key->mobile; ?>"></td></tr>

<tr>
<td><label>Email ID</label></td><td><input type="text" name="email_id" id="email_id" class="" value="<?php echo $key->email_id; ?>"></td>
<td><label>Address</label></td><td><input type="text" name="address" id="address" value="<?php echo $key->cust_addr;?>"></td>
</tr>
<tr>
	<td><label>Address1</label></td><td><input type="text" name="address1" id="address1" value="<?php echo $key->address1;?>"></td>
	<td><label>Requested Date&nbsp;<span style="color:red;">*</span></label></td><td><input id="datetimepicker7" type="text" name="datepicker" value="<?php echo $key->request_date; ?>"></td>
</tr>-->

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Request Id&nbsp;<span style="color:red;">*</span>
<input type="text" name="req_id" class="" value="<?php echo $key->request_id; ?>" readonly><input type="hidden" name="servicereqid" class="" value="<?php echo $key->id; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Customer Name</label>
<select name="cust_name" id="cust_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
			<?php foreach($customerlist as $customerkey){
				  if($customerkey->id==$key->cust_id){
			?>
           <option selected="selected" value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' - ('.$customerkey->customer_id.')'; ?></option>
			<?php } else {?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' - ('.$customerkey->customer_id.')'; ?></option>
			<?php } } ?>
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Branch Name&nbsp;<span style="color:red;">*</span></label>
<select name="br_name" id="br_name" style="border:1px solid #ccc;">
<option>---Select---</option>
			<?php
				  if(!empty($getBranchservicereqbyid)){ 
					foreach($getBranchservicereqbyid As $cslidkey){
			?>
			 <option selected="selected" value="<?php echo $cslidkey->cslid; ?>"><?php echo $cslidkey->branch_name; ?></option>
			<?php } }  ?>
				
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Mobile No&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="mobile" class="" id="mobile" value="<?php echo $key->mobile; ?>">
</div>
</div>


<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email ID</label>
<input type="text" name="email_id" id="email_id" class="" value="<?php echo $key->email_id; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address</label>
<input type="text" name="address" id="address" value="<?php echo $key->cust_addr;?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address1</label>
<input type="text" name="address1" id="address1" value="<?php echo $key->address1;?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Requested Date&nbsp;<span style="color:red;">*</span></label>
<input id="datetimepicker7" type="text" name="datepicker" value="<?php echo $key->request_date; ?>">
</div>
</div>

</table>
<?php } ?>

<?php foreach($list2 as $empkey1){  $assign_to = $empkey1->assign_to;} ?>

<?php foreach($list7 as $key1){
		if(isset($key1->received)){
			$received_data = explode(",",$key1->received);
		}
		
		if(isset($key1->problem)){
			$problem_data = explode(",",$key1->problem);
		}
		/* echo "<pre>";
		print_r($problem_data); */
	?>  
<div id="table1">
  <table  class="tableadd" >
  
  
<!--<label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>

 
 
  <tr>
  <td><label>Model&nbsp;<span style="color:red;">*</span></label></td> <td>
 <select name="modelid" id="modelid">
  <option value="">---Select---</option>
  
  <?php foreach($get_mods as $modkey){
				//if(isset($key1->modelid)){
				  if($modkey->id==$key1->modelid){
			?>
           <option selected="selected" value="<?php echo $modkey->id; ?>"><?php echo $modkey->model; ?></option>
  <?php } else{?>
			 <option value="<?php echo $modkey->id; ?>"><?php echo $modkey->model; ?></option>
		  <?php } }?>
		
  </select>
</td>
  <td><label>Serial No</label></td> <td>
  <select name="serial_no" id="serialno">
  <option value="">---Select---</option>
		
		<?php foreach($list_serialnos as $serialkey){
				if(isset($key1->serial_no)){
				  if($serialkey->serial_no==$key1->serial_no){
			?>
           <option selected="selected" value="<?php echo $serialkey->serial_no; ?>"><?php echo $serialkey->serial_no; ?></option>
				<?php } } }?>
			
  </select>
  </td>
   
</tr>
<tr>
<td><label>Category</label></td><td >
<input type="text" name="category" id="category" class="" value="<?php if(isset($key1->product_category)){ echo $key1->product_category; }?>" readonly><input type="hidden" name="categoryid" id="categoryid" class="" value="<?php if(isset($key1->catid)){ echo $key1->catid;} ?>"><input type="hidden" name="servicereqdetailid" class="" value="<?php if(isset($key1->id)){ echo $key1->id; } ?>"> 
</td> 
<td><label>SubCategory</label></td> <td >
<input type="text" name="subcategory" id="subcategory" class="" value="<?php if(isset($key1->subcat_name)){ echo $key1->subcat_name;} ?>" readonly><input type="hidden" name="subcategoryid" id="subcategoryid" class="" value="<?php if(isset($key1->subcatid)){ echo $key1->subcatid; } ?>">
</td>

</tr>
 
 <tr>
 <td ><label>Brand Name</label></td><td style="width:200px;">
<input type="text" name="brandname" id="brandname" class="" value="<?php if(isset($key1->brand_name)){ echo $key1->brand_name; } ?>" readonly><input type="hidden" name="brandid" id="brandid" class="" value="<?php if(isset($key1->brandid)){ echo $key1->brandid; }?>">
</td>

<td><label>Warranty Date</label></td><td><input id="warranty_date" type="text" name="warranty_date" value="<?php if(isset($key1->warranty_date)){ echo $key1->warranty_date; }?>" readonly></td>
 

</tr>
 
 <tr>
 
 <td><label>Machine Status</label></td> <td><input id="machine_status" type="text" name="machine_status" value="<?php if(isset($key1->machine_status)){ echo $key1->machine_status;} ?>" readonly>

</td>

<td><label>Service Type</label></td>  <td>
<select name="service_type"> 
<option value="">---Select---</option>

<option value="AMC" <?php if(isset($key1->service_type) && $key1->service_type=="AMC"){?> selected="selected" <?php } ?> >AMC</option>
<option value="Out Of Warranty" <?php if(isset($key1->service_type) && $key1->service_type=="Out Of Warranty"){?> selected="selected" <?php } ?>>Out Of Warranty</option>
<option value="Breakdown" <?php if(isset($key1->service_type) && $key1->service_type=="Breakdown"){?> selected="selected" <?php } ?>>Breakdown</option>
<option value="Preventive" <?php if(isset($key1->service_type) && $key1->service_type=="Preventive"){?> selected="selected" <?php } ?>>Preventive Maintenance</option>

<option value="Demo" <?php if(isset($key1->service_type) && $key1->service_type=="Demo"){?> selected="selected" <?php } ?>>Demo</option>
<option value="Delivery" <?php if(isset($key1->service_type) && $key1->service_type=="Delivery"){?> selected="selected" <?php } ?>>Delivery</option>
<option value="Installation" <?php if(isset($key1->service_type) && $key1->service_type=="Installation"){?> selected="selected" <?php } ?>>Installation</option>
<option value="soft_up" <?php if(isset($key1->service_type) && $key1->service_type=="soft_up"){?> selected="selected" <?php } ?>>Software Upgradation</option>
<option value="Reverification" <?php if(isset($key1->service_type) && $key1->service_type=="Reverification"){?> selected="selected" <?php } ?>>Reverification</option>

</select>
</td>
</tr>
 
 <tr>
<td><label>Service Category</label></td>    <td>
<select name="service_cat" id="service_cat">
<option value="">---Select---</option>
		   <?php foreach($servicecat_list as $servicecatkey){
			    if(isset($key1->service_cat)){
				  if($servicecatkey->id==$key1->service_cat){
			?>
           <option selected="selected" value="<?php echo $servicecatkey->id.'-'.$servicecatkey->service_category; ?>"><?php echo $servicecatkey->service_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $servicecatkey->id.'-'.$servicecatkey->service_category; ?>"><?php echo $servicecatkey->service_category; ?></option>
		   <?php } } }?>
		   
		   
</select>
</td>
 <td><label>Zone</label></td>  <td>
<input type="text" name="zone" id="zone" class="" value="<?php if(isset($key1->service_loc)){ echo $key1->service_loc; } ?>"><input type="hidden" name="locid" id="locid" class="" value="<?php if(isset($key1->locid)){ echo $key1->locid;} ?>"><input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="" value="<?php if(isset($key1->service_loc_coverage)){ echo $key1->service_loc_coverage;} ?>">
</td>
</tr>
  <tr>
<td><label>Problem</label></td>    <td>
<select name="probi[]" id="probi" class="probi" multiple style="border-radius: 5px;">
<option value="">---Select---</option>
			<?php foreach($getProbByModel as $probkey){
					if (in_array($probkey->id, $problem_data)){
			?>
           <option selected="selected" value="<?php echo $probkey->id; ?>"><?php echo $probkey->prob_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $probkey->id; ?>"><?php echo $probkey->prob_category; ?></option>
			<?php } }  ?>
</select>
</td>
<td><label>Assign To</label></td>   <td>
<select name="assign_to" id="assign_to">
<option value="">---Select---</option>
			<?php foreach($employee_list as $empkey){
					/* if (preg_match("/\bStampings\b/i", $empkey->serv_category, $match)){
						$st = '1';
					}else{
						$st = '0';
					} */
					//if(isset($assign_to)){
				  if(isset($assign_to) && $empkey->id==$assign_to){
			?>
           <option selected="selected" value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			<?php }  else {?>
			<option value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			<?php } } ?>
</select>
</td>
</tr>
   <tr>
   
   <td><label><b>Appointment Time</b></label></td>
  <td><input type="text" name="app_time" id="datetimepicker71" class="" value="<?php if($key1->app_time!=""){echo $key1->app_time;} ?>"></td>
  <td><label><b>Addl. Engineer Name:</b></label></td>
		<td><select name="addl_engg_name" id="addl_engg_name">
			<option value="">---Select---</option>
			<?php foreach($employee_list as $empkey){
					if($empkey->id==$key1->addl_engg_name){
				?>
			<option selected='selected' value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			 <?php } else{ ?>
			 <option value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			<?php } }?>
			</select>
		</td>
</tr>
<tr>
<td><label>Service Priority</label></td>    <td>
<select name="service_priority">
<option value="">---Select---</option>
<option value="Critical" <?php if(isset($key1->service_priority) && $key1->service_priority=='Critical'){ ?> selected="selected" <?php } ?>>Critical</option>
<option value="High" <?php if(isset($key1->service_priority) && $key1->service_priority=='High'){?> selected="selected" <?php } ?>>High</option>
<option value="Low" <?php if(isset($key1->service_priority) && $key1->service_priority=='Low'){?> selected="selected" <?php } ?>>Low</option>
</select>
</td>
<td><label>Blanket Approval</label></td><td><input type="text" name="blank_app" id="blank_app" class="" value="<?php if(isset($key1->blank_app)){ echo $key1->blank_app; } ?>"></td>
  
</tr>
<tr class="appoint box21">
	<td><label>Batch No</label></td><td><input type="text" name="batch_no" id="batch_no" class="" value="<?php if(isset($key1->batch_no)){ echo $key1->batch_no; } ?>" readonly></td>	
	</tr>-->
	
<!--<tr>
	<td colspan="5">* Machine received w/o accessories</td>
</tr>-->



  <div class="col-md-12">
  <h4>Add Product</h4>
  <hr>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Model&nbsp;<span style="color:red;">*</span></label>
 <select name="modelid" id="modelid">
  <option value="">---Select---</option>
  
  <?php foreach($get_mods as $modkey){
				//if(isset($key1->modelid)){
				  if($modkey->id==$key1->modelid){
			?>
           <option selected="selected" value="<?php echo $modkey->id; ?>"><?php echo $modkey->model; ?></option>
  <?php } else{?>
			 <option value="<?php echo $modkey->id; ?>"><?php echo $modkey->model; ?></option>
		  <?php } }?>
		
  </select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Serial No</label>
<select name="serial_no" id="serialno">
  <option value="">---Select---</option>
		
		<?php foreach($list_serialnos as $serialkey){
				if(isset($key1->serial_no)){
				  if($serialkey->serial_no==$key1->serial_no){
			?>
           <option selected="selected" value="<?php echo $serialkey->serial_no; ?>"><?php echo $serialkey->serial_no; ?></option>
				<?php } } }?>
			
  </select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Category</label>
<input type="text" name="category" id="category" class="" value="<?php if(isset($key1->product_category)){ echo $key1->product_category; }?>" readonly><input type="hidden" name="categoryid" id="categoryid" class="" value="<?php if(isset($key1->catid)){ echo $key1->catid;} ?>"><input type="hidden" name="servicereqdetailid" class="" value="<?php if(isset($key1->id)){ echo $key1->id; } ?>"> 
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>SubCategory</label>
<input type="text" name="subcategory" id="subcategory" class="" value="<?php if(isset($key1->subcat_name)){ echo $key1->subcat_name;} ?>" readonly><input type="hidden" name="subcategoryid" id="subcategoryid" class="" value="<?php if(isset($key1->subcatid)){ echo $key1->subcatid; } ?>">
</div>
</div>




<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Brand Name</label>
<input type="text" name="brandname" id="brandname" class="" value="<?php if(isset($key1->brand_name)){ echo $key1->brand_name; } ?>" readonly><input type="hidden" name="brandid" id="brandid" class="" value="<?php if(isset($key1->brandid)){ echo $key1->brandid; }?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Warranty Date</label>
<input id="warranty_date" type="text" name="warranty_date" value="<?php if(isset($key1->warranty_date)){ echo $key1->warranty_date; }?>" readonly>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Machine Status</label>
<input id="machine_status" type="text" name="machine_status" value="<?php if(isset($key1->machine_status)){ echo $key1->machine_status;} ?>" readonly>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Type</label>
 <select name="service_type"> 
<option value="">---Select---</option>

<option value="AMC" <?php if(isset($key1->service_type) && $key1->service_type=="AMC"){?> selected="selected" <?php } ?> >AMC</option>
<option value="Out Of Warranty" <?php if(isset($key1->service_type) && $key1->service_type=="Out Of Warranty"){?> selected="selected" <?php } ?>>Out Of Warranty</option>
<option value="Breakdown" <?php if(isset($key1->service_type) && $key1->service_type=="Breakdown"){?> selected="selected" <?php } ?>>Breakdown</option>
<option value="Preventive" <?php if(isset($key1->service_type) && $key1->service_type=="Preventive"){?> selected="selected" <?php } ?>>Preventive Maintenance</option>

<option value="Demo" <?php if(isset($key1->service_type) && $key1->service_type=="Demo"){?> selected="selected" <?php } ?>>Demo</option>
<option value="Delivery" <?php if(isset($key1->service_type) && $key1->service_type=="Delivery"){?> selected="selected" <?php } ?>>Delivery</option>
<option value="Installation" <?php if(isset($key1->service_type) && $key1->service_type=="Installation"){?> selected="selected" <?php } ?>>Installation</option>
<option value="soft_up" <?php if(isset($key1->service_type) && $key1->service_type=="soft_up"){?> selected="selected" <?php } ?>>Software Upgradation</option>
<option value="Reverification" <?php if(isset($key1->service_type) && $key1->service_type=="Reverification"){?> selected="selected" <?php } ?>>Reverification</option>

</select>
</div>
</div>


<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Zone</label>
<input type="text" name="zone" id="zone" class="" value="<?php if(isset($key1->service_loc)){ echo $key1->service_loc; } ?>"><input type="hidden" name="locid" id="locid" class="" value="<?php if(isset($key1->locid)){ echo $key1->locid;} ?>"><input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="" value="<?php if(isset($key1->service_loc_coverage)){ echo $key1->service_loc_coverage;} ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Problem</label>
<select name="probi[]" id="probi" class="probi" multiple style="border-radius:2px;width:200px;">
<option value="">---Select---</option>
			<?php foreach($getProbByModel as $probkey){
					if (in_array($probkey->id, $problem_data)){
			?>
           <option selected="selected" value="<?php echo $probkey->id; ?>"><?php echo $probkey->prob_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $probkey->id; ?>"><?php echo $probkey->prob_category; ?></option>
			<?php } }  ?>
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Assign To</label>
<select name="assign_to" id="assign_to">
<option value="">---Select---</option>
			<?php foreach($employee_list as $empkey){
					/* if (preg_match("/\bStampings\b/i", $empkey->serv_category, $match)){
						$st = '1';
					}else{
						$st = '0';
					} */
					//if(isset($assign_to)){
				  if(isset($assign_to) && $empkey->id==$assign_to){
			?>
           <option selected="selected" value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			<?php }  else {?>
			<option value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			<?php } } ?>
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label><b>Appointment Time</b></label>
<input type="text" name="app_time" id="datetimepicker71" class="" value="<?php if($key1->app_time!=""){echo $key1->app_time;} ?>">
</div>

</div>



<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label><b>Addl. Engineer Name:</b></label>
<select name="addl_engg_name" id="addl_engg_name">
			<option value="">---Select---</option>
			<?php foreach($employee_list as $empkey){
					if($empkey->id==$key1->addl_engg_name){
				?>
			<option selected='selected' value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			 <?php } else{ ?>
			 <option value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
			<?php } }?>
			</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Priority</label>
<select name="service_priority">
<option value="">---Select---</option>
<option value="Critical" <?php if(isset($key1->service_priority) && $key1->service_priority=='Critical'){ ?> selected="selected" <?php } ?>>Critical</option>
<option value="High" <?php if(isset($key1->service_priority) && $key1->service_priority=='High'){?> selected="selected" <?php } ?>>High</option>
<option value="Low" <?php if(isset($key1->service_priority) && $key1->service_priority=='Low'){?> selected="selected" <?php } ?>>Low</option>
</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Blanket Approval</label>
<input type="text" name="blank_app" id="blank_app" class="" value="<?php if(isset($key1->blank_app)){ echo $key1->blank_app; } ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12 appoint box21">
<label>Batch No</label>
<input type="text" name="batch_no" id="batch_no" class="" value="<?php if(isset($key1->batch_no)){ echo $key1->batch_no; } ?>" readonly>
</div>

</div>
<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Category</label>
<select name="service_cat" id="service_cat">
<option value="">---Select---</option>
		   <?php foreach($servicecat_list as $servicecatkey){
			    if(isset($key1->service_cat)){
				  if($servicecatkey->id==$key1->service_cat){
			?>
           <option selected="selected" value="<?php echo $servicecatkey->id.'-'.$servicecatkey->service_category; ?>"><?php echo $servicecatkey->service_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $servicecatkey->id.'-'.$servicecatkey->service_category; ?>"><?php echo $servicecatkey->service_category; ?></option>
		   <?php } } }?>
		   
		   
</select>
</div>
</div>
  </table>
  <br>
  <div class="col-md-12 tableadd">

<div class="col-md-3 col-sm-6 col-xs-12">
<p style="width:400px;">* Machine received w/o accessories</p>
<label><b>Notes:</b></label>
<textarea type="text" name="notes" id="notes" class="materialize-textarea"><?php if(isset($key1->notes)){ echo $key1->notes;}  ?></textarea>
</div>
</div>
<!--<table class="tableadd" style="width: 75%;
margin-top: 20px;">
<tr>
<td> <label><b>Notes:</b></label></td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea"><?php if(isset($key1->notes)){ echo $key1->notes;}  ?></textarea></td>
</tr>
</table>-->

<?php if(isset($key1->status) && $key1->status=="10"){?>
<table class="tableadd" style="width: 75%;
margin-top: 20px;">
<tr>
<td> <label><b>Cancel Reason:</b></label></td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea"><?php if(!empty($get_cancel_reason)){
										foreach($get_cancel_reason as $get_reasonKey){
											if(isset($get_reasonKey->notes) && $get_reasonKey->notes!=""){
												echo $get_reasonKey->notes;
											}
										}
	}?></textarea></td>
</tr>
</table>
<?php } ?>

</div>

<?php } ?>

<div id="table2"></div>

<button class="btn cyan waves-effect waves-light " type="submit" style="margin-right: 20px;">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>
							  <a id="addRowBtn" href="<?php echo base_url(); ?>pages/add_order"style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">New Order</a>


<?php if($key1->site!='Stamping'){?>
<a onclick="print_status('<?php echo $key->id; ?>')" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Print Job sheet</a>
<?php } else{ ?>
<a onclick="print_status1('<?php echo $key->id; ?>')" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Print Stamping Job sheet</a>

<?php } ?>

<!--<a id="addRowBtn" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Print Job Sheet</a>-->
<a id="addRowBtn" href="<?php echo base_url(); ?>pages/dash" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Close</a>
<a id="addRowBtn" href="<?php echo base_url(); ?>pages/dash" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
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
   
   
   <script>
   var config = {
      '.chosen-select1'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select1'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
   </script>
   
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

$('#datetimepicker71').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

});
</script>
<script type="text/javascript">
  $(".chosen-select").chosen().change(function()
{
	$("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 $("#br_name > option").remove(); 
	 
	 $('#modelid').append("<option value=''>---Select---</option>");
	 $('#serialno').append("<option value=''>---Select---</option>");
	 
	 $('#mobile').val('');
	 $('#email_id').val('');
	 $('#address').val('');
	 $('#address1').val('');	
	 
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
		   /* $('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id),
		   $('#zone').val(data.service_loc),
		   $('#locid').val(data.service_zone_loc),
		    */
		   $('#customer_name').val(data.company_name),
		   $('#customer_id').val(data.id)
			   
    });
} 
});
$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_branchname",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#br_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){
			if(data.branch_name.length > 0){
				$('#br_name').append("<option value='"+data.id+"'>"+data.branch_name+"</option>");
			}else{
				$('#br_name').append("<option value='"+data.id+"'>"+'Head Office'+"</option>");
			}
			
            
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
    dateFormat: 'dd-mm-yy',
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
	   
	   
	   <link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
    <script src="<?php echo base_url(); ?>assets/select/jquery-1.8.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>

<script>
        $(document).ready(function() {
             $("#probi").select2(); 
           
           
          
		  $("#product").click(function(){
        $('#select2-chosen-2').empty(); 
		$('#select2-chosen-3').empty();
		var select = $('<option>---Select---</option>');
        $('#select2-chosen-2').append(select);
		var select1 = $('<option>---Select---</option>');
		 $('#select2-chosen-3').append(select1);
		
    });
		

            
        });
    </script>
	
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">
	
</body>

</html>