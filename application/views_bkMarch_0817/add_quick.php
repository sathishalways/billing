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

<script>
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
</script>

<script type='text/javascript'>//<![CDATA[ 
function FillBilling(f) {
  if(f.billingtoo.checked == true) { alert(f.search-box.value);
    f.re_address.value = f.address.value;
	 f.re_address1.value = f.address1.value;
    f.re_city.value = f.search-box.value;
	f.re_state.value = f.state.value;
	f.re_pincode.value = f.pincode.value;
  }
 
}

</script>

<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var customer_id = document.frmCust.customer_id.value,
   customer_name = document.frmCust.customer_name.value,
   cust_type = document.frmCust.cust_type.value,
   service_zone = document.frmCust.service_zone.value,
   pincode = document.frmCust.pincode.value,
   land_ln = document.frmCust.land_ln.value,
   mobile = document.frmCust.mobile.value;
   //email = document.frmCust.email.value;
	 
  
   
 if( customer_id == "" )
   { 
    document.frmCust.customer_id.focus() ;
	document.getElementById("errorBox").innerHTML = "enter the customer id.";
     return false;
   }
   if( customer_name == "" )
   {
     document.frmCust.customer_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name";
     return false;
   }
   if( pincode == "" )
   {
     document.frmCust.pincode.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the pincode";
     return false;
   }
   
   if( cust_type == "" )
   {
     document.frmCust.cust_type.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer type";
     return false;
   }
   if( service_zone == "" )
   {
     document.frmCust.service_zone.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the service zone";
     return false;
   }
 
  
   if( mobile == "" && land_ln == "")
   {
     document.frmCust.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile / landline";
     return false;
   }
  /* if( email == "" )
   {
     document.frmCust.email.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email";
     return false;
   } */
   if(service_zone != "")
   { //alert("Hi1");
			var mob = $('#mobile').val();
			var customer_name = $('#customer_name').val();
			var cust_idd = $('#cust_idd').val();
			var cust_idd = $('#cust_idd').val();
			var email = $('#email').val();
			var cust_loc = $('#cust_loc').val();
			var address = $('#address').val();
			var address1 = $('#address1').val();
			
			parent.setSelectedUser(mob,customer_name,cust_idd,email,cust_loc,address,address1);
			//parent.$.fancybox.close();
   }
   
  
}

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
 </style>

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

.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}

.dropdown-content {
    display: none;
}
h5 {
    font-size: 22px;
    border-bottom: 1px solid #055E87 !important;
    text-align: center;
    width: 230px;
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
.box{          

            display: none;

         

          box-shadow:none !important;

        }
		.del
		{
			display:block;
		}
</style>

<script>
$(document).ready(function(){
$('.del').keyup(function() { 
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

});


});
</script>


<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Add Customer Details</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                 <form action="<?php echo base_url(); ?>customer/add_customer_quick" method="post" name="frmCust" onsubmit="return frmValidate()" autocomplete="off">
                               
<div id="errorBox"></div>
<table class="tableadd">

<tr>
<td><label>Type Of Customer<span style="color:red;">*</span></label></td>
<td>
 <select name="cust_type" id="cust_type">
  <option value="">---Select---</option>
	<?php foreach($customer_type as $custtypekey){ ?>
			<option value="<?php echo $custtypekey->id.'-'.$custtypekey->type; ?>"><?php echo $custtypekey->type; ?></option>
		   <?php } ?>
</select>
</td>
<td><label>Customer ID<span style="color:red;">*</span></label></td><td><input type="text" name="customer_id" id="customer_id" class="customer"value="<?php echo $cnt; ?>" readonly><input type="hidden" name="cust_idd" id="cust_idd" class="customer"value="<?php echo $cnt; ?>" readonly><input type="hidden" name="cust_loc" id="cust_loc" class="customer" value="<?php echo $cust_loc_cnt; ?>" readonly></td>
</tr>

<tr>

<td><label>Customer Name</label></td><td><input type="text" name="customer_name" id="customer_name" class="" ></td>

<td><label>Pincode<span style="color:red;">*</span></label></td><td><input type="text" name="pincode" id="pincode" class="pincode"></td>

</tr>
<tr>
<td><label>Area</label></td><td><input type="text" name="area_name" class="" id="area_name"><input type="hidden" name="area_id" class="" id="area_id"></td>
<td><label>Service Zone<span style="color:red;">*</span></label></td>
<td>
 <select name="service_zone" id="service_zone">
  <option value="">---Select---</option>
	<?php foreach($service_zone as $zonekey){ ?>
			<option value="<?php echo $zonekey->id.'-'.$zonekey->serv_loc_code.'-'.$zonekey->zone_coverage; ?>"><?php echo $zonekey->service_loc; ?></option>
		   <?php } ?>	
</select>
</td>
<input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="contact_name">
<!--<td><label>Mobile No<span style="color:red;">*</span></label></td><td><input type="text" name="mobile" id="mobile" class="mobile"></td>-->
</tr>
<tr>
<td ><label class="del box">Mobile No<span style="color:red;">*</span></label>
<label class="ready box">Landline No<span style="color:red;">*</span></label>
</td>

<td ><input type="text" name="mobile" id="mobile" class="del box">
<input type="text" name="land_ln" id="land_ln" class="ready box">
</td>
<td><label>Email Id</label></td><td><input type="text" name="email" id="email" class="email"></td>

</tr>
<tr>
<td><label>Address</label></td><td><input type="text" name="address" id="address" class="adress"></td>
<td><label>Address 1</label></td><td><input type="text" name="address1" id="address1" class="adress1"></td>
</tr>


</table>
<button class="btn cyan waves-effect waves-light rowadd" type="submit" >Add Customer
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
$('#pincode').keyup(function() { 
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

	 <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	 
	
	 
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var jQuery_2_1_1 = $.noConflict(true);
		</script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script>
$(document).ready(function(){
   $('#cust_type').change(function(){ //alert("hii");
	    var cust_type_id = $(this).val();
		var land = cust_type_id.split('-');
		var id = land['0'];
		var corp = land['1'];
		//alert(id+"_"+corp);
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
   
   if(document.getElementById('cust_type').selectedIndex == 0){
	   alert("Kindly Select Customer Type first");
   }else{
	   
	   var z_id = $(this).val();
	   var arr = z_id.split('-');
		var zone_id = arr['1'];
		var zone_coverage = arr['2'];
		$('#service_loc_coverage').val(zone_coverage);
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
	$(document).ready(function() {
		$('#custttt').click(function() {
			var mob = $('#mobile').val();
			var customer_name = $('#customer_name').val();
			var cust_idd = $('#cust_idd').val();
			var cust_idd = $('#cust_idd').val();
			var email = $('#email').val();
			
			parent.setSelectedUser(mob,customer_name,cust_idd,email);
			parent.$.fancybox.close();
    });
});
  
  </script>
</body>

</html>