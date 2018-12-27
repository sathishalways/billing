<style>
  .tableadd tr td input {
    width: 210px !important;
 }
 
 .tableadd tr td label{
	 width:150px !important;
	 
 }
  </style>
  <style>

.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
input[type=text]{
    background-color: transparent;
    border: 1px solid #eee;
    border-radius: 7;
    width: 100%;
	height:30px;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
select{border: 1px solid #eee;}
.btn{text-transform:none !important;}
</style>
<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Company Details</h2>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>company/edit_company" method="post" name="frmComp" autocomplete="off">
                               

<table class="tableadd">
<?php foreach($list as $key){?>


    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Company Name</label>
            <input type="text" name="name" class="compname" value="<?php echo $key->name; ?>" maxlength="50"><input type="hidden" name="compid" class="" value="1"  >
        </div>
        <div class="col-md-3">
            <label>Mobile</label>
            <input type="text" name="mobile" class="mobileno" id="mobile" value="<?php echo $key->mobile; ?>"  maxlength="15">
			<div class="mobileerror"></div>
        </div>
        <div class="col-md-3">
            <label>Phone</label>
            <input type="text" name="phone" class="phoneno" id="phone" value="<?php echo $key->phone; ?>"  maxlength="15">
			<div class="phoneerror"></div>
        </div>
        <div class="col-md-3">
           <label>Company Email ID</label>
            <input type="text" name="comp_email" class="mailid" value="<?php echo $key->comp_email; ?>" >
			<div class="emailerror"></div>
        </div>
    </div>
	
	    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Manager Email ID</label>
            <input type="text" name="mgr_email" class="memailid" value="<?php echo $key->mgr_email; ?>" >
			<div class="memailerror"></div>
        </div>
        <div class="col-md-3">
           <label>Address 1</label>
           <input type="text" name="addr1" class="" value="<?php echo $key->addr1; ?>" >
        </div>
        <div class="col-md-3">
           <label>Address 2</label>
            <input type="text" name="addr2" class="" value="<?php echo $key->addr2; ?>" >
        </div>
        <div class="col-md-3">
          <label>City</label>
           <input type="text" name="city" id="search-box" class="city" value="<?php echo $key->city; ?>"  maxlength="100"><div id="suggesstion-box" ></div>
        </div>
    </div>
	
	
	<div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
           <label>State</label>
           <select name="state" id="state">
  <option value="">---Select---</option>
	<?php foreach($state_list as $statekey){ 
			if($statekey->id==$key->state){
	?>
			<option selected="selected" value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
			<?php } } ?>	
</select>
        </div>
        <div class="col-md-3">
            <label>Pincode</label>
            <input type="text" name="pincode" class="pin" id="pincode" value="<?php echo $key->pincode; ?>"  maxlength="6">
			<div class="pinerror"></div>
        </div>
        <div class="col-md-3">
            <label>Service Tax#</label>
            <input type="text" name="service_tax" class="service" id="service_tax" value="<?php echo $key->service_tax; ?>"  maxlength="10">
			<div class="serviceerror"></div>
        </div>
        <div class="col-md-3">
           <label>PAN</label>
           <input type="text" name="pan" class="pancard" id="pan" value="<?php echo $key->pan; ?>"  maxlength="10">
		   <div class="panerror"></div>
        </div>
    </div>
	
	
    <div class="col-md-12" style="padding: 0px">
       
        <div class="col-md-3">
          <label>TNVAT Registration#</label>
            <input type="text" name="vat_no" class="vatreg" id="vat_no" value="<?php echo $key->vat_no; ?>"  maxlength="10">
        </div>
    </div>




<!---<tr>
<!--<td><label>Company Id</label></td><td><input type="text" name="comp_id" class="" value="<?php echo $key->comp_id; ?>" ></td>    <td><label>Company Name</label></td><td><input type="text" name="name" class="" value="<?php echo $key->name; ?>" ><input type="hidden" name="compid" class="" value="1"  ></td>
<td><label>Mobile</label></td><td><input type="text" name="mobile" class="" id="mobile" value="<?php echo $key->mobile; ?>" ></td>
</tr>
<tr>
<td><label>Phone</label></td><td><input type="text" name="phone" class="" id="phone" value="<?php echo $key->phone; ?>" ></td><td><label>Company Email ID</label></td><td><input type="text" name="comp_email" class="" value="<?php echo $key->comp_email; ?>" ></td>
</tr>
<tr>
<td><label>Manager Email ID</label></td><td><input type="text" name="mgr_email" class="" value="<?php echo $key->mgr_email; ?>" ></td><td><label>Address 1</label></td><td><input type="text" name="addr1" class="" value="<?php echo $key->addr1; ?>" ></td>
</tr>
<tr>
<td><label>Address 2</label></td><td><input type="text" name="addr2" class="" value="<?php echo $key->addr2; ?>" ></td>
<td><label>City</label></td><td><input type="text" name="city" id="search-box" class="" value="<?php echo $key->city; ?>" ><div id="suggesstion-box" ></div></td>
</tr>
<tr>
<td><label>State</label></td><td>
<select name="state" id="state">
  <option value="">---Select---</option>
	<?php foreach($state_list as $statekey){ 
			if($statekey->id==$key->state){
	?>
			<option selected="selected" value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
			<?php } } ?>	
</select>

</td>
<td><label>Pincode</label></td><td><input type="text" name="pincode" class="" id="pincode" value="<?php echo $key->pincode; ?>" ></td>
</tr>
<tr>
<td><label>Service Tax#</label></td><td><input type="text" name="service_tax" class="" id="service_tax" value="<?php echo $key->service_tax; ?>" ></td><td><label>PAN</label></td><td><input type="text" name="pan" class="" id="pan" value="<?php echo $key->pan; ?>" ></td>
</tr>
<tr>
<td><label>TNVAT Registration#</label></td><td><input type="text" name="vat_no" class="" id="vat_no" value="<?php echo $key->vat_no; ?>" ></td>
</tr>--
<?php } ?>
</table>-->
<table class="tableadd" style="margin-top: 25px;">



<tr >
<td >
 <button class="btn cyan waves-effect waves-light companysubmit" type="submit" name="action" style="margin-left:20px;">Submit  </button>
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
  <!--<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>-->
  
  <script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>Employee/get_city",
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
  
 
  
    
     <!-- <script type='text/javascript' src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js"></script>
	  
	  <script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
    $('#phone').mask('(999) 99999999');
    $('#mobile').mask('9999999999');
    $('#pincode').mask('999999');
     $('#re-pincode').mask('999999');
   $('#re-pincode11').mask('999999');
});
});//]]> 

</script>-->

   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   -->   

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
       
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	   <script>
			$(function(){
				var pan=/^([A-Z]{5})([0-9]{4})([A-Z]{1})$/;
				var regeditmail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.(com|org|net|co.in|mil|edu|gov|gov.in))$/;
				//var pancard=$(".pan").val();
				$(".companysubmit").click(function(event){
					if($(".memailid").val()==""){
						$(".memailerror").text("Please enter Manager Mail ID").show().css({'color':'#ff0000','font-size':'11px'});
						event.preventDefault();
					}
					if($(".pancard").val()==""){
						$(".panerror").text("Please enter pancard number").show().css({'color':'#ff0000','font-size':'11px'});
						event.preventDefault();
					}
				});
				
				$(".mobileno,.phoneno,.pin").bind("keyup blur", function(){
					$(this).val($(this).val().replace(/[^0-9]/g,""));
				});
				$(".compname,.service,.vatreg").bind("keyup blur", function(){
					$(this).val($(this).val().replace(/[^a-zA-Z0-9]/g,""));
				});
				$(".city").bind("keyup blur", function(){
					$(this).val($(this).val().replace(/[^a-zA-Z]/g,""));
				});
				$(".pancard").change(function(){
					if(!pan.test($(this).val())){
						$(".panerror").text("Invalid Pan Number").show().css({'color':'#ff0000','font-size':'11px'});
						return false;
						$(this).focus();
					}
				});
				$(".mailid").on("change", function(event){
					if(!regeditmail.test($(this).val())){
						$(".emailerror").text("Invalid Email ID").show().css({'color':'#ff0000','font-size':'11px'});
						event.preventDefault();
						$(this).focus();
					}
				});
				$(".memailid").change(function(){
					if(!regeditmail.test($(this).val())){
						$(".memailerror").text("Invalid Email ID").show().css({'color':'#ff0000','font-size':'11px'});
						return false;
						$(this).focus();
						
					}
				});
				
				$(".pancard").on("keyup", function(event){
					$(".panerror").fadeOut('slow');
				});
				$(".mailid").on("keyup", function(event){
					if($(this).val()==""){
						$(".emailerror").show();
					}
					else{
						$(".emailerror").fadeOut('slow');
					}
				});
				$(".memailid").on("keyup", function(event){
					
					$(".memailerror").fadeOut('slow');
				});
			});
	   </script>
		<!--<script type="text/javascript">
			var jQuery_2_1_1 = $.noConflict(true);
		</script>-->
</body>

</html>