<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
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
 var emp_id = document.frmEmp.emp_id.value,
   emp_name = document.frmEmp.emp_name.value,
   emp_mobile = document.frmEmp.emp_mobile.value,
   emp_email = document.frmEmp.emp_email.value,
   emp_edu = document.frmEmp.emp_edu.value;
   
 if( emp_id == "" )
   {
    document.frmEmp.emp_id.focus() ;
	document.getElementById("errorBox").innerHTML = "enter the employee id";
     return false;
   }
 if( emp_name == "" )
   {
     document.frmEmp.emp_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the employee name";
     return false;
   }
   if( emp_mobile == "" )
   {
     document.frmEmp.emp_mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   if( emp_email == "" )
   {
     document.frmEmp.emp_email.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email";
     return false;
   }
    if( emp_edu == "" )
   {
     document.frmEmp.emp_edu.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the educational qualification";
     return false;
   }
  
   
}

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
</style>
<style>

.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}

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
            <input type="text" name="emp_name" class="">
        </div>
        <div class="col-md-3">
            <label>Designation</label>
            <input type="text" name="emp_designation" class="">
        </div>
        <div class="col-md-3">
            <label>Mobile&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_mobile" id="mobile" class="">
        </div>
    </div>

    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Email Id&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_email" class="">
        </div>
        <div class="col-md-3">
            <label>Educational Qualification&nbsp;<span style="color:red;">*</span></label>
            <input type="text" name="emp_edu" class="">
        </div>
        <div class="col-md-3">
            <label>Experience</label>
            <input type="text" name="emp_exp" class="">
        </div>
        <div class="col-md-3">
            <label>Date of Joining</label>
            <input type="text" name="doj" class="date">
        </div>
    </div>
    <!--<div class="col-md-12">
    <div class="col-md-3"><label>Stampings</label></div><div class="col-md-3"><input type="checkbox" name="emp_stamping" class="" value="1"></div>
    </div>-->

    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Address</label>
            <input type="text" name="emp_addr" class="">
        </div>
        <div class="col-md-3">
            <label>Address 1</label>
            <input type="text" name="emp_addr1" class="">
        </div>
        <div class="col-md-3">
            <label>City</label>
            <input type="text" name="emp_city" id="search-box" class="city"><div id="suggesstion-box" ></div>
        </div>
        <div class="col-md-3">
            <label>State</label>
            <select name="emp_state" id="emp_state">
              <option value="">---Select---</option>
              <?php foreach($state_list as $statekey){ ?>
              <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
              <?php } ?>  
            </select>
        </div>
    </div>

    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-3">
            <label>Pincode</label>
            <input type="text" name="emp_pincode" id="pincode" class="">
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
                               <i class="fa fa-arrow-right"></i>

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


  <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>   --> 

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