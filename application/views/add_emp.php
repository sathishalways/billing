<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>//<![CDATA[ 
$(function(){
$('[name="cand_no"]').on('change', function() {
    // Not checking for Invalid input
    if (this.value != '') {
        var val = parseInt(this.value, 10);
        var rows = $('#studentTable tr'),
            rowCnt = rows.length - 1; // Allow for header row
        
        if (rowCnt > val) {
            for (var i = rowCnt; i > val; i--) {
                rows[i].remove();
            }
        }
        if (rowCnt < val) {
            for (var i = 0; i < val - rowCnt; i++) {
                // Clone the Template
                var $cloned = $('.template tbody').clone();				
                // For each Candidate append the template row
                $('#studentTable tbody').append($cloned.html());
            }
        }
    }
});
});//]]>  

</script>

<script>
function frmValidate(){  
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 //var regemail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
 var emp_id = document.frmEmp.emp_id.value,
   emp_name = document.frmEmp.emp_name.value,
   emp_mobile = document.frmEmp.emp_mobile.value,
   emp_email = document.frmEmp.emp_email.value,
   emp_edu = document.frmEmp.emp_edu.value,
   zone = document.frmEmp.zone.value;
   
   
 if( emp_id == "" )
   {
    document.frmEmp.emp_id.focus() ;
	document.getElementById("errorBoxid").innerHTML = "Enter the employee id";
	$( "#errorBoxid" ).css({'color':'#ff0000','font-size':'10px','position':'relative','bottom':'10px'});
     return false;
   }
 if( emp_name == "" )
   {
     document.frmEmp.emp_name.focus() ;
	 document.getElementById("errorBoxName").innerHTML = "Enter the Employee Name";
     return false;
   }
   if( emp_mobile == "" )
   {
     document.frmEmp.emp_mobile.focus() ;
	 document.getElementById("errorBoxMobile").innerHTML = "Enter the Mobile Number";
     return false;
   }
   if( emp_email == "" )
   {
     document.frmEmp.emp_email.focus() ;
	 document.getElementById("errorBoxEmail").innerHTML = "Enter the Email ID";
     return false;
   }
    if( emp_edu == "" )
   {
     document.frmEmp.emp_edu.focus() ;
	 document.getElementById("errorBoxQualification").innerHTML = "Enter the Educational Qualification";
     return false;
   }
   
   if( zone == "" )
   {
     document.frmEmp.zone.focus() ;
	 document.getElementById("errorBoxServiceZone").innerHTML = "Enter the Zone";
     return false;
   }
     
}

</script>
<script>
   $(function(){
   $( "form" ).submit(function( event ) {
   //alert("fgh");
  if ( $( "#company" ).val() === "" ) {
	$( "#company_error" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }
if ( $( ".city" ).val() === "" ) {
	$( "#errorBox_city" ).text( "Enter the City" ).show();
    event.preventDefault();
  }
});

});
   </script>
<!--<script>///////////////////////////////////character & number validation///////////////////////////////////////////
    $(document).ready(function(){
		$('#emp_name').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
		$('#emp_designation').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
		$('.city').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
		
		$('#emp_qualification').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z ./-_,]+$/,'') );
        });
		$('#emp_address').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z ./-_,]+$/,'') );
        });
		$('#emp_address1').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z ./-_,]+$/,'') );
        });
		$('#mobile').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#mobile').change(function(){
            if($(this).val().length<10){
				$( "#errorBoxMobile" ).text( "Phone Number must be atleast 10 digit" ).show();
				return false;
				$(this).focus();
			}
			
        });
		$('#pincode').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
	 });
</script>-->
<!--<script>
    $(document).ready(function(){
		var regemail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		$('#emp_email').change(function(){
			var email1=$(this).val();
            if(!regemail.test(email1)){
				$( "#errorBoxEmail" ).text( "Invalid Email Address" ).show();
				$(this).val("");
				$(this).focus();
				return false;
				
			}
        });
		});
</script>-->
<script>
     $(document).ready(function(){
		$("#emp_name").keyup(function(){
			if($(this).val()==""){
			    $("#errorBoxName").show();
			}
			else{
				$("#errorBoxName").hide();
			}
		});
		$("#mobile").keyup(function(){
			if($(this).val()==""){
			    $("#errorBoxMobile").show();
			}
			else{
				$("#errorBoxMobile").hide();
				$("#errorBoxMobile1").html('');
			}
		});
		$("#emp_email").keyup(function(){
			if($(this).val()==""){
			    $("#errorBoxEmail").show();
			}
			else{
				$("#errorBoxEmail").hide();
			}
		});
		$("#emp_qualification").keyup(function(){
			if($(this).val()==""){
			    $("#errorBoxQualification").show();
			}
			else{
				$("#errorBoxQualification").hide();
			}
		});
	$("#zone").change(function(){
			if($(this).val()==""){
			    $("#errorBoxServiceZone").show();
			}
			else{
				$("#errorBoxServiceZone").hide();
			}
		});
		$(".city").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox_city").show();
			}
			else{
				$("#errorBox_city").hide();
			}
		});
		});
		</script>
		



<style>

body{background-color:#fff;}
#studentTable .skill td
{
	background: #055E87 none repeat scroll 0% 0%;
border: 1px solid #B3B3B3;
padding: 8px;
color: #FFF;
}
#studentTable tr td
{
	border: 1px solid #B3B3B3;
text-align: center;
padding: 10px;
}
#studentTable tr td select
{
	width: 106px;
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
margin: 0px 3px;
box-sizing: border-box;
-moz-appearance: none;
border-radius: 5px;
}
#studentTable tr td select:focus
{
	border:1px solid #055E87;
}
input.number
{
	border-radius:5px;
	
}
#errorBox{
 color:#F00;
     font-size: 12px;
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
    select {
      border: 1px solid #ccc !important;
    }
	input[readonly]{background-color: #eee;}
</style>
<style>
.btn{text-transform:none !important;}
.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list {
    float: left;
    list-style: none;
    margin: 0;
    padding: 0;
    width: 246px;
    height: 125px;
    overflow-y: auto;
    overflow-x: hidden;
    position: relative;
    bottom: 15px;
    border: 1px solid #2196F3;
    border-top: gray;
}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#suggesstion-box{
	position: absolute;
    z-index: 3;
}
</style>


<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>New Employee</h2>
<hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>Employee/add_employee" method="post" name="frmEmp" onsubmit="return frmValidate()" autocomplete="off">
                        <div id="errorBox"></div>       

<div class="tableadd">
    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Employee ID&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_id" class="" value="<?php echo "ENG".$cnt; ?>" readonly>

        </div>
        <div class="col-md-3">
            <label>Employee Name&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_name"  id="emp_name" class="alpha" maxlength="50">
			 <div id="errorBoxName" style="color:red;    font-size: 10px; bottom:1px; margin-top: -13px;"></div> 
        </div>
        <div class="col-md-3">
            <label>Designation</label>
            <input type="text" name="emp_designation" id="emp_designation" class="alpha" maxlength="80">
			 
        </div>
        <div class="col-md-3">
            <label>Mobile&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_mobile" id="mobile" class="numeric" maxlength="15">
			 <div id="errorBoxMobile" style="color:red;    font-size: 10px; margin-top:-14px;"></div> 
			 <div id="errorBoxMobile1" style="color:red;    font-size: 10px; margin-top:10px;"></div> 
        </div>
    </div>

    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Email ID&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_email" id="emp_email" class="email">
			 <div id="errorBoxEmail" style="color:red;font-size: 10px;    margin-top:-4px; "></div> 
        </div>
        <div class="col-md-3">
            <label>Educational Qualification&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_edu" id="emp_qualification" class="alphanumericdotspace" maxlength="50">
			 <div id="errorBoxQualification" style="color:red;font-size: 10px; margin-top: -13px;"></div> 
        </div>
        <div class="col-md-3">
            <label>Experience</label>
            <input type="text" name="emp_exp" class="alphanumericdotspace" maxlength="8">
			 
        </div>
        <div class="col-md-3">
            <label>Date of Joining</label>
            <input type="text" name="doj" class="date" maxlength="10">
			  
        </div>
    </div>
    <!--<div class="col-md-12">
    <div class="col-md-3"><label>Stampings</label></div><div class="col-md-3"><input type="checkbox" name="emp_stamping" class="" value="1"></div>
    </div>-->

    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Address</label>
            <input type="text" name="emp_addr" id="emp_address" class="alphanumericaddress" maxlength="150">
			 <div id="errorBoxAddress"></div> 
        </div>
        <div class="col-md-3">
            <label>Address 1</label>
            <input type="text" name="emp_addr1" id="emp_address1" class="alphanumericaddress" maxlength="150">
			 <div id="errorBoxAddress1"></div> 
        </div>
        <!--<div class="col-md-3">
            
			<label>City</label>
            <input type="text" name="emp_city" id="search-box" class="city alpha" maxlength="80">
			<div id="suggesstion-box" ></div>
			 <div id="errorBoxCity"></div> 
        </div>-->
		<div class="col-md-3 col-sm-6 col-xs-12 ">
			<label for="tags">City<span style="color:red;">*</span></label>
			<input type="text" name="emp_city" id="tags" class="city" maxlength="100">
			<!--<div id="suggesstion-box" ></div>-->
			<div id="errorBox_city" style="color:red;font-size:10px;margin-top:-16px;"></div>
		</div>
		
		
        <div class="col-md-3">
            <label>State</label>
            <select name="emp_state" id="emp_state">
              <option value="">---Select---</option>
              <?php foreach($state_list as $statekey){ ?>
              <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
              <?php } ?>  
            </select>
			<div id="errorBoxState"></div> 
        </div>
    </div>

    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Pincode</label>
            <input type="text" name="emp_pincode" id="pincode" class="numeric" maxlength="6">
			<div id="errorBoxPincode"></div> 
        </div>
		<div class="col-md-3">
            <label>Service Zone&nbsp;<span style="color:red;">*</span></label>
            <select name="zone[]" id="zone" class="zone_validate" multiple="multiple" style="width:230px;">
				<option value="">---Select---</option>
				<?php foreach($service_zone_list as $zoneKey){?>
				<option value="<?php echo $zoneKey->id; ?>"><?php echo $zoneKey->service_loc; ?></option>
				<?php }?>
			</select>
			 <div id="errorBoxServiceZone" style="color:red;font-size: 10px; "></div> 
        </div>
    </div>
</div>





<!--<table class="tableadd1">
<tr>
<td><label style="font-weight: bold;">Service Skills</label></td><td></td>
</tr>

<tr>
<th><label>Category</label></th><th><label>Sub-category</label></th> <th><label>Model</label></th><th><label>Installation</label></th><th><label>AMC</label></th><th><label>General</label></th><th><label>Major</label></th><th><label>Extra Fitting</label></th>
</tr>

<tr>
<td><input type="text" class="" name=""></td> <td><input type="text" class="" name=""></td><td><input type="text" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td>
</tr>

<tr>

<td style="padding-top: 25px;">
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>
                              </button>
</td>
</tr>

</table>-->

<!--<label style="font-weight: bold;
font-size: 15px;
color: black;padding-top:10px;
padding-bottom:10px;">Service Skills:</label>

                  <p>
   <label style="font-weight: bold;
font-size: 13px;
color: black; width: 230px;">Enter No Of Service</label>
   <label><input name="cand_no" type="text" placeholder="Enter Number"  style="width: 405px;" class="number"/></label>
<div class="clear"></div>
</p>
<div class="cand_fields">
   <table id="studentTable" width="630" border="0">
      <tr class="skill">
         <td>Category</td>
         <td>Sub-category</td>
         <td>Model</td>         
        <td>Installation</td>   
		<td>AMC</td>   
		<td>General</td>   
		<td>Major</td>   
		<td>Extra Fitting</td>   		
      </tr>
      <tr>
        <td style="width:200px;">
<select >
            <option value="">---Select---</option>
           <option value="Motorola">Air Conditioner</option>
		  <option value="Sony Ericsson">Television</option>
		   <option value="Nokia">Digital Camera</option>
		    <option value="Apple">Mobile Phone</option>
           <option value="Samsung">Cash Counting Machine</option>
		    <option value="Samsung">Washing Machine</option>
		 		
          </select>
</td>       
        <td style="width:200px;">
<select >
            <option value="">---Select---</option>
           <option value="Motorola">Subcategory 1</option>
		  <option value="Sony Ericsson">Subcategory 2</option>
		   <option value="Nokia">Subcategory 3</option>
		    <option value="Apple">Subcategory 4</option>
           <option value="Samsung">Subcategory 5</option>
		 		
          </select>
</td>
		  <td >
<select >
            <option value="">---Select---</option>
           <option value="Motorola">Model 1</option>
		  <option value="Sony Ericsson">Model 2</option>
		   <option value="Nokia">Model 3</option>
		    <option value="Apple">Model 4</option>
           <option value="Samsung">Model 5</option>
		 		
          </select>
</td>
         <td><input name="" type="checkbox" /></td>
		  <td><input name="" type="checkbox" /></td>
		   <td><input name="" type="checkbox" /></td>
		    <td><input name="" type="checkbox" /></td>
			<td><input name="" type="checkbox" /></td>
      </tr>
   </table>
</div>

<div class="template" style="display: none">
    <table >
    <tr>
        <td >
<select >
            <option value="">---Select---</option>
           <option value="Motorola">Air Conditioner</option>
		  <option value="Sony Ericsson">Television</option>
		   <option value="Nokia">Digital Camera</option>
		    <option value="Apple">Mobile Phone</option>
           <option value="Samsung">Cash Counting Machine</option>
		    <option value="Samsung">Washing Machine</option>
		 		
          </select>
</td>       
        <td >
<select >
            <option value="">---Select---</option>
           <option value="Motorola">Subcategory 1</option>
		  <option value="Sony Ericsson">Subcategory 2</option>
		   <option value="Nokia">Subcategory 3</option>
		    <option value="Apple">Subcategory 4</option>
           <option value="Samsung">Subcategory 5</option>
		 		
          </select>
</td>
		  <td >
<select >
            <option value="">---Select---</option>
           <option value="Motorola">Model 1</option>
		  <option value="Sony Ericsson">Model 2</option>
		   <option value="Nokia">Model 3</option>
		    <option value="Apple">Model 4</option>
           <option value="Samsung">Model 5</option>
		 		
          </select>
</td>
         <td><input name="" type="checkbox" /></td>
		  <td><input name="" type="checkbox" /></td>
		   <td><input name="" type="checkbox" /></td>
		    <td><input name="" type="checkbox" /></td>
			<td><input name="" type="checkbox" /></td>
      </tr>
  </table>
  href="<?php echo base_url(); ?>pages/service_skill"
</div>-->


<!--<a  class="btn cyan waves-effect waves-light " type="submit" name="action" style="margin-top: 25px;">Add Service Skill
                               <i class="fa fa-arrow-right"></i>
                              </a>-->
							  <button class="btn cyan waves-effect waves-light " type="submit" >Add Service Skill
                               </button>
       
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
  
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>

<script>
	$(function(){
	 	var regeditmail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.(com|org|net|co.in|in|mil|edu|gov|gov.in))$/;
		
		$(".alpha").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z. ]/g,""));
		});
		$(".numeric").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9]/g,""));
		});
		$(".alphanumericdotspace").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9. ]/g,""));
		});
		$(".alphanumericaddress").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
		
		
		$(".email").on("change", function(){
			if(!regeditmail.test($(".email").val())){
				$("#errorBoxEmail").text("Invalid Email ID!").show().css({
					"font-size":"10px",
					"color":"#ff0000",
					"position":"relative",
					"bottom":"10px"
				});
					$(this).val("");
			}
		});
		
		$('#mobile').change(function(){
            if($(this).val().length<10){
				$( "#errorBoxMobile" ).text( "Phone Number must be atleast 10 digit" ).show().css({
					"font-size":"10px",
					"color":"#ff0000",
					"position":"relative",
					"margin-top":"-10px"
				});
				$(this).val("");
				return false;
				$(this).focus();
				
			}
			
        });
		$('#pincode').change(function(){
            if($(this).val().length<6){
				$( "#errorBoxPincode" ).text( "Pincode Number must be atleast 6 digit" ).show().css({
					"font-size":"10px",
					"color":"#ff0000",
					"position":"relative",
					"bottom":"10px"
				});
				$(this).val("");
				return false;
				$(this).focus();
				
			}
			
        });
		$('#pincode').keyup(function(){
		$( "#errorBoxPincode" ).hide();
		
		
		});
	});
</script>
  

  <script>
  $( function() {
	  var available_cities = [];
		//alert($(this).val());
	  $.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>Employee/get_city",
		data:'keyword='+$(this).val(),
		
		success: function(data)
			{ 
			$.each(data, function(index, data){
				available_cities.push(data.city);
				
            });
		} 
		
		});
	  
    
    $( "#tags" ).autocomplete({
      source: available_cities
    });
  } );
  </script>
<script>
$(document).ready(function(){
	
 $(document).on("keyup","#mobile", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){
var id=$("#mobile").val();

var datastring = 'id='+id;

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Employee/mobile_validation",
data: datastring,
cache: false,
success: function(data) 
{ 	
	 if(data == 0){
            $('#errorBoxMobile').html('');
			
        }
        else{
			$('#errorBoxMobile1').html('Mobile Number Already Exist!').show(); 
			$('#mobile').val('');
			
			return false;
         }
	
} 
 
});
}
});
</script>
  
  
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
   $('#re-pincode11').mask('999999');
});
});//]]> 
</script>

<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
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

}//]]>  

</script>


  <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>--> 

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
       
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var jQuery_2_1_1 = $.noConflict(true);
		</script>
		<link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
  
    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>
		<script>
		 $("#zone").select2();
		</script>
</body>

</html>