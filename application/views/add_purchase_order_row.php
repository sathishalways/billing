
<tr>
<td class="plus"><input type="text" name="sr_no[]" id="sr_no-<?php echo $count;?>" maxlength="5"><br><span style="color:red;"id="errorbox7-<?php echo $count;?>"></span></td>
<td><select name="spare_name[]" id="spare_name-<?php echo $count;?>" class="chosen-select form-control spare_name">
           <option value="">---Select---</option>
           <?php foreach($spare_list as $sparekey){ if($sparekey->spare_name != null){ ?>
			<option value="<?php echo $sparekey->id; ?>"><?php echo $sparekey->spare_name; ?></option>
		   <?php } }?>
		 		
          </select><br><span style="color:red;"id="errorbox5-<?php echo $count;?>"></span></td>
		  
		  <td class="plus"><input type="text" name="spare_qty[]" id="spare_qty-<?php echo $count;?>" class="spare_qty" value="" maxlength="5"><br><span style="color:red;"id="errorbox6-<?php echo $count;?>"></span></td>
		  
		  <td class="plus"><input type="text" name="rate[]" id="rate-<?php echo $count;?>" readonly></td>
		  
		  <td class="plus"><input type="text" name="spare_tot[]" id="spare_tot-<?php echo $count;?>" style="width:100px" readonly>
		  <td style="border:0"><a class="delRowBtn" class="rowadd" style="border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;"><i class="fa fa-trash" style="color:#70428b;"></i></a></td>
		 
</tr>

<script>
	$(function(){
		$(document.body).delegate(".delRowBtn", "click", function(){
			$(this).closest("tr").remove();        
		});
	});
</script>
 <script>
    $(document).ready(function(){
		
		
		$(".freight,.spare_qty,#sr_no").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9 ]/g,""));
		});
		 $( "form" ).submit(function( event ) {
		if ( $( "#spare_name-<?php echo $count;?>" ).val() === "" ) {
	$( "#errorbox5-<?php echo $count;?>" ).text( "Select the Item Name" ).show().css({'color':'#ff0000','position':'relative','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#spare_qty-<?php echo $count;?>" ).val() === "" ) {
	$( "#errorbox6-<?php echo $count;?>" ).text( "Enter the Quantity" ).show().css({'color':'#ff0000','position':'relative','bottom':'17px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( "#sr_no-<?php echo $count;?>" ).val() === "" ) {
	$( "#errorbox7-<?php echo $count;?>" ).text( "Enter the Serial No." ).show().css({'color':'#ff0000','position':'relative','bottom':'17px','font-size':'10px'});
    event.preventDefault();
  }
	 });
$("#spare_name-<?php echo $count;?>").change(function(){
			if($(this).val()==""){
			    $("#errorbox5-<?php echo $count;?>").show();
			}
			else{
				$("#errorbox5-<?php echo $count;?>").hide();
			}
		});
		$("#spare_qty-<?php echo $count;?>").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox6-<?php echo $count;?>").show();
			}
			else{
				$("#errorbox6-<?php echo $count;?>").hide();
			}
		});
		$("#sr_no-<?php echo $count;?>").keyup(function(){
			if($(this).val()==""){
			    $("#errorbox7-<?php echo $count;?>").show();
			}
			else{
				$("#errorbox7-<?php echo $count;?>").hide();
			}
		});	 
		
    });
</script>


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
		var check=data.purchase_price;
		if(check !=0){
		
		   $('#rate-'+vl).val(data.purchase_price)
		}else{
			$('#rate-'+vl).val('')
		}
			
		   
    });

} 
});
   });
 });
</script>

    <script>
	  $(function(){
		  $('#spare_name-<?php echo $count; ?>').select2();
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
<script>
$(function(){
	//alert("test");
$('.spare_qty').keyup(function() { 
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('-');
	var ctid = arr['1'];
	
	if(parseInt($(this).val()) && parseInt($('#rate-'+ctid).val())){
		
		var cal_amt = parseInt($(this).val()) * parseInt($('#rate-'+ctid).val());
		$('#spare_tot-'+ctid).val(cal_amt);
   }else{
	   $('#spare_tot-'+ctid).val('');
   }
   
   
    var vals = 0;
   $('input[name="spare_tot[]"]').each(function() { //alert("dsd");
					//alert($(this).val());
                vals += Number($(this).val());
				//alert(val);
				if(vals !=0){
				$('#basicamount').val(vals);
				}else{
					$('#basicamount').val('');
				}
					
				
				
				
            });
	
	var cst1 = $('#cst1').val();
	var cst1_arr = cst1.split('-');
	var tax_type = cst1_arr[1];
	
	var tax_amt = (vals * tax_type) / 100;
	if(tax_amt !=0){
	$('#cst').val(tax_amt);
	}else{
		$('#cst').val('');
		}
	
	var freight_amt = $('#freight').val();
	
	var total_spare_charge = $('#basicamount').val();
	
	if(parseInt($('#freight').val())){
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge) + parseInt(freight_amt);
		//alert(Total_amount);
		if(parseInt(Total_amount)){
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
	}else{
		var Total_amount = parseInt(tax_amt) + parseInt(total_spare_charge);
		//alert(Total_amount);
		if(parseInt(Total_amount)){
		$('#totalamount').val(Total_amount);
		$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
		$('#totalamount1').val('');
		}
	}
	
   
});
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


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">

    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

 <script>
    $(function(){
		$("#datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2055"
			
		});
		
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>



<script>
$(function(){
$('.freight').keyup(function() { 
	var freight_amt = $(this).val();
	
	var totalamount = $('#totalamount1').val();
	
	if(parseInt($(this).val())){
		var Totall_amount = parseInt(freight_amt) + parseInt(totalamount);
		if(parseInt(Totall_amount)){
		$('#totalamount').val(Totall_amount);
		}else{
			$('#totalamount').val('');
		}
	}else{
		if(parseInt(Totall_amount)){
		$('#totalamount').val(totalamount);
		}else{
			$('#totalamount').val('');
		}
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
		}else{
			$('#totalamount').val('');
			$('#totalamount1').val('');
		}
		
	}else{
		var Total_amount = parseInt(basicamount) + parseInt(tax_amt);
		//alert(Total_amount);
		if(Total_amount){
			$('#totalamount').val(Total_amount);
			$('#totalamount1').val(Total_amount);
		}else{
			$('#totalamount').val('');
			$('#totalamount1').val('');
		}
		
	}
	
   
});
});
</script>
 
