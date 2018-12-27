<!--<tr>
<td>
	<select id="spare_name_<?php echo $count; ?>" class="spare_name" name="spare_name[]">
           <option value="">---Select---</option>
		   
          </select>
</td>
<td><input type="text" name="qty[]"><input type="hidden" name="spare_qty1[]" id="spare_qty1_<?php echo $count; ?>"><input type="hidden" name="used_spare1[]" id="used_spare1_<?php echo $count; ?>"><input type="hidden" name="purchase_price1[]" id="purchase_price1_<?php echo $count; ?>"><input type="hidden" name="purchase_qty1[]" id="purchase_qty1_<?php echo $count; ?>"></td>
<td><input type="text" name="purchase_date[]"></td>
<td><input type="text" name="purchase_price[]"></td>
<td><input type="text" name="invoice_no[]"></td>
<td><input type="text" name="reason[]"></td>
<td style="border:none;"><button class="delRowBtn" >Delete</button></td>
</tr>-->
<div class="container">
          <div class="section">

	<tr>
		<td>
			<select name="model[]" class="category1" id="model_<?php echo $count; ?>">
				<option value="">---Select---</option>
				<?php foreach($modellist as $modelkey){ ?>
				<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
				<?php } ?>
		    </select>
			<div id="modelerror-<?php echo $count; ?>"></div>
			<input type="hidden" id="service_cat" value="<?php echo $cat_id; ?>">
		</td>
		<td class="plus">
			<input type="text" name="service_charge[]" id="service_charge-<?php echo $count; ?>" class="plus1"><input type="hidden" name="service_charge_id[]" class="" value="">
		</td>
		<td style="text-align:left;border:none;"><a class="delRowBtn"  onClick="$(this).closest('tr').remove();"><i class="fa fa-trash"></i></a></td>
		<!-- <td class="save">	<a href="#" onclick="UpdateStatus1(<?php echo $count; ?>)"><i  class="fa fa-floppy-o fa-3x"></i></a></td>-->
	</tr>
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
$(document).ready(function(){ //alert("gdfgdf");
$('.category1').change(function(){
		//alert("gdfgdf");
      var model=$(this).val();
	  var category=$('#service_cat').val();
	  var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	 //alert(arr);
	    var datastring='model1='+model+'&category1='+category;
	//alert(datastring);
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>Servicecategory/check_charge",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
       if(data == 0){
              
        }
        else{
			alert("Model Already Exit");
			$('#model_'+ctid+"> option").remove();
			$('#model_'+ctid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){ 
            $('#model_'+ctid).append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
			
			return false;
         }
        }
    });
 });
});
 
</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script>
$(document).ready(function(){	

	
	$('.plus1').click(function(){ //alert("hiiio");
	 var idd=$(this).closest(this).attr('id');
	 var arr= idd.split('-');
	  var vl = arr['1'];
		if(document.getElementById('minus-'+vl).value!=""){
			alert("enter any plus or minus");
			//$("#plus").attr("disabled", "disabled"); 
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   
   $('.minus1').click(function(){ //alert("hiiio");
   var idd=$(this).closest(this).attr('id');
	var arr= idd.split('-');
	  var vl = arr['1'];
		if(document.getElementById('plus-'+vl).value!=""){
			alert("enter any plus or minus");
			//$("#minus").attr("disabled", "disabled"); 
		}/* else{
			$("#minus").removeAttr("disabled"); 
			
		} */
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
<!--<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var service_cat = document.frm_servicecharge.service_cat.value;
  
   if( service_cat == "" )
   { 
     document.frm_servicecharge.service_cat.focus() ;
	 document.getElementById("errorBox").innerHTML = "select the service category";
     return false;
   }
   
   if( document.getElementById("model-0").value == "")
   { 
	 document.getElementById("modelerror").innerHTML = "select the model";
     return false;
   }
  
}

</script>
<script>

</script>

<style>
 
.delRowBtn{
	 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
	 color:#522276 !important;
	 margin-left: 10px;
 }
 .delRowBtn:hover{
	 background: transparent !important;
border: transparent !important;
color: #522276 !important;
 }
 .delRowBtn:focus{
	 background-color: transparent !important;
border-color: transparent !important;
color: #522276 !important;
 }
 .z-depth-1-half, .btn:hover, .btn-large:hover, .btn-floating:hover {
    box-shadow: none !important;
}
.plus1{
	position: relative;
right: 9px;
}

</style>


