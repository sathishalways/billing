<tr>
<td class="plus"><input type="text" name="sr_no[]" id="sr_no"></td>
<td><select name="spare_name[]" id="spare_name-<?php echo $count;?>" class="chosen-select form-control spare_name">
           <option value="">---Select---</option>
           <?php foreach($spare_list as $sparekey){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
		   <?php } ?>
		 		
          </select></td>
		  
		  <td class="plus"><input type="text" name="spare_qty[]" id="spare_qty-<?php echo $count;?>" class="spare_qty" value="0"></td>
		  
		  <td class="plus"><input type="text" name="rate[]" id="rate-<?php echo $count;?>" readonly></td>
		  
		  <td class="plus"><input type="text" name="spare_tot[]" id="spare_tot-<?php echo $count;?>" style="width:100px" readonly>
		 
</tr>

<script>
$(document).ready(function(){
   $('.spare_name').change(function(){ //alert("hiiio");
     var id = $(this).val();
	//alert(id);
     var idd=$(this).closest(this).attr('id');
	 
	 var arr= idd.split('-');
	 var vl = arr['1'];
	// alert(vl);
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
		   $('#rate-'+vl).val(data.purchase_price)
		   
    });

} 
});
   });
 });
</script>

    <script>
	  $(function(){
		  $('#sample1_<?php echo $count; ?>').select2();
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
		   $('#custtest_<?php echo $count; ?>').val(data.customer_name),
		   $('#cust_id_<?php echo $count; ?>').val(data.cust)

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
    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>
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
$('.spare_qty').keyup(function() { 
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('-');
	var ctid = arr['1'];
	
	if(parseInt($(this).val()) && parseInt($('#rate-'+ctid).val())){
		//alert("hello");
		var cal_amt = parseInt($(this).val()) * parseInt($('#rate-'+ctid).val());
		$('#spare_tot-'+ctid).val(cal_amt);
   }else{
	   $('#spare_tot-'+ctid).val(0);
   }
   
   
    var vals = 0;
   $('input[name="spare_tot[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
                vals += Number($(this).val());
				//alert(val);
				$('#basicamount').val(vals);
				
				
				
            });
	
	var cst1 = $('#cst1').val();
	var cst1_arr = cst1.split('-');
	var tax_type = cst1_arr[1];
	
	var tax_amt = (vals * tax_type) / 100;
	
	$('#cst').val(tax_amt);
	
	var freight_amt = $('#freight').val();
	
	var total_spare_charge = $('#basicamount').val();
	
	if(parseInt($('#freight').val())){
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge) + parseInt(freight_amt);
		//alert(Total_amount);
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
	}else{
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge);
		//alert(Total_amount);
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
	}
	
   
});
</script>


<script>
$('.freight').keyup(function() { 
	var freight_amt = $(this).val();
	
	var totalamount = $('#totalamount1').val();
	
	if(parseInt($(this).val())){
		var Totall_amount = parseInt(freight_amt) + parseInt(totalamount);
		$('#totalamount').val(Totall_amount);
	}else{
		$('#totalamount').val(totalamount);
	}
	
});


$('#cst1').change(function() {
	var tax_name1 = $(this).val();
	var tax_name1_arr = tax_name1.split('-');
	var tax_name = tax_name1_arr[1];
	
	var basicamount= $('#basicamount').val();

	var tax_amt = (basicamount * tax_name) / 100;
	$('#cst').val(tax_amt);
	
	var freight_amt = $('#freight').val();
	
	if(parseInt($('#freight').val())){
		var Total_amount = parseInt(basicamount) + parseInt(tax_amt) + parseInt(freight_amt);
		//alert(Total_amount);
		if(Total_amount){
			$('#totalamount').val(Total_amount);
			$('#totalamount1').val(Total_amount);
		}
		
	}else{
		var Total_amount = parseInt(basicamount) + parseInt(tax_amt);
		//alert(Total_amount);
		if(Total_amount){
			$('#totalamount').val(Total_amount);
			$('#totalamount1').val(Total_amount);
		}
		
	}
	
   
});
</script>
