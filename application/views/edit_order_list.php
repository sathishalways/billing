<style>
.btn, .btn-large, .btn-flat {
   text-transform: none !important;
}
</style>
<script>
$(document).ready(function(){
//alert();
var i=1;
 $(".adddate").click(function(){ //alert("sdsdsdsdsd");
        $('.append_table').append('<tr> <td><input type="text" class="amentidate1 " style="border-radius: 2px; outline: none;height: 22px !important;width: 175px !important;margin-top: 5px;margin-right: 6px;" name="pm_date[]"/><input type="hidden" name="pm_sch_id[]" value="" /> <input type="hidden" name="pm_sch_status[]" value="" /></td><td><button  type="button" class="remCF"  id="delete'+i+'" style="margin-top: -6px;"><i class="fa fa-trash" ></i></button><td></tr>');
		 $(document.body).delegate(".remCF", "click", function(){ alert("sdsds");
        $(this).closest("tr").remove();        
    });    
    
		i++;
		});
		$('body').on('focus','.amentidate1',function(){					
		$(this).datepicker({
				    dateFormat: "yy-mm-dd",
					changeMonth:true,
					changeYear:true
			        });
		
			});
    });

</script>
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
	
	/*$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });
});
});*/
    
});
});//]]>  

</script>
<script>

$(document).ready(function(){ 
	
$(".date").datepicker({ 
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });
		
		$(".date1").datepicker({ 
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
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
   serial_no = document.frmOrder.serial_no.value,
   model = document.frmOrder.model.value;
   
  //alert(br_name);
 if( order_no == "" )
   {
     document.frmOrder.order_no.focus() ;
	 document.getElementById("errorBox1").innerHTML = "enter the order no.";
     return false;
   }
  
   if( br_name == "" )
   {
     document.frmOrder.br_name.focus() ;
	 document.getElementById("errorBox3").innerHTML = "enter the branch name";
     return false;
   }
    if( cust_name == "" )
   {
     document.frmOrder.cust_name.focus() ;
	 document.getElementById("errorBox2").innerHTML = "enter the customer name";
     return false;
   }
   if( cont_name == "" )
   {
     document.frmOrder.cont_name.focus() ;
	 document.getElementById("errorBox4").innerHTML = "enter the contact name";
     return false;
   }
   
   if( mobile == "" )
   {
     document.frmOrder.mobile.focus() ;
	 document.getElementById("errorBox5").innerHTML = "enter the mobile";
     return false;
   }
   
   /* if( email == "" )
   {
     document.frmOrder.email.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email";
     return false;
   } */
   
    if( serial_no == "" )
   {
     document.frmOrder.serial_no.focus() ;
	 document.getElementById("errorBox7").innerHTML = "enter the serial no";
     return false;
   }
   
   if( model == "" )
   {
     document.frmOrder.model.focus() ;
	 document.getElementById("errorBox6").innerHTML = "enter the model";
     return false;
   }
}

</script>
<script>
     $(document).ready(function(){
		$(".order_invoice").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox1").show();
			}
			else{
				$("#errorBox1").hide();
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
		$("#cont_name").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox4").show();
			}
			else{
				$("#errorBox4").hide();
			}
		});
		$("#mobile").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox5").show();
			}
			else{
				$("#errorBox5").hide();
			}
		});
	$("#q").click(function(){
			if($(this).val()==""){
			    $("#dis").show();
			}
			else{
				$("#dis").hide();
			}
		});
		
		$("#model").change(function(){
			if($(this).val()==""){
			    $("#errorBox6").show();
			}
			else{
				$("#errorBox6").hide();
			}
		});
		$("#serial_no").keyup(function(){
			if($(this).val()==""){
			    $(".errorBox7").show();
			}
			else{
				$(".errorBox7").hide();
			}
		});
		$("#email").keyup(function(){
			if($(this).val()==""){
			    $(".email_error").show();
			}
			else{
				$(".email_error").hide();
			}
		});
		
		});
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
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea {
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
textarea {
    overflow-y: scroll;
    padding: 8px;
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
#errorBox1{
 color:#F00;
 }
 #errorBox2{
 color:#F00;
 }
 #errorBox3{
 color:#F00;
 }
 #errorBox4{
 color:#F00;
 }
 #errorBox5{
 color:#F00;
 }
 #errorBox6{
 color:#F00;
 }
 .email_error{color:#F00;}
 input[readonly],input[disabled]{
background-color:#eee;}
#cust_name{
background-color:#eee;}
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
		  
			<?php 
				if($salename=='warranty'){?>
				<h2>Edit Warranty </h2>
				<?php } ?>
				<?php if($salename=='paidd'){?>
				<h2>Edit Chargeable</h2>
				<?php } ?>
				<?php if($salename=='rent'){?>
				<h2>Edit Rent</h2>
				<?php } ?>
				<?php if($salename=='amc'){?>
				<h2>Edit AMC</h2>
				<?php } ?>
				<?php if($salename=='cmc'){?>
				<h2>Edit CMC</h2>
				<?php } ?>
				
            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			     <div class="col-md-1">
				 </div>
			  
                <div class="col-md-10">
                 
                      <form action="<?php echo base_url(); ?>order/edit_order" method="post" name="frmOrder" onsubmit="return frmValidate()">
					  <?php foreach($list as $key){?>  
                      


<div class="tableadd" >
  <div class="col-md-12">
      <div class="col-md-3">
          <label>Invoice No&nbsp;<span style="color:red;">*</span></label>
          <input type="text" name="order_no" class="order_invoice" value="<?php echo $key->order_id; ?>"maxlength="50"><input type="hidden" name="orderid" class="" value="<?php echo $key->id; ?>">
		  <span id="errorBox1"></span>
      </div>
      <div class="col-md-3">
          <label>Customer Name&nbsp;<span style="color:red;">*</span></label>
          <select name="cust_name" id="cust_name" disabled readonly>
              <option value="">--Select--</option>
              <?php foreach($customerlist as $customerkey){
              if($customerkey->id==$key->customer_id){
              ?>
              <option selected="selected" value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->customer_name.' - ('.$customerkey->customer_id.')'; ?></option>
              
              <?php } } ?>
          </select>
		  <input type="hidden" value="<?php foreach($customerlist as $customerkey){
		  if($customerkey->id==$key->customer_id){ echo $customerkey->id;}}
              ?>" name="cust_name"/>
		  <span id="errorBox2"></span>
      </div>
      <div class="col-md-3">
          <label>Branch Name&nbsp;<span style="color:red;">*</span></label>
          <select name="br_name" id="br_name">
              <option value="">---Select---</option>
              <?php
              if($key->cslid){
              ?>
              <option selected="selected" value="<?php echo $key->cslid; ?>"><?php echo $key->branch_name; ?></option>
              <?php } ?>
          </select>
		  <span id="errorBox3"></span>
      </div>
      <div class="col-md-3">
          <label>Contact Name&nbsp;<span style="color:red;">*</span></label>
          <input type="text" name="cont_name" id="cont_name" class="" value="<?php echo $key->contact_name; ?>" readonly>
		  <span id="errorBox4"></span>
      </div>
  </div>

  <div class="col-md-12">
      <div class="col-md-3">
          <label>Mobile&nbsp;<span style="color:red;">*</span></label>
          <input type="text" name="mobile" class="" id="mobile" value="<?php echo $key->mobile; ?>" readonly>
		  <span id="errorBox5"></span>
      </div>
      <div class="col-md-3">
          <label>Email</label>
          <input type="text" name="email" id="email" class="" value="<?php echo $key->email_id; ?>" readonly>
      </div>
      <div class="col-md-3">
          <label>Address</label>
          <input type="text" name="addr" id="addr" class="" value="<?php echo $key->address; ?>" readonly>
      </div>
      <div class="col-md-3">
          <label>City</label>
          <input type="text" name="city" id="city" class="" value="<?php echo $key->city; ?>" readonly>
      </div>
  </div>

  <div class="col-md-12">
      <div class="col-md-3">
          <label>State</label>
          <input type="text" name="state" id="state" class="" value="<?php echo $key->state; ?>" readonly>
      </div>
      <div class="col-md-3">
          <label>Pincode</label>
          <input type="text" name="pincode" class="" id="pincode" value="<?php echo $key->pincode; ?>" readonly><input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="" value="<?php echo $key->zone_coverage; ?>">
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
            <label>Serial No&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="serial_no" id="serial_no" class="" value="<?php echo $key1->serial_no; ?>"><input type="hidden" name="orderdetailid" class="" value="<?php echo $key1->id; ?>">
			<span id="errorBox7"></span>
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
			<span id="errorBox6"></span>
        </div>
        <div class="col-md-3">
            <label>Category</label>
            <input type="text" name="category_name" id="category_name" value="<?php echo $key1->cat_name; ?>"readonly><input type="hidden" name="category" id="category" value="<?php echo $key1->cat_id; ?>">
        </div> 
    </div>

    <div class="col-md-12">
        <div class="col-md-3">
            <label>SubCategory</label>
            <input type="text" name="subcategory_name" id="subcategory_name" value="<?php echo $key1->subcat_name; ?>" readonly><input type="hidden" name="subcategory" id="subcategory" value="<?php echo $key1->subcat_id; ?>">
        </div>
        <div class="col-md-3">
            <label>Brand Name</label>
            <input type="text" name="brand_name" id="brand_name" value="<?php echo $key1->brand_name; ?>" readonly><input type="hidden" name="brandname" id="brandname" value="<?php echo $key1->brand_id; ?>">
        </div>
        <div class="col-md-3">
            <label >Service Zone</label>
            <input type="text" name="service_loc_name" id="service_loc_name" value="<?php echo $key1->service_zone; ?>" readonly><input type="hidden" name="service_loc" id="service_loc" value="<?php echo $key1->service_loc_id; ?>">
        </div>
        <div class="col-md-3">
            <label>Sale Date</label>
            <input class="date" type="text" name="purchase" id="purchase" value="<?php echo $key1->purchase_date; ?>">  <input type="hidden" name="warranty_date_hide" id="warranty_date_hide" value="<?php echo $key1->warranty_date; ?>" readonly><input type="hidden" name="prev_main_hide" id="prev_main_hide" value="<?php echo $key1->prev_main; ?>" readonly><input type="hidden" name="paid_hide" id="paid_hide" value="<?php echo $key1->paid; ?>" readonly>
        </div>
    </div>
	<!--<div class="col-md-12">
		<div class="col-md-3 append_table">
		
           <?php if(!empty($get_pm_dates)){ $r=0; foreach($get_pm_dates as $pm_key){?>
			<tr> 
			
			<td><input type="text" <?php if($pm_key->status=='0'){?>class="amentidate1"<?php } else {?>readonly<?php } ?> style="border-radius: 2px; outline: none;height: 22px !important;width: 180px !important;margin-top: 13px;margin-right: 6px;margin:0px;" name="pm_date[]" value="<?php echo $pm_key->schedule_date; ?>" />&nbsp;<input type="hidden" name="pm_sch_id[]" value="<?php echo $pm_key->id; ?>" /> <input type="hidden" name="pm_sch_status[]" value="<?php echo $pm_key->status; ?>" /></td>
			
			<td>
				<?php if($r=='0'){?>
				<i class="fa fa-plus-circle adddate" aria-hidden="true" id="adddate" style="position: absolute;top: 6px;left: 219px;"></i>
				<?php } ?>
				<?php if($r!='0'){?>
				<button  type="button" class="remCF"  id="delete<?php echo $r; ?>" style="position: relative; left: 188px;top: -30px;"><i class="fa fa-trash"></i></button>
				<?php } ?>
			<td>
			
			</tr>
		   <?php $r++; } } else{?>
			<tr> 
				<td>
				<label>PM Schedule Date</label>
				<input type="text" class="amentidate1 " style="border-radius: 2px; outline: none;height: 22px !important;width: 180px !important;margin-top: 13px;margin-right: 6px;" name="pm_date[]"value="" />
				<i class="fa fa-plus-circle adddate" aria-hidden="true" id="adddate" style="position: absolute;top: 29px; left: 224px;"></i>
				</td>
			</tr>
			<?php } ?>
			
        </div>
	</div>-->
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
            <label><input type="radio" name="colorRadio" class="radiobutton" value="amc" <?php if($key1->amc_start_date){?> checked="checked" <?php }?> >AMC</label>
        </div>
		
		
			<div class="col-md-3">
            <label><input type="radio" name="colorRadio" class="radiobutton" value="cmc" <?php if($key1->cmc_start_date){?> checked="checked" <?php }?> >CMC</label>
        </div>
		
		
		<div class="col-md-3">
            <label><input type="radio" name="colorRadio" class="radiobutton" value="rent" <?php if($key1->rent_date){?> checked="checked" <?php }?> >Rent</label>
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
  			<input class="date" type="text" name="warranty" id="warranty" value="<?php echo $key1->warranty_date; ?>">
  		</div>
				        <div class="col-md-3">
            <label>Nos</label>   
            <select id="warrnos" name="warrnos">
              <option>---Select---</option>
              
              <option value="6">6</option>
              <option value="12">12</option>
            </select>
        </div>	
	</div> 
	<?php }?>
	
	
	
	 <?php if($key1->rent_date==""){?>
<div class="col-md-12 rent1 box1">
 <div class="col-md-3">
            <label>ReagentRent Type</label>
            <select id="rent_type" name="rent_type">
              <option value="">---Select---</option>
              <option value="syndicate">By Syndicate</option>
              <option value="distributor">By Sub or local Distributor</option>
             
            </select>
        </div>
        <div class="col-md-3">
            <label>Rent Date</label>
            <input type="text" name="rent"  class="date" value="<?php echo $key1->rent_date; ?>" >
        </div>
		<div class="col-md-3">
            <label>Nos</label>   
            <select name="rent_nos">
              <option>---Select---</option>
               <option value="1">1</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="12">12</option>
            </select>
        </div>
 </div><?php } ?>
	
<?php if($key1->amc_start_date=="")
	{
		?>
	<div class="amc1 box1">
    <div class="col-md-12">
        <div class="col-md-3">
            <label>Start Date</label>
            <input type="text" name="amc_start_date" id="amc_start_date" class="date" value="<?php echo $key1->amc_start_date; ?>" maxlength="20">
        </div>
        <div class="col-md-3">
            <label>End Date</label>
            <input type="text" name="amc_end_date" id="amc_end_date" class="date" value="<?php echo $key1->amc_end_date; ?>" maxlength="20">
        </div>
        <div class="col-md-3">
            <label class="nos">Nos</label>
            <select id="cmc_prenos" name="cmc_prenos">
              <option>---Select---</option>
              
              <option value="6">6</option>
              <option value="12">12</option>
            </select>
        </div>
    </div>
</div>
	<?php
	}
	?>
	
	
	
	<?php if($key1->cmc_start_date=="")
	{
		?>
	<div class="cmc1 box1">
    <div class="col-md-12">
        <div class="col-md-3">
            <label>Start Date</label>
            <input type="text" name="cmc_start_date" id="cmc_start_date" class="date" value="<?php echo $key1->cmc_start_date; ?>" maxlength="20">
        </div>
        <div class="col-md-3">
            <label>End Date</label>
            <input type="text" name="cmc_end_date" id="cmc_end_date" class="date" value="<?php echo $key1->cmc_end_date; ?>" maxlength="20">
        </div>
        <div class="col-md-3">
            <label class="nos">Nos</label>
            <select id="cmc_prenos" name="cmc_prenos">
              <option>---Select---</option>
              
              <option value="6">6</option>
              <option value="12">12</option>
            </select>
        </div>
    </div>
</div>
	<?php
	}
	?>
	
	
	
</div>



<?php if($key1->prev_main){?>
	<div class="col-md-12 prevent box">
		<div class="col-md-3">
			<label>End Date</label>
			<input type="text" name="preventive_main" id="preventive_main" class="date" value="<?php echo $warranty_date; ?>">
		</div>
		<div class="col-md-3">
			<label>Nos</label>
			<select id="prenos" name="prenos">
				<option>---Select---</option>
				<!--<option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?>  value="1">1</option>
                <option <?php if($key1->prenos=='3'){?> selected="selected" <?php } ?> value="3">3</option>-->
                <option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?> value="1">1</option>
                <option <?php if($key1->prenos=='2'){?> selected="selected" <?php } ?> value="2">2</option>
			</select>
		</div>
	</div>
	<?php }?>


	
    <?php if($key1->amc_start_date){?>		
    <div class="col-md-12 amc box">
    
		

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
               <!-- <option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?>  value="1">1</option>
                <option <?php if($key1->prenos=='3'){?> selected="selected" <?php } ?> value="3">3</option>-->
                <option <?php if($key1->prenos=='6'){?> selected="selected" <?php } ?> value="6">6</option>
                <option <?php if($key1->prenos=='12'){?> selected="selected" <?php } ?> value="12">12</option>
            </select>
        </div>		
    </div>		
    <?php } ?>	
	
	
	
	
	
	
	    <?php if($key1->warranty_date){?>
    <div class="col-md-12 warranty box">
		
        <div class="col-md-3">
            <label>Warranty Date</label>
            <input class="date" type="text" name="warranty" id="warranty" value="<?php echo $key1->warranty_date; ?>">
        
    </div>
	<div class="col-md-3">
            <label>Nos</label>   
            <select id="warrnos" name="warrnos">
              <option>---Select---</option>
             <!--<option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?>  value="1">1</option>
                <option <?php if($key1->prenos=='3'){?> selected="selected" <?php } ?> value="3">3</option>-->
                <option <?php if($key1->prenos=='6'){?> selected="selected" <?php } ?> value="6">6</option>
                <option <?php if($key1->prenos=='12'){?> selected="selected" <?php } ?> value="12">12</option>
            </select>
        </div>	
        </div>	

	
	
    <?php }?>




   <?php if($key1->cmc_start_date)
   {?>

	<div class="cmc box">
    <div class="col-md-12">
        <div class="col-md-3">
            <label>Start Date</label>
            <input type="text" name="cmc_start_date" id="cmc_start_date" class="date" value="<?php echo $key1->cmc_start_date; ?>" maxlength="20">
        </div>
        <div class="col-md-3">
            <label>End Date</label>
            <input type="text" name="cmc_end_date" id="cmc_end_date" class="date" value="<?php echo $key1->cmc_end_date; ?>" maxlength="20">
        </div>
        <div class="col-md-3">
            <label class="nos">Nos</label>
            <select id="cmc_prenos" name="cmc_prenos">
              <option>---Select---</option>
           <!--<option <?php if($key1->prenos=='1'){?> selected="selected" <?php } ?>  value="1">1</option>
                <option <?php if($key1->prenos=='3'){?> selected="selected" <?php } ?> value="3">3</option>-->
                <option <?php if($key1->prenos=='6'){?> selected="selected" <?php } ?> value="6">6</option>
                <option <?php if($key1->prenos=='12'){?> selected="selected" <?php } ?> value="12">12</option>
            </select>
        </div>
    </div>
</div>
   <?php
   }
   ?>


















 <?php if($key1->rent_date){?>
<div class="col-md-12 rent box">


<div class="col-md-3">
            <label>ReagentRent Type</label>
            <select id="rent_type" name="rent_type">
              <option value="">---Select---</option>
			    <option <?php if($key1->rent_type=='syndicate'){?> selected="selected" <?php } ?>  value="syndicate">By Syndicate</option>
			    <option <?php if($key1->rent_type=='distributor'){?> selected="selected" <?php } ?>  value="syndicate">By Sub or local Distributor</option>
			  
             
            </select>
        </div>

        <div class="col-md-3">
            <label>Rent Date</label>
            <input type="text" name="rent" id="warrantyy" class="date1" value="<?php echo $warranty_date; ?>" >
        </div>
		<div class="col-md-3">
            <label>Nos</label>   
            <select name="rent_nos">
              <option>---Select---</option>
               
                <option <?php if($key1->prenos=='6'){?> selected="selected" <?php } ?> value="6">6</option>
                <option <?php if($key1->prenos=='12'){?> selected="selected" <?php } ?> value="12">12</option>
            </select>
        </div>
 </div><?php } ?>

<div class="tableadd">	
    <div class="col-md-12"> 
        <div class="col-md-3"><label>Notes:</label></div>
        <div class="col-md-6"><textarea type="text" name="notes" id="notes" style="height: 60px;" maxlength="1000"><?php echo $key1->notes;?></textarea></div>
    </div>
</div>
<?php } ?>
<!--<table id="tabletest" class="tableadd" style="margin-bottom: 20px;"></table>

<input type="hidden" id="countid" value="<?php echo $count; ?>">-->

<!--<a id="addMoreRows" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Add Product</a>-->
<input type="hidden" value="<?php echo $salename;?>" name="salename">
<button class="btn cyan waves-effect waves-light " type="submit">Submit</button>







					
                         
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
		 if($(this).attr("value")=="rent"){
            $(".box").not(".rent").hide();
			$(".box1").not(".rent").hide();
			
            $(".rent").show();
			$(".rent1").show();
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
		
		if($(this).attr("value")=="cmc"){
            $(".box").not(".cmc").hide();
			$(".box1").not(".cmc").hide();
			
            $(".cmc").show();
			$(".cmc1").show();
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