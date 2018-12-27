<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    var i=1;
    $("#addRowBtn").click(function(){
        $('  <tr><td>  <select id="sparename_'+i+'">  <option value="">---Select---</option>  <option>Spare 1</option>  <option>Spare 2</option>  <option>Spare 3</option>  <option>Spare 4</option>  </select> <div class="spare-error'+i+'"></div> </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td> <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
		$("#resgister").click(function(event){
			//alert("test");
			if($("#sparename_"+i).find("option:selected").attr("value")==""){
				alert("inside if");
				$(".spare-error"+i).text("Please choose any one spare").show().css({
					'font-size':'12px',
					'color':'#ff0000'
				});
				event.preventDefault();
			}
		});
		
		i++;
    });
   
    $(document.body).delegate(".delRowBtn1", "click", function(){
        var vals = $('#spare_tot').val();
	   
		var idd=$(this).closest(this).attr('id');
		// alert(idd);
		var arr = idd.split('_');
		var ctid = arr['1'];
		//alert(ctid);
		//alert($('#amt'+ctid).val());
		var vals = $('#spare_tot').val();
		
		vals -= Number($('#amt'+ctid).val());
		//alert(vals);
		$('#spare_tot').val(vals);
		
		var tax_amt = (vals * $('#tax_type').val()) / 100;
		var warran = $('#spare_tax1').val();
		var amc_type = $('#amc_typ').val();
		
		if(warran=='Preventive' || warran=='Warranty' || amc_type=='Comprehensive'){
			$('#spare_tax').val(0);
			$('#spare_tot').val(0);
			$('#labourcharge').val(0);
			$('#concharge').val(0);
			$('#total_amt').val(0);
			$('#total_amt1').val(0);
		}else{
			$('#spare_tax').val(tax_amt);
			var tax = $('#spare_tax').val();
			var total_spare_charge = $('#spare_tot').val();
			var labourcharge = $('#labourcharge').val();
			var concharge = $('#concharge').val();
		
			if(parseInt(labourcharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		}else if(parseInt(concharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(concharge);
		}else if(parseInt(tax)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) ;
		}else{
			var Total_amount = parseInt(total_spare_charge) ;
		}
			//alert(Total_amount);
			$('#total_amt').val(Total_amount);
		}
		
		$(this).closest("tr").remove();       
    });    
    
});
});//]]>  

</script>
<script>
		   $(function(){
			 //  alert('ddddddddd');
		   $(".eng_notess").hide();
		   $(".cust_solution").hide();
		   
		   if($("#notes_alle").find("option:selected").attr("value")=="cust_solution"){
			   $(".cust_solution").show();
			   
		   }
		   else
		   {
			   $(".cust_solution").hide();
		   }      
		   
		      if($("#notes_alle").find("option:selected").attr("value")=="eng_notess"){
			   $(".eng_notess").show();
			   
		   }
		   else
		   {
			   $(".eng_notess").hide();
		   }      
		   
		   
		   
		   
		
		   
		   
		    $("#notes_alle").change(function(){
			  
			   
			
			   if($(this).find("option:selected").attr("value")=="cust_solution"){
				$(".cust_solution").show();
				//$("#cust_remark").val("");
				$("#eng_notess").val("");
				
		
			   }
			   else{
				$(".cust_solution").hide();
			   }
			   
			   
			   
			   
			   if($(this).find("option:selected").attr("value")=="eng_notess"){
				$(".eng_notess").show();
				$(".cust_solution").hide();
				$("#cust_solution").val("");
				//$("#eng_notes").val("");
				
		
			   }
			   else{
				$(".eng_notess").hide();
			   }
			   
			   
			
			   
			   
			});
		   

		   });
		   
</script>
    <script type="text/javascript">

    $(document).ready(function(){

        $("select").change(function(){

            $(this).find("option:selected").each(function(){

                if($(this).val()=="3"){

                    $(".box").not(".ready").hide();

                    $(".ready").show();

                }

                else if($(this).val()=="4"){

                    $(".box").not(".delivery").hide();

                    $(".delivery").show();

                }
				
				else if($(this).val()=="9"){

                    $(".box").not(".onhold").hide();

                    $(".onhold").show();

                }
				
                else if($(this).attr("value")=="blue"){

                    $(".box").not(".blue").hide();

                    $(".blue").show();

                }
				
				
			
					else if($(this).val()=="eng_notess"){
					$(".box").not(".eng_notess").hide();

                    $(".eng_notess").show();
				}
				
				
					else if($(this).val()=="cust_solution"){
					$(".box").not(".cust_solution").hide();

                    $(".cust_solution").show();
				}

                else{

                    $(".box").hide();

                }

            });

        }).change();

    });

    </script>
	
	<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1+'&modelid='+modelid;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>quotereview/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table11 > tbody').append(result);
} 
});

});
  
});
</script>
	
  <style>
td, th {
    padding: 15px 5px;
    display: table-cell;
    text-align: left;
    vertical-align: top;
    border-radius: 2px;
}
  label {
    display: inline-block;
    max-width: 100%;
   margin-bottom: 0px !important;
    font-weight: 700;
}
  .tableadd tr td input {
    width: 210px !important;
	border:none;
 }
 .tableadd tr td select {
    width: 210px !important;
	
 }
 .tableadd2 tr td select {
    width: 165px;
	margin-bottom: 15px;
 }
 .tableadd2 tr.back td {
   background: #6c477d !important;
	border: 1px solid #6c477d !important;
	color: #fff;
    padding: 8px;
}
 .tableadd tr td label{
	width: 180px !important;
font-weight: bold;
font-size: 13px;
	 
 }
 td a > span.fa {
 background:#6c477d;
    color: #fff !important;
	width: 32px;
}
	.breadcrumbs-title {
		font-size: 1.8rem;
		line-height: 5.804rem;
		margin: 0 0 0;
		color:#6C217E;
		font-weight:bold;
	}
 .box{

    padding: 20px;

    display: none;

    margin-top: 20px;

    box-shadow:none !important;

}

.box1{
    display: none;

}

.rating label {
    font-weight: normal;
    padding-right: 5px;
}
    .rating li {
    display: inline;
}

input[type=text], input[type=textarea], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
	width: auto;
	 border:1px solid #ccc !important;
}
[type="radio"]:not(:checked), [type="radio"]:checked { 
	position:relative;
}
[type="radio"] + label:before, [type="radio"] + label:after {

}
[type="radio"] + label:before, [type="radio"] + label:after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	margin: 4px;
	width: 16px;
	height: 16px;
	display:none;
	z-index: 0;
	-webkit-transition: 0.28s ease;
	-moz-transition: 0.28s ease;
	-o-transition: 0.28s ease;
	-ms-transition: 0.28s ease;
	transition: 0.28s ease;
}
[type="radio"]:not(:checked) + label, [type="radio"]:checked + label {
	position: relative;
	padding-left: 5px;
	cursor: pointer;
	display: inline-block;
	height: 25px;
	line-height: 25px;
	font-size: 14px;
	-webkit-transition: 0.28s ease;
	-moz-transition: 0.28s ease;
	-o-transition: 0.28s ease;
	-ms-transition: 0.28s ease;
	transition: 0.28s ease;
	-webkit-user-select: none;
	-moz-user-select: none;
	-khtml-user-select: none;
	-ms-user-select: none;
}
.tableadd {
	padding: 0px;
 } 	

.chosen-container {
	position:relative;
	right:20px;
}
 /*.addressdiv, .toggleaddress {
		display: none;
	}*/


@media only screen and (min-width: 301px){
		.xdsoft_datetimepicker .xdsoft_datepicker.active+.xdsoft_timepicker {
			margin-top: 41px !important;
			margin-bottom: 3px;
		}

		.xdsoft_datetimepicker .xdsoft_datepicker {
			width: 154px !important;
			float: left;
			margin-left: 8px;
		}
	}


	@media only screen and (max-width: 350px) {
		.headerDivider {
			border-left:1px solid #c5c5c5 !important; 
			border-right:1px solid #c5c5c5 !important; 
			height:25px  !important;
			position: absolute !important;
			top:102px !important;
			left: 40px !important;
		}

		.toggleaddress {
			display: none;
		}
	}
		
	.fa {
		margin-right: 15px;
	}
	input[type=radio] {
		margin-left: 10px;
		margin-right: 2px;
	}
	.col-md-2, .col-md-1 {
		padding:0px;
	}
	.headerDivider {
		border-left:1px solid #c5c5c5; 
		border-right:1px solid #c5c5c5; 
		height:25px;
		position: absolute;
		top:73px;
		left: 280px;
	}
	textarea {
		width: 100%;
		height: auto !important;
		background-color: transparent;
	}
	.noresize {
		resize: none;
	}
	.linkaddress {
		cursor: pointer;
	}
	#errorBox {
		color:#F00;
	}
	.tableadd2 tr td input {
		margin: 10px;
		height: 30px;
	}

 @media only screen and (max-width: 380px) {
    td {
    	padding: 3px !important;
    }
    a {
    	padding: 3px !important;
    }
    select {
        width: 100px !important;
    }
    .tableadd2 tr td input {
	    border-radius: 5px;
	    height: 33px;
	    margin-top: 17px;
	    width: 50px;
	    margin-left: 3px;
	    margin-right: 3px;
	}
	.tableadd2 tr td select {
		padding: 0 30px 0 0;
	}
}
@media only screen and (max-width: 768px) and (min-width: 240px) {
	ol, ul {
		margin-top: 0;
		margin-bottom: 0 !important;
	}
}
.cyan {
    background-color: #6c477d !important;
	width: 90px;
}
label.appendfont{
		border:none !important;
		font-size: 0.85em !important;
	}
span.pagerefresh{
	color: #6c477d !important;
}
input:read-only{
	background:#eee;
	border:1px solid #ccc;
	height:30px;
}
input[type=text]{
	
	border:1px solid #ccc;
	height:30px;
}
input:-moz-read-only {
    background-color: #eee !important;
}

textarea:read-only{
	border:1px solid #ccc;
	height:30px;
	background:#eee;
}
.header-buttons{
	width: 190px;
    position: relative;
    left: 320px;
}
select{
	width:84%;
}
input[type=text], input[type=textarea], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    width: 100%; 
}
.btn{text-transform:none !important;}
.chosen-container .chosen-drop {
    position: absolute;
    width: auto !important;
}

/* a > span.fa {
    color: #6c477d !important;
}
 */
  </style>
  

<script>
$(document).ready(function(){
   $('.work_spare_name').change(function(){ //alert("hiiio");
	var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(ctid);
   var id = $(this).val();
   //alert("spareid: "+id);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>quotereview/getsparedet",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#spare_qty1'+ctid).val(data.spare_qty),
		   $('#amt1'+ctid).val(data.sales_price),
		   $('#used_spare'+ctid).val(data.used_spare)
		   
    });

} 
});

var engid;
	if($('#eng_idd').val()!=0){
	 engid=$('#eng_idd').val();
	}else{
	 engid=$('#eengid').val();
	}
	
	var datastrings='spareid='+id+'&engid='+engid;
	
	
	
		 
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>work_inprogress/getpettyspare",
data: datastrings,
cache: false,
success: function(data)
{ //alert(data);

$.each(data, function(index, data){
		  //alert(data.qty_plus);

		   //var qtyplus=data.qty_plus;
     //alert(qty);
	 $('#qty_plus'+ctid).val(data.qty_plus);


	});


}
});


   });
 });
</script>
<script>
		$(document).ready(function(){
			$( ".pagerefresh" ).click(function() {
				location.reload(true);
			});
		});
	</script>
	

<!--<script>

$(document).ready(function() {
	//alert("rest");
	var i=0;
	//alert($('#sparename_'+i));
$('#resgister').click(function(event){
	i++;
      /*var isChecked = $('#r').is(':checked');
	  var isChecke = $('#r1').is(':checked');
	   var isCheck = $('#r2').is(':checked');
	  if(ischecked =='false')
	  {
      alert(isChecked);
	  alert(isChecke);
	  }*/
	  var len=$('#r').length;
	  if(len > 0){
	  if(($('#r').is(':checked')==false)&&($('#r1').is(':checked')==false)&&($('#r2').is(':checked')==false))

{
$("#radio_errorbox").text('Please give your Acknowledge').show();
return false;
}
	  }
	  
	if($('#sparename_'+i).val()==0)
	{
		$('.spare-error'+i).text('Select the Spare Name').show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
		$('#sparename_'+i).focus();
		event.preventDefault();
	}
	if($('#spareqty_'+i).val()=='')
	{
		$('#error_quantity'+i).text('Enter the Spare Quantity').show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
		$('#spareqty_'+i).focus();
		event.preventDefault();
	}
	
   });
   $("#r,#r1,#r2").change(function(){
			if($(this).val()==""){
			    $("#radio_errorbox").show();
			}
			else{
				$("#radio_errorbox").hide();
			}
		});
		$("#sparename_"+i).change(function(){
			if($(this).val()==""){
			    $('.spare-error'+i).show();
			}
			else{
				$('.spare-error'+i).hide();
			}
		});
		$('#spareqty_'+i).keyup(function(){
			
				$('#error_quantity'+i).hide();
			
		});
		
		
			
		
    });

</script>-->
<script>
$(document).ready(function(){
	if($('#assignn_to').val()==0){
		$('#addMoreRows').hide();
	}else{
		$('#addMoreRows').show();
	}
});
</script>
	
	
<section id="content">

     
        <div class="container-fluid">
          <div class="section">
			
			<div class="header-buttons pull-right"><a class="btn cyan waves-effect waves-light" onclick="history.go(-1);" style="width:19%;margin-right:10px;height:29px;padding:3px 7px;"><span class="fa fa-arrow-left" data-toggle="tooltip" title="Back"></span></a> <div class="headerDivider"></div><span class="fa fa-refresh pagerefresh" data-toggle="tooltip" title="Refresh"></span></div>
			
			<?php if($job_done=='completed'){?>	
            <h2 >Completed by Engineer</h2>
			<?php } else{?>
			<h2>Work In-progress</h2>
			<?php } ?>
            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
                <div>
                 
                      <form action="<?php echo base_url(); ?>work_inprogress/edit_quotereview" method="post" name="frmworkinpro" onsubmit="return frmValidate()">
                        <div id="errorBox"></div>        
<?php 
//print_r($getQuoteByReqId);
foreach($getQuoteByReqId as $key){
		if(isset($key->problem)){
			$problem_data = explode(",",$key->problem);
		}
				
	?>
	<?php 
			if($key->accepted_engg_id!="0"){
				$get_emp_by_id = $this->workin_prog_model->get_emp_by_id($key->accepted_engg_id); 
				$emp_namess = $get_emp_by_id[0]->emp_name;
				$emp_idss = $get_emp_by_id[0]->id;
			}else{
				$emp_namess = '';
				$emp_idss = '0';
			}
			
			$assign =  $key->assign_to;
			$ass_too = explode(",",$assign);
			//print_r($ass_too);
	?>
	<input type="hidden" name="eengid" id="eengid" value="<?php echo $key->assign_to; ?>">
	<input type="hidden" name="assignn_to" id="assignn_to" value="<?php if($key->accepted_engg_id!="0"){echo $key->accepted_engg_id;}else{echo "0"; } ?>">
	<input type="hidden" name="empiid" id="empiid" value="<?php echo $emp_id ;?>">
	<input type="hidden" name="eng_idd" id="eng_idd" class="" value="<?php echo $key->accepted_engg_id; ?>" readonly></td>
<div class="tableadd col-md-12">
	<?php if($key->status!='16' && $key->accepted_engg_id!=$emp_id){ ?>
	<div class="col-md-12" style="padding-left:30px;padding-bottom:10px">
		<div class="col-md-2"><label style="margin-bottom:0px">Acknowledgement<span style="color:red">*</span></label></div>
		<div class="col-md-1"><input type="radio" name="eng_ack" value="accept" id="r">Accept</div>
		<div class="col-md-1"><input type="radio" name="eng_ack" value="reject" id="r1">Reject</div>
		<div class="col-md-1"><input type="radio" name="eng_ack" value="later" id="r2">Later</div>
	</div>
	<div class="col-md-12" id="radio_errorbox" style="color:red;font-size:11px;margin-left:232px;"></div>
	<?php } ?>
	
	<!--<div class="col-md-6">-->
	<div class="col-md-12">
		<div class="col-md-3">
			<label>Request ID:</label>
			<input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly >
		</div>
		<div class="col-md-3">
			<label>Customer Name:</label>
			<input type="text" name="cust_name" class="" value="<?php echo $key->company_name; ?>" readonly><input type="hidden" name="cust_mobile" class="" value="<?php echo $key->mobile; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Branch Name:</label>
			<input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly>
		</div>
		
		<div class="col-md-3">
			<label>Contact Name:</label>
			<input type="text" name="cont_name" class="" value="<?php echo $key->contact_name; ?>" readonly>
		</div>
		
		<input type="hidden" value="<?php echo $key->email_id;?>" name="email">
	</div>	
	<div class="col-md-12">	
		<div class="col-md-3 ">
			<!--<div class="addresslabel"><a class="linkaddress">Address</a></div>
			<div class="toggleaddress"><textarea class="noresize materialize-textarea" cols="22" rows="1" readonly><?php echo $key->address.' '.$key->address1; ?></textarea></div>-->
			<label>Address</label>
			<input  cols="22" rows="1" readonly value="<?php echo $key->address.' '.$key->address1; ?>" style="width: 100%;border:1px solid #ccc;height:32px;"/>
		</div>
		<div class="col-md-3">
			<label>Mobile:</label>
			<input type="text" name="cust_mobile1" class="" value="<?php echo $key->cust_mobile; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Landline:</label>
			<input type="text" name="land_line" class="" value="<?php echo $key->landline; ?>" readonly>
		</div>

		<!--<div class="col-md-6 col-sm-3"><label>Address:</label></div>
		<div class="col-md-6 col-sm-3"><textarea class="noresize materialize-textarea" cols="22" rows="2"><?php echo $key->address.' '.$key->address1; ?></textarea></div>-->
		
		<div class="col-md-3">
			<label>Model:</label>
			<input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly><input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>">
				<input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>">
				<input type="hidden" name="service_type"  class="" value="<?php echo $key->service_type; ?>">
		</div>
	</div>
	<div class="col-md-12">	
		<?php if($key->serial_no=='serial_no') {?>
		<div class="col-md-3">
			<label>Serial No.:</label>
			<input type="text" name="serial_no" value="update sr no" readonly>  <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>" readonly>
		</div>

		<div class="col-md-3">
			<label>Batch No.:</label>
			<input type="text" name="batch_no" value="batch no" readonly>
		</div>
		
	
		<?php } ?>
		
		<?php if($key->serial_no!='serial_no') {?>
		<div class="col-md-3">
			<label>Serial No.:</label>
			<input type="text" name="serial_no" readonly value="<?php echo $key->serial_no; ?>">  <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>">
		</div>

		<div class="col-md-3">
			<label>Batch No.:</label>
			<input type="text" name="batch_no" value="<?php echo $key->batch_no; ?>" readonly>
		</div>
	
		<div class="col-md-3">
			<label>Engineer Name: </label>
			<input type="text" name="addengg" class="" value="<?php echo $key->emp_name; ?>" readonly>
			<input type="hidden" name="addl_engg" class="" value="<?php foreach($service_req_listforaddlEmp1 as $AddlEmpkey){echo $AddlEmpkey->emp_name;} ?>" readonly>
			<input type="hidden" value="<?php foreach($service_req_listforaddlEmp1 as $roww){ if($roww->id==""){ echo ""; }else {echo $roww->id;} }?>" name="eng_name">
		</div>
		<?php } ?>
		<?php if($user_type!='7'){?>
		<div class="col-md-3">
			<label>Date Of Purchase:</label>
			<input type="text" name="purchase_date" class="date1" value="<?php echo $key->purchase_date; ?>" readonly>
		</div>
		
	<!--</div>

	<div class="col-md-6">-->
	</div>
	<div class="col-md-12">
		
		<div class="col-md-3">
			<label>Warranty End Date:</label>
			<input type="text" name="warranty_date" value="<?php echo $key->warranty_date; ?>" readonly>
		</div>
		<?php } ?>
		
		<div class="col-md-3">
			<label>Date Of Request:</label>
			<input type="text" name="request_date" value="<?php echo $key->request_date; ?>" readonly>
		</div>
		<div class="col-md-3">
		<label>Problem:</label>
		<input type="text" value="<?php if(!empty($problemlist1)){
										foreach($problemlist1 as $problemlistkey1){ 
											if (in_array($problemlistkey1->id, $problem_data)){
												echo $prob_category = $problemlistkey1->prob_category;
											}} 
										}else{
											echo $prob_category ="";
								} ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Machine Status:</label>
			<input type="text" name="machine_status" class="" value="<?php echo $key->machine_status; ?>" readonly>
		</div>
	</div>
	<div class="col-md-12">
		<!--<div class="col-md-3">
			<label>Blanket Approval:</label>
			<input type="text" name="" class="" value="<?php if($key->blank_app !=0){echo $key->blank_app;} ?>" readonly>
		</div>-->

		<div class="col-md-3">
			<label>Area:</label>
			<input type="text" name="area_name" class="" value="<?php echo $key->area_name; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Pincode:</label>
			<input type="text" name="pincode" class="" value="<?php echo $key->pincode; ?>" readonly>
		</div>
		
		<div class="col-md-3">
			<label>Location:</label>
			<input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly>
		</div>
	</div>
	<div class="col-md-12">
		

		
	</div>
<!--</div>	-->

</div>
<?php } ?>

<?php if(!empty($get_qc_parameters_details)){
				foreach($get_qc_parameters_details as $qcp_key){
					$qc_master_ids[] = $qcp_key->qc_master_id;
				}
	  }else{
		  $qc_master_ids[] = '';
	  }
	
	  $qc_models = $this->workin_prog_model->get_qc_params($key->modelid); 
		if(!empty($qc_models)){?>
<h5 class="breadcrumbs-title">QC</h5>
<table class="tableadd2" style="margin-bottom: 20px;">
  
  <tr class="back" > 
	  <td>QC Parameters</td>
	  <td>Actual value</td>
	  <td>Result value</td>
  </tr>
  <?php foreach($qc_models as $qc_key){
	  ?>
  <tr> 
	<td><?php echo $qc_key->qc_param; ?></td>  
	<td><?php echo $qc_key->qc_value; ?></td>  
	<?php if(in_array($qc_key->id, $qc_master_ids) && !empty($qc_master_ids)){
			$qc_models = $this->workin_prog_model->get_qc_params_det($qc_key->id,$req_id); 
		?>
		<td><input type="text" name="res_qc_value[]" id="res_qc_value" value="<?php echo $qc_models[0]->result_qc_value; ?>">&nbsp; <input type="hidden" name="qc_param_id[]" id="qc_param_id" value="<?php echo $qc_models[0]->qc_master_id; ?>"></td>  
	<?php } else{?>
	<td><input type="text" name="res_qc_value[]" id="res_qc_value" value="">&nbsp; <input type="hidden" name="qc_param_id[]" id="qc_param_id" value="<?php echo $qc_key->id; ?>"></td>  
	
	 <?php } ?>
  </tr>
 <?php } ?>
  
  </table>
<?php } ?>
<h5 class="breadcrumbs-title">Spare Request</h5>
<div class="">
 <table id="table11" class="tableadd2" style="margin-bottom: 20px;
    width: 96% !important; margin-left: 28px;">
  
  <tr class="back" > 
  <td>Spare Name<span style="color:red">*</span></td>
  <td>Quantity<span style="color:red">*</span></td>
  <td>Unit Price</td>
  <td>Amount<span style="color:red">*</span></td>
  <td>Status</td>
  <td>Warranty Claim Status</td>
  
  
  <td style="width:50px;background: none;border: 0px"><a id="addMoreRows" style="padding:0px;color: #000; border-radius:5px; cursor:pointer;"><span class="fa fa-plus" style="margin-right: 0px;"></span></a></td>
  
  
  </tr>
   <?php 
 if(!empty($spareIds)){
  foreach($spareIds as $key3){ foreach($key3 as $key4){ 
		 $usedspare[] = $key4->used_spare;
		 $stockspare[] = $key4->spare_qty;
		 $salesprice[] = $key4->sales_price;
 } } }//exit;
  $count='0';

  foreach($getQuoteReviewSpareDetByID as $ReviewDetKey2){ 
		
  ?>
	<tr> 
	 
 <td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];} ?>">
 <input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>">
 <select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="work_spare_name" >  
			<option value="0">---Select---</option> 
			<?php foreach($spareListByModelId1 as $sparekey1){
				  if($sparekey1->id==$ReviewDetKey2->spare_id){
			?>
           <option selected="selected" value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name.' - '.$sparekey1->part_no; ?></option>
			<?php } else {?>
			<option value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name.' - '.$sparekey1->part_no; ?></option>
			<?php } } ?>
		</select>  
		<div class="spare-error<?php echo $count; ?>" style="color:red;"></div>
		
	<?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr11-<?php echo $count; ?>" 
	>
		<label class="form-control appendfont" >Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize"><?php echo $ReviewDetKey2->desc_failure;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr11-<?php echo $count; ?>" >
		<label class="form-control appendfont" >Description of Failure</label>
		<textarea name="desc_failure[]" id="desc_failure" value="" class="noresize"></textarea>
	</div>
	<?php } ?>	
	<div name="error_sparename" id="error_sparename"></div>
		
 </td>  
 <td><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->spare_qty; ?>" class="spare_qty" ><input type="hidden" value="<?php if(!empty($stockspare[$count])){echo $stockspare[$count];}?>" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class="">
 <input  type="hidden" value="" name="qty_plus" id="qty_plus<?php echo $count; ?>">
 <div name="error_quantity" id="error_quantity<?php echo $count; ?>" style="color:red;"></div>
 	
	<?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr12-<?php echo $count; ?>">
		<label class="form-control appendfont">Why &amp; When did it occur?</label>
		<textarea name="why_failure[]" id="why_failure" value="" class="noresize"><?php echo $ReviewDetKey2->why_failure;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr12-<?php echo $count; ?>">
		<label class="form-control appendfont">Why &amp; When did it occur?</label>
		<textarea name="why_failure[]" id="why_failure" value="" class="noresize"></textarea>
	</div>
	<?php } ?>	
	
 
 </td> 
<td>
 <input type="text" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" class="amt_style" id="amt1<?php echo $count; ?>" class="" readonly>
</td>
 <td><input type="text" value="<?php if($ReviewDetKey2->amt !=0){ echo $ReviewDetKey2->amt; }?>" name="amt[]" id="amt<?php echo $count; ?>" class="amout" readonly><input type="hidden" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" id="amt1<?php echo $count; ?>" class="">
 
 <?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>
	<div class="appendtr1<?php echo $count; ?>" id="appendtr13-<?php echo $count; ?>">
		<label class="form-control appendfont">Corrective Action</label>
		<textarea name="correct_action[]" id="correct_action" value="" class="noresize"><?php echo $ReviewDetKey2->correct_action;?></textarea>
	</div>
	<?php } ?>
	
	<?php if($ReviewDetKey2->warranty_claim_status!='to_claim'){?>
	<div class="appendtr" id="appendtr13-<?php echo $count; ?>">
		<label class="form-control appendfont">Corrective Action</label>
		<textarea name="correct_action[]" id="correct_action" value="" class="noresize"></textarea>
	</div>
	<?php } ?>	
 <div name="error_amount" id="error_amount"></div>
 </td>  
 
 <td><?php if($ReviewDetKey2->approval_status!=''){
	 if($ReviewDetKey2->approval_status =='approved'){
		 echo "Approved";
		 }else{echo "Disapproved";}}else{echo "Disapproved";} ?>
	<input type='hidden' name='approval_statusid[]' id='approval_statusid_<?php echo $count; ?>' value='<?php echo $ReviewDetKey2->approval_status;?>'> 
		 </td>  
 
 <td>
	<select name="warranty_claim_status[]" class="warranty_claim_status" id="warranty_claim_status-<?php echo $count; ?>"> 
		<option value="">---select---</option>
		<option value="to_claim" <?php if(isset($ReviewDetKey2->warranty_claim_status) && $ReviewDetKey2->warranty_claim_status=='to_claim'){?>selected='selected'<?php } ?>>To claim</option>
	</select>
 </td>
 
 <?php if($key->accepted_engg_id==$emp_id){ if($count !=0){ ?>
 <td style="border:none;" ><a class="delRowBtn1" style="font-size:20px;color: #000" id="delRowBtn1_<?php echo $count; ?>"><span class="fa fa-trash-o" style="margin-right: 0px"></span></a></td>
 <?php }} ?>
 <input type="hidden" value="<?php echo $count; ?>" id="countidd">
	</tr>
	<script>
   $(function(){
   $( "#resgister" ).click(function( event ) {
  if ( $( "#sparename_<?php echo $count; ?>" ).val() == 0 ) {
	$( ".spare-error<?php echo $count; ?>" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  }
  
  if ( $( "#spareqty_<?php echo $count; ?>" ).val() === "" ) {
	$( "#error_quantity<?php echo $count; ?>" ).text( "Field cannot be empty" ).show();
    event.preventDefault();
  } 
  
});
});
   </script>
	<script>
    $(function(){
		$("#sparename_<?php echo $count; ?>").change(function(){
			if($(this).val()==""){
			    $(".spare-error<?php echo $count; ?>").show();
			}
			else{
				$(".spare-error<?php echo $count; ?>").hide();
			}
		});
		$("#spareqty_<?php echo $count; ?>").keyup(function(){
			if($(this).val()==""){
			    $("#error_quantity<?php echo $count; ?>").show();
			}
			else{
				$("#error_quantity<?php echo $count; ?>").hide();
			}
		});
		$("#delRowBtn1_<?php echo $count; ?>").click(function(){
			$(this).closest("tr").remove();
		});
		if($('#approval_statusid').val()=='rejected'){
			$("#spareqty_<?php echo $count; ?>").attr('readonly',true);
		}
		
		
	});
</script>
	 <input type="hidden" name="spare_id[]" id="spare_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>">
  <?php $count++; }  ?>
  
  </table>
</div>



<?php 


//print_r($getQuoteReviewDetByID1);
foreach($getQuoteReviewDetByID1 as $ReviewDetKey1){ ?>
<div class="tableadd col-md-12">
<!--<div class="col-md-6">
	
</div>-->
<?php if($user_type!='7'){?>
	<div class="col-md-6">
		<div class="col-md-6">
		<label>Ratings:</label>
		</div>
		<div class="col-md-6">
			<ul class="rating">
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='1'){?>checked='checked'<?php }?> value="1">Satisfied</label></li>
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='2'){?>checked='checked'<?php }?> value="2">Good</label></li>
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='3'){?>checked='checked'<?php }?> value="3">Very Good</label></li>
				<li><label><input class="rate" type="radio" name="rating" <?php if(isset($ReviewDetKey1->rating) && $ReviewDetKey1->rating=='4'){?>checked='checked'<?php }?> value="4">Excellent</label></li>
			</ul>
		</div>
		<div class="tableadd col-md-6">
			<!--<label style="margin-left:20px;">Engineer Notes & Solution:</label>-->
			<a id="<?php echo $ReviewDetKey1->req_id; ?>" href="javascript:;">Click here to view history</a>
		</div>
		<div class="tableadd col-md-6" style="margin-bottom: 15px;">
			<label style="margin-left:20px;"></label>
		</div>
		<!--<div class="tableadd col-md-6">
			<label style="margin-top: 18px;margin-left: 21px;">Coordinator Instructions:</label>
		</div>
		<div class="tableadd col-md-6">
			<textarea type="text" name="notes" id="notes" cols="25" rows="3" class="materialize-textarea" readonly><?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?></textarea>
			<input type="hidden" name="oldnotes" id="notes" cols="25" rows="3" class="materialize-textarea" value="<?php if($ReviewDetKey1->notes!=""){echo $ReviewDetKey1->notes;}else{foreach($getQuoteByReqId as $notekey){echo $notekey->notes;}} ?>"/>

		</div>-->
		
	</div>
<?php } ?>	
	<div class="col-md-6">
	<?php if($user_type!='7'){?>
	
		<div class="col-md-6"><label>Spare Tax Amount:</label></div>
		<div class="col-md-6">
		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='AMC'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>
		
		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>
		
		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Rental'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>
		
		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='CMC'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>
		

		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ ?><input type="hidden" name="amc_typ" id="amc_typ" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>


		<input type="text" name="spare_tax" id="spare_tax" class="" value="<?php $s=$ReviewDetKey1->spare_tax;  if($s!=0){echo $s;}?>" readonly>
		<input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" ></div>
		
		
		<div class="col-md-6"><label>Spare Total Charges:</label></div>
		<div class="col-md-6"><input type="text" name="spare_tot" id="spare_tot" class="" value="<?php if($ReviewDetKey1->spare_tot !=0){echo $ReviewDetKey1->spare_tot;} ?>" readonly></div>


	<!--	<div class="col-md-6"><label>Labour Charges:</label></div>
		<div class="col-md-6"><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php //foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){echo $i;}else{echo $ServiceKey->service_charge;}} if(isset($getservicecharge)){echo $getservicecharge;} ?>" readonly></div> -->
		
		
				<div class="col-md-6"><label>Labour Charges:</label></div>
		<div class="col-md-6"><input type="text" name="labourcharge" id="labourcharge" class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='CMC' || $WarranKey->machine_status=='serviceonly'){ if($i !=0){echo $i;}}else{ if($ServiceKey->service_charge !=0){echo $ServiceKey->service_charge;}}} if(isset($getservicecharge)){if($getservicecharge!=0){echo $getservicecharge;}} ?>" readonly></div>
		
		<div class="col-md-6"><label>Conveyance Charges:</label></div>
		<div class="col-md-6"><input type="text" name="concharge" id="concharge" class="" value="<?php if($WarranKey->machine_status=="Chargeable"){if($key->concharge !=0){echo $key->concharge;}}else{if($i!=0){echo $i;}} ?>" readonly></div>
		<div class="col-md-6"><label>Total Amount:</label></div>
		<div class="col-md-6"><input type="text" name="total_amt" id="total_amt" class="" value="<?php if($ReviewDetKey1->total_amt !=0){ echo $ReviewDetKey1->total_amt; }?>" readonly><input type="hidden" name="total_amt1" id="total_amt1" class="" value="<?php echo $ReviewDetKey1->total_amt; ?>" ></div>
	<?php } ?>

	
	

	
	
		<div class="col-md-6"><label>Status</label></div>
		<?php foreach($get_status as $get_statusKey){ $stat = $get_statusKey->status;}?>
		<?php if($job_done=='completed'){?>
		<input type="hidden" name="job_done" value="<?php echo $job_done; ?>">
		<div class="col-md-5">
			<?php if($user_type=='7'){?>
			<select name="status" id='statuss' style="width: 267px !important;">
			<option value="16">---Select---</option>
						<?php foreach($status_listForEmpLogin as $empstatuskey){
							  if($empstatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } } ?>
			</select>
			<?php }else{?>
			<select name="status"  id='statuss' style="width: 267px !important;">
			<option value="16">---Select---</option>
						<?php foreach($status_listForworkInpro as $workinprostatuskey){
							  if($workinprostatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } } ?>
			</select>	
				
			<?php  } ?>
		</div>
		<?php } else{ ?>
		<div class="col-md-5">
			<?php if($user_type=='7'){ ?>
			<select name="status" id='statuss' style="width: 267px !important;">
			<option value="1">---Select---</option>
						<?php foreach($status_listForEmpLogin as $empstatuskey){
							  if($empstatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $empstatuskey->id; ?>"><?php echo $empstatuskey->status; ?></option>
						<?php } } ?>
			</select>
			<?php  } else{?>
				<select name="status" id='statuss' style="width: 267px !important;">
					<option value="1">---Select---</option>
						<?php foreach($status_listForworkInpro as $workinprostatuskey){
							  if($workinprostatuskey->id==$stat){
						?>
			           <option selected="selected" value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } else {?>
						<option value="<?php echo $workinprostatuskey->id; ?>"><?php echo $workinprostatuskey->status; ?></option>
						<?php } } ?>
			</select>
			<?php  } ?>
			
			
		</div>
		<?php } ?>
	</div>
</div>


<div class="tableadd col-md-12">
	<div class="col-md-6" style="padding:0px;">
		
	<!--<?php if(isset($ReviewDetKey1->onhold_date) && $ReviewDetKey1->onhold_date!=""){?>	
		<div>
			<div class="col-md-6"><label>Previous holds:</label></div>
			<div class="col-md-6"><?php $s=1; foreach($get_log_onholds as $log_hold_key){ 
											if($log_hold_key->on_hold!=""){
												echo "  ".$s.'. '.$log_hold_key->onhold_reason.' - '.$log_hold_key->on_hold;
											} 
										$s++; }	
									 ?>
			</div> 
		</div>
	<?php } ?>-->	
		<div class="ready box">
			<div class="col-md-6"><label>Date Of Delivery:</label></div>
			<div class="col-md-6"><input type="text" name="delivery_date" id="datetimepicker7" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ></div>
		</div>
		<div class="ready box">
			<div class="col-md-6"><label>Comments:</label></div>
			<div class="col-md-6"><input type="text" name="comment_ready" class=""  ></div>
		</div>
		<div class="delivery box">
			<div class="col-md-6"><label>Date Of Delivery:</label></div>
			<div class="col-md-6"><input type="text" name="delivery_date1" id="delivery_date1" value="<?php echo $ReviewDetKey1->delivery_date; ?>" ></div>
		</div>
		<div class="delivery box">
			<div class="col-md-6"><label>Comments:</label></div>
			<div class="col-md-6"><input type="text" name="comment_deliver" class=""  ></div>
		</div>
		<div class="delivery box">
			<div class="col-md-6"><label>Assign To:</label></div>
			<div class="col-md-6"><input type="text" name="assign_to" class="" value="<?php echo $emp_namess; ?>" readonly><input type="text" name="assign_to_id" class="" value="<?php echo $emp_idss; ?>" readonly></div>
		</div>

		
		
		<div style="margin-left:30px;margin-top:15px;">
			
		</div>
	</div>
</div>
<div class="col-md-12">
		<div class="onhold box">
			<div class="col-md-6">
			<div class="col-md-6" style="margin-left: -30px;"> <label>Date of On-Hold:</label></div>
			<div class="col-md-6" style="margin-left:14px;width:296px"><input type="text" name="on_hold" class="date" value="<?php echo $req_date; ?>" id='onhold_date' ><div id='onhold_date_error' style='color:red'></div></div>
			</div>
			<div class="col-md-6">
			<div class="col-md-6" style="margin-left:-20px;"><label>On Hold Reason:</label></div>
			<div class="col-md-6" style="margin-left: -30px;"><textarea type="text" name="onhold_reason" id="onhold_reason" cols="25" rows="3"  style="width: 265px;" class="materialize-textarea"></textarea>
			<div id='onhold_reason_error' style='color:red'></div></div>
			</div>
			
		</div>
</div>
<!--<?php //if($user_type!='7'){?>  worked on 05-08-2017
<div class="tableadd col-md-12">

</div>
<?php //} ?>

<?php //if($user_type=='7'){?>
<div class="tableadd col-md-12">

</div>
<?php //} ?>-->






<div class="tableadd col-md-12">
<input type="hidden" name="usrtyp" id="usrtyp" value="<?php echo $user_type;?>">
<input type="hidden" name="usrlogid" id="usrlogid" value="<?php echo $user_id;?>">


<?php if($user_type=='7')
		{?>
<div class="col-md-3">
	
	<a id="<?php echo $ReviewDetKey1->req_id; ?>" href="javascript:;">Click here to view history</a><br>
	<label>Engineer Notes:</label>
</div>

<?php } ?>




	<div class="col-md-3 ">
		
	<?php if($user_type=='7')
		{?>
	<div>
	<div class="tableadd"><textarea type="text" name="eng_notess" id="eng_notess" cols="25" rows="3" class="materialize-textarea"     style="width: 265px;"></textarea>
	</div>
	</div>
	<?php }?>
	
</div>

<?php if($user_type=='7')
		{?>
<div class="col-md-3" >
	<label>Engineer Solution:</label>
</div>
<?php } ?>

<div class="col-md-3 ">
	<?php if($user_type=='7')
		{?>
	<div>
	<div class="tableadd" style="margin-left:-66px;"><textarea type="text" name="cust_solution" id="cust_solution" cols="25" rows="3" class="materialize-textarea"  style="width: 265px;"></textarea>
	</div>	
</div>
<?php }?>
</div>

	
</div>
<?php if($user_type=='1')
		{?>
<div class="col-md-12">

<!--<div class="col-md-3 col-md-offset-3">
<a id="<?php echo $ReviewDetKey1->req_id; ?>" href="javascript:;">Click here to view history</a>
</div>-->

</div>


<div class="col-md-12">
<div class="col-md-3">
	<label>Customer Remarks </label>
</div>
<div class="col-md-3">
	<div class="tableadd"><textarea type="text" name="cust_remarkk" id="cust_remarkk" cols="25" rows="3" class="materialize-textarea"></textarea>
	<!--<?php if($ReviewDetKey1->cust_remark!=""){echo $ReviewDetKey1->cust_remark;} ?>-->
</div>

</div>
</div>
<?php
		}
?>

				<script>
							$(document).ready(function() { 
							//alert("nquwe");
								$("#<?php echo $ReviewDetKey1->req_id; ?>").click(function() {
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>work_inprogress/view_history/<?php echo $ReviewDetKey1->req_id; ?>/<?php echo $user_type;?>/<?php echo $emp_idss;?>',
					type : 'iframe',
					padding : 5
				});
			});
			});
			</script>	
	
<?php } ?>
<input type="hidden" name="countid" id="countid" class="" value="<?php echo $count; ?>" >

<table class="tableadd" style="margin-top: 25px;">


<tr>
<td>
	<button class="btn cyan waves-effect waves-light " type="submit" name="action" id="resgister">Submit
       </button>
							 
							  
							  <!--<button class="btn cyan waves-effect waves-light " onclick="history.go(-1);">Exit
                              </button>-->
							  <a href='<?php  echo base_url(); ?>pages/workin_prog_list' class="btn cyan waves-effect waves-light ">Exit</a>
</td>
</tr>


</table>
           
                        </div>
                     
                  
                      </form>
                  
                
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
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
  


<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
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

}//]]>  

</script>  
<script>
$(document).ready(function(){
	$('#resgister').click(function(event){ 
	if($('#statuss').val()==9){
		if($('#onhold_reason').val()==''){
			$('#onhold_reason_error').text('Enter the Reason').show();
			event.preventDefault();
		}
		if($('#onhold_date').val()==''){
			$('#onhold_date_error').text('Enter the Date').show();
			event.preventDefault();
		}
	}
	});
	$('#onhold_reason').keyup(function(){
		$('#onhold_reason_error').hide();
	});
	$('#onhold_date').keyup(function(){
		$('#onhold_date_error').hide();
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.appendtr').hide();	
	$(".warranty_claim_status").change(function(){
		var idd=$(this).closest(this).attr('id');
		//alert(idd);
		var arr= idd.split('-');
		var vl = arr['1'];
		//alert("HII: "+vl);	
		var warran_val = $("#warranty_claim_status-"+vl).val();
		//alert("test: "+warran_val);
		
		if(warran_val=="to_claim"){ 
			$("#appendtr11-"+vl).show();
			$("#appendtr12-"+vl).show();
			$("#appendtr13-"+vl).show();
			
        }
		
		if(warran_val==""){ 
			$("#appendtr11-"+vl).hide();
			$("#appendtr12-"+vl).hide();
			$("#appendtr13-"+vl).hide();
        }
		
    });
	
});
</script>



<script>
$(function(){
	
$('.spare_qty').keyup(function() { //alert($(this).val());
	
	
	//alert(spareid);
    var idd=$(this).closest(this).attr('id');
	//alert(idd);
	var arr = idd.split('_');
	var ctid = arr['1'];
	var warran = $('#spare_tax1').val();
	var amc_type = $('#amc_typ').val();
	var engid=$('#eng_idd').val();
	
	var spareid=$('#sparename_'+ctid).val();
	//alert(spareid);
	var datastring='spareid='+spareid+'&engid='+engid;
	
	var qty = $(this).val();
   // var actual_qty = $('#spare_qty1'+ctid).val();
   
	if(parseInt($(this).val()) && $(this).val()){
		 
	
	

		   var qtyplus=$('#qty_plus'+ctid).val();
     //alert(qty);

		if(parseInt(qty) > parseInt(qtyplus)){ //alert("hiii");
	  alert("Qty is only: "+ qtyplus + " nos. So please enter below that.");
	  $('#spareqty_'+ctid).val('');
	   $('#amt'+ctid).val('');
	  
	}else{
		var cal_amt = parseInt($(this).val()) * parseInt($('#amt1'+ctid).val());
		if(parseInt(cal_amt)){
			$('#amt'+ctid).val(cal_amt);
		}
		
	}

   
	
   }else{ //alert("else");
	   $('#amt'+ctid).val('');
   } 

   var vals = 0;
   var ii=0;
   $('input[name="amt[]"]').each(function() { alert("dsd");
					//alert($(this).val());
			if($('#approval_statusid_'+ii).val()=='approved'){
                vals += Number($(this).val());
				//alert(val);
				$('#spare_tot').val(vals);
				
				
			}	
           ii++; });
			
	var tax_amt = (vals * $('#tax_type').val()) / 100;
	if(warran=='Preventive' || warran=='Warranty' || amc_type=='Comprehensive'){
		$('#spare_tax').val(0);
		$('#spare_tot').val(0);
		$('#labourcharge').val(0);
		$('#concharge').val(0);
		$('#total_amt').val(0);
		$('#total_amt1').val(0);
		
	}else{
		$('#spare_tax').val(tax_amt);
		var tax = $('#spare_tax').val();
		var total_spare_charge = $('#spare_tot').val();
		var labourcharge = $('#labourcharge').val();
		var concharge = $('#concharge').val();
		
		if(parseInt(labourcharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		}else if(parseInt(concharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(concharge);
		}else{
			var Total_amount = parseInt(total_spare_charge);
		}
		
		//var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		//alert(Total_amount);
		$('#total_amt').val(Total_amount);
	}
    //$('input[name="res"]').val(val);
   i++;
   
});

});
</script>  
<script>
$(function(){
	
		
	var warran = $('#spare_tax1').val();
	var amc_type = $('#amc_typ').val();
   var spareid=$('#sparename_0').length;
   //alert(spareid);
   var vals = 0;
   var ii=0;
   if(spareid !=0){
   if($('#total_amt').val() =='' ){
   $('input[name="amt[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
			if($('#approval_statusid_'+ii).val()=='approved'){
                vals += Number($(this).val());
				//alert(val);
				$('#spare_tot').val(vals);
				
				
			}else{
				vals += Number(0);
				//alert(val);
				$('#spare_tot').val(vals);
			}	
           ii++; });
  
			
	var tax_amt = (vals * $('#tax_type').val()) / 100;
	if(warran=='Preventive' || warran=='Warranty' || amc_type=='Comprehensive'){
		$('#spare_tax').val(0);
		$('#spare_tot').val(0);
		$('#labourcharge').val(0);
		$('#concharge').val(0);
		$('#total_amt').val(0);
		$('#total_amt1').val(0);
		
	}else{ //alert('safasl');
		$('#spare_tax').val(tax_amt);
		var tax = $('#spare_tax').val();
		var total_spare_charge = $('#spare_tot').val();
		var labourcharge = $('#labourcharge').val();
		var concharge = $('#concharge').val();
		
		if(parseInt(labourcharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		}else if(parseInt(concharge)){
			var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(concharge);
		}else{
			var Total_amount = parseInt(total_spare_charge);
		}
		
		//var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		//alert(Total_amount);
		$('#total_amt').val(Total_amount);
	}
    //$('input[name="res"]').val(val);
   i++;
   }
   }else{
	   var tax_amt = (vals * $('#tax_type').val()) / 100;
	if(warran=='Preventive' || warran=='Warranty' || amc_type=='Comprehensive'){
		$('#spare_tax').val(0);
		//$('#spare_tot').val(0);
		$('#labourcharge').val(0);
		$('#concharge').val(0);
		$('#total_amt').val(0);
		$('#total_amt1').val(0);
		
	}else{ //alert('safasl');
		$('#spare_tax').val(tax_amt);
		var tax = $('#spare_tax').val();
		//var total_spare_charge = $('#spare_tot').val();
		var labourcharge = $('#labourcharge').val();
		var concharge = $('#concharge').val();
		
		if(parseInt(labourcharge)){
			var Total_amount = parseInt(tax) + parseInt(labourcharge) + parseInt(concharge);
		}else if(parseInt(concharge)){
			var Total_amount = parseInt(tax) + parseInt(concharge);
		}else{
			var Total_amount = parseInt(labourcharge);
		}
		
		//var Total_amount = parseInt(tax) + parseInt(total_spare_charge) + parseInt(labourcharge) + parseInt(concharge);
		//alert(Total_amount);
		$('#total_amt').val(Total_amount);
	}
   }
	
});


</script> 
 


<script>
$('#cmr_paid').keyup(function() { 

	var pending_amt_val = $('#pending_amt1').val();
	//alert(pending_amt_val);
	var cmr_paid = $( this ).val();
	var pending_amt = parseInt(pending_amt_val) - parseInt(cmr_paid);
	$('#pending_amt').val(pending_amt);
	
   
});

$('#service_cmr_paid').keyup(function() { 

	var service_pending_amt_val = $('#service_pending_amt1').val();
	//alert(pending_amt_val);
	var service_cmr_paid = $( this ).val();
	
	if(service_cmr_paid){
		var service_pending_amt = parseInt(service_pending_amt_val) - parseInt(service_cmr_paid);
	$('#service_pending_amt').val(service_pending_amt);
	}else{
		$('#service_pending_amt').val(service_pending_amt_val);
	}
	
	
	
   
});

$('#disc_amt').keyup(function() { 
	
	var disc_amt = $( this ).val();
	if(disc_amt){
		var total_amt = $('#total_amt1').val();
		//alert(total_amt);
		var disc_amt = $( this ).val();
		//alert(disc_amt);
		var discount_amt = parseInt(total_amt) - parseInt(disc_amt);
		//alert(discount_amt);
		$('#total_amt').val(discount_amt);
		$('#service_pending_amt').val(discount_amt);
		$('#service_pending_amt1').val(discount_amt);
	}else{
		var total_amt = $('#total_amt1').val();
		
		$('#total_amt').val(total_amt);
		$('#service_pending_amt').val(total_amt);
		$('#service_pending_amt1').val(total_amt);
	}
	
	
   
});

</script>
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

$('#delivery_date1').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

$('#on_hold1').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});


});
</script>


<script>
	$(document).ready(function(){
		$(".work_spare_name").chosen();
		$('.addresslabel').click(function() {
			$('.toggleaddress').toggle();
		});
		
		
	});
</script>



<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js'></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css">

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
	
</body>



</html>