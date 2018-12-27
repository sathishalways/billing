
  
	
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/print.css" type="text/css"  media="print" />-->

 

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('   <table  class="tableadd" ><label style="color: black;    font-size: 15px;    font-weight: bold; margin-bottom:20px;">Add Product</label>  <tr>  <td><label>Serial No</label></td> <td>  <select>  <option>---Select---</option>  <option>12344</option>  <option>34546</option>  <option>456456</option>  <option>34657</option>  </select>  </td><td><label>Category</label></td><td ><select >            <option value="">---Select---</option>           <option value="Motorola">Air Conditioner</option>		  <option value="Sony Ericsson">Television</option>		   <option value="Nokia">Digital Camera</option>		    <option value="Apple">Mobile Phone</option>           <option value="Samsung">Cash Counting Machine</option>		    <option value="Samsung">Washing Machine</option>          </select></td>    </tr><tr><td><label>SubCategory</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Subcategory 1</option>		  <option value="Sony Ericsson">Subcategory 2</option>		   <option value="Nokia">Subcategory 3</option>		    <option value="Apple">Subcategory 4</option>           <option value="Samsung">Subcategory 5</option>  </select></td><td ><label>Brand Name</label></td><td style="width:200px;"><select >            <option value="">---Select---</option>           <option value="Motorola">Brand 1</option>		  <option value="Sony Ericsson">Brand 2</option>		   <option value="Nokia">Brand 3</option>		    <option value="Apple">Brand 4</option>           <option value="Samsung">Brand 5</option> </select></td></tr> <tr> <td><label>Model</label></td> <td ><select >            <option value="">---Select---</option>           <option value="Motorola">Model 1</option>		  <option value="Sony Ericsson">Model 2</option>		   <option value="Nokia">Model 3</option>		    <option value="Apple">Model 4</option>           <option value="Samsung">Model 5</option>          </select></td><td><label>Warranty Date</label></td><td><input id="datepicker2" type="text" name="datepicker"></td></tr> <tr> <td><label>Machine Status</label></td> <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Site</label></td>    <td><select><option>---Select---</option><option>OnSite</option><option>OffSite</option></select></td></tr> <tr> <td><label>Service Type</label></td>  <td><select><option>---Select---</option><option>AMC</option><option>Warranty</option><option>Out Of Warranty</option></select></td><td><label>Service Category</label></td>    <td><select><option>---Select---</option><option>Installation</option><option>General</option><option>Extra Fitting</option><option>Major</option></select></td></tr>  <tr>  <td><label>Zone</label></td>  <td><select><option>---Select---</option><option>Chennai</option><option>Bangalore</option><option>Trichy</option><option>Kilpauk</option></select></td><td><label>Problem</label></td>    <td><select><option>---Select---</option><option>Repair</option><option>Problem 1</option><option>Problem 2</option><option>Problem 3</option></select></td></tr>   <tr>   <td><label>Assign To</label></td>   <td><select><option>---Select---</option><option>Vishnu</option><option>Suresh</option><option>Manikandan</option><option>Bala</option></select></td></tr><tr><td><label style="font-weight:bold;">Received</label></td>   </tr>  </table>   <table style="margin-bottom: 40px;"><tr><td><ul class="recei"><li><label>Charger</label></li><li><label>Data Cable</label></li><li><label>Battery</label></li><li><label>Headset</label></li><li><label>Cover</label></li></ul></td></tr><tr><td><ul class="recei"><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li><li><input type="checkbox" class="" name=""></li></ul></td></tr></table> ').appendTo(tbl);   
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 

$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
});
});
	
    
});
});//]]>  

</script>
<style>
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

#printableArea #printheader
{
	width:100%;
	/*display:none;*/
	height:100px;

}
#printableArea #printheader .left
{
	width:65%;
	float:left;
	height:100px;
}
#printableArea #printheader .right p
{
	margin: 0px;
}
#printableArea #printheader .left p
{
	margin: 0px;
}
   #printableArea #printheader .right
{
	width:30%;	
	float:right;
	height:100px;
}

 #printableArea #printheader .right h1.headingprint
{
	font-size:10px;
}
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
p
{
margin:0px;

}
.tableadd tr td input {
  
    height: 50px;
}
#errorBox{
 color:#F00;
 }
.tableadd tr td div
{
	display:inline-block;
	width: 210px;
	
}
.tableadd tr td
{
	font-size:13px;
}

.tableadd tr td label b {
    font-size: 13px;
    margin-left: 5%;
}

  .tableadd1{
	  position: relative;
  top: 20px;
  }
  .tableadd1 tr td input {
    width: 210px !important;
}
  .tableadd1 tr td input {
  
    height: 50px;
}

.tableadd1 tr td div
{
	display:inline-block;
	width: 210px;
	
}
.tableadd1 tr td
{
	font-size:13px;
}

.tableadd1 tr td label b {
    font-size: 13px;
    margin-left: 5%;
}


.hh
{
width:100%;
}
.hh tr td
{
	border: 1px solid #808080;
height:25px;
font-size: 11px;
padding:0px 5px;
}
#scissors div img{
  height: 15px;
width: 2%;
	background-size: 15px;
    margin: auto auto;
    /*background-image: url('http://i.stack.imgur.com/cXciH.png');
    background-repeat: no-repeat;
    background-position: center;*/
    position: relative;
	display: inline-block;
margin-top: -20px;
	
}
#scissors div {
    position: relative;
    top: 50%;
    border-top: 1px dashed black;
   text-align: center;
}

</style>



<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });

}//]]>  

</script>

<script>
$(document).ready(function(){
   $('#cust_name').change(function(){
	 $("#serialno > option").remove(); 
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
	$.each(data, function(index, data){
		   $('#mobile').val(data.mobile),
		   $('#email_id').val(data.email_id)
		   
    });

} 
});

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>service/get_serialnos",
data: dataString,
cache: false,
success: function(data) 
{ 	$('#serialno').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#serialno').append("<option value='"+data.serial_no+"'>"+data.serial_no+"</option>");
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
		   $('#category').val(data.product_category),
		   $('#categoryid').val(data.catid),
		   
		   $('#subcategory').val(data.subcat_name),
		   $('#subcategoryid').val(data.subcatid),
		   
		   $('#brandname').val(data.brand_name),
		   $('#brandid').val(data.brandid),
		   
		   $('#model').val(data.model),
		   $('#modelid').val(data.modelid),
		   
		   $('#warranty_date').val(data.warranty_date);
                              
		   $('#zone').val(data.service_loc),
		   $('#locid').val(data.locid),
		   $('#machine_status').val(data.machine_status)
		   
		   
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
<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 //alert(document.frmService.serial_no.value);
 var req_id = document.frmService.req_id.value,
   cust_name = document.frmService.cust_name.value,
   mobile = document.frmService.mobile.value,
   email_id = document.frmService.email_id.value,
   datepicker = document.frmService.datepicker.value;
   
  
 if( req_id == "" )
   {
     document.frmService.req_id.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the request ID.";
     return false;
   }
   if( cust_name == "" )
   {
     document.frmService.cust_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the customer name";
     return false;
   }
   if( mobile == "" )
   {
     document.frmService.mobile.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the mobile";
     return false;
   }
   if( email_id == "" )
   {
     document.frmService.email_id.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the email id";
     return false;
   }
   
   if( datepicker == "" )
   {
     document.frmService.datepicker.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the request date";
     return false;
   }
   if(document.frmService.serial_no.value == '0'){
	   document.getElementById("errorBox").innerHTML = "enter the serial no";
     return false;
	   
   }
  
  
   
}

</script>
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
			//$('#assign_to').val('sid1');
			document.getElementById("assign_to").selectedIndex = sid1;
		}
        //alert("TEXT: "+$(this).text());
   });
		
		//alert($('#assign_to > option').length);
       // $('#assign_to').val('2');
    }
});
});
</script>
<section id="content">

     
        <div class="container">
          <div class="section">
         
			
         <div id="printableArea">
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
				</div>
			  
                <div class="col-md-10">
                 <div class="print_screen"> 
             <div id="printheader" >
	<div class="pull-left" >

	<h1 class="headingprint" style="font-size: 25px;margin-top: 0px;">S.R SCALES</h1>	
	<P>	No:2,BADRI VEERASAMY LANE,</P>
	<p>(Off:NSC BOSE ROAD) SOWCARPET,CHENNAI-79.</p>
	
	</div>
	<div class="pull-right" >	
	
	<p>Phone : <?php foreach($list7 as $key1){if(isset($key1->site) && $key1->site=="Service Center"){echo "9841443300";} if(isset($key1->site) && $key1->site=="Customer Site"){echo "7200669999";} }?></p>
	<p>Fax : 42168883</p>
    <p>Email Id : srscales.service@gmail.com</p>
	</div><div style="height:90px;border-bottom:1px dashed gray; "></div>
	</div>
	
                 <div>
                      <form action="<?php echo base_url(); ?>service/print_preview" method="post" name="frmService" onsubmit="return frmValidate()">
      <?php foreach($list as $key){
				$request_id = $key->request_id;
				$request_date = explode(" ",$key->request_date);
				$requested_date = $request_date['0'];
				$requested_time = $request_date['1'];
				
				$mobile = $key->mobile;
				$email_id = $key->email_id;
				$customer_name = $key->customer_name;
				$address = $key->address;
				$address1 = $key->address1;
				$company_name = $key->company_name;
		  
			} 
			
			foreach($list7 as $key1){
				if(isset($key1->received)){
					$received_data = explode(",",$key1->received);
				}
				if(isset($key1->problem)){
					$problem_data = explode(",",$key1->problem);
				}
			}
	  
	  
	  
	  ?>



	  
<table class="hh"  >
<label style="color: black;
    font-size: 15px;
    font-weight: bold; text-align:center; width:100%; margin-top:1%;" class="detai"><?php foreach($list7 as $key1){ if(isset($key1->site) && $key1->site=="Service Center"){ echo 'Service Center Receipt';} if(isset($key1->site) && $key1->site=="Customer Site"){ echo 'Customer Site Receipt';}}?></label>
	<label style="color: black;
    font-size: 12px;
    font-weight: bold; " class="detai">Request Details:</label>
	
		 <tr>
		  <td > <b><input type="hidden" name="url_id" value="<?php echo $url_id;?>">Request Id :<b> <?php echo $request_id; ?>
            </td>
            <td colspan=2>
               <b>Request Date :</b> <?php if(isset($requested_date) && $requested_date!=""){echo date("d-m-Y", strtotime($requested_date));}?>
            </td>
			<td colspan=2>
                <b>Request Time :</b> <?php echo $requested_time; ?>
            </td>
        </tr>
		<tr>
            <td >
                <b>Serial No :</b> <?php foreach($list7 as $key1){ if(isset($key1->serial_no)){ echo $key1->serial_no; } }?>
            </td>
			<td >
                <b>Category :</b> <?php foreach($list7 as $key1){ if(isset($key1->product_category)){ echo $key1->product_category;}}?>
            </td>
			<td >
                <b>SubCategory :</b> <?php foreach($list7 as $key1){ if(isset($key1->subcat_name)){ echo $key1->subcat_name; } }?>
            </td>
			<td >
               <b>Brand :</b> <?php foreach($list7 as $key1){ if(isset($key1->brand_name)){ echo $key1->brand_name; } }?>
            </td>
			<td >
               <b>Model :</b> <?php foreach($list7 as $key1){ if(isset($key1->model)){ echo $key1->model; } }?>
            </td>
        </tr>
			<tr>
            <td  colspan=5 >
               <b>Problem :</b> <?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											echo "<br>".$prob_category = $problemlistkey1->prob_category;
										}} 
									}else{
										echo $prob_category ="";
							} ?>
            </td>
			</tr>
			<tr>
			<td ><b>Warranty Date :</b> <?php foreach($list7 as $key1){ if(isset($key1->warranty_date)){ echo $key1->warranty_date;} }?></td>
			<td ><b>Machine Status :</b> <?php foreach($list7 as $key1){ if(isset($key1->machine_status)){ echo $key1->machine_status; } }?> </td>
            <td ><b>Site :</b> <?php foreach($list7 as $key1){ if(isset($key1->site)){ echo $key1->site;} }?></td>	
            <td colspan=2><b>Zone :</b> <?php foreach($list7 as $key1){ if(isset($key1->service_loc)){ echo $key1->service_loc; } }?></td>			
        </tr>
		<tr>
			<td ><b>Customer Name :</b> <?php echo $customer_name; ?></td>
			<td ><b>Branch  :</b> <?php if(!empty($getBranchservicereqbyid)){ foreach($getBranchservicereqbyid As $cslidkey){echo $cslidkey->branch_name;} } ?> </td>
			<td colspan=2><b>Address  :</b> <?php echo $address; ?> </td>
            <td colspan=2><b>Address 1 :</b> <?php echo $address1; ?></td>          		
        </tr>
			<tr>
			<td colspan=2><b>Mobile :</b> <?php echo $mobile; ?></td>
			<td colspan=3><b>Email Id  :</b> <?php echo $email_id; ?> </td>                      		
        </tr>
			<tr>
			<td ><b>Service Type :</b> <?php foreach($list7 as $key1){ if(isset($key1->service_type)){ echo $key1->service_type;} }?></td>
			<td colspan=2><b>Service Category :</b> <?php if(!empty($servicecat_list)){foreach($servicecat_list as $sercatkey1){  echo $service_category = $sercatkey1->service_category;}}else{ echo $service_category = "";} ?></td>
            <td colspan=2><b>Service Priority :</b> <?php foreach($list7 as $key1){ if(isset($key1->service_priority)){ echo $key1->service_priority; } }?></td>          		
        </tr>
		<tr>
			<td colspan=2><b>Assign To :</b> <?php if(!empty($list2)){foreach($list2 as $empkey1){  echo $assign_to = $empkey1->emp_name;}}else{ echo $assign_to = "";} ?></td>
			<td colspan=3><b>Blanket Approval :</b> <?php foreach($list7 as $key1){ if(isset($key1->blank_app)){ echo $key1->blank_app; } }?> </td>                     		
        </tr>
		<?php if(isset($key1->site) && $key1->site=='Customer Site'){?>
		<tr>
<td colspan="3"><b>Spare Replaced:</b><input type="text" name="spare_replaced"></td>
<td colspan="2"><b>Spare charge:</b><input type="text" name="spare_charge"><br> <b>Service charge:</b><input type="text" name="service_charge"></td>   

</tr> 
		<?php }?>
<!--<tr>
<td ><label >Request Id</label><span>:</span></td>
<td><div><?php echo $key->request_id; ?></div></td>

<td><label>Customer Name</label><span>:</span></td>
<td><div><?php echo $key->company_name; ?></div></td>

</tr>


<tr>
<td><label>Mobile No</label><span>:</span></td>
<td><div><?php echo $key->mobile; ?></div></td>

<td><label>Address</label><span>:</span></td>
<td><div><?php echo $key->address; ?></div></td>




</tr>
<tr>
<td><label>Address1</label><span>:</span></td>
<td><div><?php echo $key->address1; ?></div></td>


<td><label>Email ID</label><span>:</span></td>
<td><div><?php echo $key->email_id; ?></div></td>

</tr>

<tr>
<td><label>Requested Date</label><span>:</span></td>
<td><div><?php echo $key->request_date; ?></div></td>

</tr>

-->


</table>
	 
	  
	  
	  <?php foreach($list7 as $key1){
				if(isset($key1->received)){
					$received_data = explode(",",$key1->received);
				}
				if(isset($key1->problem)){
					$problem_data = explode(",",$key1->problem);
				}
				/* echo "<pre>";
				print_r($problem_data); */
			
	?>  
<div id="table1">
<table  class="tableadd" style="width:100%;" id="class">
  
<!--  <br/>
 <label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Product Details</label> 

 
 
  <tr>
  <td><label>Serial No</label><span>:</span></td> 
  <td><div><?php if(isset($key1->serial_no)){ echo $key1->serial_no; }?></div></td>
  
 
<td><label>Category</label><span>:</span></td>
<td><div><?php if(isset($key1->product_category)){ echo $key1->product_category;} ?></div></td>
</tr>
<tr>
<td><label>SubCategory</label><span>:</span></td>
 <td><div><?php if(isset($key1->subcat_name)){ echo $key1->subcat_name; }?></div></td>

<td ><label>Brand Name</label><span>:</span></td>

<td><div><?php if(isset($key1->brand_name)){ echo $key1->brand_name; }?></div></td>



</tr>
 
 <tr>
 <td><label>Model</label><span>:</span></td> <td><div><?php if(isset($key1->model)){ echo $key1->model; }?></div></td>
 
<td><label>Warranty Date</label><span>:</span></td><td><div><?php if(isset($key1->warranty_date)){ echo $key1->warranty_date;} ?></div></td>
</tr>
 
 <tr>
 <td><label>Machine Status</label><span>:</span></td> <td><div><?php if(isset($key1->machine_status)){ echo $key1->machine_status; }?></div></td>
 
<td><label>Site</label><span>:</span></td>  
<td><div><?php if(isset($key1->site)){ echo $key1->site;} ?></div></td>

</tr>
 
 
 <tr>
 <td><label>Service Type</label><span>:</span></td> 
 <td><div><?php if(isset($key1->service_type)){ echo $key1->service_type;} ?></div></td>
<td><label>Service Category</label><span>:</span></td>   
<td><div><?php if(!empty($servicecat_list)){foreach($servicecat_list as $sercatkey1){  echo $service_category = $sercatkey1->service_category;}}else{ echo $service_category = "";} ?></div></td>
</tr>
  <tr>
  <td><label>Zone</label><span>:</span></td>  
  <td><div><?php if(isset($key1->service_loc)){ echo $key1->service_loc; }?></div></td>

<td><label>Problem</label><span>:</span></td>  
<td><div><?php if(!empty($problemlist1)){
				foreach($problemlist1 as $problemlistkey1){ 
					if (in_array($problemlistkey1->id, $problem_data)){
						echo "<br>".$prob_category = $problemlistkey1->prob_category;
					}} 
				}else{
				   echo $prob_category ="";
				} ?></div></td>

</tr>
   <tr>
   <td><label>Assign To</label><span>:</span></td> 
   <td><div><?php if(!empty($list2)){foreach($list2 as $empkey1){  echo $assign_to = $empkey1->emp_name;}}else{ echo $assign_to = "";}  ?></div></td>
  
    
<td><label>Service Priority</label><span>:</span></td>   
<td><div><?php if(isset($key1->service_priority)){ echo $key1->service_priority; }?></div></td>

</tr>

<tr>
  <td><label>Blanket Approval</label><span>:</span></td>
  <td><div><?php if(isset($key1->blank_app)){ echo $key1->blank_app; }?></div></td>
  
  
</tr>-->



<tr>
<td class="noborder" colspan="5" style="font-weight:bold;">* Machine received w/o accessories :</td>   </tr> 

  </table>
  

<?php if(isset($key1->notes)){ ?>
<table class="tableadd">
<tr class="com">
<td> <label ><b>Notes :</b></label></td> 
<td>
    <table class="tableadd1">
	    <tr>
		    <td><label><b>Customer Signature</b></label></td>
		</tr>
		<tr>
		    <td><label><b>Seal of Customer</b></label></td>
		</tr>
	</table>
</td>
</tr>
<tr><td><div class="fir" style="width: 600px !important;
text-align: justify;margin-left: 35px;margin-bottom: 30px;"><?php echo $key1->notes; ?></div></td></tr>
</table>
<?php } ?>


</div>
<?php } ?>

  

							  <!--<a id="addRowBtn" class="no-print" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Back</a>-->
	<!--<input class="no-print" id="addRowBtn" type="button" onClick="printDiv('printableArea')" value="Print Request"  style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;"/>&nbsp;<a class="btn cyan waves-effect waves-light no-print" onclick="history.go(-1);">Exit
                              </a>-->



					 
					 </div>
					 </div>
					 
					 <div id="scissors">
    <div><img src="http://i.stack.imgur.com/cXciH.png"></div>
</div>

 <div class="print_screen"> 
             <div id="printheader" >
	<div class="pull-left" >

	<h1 class="headingprint" style="font-size: 25px;margin-top: 0px;">S.R SCALES</h1>	
	<P>	No:2,BADRI VEERASAMY LANE,</P>
	<p>(Off:NSC BOSE ROAD) SOWCARPET,CHENNAI-79.</p>
	
	</div>
	<div class="pull-right" >	
	
	<p>Phone : <?php foreach($list7 as $key1){if(isset($key1->site) && $key1->site=="Service Center"){echo "9841443300";} if(isset($key1->site) && $key1->site=="Customer Site"){echo "7200669999";} }?></p>
	<p>Fax : 42168883</p>
    <p>Email Id : srscales.service@gmail.com</p>
	</div><div style="height:90px;border-bottom:1px dashed gray; "></div>
	</div>
	
                 <div>
                      
      <?php foreach($list as $key){
				$request_id = $key->request_id;
				$request_date = explode(" ",$key->request_date);
				$requested_date = $request_date['0'];
				$requested_time = $request_date['1'];
				
				$mobile = $key->mobile;
				$email_id = $key->email_id;
				$customer_name = $key->customer_name;
				$address = $key->address;
				$address1 = $key->address1;
				$company_name = $key->company_name;
		  
			} 
			
			foreach($list7 as $key1){
				if(isset($key1->received)){
					$received_data = explode(",",$key1->received);
				}
				if(isset($key1->problem)){
					$problem_data = explode(",",$key1->problem);
				}
			}
	  
	  
	  
	  ?>



	  
<table class="hh"  >
<label style="color: black;
    font-size: 15px;
    font-weight: bold; text-align:center; width:100%; margin-top:1%;" class="detai"><?php foreach($list7 as $key1){ if(isset($key1->site) && $key1->site=="Service Center"){ echo 'Service Center Receipt';} if(isset($key1->site) && $key1->site=="Customer Site"){ echo 'Customer Site Receipt';}}?></label>
	<label style="color: black;
    font-size: 12px;
    font-weight: bold; " class="detai">Request Details:</label>
	
		 <tr>
		  <td > <b>Request Id :<b> <?php echo $request_id; ?>
            </td>
            <td colspan=2>
               <b>Request Date :</b> <?php if(isset($requested_date) && $requested_date!=""){echo date("d-m-Y", strtotime($requested_date));} ?>
            </td>
			<td colspan=2>
                <b>Request Time :</b> <?php echo $requested_time; ?>
            </td>
        </tr>
		<tr>
            <td >
                <b>Serial No :</b> <?php foreach($list7 as $key1){ if(isset($key1->serial_no)){ echo $key1->serial_no; } }?>
            </td>
			<td >
                <b>Category :</b> <?php foreach($list7 as $key1){ if(isset($key1->product_category)){ echo $key1->product_category;}}?>
            </td>
			<td >
                <b>SubCategory :</b> <?php foreach($list7 as $key1){ if(isset($key1->subcat_name)){ echo $key1->subcat_name; } }?>
            </td>
			<td >
               <b>Brand :</b> <?php foreach($list7 as $key1){ if(isset($key1->brand_name)){ echo $key1->brand_name; } }?>
            </td>
			<td >
               <b>Model :</b> <?php foreach($list7 as $key1){ if(isset($key1->model)){ echo $key1->model; } }?>
            </td>
        </tr>
			<tr>
            <td  colspan=5 >
               <b>Problem :</b> <?php if(!empty($problemlist1)){
									foreach($problemlist1 as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $problem_data)){
											echo "<br>".$prob_category = $problemlistkey1->prob_category;
										}} 
									}else{
										echo $prob_category ="";
							} ?>
            </td>
			</tr>
			<tr>
			<td ><b>Warranty Date :</b> <?php foreach($list7 as $key1){ if(isset($key1->warranty_date)){ echo $key1->warranty_date;} }?></td>
			<td ><b>Machine Status :</b> <?php foreach($list7 as $key1){ if(isset($key1->machine_status)){ echo $key1->machine_status; } }?> </td>
            <td ><b>Site :</b> <?php foreach($list7 as $key1){ if(isset($key1->site)){ echo $key1->site;} }?></td>	
            <td colspan=2><b>Zone :</b> <?php foreach($list7 as $key1){ if(isset($key1->service_loc)){ echo $key1->service_loc; } }?></td>			
        </tr>
		<tr>
			<td ><b>Customer Name :</b> <?php echo $customer_name; ?></td>
			<td ><b>Branch  :</b> <?php if(!empty($getBranchservicereqbyid)){ foreach($getBranchservicereqbyid As $cslidkey){echo $cslidkey->branch_name;} } ?> </td>
			<td colspan=2><b>Address  :</b> <?php echo $address; ?> </td>
            <td colspan=2><b>Address 1 :</b> <?php echo $address1; ?></td>          		
        </tr>
			<tr>
			<td colspan=2><b>Mobile :</b> <?php echo $mobile; ?></td>
			<td colspan=3><b>Email Id  :</b> <?php echo $email_id; ?> </td>                      		
        </tr>
			<tr>
			<td ><b>Service Type :</b> <?php foreach($list7 as $key1){ if(isset($key1->service_type)){ echo $key1->service_type;} }?></td>
			<td colspan=2><b>Service Category :</b> <?php if(!empty($servicecat_list)){foreach($servicecat_list as $sercatkey1){  echo $service_category = $sercatkey1->service_category;}}else{ echo $service_category = "";} ?></td>
            <td colspan=2><b>Service Priority :</b> <?php foreach($list7 as $key1){ if(isset($key1->service_priority)){ echo $key1->service_priority; } }?></td>          		
        </tr>
		<tr>
			<td colspan=2><b>Assign To :</b> <?php if(!empty($list2)){foreach($list2 as $empkey1){  echo $assign_to = $empkey1->emp_name;}}else{ echo $assign_to = "";} ?></td>
			<td colspan=3><b>Blanket Approval :</b> <?php foreach($list7 as $key1){ if(isset($key1->blank_app)){ echo $key1->blank_app; } }?> </td>                     		
        </tr>
		
<!--<tr>
<td ><label >Request Id</label><span>:</span></td>
<td><div><?php echo $key->request_id; ?></div></td>

<td><label>Customer Name</label><span>:</span></td>
<td><div><?php echo $key->company_name; ?></div></td>

</tr>


<tr>
<td><label>Mobile No</label><span>:</span></td>
<td><div><?php echo $key->mobile; ?></div></td>

<td><label>Address</label><span>:</span></td>
<td><div><?php echo $key->address; ?></div></td>




</tr>
<tr>
<td><label>Address1</label><span>:</span></td>
<td><div><?php echo $key->address1; ?></div></td>


<td><label>Email ID</label><span>:</span></td>
<td><div><?php echo $key->email_id; ?></div></td>

</tr>

<tr>
<td><label>Requested Date</label><span>:</span></td>
<td><div><?php echo $key->request_date; ?></div></td>

</tr>

-->


</table>
	 
	  
	  
	  <?php foreach($list7 as $key1){
				if(isset($key1->received)){
					$received_data = explode(",",$key1->received);
				}
				if(isset($key1->problem)){
					$problem_data = explode(",",$key1->problem);
				}
				/* echo "<pre>";
				print_r($problem_data); */
			
	?>  
<div id="table1">
<table  class="tableadd" style="width:100%;" id="class">
  
<!--  <br/>
 <label style="color: black;
    font-size: 15px;
    font-weight: bold; margin-bottom:20px;">Product Details</label> 

 
 
  <tr>
  <td><label>Serial No</label><span>:</span></td> 
  <td><div><?php if(isset($key1->serial_no)){ echo $key1->serial_no; }?></div></td>
  
 
<td><label>Category</label><span>:</span></td>
<td><div><?php if(isset($key1->product_category)){ echo $key1->product_category;} ?></div></td>
</tr>
<tr>
<td><label>SubCategory</label><span>:</span></td>
 <td><div><?php if(isset($key1->subcat_name)){ echo $key1->subcat_name; }?></div></td>

<td ><label>Brand Name</label><span>:</span></td>

<td><div><?php if(isset($key1->brand_name)){ echo $key1->brand_name; }?></div></td>



</tr>
 
 <tr>
 <td><label>Model</label><span>:</span></td> <td><div><?php if(isset($key1->model)){ echo $key1->model; }?></div></td>
 
<td><label>Warranty Date</label><span>:</span></td><td><div><?php if(isset($key1->warranty_date)){ echo $key1->warranty_date;} ?></div></td>
</tr>
 
 <tr>
 <td><label>Machine Status</label><span>:</span></td> <td><div><?php if(isset($key1->machine_status)){ echo $key1->machine_status; }?></div></td>
 
<td><label>Site</label><span>:</span></td>  
<td><div><?php if(isset($key1->site)){ echo $key1->site;} ?></div></td>

</tr>
 
 
 <tr>
 <td><label>Service Type</label><span>:</span></td> 
 <td><div><?php if(isset($key1->service_type)){ echo $key1->service_type;} ?></div></td>
<td><label>Service Category</label><span>:</span></td>   
<td><div><?php if(!empty($servicecat_list)){foreach($servicecat_list as $sercatkey1){  echo $service_category = $sercatkey1->service_category;}}else{ echo $service_category = "";} ?></div></td>
</tr>
  <tr>
  <td><label>Zone</label><span>:</span></td>  
  <td><div><?php if(isset($key1->service_loc)){ echo $key1->service_loc; }?></div></td>

<td><label>Problem</label><span>:</span></td>  
<td><div><?php if(!empty($problemlist1)){
				foreach($problemlist1 as $problemlistkey1){ 
					if (in_array($problemlistkey1->id, $problem_data)){
						echo "<br>".$prob_category = $problemlistkey1->prob_category;
					}} 
				}else{
				   echo $prob_category ="";
				} ?></div></td>

</tr>
   <tr>
   <td><label>Assign To</label><span>:</span></td> 
   <td><div><?php if(!empty($list2)){foreach($list2 as $empkey1){  echo $assign_to = $empkey1->emp_name;}}else{ echo $assign_to = "";}  ?></div></td>
  
    
<td><label>Service Priority</label><span>:</span></td>   
<td><div><?php if(isset($key1->service_priority)){ echo $key1->service_priority; }?></div></td>

</tr>

<tr>
  <td><label>Blanket Approval</label><span>:</span></td>
  <td><div><?php if(isset($key1->blank_app)){ echo $key1->blank_app; }?></div></td>
  
  
</tr>-->


<tr>
<td class="noborder" colspan="5" style="font-weight:bold;">* Machine received w/o accessories :</td>   </tr> 

  </table>
  

<?php if(isset($key1->notes)){ ?>
<table class="tableadd">
<tr class="com">
<td> <label ><b>Notes :</b></label></td> 
<td>
    <table class="tableadd1">
	    <tr>
		    <td><label><b>Customer Signature</b></label></td>
		</tr>
		<tr>
		    <td><label><b>Seal of Customer</b></label></td>
		</tr>
	</table>
</td>
</tr>
<tr><td><div class="fir" style="width: 600px !important;
text-align: justify;margin-left: 35px;margin-bottom: 30px;"><?php echo $key1->notes; ?></div></td></tr>
</table>
<?php } ?>


</div>
<?php } ?>

  

							  <!--<a id="addRowBtn" class="no-print" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Back</a>-->
	
	<button class="btn cyan waves-effect waves-light " type="submit" style="margin-right: 20px;">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>


	<!--<input class="no-print" id="addRowBtn" type="button" onClick="printDiv('printableArea')" value="Print Request"  style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;"/>&nbsp;<a class="btn cyan waves-effect waves-light no-print" onclick="history.go(-1);">Exit
                              </a>-->



					 </form>
					 </div>
					 </div>
                         
                        </div>
                     
                   <div class="col-md-1">
				</div>
                     
                  
                
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
  
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
			
        </script>

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
  
  
  
  
  
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     
	
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  
  


<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
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

</html>>