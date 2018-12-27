

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('  <tr>  <td>  <select>  <option>---Select---</option>  <option value="spare">Spare 1</option>  <option value="spare">Spare 2</option>  <option value="spare">Spare 3</option>  <option value="spare">Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>   <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});

$(function(){
    var tbl = $("#table11");
    
    $("#addRowBtn1").click(function(){ 
	
	
        $('<tr>  <td>  <select>  <option>---Select---</option>  <option value="spare">Spare 1</option>  <option value="spare">Spare 2</option>  <option value="spare">Spare 3</option>  <option value="spare">Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>   <td style="border:none;"><button class="delRowBtn1" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
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
		if(warran){
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
			var tott = $('#total_amt').val();
			
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
			$('#service_pending_amt').val(Total_amount);
			$('#service_pending_amt1').val(Total_amount);
		}
		$(this).closest("tr").remove(); 
					
    });    
    
});
});//]]>  

</script>

<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	var modelid =$('#modelid').val();
	var engidd=$('#asssignto').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1+'&modelid='+modelid+'&engidd='+engidd;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>quotereview/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table11').append(result);
} 
});

});
  
});
</script>

<script>
$(document).ready(function(){
$('#totamt').click(function(){//alert("ddd");
	alert($('#amt').val());
   

});
  
});
</script>


    <script type="text/javascript">

    $(document).ready(function(){

        $("select").change(function(){

            $(this).find("option:selected").each(function(){

                if($(this).val()=="6"){

                    $(".box").not(".ready").hide();

                    $(".ready").show();

                }
				else if($(this).val()=="3"){

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

                }else if($(this).val()=="eng_notess"){
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
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
	
		<script>
			$(document).ready(function(){
				$(".pagerefresh").click(function() {
					location.reload(true);
				});
			});
		</script>
		
		
		<script>

$(document).ready(function() {
$('#resgister').click(function(){
      /*var isChecked = $('#r').is(':checked');
	  var isChecke = $('#r1').is(':checked');
	   var isCheck = $('#r2').is(':checked');
	  if(ischecked =='false')
	  {
      alert(isChecked);
	  alert(isChecke);
	  }*/
	  var len=$('#accept').length;
	  if(len > 0){
	  if(($('#accept').is(':checked')==false)&&($('#reject').is(':checked')==false)&&($('#later').is(':checked')==false))

		  
		{
		$("#radio_errorbox").text('Please give your acknowledge').show();
		return false
		}
	  }
   });
   $("#accept,#reject,#later").change(function(){
			if($(this).val()==""){
			    $("#radio_errorbox").show();
			}
			else{
				$("#radio_errorbox").hide();
			}
		});
   
    });

</script>
	
	<script>
$(document).ready(function(){
	if($('#uusertype').val()!=7){
	if($('#assignn_to').val()==0 || $('#assignn_to').val()==''){
		$('#addMoreRows').hide();
	}else{
		$('#addMoreRows').show();
	}
	}
});
</script>

  <style>
  a > span.fa {
    color: #fff !important;
}
  .tableadd2 tr.back td {
    background: #6c477d !important;
    border: 1px solid #6c477d !important;
    color: #fff;
    padding: 8px;
}

  input:read-only {
    background: #eee;
    border: 1px solid #ccc;
    height: 30px;
}
 textarea:read-only {
    background: #eee;
    border: 1px solid #ccc;
    
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
  
 .tableadd2 tr td input {
    margin: 10px;
    height: 30px;
 }

 .tableadd tr td label{
	width: 180px !important;
	font-weight: bold;
	font-size: 13px;
 }
 
 .header-buttons{
	position: relative;
    left: 200px;
 }
 .pagerefresh{
	 cursor:pointer;
 }
 .cyan {
    background-color: #6c477d !important;
}
 .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

          box-shadow:none !important;

        }
		a.box{

          background:gray;

        }
        [type="radio"]:not(:checked) + label, [type="radio"]:checked + label {
        	font-size: 14px;
        	font-weight: normal;
        }
        .rating label {
        	font-weight: normal;
        	padding-right: 5px;
        }
        .rating li {
        	display: inline;
        }
        input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
        	width: 100%;
			border:1px solid #ccc;
			height:30px;
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
		.breadcrumbs-title {
			font-size: 1.8rem;
			line-height: 5.804rem;
			margin: 0 0 0;
			color:#6C217E;
			font-weight:bold;
		}
		.fa {
			margin-right: 0px;
			color: #845782;
		}
		.waves-effect{
			margin-right:5px;
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
			height:33px;
			position: relative;
			top:14px;
			left: 0px;
			display:inline-block;
			margin-right: 5px;
		}
		@media only screen and (max-width: 350px){
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

		textarea {
    width: 100%;
    height: auto !important;
    background-color: transparent;
}
.noresize{
	resize: none;
}
.linkaddress {
	cursor: pointer;
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
@media only screen and (max-width: 768px) and (min-width: 240px){
ol, ul {
    margin-top: 0;
    margin-bottom: 0 !important;
}


}
.btn{text-transform:none !important;}

  </style>


<section id="content">

     
        <div class="container-fluid">
          <div class="section">
			<div class="header-buttons pull-right">
				<a class="btn cyan waves-effect waves-light " onclick="history.go(-1);"><span class="fa fa-arrow-left" data-toggle="tooltip" title="Back"></span></a> 
				
				<span class="headerDivider "></span>
				
				<span class="fa fa-refresh pagerefresh" data-toggle="tooltip" title="Refresh"></span>
			</div>
			
            <?php if(isset($offsite_flag)){?>
            <h2>Work In-progress</h2>
			<?php } else{?>
			<h2>Quote Review</h2>
			<?php }?>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			<div class="card-panel">
			
              <div class="row">
			  
			  
                <div>
                 
             
                 
                      <form action="<?php echo base_url(); ?>quotereview/add_quotereview" method="post" name="frmServiceStatus" >
                   
<?php 
//echo'<pre>';print_r($getQuoteByReqId);exit;
foreach($getQuoteByReqId as $key){
		if(isset($key->problem)){
					$problem_data = explode(",",$key->problem);
				}
	
	?>
	<?php $assign =  $key->assign_to ;?>
	<input type="hidden" name="assignn_to" id="assignn_to" value="<?php if($key->accepted_engg_id!="0"){echo $key->accepted_engg_id;}else{echo "0"; } ?>">
	
	<input type="hidden" name="empiid" id="empiid" value="<?php echo $emp_id ;?>">
	<input type="hidden" name="eengid" id="eengid" value="<?php echo $key->assign_to; ?>">
	<input type="hidden" id="uusertype" value="<?php echo $user_type;?>">
<div class="tableadd col-md-12 col-sm-12">
	
	<?php if($key->status!='16'){ ?>
	<div class="col-md-12 col-sm-12" style="padding-left:30px;padding-bottom:10px">
		<div class="col-md-2 col-sm-3"><label style="margin-bottom:0px">Acknowledgement</label></div>
		<div class="col-md-1 col-sm-3"><input type="radio" name="eng_ack" value="accept" id="accept">Accept</div>
		<div class="col-md-1 col-sm-3"><input type="radio" name="eng_ack" value="reject" id="reject">Reject</div>
		<div class="col-md-1 col-sm-3"><input type="radio" name="eng_ack" value="later" id="later">Later</div><br>
		
	</div>
	<div class="col-md-12" id="radio_errorbox" style="color:red;font-size:11px;margin-left:232px;"></div>
	<?php } ?>

	<div class="col-md-12">
		<div class="col-md-3">
			<label>Request ID:</label>
			<input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Firm Name:</label>
			<input type="text" name="cust_name" class="" value="<?php echo $key->company_name; ?>" readonly>
			<input type="hidden" name="cust_mobile" class="" value="<?php if($key->cust_mobile!=''){echo $key->cust_mobile;} ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Branch Name:</label>
			<input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly>
		</div>		
		<div class="col-md-3">
			<label>Contact Name:</label>
			<input type="text" name="cont_name" class="" value="<?php echo $key->contact_name; ?>" readonly> <input type="hidden" value="<?php echo $key->email_id;?>" name="email">
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-3">
			<label>Mobile:</label>
			<input type="text" name="cust_mobile1" class="" value="<?php echo $key->cust_mobile; ?>" readonly>
		</div>
		<div class="col-md-3 addressdiv">
			<!--<a class="linkaddress">Address</a>-->
			<label class="linkaddress">Address</label>
			<textarea class="noresize materialize-textarea" cols="22" rows="2" readonly><?php echo $key->address.' '.$key->address1; ?></textarea>
		</div>
		
		<div class="col-md-3">
			<label>Landline:</label>
			<input type="text" name="land_line" class="" value="<?php echo $key->landline; ?>" readonly>
		</div>	

		<div class="col-md-3">
			<label>Product Name:</label>
			<input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly>
			<input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>">
			<input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>">
			<input type="hidden" name="brand_name" id="brand_name" class="" value="<?php echo $key->brand_name; ?>">
			<input type="hidden" name="service_type"  class="" value="<?php echo $key->service_type; ?>">
		</div>
	</div>
	<div class="col-md-12">
		<?php if($key->serial_no=='serial_no') {?>
		<div class="col-md-3">
			<label>Serial No.:</label>
			<input type="text" name="serial_no" value="update sr no" readonly>&nbsp; <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Batch No.:</label>
			<input type="text" name="batch_no" value="batch no" readonly>
		</div>
		<?php } ?>
		
		<?php if($key->serial_no!='serial_no') {?>
		<div class="col-md-3">
			<label>Serial No.:</label>
			<input type="text" name="serial_no" value="<?php echo $key->serial_no; ?>">&nbsp; <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>">
		</div>
		<div class="col-md-3">
			<label>Batch No.:</label>
			<input type="text" name="batch_no" value="<?php echo $key->batch_no; ?>">&nbsp; <input type="hidden" value="<?php foreach($service_req_listforaddlEmp1 as $roww){ if($roww->id==""){ echo ""; }else {echo $roww->id;} }?>" name="eng_name">
		</div>
		
		<?php } ?>

		<?php if($user_type!='7'){?>
		<div class="col-md-3">
			<label>Date Of Purchase:</label>
			<input type="text" name="purchase_date" value="<?php echo $key->purchase_date; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Warranty End Date:</label>
			<input type="text" name="warranty_date" value="<?php echo $key->warranty_date; ?>" readonly>
		</div>
		<?php } ?>
	</div>
	<div class="col-md-12">		
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
			<input type="text" name="" class="" value="<?php echo $key->machine_status; ?>" readonly>
		</div>
		<!--<div class="col-md-3">
			<label>Blanket Approval:</label>
			<input type="text" name="" class="" value="<?php if( $key->blank_app !=0){ echo $key->blank_app;} ?>" readonly>
		</div>-->
		<div class="col-md-3">
			<label>Area:</label>
			<input type="text" name="area_name" class="" value="<?php echo $key->area_name; ?>" readonly>
		</div>
	</div>
	<div class="col-md-12">			
				
		<div class="col-md-3">
			<label>Pincode:</label>
			<input type="text" name="pincode" class="" value="<?php echo $key->pincode; ?>" readonly>
		</div>
		<div class="col-md-3">
			<label>Location:</label>
			<input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly>
		</div>
	</div>	


	<div class="col-md-6 col-sm-12">
		<!-- <div class="col-md-6 col-sm-3">
			<label>Request ID:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="reque_id" class="" value="<?php echo $key->request_id; ?>" readonly>
		</div>
		<div class="col-md-6 col-sm-3">
			<label>Firm Name:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="cust_name" class="" value="<?php echo $key->company_name; ?>" readonly>
			<input type="hidden" name="cust_mobile" class="" value="<?php if($key->cust_mobile!=''){echo $key->cust_mobile;} ?>" readonly>
		</div>
		
		<div class="col-md-6 col-sm-3">
			<label>Branch Name:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="br_name" class="" value="<?php echo $key->branch_name; ?>" readonly>
		</div>
		
		<div class="col-md-6 col-sm-3"><label>Contact Name:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="cont_name" class="" value="<?php echo $key->contact_name; ?>" readonly> <input type="hidden" value="<?php echo $key->email_id;?>" name="email"></div> -->
		
		<!-- <div class="col-md-6 col-sm-3">
			<label>Mobile:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="cust_mobile1" class="" value="<?php echo $key->cust_mobile; ?>" readonly>
		</div>
		<div class="col-md-12 addressdiv" style="padding:0px;">
			<div class="col-md-6 col-sm-3 addresslabel"><a class="linkaddress">Address</a></div>
			<div class="col-md-6 col-sm-3 toggleaddress"><textarea class="noresize materialize-textarea" cols="22" rows="2" readonly><?php echo $key->address.' '.$key->address1; ?></textarea></div>
		</div>
		
		<div class="col-md-6 col-sm-3">
			<label>Landline:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="land_line" class="" value="<?php echo $key->landline; ?>" readonly>
		</div>
		
		
		<div class="col-md-6 col-sm-3">
			<label>Product Name:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="p_name" class="" value="<?php echo $key->model; ?>" readonly>
			<input type="hidden" name="modelid" id="modelid" class="" value="<?php echo $key->modelid; ?>">
			<input type="hidden" name="req_id" id="req_id" class="" value="<?php echo $req_id; ?>">
			<input type="hidden" name="brand_name" id="brand_name" class="" value="<?php echo $key->brand_name; ?>">
		</div> -->
		<!-- <?php if($key->serial_no=='serial_no') {?>
		<div class="col-md-6 col-sm-3">
			<label>Serial No.:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="serial_no" value="update sr no" readonly>&nbsp; <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>" readonly>
		</div>
		<div class="col-md-6 col-sm-3">
			<label>Batch No.:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="batch_no" value="batch no" readonly>
		</div>
		<?php } ?>
		
		<?php if($key->serial_no!='serial_no') {?>
		<div class="col-md-6 col-sm-3">
			<label>Serial No.:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="serial_no" value="<?php echo $key->serial_no; ?>">&nbsp; <input type="hidden" name="order_row_id" value="<?php echo $key->order_row_id; ?>">
		</div>
		<div class="col-md-6 col-sm-3">
			<label>Batch No.:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="batch_no" value="<?php echo $key->batch_no; ?>">&nbsp; <input type="hidden" value="<?php foreach($service_req_listforaddlEmp1 as $roww){ if($roww->id==""){ echo ""; }else {echo $roww->id;} }?>" name="eng_name">
		</div>
		
		<?php } ?> -->
		
		
		
	</div>
	

	<div class="col-md-6">
		<!-- <?php if($user_type!='7'){?>
		<div class="col-md-6 col-sm-3">
			<label>Date Of Purchase:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="purchase_date" value="<?php echo $key->purchase_date; ?>" readonly>
		</div>
		
		<div class="col-md-6 col-sm-3">
			<label>Warranty End Date:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="warranty_date" value="<?php echo $key->warranty_date; ?>" readonly>
		</div>
		<?php } ?>
		<div class="col-md-6 col-sm-3">
			<label>Date Of Request:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="request_date" value="<?php echo $key->request_date; ?>" readonly>
		</div>
		
		<div class="col-md-6 col-sm-3">
			<label>Problem:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" value="<?php if(!empty($problemlist1)){
												foreach($problemlist1 as $problemlistkey1){ 
													if (in_array($problemlistkey1->id, $problem_data)){
														echo $prob_category = $problemlistkey1->prob_category;
													}} 
												}else{
													echo $prob_category ="";
										} ?>" readonly>
		</div> -->
		<!-- <div class="col-md-6 col-sm-3">
			<label>Machine Status:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="" class="" value="<?php echo $key->machine_status; ?>" readonly>
		</div>
		
		<div class="col-md-6 col-sm-3">
			<label>Blanket Approval:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="" class="" value="<?php echo $key->blank_app; ?>" readonly>
		</div>
		
		<div class="col-md-6 col-sm-3"><label>Area:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="area_name" class="" value="<?php echo $key->area_name; ?>" readonly></div>
		
		<div class="col-md-6 col-sm-3"><label>Pincode:</label></div>
		<div class="col-md-6 col-sm-3"><input type="text" name="pincode" class="" value="<?php echo $key->pincode; ?>" readonly></div> -->
		
		
		<!-- <div class="col-md-6 col-sm-3">
			<label>Location:</label>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" name="serviceloc" class="" value="<?php echo $key->service_loc; ?>" readonly>
		</div> -->
		<!--<div class="col-md-6 col-sm-3">
			<a href="#">Address:</a>
		</div>
		<div class="col-md-6 col-sm-3">
			<input type="text" value="<?php echo $key->address.' '.$key->address1; ?>" readonly>
		</div>-->


		
	</div>

	

<!--<tr class="work1 box">
<td ><label>Work In Progress</label></td>
</tr>
<tr class="work2 box">
<td ><label>Quick Changes</label></td>
</tr>-->
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
			$qc_models = $this->workin_prog_model->get_qc_params_det($qc_key->id); 
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
<table id="table11" class="tableadd2" style="margin-bottom: 20px;">
  
  <tr class="back" > 
  <td>Spare Name<span style="color:red">*</span></td>
  <td>Quantity<span style="color:red">*</span></td>
  <td>Unit Price</td>
  <td>Amount<span style="color:red">*</span></td> 
  <td>Status</td>
  <td>Warranty claim status</td>  
  <td style="width:50px;"><a id="addMoreRows" style="padding:0px;color: #000; border-radius:5px;"><span class="fa fa-plus" ></span></a></td>
  </tr>
  
  <?php 
 if(!empty($spareIds)){
  foreach($spareIds as $key3){ foreach($key3 as $key4){ 
		 $usedspare[] = $key4->used_spare;
		 $stockspare[] = $key4->spare_qty;
		 $salesprice[] = $key4->sales_price;
 } } }//exit;
 
 $tot_spare_amt = 0;
 if(!empty($spare_amtt)){
	 //print_r($spare_amtt);
	 
  foreach($spare_amtt as $spareAmt_key){ 
		 $tot_spare_amt += $spareAmt_key;
 } }
 
 $i = 0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ $tax_amt11 = $i;}else{foreach($getTaxDefaultInfo as $taxKey){ $tax_amt11 = ($tot_spare_amt * $taxKey->tax_percentage) / 100;  }} }
 
 foreach($getServiceCatbyID as $ServiceKey){ if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ $labor_chrg = $i;}else{ $labor_chrg = $ServiceKey->service_charge;}}
 
 if(isset($getservicecharge)){ $labor_chrg = $getservicecharge;}
 
 if($WarranKey->machine_status=="Chargeable"){ $conchrg = $key->concharge;}else{$conchrg = $i;}
 
 //if(isset($tot_spare_amt) || isset($tax_amt11)  || isset($labor_chrg)  || isset($conchrg) ){
	$tottt = $tot_spare_amt+$tax_amt11+$labor_chrg+$conchrg;
  $count='0'; foreach($getQuoteReviewSpareDetByID as $ReviewDetKey2){ 
		
  ?>
	<tr> 
	 
 <td><input type="hidden" name="used_spare[]" id="used_spare<?php echo $count; ?>" value="<?php if(!empty($usedspare[$count])){echo $usedspare[$count];} ?>"><input type="hidden" name="spare_tbl_id[]" id="spare_tbl_id<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->id;?>"><select name="spare_name[]" id="sparename_<?php echo $count; ?>" class="spare_name">  
			<option value="">---Select---</option> 
			<?php foreach($spareListByModelId1 as $sparekey1){
				  if($sparekey1->id==$ReviewDetKey2->spare_id){
			?>
           <option selected="selected" value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name.' - '.$sparekey1->part_no; ?></option>
			<?php } else {?>
			<option value="<?php echo $sparekey1->id; ?>"><?php echo $sparekey1->spare_name.' - '.$sparekey1->part_no; ?></option>
			<?php } } ?>
		</select>  
		<div id="errorBox1<?php echo $count; ?>" style="color:red"></div>
 </td>  
 <td><input type="text" name="spare_qty[]" id="spareqty_<?php echo $count; ?>" value="<?php echo $ReviewDetKey2->spare_qty; ?>" class="spare_qty"><input type="hidden" value="<?php if(!empty($stockspare[$count])){echo $stockspare[$count];}?>" name="spare_qty1[]" id="spare_qty1<?php echo $count; ?>" class="">
 <div id="errorBox2<?php echo $count; ?>" style="color:red"></div></td> 
<td><input type="text" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" id="amt1<?php echo $count; ?>" class="" readonly></td> 
 <td><input type="text" value="<?php echo $ReviewDetKey2->amt; ?>" name="amt[]" id="amt<?php echo $count; ?>" class="" readonly><input type="hidden" value="<?php if(!empty($salesprice[$count])){echo $salesprice[$count];}?>" name="amt1" id="amt1<?php echo $count; ?>" class=""></td>  
 <td style="border:none;"><a class="delRowBtn1" id="delRowBtn1_<?php echo $count; ?>"><i class="fa fa-trash-o"></i></a></td>
	</tr>
  <?php $count++; }  ?>
  
  </table>
</div>  



<div class="tableadd col-md-12">
	<div class="col-md-6">
	<?php if($user_type!='7'){?>
		
		<?php if(isset($offsite_flag)){?>
		<div class="col-md-6"><label>Ratings</label></div>
	<div class="col-md-6">
		
		<ul class="rating">
			<li><label><input class="rate" type="radio" name="rating" value="1">Satisfied</label></li>
			<li><label><input class="rate" type="radio" name="rating" value="2">Good</label></li>
			<li><label><input class="rate" type="radio" name="rating" value="3">Very Good</label></li>
			<li><label><input class="rate" type="radio" name="rating" value="4">Excellent</label></li>
		</ul>
		
	</div>
		
	<?php } }?>
		<!--<div class="col-md-6"><label>Date Of Delivery:</label></div>
		<div class="col-md-6"><input type="text" name="delivery_date" id="datetimepicker7" readonly value="<?php echo $del_date;?>" >&nbsp;<input type="hidden" name="sms_mobile" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_mobile; }?>" readonly></div>-->

		<?php if($user_type!='7'){?>
		<div class="tableadd col-md-6">
	<label >Coordinator Instructions:</label>
</div>
<div class="tableadd col-md-6">
	<textarea type="text" name="notes" id="notes" cols="25" rows="3" class="materialize-textarea" readonly><?php foreach($getQuoteByReqId as $notekey){echo $notekey->notes;} ?></textarea>

</div>
<?php } ?>

	</div>
		
		

	<div class="col-md-6">
	<?php if($user_type!='7'){?>	
	<div class="col-md-6"><label>Spare Tax Amount:</label></div>
		<div class="col-md-6"><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Preventive'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?><?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Warranty'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?> <?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Rental'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?> 

		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Chargeable'){ ?><input type="hidden" name="spare_tax1" id="spare_tax1" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

		<?php $i=0; foreach($getWarrantyInfo as $WarranKey){ if($WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){ ?><input type="hidden" name="amc_typ" id="amc_typ" class="" value="<?php echo $WarranKey->machine_status; ?>" ><?php } }?>

		<input type="text" name="spare_tax" id="spare_tax" readonly class="" value="" ><input type="hidden" name="tax_type" id="tax_type" class="" value="<?php foreach($getTaxDefaultInfo as $taxKey){ echo $taxKey->tax_percentage; }?>" >
		</div>

		<div class="col-md-6"><label>Spare Total Charges:</label></div>
		<div class="col-md-6"><input type="text" name="spare_tot" id="spare_tot" readonly class="" value="" ></div>

		<div class="col-md-6"><label>Labours Charges:</label></div>
		<div class="col-md-6"><input type="text" name="labourcharge" id="labourcharge" readonly class="" value="<?php foreach($getServiceCatbyID as $ServiceKey){if($WarranKey->machine_status=='Warranty' || $WarranKey->machine_status=='Preventive' || $WarranKey->machine_status=='Rental' || $WarranKey->machine_status=='Comprehensive' || $WarranKey->machine_status=='serviceonly'){if($i !=0){echo $scharge = $i;}}else{$scharge = $ServiceKey->service_charge; if( $ServiceKey->service_charge !=0){echo $scharge = $ServiceKey->service_charge;}}} if(isset($getservicecharge)){$scharge = $getservicecharge; if($getservicecharge !=0){echo $scharge = $getservicecharge;}} ?>" ></div>
		
		<div class="col-md-6"><label>Conveyance Charges:</label></div>
		<div class="col-md-6"><input type="text" name="concharge" id="concharge" readonly class="" value="<?php if($WarranKey->machine_status=="Chargeable"){$concharg = $key->concharge; if($concharg !=0){echo $concharg = $key->concharge;}}else{if($i !=0){echo $concharg = $i;}}  ?>" ></div>

		<div class="col-md-6"><label>Total Amount:</label></div>
		<div class="col-md-6"><input type="text" name="total_amt" id="total_amt" readonly class="" value="<?php if($tottt!="0"){echo $tottt; }else{echo '';}?>" >
							  <input type="hidden" name="total_amt1" id="total_amt1" class="" value="<?php if($tottt!=""){echo $tottt; }else{echo '0';}?>" ></div>
	<?php } ?>
		<?php //if(isset($offsite_flag)){
			  ?>
		<!--<div class="col-md-6"><label>Discounts:</label></div>
		<div class="col-md-6"><input type="text" name="disc_amt" id="disc_amt" class="" value="" ></div>-->
		<?php //}?>

		<div class="col-md-6"><label>Status:</label></div>
		<div class="col-md-6">
			<?php if(isset($offsite_flag) && $user_type!='7'){?>
				
			<select name="status" style="width: 60%;" id='statuss'>
			<option value="1">---Select---</option>
			<!--<option value="approve">Approve</option>-->
					<?php foreach($status_listForoffsiteworkInpro as $statuskey){ ?>
						<option value="<?php echo $statuskey->id; ?>"><?php echo $statuskey->status; ?></option>
					   <?php } ?>
			</select>
			<?php } elseif($user_type=='7'){ ?>
			<select name="status" style="width: 60%;" id='statuss'>
			<option value="1">---Select---</option>
			<!--<option value="approve">Approve</option>-->
					<?php foreach($status_listForEmpLogin as $Empstatuskey){ ?>
						<option value="<?php echo $Empstatuskey->id; ?>"><?php echo $Empstatuskey->status; ?></option>
					   <?php } ?>
			</select>
			<?php } else{ ?>
			<select name="status" style="width: 60%;" id='statuss'>
			<option value="5">---Select---</option>
			<!--<option value="approve">Approve</option>-->
					<?php foreach($status_listForquoteInpro as $statuskey){ ?>
						<option value="<?php echo $statuskey->id; ?>"><?php echo $statuskey->status; ?></option>
					   <?php } ?>
			</select>
			<?php }  ?>
		</div>

	</div>

</div>


<div class="tableadd col-md-12">
	<input type="hidden" name="assign_to_id" id="asssignto" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->id; }?>" readonly>
	<div class="delivery box">
		<div class="col-md-3"><label>Date Of Delivery:</label></div>
		<div class="col-md-3"><input type="text" name="delivery_date1" id="datetimepicker7" value="<?php echo $del_date; ?>" ></div>
	</div>
	<div class="delivery box">
		<div class="col-md-3"><label>Comments:</label></div>
		<div class="col-md-3"><input type="text" name="comment_deliver" class="" value="" ></div>
	</div>
	<div class="delivery box">
		<div class="col-md-3"><label>Assign To:</label></div>
		<div class="col-md-3"><input type="text" name="assign_to" class="" value="<?php foreach($service_req_listforEmp1 as $Empkey){echo $Empkey->emp_name; }?>" readonly>
		</div>
	</div>

	<?php foreach($getQuoteByReqId as $statuskey1){
		if($statuskey1->status!="5"){
		?>
	<div class="onhold box">
		<div class="col-md-3"><label>Date of On-Hold:</label></div>
		<div class="col-md-3"><input type="text" name="on_hold" id="datetimepicker71" value="<?php if(isset($req_date)){echo $req_date;} ?>" ><div id='onhold_date_error'></div></div>
		
		<div class="col-md-3"><label>On Hold Reason:</label></div>
		<div class="col-md-3"><textarea type="text" name="onhold_reason" id="onhold_reason" cols="25" rows="3" class="materialize-textarea"></textarea><div id='onhold_reason_error'></div></div>
		
	</div>
	<?php } } ?>

</div>



	
	
	
	

<?php if($user_type=='7'){?>
<div class="tableadd col-md-12">
<div class="tableadd col-md-3">
	<label>Coordinator Instructions:</label>
</div>
<div class="tableadd col-md-3">
	<?php foreach($getQuoteByReqId as $notekey){echo $notekey->notes;} ?>
</div>
</div>
<?php } ?>







	<div class="tableadd col-md-12" style="margin-top:20px;">
<input type="hidden" name="usrtyp" id="usrtyp" value="<?php echo $user_type;?>">
<input type="hidden" name="usrlogid" id="usrlogid" value="<?php echo $user_id;?>">

<?php if($user_type=='7')
		{?>
<div class="col-md-3">
	<label>Engineer Notes:</label>
</div>
<!--<a id="<?php //echo $ReviewDetKey1->req_id; ?>" href="javascript:;">Click here to view history</a>-->
<?php
		}
?>
<div class="col-md-3">
	
<?php if($user_type=='7')
		{?>
	
	<div class="tableadd"><textarea type="text" name="eng_notess" id="eng_notess" cols="25" rows="3" class="materialize-textarea"></textarea>
	</div>	

<?php } ?>

</div>

<?php if($user_type=='7')
		{?>
<div class="col-md-3">
	<label>Engineer Solution:</label>
</div>
<?php } ?>

<div class="col-md-3">
	
<?php if($user_type=='7')
		{?>
	
	<div class="tableadd"><textarea type="text" name="cust_solution" id="cust_solution" cols="25" rows="3" class="materialize-textarea"></textarea>
	</div>	

<?php } ?>

</div>

	
</div>
	
	<?php
	if($user_type=='1')
	{
	?>
<div class="col-md-12">
<div class="col-md-3">
	<label>Customer Remarks </label>
</div>
<div class="col-md-3">
	<div class="tableadd"><textarea type="text" name="cust_remarkk" id="cust_remarkk" cols="25" rows="3"  class="materialize-textarea">
	</textarea>
</div>

</div>
</div>
<?php
		}
?>

<input type="hidden" name="countid" id="countid" class="" value="0" >
<table class="tableadd" style="margin-top: 25px;">



<tr >
<td >
 <button class="btn cyan waves-effect waves-light " type="submit" name="action" id="resgister">Submit
       <i class="fa fa-arrow-right"></i>

      </button>&nbsp; <a class="btn cyan waves-effect waves-light " onclick="history.go(-1);">Exit
      </a>
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
  
  
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  
	  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>   
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
  
  
  
<script type='text/javascript'>//<![CDATA[ 
$('#tot_charge').keyup(function() {
	var tot_charge = $( this ).val();
	$('#pending_amt').val(tot_charge);
});

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

<script>
$('#cmr_paid').keyup(function() { 
	var tot_charge = $('#tot_charge').val();
	var cmr_paid = $( this ).val();
	var pending_amt = parseInt(tot_charge) - parseInt(cmr_paid);
	$('#pending_amt').val(pending_amt);
});


$('#disc_amt').keyup(function() { 
	
	var disc_amt = $( this ).val();
	if(disc_amt!=""){
		var total_amt = $('#total_amt1').val();
		//alert(total_amt);
		var disc_amt = $( this ).val();
		//alert(disc_amt);
		var discount_amt = parseInt(total_amt) - parseInt(disc_amt);
		//alert(discount_amt);
		$('#total_amt').val(discount_amt);
		$('#service_pending_amt').val(discount_amt);
		$('#service_pending_amt1').val(discount_amt);
	}
	
	
   
});

$('#service_cmr_paid').keyup(function() { 

	var service_pending_amt_val = $('#service_pending_amt1').val();
	//alert(pending_amt_val);
	var service_cmr_paid = $( this ).val();
	var service_pending_amt = parseInt(service_pending_amt_val) - parseInt(service_cmr_paid);
	$('#service_pending_amt').val(service_pending_amt);
	
   
});

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

$('#datetimepicker8').datetimepicker({
	
	onChangeDateTime:logic,
	onShow:logic	
});

});
</script>

<script>
	$(document).ready(function(){
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
	
</body>

</html>