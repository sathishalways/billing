
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

<tr>

<!--<td> <select name="eng_name" id="eng_name-<?php echo $count; ?>">
           <option value="">---Select---</option>
           <?php foreach($engg_list as $enggkey){ ?>
			<option value="<?php echo $enggkey->id; ?>"><?php echo $enggkey->emp_name; ?></option>
		   <?php } ?>
		 		
          </select></td>-->
		  <td><select name="req_id[]" class="chosen-select form-control sample" id="sample1_<?php echo $count; ?>">
           <option value="">---Select---</option>
           <?php foreach($reqview as $row){ ?>
			<option value="<?php echo $row->id; ?>"><?php echo $row->request_id; ?></option>
		   <?php } ?>
		 		
          </select>
		  </td>
		  
		  <td class="plus">
		    <select class="chosen-select form-control name_select test1" name="cust[]" id="cust_id_<?php echo $count; ?>">
           <option value="">---Select---</option>
		   <?php foreach($customerlist as $customerkey){ ?>
			<option value="<?php echo $customerkey->id; ?>"><?php echo $customerkey->company_name; ?></option>
		   <?php } ?>
           
          </select>
		<!--  <input type="text" Placeholder="Name" name="cust_name[]" class="test1" id="custtest_<?php echo $count; ?>" readonly>--><i class="fa fa-plus-square fa-2x" onclick='brinfo(<?php echo $count; ?>)'></i>
		  
		  </td>
		  
		  <td class="plus">
			<select name="modelid[]" id="modelid_<?php echo $count; ?>" class="modelss">
           <option value="">---Select---</option>
           
		 		
          </select>
		 
		 </td>
		  
		  <td><select name="eng_spare_name[]" class="eng_spare_name" id="eng_spare_name-<?php echo $count; ?>">
           <option value="">---Select---</option>
           <?php foreach($spare_list as $sparekey){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
		   <?php } ?>
		 		
          </select></td>
		  
		  <td class="plus"><input type="text" Placeholder="plus" name="plus[]" id="plus-<?php echo $count; ?>" class="plus1">OR<input type="text" placeholder="minus" name="minus[]" id="minus-<?php echo $count; ?>" class="minus1"></td>
		  
		  <td class="qty"><input type="text" class="date" name="engg_date[]" id="enggdate_<?php echo $count; ?>"><input type="hidden" name="spare_qty[]" id="spare_qty-<?php echo $count; ?>"><input type="hidden" name="used_spare[]" id="used_spare-<?php echo $count; ?>" value=""><input type="hidden" name="eng_spare[]" id="eng_spare-<?php echo $count; ?>"><input type="hidden" name="amt[]" id="amt-<?php echo $count; ?>"> <input type="hidden" name="amt1[]" id="amt1-<?php echo $count; ?>"></td>
		  
		   
		  
		  <td style="padding:10px 0;"><textarea type="text" name="engg_reason[]" id="engg_reason-<?php echo $count; ?>"></textarea></td>
		 <!-- <td class="save">	<a href="#" onclick="UpdateStatus1(<?php echo $count; ?>)"><i  class="fa fa-floppy-o fa-3x"></i></a></td>-->

</tr>
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
	  $(function(){
		  $('#sample1_<?php echo $count; ?>').select2();
		   $('#cust_id_<?php echo $count; ?>').select2();
	  });
	</script>
	
	<script>

$(function(){
	//alert("bfh");
	
  $('.sample').change(function(){ //alert("hiiio");
    
   var id = $(this).val();
	//alert(id);
	
   // var idd=$(this).closest(this).attr('id');
	//alert(idd);
	// var arr= idd.split('-');
	//  var vl = arr['1'];
   //var vl=$('#countid').val();
	//alert(vl);
  //alert("spareid: "+idd);
 // $("#modelid_0 > option").remove(); 
  $('#modelid_'+<?php echo $count; ?>+ "> option").remove();
 $('#cust_id_'+<?php echo $count; ?>+ "> option").remove();
 
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getcust_name",
data: dataString,
cache: false,
success: function(data) 
{ 	
$('#modelid_'+<?php echo $count; ?>).append("<option value=''>---Select---</option>");
	$.each(data, function(index, data){
		   
		    $('#cust_id_<?php echo $count; ?>').append("<option selected='selected' value='"+data.cust+"'>"+data.customer_name+"</option>");
			
		   $('#modelid_<?php echo $count; ?>').append("<option value='"+data.prod_id+"'>"+data.model+"</option>");


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
<!--<script>
        $(function() {
              
             /*$(".property_name").select2();       
             $(".property_type").select2(); 
             $(".property1_name").select2();  
			  $(".propertymulti").select2();  
			   $(".propertymulti1").select2();  
				 $(".reference_con").select2(); */ 	
                
                  
        });
    </script>-->
<link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
    <!--<script src="<?php echo base_url(); ?>assets/select/jquery-1.8.0.min.js"></script>-->
  
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
           
			 $(".name_select").select2(); 
          
                  
        });
    </script>
	 
	 
	
	<!--<script>
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
  </script>-->
<!--<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
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
  </script>-->
  


<!--<script>
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


  <script>
$(document).ready(function(){
   $('.sample1').change(function(){ //alert("hiiio");
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
   });
 });
</script>-->








