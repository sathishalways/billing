
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
		.tableadd tr td label{
			width: 180px;
		}
		.tableadd1 tr td
		{
			border: 1px solid gray;
            
            padding: 0px 10px;
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
	color:#000;
	
   
}
.tableadd1{
	border:1px solid gray;
}

.tableadd2 tr td{
	border:0px;
	width: 130px;
	padding-left:50px;
}
.tableadd2 tr td label{
	  width: 150px;
  margin-left: 38px;
  position: relative;
  left: -55px;
}
.tableadd3 tr td{
	border:0px;
	width: 130px;
	
}
.tableadd1 tr td.plus
{
	padding-top: 14px;
	text-align:center;
}
.tableadd1 tr td.plus input
{
	width:70px;
	border:1px solid gray;
	
}
.tableadd1 tr td.item
{
	padding-top: 14px;
}
.tableadd1 tr td.item input
{
	width:155px;
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
	width:57%;
	margin-top:20px;
}
#addtable tr td
{
border:none;
text-align:left;

}
#addtable tr td label
{

color:#000;
}

#errorBox{
 color:#F00;
 }
 /*input[id=basicamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
  float:right;
  position: relative;
  top: 5px;
  left: 29px;
 }
  input[id=cst]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
  float:right;
  position: relative;
  top: 20px;
  left: 208px;
 }
  input[id=freight]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
  float:right;
  position: relative;
  top: 35px;
  left: 364px;
 }
  input[id=totalamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 5px;
  float:right;
  position: relative;
  top: 50px;
  left: 560px;
 }*/
 .purchasedetail{
  position: relative;
  top: -63px;
  left: 50px;
 }
 .pipurchasedetail{
  position: relative;
  top: -63px;
  left: 90px;
 }
 .cstpurchasedetail{
  position: relative;
  top: -63px;
  left: 95px;
 }
.tableadd tr td input {
  width: 238px;
  height: 33px;
  /* border: 1px solid #B3B3B3; */
  border-radius: 5px;
  padding-left: 10px;
}
.calc input[type=text]{
	  width: 111px;
  border: 1px solid gray;
  border-radius: 5px;
  padding: 5px;
  float:left;
  position: relative;
  left: -192px;
}
#mytextarea{
	
	outline:0px;
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
		   $('#spare_qty-'+vl).val(data.spare_qty),
		   $('#used_spare-'+vl).val(data.used_spare),
		   $('#eng_spare-'+vl).val(data.eng_spare)
		   
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
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getcust_name",
data: dataString,
cache: false,
success: function(data) 
{ 	
//alert(data);
	$.each(data, function(index, data){
		   $('#custtest_0').val(data.customer_name),
		   $('#cust_id_0').val(data.cust)

    });

} 
});
   });
   
   
  /*$(".tstfig").change(function(){ alert("hiiio");
 var id=$(this).attr('id');
     var field=$(this).attr('id').split('_').pop();
var v=$('#'+id).val();
     var dataString='id='+v;
	//alert(vl);
  //alert("spareid: "+idd);
  // var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getcust_name",
data: dataString,
cache: false,
success: function(data) 
{ 	
//alert(data);
	$.each(data, function(index, data){
		   $('#custtest_'+field).val(data.customer_name),
		   $('#cust_id_'+field).val(data.cust)
		  
		   
    });
} 
});
   });*/ 
   
   
   
   
   
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
        
      
        <div class="container">
          <div class="section">
		  <form action="<?php echo base_url(); ?>Spare/spare_purchase_print" method="post" name="frmSpareEngg" autocomplete="off">
            <div id="printableArea">
		    <table class="tableadd" width="89%">
<tr>
<td class="noborder" colspan="5" style="font-weight:bold;width: 345px;position: relative;top: 30px;left:50px"><div class="pull-left"><h1 class="headingprint" style="font-size: 25px;margin-top: 0px;width:500px;">Syndicate Diagnostics<br>127B Bricklin Road,Purusaiwalkam, Chennai 600007</h1>	
	<!--<h2 class="headingprint" style="font-size: 25px;margin-top: 0px;">No:4/6, BADRI VEERASAMY LANE,</h2>
	<h2 class="headingprint" style="font-size: 25px;margin-top: 50px;">NSC BOSE ROAD, CHENNAI-79.</h2>--></div></td>
<!--<td class="noborder" colspan="5" style="font-weight:bold;text-align: right;position: relative;top: 30px;right:60px"><div class="pull-right" ><p><b>Date : <?php echo $key->engineer_date;?></b></div></p></td> -->  </tr> 
<tr><td><div class="fir" style="width: 600px !important;
text-align: justify;margin-left: -5px;margin-bottom: 30px;"></div></td></tr>
</table>
		    <!--<h4 class="header">Spares Purchase Order Receipt</h4>-->

          
            <div class="divider"></div>
			
            <!--DataTables example-->
			
            <div id="table-datatables">
           
              <div class="row">
              
			
			
               <div class="col-md-12">
			  
			   
			   <table class="tableadd" id="addtable" style="float:left">
 <div id="errorBox"></div>
<?php foreach($comp_info as $comkey){ ?>
<tr>
<td><label style="text-transform:uppercase;"><b>From,</b></label><br>
<label style="text-transform:uppercase;">Company Name: </label>&nbsp;<?php echo $comkey->name; ?><br> 
<label style="text-transform:uppercase;">Address: </label>&nbsp; <?php echo $comkey->addr1.' '.$comkey->addr2; ?> 	<br>
<label style="text-transform:uppercase;">Contact Person: </label>&nbsp; Sandhya <br>
<label style="text-transform:uppercase;">Contact no &amp; Mail id: </label>&nbsp; 7401557722/srscales.service@gmail.com <br><br>
</td>

</tr>
 <?php } ?>
 
<?php foreach($get_purchase_ordersbyid as $vendorkey){ ?>
<tr>
<td><label style="text-transform:uppercase;"><b>To,</b></label><br>
<label style="text-transform:uppercase;">Vendor Name: </label>&nbsp; <?php echo $vendorkey->to_name; ?>
<!--<input type="text" name="vendor_name" id="vendor_name" value="">--><br>
<label style="text-transform:uppercase;">Address: </label>&nbsp; <?php echo $vendorkey->to_addr; ?>
<!--<textarea name="vendor_addr" id="vendor_addr"></textarea>--><br>
<label style="text-transform:uppercase;">Contact Person: </label>&nbsp;<?php echo $vendorkey->to_cont_name; ?> 
<!--<input type="text" name="vendor_cont_name" id="vendor_cont_name" value="">--><br>
<label style="text-transform:uppercase;">Contact no: </label>&nbsp;<span><?php echo $vendorkey->to_cont_no; ?> <br></span><br>
<label style="text-transform:uppercase;">Mail id: </label>&nbsp; <?php echo $vendorkey->to_cont_mail; ?></td>
</tr>
<?php } ?>

</table>
<!--<input type="text" name="vendor_mail" id="vendor_mail" value="">--><br>
</td>

</tr>

</table>
			   
<table class="tableadd tableleft" id="addtable" style="width:40px;position:relative;left:220px;">
 <div id="errorBox"></div>
<?php foreach($get_purchase_ordersbyid as $key2){ ?>
<tr>
<td style="position: relative;left: 8px;">
<p style="margin-bottom: -25px;width: 250px;"><label style="text-transform:uppercase;">Date: <?php echo $key2->todaydate;?></label><br>
<label style="text-transform:uppercase;">P.I / Ref No: <?php echo $key2->refno;?></label><br>
<label style="text-transform:uppercase;">Tin / CST No: <?php echo $key2->cst_no;?></label></p>
</td>
</tr>
<?php } ?>
</table>			   
			   
			  <div style="margin: 0px 0px;">
			  
			  
			  
<table id="table1" class="tableadd1" style="width:100%;border:1px solid gray" border="1">
<tr style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;border:1px solid gray"><td style="text-align:center"><label>SI No</label></td><td style="text-align:center"><label>Part Number & Item Name</label></td><td style="text-align:center"><label>Qty</label></td><td style="text-align:center"><label>Rate per Unit</label></td><td style="text-align:center"><label>Total Amount</label></td></tr>

<?php foreach($get_purchase_orders_sparesbyid as $sparekey){ ?>
<tr>
<td class="plus" style="text-align:center"><?php echo $sparekey->sr_no;?></td>
<td class="item" style="text-align:center">
	<?php foreach($spare_list as $sparekey1){
				if($sparekey1->id==$sparekey->spare_name){
					echo $sparekey1->spare_name;
				}
			}
					
					?>
</td>
<td class="plus" style="text-align:center"><?php echo $sparekey->spare_qty;?></td>
<td class="plus" style="text-align:center"><?php echo $sparekey->rate;?></td>
<td class="plus" style="text-align:center"><?php echo $sparekey->spare_tot;?></td>
</tr>
<?php } ?>

<!--</table>
<br>
<table class="tableadd2" style="width:57%;float:right;margin-right: -228px;">-->
<?php foreach($get_purchase_ordersbyid as $key3){ ?>
<tr>
<td colspan="4" style="text-align:right;padding-right:50px"><label>Basic Amount</label></td>&nbsp;
<td style="text-align:center"><?php echo $key3->basicamount; ?></td>
</tr>
<tr>
<td colspan="4" style="text-align:right;padding-right:50px"><label><?php foreach($tax_list as $taxkey){if($taxkey->id==$key3->tax_id){echo $taxkey->tax_name.' '.$taxkey->tax_percentage; } }?>%</label></td>&nbsp;
<td style="text-align:center"><?php echo $key3->cst; ?></td>
</tr>
<tr>
<td colspan="4" style="text-align:right;padding-right:50px"><label>Freight</label></td>&nbsp;
<td style="text-align:center"><?php echo $key3->freight; ?></td>
</tr>
<tr>
<td colspan="4" style="text-align:right;padding-right:50px"><label>Total Amount</label></td>&nbsp;
<td style="text-align:center"><?php echo $key3->totalamount; ?></td>
</tr>
<?php } ?>
</table>
</div>

<br><br>




<!--<a id="addMoreRows" class="rowadd" style="padding: 8.5px;
margin-right: 20px;">Add Row</a>-->
                </div>
				
              </div>
           
            <div class="divider"></div> 
      
<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $sparekey->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->

           
          </div>
		  
		  <p><b>Imp Note:</b> Minimum order value should be Rs. 3000/- for spare parts.</p>
		  <p><b>Note:</b> If Shipping address is different form above address pls mention here.</p>
		  <?php foreach($get_purchase_ordersbyid as $key4){ ?>
		  <p style="margin-top:20px;width: 375px;"><b>ADDRESS:</b> <span><?php echo $key4->spec_addr; ?></span></p>
		  <p><b>Any Specific instruction:</b> <?php echo $key4->spec_ins; ?></p><br>
         
		 <?php } ?>
		  <p><b>Terms and Conditions:</b><br>
		    <ol>
			    <li>Payment 100% Advance Payment by DD/ Cash in our HDFC Bank account in favor of Arihant Marketing</li>
				<li>If "C" form not received on date, interest @24% per annum will be charged from the actual amount.</li>
				<li>All disputes subject to jurisdication of Chennai Courts.</li>
				<li>Kindly fill your order form with Part Name No clearly and send to concern person.</li>
				<li>For Parts under warranty compulsory send faulty spares for getting replacement of new; with m/c serial no, wherever applicable.</li>
				<li>Order processing will take minimum 2-3 working days.</li>
				<li>No orders will be processsed if PO value is less than Rs 3000/-</li>
				<li>Chick for stock availability before placing order.</li>
                <li>Payment details must be sent for timely dispatch.</li>
			</ol>
        </div>
       <br><br>
        <button class="btn cyan waves-effect waves-light" onClick="printDiv('printableArea')" style="float:right;position: relative;right: 130px;width: 150px;">Print<i class="fa fa-arrow-right"></i></button>
		<br><br><br><br>
		
		
		</form>
		</div>

  </div>
      </section>
      
	  
  

  <!--</div>-->
  

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

<script>
function printDiv(divName) {
	 
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
			
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
             $(".eng_spare_name").select2(); 
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
	
	$('#custtest_'+spare_rowid).val(customer_name);
	$('#cust_id_'+spare_rowid).val(cust_idd);
	
}
 </script>

</body>

</html>