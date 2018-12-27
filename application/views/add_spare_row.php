 <tr>
    
  <td>
		<select name="model[]" id="model-<?php echo $count; ?>" class="model">
            <option value="">---Select---</option>
			 <?php foreach($modellist as $modelkey){ ?>
			 <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
			 <?php } ?>
          </select>
		  <div id="errorBox1<?php echo $count; ?>" style="color:red;text-align:left;margin-left: 12px;"></div>
  
 </td> 
  <td><input type="text" name="category_name" id="category_name-<?php echo $count; ?>" readonly><input type="hidden" name="category[]" id="category-<?php echo $count; ?>" readonly></td>
  <td><input type="text" name="subcategory_name" id="subcategory_name-<?php echo $count; ?>" readonly><input type="hidden" name="subcategory[]" id="subcategory-<?php echo $count; ?>" readonly></td>
  <td><input type="text" name="brand_name" id="brand_name-<?php echo $count; ?>" readonly><input type="hidden" name="brandname[]" id="brandname-<?php echo $count; ?>" readonly>  </td>
  <td style="background:#fff;border:none;">
		<a class="delRowBtn btn btn-primary" style="border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;height: 30px;margin-left:10px;"><i class="fa fa-trash" style="line-height: 0px;"></i></a>
	</td>
 
  </tr>
<script>
$(document).ready(function(){
   $('.model').change(function(){//alert("ddddd");
	 var id = $(this).val();
	
	 var idd=$(this).closest(this).attr('id');
	 var arr= idd.split('-');
	 var vl = arr['1'];
     //alert(id);
   var dataString = 'modelno='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_productinfobyid",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#category_name-'+vl).val(data.product_category),
		   $('#category-'+vl).val(data.category),
		   
		   $('#subcategory_name-'+vl).val(data.subcat_name),
		   $('#subcategory-'+vl).val(data.subcategory),
		   
		   $('#brand_name-'+vl).val(data.brand_name),
		   $('#brandname-'+vl).val(data.brand)
    });
	
} 
});
   });
 });
</script>
<script>
$(document).ready(function(){ //alert("hii");
	$("#register").click(function(){ //alert("hiiiiii");
		//var count=<?php echo $count; ?>;
		//alert(count);
		//alert($( "#model-<?php echo $count; ?>" ).val());
if ( $( "#model-<?php echo $count; ?>" ).val() == "" ) {
	$( "#errorBox1<?php echo $count; ?>" ).text( " Select the Model" ).show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
  
});

});

</script>
<script>
     $(document).ready(function(){
	  //alert("sdf");
		$("#model-<?php echo $count; ?>").change(function(){
			
				$("#errorBox1<?php echo $count; ?>").hide();
			
		});
		
	 });
	 </script>
<!--<script>
$(document).ready(function(){  
  /*$("select").change(function() {//alert("hiii");
   $("select").find('option').prop("disabled",fale);
    var selectedItem = $(this).val();
    if (selectedItem) {
        $("select").children('option[value="' + selectedItem + '"]').prop('disabled', true);
    }
}); */
$(document).on('change', 'select', function() {
//    $('option[value="disabled"]').prop('disabled', false);
    $(this).addClass('exception');
	
    $('select').children('option[value="' + this.value + '"]').remove();
    $(this).removeClass('exception');
});
}); 
$(document).ready(function() {
            $(document).on('change','select',function(){ //alert("hiii");
        $(this).addClass('exception');
        $('option[value="' + this.value + '"]:not(.exception *)').remove();
        $(this).removeClass('exception');
    });
    });

</script>
<script>
/*$("select").change(function()
                   { alert("hii");

        var arr=[];
      $("select option:selected").each(function()
              {
                  arr.push($(this).val());
              });

    $("option").filter(function()
        {
              $(this).addClass('exception');
              return $.inArray($(this).val(),arr)>-1;
   }).attr("disabled","disabled");   
   $(this).removeClass('exception');


                   });*/
$('select').change(function() { alert("hiii");
    var myOpt = [];
    $("select").each(function () {
        myOpt.push($(this).val());
    });
    $("select").each(function () {
        $(this).find("option").prop('hidden', false);
        var sel = $(this);
        $.children.each(myOpt, function(key, value) {
            if((value != "") && (value != sel.val())) {
                sel.find("option").filter('[value="' + value +'"]').prop('hidden', true);
            }
        });
    });
});


 
	</script>-->