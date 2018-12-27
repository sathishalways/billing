
<style>
.divstyle{
height:35px;
    border: 1px solid #ccc;
    padding: 3px 2px 0px 5px;
    border-radius: 4px;
}
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
.select-wrapper {
  width: 130px;
}
.tableadd .select-wrapper {
  width: 130px;
  /* margin-top: -55px; */
  position: relative;
  top: -36px;
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
.col-md-3,.col-md-12 {
  padding: 8px;
}
.col-md-2{
  padding: 5px 5px;
  line-height: 30px;
}
.card-panel,.col-md-6 {
  padding: 0px;
}
.box {
  margin-bottom: 0px;
}
label {
  position: relative;
  left: 30px;
}
a {
    color: #fff;
}
a:hover {
    color: #fff;
}
a:active {
    color: #fff;
}
a:focus {
    color: #fff;
}
</style>



   <section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">View Sales</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			     <div class="col-md-1">
				 </div>
			  
                <div class="col-md-10">
                 
                      <form action="<?php echo base_url();?>pages/amc_list" method="post">
					  <?php foreach($list as $key){?>  
                      <div id="errorBox"></div> 

<div class="tableadd" >
    <div class="col-md-12">
        <div class="col-md-2"><label>Invoice No:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->order_id; ?></div>
        <div class="col-md-2"><label>Customer Name:</label></div>
        <div class="col-md-2 divstyle"><?php  echo $key->customer_name;?></div>
        <div class="col-md-2"><label>Branch Name:</label></div>
        <div class="col-md-2 divstyle"><?php
            if($key->cslid){
            ?>
            <?php echo $key->branch_name; ?>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-2"><label>Contact Name:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->contact_name; ?></div>
        <div class="col-md-2"><label>Mobile:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->mobile; ?></div>
        <div class="col-md-2"><label>Email:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->email_id; ?></div>
    </div>

    <div class="col-md-12">
        <div class="col-md-2"><label>Address:</label></div>
        <div class="col-md-2 divstyle" style="height: 62px;
    overflow: auto;line-height: 18px;"><?php echo $key->address; ?></div>
        <div class="col-md-2"><label>City:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->city; ?></div>
        <div class="col-md-2"><label>State:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->state; ?></div>
    </div>

    <div class="col-md-12">
        <div class="col-md-2"><label>Pincode:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key->pincode; ?><!--<?php echo $key->zone_coverage; ?>--></div>
    </div>
</div>


<?php } ?>
<?php foreach($list1 as $key1){?>

<div id="table1" class="tableadd" style="margin-bottom: 20px;">
<label style="color: black;font-size: 15px;font-weight: bold;margin-right: 10px">Add Product</label>
    <div class="col-md-12">
        <div class="col-md-2"><label>Serial No:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->serial_no; ?></div><!--<?php echo $key1->id; ?></div>-->
        <div class="col-md-2"><label>Batch No:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->batch_no; ?></div>
        <div class="col-md-2"><label>Model:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->model;?></div>
    </div>
    <div class="col-md-12"> 
        <div class="col-md-2"><label>Category:</label></div>
        <div class="col-md-2 divstyle" style="height: 62px;
    overflow: auto;line-height: 18px;"><?php echo $key1->cat_name; ?><input type="hidden" name="category" id="category" value="<?php echo $key1->cat_id; ?>"></div>
        <div class="col-md-2"><label>SubCategory:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->subcat_name; ?><input type="hidden" name="subcategory" id="subcategory" value="<?php echo $key1->subcat_id; ?>"></div>
        <div class="col-md-2"><label>Brand Name:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->brand_name; ?><input type="hidden" name="brandname" id="brandname" value="<?php echo $key1->brand_id; ?>"></div>
    </div>

    <div class="col-md-12">
        <div class="col-md-2"><label >Service Zone:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->service_zone; ?><input type="hidden" name="service_loc" id="service_loc" value="<?php echo $key1->service_loc_id; ?>"></div>
        <div class="col-md-2"><label>Sale Date:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->purchase_date; ?><input type="hidden" name="warranty_date_hide" id="warranty_date_hide" value="<?php echo $key1->warranty_date; ?>" readonly><input type="hidden" name="prev_main_hide" id="prev_main_hide" value="<?php echo $key1->prev_main; ?>" readonly><input type="hidden" name="paid_hide" id="paid_hide" value="<?php echo $key1->paid; ?>" readonly></div>
    </div>



<div id="table1" class="tableadd">

    <div><label> <?php if($key1->paid){ echo "chargeable";?><?php }?></label></div>
    <div><?php if($key1->warranty_date){?></div>
    <div class="col-md-12 warranty box">
        <div class="col-md-2"><label>Warranty Date:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->warranty_date; ?></div>
    </div>
    <?php }?>
    <?php if($key1->cmc_start_date){?>
    <div class="col-md-12 prevent box">
	<div class="col-md-2"><label>CMC:</label></div>
	 </div>
	 <div class="col-md-12 prevent box">
        <div class="col-md-2"><label>Start Date:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->cmc_start_date; ?></div>
        <div class="col-md-2"><label>End Date:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->cmc_end_date; ?></div>
        <div class="col-md-2"><label>Nos:</label></div>
        <div class="col-md-2 divstyle"><?php if($key1->prenos=='1'){ echo "1";?> <?php } ?>  
            <?php if($key1->prenos=='3'){ echo "3";?> <?php } ?>
            <?php if($key1->prenos=='6'){echo "6";?> <?php } ?>
            <?php if($key1->prenos=='12'){ echo "12";?>  <?php } ?> 
        </div>
    </div>
    <?php } ?>
	
 <?php if($key1->amc_start_date){?>
    <div class="col-md-12 amc box">
        <div class="col-md-2"><label>AMC:</label></div>
		 </div>
		  <div class="col-md-12 amc box">
        <div class="col-md-2"><label>Start Date:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->amc_start_date; ?></div>
        <div class="col-md-2"><label>End Date:</label></div>
        <div class="col-md-2 divstyle"><?php echo $key1->amc_end_date; ?></div>
    
        <div class="col-md-2"><label class="nos">Nos:</label></div>
        <div class="col-md-2 divstyle"><?php if($key1->prenos=='1'){ echo "1";?> <?php } ?> 
            <?php if($key1->prenos=='3'){ echo "3";?> <?php } ?>
            <?php if($key1->prenos=='6'){ echo "6";?> <?php } ?> 
            <?php if($key1->prenos=='12'){ echo "12";?> <?php } ?> 
        </div>		
    </div>
    <?php } ?>
</div>
 <?php if($key1->rent_date){?>
<div class="col-md-12 amc box">
<div class="col-md-2"><label>Rent:</label></div>
 <div class="col-md-2"> 
            <label>ReagentRent Type</label></div>
           <div class="col-md-2 divstyle">   <?php echo $key1->rent_type; ?></div>
       
        <div class="col-md-2">
            <label>Rent Date</label></div>
			 <div class="col-md-2 divstyle"><?php echo $warranty_date; ?></div>
            
      
		<div class="col-md-12 prevent box">
          <div class="col-md-2"><label class="nos">Nos:</label></div>
        <div class="col-md-2 divstyle"><?php if($key1->prenos=='1'){ echo "1";?> <?php } ?> 
            <?php if($key1->prenos=='3'){ echo "3";?> <?php } ?>
            <?php if($key1->prenos=='6'){ echo "6";?> <?php } ?> 
            <?php if($key1->prenos=='12'){ echo "12";?> <?php } ?> 
        </div>		
        </div>
 </div><?php } ?>


<div class="tableadd">	
    <div class="col-md-12">
        <div class="col-md-2"><label>Notes:</label></div>
        <div class="col-md-6 divstyle" style="height:70px;"><?php echo $key1->notes;?></div>
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
<!--<button class="btn cyan waves-effect waves-light " type="submit">Close<i class="fa fa-arrow-right"></i></button>-->
<button class="btn cyan waves-effect waves-light " ><a href="javascript: history.go(-1)">Close</a> </button>

</div>






					
                         
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