
<script type='text/javascript'>

//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('   <table  class="tableadd" ><label style="color: black;    font-size: 15px;    font-weight: bold; margin-bottom:20px;">Add Product</label>  <tr>  <td><label>Serial No</label></td> <td>  <select>  <option>---Select---</option>  <option>12344</option>  <option>34546</option>  <option>456456</option>  <option>34657</option>  </select>  </td><td><label>Category</label></td><td ><select >            <option value="">---Select---</option>           <option value="Motorola">Air Conditioner</option>		  <option value="Sony Ericsson">Television</option>		   <option value="Nokia">Digital Camera</option>		    <option value="Apple">Mobile Phone</option>           <option value="Samsung">Cash Counting Machine</option>		    <option value="Samsung">Washing Machine</option>          </select></td>    </tr><tr><td><label>SubCategory</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Subcategory 1</option>		  <option value="Sony Ericsson">Subcategory 2</option>		   <option value="Nokia">Subcategory 3</option>		    <option value="Apple">Subcategory 4</option>           <option value="Samsung">Subcategory 5</option>  </select></td><td ><label>Brand Name</label></td><td style="width:200px;"><select >            <option value="">---Select---</option>           <option value="Motorola">Brand 1</option>		  <option value="Sony Ericsson">Brand 2</option>		   <option value="Nokia">Brand 3</option>		    <option value="Apple">Brand 4</option>           <option value="Samsung">Brand 5</option> </select></td></tr> <tr> <td><label>Model</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Model 1</option>		  <option value="Sony Ericsson">Model 2</option>		   <option value="Nokia">Model 3</option>		    <option value="Apple">Model 4</option>           <option value="Samsung">Model 5</option>          </select></td><td><label>Warranty Date</label></td><td><input id="datepicker2" type="text" name="datepicker"></td></tr> <tr> <td><label>Machine Status</label></td> <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Site</label></td>    <td><select><option>---Select---</option><option>OnSite</option><option>OffSite</option></select></td></tr> <tr> <td><label>Service Type</label></td>  <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Service Category</label></td>    <td><select><option>---Select---</option><option>Installation</option><option>General</option><option>Extra Fitting</option><option>Major</option></select></td></tr>  <tr>  <td><label>Zone</label></td>  <td><select><option>---Select---</option><option>Chennai</option><option>Bangalore</option><option>Trichy</option><option>Kilpauk</option></select></td><td><label>Problem</label></td>    <td><select><option>---Select---</option><option>Repair</option><option>Problem 1</option><option>Problem 2</option><option>Problem 3</option></select></td></tr>   <tr>   <td><label>Assign To</label></td>   <td><select><option>---Select---</option><option>Vishnu</option><option>Suresh</option><option>Manikandan</option><option>Bala</option></select></td></tr><tr><td><label style="font-weight:bold;">Received</label></td>   </tr>  </table>   <table style="margin-bottom: 40px;"><tr><td><ul class="recei"><li><label>Charger</label></li><li><label>Data Cable</label></li><li><label>Battery</label></li><li><label>Headset</label></li><li><label>Cover</label></li></ul></td></tr><tr><td><ul class="recei"><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li></ul></td></tr></table> ').appendTo(tbl);   
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 

/* $(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
});
}); */
	
    
});
});//]]>  

</script>

<style>
select {
    background-color: rgba(255, 255, 255, 0.9);
    width: 100%;
    padding: 5px;
    border: 1px solid black;
    border-radius: 2px;
    height: 36px;
}
body{background-color:#fff;}
.tableadd2 tr td input {
    border-radius: 5px;
    height: 33px;
    margin-top: 17px;
    width: 85px;
    margin-left: 3px;
    margin-right: 3px;
}
.tableadd2 tr td select {
    width: 95px;
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
    margin: 0px 1px;
    box-sizing: border-box;
    -moz-appearance: none;
    border-radius: 5px;
}
section h2{
			color:#6C217E;
		}
		/*.cyan {
    background-color: #6c477d !important;
}*/
.rowadd:hover{
	background:#8868a0 !important;
	color:#fff !important;
}
.select2-container{
	width:100% !important;
}
.select2-container-multi .select2-choices .select2-search-choice {
    padding: 3px 5px 3px 16px !important;
    margin: 3px 0 3px 5px;
    position: relative;
    line-height: 13px;
    width: auto !important;
    color: #333;
    cursor: default;
    border: 1px solid #aaaaaa;
    border-radius: 3px;
    -webkit-box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
    background-clip: padding-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #e4e4e4;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#f4f4f4', GradientType=0);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eee));
    background-image: -webkit-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
    background-image: -moz-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
    background-image: linear-gradient(to top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
}
.select2-container-multi .select2-choices .select2-search-choice > div{
	font-size:0.8em;
}
.btn, .btn-large, .btn-flat {
    text-transform: none !important;
 
}
.chosen-container .chosen-drop {
    position: absolute;
    width: 91% !important;
}
</style>


	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">



<script type='text/javascript'>//<![CDATA[ 
/* window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });

}//]]>   */

</script>
<style>
.tableadd tr td input {
    width: 210px !important;
}
.recei li
{
	float:left;
	width:100px;
}
.recei li label
{
	font-size: 14px;
    font-weight: normal;
    color: #000;
    line-height: 4;
}
.tableadd tr td input {
  
    height: 50px;
}
#errorBox{
 color:#F00;
 }
.rowadd {
    /*border: 1px solid #055E87 !important;
    background: #055E87 none repeat scroll 0% 0% !important;*/
    padding: 4px;
    border-radius: 5px;
    color: #FFF;
    font-weight: bold;
    font-family: calibri;
    font-size: 15px;
 
	float:right;
}
/*.cyan:hover{
	color:transparent !important;
}*/
.box{

            padding: 10px;

            display: none;

          box-shadow:display;
background-color:rgba(221, 221, 221, 0.22) !important;
        }
		
.box21{
		    padding: 20px;

            display: none;

            margin-top: 20px;

          box-shadow:none !important;

        }

		input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: #fff;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    /* outline: none; */
    /* height: 3.9rem; */
    width: 100%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
textarea.materialize-textarea {
    background-color: #fff;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    /* outline: none; */
    /* height: 3.9rem; */
    width: 120%;
	height:100px;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}

		</style>
<script>
$(document).ready(function(){
   $('#cust_name').change(function(){
	 $("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 
   var id = $(this).val();
   //alert(id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_custbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id)
		   
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_modelnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#modelid').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#modelid').append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
} 
});


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serials",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
		if(data.serial_no.length > 0){
			$('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		}
            
            });
} 
});


   });
 });
</script>

<!--new-->
<script>
$(document).ready(function(){
   $('#cust_namee').change(function(){
	 $("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 
  // var id = $(this).val();
   var id = $('#customer_name').val();
  //alert(id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_custbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id)
		   
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_modelnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#modelid').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#modelid').append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
} 
});


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serials",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
		if(data.serial_no.length > 0){
			$('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		}
            
            });
} 
});


   });
 });
</script>
<!--new end -->


<script>
$(document).ready(function(){
   $('#modelid').change(function(){
	 $("#serialno > option").remove(); 
	 $("#service_cat > option").remove();
	$("#probi > option").remove();
   var id = $(this).val();
   //alert(id);
   var cust_id = $('#customer_id').val();
   //alert(cust_id);
   var dataString = 'id='+id+'&cust_id='+cust_id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serialnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		if(data.serial_no.length > 0){
			$('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		}
		   
    });

} 
});


$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_orderbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 		
	$.each(data, function(index, data){
			/* if(data.warranty_date.length > 0){
				//$("#warranty_date").removeAttr("disabled"); 
				$('#warranty_date').val(data.warranty_date);
			}else{
				$("#warranty_date").attr("disabled", "disabled"); 
			}
			
			if(data.amc_type.length > 0){
				$('#machine_status').val(data.amc_type);
			}else{
				$('#machine_status').val(data.machine_status);
			} */
			
		   $('#category').val(data.product_category),
		   $('#categoryid').val(data.category),
		   
		   $('#subcategory').val(data.subcat_name),
		   $('#subcategoryid').val(data.subcategory),
		   
		   $('#brandname').val(data.brand_name),
		   $('#brandid').val(data.brand),
		   $('#model').val(data.model);
		   //$('#machine_status').val('Chargeable');
		   
    });

} 
});









/*

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_probcatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 		
$('.select2-search-choice').remove();
$('.probi').val(data.prob_catid);
        $('.probi').trigger("chosen:updated");

$('#probi').append("<option value='others'>Others</option>");
	$.each(data, function(index, data){ 
	var rrr = "Others";
	
		   $('#probi').append("<option value='"+data.prob_catid+"'>"+data.prob_category+"</option>");
		   
		   
    });


} 
}); */
    
	//alert('dddd');
	var urk = $("#urlget").val();
	var urks = $("#modelid").val();
	//alert(urk);
        function split( val ) {
            return val.split( /,\s*/ );
        }
        function extractLast( term ) {
            return split( term ).pop();
        }
        
        $( "#skills" ).bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
                $( this ).autocomplete( "instance" ).menu.active ) {
                event.preventDefault();
            }
        })
		
		
        .autocomplete({
            minLength: 1,
            source: function( request, response ) {
                // delegate back to autocomplete, but extract the last term
                $.getJSON(urk+"service/autocomp/"+urks, { term : extractLast( request.term )},response);
				
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
			
                // remove the current input
                terms.pop();
				
                // add the selected item
                terms.push( ui.item.value );
                //terms.push( ui.item.id );
					
				
				//alert(terms.push( ui.item.id ));
                // add placeholder to get the comma-and-space at the end
                terms.push( "" );
                this.value = terms.join( "," );
                return false;
            }
        });
		
		
		
//alert(dataString);
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_servicecatbyid1",
data: dataString,
cache: false,
success: function(data) 
{ 	//alert (data);
//exit;
	$('#service_cat').append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   $('#service_cat').append("<option value='"+data.sercat_id+"-"+data.service_category+"'>"+data.service_category+"</option>");
		   
    });

} 
});
   });
 });
</script>


<script>
$(document).ready(function(){
   $('#serialno').change(function(){//alert("ddddd");
   var id = $(this).val();
   var dataString = 'serialno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_orderbyid",
data: dataString,
cache: false,
success: function(data) 
{ 		
	$.each(data, function(index, data){
			if(data.prev_main.length > 0){
				//$("#warranty_date").removeAttr("disabled"); 
				$('#warranty_date').val(data.prev_main);
			}else{
				$("#warranty_date").attr("disabled", "disabled"); 
			}
			$('#machine_status').val(data.machine_status);
			
			/*if(data.amc_type.length > 0){
				$('#machine_status').val(data.amc_type);
			}else{
				
				$('#machine_status').val(data.machine_status);
			}*/
			
    });

} 
});

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
url: "<?php  echo base_url(); ?>service/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table1').append(result);
} 
});

});
  
});
</script>
<!--<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 //alert(document.frmService.serial_no.value);
 var req_id = document.frmService.req_id.value,
   customer_name = document.frmService.customer_name.value,
   br_name = document.frmService.br_name.value,
   mobile = document.frmService.mobile.value,
   //email_id = document.frmService.email_id.value,
   datepicker = document.frmService.datepicker.value,
   service_type = document.frmService.service_type.value,
   assign_to = document.frmService.assign_to.value,
   modelid = document.frmService.modelid.value;
   //site = document.frmService.site.value;
   
  
 if( req_id == "" )
   {
     document.frmService.req_id.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the request ID.";
     return false;
   }
   if( customer_name == "" )
   {
     document.frmService.customer_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name";
     return false;
   }
   if( br_name == "" )
   {
     document.frmService.br_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the branch name";
     return false;
   }
   if( mobile == "" )
   {
     document.frmService.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   /* if( email_id == "" )
   {
     document.frmService.email_id.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email id";
     return false;
   } */
   
   if( datepicker == "" )
   {
     document.frmService.datepicker.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the request date";
     return false;
   }
   if( service_type == "" )
   {
     document.frmService.service_type.focus();
	 document.getElementById("errorBox").innerHTML = "select the service type";
     return false;
   }
   
   if( modelid == "" )
   {
     document.frmService.modelid.focus();
	 document.getElementById("errorBox").innerHTML = "select the model";
     return false;
   }
   
  /* if( serial_no == "" )
   {
     document.frmService.serial_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "select the serial no";
     return false;
   }  */
   
   if(document.getElementById("serialno").value==''){
		document.frmService.serialno.focus() ;
		document.getElementById("errorBox").innerHTML = "select the serial no";
		return false;
   }
   
   if( assign_to == "" )
   {
     document.frmService.assign_to.focus();
	 document.getElementById("errorBox").innerHTML = "select the Engineer";
     return false;
   }
   
   
   
}

</script>-->
<script>
   $(function(){
   $( "form" ).submit(function( event ) {
   
   
   if ( $( "#reqid" ).val() === "" ) {
	$( "#reqid_error" ).text( "Enter the Request ID" ).show();
    event.preventDefault();
  }

/*if ( $( "#customer_name" ).val() === "" ) {
	$( "#customer_name_error1" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }*/

   //alert($("#assign_to").val());
  if ($("#assign_to").val() == "" || $("#assign_to").val() ==null){

		$("#assign_error" ).text( "Select the Assign To" ).show();
		event.preventDefault();
  }
  
  
   if ( $( "#br_name" ).val() == "" ) {
	   //alert("sdasdasd")
	$( "#br_name_error" ).text( "Select the Branch Name" ).show();
    event.preventDefault();
  }

   if ( $( "#mobile" ).val() == "" ) {
     
    $( "#mobile_error" ).text( "Enter the Mobile Number" ).show();
    event.preventDefault();
  } 
  
   if ( $( "#service_type" ).val() == "" ) {
	$( "#service_type_error" ).text( "Select the Service Type" ).show();
    event.preventDefault();
  }

 if ( $( "#modelid" ).val() == "" ) {
	$( "#modelid_error" ).text( "Select the Model" ).show();
    event.preventDefault();
  } 
  
   if ( $( "#serialno" ).val() == "" ) {
	$( "#serialno_error" ).text( "Select the Serial No." ).show();
    event.preventDefault();
  } 
  
     if ( $( "#datetimepicker7" ).val() == "" ) {
	$( "#date_error" ).text("Enter the Requested Date").show();
    event.preventDefault();
  } 
  
 if ( $( "#site" ).val() == "" ) {
	$( "#site_error" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }  
});
});
   </script>
   
<script>
    $(function(){
	
			
		$("#reqid").keyup(function(){
			if($(this).val()==""){
			    $("#reqid_error").show();
			}
			else{
				$("#reqid_error").hide();
			}
		});
		
		$("#customer_name").change(function(){
			if($(this).val()==""){
				$("#customer_name_error1").show();
			}
			else{
				$("#customer_name_error1").fadeOut();
			}
		});
		
		
		/* $("#mobile").keyup(function(){
			
			if($(this).val()==""){
			    $("#mobile_error").show();
			}
			else{
				$("#mobile_error").hide();
			}
		}); */
		
		$("#br_name").change(function(){
			if($(this).val()==""){
			    $("#br_name_error").show();
			}
			else{
				$("#br_name_error").hide();
				$("#mobile_error").hide();
			}
		});
		
		$("#service_type").change(function(){
			if($(this).val()==""){
			    $("#service_type_error").show();
			}
			else{
				$("#service_type_error").hide();
			}
		});
		$("#assign_to").change(function(){
			if($(this).val()==""){
			    $("#assign_error").show();
			}
			else{
				$("#assign_error").hide();
			}
		});

		$("#modelid").change(function(){
			if($(this).val()==""){
			    $("#modelid_error").show();
			}
			else{
				$("#modelid_error").hide();
			}
		});
		
		
		$("#serialno").change(function(){
			if($(this).val()==""){
			    $("#serialno_error").show();
			}
			else{
				$("#serialno_error").hide();
			}
		});
		
		
		
		$("#datetimepicker7").change(function(){
			if($(this).val()==""){
			    $("#date_error").show();
			}
			else{
				$("#date_error").hide();
			}
		});
				$("#site").change(function(){
			if($(this).val()==""){
			    $("#site_error").show();
			}
			else{
				$("#site_error").hide();
			}
		});
		$("#blank_app").bind("keyup blur", function(){
			 $(this).val( $(this).val().replace(/[^0-9]/g,'') );
		});
			
	});
</script>
<!--<script>
$(document).ready(function(){
 alert("hii");
	$('#cust_namee').change(function(){
	alert("hh");
			if($(this).val()){
			    $("#cust_name").val('');
			}
			
		});
});
</script>-->




<script>
$(document).ready(function(){
$('#service_cat').change(function(){ 
	empid = $(this).val();
	//alert($(this).val());
	 //$empid = $(this).val()
	var arr = empid.split('-');
		var stamping = arr['1'];
		//alert(stamping);
		//alert($('#assign_to').val('12'));
    if(stamping == 'Stampings' || stamping == 'stampings' || stamping == 'Stamping' || stamping == 'stamping'){
		//var len = $('#assign_to > option').length;
		
		$('#assign_to option').each(function(){
			
        //alert("Value: "+this.value);
		stampid = this.value;
		var stid = stampid.split(',');
		var sid1 = stid['0'];
		var sid = stid['1'];
		
		if(sid=='1'){ //alert(sid1);
			$('#assign_to').val(stampid);
			//document.getElementById("assign_to").selectedIndex = sid1;
		}
        //alert("TEXT: "+$(this).text());
   });
		
		//alert($('#assign_to > option').length);
       // $('#assign_to').val('2');
    }
});



$("#site").change(function(){ 
			var site_val= $(this).val();
			//alert(site_val);
            if(site_val == 'Stamping'){ //alert("ssss");

                    $(".box").not(".ready").hide();
					$(".appoint").hide();
                    $(".ready").show();

             }
			else if(site_val == 'Customer Site'){
					$(".box21").not(".appoint").hide();
					$(".appoint").show();
					$(".ready").hide();
             }else{
					$(".box").hide();
					$(".box21").hide();		
			}
				
				
        });


});
</script>


<script>
$(document).ready(function(){
   $('#br_name').change(function(){
   var id = $(this).val();
   //alert(id);
   $("#serialno > option").remove(); 
   $("#modelid > option").remove();
   $("#assign_to > option").remove();   
   
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_branchbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		
		$('#mobile').val(data.mobile),
		$('#email_id').val(data.email_id),
		$('#address').val(data.address),
		$('#address1').val(data.address1)		
		   //$('#landlineno').val(data.landline)
		   //$('#zone').val(data.service_loc),
		  // $('#locid').val(data.service_zone_loc)
		   
            
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_cust_servicezone",
data: dataString,
cache: false,
success: function(data) 
{ 	//$('#assign_to').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){
				$('#zone').val(data.service_loc),
				$('#locid').val(data.service_zone_loc),
				$('#service_loc_coverage').val(data.zone_coverage)
				
				var emp_det = data.emp_details;
				//alert(emp_det);
				var emp_split = emp_det.split(','); 
				for(var i=0;i<emp_split.length;i++){
					var emp_spl = emp_split[i].split('-');
					
					'"+data.sercat_id+"-"+data.service_category+"'
					
					$('#assign_to').append("<option value='"+emp_spl[0]+"-"+emp_spl[2]+"'>"+emp_spl[1]+"</option>");
				}
				
				 
				 
            });
} 
});



$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serials",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
		  if(data.serial_no.length > 0){
			  //$('#serialno').append("<option value='"+data.serial_no+'-'+data.model_id+'-'+data.cat_id+'-'+data.subcat_id+'-'+data.brand_id+"'>"+data.serial_no+"</option>");
			  $('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
		  } 
            });
} 
});




var service_ty = $('#service_type').val();

if(service_ty!='soft_up' && service_ty!=''){
	$("#modelid > option").remove(); 
		$.ajax
	({
	type: "POST",
	url: "<?php  echo base_url(); ?>service/get_modelnos",
	data: dataString,
	cache: false,
	success: function(data) 
	{ 	$('#modelid').append("<option value=''>---Select---</option>");
			$.each(data, function(index, data){//alert(data.branch_name);
				$('#modelid').append("<option value='"+data.id+"'>"+data.model+"</option>");
				});
	} 
	});
}else{
	$('#modelid').append("<option value=''>---Select---</option>");
}



   });
 });
</script>

<script>
 function Sum() {
        var txtFirstNumberValue = document.getElementById('stamping_charge').value;
        var txtSecondNumberValue = document.getElementById('penalty').value;
		
		if(parseInt(txtSecondNumberValue)){
			var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
		}else{
			var result = parseInt(txtFirstNumberValue);
		}
		
		
        if(parseInt(result)){
            document.getElementById('tot_charge').value = result;
        }else{
			document.getElementById('tot_charge').value = '';
		}
}
</script>


<script>
$(document).ready(function(){
   $('#service_type').change(function(){
   
   var id = $(this).val();
   if(id=='soft_upp'){
		$("#modelid > option").remove(); 
		$('#modelid').append("<option value='multiple'>Multiple</option>");
		
		$('#category').val('Multiple');
		$('#categoryid').val('Multiple');
		
		$('#subcategory').val('Multiple');
		$('#subcategoryid').val('Multiple');
		
		$('#brandname').val('Multiple');
		$('#brandid').val('Multiple');
		
		$('#model').val('Multiple');
		
		$('#warranty_date').val('Multiple');
		
		$('#machine_status').val('Multiple');
		
		$("#service_cat > option").remove(); 
		$('#service_cat').append("<option value='4-Software Upgradation'>Software Upgradation</option>");
		
		$("#probi > option").remove(); 
		$('#probi').append("<option value='multiple'>Multiple</option>");
		
		
		
   }else{
	   
		$("#modelid > option").remove(); 
	   
	   var id = $("#br_name").val(); 
	   var dataString = 'id='+id;
   
	   $.ajax
		({
			type: "POST",
			url: "<?php  echo base_url(); ?>service/get_modelnos",
			data: dataString,
			cache: false,
			success: function(data) 
			{ 	$('#modelid').append("<option value=''>---Select---</option>");
					$.each(data, function(index, data){//alert(data.branch_name);
						$('#modelid').append("<option value='"+data.id+"'>"+data.model+"</option>");
						});
			} 
		});
	   
	   
	   
	   $('#category').val('');
	   $('#categoryid').val('');
	   
	   $('#subcategory').val('');
	   $('#subcategoryid').val('');
	   
	   $('#brandname').val('');
	   $('#brandid').val('');
		
	   $('#model').val('');
	   
	   $('#warranty_date').val('');
	   
	   $('#machine_status').val('');
	   
	   $("#service_cat > option").remove(); 
	   $('#service_cat').append("<option value=''>---Select---</option>");
	   
	   $("#probi > option").remove(); 
	   $('#probi').append("<option value=''>---Select---</option>");
	   
	   
   }
   var id = $(this).val();
   if(id=='Preventive'){
	   var dataString = 'id=preventive';
   
	   $.ajax
		({
			type: "POST",
			url: "<?php  echo base_url(); ?>service/get_preventive_id",
			data: dataString,
			cache: false,
			success: function(data) 
			{ 	
				$('#reqid').val(data);
			} 
		});
	   
   }else{
	   $('#reqid').val('<?php echo $cnt; ?>');
   }
 
   });
 });
</script>

















<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>New Request</h2>
<hr>         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
				</div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>service/add_service_req" method="post" name="frmService" id="form" onsubmit="return frmValidate()">
                     <div id="errorBox"></div>
				  
				 <!-- <div class="col-md-12" style="padding: 19px 0px 0px;
box-shadow: 0px 0px 10px rgb(167, 167, 167);">
				  <div class="col-md-1">
				  </div>
				  
				   <div class="col-md-3">
				  <div class="form-group">
				  <label class="form-control" style="border:none;">Customer Name</label>
				  </div>
				  </div>
				  
				     <div class="col-md-4">
				  <div class="form-group">
				 <select name="cust_name" id="cust_name" class="chosen-select pull-left">
			<option value="">---------------Select-------------</option>
			<?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' ( '.$customerkey->mobile.' ) '; ?></option>
		   <?php } ?>
</select>

				  </div>
				  </div>
				    <div class="col-md-1">
				   <div class="form-group">
<a href="javascript:;" id="fancybox-manual-b" class="rowadd pull-right">Add</a></div>
				  </div>
				   <div class="col-md-2">
				  </div>
				  
				  </div>-->
				  
<div class="col-md-12" style="padding:10px;
box-shadow: 0px 0px 10px rgb(167, 167, 167);margin-bottom:20px;">
<div class="col-md-3 col-sm-6 col-xs-12">
<label style="float:right;">Search Customer Name</label>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<select name="cust_name" id="cust_name" class="chosen-select pull-left custname1 productv cname">
			<option value="0">---------------Select-------------</option>
			<?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name.' ( '.$customerkey->mobile.' ) '; ?></option>
		   <?php } ?>
</select>

</div>



<div class="col-md-3 col-sm-6 col-xs-12">
<label style="float:right;">Search Serial No</label>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<select name="cust_namee" id="cust_namee" class="chosen-select pull-left custname2 productv ssn">
			<option value="0">---------------Select-------------</option>
			<?php foreach($list_serialnos as $serisll){ ?>
			<option value="<?php echo $serisll->order_id; ?>"><?php echo $serisll->serial_no; ?></option>
		   <?php } ?>
</select>

</div>







<div class="col-md-3 col-sm-6 col-xs-12">
<a href="javascript:;" id="fancybox-manual-b" class="rowadd pull-right cyan">Add</a>
</div>
</div>



<!--new-->


<!--newend-->



















<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12"><label>Request ID&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="req_id" class="form-control" id="reqid" value="<?php echo $cnt; ?>" readonly>
<div id="reqid_error" style="color:red;font-size: 11px;"></div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label style="align:center;">Customer Name</label>
<input type="text" name="customer_name" class="form-control" id="customer_name" readonly>
<input type="hidden" name="customer_id" class="" id="customer_id">
  <div id="customer_name_error1" style="color:red;font-size: 11px;"></div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Branch Name&nbsp;<span style="color:red;">*</span></label>
<select name="br_name" id="br_name" class="br_name" style="border: 1px solid #cccccc;">
<option value="">---Select---</option>
</select>
<div id="br_name_error" style="color:red;font-size: 11px;"></div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Mobile No.&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="mobile" id="mobile" class="form-control" readonly style="margin-bottom: 0px;">
<div id="mobile_error" style="color:red;font-size: 11px;"></div> 
</div>
</div>
<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12"><label>Email ID</label>
<input type="text" name="email_id" id="email_id" class="form-control" readonly><input type="hidden" name="status" id="status" class="" value="1" >
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address</label>
<input type="text" name="address" id="address" class="form-control" readonly></td>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Address 1</label>
<input type="text" name="address1" id="address1" class="form-control" readonly>
</div>
<div class="col-md-3 col-sm-6 col-xs-12" style="padding-top: 8px;">
<label >Requested Date&nbsp;<span style="color:red;">*</span>
<input id="datetimepicker7" type="text" name="datepicker" style="width:225px;font-size:12px;" class="form-control" value="<?php echo $req_date; ?>">
<div id="date_error" style="color:red;font-size: 11px;margin-top:-16px;"></div>
</div>
</div>
<div id="table1">
  <table  class="tableadd" >
  
  
<!--<label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Add Product</label>

 
 
  <tr>
  <td><label>Service Type&nbsp;<span style="color:red;">*</span></label></td>  <td>
<select name="service_type" id="service_type"> 
<option value="">---Select---</option>
<option value="AMC">AMC</option>
<option value="Out Of Warranty">Out Of Warranty</option>
<option value="Breakdown">Breakdown</option>
<option value="Preventive">Preventive Maintenance</option>
<option value="Demo">Demo</option>
<option value="Delivery">Delivery</option>
<option value="Installation">Installation</option>
<option value="soft_up">Software Upgradation</option>
<option value="Reverification">Reverification</option>

<option value="Stampings">Stampings</option>
</select>
</td>-->

   <!--<td><label>Model&nbsp;<span style="color:red;">*</span></label></td> <td>
 <select name="modelid" id="modelid">
  <option value="">---Select---</option>
		
  </select>
</td>

  
  
  <td><a href="javascript:;" id="fancybox-manual-c" class="rowadd">Add</a></td>
   
</tr>
<!--<tr>
<td><label>Serial No&nbsp;<span style="color:red;">*</span></label></td> <td>
  <select name="serial_no[]" id="serialno" multiple style="border-radius: 5px;height: 56px;">
  <option value="">---Select---</option>
		
  </select>
  </td>
<td><label>Category</label></td><td >
<input type="text" name="category" id="category" class="" readonly><input type="hidden" name="categoryid" id="categoryid" class="">
</td> 


</tr>
 
 <tr>
 <td><label>SubCategory</label></td> <td >
<input type="text" name="subcategory" id="subcategory" class="" readonly><input type="hidden" name="subcategoryid" id="subcategoryid" class="">
</td>
<td ><label>Brand Name</label></td><td style="width:200px;">
<input type="text" name="brandname" id="brandname" class="" readonly><input type="hidden" name="brandid" id="brandid" class=""><input type="hidden" name="model" id="model" class="">
</td>


</tr>
 
 <tr>
 <td><label>Warranty Date</label></td><td><input id="warranty_date" type="text" name="warranty_date" readonly></td>
 <td><label>Machine Status</label></td> <td><input id="machine_status" type="text" name="machine_status" readonly>
</td>


</tr>
<tr>
<td><label>Site&nbsp;<span style="color:red;">*</span></label></td>    <td>
<select name="site" id="site">
<option value="">---Select---</option>
<option value="Service Center">Service Center</option>
<option value="Customer Site">Customer Site</option>
<option value="Stamping">Stamping</option>
</select>
</td>
<!--<td><label>Service Category</label></td>    <td>
<select name="service_cat" id="service_cat">
<option value="">---Select---</option>

</select>
</td>
</tr>
 <tr class="ready box">
	<td><label><b>Year</b></label></td>
	<td>
		<select name="year">
			<option value="">---Select---</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
		</select>
	</td>
	<td><label><b>Quarter</b></label></td>
	<td>
		<select name="qtr">
			<option value="">---Select---</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select>
	</td>
	</tr>
	
	<tr class="ready box">
	<td><label><b>Kg</b></label></td>
	<td>
		<select name="kg">
			<option value="">---Select---</option>
			<option value="10GMTO10KG">10GM TO 10KG</option>
			<option value="11KGTO50KG">11KG TO 50KG</option>
			<option value="51KGTO500KG">51KG TO 500KG</option>
		</select>
	</td>
	<td><label><b>Received</b></label></td>
	<td>
		<select name="stamping_received[]" multiple style="height:60px; background-image:none;border: 1px solid #055E87; border-radius: 5px;">
			<option value="">---Select---</option>
			<option value="vcplate">VC Plate</option>
			<option value="vcpaper">VC Paper</option>
			<option value="bothplatepaper">Both VC Plate &amp; VC Paper</option>
		</select>
	</td>
	
	</tr>
	
	<tr class="ready box">
	<td><label><b>Stamping Charge</b></label></td>
	<td><input type="text" name="stamping_charge" id="stamping_charge" class="" onkeyup="Sum()"></td>
	<td><label><b>Agent Charge</b></label></td>
	<td><input type="text" name="agn_charge" id="agn_charge" class=""></td>
	
	</tr>
	
	<tr class="ready box">
	<td><label><b>Penalty</b></label></td>
	<td><input type="text" name="penalty" id="penalty" class="" onkeyup="Sum()"></td>
	<td><label><b>Conveyance Charge</b></label></td>
	<td><input type="text" name="conveyance_charge" id="conveyance_charge" class=""></td>
	
	</tr>
	<tr class="ready box">
		<td><label><b>Total Charge</b></label></td>
	<td><input type="text" name="tot_charge" id="tot_charge" class=""></td>
	</tr>-->



	
	<!--<tr class="appoint box21">
		<td><label><b>Appointment Time</b></label></td>
		<td><input type="text" name="app_time" id="datetimepicker71" class=""></td>
		
		<td><label><b>Addl. Engineer Name:</b></label></td>
		<td><select name="addl_engg_name" id="addl_engg_name">
			<option value="">---Select---</option>
			<?php foreach($employee_list as $empkey){
				
					/* if (preg_match("/\bStampings\b/i", $empkey->serv_category, $match)){
						$st = '1';
					}else{
						$st = '0';
					} */
				?>
						<option value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
					   <?php } ?>
			</select>
		</td>
	</tr>-->
 

  <!--<tr>
  
  <td><label>Zone</label></td>  <td>
<input type="text" name="zone" id="zone" class="form-control" readonly><input type="hidden" name="locid" id="locid" class=""><input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="">
</td>

<td><label>Problem</label></td>    <td>
<select name="probi[]" id="probi" class="probi" multiple style="border-radius: 5px;" >
<option value="">---Select---</option>
	
</select>
</td>
</tr>
   <tr>
   
   <td><label>Assign To</label></td>   <td>
<select name="assign_to" id="assign_to">
<option value="">---Select---</option>
<?php foreach($employee_list as $empkey){
	
		/* if (preg_match("/\bStampings\b/i", $empkey->serv_category, $match)){
			$st = '1';
		}else{
			$st = '0';
		} */
	?>
			<option value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
		   <?php } ?>
</select>
</td>

<td><label>Service Priority</label></td>    <td>
<select name="service_priority">
<option value="">---Select---</option>
<option value="Critical">Critical</option>
<option value="High">High</option>
<option value="Low">Low</option>
</select>
</td>
</tr>

<tr>


  <td><label>Blanket Approval</label></td><td><input type="text" name="blank_app" id="blank_app" class=""></td>-->
  <!--<td><label>Batch No</label></td><td><input type="text" name="batch_no" id="batch_no" class="" readonly></td>-->
  
  <!--<td><label >Received</label></td>   

<td>
	<select name="received[]" multiple style="height:100px; background-image:none;border: 1px solid #055E87; border-radius: 5px;">
            <option value="">---Select---</option>
			 <?php foreach($accessories_list as $acckey1){ ?>
			 <option value="<?php echo $acckey1->accessory; ?>"><?php echo $acckey1->accessory; ?></option>
		     <?php } ?>
    </select>
</td>-->
</tr>
<!--<tr>
	<td colspan="5">* Machine received w/o accessories</td>
</tr>-->
  </table>
  <div class="col-md-12" class="tableadd">
  <h4>Add Product</h4>
  <a href="javascript:;" id="fancybox-manual-c" class="rowadd cyan" style="margin-top: -30px;float: left;
    margin-left: 110px;">Add</a>
  <hr>
<div class="col-md-3 col-sm-6 col-xs-12"><label>Service Type&nbsp;<span style="color:red;">*</span></label>
<select name="service_type" id="service_type" style="border: 1px solid #cccccc;"> 
<option value="">---Select---</option>
<option value="AMC">AMC</option>
<option value="Out Of Warranty">Out Of Warranty</option>
<option value="Breakdown">Breakdown</option>
<option value="Preventive">Preventive Maintenance</option>
<option value="Demo">Demo</option>
<option value="Delivery">Delivery</option>
<option value="Installation">Installation</option>
<option value="soft_up">Software Upgradation</option>
<option value="Reverification">Reverification</option>
<option value="Application_issue">Application Issue</option>
<option value="RoutineVisit">Routine Visit</option>
<option value="To_hand_over_reagent_quote">To Hand Over Reagent/Quote</option>

<option value="Reinstallation">Reinstallation</option>
<option value="To_meet_hod">To Meet HOD</option>
<option value="Troubleshooting">Troubleshooting</option>
<option value="Training">Training</option>
<option value="Validation">Validation</option>
<option value="Weekly_maintenance">Weekly Maintenance</option>
<option value="LIS_connection_printerconnection">LIS Connection/Printer Connection</option>



<!--<option value="Stampings">Stampings</option>-->
</select>
<div id="service_type_error" style="color:red;font-size: 11px;"></div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Model&nbsp;<span style="color:red;">*</span></label>
<select name="modelid" id="modelid" style="border: 1px solid #cccccc;">
  <option value="">---Select---</option>
  </select>
  <div id="modelid_error" style="color:red;font-size: 11px;"></div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Serial No.&nbsp;<span style="color:red;">*</span></label>
<select name="serial_no" id="serialno" style="border-radius: 5px;border:1px solid #ccc;width:200px;">
  <option value="">---Select---</option>
  </select>
  <div id="serialno_error" style="color:red;font-size: 11px;"></div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Category</label>
<input type="text" name="category" id="category" class="form-control" readonly><input type="hidden" name="categoryid" id="categoryid" class="">
</div>
</div>

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Sub Category</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" readonly><input type="hidden" name="subcategoryid" id="subcategoryid" class="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Brand Name</label>
<input type="text" name="brandname" id="brandname" class="form-control" readonly><input type="hidden" name="brandid" id="brandid" class=""><input type="hidden" name="model" id="model" class="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Warranty Date</label>
<input id="warranty_date" type="text" name="warranty_date" class="form-control" readonly>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Machine Status</label>
<input id="machine_status" type="text" name="machine_status" readonly class="form-control">
</div>
</div>

<div class="col-md-12">

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Category</label>
<select name="service_cat" id="service_cat" style="border: 1px solid #cccccc;">
<option value="">---Select---</option>

</select>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Zone</label>
<input type="text" name="zone" id="zone" class="form-control" readonly><input type="hidden" name="locid" id="locid" class=""><input type="hidden" name="service_loc_coverage" id="service_loc_coverage" class="">
</div>


<!--
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Problem</label>
<select name="probi" id="probi" class="probi" multiple style="border-radius:2px;width:230px;" >
<option value="">---Select---</option>

</select>
</div> -->
  

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="ui-widget">
   <label>Problem</label>
    <input class="form-control" id="skills" name="skills" value="">
    
</div>
</div>


<input type="hidden" name="urlget" id="urlget" value="<?php echo base_url();?>">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Service Priority</label>
<select name="service_priority" style="border: 1px solid #cccccc;">
<option value="">---Select---</option>
<option value="Critical">Critical</option>
<option value="High">High</option>
<option value="Low">Low</option>
</select>
</div>

</div>
<!--<td><label>Problem</label></td>    
<td>
<select name="probi[]" id="probi" class="probi" multiple style="border-radius: 5px;" >
<option value="">---Select---</option>
	
</select>
</td>-->




<div class="col-md-12">




<!--<div class="col-md-3 col-sm-6 col-xs-12">
<label>Blanket Approval</label>
<input type="text" name="blank_app" id="blank_app" class="form-control" maxlength="30">
</div>-->

<div class="col-md-6 col-sm-6 col-xs-12">
<label>Assign To&nbsp;<span style="color:red;">*</span></label>
<select name="assign_to[]" id="assign_to" style="border: 1px solid #cccccc;" multiple placeholder="--select--">
	<!--<option value="">---Select---</option>-->
</select>
 <div id="assign_error" style="color:red;font-size: 11px;"></div>
</div>

<!--<div class="col-md-3 col-sm-6 col-xs-12 others">
<label>Problem</label>
<input type="text" name="blank_app" id="blank_app" class="form-control" maxlength="30">-->
</div>

</div>


<div class="col-md-12 appoint box">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Appointment Time</label>
<input type="text" name="app_time" id="datetimepicker71" class="form-control">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Addl. Engineer Name:</label>
<select name="addl_engg_name" id="addl_engg_name" style="border:1px solid #ccc;">
			<option value="">---Select---</option>
			<?php foreach($employee_list as $empkey){
				
					/* if (preg_match("/\bStampings\b/i", $empkey->serv_category, $match)){
						$st = '1';
					}else{
						$st = '0';
					} */
				?>
						<option value="<?php echo $empkey->id.'-'.$empkey->emp_mobile; ?>"><?php echo $empkey->emp_name.'- ('.$empkey->emp_id.')'; ?></option>
					   <?php } ?>
			</select>
</div>
</div>


<div class="col-md-12 tableadd">
<p>* Machine received w/o accessories</p>
<div class="col-md-3 col-sm-6 col-xs-12">
<label><b>Notes:</b></label>
<textarea type="text" name="notes" id="notes" class="materialize-textarea"></textarea>
</div>
</div>
<!--<table class="tableadd">
<tr>
<td> <label><b>Notes:</b></label></td><td><textarea type="text" name="notes" id="notes" class="materialize-textarea"></textarea></td>
</tr>
</table>-->

</div>

  

<button class="btn cyan waves-effect waves-light " type="submit" style="margin-right: 20px;position: relative;margin-left: 154px;">Submit</button>
							  <!--<a href="<?php echo base_url(); ?>pages/add_order"  class="cyan" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">New Order</a>
<!--<a id="addRowBtn" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Print Job Sheet</a>
<a href="<?php echo base_url(); ?>pages/dash" class="cyan" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Close</a>-->
<a href="<?php echo base_url(); ?>pages/service_req_list" class="cyan" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;"><b>Exit</b></a>





<table class="tableadd1" style="width: 80%;">
<!--<tr>
<td><label style="font-weight: bold;">Problem</label></td><td></td>
</tr>

<tr >
<th><label>Repair</label></th><th><label>Problem 1</label></th><th><label>Problem 2</label></th><th><label>Problem 3</label></th><th><label>Problem 4</label></th>
</tr>
<tr>
<td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td>
</tr>
<tr>
<td><label style="font-weight: bold;">Received</label></td><td></td>
</tr>

<tr >
<th><label>Charger</label></th><th><label>Data Cable</label></th><th><label>Battery</label></th><th><label>Head Set</label></th><th><label>Cover</label></th>
</tr>

<tr>
<td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td><td><input type="checkbox" class="" name=""></td>
</tr>

<tr>

<td style="padding-top: 25px;">
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>
</td>
</tr>-->

</table>        
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
 
	<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>

   <script>
		$(function(){
			$("#cust_namee").chosen();
		});
   </script>
<!--<script>
   var config = {
      '.chosen-select1'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select1'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>-->
  
 
  <!--<script type="text/javascript">
 
 $("#cust_namee").chosen().change(function()
{
	alert('ggggggggg');
	$("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 $("#br_name > option").remove(); 
	 
	 $('#modelid').append("<option value=''>---Select---</option>");
	 $('#serialno').append("<option value=''>---Select---</option>");
	 
	 $('#mobile').val('');
	 $('#email_id').val('');
	 $('#address').val('');
	 $('#address1').val('');
	 

});
$('.custname1').change(function(){
	alert('ffffffffff');
});


    var config = {
      '#cust_namee'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
	
	
	
	 var config = {
      '#cust_name'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
    }
  </script>-->
  
  
  
    <script type="text/javascript">
  $("#cust_name").chosen().change(function()
{
//	alert('dddddd');
	$("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 $("#br_name > option").remove(); 
	 $("#customer_name").val('');
	 $('#modelid').append("<option value=''>---Select---</option>");
	 $('#serialno').append("<option value=''>---Select---</option>");
	 $('#cust_namee_chosen > a.chosen-single > span').text("---------------Select-------------");
	 //$("#cust_namee").val('');
	 $('#mobile').val('');
	 $('#email_id').val('');
	 $('#address').val('');
	 $('#address1').val('');	
	 
   var id = $(this).val();
   var dataString = 'id='+id;   
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_custbyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){ //alert(data.mobile);
		   $('#customer_name').val(data.company_name),
		   $('#customer_id').val(data.id)
			   
    });
} 
});
$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_branchname",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#br_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){
			if(data.branch_name.length > 0){
				$('#br_name').append("<option value='"+data.id+"'>"+data.branch_name+"</option>");
			}else{
				$('#br_name').append("<option value='"+data.id+"'>"+'Head Office'+"</option>");
			}
			
            
            });
} 
});
});
    var config = {
      '#cust_name'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
  
  
  
  
  
  
  
  
      <script type="text/javascript">
  $("#cust_namee").chosen().change(function()
{
	$("#cust_name").hide();
	//alert('eeeeeee');
	$("#modelid > option").remove(); 
	 $("#serialno > option").remove(); 
	 $("#br_name > option").remove(); 
	 $("#customer_name").val('');
	 $('#modelid').append("<option value=''>---Select---</option>");
	 $('#serialno').append("<option value=''>---Select---</option>");
	 $('#cust_name_chosen > a.chosen-single > span').text("---------------Select-------------");
	 $("#cust_name").val('');
	 $('#mobile').val('');
	 $('#email_id').val('');
	 $('#address').val('');
	 $('#address1').val('');	
	 
	 
   var id = $(this).val();
  /////////// alert(id);
   var dataString = 'id='+id;   
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_custbyserialno",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){ //alert(data.mobile);
		   $('#customer_name').val(data.company_name),
		   $('#customer_id').val(data.customer_id)
			   
    });
} 
});
$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_branchnamee",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#br_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){
			if(data.branch_name.length > 0){
				$('#br_name').append("<option value='"+data.id+"'>"+data.branch_name+"</option>");
			}else{
				$('#br_name').append("<option value='"+data.id+"'>"+'Head Office'+"</option>");
			}
			
            
            });
} 
});
});
    var config = {
      '#cust_name'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
<!--<script>

var $= jQuery.noConflict();
//alert('dddd');
    $(function() {
	//alert('dddd');
	var urk = $("#urlget").val();
	var urks = '32';
	//alert(urk);
        function split( val ) {
            return val.split( /,\s*/ );
        }
        function extractLast( term ) {
            return split( term ).pop();
        }
        
        $( "#skills" ).bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
                $( this ).autocomplete( "instance" ).menu.active ) {
                event.preventDefault();
            }
        })
		
		
        .autocomplete({
            minLength: 1,
            source: function( request, response ) {
                // delegate back to autocomplete, but extract the last term
                $.getJSON(urk+"service/autocomp/"+urks, { term : extractLast( request.term )},response);
				
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
			
                // remove the current input
                terms.pop();
				
                // add the selected item
                terms.push( ui.item.value );
                //terms.push( ui.item.id );
					
				
				//alert(terms.push( ui.item.id ));
                // add placeholder to get the comma-and-space at the end
                terms.push( "" );
                this.value = terms.join( ", " );
                return false;
            }
        });
    });
    </script>-->
	
	
	

     <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>






   
  <!--<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"> -->
  
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



  
  
  
  
  
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     
	
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  
	  
	  
	  
  
  
  


<script type='text/javascript'>//<![CDATA[ 
/* window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });

}//]]>  */ 

</script>   




    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   
	   
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	

	
	

	<script>
$(document).ready(function(){
$.datetimepicker.setLocale('en');

$('#datetimepicker_mask').datetimepicker({
	mask:'9999-19-39 29:59'
});


var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('#datetimepicker7').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#datetimepicker71').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

});
</script>
	
	
<script>
var $= jQuery.noConflict();

$(document).ready(function() { 
	$("#fancybox-manual-b").click(function() { //alert("dsds");
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				//var pageload;
				var type='service';
				var _tmpvar;
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>customer/add_quick/'+type,
					type : 'iframe',
					padding : 5
				});
			});
			
	$("#fancybox-manual-c").click(function() { //alert("dsds");
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				var id=$('#customer_id').val();
				var bid=$('#br_name').val();
				//alert(bid);
				if(id !='' && bid !='' &&id !='0'){
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Order/add_sales_quick/'+id+'/'+bid,
					type : 'iframe',
					padding : 5
				});
				}else{alert('Ente the Customer Details && Branch Name');}
			});
			
});


function setSelectedUser(mobile,customer_name,cust_idd,email,cust_loc,address,address1) { //alert("JII");
	
	$("#br_name > option").remove(); 
	$('#br_name').append("<option value='"+cust_loc+"'>Head Office</option>");
	
	$('#mobile').val(mobile);
	$('#customer_name').val(customer_name);
	$('#customer_id').val(cust_idd);
	$('#email_id').val(email);
	$('#address').val(address);
	$('#address1').val(address1);
	
	//$('#customer_name').val(data.company_name),
		   //$('#customer_id').val(data.id)
	
}


function setSelectedSales(category,subcategory,brandname,service_loc,machine_status,warranty_date,category_name,subcategory_name,brand_name,service_loc_name,mod_id,model,serial_no,service_cat,service_loc_coverage,probi,type) {
	
	if(type=='Single'){
			if(probi!=null){
			$("#probi > option").remove();	
		
		var prob_arr = probi.toString().split(',');	
		
		$('.select2-search-choice').remove();
		$('.probi').val(prob_arr);
			$('.probi').trigger("chosen:updated");
		//$('#probi').append("<option value=''>---Select---</option>");
		$.each(prob_arr, function(index, prob_arr){
				var prob_catna = prob_arr.split('-');
				var prob_id = prob_catna['0'];
				var prob_catname = prob_catna['1'];
			   $('#probi').append("<option value='"+prob_id+"'>"+prob_catname+"</option>");
			   
		});
		}else{
			$("#probi > option").remove();	
			$('#probi').append("<option value=''>---Select---</option>");
		}
		
		//alert("HII: "+probi);
		//empid.split('-');
		if(service_cat!=null){
			$("#service_cat > option").remove();
			
			var arr = service_cat.toString().split(',');
		/* alert("ARRR: "+arr);
		var sercat = arr['0'];
		alert(sercat); */
		$('#service_cat').append("<option value=''>---Select---</option>");
		$.each(arr, function(index, arr){
				var ser_catna = arr.split('-');
				var serv_id = ser_catna['0'];
				var ser_catname = ser_catna['1'];
			   $('#service_cat').append("<option value='"+serv_id+"'>"+ser_catname+"</option>");
			   
		});
		}else{
			$("#service_cat > option").remove();	
			$('#service_cat').append("<option value=''>---Select---</option>");
		}
		
		
		
		
			
		$("#modelid > option").remove(); 
		$("#serialno > option").remove(); 
		
		$('#categoryid').val(category);
		$('#subcategoryid').val(subcategory);
		$('#brandid').val(brandname);
		$('#locid').val(service_loc);
		$('#machine_status').val(machine_status);
		
		if(machine_status != "Chargeable"){
			//$("#warranty_date").removeAttr("disabled"); 
			$('#warranty_date').val(warranty_date);
		}else{
			$("#warranty_date").attr("disabled", "disabled"); 
		}
		
		$('#category').val(category_name);
		$('#subcategory').val(subcategory_name);
		$('#brandname').val(brand_name);
		$('#zone').val(service_loc_name);
		$('#service_loc_coverage').val(service_loc_coverage);
		
		$('#model').val(model);
		
		//$('#modelid').val(mod_id);
		//alert("ID:"+mod_id+"Mdel:"+model);
		$('#modelid').append("<option value='"+mod_id+"'>"+model+"</option>");
		$('#serialno').append("<option value='"+serial_no+"'>"+serial_no+"</option>");
		
		//$('#customer_name').val(data.company_name),
			   //$('#customer_id').val(data.id)
	}else{
		
		$("#probi > option").remove(); 
		$('#probi').append("<option value='multiple'>Multiple</option>");
		
		
		$("#service_cat > option").remove(); 
		$('#service_cat').append("<option value='4-Software Upgradation'>Software Upgradation</option>");
		
		$("#modelid > option").remove(); 
		$('#modelid').append("<option value='multiple'>Multiple</option>");
		
		$("#service_type > option").remove(); 
		$('#service_type').append("<option value='soft_up'>Software Upgradation</option>");
		
		$('#category').val('Multiple');
		$('#categoryid').val('Multiple');
		
		$('#subcategory').val('Multiple');
		$('#subcategoryid').val('Multiple');
		
		$('#brandname').val('Multiple');
		$('#brandid').val('Multiple');
		
		$('#model').val('Multiple');
		
		$('#warranty_date').val('Multiple');
		
		$('#machine_status').val('Multiple');
		
		
		$('#zone').val(service_loc_name);
		$('#service_loc_coverage').val(service_loc_coverage);
		$('#locid').val(service_loc);
		
		
		if(serial_no!=null){
			$("#serialno > option").remove(); 
			//alert(serial_no);
			var arr = serial_no.toString().split(',');
			//alert("ARRR: "+arr);
		/* alert("ARRR: "+arr);
		var sercat = arr['0'];
		alert(sercat); */
		var inc = 0;
		
		$('#serialno').append("<option value=''>---Select---</option>");
		$.each(arr, function(index, arr){
			//alert("Hello: "+arr);
			var cat_arr = category.toString().split(',');
			var subcat_arr = subcategory.toString().split(',');
			var brandname_arr = brandname.toString().split(',');
			
			var model_arr = mod_id.toString().split(',');
			
			//alert("cat array: "+cat_arr[inc]);
			//alert("subcat array: "+subcat_arr[inc]);
			
			$('#serialno').append("<option value='"+arr+','+warranty_date+','+machine_status+','+','+','+model_arr[inc]+','+cat_arr[inc]+','+subcat_arr[inc]+','+brandname_arr[inc]+"'>"+arr+"</option>");
			
			inc++;
		});
		}else{
			$("#serialno > option").remove();	
			$('#serialno').append("<option value=''>---Select---</option>");
		}
		
		
		//$('#serialno').append("<option value='"+serial_no+"'>"+serial_no+"</option>");
		
		//$('#serialno').append("<option value='"+data.serial_no+','+data.warranty_date+','+data.machine_status+','+data.amc_type+','+data.batch_no+','+data.model_id+','+data.cat_id+','+data.subcat_id+','+data.brand_id+"'>"+data.serial_no+"</option>");
		
	}
	
	
	
}

</script>







<link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
  
    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>
	

<script type="text/javascript">
        $(document).ready(function() {
				$(".others").hide();
             $("#probi").select2(); 
			 $("#serialno").select2(); 
			 $("#assign_to").select2();
			 
			 $("#probi").change(function(){
				$(".select2-container > ul.select2-choices > li.select2-search-choice > div").each(function(){
					if($(this).text()=="Others" || ($(this).text()=="Others" && $(this).text())){
						$(".others").show();
					}
					else{
						$(".others").hide();
					}
				});
				
				/*{
					$(".others").show();
				}
				else{
					$(".others").hide();
				}*/
			 });
			 
			 
        });
</script>
<script src="js/select2/select2.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>
  <script src="js/angular-ui-select2/src/select2.js"></script>
  <script src="js/angularUISelect2.js"></script>

	
	
<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">
	
	
	
	


	
	
	
	
</body>

</html>