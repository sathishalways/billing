<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	 
  
   
 /*if( customer_id == "" )
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
   }*/
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
    
    text-align: center;
    width: auto;
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
    border: 1px solid #8868a0 !important;
    background: #8868a0 none repeat scroll 0% 0% !important;
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
		.rowadd{
			cursor:pointer;
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

            <h5 class="breadcrumbs-title" style="margin-bottom:10px;margin-top: 15px;">Preventive Maintenance Details</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                               
<div id="errorBox"></div>
<table class="tableadd table table-bordered">
<tr>
<th style="background: #ccc;">Schedule Date</th>
<th style="background: #ccc;">Status</th>
</tr>
<?php if(!empty($getPmAlerts)){ foreach($getPmAlerts as $pm_key){ if($pm_key->schedule_date!=""){?>
<tr>
<td><?php echo $pm_key->schedule_date; ?></td>
<td><?php if($pm_key->status=='1'){echo "Alert notified";}if($pm_key->status=='0'){echo "Not notified";} ?></td>
</tr>
<?php } } } else{?>
<td colspan="2">No Data Available</td>
<?php } ?>

</table>
            
                        </div>
                  
                </div>
            
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>

</body>

</html>