

<head>

 


<style>
.rowadd {
    border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
}
.delrow{
 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
	
}
a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    color: #ffffff;
	background:#dbd0e1;
}
body{background-color:#fff;}


/* table tbody tr:first-child{
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #522276;
	background-color:#DBD0E1 !important;
	
} */
table tbody tr:first-child td > label{
	color: #fff;
	font-weight:bold;
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
			border: 1px solid #522276;
			text-align: center;
		}
		.tableadd1 tr
		{
			height: 40px;
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
	height: 25px;
border-radius: 5px;
padding-left: 10px;
margin-bottom: 0px;
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

#addtable 
{
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
.tableadd tr td input {
    width: 210px; 
    border-radius: 5px;
    padding-left: 10px;
}
.tableadd1 tr td input {
    width: 210px; 
    border-radius: 5px;
    padding-left: 10px;
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
.star{
	font-size:15px;
	color:#ff0000;
}
.btn{text-transform:none !important;}
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
url: "<?php  echo base_url(); ?>QC_Master/addrow2",
data: datastring,
cache: false,
success: function(result)
{ 
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
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var serv_loc_code = document.frmZone.serv_loc_code.value;
 var serv_loc_name = document.frmZone.serv_loc_name.value;

 if( serv_loc_code == "" )
   { //alert("Hi");
     document.frmZone.serv_loc_code.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the zone code";
     return false;
   }
   if( serv_loc_name == "" )
   {
     document.frmZone.serv_loc_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the zone name";
     return false;
   }
   
}

</script>


</head>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Add QC Parameters</h2>

          <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			<form name="frmZone" action="<?php echo base_url(); ?>QC_Master/add_qc_parameter" method="post" onsubmit="return frmValidate()">
               <div id="errorBox"></div> 
			   <div class="col-md-1">
			   </div>
			  
                <div class="col-md-10">
			   
			   
	<div class="col-md-12 tableadd" id="addtable">
		<div class="col-md-3">
			<label>Model <span class="star">*</span></label>
			<select name="model" class="qcmodel"> 
				<option value="">---Select---</option>
				<?php foreach($modellist as $mod_key){?>
				<option value="<?php echo $mod_key->id; ?>"><?php echo $mod_key->model; ?></option>
				<?php }?>
			</select>
			<div class="qcmodelerror"></div>
		</div>
	</div>
			   
			   
			   
<div style="margin: 10px 0px;" class="col-md-12">
	<table id="table1" class="tableadd1" style="width:70%;">
		<tr style="background:rgb(112, 66, 139) none repeat scroll 0% 0%">
			<td><label>QC Parameter<span class="star">*</span></label></td>
			<td><label>Value<span class="star">*</span></label></td><!--<td><label>Action</label></td>-->
		</tr>
		<tr>
			<td style="padding:10px 0;">
				<input type="text" name="qc_param[]" id="qc_param-0" class="qcparam" maxlength="50"> 
				<div class="qcparamerror"></div>
			</td>
			<td style="padding:10px 0;">
				<input type="text" name="qc_value[]" id="qc_value-0" class="qcvalue" maxlength="50"> 
				<div class="qcvalueerror"></div>
			</td>
			<td style="border:none;"><a id="addMoreRows" class="rowadd"><i class="fa fa-plus-square" aria-hidden="true" style="color:#5f3282;"></i></a></td>
		</tr>
	</table>
	<input type="hidden" name="countid" id="countid" class="" value="0" >
</div>


<button class="btn cyan waves-effect waves-light submitqc" type="submit" name="action">Submit</button>
		</div>
				<div class="col-md-1">
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

<script>
	$(function(){
		$(".qcparam").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9. ]/g,""));
		});
		$(".qcvalue").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9. ]/g,""));
		});
		
		$(".submitqc").click(function(event){
			if($(".qcmodel").find("option:selected").attr("value")=="")
			{
				$(".qcmodelerror").text("Please select the Model").show().css({
					'color':'#ff0000',
					'font-size':'12px'
				});
				event.preventDefault();
			}
			if($(".qcparam").val()==""){
				$(".qcparamerror").text("Please enter the QC Parameter").show().css({
					'color':'#ff0000',
					'font-size':'12px'
				});
				event.preventDefault();
			}
			if($(".qcvalue").val()==""){
				$(".qcvalueerror").text("Please enter the Value").show().css({
					'color':'#ff0000',
					'font-size':'12px'
				});
				event.preventDefault();
			}
		});
		
		$(".qcmodel").change(function(){
			if($(this).val()==0){
				$(".qcmodelerror").show();
			}
			else{
				$(".qcmodelerror").fadeOut('slow');
			}
		});
		
		$(".qcparam").keyup(function(){
			if($(this).val()==""){
				$(".qcparamerror").show();
			}
			else{
				$(".qcparamerror").fadeOut('slow');
			}
		});
		
		$(".qcvalue").keyup(function(){
			if($(this).val()==""){
				$(".qcvalueerror").show();
			}
			else{
				$(".qcvalueerror").fadeOut('slow');
			}
		});
		
	});
</script>


 <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  
	  
       
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
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>-->   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	

</body>

</html>