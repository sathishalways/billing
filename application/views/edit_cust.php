
 <script>
  $( function() {
	  var available_cities = [];
		//alert($(this).val());
	  $.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_city",
		data:'keyword='+$(this).val(),
		
		success: function(data)
			{ 
			$.each(data, function(index, data){
				available_cities.push(data.city);
				
            });
		} 
		
		});
	  
    /* var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ]; */
    $( "#tags" ).autocomplete({
      source: available_cities
    });
  } );
  </script>
  <script>
$( function() {
	  var available_cities = [];
		
	  $.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_city",
		data:'keyword='+$(this).val(),
		
		success: function(data)
			{ 
			$.each(data, function(index, data){ 
				available_cities.push(data.city);
			
            });
		} 
		
		});
	  
    /* var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ]; */
    $( "#re_city" ).autocomplete({
      source: available_cities
    });
  } );
  </script>
 <script>
$(document).ready(function(){
//	alert("djfh");
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
	var zone = $('#service_zone').val();
	var zones = zone.split('-');
	var zoneid = zones['0'];
	var zone_coverage = zones['2'];
	//alert(zone_coverage);
	
    var datastring='countid='+vl1+'&zoneid='+zoneid+'&zone_coverage='+zone_coverage;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>customer/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#myTable').append(result);
} 
});

});
  
});
</script>
<style>
.btn-danger {
    color: #613281;
    background-color: #d9534f;
    border-color: #d43f3a;
}
.btn {
    display: inline-block;
    padding: 2px 12px;
	text-transform:none !important;
}
.cyan {
    background-color: black !important;
	width: 90px;
	color:#fed700;
	margin-left:30px;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    /* border-top:1px solid #ccc !important; */
    margin-bottom: 9px;
    width: 100%;
    /* box-shadow: 0 1px 1px rgba(0,0,0,0.1); */
}
select {
     border: 1px solid #ccc; 
	 margin: 0 0 15px 0;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: #fff;
    border: 1px solid #ccc !important;
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
</style>
<script type="text/javascript">
$(document).ready(function() {
  $(".myroute").select2();
});
</script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/select/select2.css">
<!--<script src="select/jquery-1.8.0.min.js"></script>-->
<script src="<?php echo base_url();?>assets/select/select2.js"></script>

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


<!--<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var customer_id = document.frmCust.customer_id.value,
   
   
   if( mobile == "" && land_ln == "")
   {
     document.frmCust.mobile.focus();
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   
 
}

</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>////////////////////////////////field required validation///////////////////////////////////////////
   $(document).ready(function(){
   $( "#submit" ).click(function( event ) {
   
  if ( $( "#cust_name" ).val() === "" ) {
	$( "#errorBox_name" ).text( " Enter the Customer Name" ).show();
    event.preventDefault();
  }
  if ( $( "#mobile" ).val() === "" ) {
	$( "#errorBox_mobile" ).text( "Enter the Mobile Number" ).show(); 
    event.preventDefault();
  }
  if ( $( "#address" ).val() === "" ) {
	$( "#errorBox_address" ).text( "Enter the Address" ).show();
    event.preventDefault();
  }
  if ( $( "#state" ).val() === "" ) {
	$( "#errorBox_state" ).text( "Enter the State" ).show();
    event.preventDefault();
  }
  if ( $( ".city" ).val() === "" ) {
	$( "#errorBox_city" ).text( "Enter the City" ).show();
    event.preventDefault();
  }
  if ( $( "#pincode" ).val() === "" ) {
	$( "#errorBox_pincode" ).text( "Enter the Pincode" ).show();
    event.preventDefault();
  }
   if ( $( "#customer_name" ).val() === "" ) {
	$( "#errorBox_contact" ).text( "Enter the Contact Name" ).show();
    event.preventDefault();
  }
	
	
  }); 
});

   </script>
   
 <script>///////////////////////////////////character & number validation///////////////////////////////////////////
    $(document).ready(function(){
		$('#cust_name').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
		//$('#service_zone').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        //});
		$('.city').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
		
		$('#address').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z ./-_,]+$/,'') );
        });
		
		
		$('#mobile').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#mobile').change(function(){
			if($(this).val() !=''){
            if($(this).val().length<10){
				//alert("hiii");
				
				$( "#errorBox_mobile" ).text( "Phone Number must be atleast 10 digit" ).show();
				return false;
				$(this).focus();
			}
			}
			
        });
		$('#pincode').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#customer_name').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
	 });
</script>
<script>
     $(document).ready(function(){
		$("#cust_name").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox_name").show();
			}
			else{
				$("#errorBox_name").hide();
			}
		});
		
		$("#cust_type").click(function(){
			if($(this).val()==""){
			    $("#errorBox_type").show();
			}
			else{
				$("#errorBox_type").hide();
			}
		});
		$("#address").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox_address").show();
			}
			else{
				$("#errorBox_address").hide();
			}
		});
		$("#state").click(function(){
			if($(this).val()==""){
			    $("#errorBox_state").show();
			}
			else{
				$("#errorBox_state").hide();
			}
		});
		$("#customer_id").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox_id").show();
			}
			else{
				$("#errorBox_id").hide();
			}
		});
		$("#customer_name").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox_contact").show();
			}
			else{
				$("#errorBox_contact").hide();
			}
		});
		$("#service_zone").click(function(){
			if($(this).val()==""){
			    $("#errorBox_service").show();
			}
			else{
				$("#errorBox_service").hide();
			}
		});
		$("#pincode").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox_pincode").show();
			}
			else{
				$("#errorBox_pincode").hide();
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
		<!--<script>
     $(document).ready(function(){
		
		$("#mobile").keyup(function(){
			
				$("#mobile").keyup(function(evt){
			
				$("#errorBox_mobile").hide();
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				  alert("Please enter only Numbers.");
				  $('#mobile').val('');
				}
		});
			
		$("#pincode").keyup(function(evt){
			
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				  alert("Please enter only Numbers.");
				  $('#pincode').val('');
				}
		});	
			});
		});
		</script>-->



 <style>
 .link{
	 padding: 9px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold !important;
border-radius: 5px;
margin-right:20px;
cursor:pointer;
 }
 .link:hover
 {
	 color:#fff;
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
	display: none;
	box-shadow:none !important;
}
		.del
		{
			display:block;
		}
		body{background-color:#fff;}
		.plusbutton {
    display: inline-block;
    padding: 0px 5px !important;
    margin-bottom: 10px !important;
    font-size: 14px;
	height: inherit !important;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
	background-color: #dbd0e1;
}
.plusbutton:hover{
	background-color: #dbd0e1;
	color:#fff;
	border:1px solid #dbd0e1;
}
.delbutton {
    display: inline-block;
    padding: 0px 5px !important;
    margin-bottom: 10px !important;
    font-size: 14px;
	height: inherit !important;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
	background-color: #dbd0e1;
}
.delbutton:hover{
	background-color: #dbd0e1;
	color:#fff;
	border:1px solid #dbd0e1;
}
input:read-only{
	background:#eee;
}
.addservice{
	
}
#errorBox_name{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_contact{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_mobile{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#emailerror{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_pincode{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_service{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_address{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_state{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_city{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
	#errorBox_type{
		font-size:11px;
		position: relative;
		bottom: 10px;
	}
 </style>




 <style>

.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{
	float:left;
	list-style:none;
	margin:0;
	padding:0;
	width:269px;
	height: 125px;
    overflow-y: auto;
    overflow-x: hidden;
    position: relative;
    bottom: 15px;
    border: 1px solid #ccc;
}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#suggesstion-box{
	position: absolute;
    z-index: 3;
}
</style>

<script>
$(document).ready(function(){
$('#pincode').change(function() { 
var id=$(this).val();
//alert(id);
$("#service_zone > option").remove(); 
$('#area_name').val("");
		   $('#area_id').val("");
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#service_zone').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#area_name').val(data.area_name);
		   $('#area_id').val(data.area_id);
		   
    });
} 
});

});


/*$('#mobile').keyup(function() { 
var id=$("#mobile").val();

var datastring = 'id='+id;

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/checkMob",
data: datastring,
cache: false,
success: function(data) 
{ 	
	 if(data == 0){
            $('#errBox_mobile').html('');
			
        }
        else{
			$('#errorBox_mobile').html('Customer Already Exist!').show(); 
			$('#mobile').val('');
			
			return false;
         }
	
} 
});

});


$('.ready').keyup(function() { 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/checkland_ln",
data: dataString,
cache: false,
success: function(data) 
{ 	
	document.getElementById("errorBox").innerHTML = data;
	
} 
});

});*/


});
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
url: "<?php  echo base_url(); ?>customer/checkMob",
data: datastring,
cache: false,
success: function(data) 
{ 	
	 if(data == 0){
            $('#errBox_mobile').html('');
			
        }
        else{
			 if($('#mobile').val() !=''){
			$('#errorBox_mobile').html('Customer Already Exist!').show(); 
			$('#mobile').val('');
			 
			return false;
			 }
         }
	
} 
 
});
}
});
</script>

<script>
$(document).ready(function(){
$('#re-pincode').change(function() { 
var id=$(this).val();
//alert(id);
$("#service_zone_loc > option").remove(); 
 $('#rearea_name').val();
		   $('#rearea_id').val();
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone_loc').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#service_zone_loc').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#rearea_name').val(data.area_name);
		   $('#rearea_id').val(data.area_id);
		   
    });
} 
});

});



});
</script>
<script>
$(document).ready(function(){
	$('form').submit(function() {
    $('#re_state').removeAttr('disabled');
	$('#service_zone_loc').removeAttr('disabled');
	
});
});
</script>


<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Edit Customer</h2>
<hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                 <form action="<?php echo base_url(); ?>customer/edit_customer" method="post" name="frmCust" onsubmit="return frmValidate()" autocomplete="off">
<?php foreach($list as $keyy){?>				 
<div class="col-md-12">
	

	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Customer Name<span style="color:red;">*</span></label>
		<input type="text" name="company_name" class="company custname" id="cust_name" maxlength="50" value="<?php echo $keyy->customer_name; ?>" readonly> <input type="hidden" name="cust_id" class="company custname" id="cust_id" maxlength="150" value="<?php echo $keyy->id; ?>">
		<div id="errorBox_name" style="color:red;"></div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Mobile<span style="color:red;">*</span></label>
		<input type="text" name="mobile" id="mobile" class="mobile" value="<?php echo $keyy->mobile; ?>" maxlength="15">
		<div id="errorBox_mobile" style="color:red;"></div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-12">
		<label>Address <span style="color:red;">*</span></label>
		<input type="text" name="address" id="address" value="<?php echo $keyy->address; ?>" class="adress custaddress" maxlength="250">
		<div id="errorBox_address" style="color:red;"></div>
	</div>
	
	<div class="col-md-3 col-sm-6 col-xs-12 ">
			<label for="tags">City<span style="color:red;">*</span></label>
			<input type="text" name="city" id="tags" value="<?php echo $keyy->city; ?>" class="city" maxlength="100">
			<!--<div id="suggesstion-box" ></div>-->
			<div id="errorBox_city" style="color:red;"></div>
		</div>
	
</div>

	<div class="col-md-12">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>State<span style="color:red;">*</span></label>
			<select name="state" id="state">
				<option value="">---Select---</option>
				<?php foreach($state_list as $statekey){ 
						if($statekey->id==$keyy->state){
				?>
				<option selected="selected" value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
				<?php }else{ ?>	
				<option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
				<?php }} ?>
			</select>
			<div id="errorBox_state" style="color:red;"></div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>Pincode<span style="color:red;">*</span></label>
			<input type="text" name="pincode" id="pincode" class="pincode pin" maxlength="6" value="<?php echo $keyy->pincode; ?>">
			<div id="errorBox_pincode" style="color:red;"></div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>E-Mail<span style="color:red;">*</span></label>
			<input type="text" name="email_id" id="email_id" class="email_id" maxlength="50" value="<?php echo $keyy->email_id; ?>">
			<div id="errorBox_email" style="color:red;"></div>
		</div>
		
	</div>
<?php } ?>
<button class="btn cyan waves-effect waves-light addservice" type="submit" id="submit" >Submit</button>




<table class="tableadd">

<tr>

<td style="padding-top: 25px;">
 
</td>
</tr>
</table>

					
                         
                        
                     
                  
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
  
<!--<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
  
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
  </script>-->
  
  <script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
  
 
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(e){
		var code = e.keyCode || e.which;
		
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
},
focus: function (event, ui) {
    this.value = ui.item.label;
      // or $('#autocomplete-input').val(ui.item.label);

    // Prevent the default focus behavior.
    event.preventDefault();
}
		
		});
		
	});
	
	/*$("#re_city").keyup(function(){
		$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_city",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#re_city").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data)
			{ 
			$("#suggesstion-box1").show();
			$("#suggesstion-box1").html(data);
			$("#re_city").css("background","#FFF");
		} 
		
		});
	});*/
});

function selectCountry(val) { 
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
/*function selectCountry1(value) { 
$("#re_city").val(value);
$("#suggesstion-box1").hide();
}*/
</script>
  
  
  
  
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
  
 
  
    
      <script type='text/javascript' src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js"></script>
	  
	  <!--<script type='text/javascript'>//<![CDATA[
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

</script>-->

<script>
	$(function(){
		var regeditmail=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.(com|org|net|co.in|in|mil|edu|gov|gov.in))$/;
		
		$(".custname,.contname,.desig,.area,.add-area,.branch").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z. ]/g,'') );
		});
		
		$(".custaddress,.custaddress1,.deliveryaddress").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^A-Za-z0-9.,-\/# ]/g,'') );
		});
		
		$(".mobile,.landline,.add-mobile,.pin").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^0-9-]/g,'') );
		});
		
		$(".emailid").on("change", function(){
			if(!regeditmail.test($(".emailid").val())){
				$(".emailerror").text("Invalid Email ID!").show().css({
					"font-size":"11px",
					"color":"#ff0000"
				});
			}
		});
		$(".add-email").change(function(){
			if(!regeditmail.test($(this).val())){
				$(".add-emailerror").text("Invalid Email ID!").show().css({
					"font-size":"10px",
					"color":"#ff0000"
				});;
			}
		});
		
		$(".emailid").keyup(function(){
			$(".emailerror").fadeOut('slow');
		});
		$(".add-email").keyup(function(){
			$(".add-emailerror").fadeOut('slow');
		});
	});
</script>

<!--<script>
   $(function(){
   $( "form" ).submit(function( event ) {
  if ( $( "#mobile" ).val() === "" ) {
	$( "#mobile_error" ).text( "Please enter the mobile number" ).show();
    event.preventDefault();
  }
  
  if ( $( "#land_ln" ).val() === "" ) {
	$( "#land_ln_error" ).text( "Please enter the landline number" ).show();
    event.preventDefault();
  }
  
  if ( $( "#customer_id" ).val() === "" ) {
	$( "#customer_id_error" ).text( "please enter the customer id" ).show();
    event.preventDefault();
  }
  
  if ( $( "#company_name" ).val() === "" ) {
	$( "#company_error" ).text( "please enter the customer name" ).show();
    event.preventDefault();
  }
  
 if ( $( "#cust_type" ).val() == "" ) {
	$( "#cust_type_error" ).text( "please enter the type of customer" ).show();
    event.preventDefault();
  }
  
  
   if ( $( "#pincode" ).val() == "" ) {
	$( "#pincode_error" ).text( "please enter the pincode" ).show();
    event.preventDefault();
  }

 if ( $( "#service_zone" ).val() == "" ) {
	$( "#service_zone_error" ).text( "please enter the service zone" ).show();
    event.preventDefault();
  } 
  if ( $( ".contactv_name" ).val() === "" ) {
	$( "#customer_name_error" ).text( "please enter the contact name" ).show();
    event.preventDefault();
  } 

 if ( $( "#address" ).val() === "" ) {
	$( "#address_error" ).text( "please enter the address" ).show();
    event.preventDefault();
  }
  if ( $( ".city" ).val() === "" ) {
	$( ".city_error" ).text( "please enter the city" ).show();
    event.preventDefault();
  }
 
  if ( $( "#state" ).val() === "" ) {
	$( "#state_error" ).text( "please enter the state" ).show();
    event.preventDefault();
  }


});
});
   </script>
<script>
    $(function(){
		$("#mobile").keyup(function(){
			if($(this).val()==""){
			    $("#mobile_error").show();
			}
			else{
				$("#mobile_error").hide();
			}
		});
		
		$("#land_ln").keyup(function(){
			if($(this).val()==""){
			    $("#land_ln_error").show();
			}
			else{
				$("#land_ln_error").hide();
			}
		});
		
		$("#customer_id").keyup(function(){
			if($(this).val()==""){
			    $("#customer_id_error").show();
			}
			else{
				$("#customer_id_error").hide();
			}
		});
		
		$("#company_name").keyup(function(){
			if($(this).val()==""){
			    $("#company_error").show();
			}
			else{
				$("#company_error").hide();
			}
		});
		
		$("#cust_type").change(function(){
			if($(this).val()==""){
			    $("#cust_type_error").show();
			}
			else{
				$("#cust_type_error").hide();
			}
		});
		
		$("#pincode").keyup(function(){
			if($(this).val()==""){
			    $("#pincode_error").show();
			}
			else{
				$("#pincode_error").hide();
			}
		});
		
		$("#service_zone").change(function(){
			if($(this).val()==""){
			    $("#service_zone_error").show();
			}
			else{
				$("#service_zone_error").hide();
			}
		});
		
		$(".contactv_name").keyup(function(){
			if($(this).val()==""){
			    $("#customer_name_error").show();
			}
			else{
				$("#customer_name_error").hide();
			}
		});
		
		$("#address").keyup(function(){
			if($(this).val()==""){
			    $("#address_error").show();
			}
			else{
				$("#address_error").hide();
			}
		});
		
		$(".city").keyup(function(){
			if($(this).val()==""){
			    $(".city_error").show();
			}
			else{
				$(".city_error").hide();
			}
		});
		
		$("#state").change(function(){
			if($(this).val()==""){
			    $("#state_error").show();
			}
			else{
				$("#state_error").hide();
			}
		});
		
	});
</script>-->

<script type='text/javascript'>
$(function(){
    var tbl = $(".innerdiv");
 var i = 1;   
    $("#addRowBtn").click(function(){
        $('<div class="col-md-12"><div class="col-md-3 col-sm-6 col-xs-12"> <select id="route" name="lab_name[]" class="form-control1 myroute "><option value="">Select lab</option><?php foreach($lab as $roww){?><option value="<?php echo $roww->id;?>"><?php echo $roww->lab_name;?></option> <?php } ?></select><div id="customer_name_error" style="color:red;"></div></div><div class="col-md-3 col-sm-6 col-xs-12"><input type="text" class="form-control" name="lab_value[]"/></div><div class="col-md-3 col-sm-6 col-xs-12"><a class="btn delbutton btn-danger delRowBtn"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>').appendTo(tbl); 
		i++;
    });
	
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });    
    
});
</script>

<script>
$(document).ready(function(){
	//alert("df");
   $('#cust_type').change(function(){ 
  //alert("dnf");
	    var cust_type_id = $(this).val();
		var land = cust_type_id.split('-');
		var id = land['0'];
		var corp = land['1'];
		//alert(id+'_'+corp);
		if(corp=='CORPORATE' || corp=='corporate' || corp=='Corporate' || corp=='corporate'){
			$(".box").not(".ready").hide();
			$(".ready").show();
		}else{
			$(".box").not(".del").hide();
			$(".del").show();
		}
		
		
		var cust_id = $('#customer_id').val();
		if(cust_id.length == '5'){
			var customerid = id+cust_id;
			$('#customer_id').val(customerid);
		}else{
			var cust_id2 = cust_id.substring(2, cust_id.length);
			var customerid = id+cust_id2;
			$('#customer_id').val(customerid);
		//var zoneid = cust_id1+zone_id;
		//$('#customer_id').val(zoneid);
	}
	
	
   });
   
   $('#service_zone').change(function(){ 
  // alert($(this).val());
   if(document.getElementById('cust_type').selectedIndex == 0){
	   alert("Kindly Select Customer Type first");
   }else{
	   
	   var z_id = $(this).val();
	   var arr = z_id.split('-');
	   var zonid = arr['0'];
		var zone_id = arr['1'];
		var zone_coverage = arr['2'];
		//alert(zone_coverage);
		$('#service_zone_loc option').each(function(){
			//alert(zonid);
			if(zonid==this.value){
				 //alert(zone_coverage);
				 $('#service_loc_coverage').val(zone_coverage);
				 //$('#service_zone_loc').val(zonid);
			}
       
		
   });
		
		
		
	   //alert(zone_id);
   var cust_type_id = $('#customer_id').val();
   //alert(cust_type_id);
   if(cust_type_id.length == '7'){
	  // var cust_id = cust_type_id+zone_id;
	  var position = 2;
	   var output = [cust_type_id.slice(0, position), zone_id, cust_type_id.slice(position)].join('');
	   //alert(output)
	    $('#customer_id').val(output);
	}else{
	    //var cust_id1 = cust_type_id.substring(0, cust_type_id.length 2);
		//alert(str.replaceAt(2, zone_id));
		
		String.prototype.replaceAt=function(index, character) {
			return this.substr(0, index) + character + this.substr(index+character.length);
		}	
		strss = cust_type_id.replaceAt(2, zone_id);
		$('#customer_id').val(strss);
	}
	
	
   }
   
   
   });
 });
</script>
<script>
$(document).ready(function(){
	$('#state').change(function(){ 
 
	   var z_id = $(this).val();
	   
		$('#re_state option').each(function(){
		
				 $('#re_state').val(z_id);
		
		
		});
   
	});
});
</script>

<!--<script>
$(document).ready(function(){
$('#pincode').blur(function() { 
var id=$(this).val();
//alert(id);
$("#service_zone > option").remove(); 

var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#service_zone').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#area_name').val(data.area_name);
		   $('#area_id').val(data.area_id);
		   
    });
} 
});

});



});
</script>-->


<!--<script>
$(document).ready(function(){
$('#re-pincode').keyup(function() { 
var id=$(this).val();
//alert(id);
$("#service_zone_loc > option").remove(); 

var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone_loc').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#service_zone_loc').append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#rearea_name').val(data.area_name);
		   $('#rearea_id').val(data.area_id);
		   
    });
} 
});

});



});
</script>-->


<!--<script>
$(document).ready(function(){
   $('#billingtoo').click(function(){//alert("haiiii");
	//$addr = $('#address').val();
	var id = $(this).val();
	//alert(id);
	//var stateid = $('#state').val();
	$('#re_address').val($('#address').val());
	$('#re_address1').val($('#address1').val());
	$('#re_city').val($('#search-box').val());
	//$('#re_state').val($('#state').val());
	$('#re-pincode').val($('#pincode').val());
	$('#rearea_name').val($('#area_name').val());
	$('#rearea_id').val($('#area_id').val());
	
	$('#re_contact_name').val($('#customer_name').val());
	$('#re_emails').val($('#email').val());
	$('#re_mobiles').val($('#mobile').val());
	
	$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_state",
		data:'stateid='+$('#state').val(),
		
		success: function(data)
			
			{ 
			$.each(data, function(index, data){//alert(data.branch_name);
            $('#re_state').val(data.state);
			
            });
} 
		
		});
		
   });
 });
</script>-->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
<script type="text/javascript">
    $(function () { 
        $("#billingtoo").click(function () {
            if ($(this).is(":checked")) {
               var id = $(this).val();
	//alert(id);
	var stateid = $('#state').val();
	var sarr=stateid.split('-');
	var svalue=sarr['1'];
	//alert(stateid);
	//var serlocid=$('#service_zone').val();
	var z_id = $('#service_zone').val();
	   var arr = z_id.split('-');
	   var zonid = arr['0'];
	//alert(zonid);
	$("#billingtoo").val(1);
	$('#re_address').val($('#address').val()).css('background-color','#eee');
	$('#re_address').prop('readonly', true);
	$('#re_address1').val($('#address1').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#re_city').val($('#tags').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#re_state').val(svalue).css('background-color','#eee').prop('disabled', true);
	$
	$('#re-pincode').val($('#pincode').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#rearea_name').val($('#area_name').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#rearea_id').val($('#area_id').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#re_contact_name').val($('#customer_name').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#re_emails').val($('#email').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#re_mobiles').val($('#mobile').val()).css('background-color','#eee').prop('readonly', true);
	
	$('#service_zone_loc').val(zonid).css('background-color','#eee').prop('disabled', true);
	/*$.ajax({
		type: "POST",
		url: "<?php  echo base_url(); ?>customer/get_state",
		data:'stateid='+$('#state').val(),
		
		success: function(data)
			
			{ 
			$.each(data, function(index, data){//alert(data.branch_name);
            $('#re_state').val(data.state);
			
            });
} 
		
		});*/
		
   //});
            } else {
				$("#billingtoo").val(0);
                $("#re_address").val(" ").css('background-color','#fff').prop('readonly', false);
				 $("#re_address1").val(" ").css('background-color','#fff').prop('readonly', false);
				  $("#re_city").val(" ").css('background-color','#fff').prop('readonly', false);
				   $("#re-pincode").val(" ").css('background-color','#fff').prop('readonly', false);
				    $("#rearea_name").val(" ").css('background-color','#fff').prop('readonly', false);
					 $("#rearea_id").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_contact_name").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_emails").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_mobiles").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_state").val(0).css('background-color','#fff').prop('disabled', false);
					  $('#service_zone_loc').val(0).css('background-color','#fff').prop('disabled', false);
					  
            }
        });
    });
</script>


<script type='text/javascript'>//<![CDATA[ 
function FillBilling(f) {
  if(f.billingtoo.checked == true) { alert(f.search-box.value);
    f.re_address.value = f.address.value;
	 f.re_address1.value = f.address1.value;
    f.re_city.value = f.search-box.value;
	//f.re_state.value = f.state.value;
	f.re_pincode.value = f.pincode.value;
	f.rearea_id.value = f.area_id.value;
  }
 
}

</script>

   

   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>-->
 
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>--> 

	 <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	 
	
	 
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var jQuery_2_1_1 = $.noConflict(true);
		</script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	    
</body>

</html>