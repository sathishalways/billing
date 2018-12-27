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
    .col-md-2,.col-md-12,.col-md-10 {
    	padding: 0px;
    }
	.card-panel {
		padding: 20px 0px;
	}
	label {
		position: relative;
		left: 25px;
	}

		
</style>

  <style>

.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}

</style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">View Customer Details</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                 <form action="<?php echo base_url(); ?>pages/cust_list" method="post" >
                      
<div id="errorBox"></div>
<?php foreach($list as $key){?> 

<div class="tableadd">
	<div class="col-md-12">
		<div class="col-md-2"><label>Type Of Customer<span style="color:red;">*</span></label></div>
		<div class="col-md-2"> 
		 	<?php foreach($customer_type as $custtypekey){ 
				if( $custtypekey->id==$key->customer_type){
					echo $custtypekey->type;
			?>			
			<?php }	  }?>
		</div>
		<div class="col-md-2">
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
		</div>
		<div class="col-md-2">
			<?php if($key->mobile=="" && isset($key->mobile)){?>
			<input type="text" name="mobile" id="mobile" value="" class="del1 box1">
			<?php } ?>
			<?php if($key->land_ln=="" && isset($key->land_ln)){?>
			<input type="text" name="land_ln" id="land_ln" value="" class="ready1 box1">
			<?php } ?>
			<?php if($key->mobile!="" && isset($key->mobile)){?>
			<?php echo $key->mobile;?>
			<?php } ?>
			<?php if($key->land_ln!="" && isset($key->land_ln)){?>
			<?php echo $key->land_ln;?>
			<?php } ?>
		</div>
		<!--<div class="col-md-2"><label>Mobile No<span style="color:red;">*</span></label></div><div class="col-md-2"><input type="text" name="mobile" id="mobile" class="mobile" value="<?php echo $key->mobile; ?>"></div>-->
		<div class="col-md-2"><label>Customer ID<span style="color:red;">*</span></label></div>
		<div class="col-md-2"><?php echo $key->customer_id; ?></div>
		
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label>Customer Name<span style="color:red;">*</span></label></div>
		<div class="col-md-2"><?php echo $key->company_name; ?></div>
		<div class="col-md-2"><label>Pincode<span style="color:red;">*</span></label></div>
		<div class="col-md-2"><?php echo $key->pincode; ?></div>
		<div class="col-md-2"><label>Service Zone<span style="color:red;">*</span></label></div>
		<div class="col-md-2"> 
			<?php foreach($service_zone as $zonekey){ 
				  if( $zonekey->id==$key->service_zone){			  
					  echo $zonekey->service_loc;
			?>			
				   <?php }  } ?>			
		</div>
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label>Area</label></div>
		<div class="col-md-2"><?php foreach($pincode_list as $pinkey){if($pinkey->id==$key->area_name){echo $pinkey->area_name;}} ?></div>
		<div class="col-md-2"><label>Contact Name<span style="color:red;">*</span></label></div>
		<div class="col-md-2"><?php echo $key->customer_name; ?></div>
		<div class="col-md-2"><label>Email Id</label></div>
		<div class="col-md-2"><?php echo $key->email_id; ?></div>
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label>Address<span style="color:red;">*</span></label></div>
		<div class="col-md-2"><?php echo $key->address; ?></div>
		<div class="col-md-2"><label>Address1</label></div>
		<div class="col-md-2"><?php echo $key->address1; ?></div>
		<div class="col-md-2"><label>Delivery Address</label></div>
		<div class="col-md-2"><?php echo $key->del_address; ?></div>
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label>City<span style="color:red;">*</span></label></div>
		<div class="col-md-2"><?php echo $key->city; ?><div id="suggesstion-box" ></div></div>
		<div class="col-md-2"><label>State<span style="color:red;">*</span></label></div>
		<div class="col-md-2">	
			<?php foreach($state_list as $statekey){ 
			if( $statekey->id==$key->state){			
				echo $statekey->state;			
			}}
			?>
		</div>
		<div class="col-md-2"><label>Call Reference<span style="color:red;">*</span></label></div>
		<div class="col-md-2">
			 <?php if($key->cal_ref=='sr'){ echo "S.R Scales";?><?php }?>
				 <?php if($key->cal_ref=='am'){ echo "Arihant Marketing";?><?php }?>		
		</div>
	</div>
</div>

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



<div id="myTable" class="tableadd">
	<?php $i=1; foreach($list1 as $key1){ if($key1->branch_name!=""){?>
	<div class="col-md-12">
		<div class="col-md-3"><label style="font-weight: bold;font-size: 14px;color: #000;line-height: 4;">Add Service Location</label></div>
	</div>
	<?php if($i==1){?>
	<div class="col-md-12">
		<div colspan="2"><em style="font-style: normal;color: rgb(5, 94, 135);">Same as above address</em></div>
	</div>
	<?php } ?>
	<div class="col-md-12">
		<div class="col-md-2"><label>Branch Name</label></div>
		<div class="col-md-2"><?php echo $key1->branch_name; ?></div>
		<div class="col-md-2"><label>Landline No</label></div>
		<div class="col-md-2"><?php echo $key1->landline; ?></div>
		<div class="col-md-2"><label>Address</label></div>
		<div class="col-md-2"><?php echo $key1->address; ?></div>
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label>Address 1</label></div>
		<div class="col-md-2"><?php echo $key1->address1; ?></div>
		<div class="col-md-2"><label>City </label></div>
		<div class="col-md-2"><?php echo $key1->city; ?></div>
		<div class="col-md-2"><label>State</label></div>
		<div class="col-md-2"><?php echo $key1->state; ?></div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2"><label>Pincode</label></div>
		<div class="col-md-2"><?php echo $key1->pincode; ?></div>
		<div class="col-md-2"><label>Service Zone</label></div>
		<div class="col-md-2">
			<?php foreach($service_zone as $zonekey){ 
			if($zonekey->id == $key1->service_zone_loc){

			echo $zonekey->service_loc; ?>
			<?php } }?>
		</div>
		<div class="col-md-2"><label>Area</label></div>
		<div class="col-md-2"><?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $pinkey->area_name;}} ?><?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $key1->area;}} ?> </div>
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label style="font-weight: bold;">Add Contact</label></div>
		<div class="col-md-2"></div>
		<div class="col-md-2"><label>Contact Name</label></div>
		<div class="col-md-2"><?php echo $key1->contact_name; ?></div>
		<div class="col-md-2"><label>Designation</label></div>
		<div class="col-md-2"><?php echo $key1->designation; ?></div>
	</div>

	<div class="col-md-12">
		<div class="col-md-2"><label>Mobile</label></div>
		<div class="col-md-2"><?php echo $key1->mobile; ?></div>
		<div class="col-md-2"><label>Email Id</label></div>
		<div class="col-md-2"><?php echo $key1->email_id; ?></div>
	</div>
	<?php } $i++; } ?>
</div>

<input type="hidden" id="countid" name="countid" value="<?php echo $i; ?>">
<br/><br/>


<button class="btn cyan waves-effect waves-light " type="submit" >Close
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