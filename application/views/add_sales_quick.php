
  
  <script type="text/javascript">
var $= jQuery.noConflict();
$(document).ready(function()
{


});

</script>
  
  <script type="text/javascript">

    $(document).ready(function(){

        $("select#month_no").change(function(){

            $(this).find("option:selected").each(function(){

                if($(this).attr("value")=="one"){

                    $(".box1").not(".one").hide();

                    $(".one").show();

                }

                else if($(this).attr("value")=="second"){

                    $(".box1").not(".second").hide();

                    $(".second").show();

                }

                else if($(this).attr("value")=="third"){

                    $(".box1").not(".third").hide();

                    $(".third").show();

                }
				else if($(this).attr("value")=="four"){

                    $(".box1").not(".four").hide();

                    $(".four").show();

                }
				else if($(this).attr("value")=="five"){

                    $(".box1").not(".five").hide();

                    $(".five").show();

                }

                else{

                    $(".box").hide();

                }

            });

        }).change();

    });

    </script>
  
  
  <!-- <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>-->

   
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
  
 <link href="<?php echo base_url(); ?>assets/css/jquery.datepick.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.plugin.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.datepick.js"></script>
<script>
$(function() {
	$('#popupDatepicker').datepick();
	$('#popupDatepicker1').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
  
  
  
  
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  
  


<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("input[name='datepickerpurchase']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yyyy-mm-dd',
			yearRange: "1950:2055"
        });
		
$("input[name='datepickerwarranty']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });		

}//]]>  

</script>

   <script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="paid"){
            $(".box").not(".paid").hide();
            $(".paid").show();
        }
        if($(this).attr("value")=="warranty"){
            $(".box").not(".warranty").hide();
			
            $(".warranty").show();
        }
        if($(this).attr("value")=="prevent"){
            $(".box").not(".prevent").hide();
		
            $(".prevent").show();
        }
		
		if($(this).attr("value")=="amc"){
            $(".box").not(".amc").hide();
		
            $(".amc").show();
        }
		
    });
});
</script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->

<script>//<![CDATA[ 

$(function(){
    var tbl = $("#table1");
    var tb2 = $("#table2");
    $("#addRowBtn").click(function(){
        $(' <tr><td><label style="color: black;    font-size: 15px;    font-weight: bold; margin-bottom:20px;">Add Product</label></td></tr>  <tr>  <td><label>Serial No</label></td><td ><select >            <option value="">---Select---</option>           <option value="">001</option>		  <option value=" ">002</option>		   <option value="">003</option>		    <option value="">004</option>           <option value="">005</option>		    <option value="">006</option>          </select></td>  <td><label>Category</label></td><td ><select >            <option value="">---Select---</option>           <option value="">Air Conditioner</option>		  <option value=" ">Television</option>		   <option value="">Digital Camera</option>		    <option value="">Mobile Phone</option>           <option value="">Cash Counting Machine</option>		    <option value="">Washing Machine</option>   </select></td>   </tr><tr><td><label>SubCategory</label></td> <td ><select >            <option value="">---Select---</option>           <option value="">Subcategory 1</option>		  <option value=" ">Subcategory 2</option>		   <option value="">Subcategory 3</option>		    <option value="">Subcategory 4</option>           <option value="">Subcategory 5</option>          </select></td><td><label>Brand Name</label></td> <td ><select >            <option value="">---Select---</option>           <option value="">Brand 1</option>		  <option value=" ">Brand 2</option>		   <option value="">Brand 3</option>		    <option value="">Brand 4</option>           <option value="">Brand 5</option>   </select></td></tr><tr><td><label>Model</label></td> <td ><select >            <option value="">---Select---</option>           <option value="">Model 1</option>		  <option value=" ">Model 2</option>		   <option value="">Model 3</option>		    <option value="">Model 4</option>           <option value="">Model 5</option>   </select></td><td><label>Price</label></td><td><input type="text" name="" class=""></td></tr><tr><td><label >Service Location</label></td><td>  <select><option>---Select---</option>  <option>Chennai</option>  <option>Bangalore</option>  <option>Trichy</option>  <option>Kilpauk</option>  </select></td><td><label>Purchase Date</label></td><td><input id="datepicker23" type="text" name="datepicker"></td></tr><tr><td><label>Warranty Date</label></td><td><input id="datepicker11" type="text" name="datepicker"></td><td><label>Preventive Maintenance</label></td><td><input type="text" name="" class=""></td></tr>').appendTo(tbl);    
		
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
	
	
      
	
	$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });
});
});


    
});
//]]>  

</script>

<script>
$(document).ready(function(){
$('#addnewrow').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
    var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    var sr_no = $('#serial_no-'+vl).val(); 
	var service_loc_name = $('#service_loc_name-'+vl).val(); 
	var service_loc = $('#service_loc-'+vl).val(); 
	
	$('#countid').val(vl1);
    var datastring='countid='+vl1+'&sr_no='+sr_no+'&service_loc_name='+service_loc_name+'&service_loc='+service_loc;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>order/addrow_sales",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table2').append(result);
} 
});

});
 
	$("#table2").on('click','#delrow',function(){
        $(this).parent().parent().remove();
    });
});
</script>



<script>
function frmValidate(){ //alert('sdkdf');
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
   
   var order_no = document.frmOrder.order_no.value;
   
   
  
 if(order_no == "" )
   {
     document.frmOrder.order_no.focus();
	 document.getElementById("errorBox").innerHTML = "Enter the order no.";
     return false;
   }
  if( document.getElementById("model-0").value == "" )
   {
     //document.frmOrder.model.focus() ;
	 document.getElementById("errorBox1").innerHTML = "enter the model";
     return false;
   }
   
  //return false;
   
   if($('.serial_no').length){
	   var ser_len = $('.serial_no').length;
	   if(ser_len=='1'){
		   //alert("sdsdsdsdsdsdsdsd");
			var machine_status;
			var category = $('#category-0').val();
			var subcategory = $('#subcategory-0').val();
			var brandname = $('#brandname-0').val();
			var mod_id = $('#mod_id-0').val();
			var service_loc = $('#service_loc-0').val();
			
			var colorRadioc = $('#colorRadioc').val();
			var colorRadiow = $('#colorRadiow').val();
			var colorRadiop = $('#colorRadiop').val();
			
			//alert("PAid:"+colorRadioc);
			//alert("warranty:"+colorRadiow);
			//alert("preventive:"+colorRadiop);
			
			if(document.getElementById('colorRadioc').checked){
				machine_status = "Chargeable";
			}	
			if(document.getElementById('colorRadiow').checked){
				machine_status = "Warranty";
			}
			if(document.getElementById('colorRadiop').checked){
				machine_status = "Preventive";
			}
			
			var warranty_date = $('#warranty').val();
			
			var category_name = $('#category_name-0').val();
			var subcategory_name = $('#subcategory_name-0').val();
			var brand_name = $('#brand_name-0').val();
			var model = $('#model_name-0').val();
			var service_loc_name = $('#service_loc_name-0').val();
			var serial_no = $('#serial_no-0').val();
			var service_cat = $('#service_cat-0').val();
			var service_loc_coverage = $('#service_loc_coverage-0').val();
			var probi = $('#probi-0').val();
			
			if(probi!=""){
				probo = $('#probi-0').val();
			}else{
				probo = '';
			}
			
			//alert("CATEID: "+category+'SUBCATid'+subcategory);
			
			
			parent.setSelectedSales(category,subcategory,brandname,service_loc,machine_status,warranty_date,category_name,subcategory_name,brand_name,service_loc_name,mod_id,model,serial_no,service_cat,service_loc_coverage,probo,'Single');
			//parent.$.fancybox.close();
	   }else{
		   var ser_arr = [];
		   var cat_arr = [];
		   var subcat_arr = [];
		   var brand_arr = [];
		   var mod_arr = [];
		   var serloc_arr = [];
		   
		   var category_name_arr = [];
		   var subcategory_name_arr = [];
		   var brand_name_arr = [];
		   var model_arr = [];
		   //var service_loc_name_arr = [];
		   var serial_no_arr = [];
		   var service_cat_arr = [];
		   var service_loc_coverage_arr = [];
				
		   var machine_status;
		   
		   for(var i=0;i<ser_len;i++){
				var ser_val = $('#serial_no-'+i).val();
				ser_arr.push(ser_val); 
				
				var category = $('#category-'+i).val();
				cat_arr.push(category); 
				
				var subcategory = $('#subcategory-'+i).val();
				subcat_arr.push(subcategory); 
				
				var brandname = $('#brandname-'+i).val();
				brand_arr.push(brandname); 
				
				var mod_id = $('#mod_id-'+i).val();
				mod_arr.push(mod_id); 
				
				var service_loc = $('#service_loc-0').val();
				//serloc_arr.push(service_loc); 
				
				var colorRadioc = $('#colorRadioc').val();
				var colorRadiow = $('#colorRadiow').val();
				var colorRadiop = $('#colorRadiop').val();
				
				//alert("PAid:"+colorRadioc);
				//alert("warranty:"+colorRadiow);
				//alert("preventive:"+colorRadiop);
				
				if(document.getElementById('colorRadioc').checked){
					machine_status = "Chargeable";
				}	
				if(document.getElementById('colorRadiow').checked){
					machine_status = "Warranty";
				}
				if(document.getElementById('colorRadiop').checked){
					machine_status = "Preventive";
				}
				
				var warranty_date = $('#warranty').val();
				
				var category_name = $('#category_name-'+i).val();
				category_name_arr.push(category_name); 
				
				var subcategory_name = $('#subcategory_name-'+i).val();
				subcategory_name_arr.push(subcategory_name); 
				
				var brand_name = $('#brand_name-'+i).val();
				brand_name_arr.push(brand_name); 
				
				var model = $('#model_name-'+i).val();
				model_arr.push(model); 
				
				var service_loc_name = $('#service_loc_name-0').val();
				//service_loc_name_arr.push(service_loc_name); 
				
				var serial_no = $('#serial_no-'+i).val();
				serial_no_arr.push(serial_no); 
				
				var service_cat = $('#service_cat-'+i).val();
				//service_cat_arr.push(service_cat); 
				
				var service_loc_coverage = $('#service_loc_coverage-'+i).val();
				service_loc_coverage_arr.push(service_loc_coverage); 
				
				var probi = $('#probi-'+i).val();
				
				if(probi!=""){
					probo = $('#probi-'+i).val();
				}else{
					probo = '';
				}
				
			}
			//alert("jhjkshdjkshadjh: "+ser_arr);
			parent.setSelectedSales(cat_arr,subcat_arr,brand_arr,service_loc,machine_status,warranty_date,category_name_arr,subcategory_name_arr,brand_name_arr,service_loc_name,mod_arr,model_arr,ser_arr,service_cat,service_loc_coverage_arr,probo,'Multiple');
	   }
	   
   }
   
   
   
}

</script>


<script>
	$(function(){			
		$(".invoice_val").change(function(){
			if($(this).val()==""){
			    $("#errorBox").show();
			}
			else{
				$("#errorBox").hide();
			}
		});

		$("#cust_name").change(function(){
			if($(this).val()==""){
			    $("#errorBox2").show();
			}
			else{
				$("#errorBox2").hide();
			}
		});

		$("#br_name").change(function(){
			if($(this).val()==""){
			    $("#errorBox3").show();
			}
			else{
				$("#errorBox3").hide();
			}
		});

		$("#cont_name").change(function(){
			if($(this).val()==""){
			    $("#errorBox4").show();
			}
			else{
				$("#errorBox4").hide();
			}
		});

		$("#mobile").change(function(){
			if($(this).val()==""){
			    $("#errorBox5").show();
			}
			else{
				$("#errorBox5").hide();
			}
		});

		$("#model-0").change(function(){
			if($(this).val()==""){
			    $("#errorBox1").show();
			}
			else{
				$("#errorBox1").hide();
			}
		});
	});
</script>

<script type="text/javascript">
/* var $= jQuery.noConflict();
$(document).ready(function()
{
$("#cust_name").change(function()
{//alert("hii");
$("#br_name > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_branchname",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#br_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#br_name').append("<option value='"+data.id+"'>"+data.branch_name+"</option>");
            });
} 
});



});

}); */

</script>

<script>
$(document).ready(function(){
   $('#br_name').change(function(){
   var id = $(this).val();
   //alert(id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_branchbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#cont_name').val(data.contact_name),
		   $('#mobile').val(data.mobile),
		   $('#email').val(data.email_id),
		   $('#addr').val(data.address),
		   $('#city').val(data.city),
		   $('#state').val(data.state),
		   $('#pincode').val(data.pincode),
		   $('#service_loc_coverage').val(data.zone_coverage)
            
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_cust_servicezone",
data: dataString,
cache: false,
success: function(data) 
{ 	
		$.each(data, function(index, data){
				$('.service_loc_name').val(data.service_loc),
				$('.service_loc').val(data.service_zone_loc)
            });
} 
});


   });
 });
</script>





<script>
$(document).ready(function(){
   $('.modelss').change(function(){//alert("ddddd");
   
   var idd=$(this).closest(this).attr('id');
   //alert(idd);
   var arr = idd.split('-');
   var rowid = arr['1'];
   //alert(rowid);
   var id = $(this).val();
   //alert(id);
   $('#service_cat-'+rowid+ "> option").remove();
   $('#probi-'+rowid+ "> option").remove();
   
   /* $("#service_cat-0 > option").remove();
   $("#probi-0 > option").remove(); */
   
   var dataString = 'modelno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_productinfobyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#category_name-'+rowid).val(data.product_category),
		   $('#category-'+rowid).val(data.category),
		   
		   $('#subcategory_name-'+rowid).val(data.subcat_name),
		   $('#subcategory-'+rowid).val(data.subcategory),
		   
		   $('#brand_name-'+rowid).val(data.brand_name),
		   $('#brandname-'+rowid).val(data.brand),
		   
		   $('#mod_id-'+rowid).val(data.id),
		   $('#model_name-'+rowid).val(data.model)
    });
	
} 
});


	 $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_servicecatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		  $('#service_cat-'+rowid).append("<option selected='selected' value='"+data.sercat_id+"-"+data.service_category+"'>"+data.service_category+"</option>");
    });
	
} 
});


$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_probcatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$('#probi-'+rowid).append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){ //alert(data.prob_category);
		   $('#probi-'+rowid).append("<option selected='selected' value='"+data.prob_catid+"-"+data.prob_category+"'>"+data.prob_category+"</option>");
		   
    });
	
} 
});



   });
 });
</script>

<script>
$(document).ready(function(){
   $('#purchase').change(function(){//alert("ddddd");
   var sale_date = $(this).val();
	//alert(sale_date);
   var dataString = 'sale_date='+sale_date;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>order/update_warrantydate",
data: dataString,
cache: false,
success: function(data) 
{ 	//alert(data);
	$('#warranty').val(data);
	$('#preventive_main').val(data);
} 
});
   });
 });
</script>


<style>
 .link{
	 padding: 9px;
 background: #EE1D26 none repeat scroll 0% 0% !important;
    border-bottom: 3px solid #AD1F1F;
color: white;
font-weight: bold;
border-radius: 5px;
margin-right:20px;

 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 #myTable tr td input {
    width: 210px !important;
 }
 .chosen-container .chosen-drop .chosen-search input
 {
	width:400px !important;
 }
 #myTable tr td select {
    width: 210px !important;
   
}
button.cyan {
    background: #8868a0 none repeat scroll 0% 0% !important;
    border-bottom: 3px solid #8868a0;
	display: inline-block;
padding: 6px 12px;
margin-bottom: 0px;
font-size: 14px;
font-weight: 400;
line-height: 1.42857;
text-align: center;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
-moz-user-select: none;
background-image: none;
border: 1px solid transparent;
border-radius: 4px;
color:white;
}
.tableadd tr td input {
    width: 210px !important;
}
#errorBox1,#errorBox2,#errorBox3,#errorBox4,#errorBox5,#errorBox6{
 color:#F00;
 }
 .box{
       
        display: none;
		box-shadow:none !important;
      
    }
	 .box1{          

            display: none;  
			

        }
		/*.prevent td label.nos
		{
			width:100px !important;
		}
		#month_no
		{
			width:100px !important;	
			display:inline-block;
		}*/
	
		.tableadd tr td select.box:focus 
		{
    border-top: 1px solid #055E87 !important;
}
.padding
{
	padding-left: 55px;
}
.dropdown-content {
    display: none;
}
h5 {
    font-size: 22px;
    border-bottom: 1px solid #055E87 !important;
    text-align: center;
    width: 125px;
    margin: auto auto 35px;
}
.tableadd tr td select {
   
    border: 1px solid #808080;
    height: 27px;
	width: 210px;
}
.tableadd tr td input {
    width: 120px;
    border: 1px solid #808080;
    height: 27px;
}
.tableadd tr td
{
	padding:10px 10px 10px 0px;
}
.rowadd {
    border: 1px solid #055E87 !important;
    background: #055E87 none repeat scroll 0% 0% !important;
    padding: 6px;
    border-radius: 5px;
    color: #FFF;
    font-weight: bold;
    font-family: calibri;
    font-size: 15px;
    margin-top: 30px;
}
#table1 tr td label
{
	padding-right:23px;
}
.radis tr td .radiobutton
{
	height:0px;
	position:absolute;
	width: 0px !important;
}
.radis tr td a
{
	margin-left: 30px;
}
.tableadd tr.amc td select 
{
	width: 135px;
	border-radius: 5px;
}
.tableadd tr.amc td label {
   width: 100px;
   
}
.tableadd tr.amc td input {
   width: 100px !important;
}
 </style>



   <section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">New Sales</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			     <div class="col-md-1">
				 </div>
			  
                <div class="col-md-10">
                 
                      <form action="<?php echo base_url(); ?>order/add_quick_order" method="post" name="frmOrder" onsubmit="return frmValidate()">
                      
<table class="tableadd" >

<!--<tr>
<td><label>Invoice No&nbsp;<span style="color:red;">*</span></label></td>
<td><input type="text" name="order_no" class="invoice_val" value=""><div id="errorBox1"></div></td>
<td class="padding"><label>Customer Name&nbsp;<span style="color:red;">*</span></label></td>
<td>
<select name="cust_name" id="cust_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
			<option value="">---Select---</option>
			<?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' ( '.$customerkey->customer_id.' ) '; ?></option>
		   <?php } ?>
</select>
<div id="errorBox2"></div>
</td>

</tr>


<tr>
<td><label>Branch Name&nbsp;<span style="color:red;">*</span></label></td>
<td>
<select name="br_name" id="br_name">
<option>---Select---</option>
</select>
<div id="errorBox3"></div>
</td>

<td class="padding"><label>Contact Name&nbsp;<span style="color:red;">*</span></label></td>
<td><input type="text" name="cont_name" id="cont_name" class="" readonly><div id="errorBox4"></div></td>
</tr>
<tr>
<td><label>Mobile&nbsp;<span style="color:red;">*</span></label></td>
<td><input type="text" name="mobile" class="" id="mobile" readonly><div id="errorBox5"></div></td>
<td class="padding"><label>Email</label></td><td><input type="text" name="email" id="email" class="" readonly></td>
</tr>
<tr>
<td><label>Address</label></td><td><input type="text" name="addr" id="addr" class="" readonly></td><td class="padding"><label>City</label></td><td><input type="text" name="city" id="city" class="" readonly></td>
</tr>
<tr>
<td><label>State</label></td><td><input type="text" name="state" id="state" class="" readonly></td><td class="padding"><label>Pincode</label></td><td><input type="text" name="pincode" class="" id="pincode" readonly><input type="hidden" name="service_loc_coverage" class="" id="service_loc_coverage" readonly></td>
</tr>--->
<tr>
<td class="padding"></td><td>
<?php foreach($customer_details as $cd){?>
<input type='hidden' name='cust_name' id='cust_name' value='<?php echo $cd->id;?>'>
<input type='hidden' name='cust_id' id='cust_id' value='<?php echo $cd->customer_name;?>'>

<?php }?>
<div id='error_box'></div>
<!--<select name="cust_name" id="cust_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
			<option value="">---Select---</option>
			<?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' ( '.$customerkey->customer_id.' ) '; ?></option>
		   <?php } ?>
</select>-->
</td>

</tr>

<?php foreach($branch_details as $bd){?>
<tr>
<tdlabel></td><td>
<input type='hidden' name='br_name'  value='<?php echo $bd->id;?>'>
<!--<select name="br_name" id="br_name">
<option>---Select---</option>
</select>-->
</td>

<td class="padding"></td><td><input type="hidden" name="cont_name" id="cont_name" class="" value='<?php echo $bd->contact_name;?>'readonly></td>
</tr>
<tr>
<td></td><td><input type="hidden" name="mobile" class="" id="mobile" value='<?php echo $bd->mobile;?>' readonly></td><td class="padding"></td><td><input type="hidden" name="email" id="email" class="" value='<?php echo $bd->email_id;?>' readonly></td>
</tr>
<tr>
<td></td><td><input type="hidden" name="addr" id="addr" class="" value='<?php echo $bd->address;?>' readonly></td><td class="padding"></td><td><input type="hidden" name="city" id="city" class="" value='<?php echo $bd->city;?>' readonly></td>
</tr>
<tr>
<td></td><td><input type="hidden" name="state" id="state" class="" value='<?php echo $bd->state;?>' readonly></td><td class="padding"></td><td><input type="hidden" name="pincode" class="" id="pincode" value='<?php echo $bd->pincode;?>' readonly><input type="hidden" name="service_loc_coverage" class="" id="service_loc_coverage" value='<?php echo $bd->zone_coverage;?>' readonly></td>
</tr>


<?php }?>

</table>



  <table id="table2" class="tableadd" style="margin-bottom: 20px;">
    
  
<label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>


  
  <tr>
  <td>
   <table>
   <tr>
   <td><label>Invoice No&nbsp;<span style="color:red;">*</span></label></td><td><input type="text" name="order_no" class="" id='order_no' value="">
   <div id="errorBox"></div>  </td>
   </tr><tr>
   <td>
  <label>Serial No</label></td><td ><input type="text" name="serial_no[]" id="serial_no-0" value="<?php echo 'DUM'.$cnt; ?>"class="serial_no"></td>    
  
  <td><label>Model&nbsp;<span style="color:red;">*</span></label></td> 
  <td >
<select name="model[]" id="model-0" class="modelss">
            <option value="">---Select---</option>
			 <?php foreach($modellist as $modelkey){ ?>
			 <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
			 <?php } ?>
          </select>
         <div id="errorBox1"></div>  
</td>
</tr>

<tr>
  
<td><label>Category</label></td><td ><input type="text" name="category_name[]" id="category_name-0" readonly><input type="hidden" name="category[]" id="category-0"><input type="hidden" name="mod_id[]" id="mod_id-0"><input type="hidden" name="model_name[]" id="model_name-0">

</td>  
<td><label>SubCategory</label></td> <td><input type="text" name="subcategory_name[]" id="subcategory_name-0" readonly><input type="hidden" name="subcategory[]" id="subcategory-0">

</td>

</tr>
<tr>

<td><label>Brand Name</label></td> <td ><input type="text" name="brand_name[]" id="brand_name-0" readonly><input type="hidden" name="brandname[]" id="brandname-0">

</td>


<!--<td><label>Price</label></td><td><input type="text" name="price" id="price" class=""></td>-->
<td><label >Service Zone</label></td><td> <input type="text" name="service_loc_name[]" id="service_loc_name-0" class="service_loc_name" readonly value='<?php echo $bd->service_loc;?>'><input type="hidden" name="service_loc[]" id="service_loc-0" class="service_loc" value='<?php echo $bd->service_zone_loc;?>'>
</td>
</tr>
<tr>

<td><label>Sale Date</label></td><td><input class="date" type="text" name="purchase[]" id="purchase-0" value=""></td>

</tr>
</table>
</td>
 <td><a id="addnewrow"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></td> 

</tr>
</table>
<table id="table1" class="tableadd radis">
<tr>
<td> <label><input type="radio" name="colorRadio" id="colorRadioc" class="radiobutton" value="paid" checked="checked" ><a>Chargeable</a></label></td>
       <td> <label><input type="radio" name="colorRadio" id="colorRadiow" class="radiobutton" value="warranty" ><a>Warranty</a></label></td>
       <td> <label style="width: 200px;"><input type="radio" class="radiobutton" name="colorRadio" id="colorRadiop" value="prevent" ><a>Preventive Maintenance</a></label></td>
</tr>
</table>


<table id="table1" class="tableadd">
	<tr class="paid box" >
	<td><label></label></td><td><label></label></td>		
	</tr>
	<tr class="warranty box">
	<td><label>Warranty Date</label><input class="date" type="text" name="warranty" id="warranty" value="<?php echo $warranty_date; ?>"></td></tr>
	
<tr class="prevent box">
	<td><label>End Date</label></td><td><input type="text" name="preventive_main" id="preventive_main" class="date" value="<?php echo $warranty_date; ?>"></td><td>
	<table>
	<tr>
	<td><label class="nos">Nos</label></td>
	<td><select id="prenos" name="prenos">
<option>---Select---</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td>
</tr>
</table></td>

<table id="table1" class="tableadd" style="float: right;width: 49%;">
<tr>
<td></td>
<td></td>
<td style="width: 175px;">
<label class="nos one second third four five box1 box">Months</label></td>
<td>
<select class="one box1 box">
<option>---Select---</option>
<option>11 Month</option>
</select>
<select class="second box1 box">
<option>---Select---</option>
<option>1 Month</option>
<option>11 Month</option>
</select>
<select class="third box1 box">
<option>---Select---</option>
<option>1 Month</option>
<option>6 Month</option>
<option>11 Month</option>
</select>
<select class="four box1 box">
<option>---Select---</option>
<option>1 Month</option>
<option>4 Month</option>
<option>8 Month</option>
<option>11 Month</option>

</select>
<select class="five box1 box">
<option>---Select---</option>
<option>1 Month</option>
<option>3 Month</option>
<option>6 Month</option>
<option>9 Month</option>
<option>11 Month</option>
</select>


</td>		
	</tr>	
	</table></tr>
	</table>
	
<table class="tableadd">	
<tr>
<td> <label>Notes:</label></td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea"></textarea></td>
</tr>
</table>

<table class="tableadd">	
<tr>
	<td>
		<select name="service_cat[]" id="service_cat-0" multiple hidden>
		</select>
	</td>
	<td>
		<select name="probi[]" id="probi-0" multiple hidden>
		</select>
	</td>
</tr>
</table>

<!--<td><label>Warranty Date</label></td><td><input class="date" type="text" name="warranty[]"></td>
<td><label>Preventive Maintenance</label></td><td><input type="text" name="preventive_main[]" id="preventive_main" class=""></td>-->


<input type="hidden" id="countid" value="0">
 


<!--<a id="addMoreRows" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Add Product</a>--><button class="btn cyan waves-effect waves-light link" type="submit">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>







					
                         
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
  	$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });
});
});
  
  </script>
  
  

   
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
  
  
  
  
  <script type="text/javascript">
  $(".chosen-select").chosen().change(function()
{//alert("hii");
$("#br_name > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>order/get_branchname",
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
  
  <script>
	$(document).ready(function() {
		$('#saless').click(function() { //alert("jkdsfhjjdfhkjdshfkjh");
			var machine_status;
			var category = $('#category').val();
			var subcategory = $('#subcategory').val();
			var brandname = $('#brandname').val();
			var mod_id = $('#mod_id').val();
			var service_loc = $('#service_loc').val();
			
			var colorRadioc = $('#colorRadioc').val();
			var colorRadiow = $('#colorRadiow').val();
			var colorRadiop = $('#colorRadiop').val();
			
			//alert("PAid:"+colorRadioc);
			//alert("warranty:"+colorRadiow);
			//alert("preventive:"+colorRadiop);
			
			if(document.getElementById('colorRadioc').checked){
				machine_status = "Chargeable";
			}	
			if(document.getElementById('colorRadiow').checked){
				machine_status = "Warranty";
			}
			if(document.getElementById('colorRadiop').checked){
				machine_status = "Preventive";
			}
			
			var warranty_date = $('#warranty').val();
			
			var category_name = $('#category_name').val();
			var subcategory_name = $('#subcategory_name').val();
			var brand_name = $('#brand_name').val();
			var model = $('#model_name').val();
			var service_loc_name = $('#service_loc_name').val();
			var serial_no = $('#serial_no').val();
			var service_cat = $('#service_cat').val();
			//alert(service_cat);
			
			
			parent.setSelectedSales(category,subcategory,brandname,service_loc,machine_status,warranty_date,category_name,subcategory_name,brand_name,service_loc_name,mod_id,model,serial_no,service_cat);
			parent.$.fancybox.close();
    });
});
  
  </script>
 
   
</body>

</html>