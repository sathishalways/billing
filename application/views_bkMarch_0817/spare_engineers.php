
<head>

 <link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
 
 <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
 
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="<?php echo base_url(); ?>assets/select/jquery-1.8.0.min.js"></script>


<style>

.link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .icon
 {
	padding-right: 20px;
 }
 .fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
		.tableadd1 tr td
		{
			border: 1px solid gray;
text-align: center;
		}
		.tableadd1 tr
		{
			height: 50px;
		}
		.tableadd1 tr td select
		{
			border: 1px solid #9A9A9B;
border-radius: 5px;
width:150px;
		}
		.tableadd1 tr td textarea
		{
			width:200px;
			border: 1px solid #9A9A9B;
			height:70px;
			border-radius: 5px;
		}
		.tableadd1 tr td label {
    line-height: 0;
	color:white;
}
.tableadd1 tr td.plus
{
	padding-top: 14px;
}
.tableadd1 tr td.plus input
{
	width:70px;
	border:1px solid gray;
}
.tableadd1 tr td input
{
	height: 33px;
border-radius: 5px;
padding-left: 10px;
}
.tableadd1 tr td.qty
{
	padding-top: 14px;
}
.tableadd1 tr td.qty input
{
	width:100px;
	border:1px solid gray;
}
.tableadd1 tr td.save .fa {
    font-size: 30px !important;
}
.rowadd
{
	 border: 1px solid #055E87 !important;
background: #055E87 none repeat scroll 0% 0% !important;
padding: 4px;
border-radius: 5px;
color: white;
font-weight: bold;
font-family: calibri;
font-size: 15px;
margin-top: 30px;
}
#addtable 
{
	width:50%;
	margin-top:20px;
}
#addtable tr td
{
border:none;
text-align:left;

}
#addtable tr td label
{
color:black;
}
#errorBox{
 color:#F00;
 }
 .form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #fcfcfc;
}
.tableadd tr td select {
    height:30px;
    border-radius: 2px;
    width: 210px;
    border: 1px solid #ccc;
    background-color: transparent;
    -moz-appearance: none;
}
.tableadd1 tr td select {
    border: 1px solid #ccc;
    border-radius: 2px;
    width: 159px;
}
.tableadd1 tr td {
    border: 1px solid #cccccc;
    text-align: center;
}
.tableadd1 tr td.plus input {
    width: 60px;
    border: 1px solid #cccccc;
    height: 28px;
    border-radius: 2px;
}
.tableadd1 tr td.qty input {
    width: 100px;
    border: 1px solid #cccccc;
    height: 28px;
    border-radius: 2px;
}
.tableadd1 tr td textarea {
    width: 200px;
    border: 1px solid #cccccc;
    height: 70px;
    border-radius: 2px;
}
</style>

<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		//var total_spare = $("#total_spare_"+id).val();
		var used_spare = $("#used_spare_"+id).val();
		
		var purchase_qty = $("#purchase_qty_"+id).val();
		var purchase_price = $("#purchase_price_"+id).val();
		var purchase_date = $("#purchase_date_"+id).val();
		//alert("purchase_qty: "+purchase_qty+"purchase_price: "+purchase_price+"purchase_date: "+purchase_date)
		
		var total_spare = parseInt(purchase_qty) - parseInt(used_spare);
		//alert(stock_spare);
		//$('#total_amt').val(stock_spare);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Spare/update_spare_stock', 
         data: {'id' : id, 'used_spare' : used_spare, 'total_spare' : total_spare, 'purchase_qty' : purchase_qty, 'purchase_price' : purchase_price, 'purchase_date' : purchase_date},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Spare Stock updated");
				window.location = "<?php  echo base_url(); ?>pages/spare_stock";
              }
          });

        });
		
}

</script>


<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	//var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/addrow2",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
       // $('#table1').append(result);
	    $('#table1').append(result);
} 
});

});
  
});
</script>


<script>
$(document).ready(function(){
   $('.eng_spare_name').change(function(){ //alert("hiiio");
   var id = $(this).val();
	
    var idd=$(this).closest(this).attr('id');
	//alert(idd);
	 var arr= idd.split('-');
	  var vl = arr['1'];
   //var vl=$('#countid').val();
	//alert(vl);
  //alert("spareid: "+idd);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsparedet",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		 //alert(data.min_qty);
		 if(parseInt(data.spare_qty) <= parseInt(data.min_qty)){ 
			alert("Alert!!! Spare meets minimum qty level");
		 }
		
		   $('#spare_qty-'+vl).val(data.spare_qty),
		   $('#used_spare-'+vl).val(data.used_spare),
		   $('#eng_spare-'+vl).val(data.eng_spare),
		   $('#amt-'+vl).val(data.sales_price)
    });

} 
});
   });
 });
</script>

<script>
$(document).ready(function(){	

	
	$('.plus1').click(function(){ //alert("hiiio");
		if(document.getElementById('minus-0').value!=""){
			alert("enter any plus or minus");
			//$("#plus").attr("disabled", "disabled"); 
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   
   $('.minus1').click(function(){ //alert("hiiio");
		if(document.getElementById('plus-0').value!=""){
			alert("enter any plus or minus");
			//$("#minus").attr("disabled", "disabled"); 
		}/* else{
			$("#minus").removeAttr("disabled"); 
			
		} */
   });

});

function UpdateStatus1(id){  //alert(id);alert($("#enggdate_"+id).val());
		var eng_name = $("#eng_name-"+id).val();
		var eng_spare_name = $("#eng_spare_name-"+id).val();
		var engg_date = $("#enggdate_"+id).val();
		
		if(eng_name==""){
			alert("Enter the Engineer Name");
		}else if(eng_spare_name==""){
			alert("Enter the Spare Name");
		}else if(engg_date==""){
			alert("Enter the Date");
		}else{
			var plus = $("#plus-"+id).val();
			var minus = $("#minus-"+id).val();
			
			//alert(engg_date);
			var engg_reason = $("#engg_reason-"+id).val();
		
			var spare_qty = $("#spare_qty-"+id).val();
			var used_spare = $("#used_spare-"+id).val();
			var eng_spare = $("#eng_spare-"+id).val();
		
		
			$(function()
			{
            $.ajax({
			type: "POST",
			url: '<?php  echo base_url(); ?>Spare/add_spare_engg', 
			data: {'eng_name' : eng_name, 'eng_spare_name' : eng_spare_name, 'plus' : plus, 'minus' : minus, 'engg_date' : engg_date, 'engg_reason' : engg_reason, 'spare_qty' : spare_qty, 'used_spare' : used_spare, 'eng_spare' : eng_spare},
			dataType: "text",  
			cache:false,
			success: 
              function(data){ 
                alert("Spares For Engineers Added");  
              }
			});

			});
			
		}
		
		
		
}
</script>

  <script>
$(document).ready(function(){
	//alert("bfh");
  $('#sample').change(function(){ //alert("hiiio");
   var id = $(this).val();
	
   // var idd=$(this).closest(this).attr('id');
	//alert(idd);
	// var arr= idd.split('-');
	//  var vl = arr['1'];
   //var vl=$('#countid').val();
	//alert(vl);
  //alert("spareid: "+idd);
  $("#modelid_0 > option").remove(); 
  $("#cust_id_0 > option").remove(); 
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getcust_name",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$('#modelid_0').append("<option value=''>---Select---</option>");
	
	$.each(data, function(index, data){
		   /* $('#custtest_0').val(data.customer_name),
		   $('#cust_id_0').val(data.cust), */
		   
		   
		   $('#cust_id_0').append("<option selected='selected' value='"+data.cust+"'>"+data.customer_name+"</option>");
		   $('#modelid_0').append("<option value='"+data.prod_id+"'>"+data.model+"</option>");

    });

} 
});


   });
   
   
   $('.modelss').change(function(){ //alert("hiiio");
   var id = $(this).val();
	//alert(id);
   var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr= idd.split('_');
	var inc = arr['1'];
   //var vl=$('#countid').val();
	//alert(inc);
  //alert("spareid: "+idd);
  
  $('#eng_spare_name-'+inc+ "> option").remove(); 
   var dataString = 'id='+id;



$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/spareListByModelId",
data: dataString,
cache: false,
success: function(data) 
{ 	
		$('#eng_spare_name-'+inc).append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		if(data.spare_name.length>0){
			$('#eng_spare_name-'+inc).append("<option value='"+data.id+"'>"+data.spare_name+"</option>");
		}
		

    });

} 
});


   });
   
  
   
   
   
   
   
 });
</script>

<script>
function frmValidate(){ 
//alert("hii");
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var eng_name = document.frmSpareEng.eng_name.value;
     spare_receipt = document.frmSpareEng.spare_receipt.value;
   
   if(eng_name == "")
   {
     document.frmSpareEng.eng_name.focus();
	 document.getElementById("errorBox").innerHTML = "select the engineer name";
     return false;
   }
   
   if(spare_receipt == "")
   {
     document.frmSpareEng.spare_receipt.focus();
	 document.getElementById("errorBox").innerHTML = "select the service type";
     return false;
   }
    
}

</script>


 
</head>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Add Spares for Engineers</h2>
<hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			<form action="<?php echo base_url(); ?>Spare/add_spare_engg" method="post" name="frmSpareEng" onsubmit="return frmValidate()" autocomplete="off">
			
               <div class="col-md-12">
			  
			   
			   <table class="tableadd" id="addtable">
 <div id="errorBox"></div>

<tr>
<td><label>Engineer Name<span style="color:red;">*</span></label></td>
<td> <select name="eng_name" id="eng_name-0">
           <option value="">---Select---</option>
           <?php foreach($engg_list as $enggkey){ ?>
			<option value="<?php echo $enggkey->id; ?>"><?php echo $enggkey->emp_name; ?></option>
		   <?php } ?>
		 		
          </select></td>
		  <td></td>
		  <td></td>
		  
		  <td><label>Service Type:<span style="color:red;">*</span></label></td>
<td> <select name="spare_receipt">
           <option value="">---Select---</option>
           <option value="service center">service center</option>
           <option value="customer site within Chennai">customer site within Chennai</option>
           <option value="customer site outstation">customer site outstation</option>
		   <option value="without_Service">Without Service</option>
		 		
          </select></td>
		  <td></td>
		  <td></td>

</tr>
</table>
			   
			   
			   
			  <div style="margin: 30px 0px;">
			  
			  
			  
<table id="table1" class="tableadd1" style="width:100%;">
<tr style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;"><td><label>RequestID</label></td><td><label>CustomerName</label></td><td><label>Model</label></td><td><label>Spare Name</label></td><td><label>Quantity</label></td><td><label>Date</label></td><td><label>Remarks</label></td><!--<td><label>Action</label></td>--></tr>
<tr>
<td><select class="chosen-select form-control request_id" name="req_id[]" id="sample">
           <option value="">---Select---</option>
           <?php foreach($reqview as $row){ ?>
			<option value="<?php echo $row->id; ?>"><?php echo $row->request_id; ?></option>
			
		   <?php } ?>
		 		
          </select></td>
		  
		  <td class="plus">
		  <select class="chosen-select form-control name_select" name="cust[]" id="cust_id_0">
		  <option value="">---Select---</option>
           <?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name; ?></option>
		   <?php } ?>
           
          </select>
		  
		  <i class="fa fa-plus-square fa-2x" onclick='brinfo(0)'></i>
		 <!--<input type="hidden" name="cust[]" id="cust_id_0" value="">--></td>
		 <td class="plus">
			<select name="modelid[]" id="modelid_0" class="modelss">
           <option value="">---Select---</option>
           
		 		
          </select>
		 
		 </td>
<td><select name="eng_spare_name[]" id="eng_spare_name-0" class="eng_spare_name">
           <option value="">---Select---</option>
           <?php foreach($spare_list as $sparekey){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
		   <?php } ?>
		 		
          </select></td><td class="plus"><input type="text" Placeholder="plus" name="plus[]" id="plus-0" class="plus1">OR<input type="text" placeholder="minus" name="minus[]" id="minus-0" class="minus1"></td>
		  <td class="qty"><input type="text" class="date" name="engg_date[]" id="enggdate_0"><input type="hidden" name="spare_qty[]" id="spare_qty-0"><input type="hidden" name="used_spare[]" id="used_spare-0"><input type="hidden" name="eng_spare[]" id="eng_spare-0"><input type="hidden" name="amt[]" id="amt-0"> <input type="hidden" name="amt1[]" id="amt1-0"></td>
		  
		  
		 
		  <td style="padding:10px 0;"><textarea type="text" name="engg_reason[]" id="engg_reason-0"></textarea></td>
		<!--  <td class="save">	<a href="#" onclick="UpdateStatus1(0)"><i class="fa fa-floppy-o fa-3x"></i></a></td>-->

</tr>

</table>
<input type="hidden" name="countid" id="countid" class="" value="0">


</div>






<a id="addMoreRows" class="rowadd" style="padding: 8.5px;
margin-right: 20px;">Add Row</a><button class="btn cyan waves-effect waves-light" type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>
                </div>
				</form>
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
      
<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $sparekey->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->

           
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
  

 <script>
    $(function(){
		$(".date").datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2055"
			
		});
	})
</script>

    <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	 
    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>
  <script>
   var config = {
      '.chosen-select'           : {},
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
  
  <script>
        $(function() {
             $(".request_id").select2(); 
			 $(".name_select").select2(); 
             /*$(".property_name").select2();       
             $(".property_type").select2(); 
             $(".property1_name").select2();  
			  $(".propertymulti").select2();  
			   $(".propertymulti1").select2();  
				 $(".reference_con").select2(); */ 	
                
                  
        });
    </script>
	 
	 
	 
	 <!-- Add jQuery library -->
	
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
var $= jQuery.noConflict();
function brinfo(id){

		$.fancybox.open({
					href : '<?php  echo base_url(); ?>customer/add_quickforspares/'+id,
					type : 'iframe',
					padding : 5
				});
}

</script>
   
 <script>
 function setSelectedUser(customer_name,cust_idd,spare_rowid) { //alert("JII");
	
	/* $('#custtest_'+spare_rowid).val(customer_name);
	$('#cust_id_'+spare_rowid).val(cust_idd);
	 */
	$('#cust_id_'+spare_rowid+ "> option").remove();
	$('#cust_id_'+spare_rowid).append("<option value='"+cust_idd+"'>"+customer_name+"</option>");
	
}
 </script>
 
 <script>
$('.plus1').keyup(function() { //alert($('#tax_type').val());
	//alert("fdgvdfgfd");
    var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr = idd.split('-');
	var ctid = arr['1'];
	
	
	if(parseInt($(this).val())){
		var cal_amt = parseInt($(this).val()) * parseInt($('#amt-'+ctid).val());
		$('#amt1-'+ctid).val(cal_amt);
   } else{
	   $('#amt1-'+ctid).val(0);
   }
   
   
   
    //$('input[name="res"]').val(val);
   
});
</script> 

</body>

</html>