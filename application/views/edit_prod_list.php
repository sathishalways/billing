<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
<style>
    body{background-color:#fff;}
    #errorBox {
        color:#F00;
    }
    .tableadd1 select {
        border: 1px solid #000;
        background-image:none;
        border-radius: 2px;
        width: 100%;
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
    .limitedNumbChosen {
        width: 100%;
    }
    .chosen-container {
        width: 100% !important;
    }
    .chosen-container-multi .chosen-choices {
      border: 1px solid #ccc;
    }
    textarea.materialize-textarea {
      overflow: auto;
      padding: 3px;
      resize: none;
      min-height: 10rem;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text] {
      color: #333;
    }
    select {
      border: 1px solid #ccc !important;
    }
	.star{
		color:#ff0000;
		font-size:15px;
	}
	.btn{text-transform:none !important;}
</style>
<script>
$(function(){
	//alert("test");
$("button").click(function(event){
		//alert("clcl");
		if($("#product_name").val()==""){
			$("#proderror").text("Enter the Product Name").show().css({
				'font-size':'12px',
				'color':'#ff0000',
				'position':'relative',
				'bottom':'10px'
			});
			event.preventDefault();
		}
		if($("#category").val()==""){
			$("#caterror").text("Please select the Category").show().css({
				'font-size':'12px',
				'color':'#ff0000'
			});
			event.preventDefault();
		}
		if($("#subcategory").val()==""){
			$("#subcaterror").text("Please select the Sub-Category").show().css({
				'font-size':'12px',
				'color':'#ff0000'
			});
			event.preventDefault();
		}
		if($("#brand").val()==""){
			$("#branderror").text("Please select the Brand Name").show().css({
				'font-size':'12px',
				'color':'#ff0000'
			});
			event.preventDefault();
		}
		if($("#model").val()==""){
			$("#modelerror").text("Enter the Model Name").show().css({
				'font-size':'12px',
				'color':'#ff0000',
				'position':'relative',
				'bottom':'10px'
			});
			event.preventDefault();
		}
		/*if($(".limitedNumbChosen").find("option:selected").length < 1){
			$("#infoerror").text("Please select the Addtional Information").show().css({
				'font-size':'12px',
				'color':'#ff0000'
			});
		}*/
	});
	
	$("#product_name").keyup(function(){
		if($(this).val()==""){
			$("#proderror").show();
		}
		else{
			$("#proderror").fadeOut('slow');
		}
	});
	$("#category").change(function(){
		if($(this).val()==""){
			$("#caterror").show();
		}
		else{
			$("#caterror").fadeOut('slow');
		}
	});
	$("#subcategory").change(function(){
		if($(this).val()==""){
			$("#subcaterror").show();
		}
		else{
			$("#subcaterror").fadeOut('slow');
		}
	});
	$("#brand").change(function(){
		if($(this).val()==""){
			$("#branderror").show();
		}
		else{
			$("#branderror").fadeOut('slow');
		}
	});
	$("#model").keyup(function(){
		if($(this).val()==""){
			$("#modelerror").show();
		}
		else{
			$("#modelerror").fadeOut('slow');
		}
	});
	$(".limitedNumbChosen").change(function(){
		if($(this).val()==""){
			$("#infoerror").show();
		}
		else{
			$("#infoerror").fadeOut('slow');
		}
	});
});

/*function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var product_name = document.frmProd.product_name.value,
   category = document.frmProd.category.value,
   subcategory = document.frmProd.subcategory.value,
   model = document.frmProd.model.value;
  
   
 if( product_name == "" )
   {
     document.frmProd.product_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the product name";
     return false;
   }
   if( category == "" )
   {
     document.frmProd.category.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the category name";
     return false;
   }
   if( subcategory == "" )
   {
     document.frmProd.subcategory.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the sub category name";
     return false;
   }
   if( model == "" )
   {
     document.frmProd.model.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the model";
     return false;
   }
   
}*/

</script>
 
  <script type="text/javascript">
$(document).ready(function()
{
$("#category").change(function()
{ //alert("hi");
$("#subcategory > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Product/getsub_category",
data: dataString,
cache: false,
success: function(data)
{ $('#subcategory').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#subcategory').append("<option value='"+data.id+"'>"+data.subcat_name+"</option>");
            });
} 
});

});

});

</script>
<script type="text/javascript">
/* $(document).ready(function()
{
$("#subcategory").change(function()
{
$("#brand > option").remove(); 
var subcatid=$(this).val();
categoryid = $("#category").val();
//alert("Subcat: "+id+"Cat:" +category);
var dataString = 'subcatid='+ subcatid+'&categoryid='+ categoryid;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Product/get_brand",
data: dataString,
cache: false,
success: function(data)
{ $('#brand').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data);
            $('#brand').append("<option value='"+data.id+"'>"+data.brand_name+"</option>");
            });
} 
});

});

}); */

</script>

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Edit Product Details</h2>

         <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>Product/edit_product" method="post" name="frmProd"> <!--onsubmit="return frmValidate()" -->
                       <?php foreach($list as $key){?>   
 <div id="errorBox"></div>
<table class="tableadd" style="width: 75%;">
<div class="col-md-12 tableadd1">
	<div class="col-md-3 col-sm-6 col-xs-12">
        <label>Product Name <span class="star">*</span></label>
        <input type="text" name="model" id="model" class="prod-model" value="<?php echo $key->model; ?>" maxlength="80">
		<div id="modelerror"></div>
    </div>
	
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Category <span class="star">*</span></label>
       <select name="category" id="category">
            <option value="">---Select---</option>
			<?php foreach($prodcatlist as $pcatkey){
				  if($pcatkey->id==$key->category){
			?>
           <option selected="selected" value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option>
			<?php } } ?>
</select>
<div id="caterror"></div>
    </div>
	
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Sub-Category <span class="star">*</span></label>
        <select name="subcategory" id="subcategory">
            <option value="">---Select---</option>
			<?php foreach($subcatlist as $psubcatkey){
				  if($psubcatkey->id==$key->subcategory){
			?>
			 <option selected="selected" value="<?php echo $psubcatkey->id; ?>"><?php echo $psubcatkey->subcat_name; ?></option>
			<?php } else {?>
			<option value="<?php echo $psubcatkey->id; ?>"><?php echo $psubcatkey->subcat_name; ?></option>
			<?php } } ?>
		</select>
		<div id="subcaterror"></div>
    </div>
	
	<div class="col-md-3 col-sm-6 col-xs-12">
        <label>Stock</label>
        <input type="text" name="stock_qty" id="stock_qty" class="prod-name" maxlength="80" value="<?php echo $key->stock_qty; ?>" readonly>
	</div>
	
    
</div>
<div class="col-md-12 tableadd1">
	<div class="col-md-3 col-sm-6 col-xs-12">
        <label>Enter Stock</label>
        <input type="text" name="stock_qty1" id="stock_qty1" class="prod-name" maxlength="80" value="">
	</div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Description</label>
        <textarea type="text" name="description" id="description" class="materialize-textarea"  maxlength="150"><?php echo $key->description; ?></textarea><input name="product_id" value="<?php echo $key->id; ?>" type="hidden">
    </div>

</div>
<!--<tr>
<td><label>Product Name</label></td><td><input type="text" name="product_name" id="product_name" class="" value="<?php echo $key->product_name; ?>"></td>

</tr>

<tr>
<td ><label>Category</label></td><td style="width:200px;">
<select name="category" id="category">
            <option value="">---Select---</option>
			<?php foreach($prodcatlist as $pcatkey){
				  if($pcatkey->id==$key->category){
			?>
           <option selected="selected" value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option>
			<?php } else {?>
			<option value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option>
			<?php } } ?>
</select>
</td>
</tr>
<tr>
<td ><label>Sub-Category</label></td><td style="width:200px;">
		<select name="subcategory" id="subcategory">
            <option value="">---Select---</option>
			<?php foreach($subcatlist as $psubcatkey){
				  if($psubcatkey->id==$key->subcategory){
			?>
			 <option selected="selected" value="<?php echo $psubcatkey->id; ?>"><?php echo $psubcatkey->subcat_name; ?></option>
			<?php } else {?>
			<option value="<?php echo $psubcatkey->id; ?>"><?php echo $psubcatkey->subcat_name; ?></option>
			<?php } } ?>
		</select>
</td>
</tr>
<tr>
<td ><label>Brand Name</label></td><td style="width:200px;">
<select name="brand" id="brand">
            <option value="">---Select---</option>
			<?php foreach($brandlist as $brandskey){
				  if($brandskey->id==$key->brand){
			?>
			 <option selected="selected" value="<?php echo $brandskey->id; ?>"><?php echo $brandskey->brand_name; ?></option>
			<?php } else {?>
			<option value="<?php echo $brandskey->id; ?>"><?php echo $brandskey->brand_name; ?></option>
			<?php } } ?>
           	
          </select>
</td>
</tr>


<tr>
<td><label>Model</label></td><td><input type="text" name="model" id="model" class="" value="<?php echo $key->model; ?>"></td>
</tr>
<tr>
<td><label>Description</label></td><td><textarea type="text" name="description" id="description" class="materialize-textarea" ><?php echo $key->description; ?></textarea></td>
</tr>-->
</table>

<table  class="tableadd1 tableadd" style="width: 75%;">

<!--<tr>
<td><label >Additional Information</label></td>
<td>
	<select name="addlinfo[]" multiple>
            <option value="">---Select---</option>
			 <?php foreach($accessories_list as $acckey1){ 
						if (in_array($acckey1->accessory, $addl)){
							?>
			 <option selected="selected" value="<?php echo $acckey1->accessory; ?>"><?php echo $acckey1->accessory; ?></option>
		     <?php } else{?>
			 <option value="<?php echo $acckey1->accessory; ?>"><?php echo $acckey1->accessory; ?></option>
			 <?php } }?>
          </select>
</td>
</tr>-->


<!--<tr>
<td><input type="checkbox" class="" name="addlinfo[]" value="charger" <?php if (in_array("charger", $addl)){ ?> checked='checked'<?php } ?>></td><td><input type="checkbox" class="" name="addlinfo[]" value="DataCable" <?php if (in_array("DataCable", $addl)){ ?> checked='checked'<?php } ?>></td><td><input type="checkbox" class="" name="addlinfo[]" value="Battery" <?php if (in_array("Battery", $addl)){ ?> checked='checked'<?php } ?>></td><td><input type="checkbox" class="" name="addlinfo[]" value="Headset" <?php if (in_array("Headset", $addl)){ ?> checked='checked'<?php } ?>></td><td><input type="checkbox" class="" name="addlinfo[]" value="Cover" <?php if (in_array("Cover", $addl)){ ?> checked='checked'<?php } ?>></td>
</tr>-->

	<tr>
		<td style="padding-top: 25px;">
			<button class="btn cyan waves-effect waves-light " type="submit" >Submit</button>
		</td>
	</tr>

</table>

                         
                        </div>
                     <?php } ?>
                  
                      </form>
                  
                
                </div>
             
             <div class="col-md-1">
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
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
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
	
	$(".limitedNumbChosen").chosen({
        placeholder_text_multiple: "---Select---"
      })
      .bind("chosen:maxselected", function (){
        window.alert("You reached your limited number of selections which is 2 selections!");
      });
	
	$(".prod-name").bind("keyup blur", function(){
		  $(this).val( $(this).val().replace(/[^A-Za-z0-9. ]/g,'') );
	  });
	  $(".prod-model").bind("keyup blur", function(){
		  $(this).val( $(this).val().replace(/[^A-Za-z0-9. ]/g,'') );
	  });
	
	$("textarea").removeClass("materialize-textarea");
		$("textarea").css({
			'height':'100px',
			'overflow-y':'auto',
			'overflow-x':'hidden'
		});
  </script>

      

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>