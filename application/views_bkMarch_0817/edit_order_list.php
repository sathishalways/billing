<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
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
});//]]>  

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
url: "<?php  echo base_url(); ?>order/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#tabletest').append(result);
} 
});

});
  
});
</script>
<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var order_no = document.frmOrder.order_no.value,
   cust_name = document.frmOrder.cust_name.value,
   br_name = document.frmOrder.br_name.value,
   cont_name = document.frmOrder.cont_name.value,
   mobile = document.frmOrder.mobile.value,
   //email = document.frmOrder.email.value,
   //serial_no = document.frmOrder.serial_no.value,
   model = document.frmOrder.model.value;
   
  
 if( order_no == "" )
   {
     document.frmOrder.order_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the order no.";
     return false;
   }
   if( cust_name == "" )
   {
     document.frmOrder.cust_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name";
     return false;
   }
   if( br_name == "" )
   {
     document.frmOrder.br_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the branch name";
     return false;
   }
   if( cont_name == "" )
   {
     document.frmOrder.cont_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the contact name";
     return false;
   }
   
   if( mobile == "" )
   {
     document.frmOrder.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   
   /* if( email == "" )
   {
     document.frmOrder.email.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email";
     return false;
   } */
   
   /* if( serial_no == "" )
   {
     document.frmOrder.serial_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the serial no";
     return false;
   } */
   
   if( model == "" )
   {
     document.frmOrder.model.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the model";
     return false;
   }
}

</script>

<script type="text/javascript">
    $(document).ready(function()
    {
    $("#cust_name").change(function()
    {
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

    });

</script>

<script>
$(document).ready(function(){
   $('#br_name').change(function(){
   var id = $(this).val();
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
		   $('#pincode').val(data.pincode)
            
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
				$('#service_loc_name').val(data.service_loc),
				$('#service_loc').val(data.service_zone_loc),
				$('#service_loc_coverage').val(data.zone_coverage)
            });
} 
});


   });
 });
</script>

 <script>
$(document).ready(function(){
   $('#model').change(function(){//alert("ddddd");
   var id = $(this).val();
   //alert(id);
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
		   $('#category_name').val(data.product_category),
		   $('#category').val(data.category),
		   
		   $('#subcategory_name').val(data.subcat_name),
		   $('#subcategory').val(data.subcategory),
		   
		   $('#brand_name').val(data.brand_name),
		   $('#brandname').val(data.brand)
    });
	
} 
});
   });
 });
</script>


<style>
 .link{
	 padding: 8px;
border: 1px solid rgb(5, 94, 135);
background: rgb(5, 94, 135) none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
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

.tableadd tr td input {
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
    .amc tr td input{
	  width: 400px;
  height: 33px;
  /* border: 1px solid #B3B3B3; */
  border-radius: 5px;
  padding-left: 10px;
}


.amc tr td{
	width:150px;
	  margin-right: 20px;
}
.amc tr td select {
  height: 33px;
  border-radius: 5px;
  width: 81px;
  border: none;
  border-bottom: 1px solid #055E87;
  background-color: transparent;
  background-image: linear-gradient(135deg, #070708 50%, transparent 50%), linear-gradient(to right, #FBFBFB);
  background-attachment: scroll, scroll, scroll;
  background-clip: border-box, border-box, border-box;
  background-origin: padding-box, padding-box, padding-box;
  background-position: calc(100% - 21px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), 100% 0px;
  background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
  background-repeat: no-repeat;
  font: 300 1em/1.5em "Helvetica Neue",Arial,sans-serif;
  /*padding: 0.5em 3.5em 0.5em 1em;*/
  
  margin: 0px;
  box-sizing: border-box;
  -moz-appearance: none;
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
textarea.materialize-textarea {
    overflow-y: hidden;
    padding: 1.6rem 0;
    resize: none;
    min-height: 8rem;
}
select {
    border: 1px solid #ccc;
}
[type="radio"]:not(:checked), [type="radio"]:checked {
    position: relative;
    /* left: -9999px; */
    visibility: visible;
}
 </style>
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


   <section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Edit Sales</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			     <div class="col-md-1">
				 </div>
			  
                <div class="col-md-10">
                 
                      <form action="<?php echo base_url(); ?>order/edit_order" method="post" name="frmOrder" onsubmit="return frmValidate()">
					  <?php foreach($list as $key){?>  
                      <div id="errorBox"></div> 


<div class="tableadd" >
  <div class="col-md-12">
      <div class="col-md-3">
          <label>Invoice No&nbsp;<span style="color:red;">*</span></label>
          <input type="text" name="order_no" class="" value="<?php echo $key->order_id; ?>"><input type="hidden" name="orderid" class="" value="<?php echo $key->id; ?>">
      </div>
      <div class="col-md-3">
          <label>Customer Name&nbsp;<span style="color:red;">*</span></label>
          <select name="cust_name" id="cust_name">
              <option value="">--Select--</option>
              <?php foreach($customerlist as $customerkey){
              if($customerkey->id==$key->customer_id){
              ?>
              <option selected="selected" value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->customer_name.' - ('.$customerkey->customer_id.')'; ?></option>
              <?php } else {?>
              <option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->customer_name.' - ('.$customerkey->customer_id.')'; ?></option>
              <?php } } ?>
          </select>
      </div>
      <div class="col-md-3">
          <label>Branch Name&nbsp;<span style="color:red;">*</span></label>
          <select name="br_name" id="br_name">
              <option>---Select---</option>
              <?php
              if($key->cslid){
              ?>
              <option selected="selected" value="<?php echo $key->cslid; ?>"><?php echo $key->branch_name; ?></option>
              <?php } ?>
          </select>
      </div>
      <div class="col-md-3">
          <label>Contact Name&nbsp;<span style="color:red;">*</span></label>
          <input type="text" name="cont_name" id="cont_name" class="" value="<?php echo $key->contact_name; ?>">
      </div>
  </div>

  <div class="col-md-12">
      <div class="col-md-3">
          <label>Mobile&nbsp;<span style="color:red;">*</span></label>
          <input type="text" name="mobile" class="" id="mobile" value="<?php echo $key->mobile; ?>">
      </div>
      <div class="col-md-3">
          <label>Email</label>
          <input type="text" name="email" id="email" class="" value="<?php echo $key->email_id; ?>">
      </div>
      <div class="col-md-3">
          <label>Address</label>
          <input type="text" name="addr" id="addr" class="" value="<?php echo $key->address; ?>">
      </div>
      <div class="col-md-3">
          <label>City</label>
          <input type="text" name="city" id="city" class="" value="<?php echo $key->city; ?>">
      </div>
  </div>

  <div class="col-md-12">
      <div class="col-md-3">
          <label>State</label>
          <input type="text" name="state" id="state" class="" value="<?php echo $key->state; ?>">
      </div>
      <div class="col-md-3">
          <label>Pincode</label>
          <input type="text" name="pincode" class="" id="pincode" value="<?php echo $key->pincode; ?>"><input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="" value="<?php echo $key->zone_coverage; ?>">
      </div>
  </div>
</div>



<?php } ?>
<?php foreach($list1 as $key1){?>  

<div id="table1" class="tableadd" style="margin-bottom: 20px;">
    <label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>
    <div class="col-md-12">
        <div class="col-md-3">
            <label>Serial No</label>
            <input type="text" name="serial_no" id="serial_no" class="" value="<?php echo $key1->serial_no; ?>"><input type="hidden" name="orderdetailid" class="" value="<?php echo $key1->id; ?>">
        </div>
        <div class="col-md-3">
            <label>Batch No</label>
            <input type="text" name="batch_no" id="batch_no" class="" value="<?php echo $key1->batch_no; ?>">
        </div> 
        <div class="col-md-3">
            <label>Model&nbsp;<span style="color:red;">*</span></label>
            <select name="model" id="model">
                <option value="">---Select---</option>
                <?php foreach($modellist as $modelkey){
                if($modelkey->id==$key1->model_id){
                ?>
                <option selected="selected" value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
                <?php } else{?>
                <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
                <?php } }?>
            </select>
        </div>
        <div class="col-md-3">
            <label>Category</label>
            <input type="text" name="category_name" id="category_name" value="<?php echo $key1->cat_name; ?>"><input type="hidden" name="category" id="category" value="<?php echo $key1->cat_id; ?>">
        </div> 
    </div>

    <div class="col-md-12">
        <div class="col-md-3">
            <label>SubCategory</label>
            <input type="text" name="subcategory_name" id="subcategory_name" value="<?php echo $key1->subcat_name; ?>"><input type="hidden" name="subcategory" id="subcategory" value="<?php echo $key1->subcat_id; ?>">
        </div>
        <div class="col-md-3">
            <label>Brand Name</label>
            <input type="text" name="brand_name" id="brand_name" value="<?php echo $key1->brand_name; ?>"><input type="hidden" name="brandname" id="brandname" value="<?php echo $key1->brand_id; ?>">
        </div>
        <div class="col-md-3">
            <label >Service Zone</label>
            <input type="text" name="service_loc_name" id="service_loc_name" value="<?php echo $key1->service_zone; ?>"><input type="hidden" name="service_loc" id="service_loc" value="<?php echo $key1->service_loc_id; ?>">
        </div>
        <div class="col-md-3">
            <label>Sale Date</label>
            <input class="date" type="text" name="purchase" id="purchase" value="<?php echo $key1->purchase_date; ?>">  <input type="hidden" name="warranty_date_hide" id="warranty_date_hide" value="<?php echo $key1->warranty_date; ?>" readonly><input type="hidden" name="prev_main_hide" id="prev_main_hide" value="<?php echo $key1->prev_main; ?>" readonly><input type="hidden" name="paid_hide" id="paid_hide" value="<?php echo $key1->paid; ?>" readonly>
        </div>
    </div>
</div>


<div id="table1" class="tableadd">
    <div class="col-md-12">
        <div class="col-md-3">
            <label><input type="radio" name="colorRadio" value="paid" <?php if($key1->paid){?> checked="checked" <?php }?>>Chargeable</label>
        </div>
        <div class="col-md-3">
            <label><input type="radio" name="colorRadio" value="warranty" <?php if($key1->warranty_date){?> checked="checked" <?php }?>>Warranty</label>
        </div>
        <div class="col-md-3">
            <label><input type="radio" name="colorRadio" value="prevent" <?php if($key1->prev_main){?> checked="checked" <?php }?>>Preventive Maintenance</label>
        </div>
    		<div class="col-md-3">
            <label><input type="radio" name="colorRadio" class="radiobutton" value="amc" <?php if($key1->amc_type){?> checked="checked" <?php }?> >AMC</label>
        </div>
    </div>
</div>

<div>
  	<div class="col-md-12 paid box">
  		<div class="col-md-3">
  			<label></label>
  		</div>
  		<div class="col-md-3">
  			<label></label>
  		</div>
  	</div>
	
	<?php if($key1->warranty_date==""){?>
	<div class="col-md-12 warranty1 box1">
  		<div class="col-md-3">
  			<label>Warranty Date</label>
  			<input class="date" type="text" name="warranty" id="warranty" value="<?php echo $warranty_date; ?>">
  		</div>
	</div> 
	<?php }?>
	
	<?php if($key1->prev_main==""){?>
	<div class="col-md-12 prevent1 box1">
		<div class="col-md-3">
			<label>End Date</label>
			<input type="text" name="preventive_main" id="preventive_main" class="date" value="<?php echo $warranty_date; ?>">
		</div>
		<div class="col-md-3">
			<label>Nos</label>
			<select id="prenos" name="prenos">
				<option>---Select---</option>
				<option value="1">1</option>
				<option value="3">3</option>
				<option value="6">6</option>
				<option value="12">12</option>
			</select>
		</div>
	</div>
	<?php }?>
	
	<?php if($key1->amc_type==""){?>
	<div class="col-md-12 amc1 box1" style="padding:0px">
  		<div class="col-md-3">
  			<label>AMC Type</label>
  			<select id="amc_type" name="amc_type">
            <option value="">---Select---</option>
            <option value="Comprehensive">Comprehensive</option>
            <option value="serviceonly">Service only</option>
        </select>
  		</div>
  		<div class="col-md-3">
  			<label>Start Date</label>
  			<input type="text" name="amc_start_date" id="amc_start_date" class="date" value="<?php echo $warranty_date; ?>">
  		</div>
  		<div class="col-md-3">
  			<label>End Date</label>
  			<input type="text" name="amc_end_date" id="amc_end_date" class="date" value="<?php echo $warranty_date; ?>">
  		</div>
  		<div class="col-md-3">
  			<label>Nos</label>
  			<select id="amc_prenos" name="amc_prenos">
            <option>---Select---</option>
            <option value="1">1</option>
            <option value="3">3</option>
            <option value="6">6</option>
            <option value="12">12</option>
        </select>
  		</div>
	</div>
	<?php }?>
</div>

<!--<table id="table1" class="tableadd">
    <tr class="paid box" >
       <td><label></label></td><td><label></label></td>		
    </tr>
    <?php if($key1->warranty_date==""){?>
    <tr class="warranty1 box1">
        <td><label>Warranty Date</label><input class="date" type="text" name="warranty" id="warranty" value="<?php echo $warranty_date; ?>"></td>
    </tr>
    <?php }?>

    <?php if($key1->prev_main==""){?>
    <tr class="prevent1 box1">
        <td><label style="position: relative; top: 15px;">End Date</label><input type="text" name="preventive_main" id="preventive_main" class="date" value="<?php echo $warranty_date; ?>" style="position: relative; top: 15px;"></td><td><label style="margin-left: -65px; position: relative; top: 34px;">Nos</label><select id="prenos" name="prenos">
        <option>---Select---</option>
        <option value="1">1</option>
        <option value="3">3</option>
        <option value="6">6</option>
        <option value="12">12</option>
        </select>
        </td>		
    </tr>
    <?php }?>

    <?php if($key1->amc_type==""){?>
    <tr class="amc1 box1">
        <td><label>AMC Type</label></td>
        <td>
            <select id="amc_type" name="amc_type">
                <option value="">---Select---</option>
                <option value="Comprehensive">Comprehensive</option>
                <option value="serviceonly">Service only</option>
            </select>
        </td>

        <td><label>Start Date</label></td>
        <td><input type="text" name="amc_start_date" id="amc_start_date" class="date" value="<?php echo $warranty_date; ?>"></td>

        <td><label>End Date</label></td>
        <td><input type="text" name="amc_end_date" id="amc_end_date" class="date" value="<?php echo $warranty_date; ?>"></td>

        <td><label class="nos" style="width:50px;">Nos</label></td>
        <td>
            <select id="amc_prenos" name="amc_prenos">
                <option>---Select---</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="12">12</option>
            </select>
        </td>		
    </tr>
    <?php }?>


    <?php if($key1->warranty_date){?>
    <div class="warranty box">
        <td>
            <label>Warranty Date</label>
            <input class="date" type="text" name="warranty" id="warranty" value="<?php echo $key1->warranty_date; ?>">
        </td>
    </div>
    <?php }?>
    <?php if($key1->prev_main){?>
    <div class="prevent box">
        <td>
            <label>End Date</label>
            <input type="text" name="preventive_main" id="preventive_main" class="date" value="<?php echo $key1->prev_main; ?>">
        </td>
        <td>
            <label>Nos</label>
            <select id="prenos" name="prenos" style="width: 85px;">
                <option>---Select---</option>
                <option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?>  value="1">1</option>
                <option <?php if($key1->prenos=='3'){?> selected="selected" <?php } ?> value="3">3</option>
                <option <?php if($key1->prenos=='6'){?> selected="selected" <?php } ?> value="6">6</option>
                <option <?php if($key1->prenos=='12'){?> selected="selected" <?php } ?> value="12">12</option>
            </select>
        </td>		
    </div>	<?php } ?>
</table>-->


<div class="amc box">	
    <?php if($key1->amc_type){?>		
    <div class="col-md-12 amc box">
        <div class="col-md-3">
            <label style="width: 73px;">AMC Type</label>
            <select id="amc_type" name="amc_type">
                <option value="">---Select---</option>
                <option <?php if($key1->amc_type=='Comprehensive'){?> selected="selected" <?php } ?>value="Comprehensive">Comprehensive</option>
                <option <?php if($key1->amc_type=='serviceonly'){?> selected="selected" <?php } ?> value="serviceonly">Service only</option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Start Date</label>
            <input type="text" name="amc_start_date" id="amc_start_date" class="date" value="<?php echo $key1->amc_start_date; ?>">
        </div>

        <div class="col-md-3">
            <label>End Date</label>
            <input type="text" name="amc_end_date" id="amc_end_date" class="date" value="<?php echo $key1->amc_end_date; ?>">
        </div>	

        <div class="col-md-3">
            <label class="nos">Nos</label> 
            <select id="amc_prenos" name="amc_prenos">
                <option>---Select---</option>
                <option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?>  value="1">1</option>
                <option <?php if($key1->prenos=='3'){?> selected="selected" <?php } ?> value="3">3</option>
                <option <?php if($key1->prenos=='6'){?> selected="selected" <?php } ?> value="6">6</option>
                <option <?php if($key1->prenos=='12'){?> selected="selected" <?php } ?> value="12">12</option>
            </select>
        </div>		
    </div>		
    <?php } ?>	
</div>

<div class="tableadd">	
    <div class="col-md-12"> 
        <div class="col-md-3"><label>Notes:</label></div>
        <div class="col-md-6"><textarea type="text" name="notes" id="notes" class="materialize-textarea"><?php echo $key1->notes;?></textarea></div>
    </div>
</div>
<?php } ?>
<!--<table id="tabletest" class="tableadd" style="margin-bottom: 20px;"></table>

<input type="hidden" id="countid" value="<?php echo $count; ?>">-->

<!--<a id="addMoreRows" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Add Product</a>--><button class="btn cyan waves-effect waves-light " type="submit">Submit
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
  <script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="paid"){
            $(".box").not(".paid").hide();
			$(".box1").not(".paid").hide();
            $(".paid").show();
        }
        if($(this).attr("value")=="warranty"){
            $(".box").not(".warranty").hide();
			$(".box1").not(".warranty").hide();
			
            $(".warranty").show();
			$(".warranty1").show();
        }
        if($(this).attr("value")=="prevent"){
            $(".box").not(".prevent").hide();
			$(".box1").not(".prevent").hide();
			
            $(".prevent").show();
			$(".prevent1").show();
        }
		if($(this).attr("value")=="amc"){
            $(".box").not(".amc").hide();
			$(".box1").not(".amc").hide();
			
            $(".amc").show();
			$(".amc1").show();
        }
    });
});
</script>
  
  
  
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     
	
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  
  


<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("input[name='datepickerpurchase']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
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

   

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>