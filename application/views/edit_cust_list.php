<style>
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
input:read-only{
	background:#eee;
}
.btn{text-transform:none !important;}
</style>
<style>
	.close_ {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
	cursor:pointer;
}

.close_:hover {
	color:#000;
}
</style>
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


<script type='text/javascript'>
$(window).load(function(){ 
$(document).ready(function() {

	    var cust_type_id = $("#cust_type").val();
		var land = cust_type_id.split('-');
		var id = land['0'];
		var corp = land['1'];
		//alert(id+'_'+corp);
		if(corp=='CORPORATE' || corp=='corporate' || corp=='Corporate' || corp=='corporate'){
			$(".box").not(".ready").hide();
			$(".box1").not(".ready1").hide();
			$(".ready").show();
			$(".ready1").show();
		}else{
			$(".box").not(".del").hide();
			$(".box1").not(".del1").hide();
			$(".del").show();
			$(".del1").show();
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
});
</script>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>////////////////////////////////field required validation///////////////////////////////////////////
   $(document).ready(function(){
   $( "#submit" ).click(function( event ) {
   
  if ( $( "#cust_type" ).val() === "" ) {
	$( "#errorBox_type" ).text( " Enter the Types of Customer" ).show();
    event.preventDefault();
  }
  if ( $( "#customer_id" ).val() === "" ) {
	$( "#errorBox_id" ).text( " Enter the Customer Id" ).show();
    event.preventDefault();
  }
  if ( $( "#cust_name" ).val() === "" ) {
	$( "#errorBox_name" ).text( " Enter the Customer Name" ).show();
    event.preventDefault();
  }
  if ( $( "#mobile" ).val() === "" ) {
	$( "#errorBox_mobile" ).text( "Enter the Mobile Number" ).show();
    event.preventDefault();
  }
	if($("#mobile").val().length<10){
		$( "#errorBox_mobile" ).text( "Phone Number must be atleast 10 digit" ).show();
		event.preventDefault();
		$(this).focus();
	}
  /*if ( $( "#land_ln" ).val() === "" ) {
	$( "#errorBox" ).text( "Enter the Landline number" ).show();
    event.preventDefault();
  }*/
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
  
	if($("#pincode").val().length<6){
		$( "#errorBox_pincode" ).text( "Pincode Number must be 6 digit" ).show();
		event.preventDefault();
		$(this).focus();
	}
  
   if ( $( "#service_zone" ).val() === "" ) {
	$( "#errorBox_service" ).text( "Enter the Service Zone" ).show();
    event.preventDefault();
  }
     if ( $( "#customer_name" ).val() === "" ) {
	$( "#errorBox_contact" ).text( "Enter the Contact Name" ).show();
    event.preventDefault();
  }
	
	
  });
		$('#mobile').change(function(event){
			if($(this).val() !=''){
            if($(this).val().length<10){
				$( "#errorBox_mobile" ).text( "Phone Number must be atleast 10 digit" ).show();
				return false;
				event.preventDefault();
				$(this).focus();
			}
			}
			
        }); 
		$('#pincode').change(function(event){
            if($(this).val().length<6){
				$( "#errorBox_pincode" ).text( "Pincode Number must be 6 digit" ).show();
				return false;
				event.preventDefault();
				$(this).focus();
			}
			
        });		
});

   </script>
 <script>
$(document).ready(function(){//alert('number');
$(document).on("keyup","#mobile", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){
var id=$("#mobile").val();
if(id !=''){
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
}
}
 });
 </script>
 <script>///////////////////////////////////character & number validation///////////////////////////////////////////
    $(document).ready(function(){
		$('#cust_name').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
		/*$('#service_zone').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });*/
		/*$('.city').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });*/
		
		$('#address').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z .\/-_,]+$/,'') );
        });
		
		
		$('#mobile').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
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
		$("#mobile").keyup(function(){
			
		
				$("#errorBox_mobile").hide();
			
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
          box-shadow:none !important;

        }
		
		.box1{
       display: none;
		box-shadow:none !important;
      
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
	// alert(zoneid);
	
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
  <script>
$(document).ready(function(){
   $('#cust_type').change(function(){ 
	    var cust_type_id = $(this).val();
		var land = cust_type_id.split('-');
		var id = land['0'];
		var corp = land['1'];
		//alert(id+'_'+corp);
		if(corp=='CORPORATE' || corp=='corporate' || corp=='Corporate' || corp=='corporate'){
			$(".box").not(".ready").hide();
			$(".box1").not(".ready1").hide();
			$(".ready").show();
			$(".ready1").show();
		}else{
			$(".box").not(".del").hide();
			$(".box1").not(".del1").hide();
			$(".del").show();
			$(".del1").show();
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
   
   if(document.getElementById('cust_type').selectedIndex == 0){
	   alert("Kindly Select Customer Type first");
   }else{
	   
	   var z_id = $(this).val();
	   var arr = z_id.split('-');
	   var zonid = arr['0'];
		var zone_id = arr['1'];
		var zone_coverage = arr['2'];
		
		$('#service_zone_loc option').each(function(){
			//alert(zonid);
			if(zonid==this.value){
				 //alert("Value: "+this.value);
				 $('#service_loc_coverage').val(zone_coverage);
				 $('#service_zone_loc').val(zonid);
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
    border: 1px solid #ccc;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#suggesstion-box{
	position: absolute;
    z-index: 3;
}

.plusbutton {
   border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 0px 4px 4px 4px;
    border-radius: 5px;
    color: white;
	height: 30px;
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
</style>

<!--<script>
$(document).ready(function(){
/*$('.del').keyup(function() { 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/checkMob",
data: dataString,
cache: false,
success: function(data) 
{ 	
	document.getElementById("errorBox").innerHTML = data;
	
} 
});

});*/</script>-->
<script>
$(document).ready(function(){
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

});


});
</script>
 <script>
$(document).ready(function(){
$('#pincode').change(function() { 
var id=$(this).val();
var check=$('#billingtoo').val();
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
</script>

<script>
$(document).ready(function(){
$('.re_pincode').change(function() { 
//var id=$(this).val();

var idd=$(this).closest(this).attr('id');
//alert(idd);

var arr = idd.split('_');
var row_id = arr['1'];
 var id = $('#re-pincode_'+row_id).val();
//alert(pin);

$('#service_zone_loc_'+row_id+ "> option").remove();
$('#rearea_name_'+row_id).val("");
		   $('#rearea_id_'+row_id).val("");
var dataString = 'id='+ id;
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/get_zonearea",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#service_zone_loc_'+row_id).append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		//alert(data);
		if(data.service_loc.length > 0){
		   $('#service_zone_loc_'+row_id).append("<option value='"+data.id+'-'+data.serv_loc_code+'-'+data.zone_coverage+"'>"+data.service_loc+"</option>");
		}
		   $('#rearea_name_'+row_id).val(data.area_name);
		   $('#rearea_id_'+row_id).val(data.area_id);
		   
    });
} 
});

});



});
</script>
<script>
$(document).ready(function(){
	$('form').submit(function() { var i=1;
    $('#re_state').removeAttr('disabled');
	$('#service_zone_loc_'+i).removeAttr('disabled');
});
});
</script>

<script>
$(window).on('load', function() {
	var i=1;
	if($('#billingtoo').val() == 1){
  $('#re_address').css('background-color','#eee').prop('readonly', true);
	$('#re_address1').css('background-color','#eee').prop('readonly', true);
	$('#re_city').css('background-color','#eee').prop('readonly', true);
	
	$('#re-pincode_'+i).css('background-color','#eee').prop('readonly', true);
	$('#rearea_name_'+i).css('background-color','#eee').prop('readonly', true);
	$('#rearea_id').css('background-color','#eee').prop('readonly', true);
	$('#re_contact_name').css('background-color','#eee').prop('readonly', true);
	$('#re_emails').css('background-color','#eee').prop('readonly', true);
	$('#re_mobiles').css('background-color','#eee').prop('readonly', true);
	$('#service_zone_loc_'+i).css('background-color','#eee').prop('disabled', true);
	$('#re_state').css('background-color','#eee').prop('disabled', true);
	}
});
</script>



<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Edit Customer Details</h2>
<hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                 <form action="<?php echo base_url(); ?>customer/edit_customer" method="post" name="frmCust" onsubmit="return frmValidate()" autocomplete="off">
                      
<!--<div id="errorBox"></div>-->
<?php foreach($list as $key){?> 
<table class="tableadd">

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Type Of Customer<span style="color:red;">*</span></label>
<select name="cust_type" id="cust_type" readonly>
 <option value="">---Select---</option>
 <?php foreach($customer_type as $custtypekey){ 
		if( $custtypekey->id==$key->customer_type){
	?>
			<option selected="selected" value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
		   <?php }	 else{?>
		   <option value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
 <?php } }?>
 
</select>
<div id="errorBox_type" style="color:red;"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Customer ID<span style="color:red;">*</span></label>
<input type="text" name="customer_id" id="customer_id" class="customer" maxlength="15" value="<?php echo $key->customer_id; ?>" readonly><input class="" value="<?php echo $key->id; ?>" name="cus_id" type="hidden" value="">
<div id="errorBox_id" style="color:red;"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Customer Name<span style="color:red;">*</span></label>
<input type="text" name="company_name" class="company custname" id="cust_name" maxlength="80" value="<?php echo $key->company_name; ?>">
<div id="errorBox_name" style="color:red;"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
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


<?php if($key->mobile=="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="" class="del1 box1 mobile" maxlength="15">
<?php } ?>
<?php if($key->land_ln=="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="" class="ready1 box1 landline" maxlength="15">
<?php } ?>


<?php if($key->mobile!="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="<?php echo $key->mobile;?>" class="del box mobile" maxlength="15"><input type="hidden" name="mobilehidden"  value="<?php echo $key->mobile;?>" class="del box mobile" maxlength="15">
<?php } ?>
<?php if($key->land_ln!="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="<?php echo $key->land_ln;?>" class="ready box landline" maxlength="15">
<?php } ?>
<div id="errorBox_mobile" style="color:red;"></div>

</div>



</div>

<div class="col-md-12">


<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email ID</label>
<input type="text" name="email" id="email" class="email emailid" value="<?php echo $key->email_id; ?>">
<div class="emailerror"></div>

</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address<span style="color:red;">*</span></label>
<input type="text" name="address" id="address" class="adress custaddress"  maxlength="150" value="<?php echo $key->address; ?>">
<div id="errorBox_address" style="color:red;"></div>

</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address1</label>
<input type="text" name="address1" class="adress1 custaddress1" id="address1" maxlength="150" value="<?php echo $key->address1; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Delivery Address</label>
<input type="text" name="del_address" class="adress1 deliveryaddress" id="del_address"  maxlength="150" value="<?php echo $key->del_address; ?>">
</div>





</div>

<div class="col-md-12">

<div class="col-md-3 col-sm-6 col-xs-12">
<label>State<span style="color:red;">*</span></label>
	<select name="state" id="state">
  <option value="">---Select---</option>
	<?php foreach($state_list as $statekey){ 
		if( $statekey->id==$key->state){
	?>
			<option selected="selected" value="<?php echo $statekey->id.'-'.$statekey->state; ?>"><?php echo $statekey->state; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $statekey->id.'-'.$statekey->state; ?>"><?php echo $statekey->state; ?></option>
	<?php } } ?>	
</select>
<div id="errorBox_state"style="color:red;"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label for="tags">City<span style="color:red;">*</span></label>
			<input type="text" name="city" id="tags" class="city" maxlength="100" value="<?php echo $key->city; ?>">
<div id="errorBox_city" style="color:red;"></div>

</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Pincode<span style="color:red;">*</span></label>
<input type="text" name="pincode" id="pincode" class="pin" maxlength="6" value="<?php echo $key->pincode; ?>">
<div id="errorBox_pincode"style="color:red;"></div>

</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Area</label>
<input type="text" name="area_name" class="area" id="area_name"  maxlength="50" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key->area_name){echo $pinkey->area_name;}} ?>" readonly>
<input type="hidden" name="area_id" class="" id="area_id" value="<?php echo $key->area_name; ?>">

</div>





</div>

<div class="col-md-12">


<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Zone<span style="color:red;">*</span></label>
<select name="service_zone" id="service_zone" readonly>
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		  if( $zonekey->id==$key->service_zone){
	?>     <option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
			
		  	
	<?php } } ?>			
</select>
<div id="errorBox_service" style="color:red;"></div>

</div>





<div class="col-md-3 col-sm-6 col-xs-12">
<label>Contact Name<span style="color:red;">*</span></label>
<input type="text" name="customer_name" id="customer_name" class="contname"  maxlength="80" value="<?php echo $key->customer_name; ?>">
<div id="errorBox_contact" style="color:red;"></div>

</div>
<div class="col-md-3 col-sm-6 col-xs-12">
			<label>Number Of Samples Per Day</label>
			<input type="text" name="no_perday" class="" id="no_perday" maxlength="80" value='<?php echo $key->no_perday;?>'>
			<div id="errorBox_no_perday" style="color:red;"></div>
		</div>

</div>
<!--<tr>
<td><label>Type Of Customer<span style="color:red;">*</span></label></td>
<td>
 <select name="cust_type" id="cust_type" readonly>
 <option value="">---Select---</option>
 <?php foreach($customer_type as $custtypekey){ 
		if( $custtypekey->id==$key->customer_type){
	?>
			<option selected="selected" value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
		   <?php }	 else{?>
		   <option value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
 <?php } }?>
 
</select>
</td>

<td >
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


</td>



<td>
<?php if($key->mobile=="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="" class="del1 box1">
<?php } ?>
<?php if($key->land_ln=="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="" class="ready1 box1">
<?php } ?>


<?php if($key->mobile!="" && isset($key->mobile)){?>
<input type="text" name="mobile" id="mobile" value="<?php echo $key->mobile;?>" class="del box">
<?php } ?>
<?php if($key->land_ln!="" && isset($key->land_ln)){?>
<input type="text" name="land_ln" id="land_ln" value="<?php echo $key->land_ln;?>" class="ready box">
<?php } ?>




</td>

<!--<td><label>Mobile No<span style="color:red;">*</span></label></td><td><input type="text" name="mobile" id="mobile" class="mobile" value="<?php echo $key->mobile; ?>"></td>-->


<!--</tr>

<tr>
<td><label>Customer ID<span style="color:red;">*</span></label></td><td><input type="text" name="customer_id" id="customer_id" class="customer" value="<?php echo $key->customer_id; ?>" readonly><input class="" value="<?php echo $key->id; ?>" name="cus_id" type="hidden" value=""></td>
<td><label>Customer Name<span style="color:red;">*</span></label></td><td><input type="text" name="company_name" class="company" value="<?php echo $key->company_name; ?>"></td>

</tr>
<tr>
<td><label>Pincode<span style="color:red;">*</span></label></td><td><input type="text" name="pincode" id="pincode" class="pincode" value="<?php echo $key->pincode; ?>"></td>
<td><label>Service Zone<span style="color:red;">*</span></label></td>
<td>
 <select name="service_zone" id="service_zone" readonly>
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		  if( $zonekey->id==$key->service_zone){
	?>
			<option selected="selected" value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{?>
			<option value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>	
	<?php } } ?>			
</select>
</td>
</tr>
<tr>
<td><label>Area</label></td><td><input type="text" name="area_name" class="" id="area_name" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key->area_name){echo $pinkey->area_name;}} ?>"><input type="hidden" name="area_id" class="" id="area_id" value="<?php echo $key->area_name; ?>"></td>
<td><label>Contact Name<span style="color:red;">*</span></label></td><td><input type="text" name="customer_name" id="customer_name" class=""  value="<?php echo $key->customer_name; ?>"></td>

</tr>
<tr>
<td><label>Email Id</label></td><td><input type="text" name="email" id="email" class="email" value="<?php echo $key->email_id; ?>"></td>
<td><label>Address<span style="color:red;">*</span></label></td><td><input type="text" name="address" id="address" class="adress" value="<?php echo $key->address; ?>"></td>
</tr>
<tr>
<td><label>Address1</label></td><td><input type="text" name="address1" class="adress1" id="address1" value="<?php echo $key->address1; ?>"></td>
<td><label>Delivery Address</label></td><td><input type="text" name="del_address" class="adress1" id="del_address" value="<?php echo $key->del_address; ?>"></td>

</tr>
<tr>
<td><label>City<span style="color:red;">*</span></label></td><td><input type="text" name="city" class="city" id="search-box" value="<?php echo $key->city; ?>"><div id="suggesstion-box" ></div></td>
<td><label>State<span style="color:red;">*</span></label></td><td>
	<select name="state" id="state">
  <option value="">---Select---</option>
	<?php foreach($state_list as $statekey){ 
		if( $statekey->id==$key->state){
	?>
			<option selected="selected" value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $statekey->id; ?>"><?php echo $statekey->state; ?></option>
	<?php } } ?>	
</select>
</td>
</tr>


<tr>
	<td><label>Call Reference<span style="color:red;">*</span></label></td>
	<td>
		<select name="cal_ref" id="cal_ref">
			<option value="">---Select---</option>
			<option value="sr" <?php if($key->cal_ref=='sr'){?>selected="selected"<?php }?>>S.R Scales</option>
			<option value="am" <?php if($key->cal_ref=='am'){?>selected="selected"<?php }?>>Arihant Marketing</option>
		</select>
	</td>
</tr>-->


</table>

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

<div class="col-md-12" id="table2">

		<div class="col-md-7 col-sm-6 col-xs-12">
			<label>Lab Name</label>
			 
			  <div id="customer_name_error" style="color:red;" maxlength="50"></div>
		</div>
		
		<!--<div class="col-md-3 col-sm-6 col-xs-12">
			<label><span style="color:red;"></span></label>
			
		</div>	-->	
        <!--<div class="col-md-3 col-sm-6 col-xs-12">
			<a class="btn plusbutton" id="addRowBtn"><i class="fa fa-plus-circle" aria-hidden="true" style="font-size:10px"></i></a>
											</div>	-->
</div>
<?php $i=0;   if(empty($lablist)){?>
<div class="col-md-12" id="table3">

		<div class="col-md-3 col-sm-6 col-xs-12">
			
			 <select id="route" name="lab_name[]" class="form-control1 myroute ">
											   <option value="">Select lab</option>
											
				<?php 
			foreach($lab as $roww)
			{

			?>
			<option  value="<?php echo $roww->id; ?>"><?php echo $roww->lab_name; ?></option>
		   
	<?php } ?>
												</select>
			  <div id="customer_name_error" style="color:red;"></div>
		</div>
		<input type="hidden" name="lab_id[]" value="">
		<div class="col-md-3 col-sm-6 col-xs-12">
			
			<input type="text" class="form-control" name="lab_value[]" />
		</div>		
		
		<div class="col-md-3 col-sm-6 col-xs-12">
		<a class="btn plusbutton" id="addRowBtn" ><i class="fa fa-plus-square"aria-hidden="true" style="font-size:10px;color: #5d2e81;"></i></a>
		
		</div>
		
		
		
</div>
<?php }else{ foreach($lablist as $roww){ ++$i;?>
<div class="col-md-12" id="table3">

		<div class="col-md-3 col-sm-6 col-xs-12">
			
			 <select id="route" name="lab_name[]" class="form-control1 myroute ">
											   <option value="">Select lab</option>
											
				<?php							
											
		if($roww->customer_id == $key->id){
	?>
			<option selected="selected" value="<?php echo $roww->id; ?>"><?php echo $roww->lab_name; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $roww->id; ?>"><?php echo $roww->lab_name; ?></option>
	<?php } ?>
												</select>
			  <div id="customer_name_error" style="color:red;"></div>
		</div>
		<input type="hidden" name="lab_id[]" value="<?php echo $roww->cutslab;?>">
		<div class="col-md-3 col-sm-6 col-xs-12">
			
			<input type="text" class="form-control" name="lab_value[]" value="<?php echo $roww->lab_value;?>"/>
		</div>		
		<?php if($i ==1){?>
		<div class="col-md-3 col-sm-6 col-xs-12">
		<a class="btn plusbutton" id="addRowBtn" ><i class="fa fa-plus-square" aria-hidden="true" style="font-size:10px"></i></a>
		
		</div>
		<?php }?>
		
		<?php if($i !=1){?>
        <div class="col-md-3 col-sm-6 col-xs-12">
			<a class="btn delRowBtn delbutton" id="<?php echo $roww->cutslab;?>" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
											</div>	
											<?php }?>
</div>
<?php }?>
  <script>
  $(function(){
$('.delRowBtn').click(function(event) {
	//alert("asfh");
                               var currentElemID = $(this).attr("id");
							   //alert(currentElemID);
							   
							      var dataString = 'currentElemID='+currentElemID;

  //alert(dataString);
$.post('<?php  echo base_url(); ?>Customer/delete_status',dataString,function(data){ 
      
       });
							  
							  
      
});	  
  });
  </script>
<?php }  ?>

<div class="lastdiv"></div>
<table id="myTable" class="tableadd" >
<?php $i=1; foreach($list1 as $key1){ if($key1->branch_name!=""){?>
<input type="hidden" value="<?php echo $key1->id;?>" id="closeidd" name="closeid[]">
<?php if($i !=1){ ?>
<div class="col-md-12"  style="border: 1px solid #ccc;
    background-color: whitesmoke;
    margin-bottom: 8px;"> 
<h4><strong>Add Service Location</strong><a class="close" onclick="$(this).closest('div').remove();">x</a></h4>

<input type="hidden" value="<?php echo $key1->id;?>" id="closeid" name="close[]">
<?php } else{?>
<div class="col-md-12" > 
<h4><strong>Add Service Location</strong></h4>
<input type="hidden" value="<?php echo $key1->id;?>" id="closeid" name="close[]">
<?php }?>

<!--<tr>
<td><label style="font-weight: bold;font-size: 14px;color: #000;line-height: 4;">Add Service Location</label></td>
</tr>-->
<?php if($i==1){?>
<!--<tr>
<td colspan="2">
<input type="checkbox" name="billingtoo" id="billingtoo" style="margin-left:-95px;height: 14px !important;">
<em style="font-style: normal;
color: rgb(5, 94, 135); margin-left: -80px;">Same as above address</em></td>
</tr>-->
<?php } ?>

<?php if($i==1){ foreach($list as $key){ if($key->checkbox ==1){?>
<div class="col-md-12">
<input type="checkbox" name="billingtoo" id="billingtoo" maxlength="150" checked value="<?php echo $key->checkbox;?> ">
<em style="font-style: normal;
color: rgb(5, 94, 135);margin-bottom: 13px;
">Same as above address</em>
</div>
<?php }else{?>
<div class="col-md-12">
<input type="checkbox" name="billingtoo" id="billingtoo" maxlength="150" value="<?php echo $key->checkbox;?> ">
<em style="font-style: normal;
color: rgb(5, 94, 135);margin-bottom: 13px;
">Same as above address</em>
</div>

<?php } }}?>

<div class="col-md-12" >

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Branch Name</label>
<input type="text" name="branch_name[]" class="branch_name branch" maxlength="50" value="<?php echo $key1->branch_name; ?>"><input class="" value="<?php echo $key1->id; ?>" name="cust_id[]" type="hidden" value="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Landline No</label>
<input type="text" name="phone[]" id="phone" class="mobile add-mobile"  maxlength="15" value="<?php echo $key1->landline; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address</label>
<input type="text" name="re_address[]" class="re_address custaddress" id="re_address"  maxlength="150" value="<?php echo $key1->address; ?>" >
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address 1</label>
<input type="text" name="re_address1[]" class="re_address1 custaddress1" id="re_address1"  maxlength="150" value="<?php echo $key1->address1; ?>"  >
</div>

</div>





<div class="col-md-12">


<div class="col-md-3 col-sm-6 col-xs-12">
<label>State</label>
<!--<input type="text" name="re_state[]" class="re_state"  maxlength="50" id="re_state" value="<?php echo $key1->state; ?>">-->
<select name="re_state[]" id="re_state"  >
				<option value="0">---Select---</option>
				<?php foreach($state_list as $statekey){
						if($statekey->id == $key->state){?>
				<option selected="selected" value="<?php echo $statekey->state; ?>"><?php echo $statekey->state; ?></option>
						<?php }else{ ?>
							<option  value="<?php echo $statekey->state; ?>"><?php echo $statekey->state; ?></option><?php }} ?>	
					
			</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label for="re_city">City </label>
<input type="text" name="re_city[]" class="city" maxlength="50" id="re_city" value="<?php echo $key1->city; ?>" >
<div id="suggesstion-box1"></div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Pincode</label>
<input type="text" name="re_pincode[]" id="re-pincode_<?php echo $i; ?>"  maxlength="6" class="re_pincode pin" value="<?php echo $key1->pincode; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Area</label>
<input type="text" name="area_name" class="add-area" id="rearea_name_<?php echo $i; ?>"  maxlength="50" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $pinkey->area_name;}} ?>"  >
<input type="hidden" name="area_idd[]" class="rearea_id" id="rearea_id_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $key1->area;}} ?>  ">
</div>



</div>



<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Zone</label>
<select name="service_zone_loc[]" id="service_zone_loc_<?php echo $i; ?>" >
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		if($zonekey->id == $key1->service_zone_loc){
	?>
			<option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
			
		  
	<?php } else{?>
	<option value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
	<?php }}?>
</select>
<input type="hidden" name="service_loc_coverage[]" id="service_loc_coverage" class="contact_name" value="<?php echo $key1->zone_coverage; ?>">
</div>

</div>


<!--<tr>
<td><label>Branch Name</label></td><td><input type="text" name="branch_name[]" class="branch_name" value="<?php echo $key1->branch_name; ?>"><input class="" value="<?php echo $key1->id; ?>" name="cust_id[]" type="hidden" value=""></td>
<td><label>Landline No</label></td><td><input type="text" name="phone[]" id="phone" class="mobile" value="<?php echo $key1->landline; ?>"></td>


</tr>

<tr>
<td><label>Address</label></td><td><input type="text" name="re_address[]" class="re_address" id="re_address" value="<?php echo $key1->address; ?>"></td>
<td><label>Address 1</label></td><td><input type="text" name="re_address1[]" class="re_address1" id="re_address1" value="<?php echo $key1->address1; ?>"></td>

</tr>
<tr>
<td><label>City </label></td><td><input type="text" name="re_city[]" class="city" id="re_city" value="<?php echo $key1->city; ?>"></td><td><label>State</label></td><td><input type="text" name="re_state[]" class="re_state" id="re_state" value="<?php echo $key1->state; ?>"></td>
</tr>

<tr>
<td><label>Pincode</label></td><td><input type="text" name="re_pincode[]" id="re-pincode_<?php echo $i; ?>" class="re_pincode" value="<?php echo $key1->pincode; ?>"></td>
<td><label>Service Zone</label></td>
<td>
 <select name="service_zone_loc[]" id="service_zone_loc_<?php echo $i; ?>">
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ 
		if($zonekey->id == $key1->service_zone_loc){
	?>
			<option selected="selected" value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } else{ ?>	
		   <option value="<?php echo $zonekey->id; ?>"><?php echo $zonekey->service_loc; ?></option>
	<?php } }?>
</select>
<input type="hidden" name="service_loc_coverage[]" id="service_loc_coverage" class="contact_name" value="<?php echo $key1->zone_coverage; ?>">
</td>
</tr>
<tr><td><label>Area</label></td><td><input type="text" name="area_name" class="" id="rearea_name_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $pinkey->area_name;}} ?>"><input type="hidden" name="area_idd[]" class="rearea_id" id="rearea_id_<?php echo $i; ?>" value="<?php foreach($pincode_list as $pinkey){if($pinkey->id==$key1->area){echo $key1->area;}} ?>  "></td></tr>-->

<!--<tr><td><label style="font-weight: bold;">Add Contact</label></td><td></td></tr>
<tr>
<td><label>Contact Name</label></td><td><input type="text" name="contact_name[]" id="re_contact_name" class="contact_name" value="<?php echo $key1->contact_name; ?>"></td><td><label>Designation</label></td><td><input type="text" name="designation[]" class="designation" value="<?php echo $key1->designation; ?>"></td>
</tr>

<tr>
<td><label>Mobile</label></td><td><input type="text" name="mobiles[]" id="re_mobiles" class="mobile" value="<?php echo $key1->mobile; ?>"></td>
<td><label>Email Id</label></td><td><input type="text" name="emails[]" id="re_emails" class="email" value="<?php echo $key1->email_id; ?>"></td>
</tr>-->


<h4><strong>Add Contact</strong></h4><br>
<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Contact Name</label>
<input type="text" name="contact_name[]" id="re_contact_name" class="contact_name contname" maxlength="50" value="<?php echo $key1->contact_name; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Designation</label>
<input type="text" name="designation[]" class="designation design"  maxlength="80" value="<?php echo $key1->designation; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Mobile</label>
<input type="text" name="mobiles[]" id="re_mobiles" class="mobile add-mobile"  maxlength="15" value="<?php echo $key1->mobile; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Email ID</label>
<input type="text" name="emails[]" id="re_emails" class="email add-email" value="<?php echo $key1->email_id; ?>">
<div class="add-emailerror"></div>
</div>

</div>

</div>
<?php } $i++; } ?>
</table>
<input type="hidden" id="countid" name="countid" value="<?php echo $i; ?>">
<br/><br/>


<a class="link" id="addMoreRows" >Add Service & Contact</a><button class="btn cyan waves-effect waves-light " type="submit" id="submit">Submit
                              
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
  
  <script type='text/javascript'>
$(function(){
    var tbl = $(".lastdiv");
 var i = 1;   
    $("#addRowBtn").click(function(){
        $('<div class="col-md-12"><div class="col-md-3 col-sm-6 col-xs-12"><select id="route" name="lab_name[]" class="form-control1 myroute "><option value="">Select lab</option><?php foreach($lab as $roww){?><option value="<?php echo $roww->id;?>"><?php echo $roww->lab_name;?></option> <?php } ?></select><div id="customer_name_error" style="color:red;"></div></div><div class="col-md-3 col-sm-6 col-xs-12"><input type="text" class="form-control" name="lab_value[]"/><input type="hidden" name="lab_id[]" value=""></div><div class="col-md-3 col-sm-6 col-xs-12"><a class="btn btn-danger delbutton delRowBtn"><i class="fa fa-trash" aria-hidden="true" style="color: #5d2e81;"></i></a></div></div>').appendTo(tbl); 
			
    });
	
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });    
    
});
</script>

<script>
$(document).ready(function(){
   $('#billingtoo').click(function(){
   if ($(this).is(":checked")) {
	var id = $(this).val();
	var i=1;
	var cid="#re-pincod_"+i;
	var z_id = $('#service_zone').val();
	   var arr = z_id.split('-');
	   var zonid = arr['0'];
	
	//alert(cid);
	var stateid = $('#state').val();
	var sarr = stateid.split('-');
	   var sid = sarr['1'];
	$('#billingtoo').val(1);
	$('#re_address').val($('#address').val()).css('background-color','#eee').prop('readonly', true);
	$('#re_address1').val($('#address1').val()).css('background-color','#eee').prop('readonly', true);
	$('#re_city').val($('#search-box').val()).css('background-color','#eee').prop('readonly', true);
	$('#re_state').val(sid).css('background-color','#eee').prop('disabled', true);
	$('#re-pincode_'+i).val($('#pincode').val()).css('background-color','#eee').prop('readonly', true);
	$('#rearea_name_'+i).val($('#area_name').val()).css('background-color','#eee').prop('readonly', true);
	$('#rearea_id_'+i).val($('#area_id').val()).css('background-color','#eee').prop('readonly', true);
	$('#re_contact_name').val($('#customer_name').val()).css('background-color','#eee').prop('readonly', true);
	$('#re_emails').val($('#email').val()).css('background-color','#eee').prop('readonly', true);
	$('#re_mobiles').val($('#mobile').val()).css('background-color','#eee').prop('readonly', true);
	$('#service_zone_loc_'+i).val(zonid).css('background-color','#eee').prop('disabled', true);
	 
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
		
		 } else { var i=1;
		 $('#billingtoo').val(0);
                $("#re_address").val(" ").css('background-color','#fff').prop('readonly', false);
				 $("#re_address1").val(" ").css('background-color','#fff').prop('readonly', false);
				  $("#re_city").val(" ").css('background-color','#fff').prop('readonly', false);
				   $('#re-pincode_'+i).val("").css('background-color','#fff').prop('readonly', false);
				    $('#rearea_name_'+i).val(" ").css('background-color','#fff').prop('readonly', false);
					 $("#rearea_id").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_contact_name").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_emails").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_mobiles").val(" ").css('background-color','#fff').prop('readonly', false);
					  $("#re_state").val(0).css('background-color','#fff').prop('disabled', false);
					  $('#service_zone_loc_'+i).val(0).css('background-color','#fff').prop('disabled', false);
            }
        });
   });
 
</script>

<script type='text/javascript'>//<![CDATA[ 
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
    f.re_address.value = f.address.value;
	 f.re_address1.value = f.address1.value;
    f.re_city.value = f.city.value;
	f.re_state.value = f.state.value;
	f.re_pincode.value = f.pincode.value;
  }
 
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

/*function selectCountry(val) { 
$("#re_city").val(val);
$("#suggesstion-box1").hide();
}*/
</script>
  
  
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
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
		
		/*$(".mobile,.landline,.add-mobile,.pin").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^0-9-]/g,'') );
		});*/
		
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
					"font-size":"11px",
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

  <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  -->  

    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var jQuery_2_1_1 = $.noConflict(true);
		</script>
		<!--<script>
$(document).ready(function(){
   $('#address').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#re_address').val($('#address').val());
   }
   });
   $('#address1').change(function(){
   if ($('#billingtoo').val() ==1) {
	  $('#re_address1').val($('#address1').val());
   }
   });
   $('#search-box').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#re_city').val($('#search-box').val());
   }
   });
  $('#pincode').change(function(){
	   //var i=1;
   if ($('#billingtoo').val() ==1) {
	   $('#re-pincode_1').val($('#pincode').val());
	   
   }
   });
  /* $('#area_name').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#rearea_name_1').val($('#area_name').val());
   }
   });*/
   $('#area_id').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#rearea_id').val($('#area_id').val());
   }
   });
   $('#customer_name').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#re_contact_name').val($('#customer_name').val());
   }
   });
   $('#email').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#re_emails').val($('#email').val());
   }
   });
   $('#mobile').change(function(){
   if ($('#billingtoo').val() ==1) {
	   $('#re_mobiles').val($('#mobile').val());
   }
   });
   $('#service_zone').change(function(){ 
   if ($('#billingtoo').val() ==1) {
	   $('#service_zone_loc_1').removeAttr('disabled');
	   var z_id = $(this).val();
	   var arr = z_id.split('-');
	   var zonid = arr['0'];
		var zone_id = arr['1'];
		var zone_coverage = arr['2'];
		//alert(zone_coverage);
		$('#service_zone_loc_1 option').each(function(){
			
				 $('#service_zone_loc_1').val(zonid).prop('disabled', true);
			
       
		
   });
   }
   });
    });
 
</script>
<script>
$(document).ready(function(){
	$('#state').change(function(){ 
 var i=1;
 var check=$('#billingtoo').val();
 if(check == 1){
    $('#re_state').removeAttr('disabled');
	//$('#service_zone_loc_'+i).removeAttr('disabled');
	   var z_id = $(this).val();
	   
		$('#re_state option').each(function(){
		
				 $('#re_state').val(z_id).prop('disabled', true);
		
		
		});
 }
	});
});
</script>-->
	
	
  
		
		
		
</body>

</html>