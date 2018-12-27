

<head>
<style>
body{background-color:#fff;}
.link{
	  border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    
color:#5f3282;
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
			border: 1px solid #522276;
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
		
.tableadd1 tr td.plus
{
	padding-top: 14px;
}
.tableadd1 tr td.plus input
{
	width:100px;
	border:1px solid gray;
	
}
.tableadd1 tr td input{
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
.rowadd {
    /* border: 1px solid #055E87 !important; */
    background: rgb(112, 66, 139) none repeat scroll 0% -1%;
    padding: 4px;
    border-radius: 5px;
    color: #ffffff;
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

.tableadd1 tr td label {
    line-height: 0;
    color: #ffffff;
    font-weight: bold;
}
#errorBox{
 color: #f00;
    margin-left: 293px;
    position: relative;
    right: 281px;
    top: 5px;
	font-size:11px;
 }
 #modelerror{
	 color:#ff0000;
	 font-size:11px;
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
    .btn, .btn-large, .btn-flat {
    	    text-transform: none;
    }
.star{
	color:#ff0000;
	font-size:12px;
}
a{
	color: #522276;
}
a:hover{
	color: #522276;
	cursor:pointer;
}
a:focus{
	color: #522276;
}
a:active{
	color: #522276;
}

</style>

<script>
	$(function() {
		$(document.body).delegate(".delRowBtn", "click", function(){
		    $(this).closest("tr").remove();        
		});
	})
</script>
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
	 var category=$('#service_cat-0').val();
   // var datastring='countid='+vl1;
	var datastring='countid='+vl1+'&category='+category;
	//disable_select_options(); 
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Servicecategory/addrow2",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('.tableadd1').append(result);
		disable_select_options(); 
} 
});

});
  
});
</script>
<script>
$(function(){ 
$('html body').on('change','select[name="model[]"]',function(){ //alert('sdfl');
            disable_select_options();             
        });
  });      
        function disable_select_options(){ 
    
            
            var sra_selected = [];
            $('select[name="model[]"]').each(function(){ 
				if($(this).val() !== ''){
                 sra_selected.push($(this).val());                 
				} 
            });
            console.log(sra_selected);
            $('select[name="model[]"]').each(function(){ 
                $(this).find('option:not(:selected)').each(function(){
                    var value = $(this).attr('value');
                    var pos = $.inArray(value,sra_selected);
                    if(pos >= 0 ){ 
                        $(this).attr('disabled','disabled');
                    }
                });
            });
            //console.log(sra_selected);
        }
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
 var service_cat = document.frm_servicecharge.service_cat.value;
  
   if( service_cat == "" )
   { 
     document.frm_servicecharge.service_cat.focus() ;
	 document.getElementById("errorBox").innerHTML = "Select the Service Category";
     return false;
   }
   
   if( document.getElementById("model-0").value == "")
   { 
	 document.getElementById("modelerror").innerHTML = "Select the Model";
     return false;
   }
  
}

</script>
</head>
<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Add Service Charge</h2>

          
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			<form name="frm_servicecharge" action="<?php echo base_url(); ?>Servicecategory/add_service_charge" method="post" onsubmit="return frmValidate()">
        
        <div class="col-md-12">
			<div class="tableadd" id="addtable">
				<div class="col-md-12">
					<div class="col-md-3"><label>Service Category<span class="mandatory"  style="color:red;">*</span></label></div>
					<div class="col-md-3"><select name="service_cat" id="service_cat-0">
							<option value="">---Select---</option>
							<?php 
								
								if(!empty($service_charge_ByGrp)){
										foreach($service_charge_ByGrp as $serv_grp){
											$service_cat_id[] = $serv_grp->service_cat_id;
										}
								}
								
								foreach($list as $listkey){ 
									if(!in_array($listkey->id,$service_cat_id)){
								?>
							<option value="<?php echo $listkey->id; ?>"><?php echo $listkey->service_category; ?></option>
								<?php } } ?>
						</select>
						
					</div>
					<div id="errorBox" class="col-md-6"></div>
				</div>
				
			</div>
		
			   
			   
			   
<div id="table1" class="col-md-12" style="margin: 30px 20px;">		  
			  
			  
<table  class="tableadd1" style="width:70%;">
	<tr class="rowadd">
		<td><label>Model <span class="star">*</span></label></td>
		<td><label>Charge</label></td><!--<td><label>Action</label></td>-->
	</tr>

	<tr>
		<td>
			<select name="model[]" id="model-0" class="eng_spare_name" onchange='service_model-0'>
				<option value="">---Select---</option>
				<?php foreach($modellist as $modelkey){ ?>
				<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
				<?php } ?>
			</select>
			<div id="modelerror"></div>
		</td>
		<td class="plus">
			<input type="text" name="service_charge[]" id="service_charge-0" class="">
			<a class="link" id="addMoreRows" class="rowadd" ><i class="fa fa-plus-square" aria-hidden="true"></i></a>
		</td>
		<!--  <td class="save">	<a href="#" onclick="UpdateStatus1(0)"><i  class="fa fa-floppy-o fa-3x"></i></a></td>-->
	</tr>
</table>

<input type="hidden" name="countid" id="countid" class="" value="0" >

</div>

<div class="col-md-3"><button class="btn cyan waves-effect waves-light" class="submitcategory" type="submit" name="action" style="margin-left:30px;">Submit</button></div>

</div>


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

 <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  
	  <script>
		$(function(){
			$("#service_cat-0").change(function(){
				//alert("test");
				if($(this).val()=="")
				{
					$("#errorBox").show();
				}
				else{
					$("#errorBox").fadeOut('slow');
				}
			});
			
			$("#model-0").change(function(){
				//alert("modle");
				if($(this).val()=="")
				{
					$("#modelerror").show();
				}
				else{
					$("#modelerror").fadeOut('slow');
				}
			});
		});
	  </script>
	  
	  
     
	 
</body>

</html>