<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('   <tr>  <td><select >   <option value=""></option>  <option value="">Air Conditioner</option>		  <option value="">Television</option>		   <option value="">Digital Camera</option>		    <option value="">Mobile Phone</option>           <option value="">Cash Counting Machine</option>		  <option value="">Washing Machine</option>	     </select></td>  <td><select >            <option value=""></option>           <option value="">Subcategory 1</option>		  <option value="">Subcategory 2</option>		   <option value="">Subcategory 3</option>		   <option value="">Subcategory 4</option>           <option value="">Subcategory 5</option>		  <option value="">Subcategory 6</option>		   <option value="">Subcategory 7</option>		    <option value="">Subcategory 8</option>		</select></td>   <td><select >            <option value=""></option>           <option value="">Brand 1</option>		  <option value="">Brand 2</option>		   <option value="">Brand 3</option>		   <option value="">Brand 4</option>           <option value="">Brand 5</option>          </select></td> <td><select >            <option value=""></option>           <option value="">23Adfd</option>		  <option value="">Yere6</option>		   <option value="">Gd45</option>		    <option value="">E455f</option>           <option value="">Hfd45</option>		  <option value="">W5dfc6</option>		   <option value="">Tdtr4546</option>	  </select>		  </td>  </tr>').appendTo(tbl);   
		
		
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
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>
 <link rel="stylesheet" href="css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
.tableadd2 tr td input {
    border-radius: 2px;
    width: 200px;
    height: 27px;
    border: 1px solid #ccc;
}
 .link{
	 padding: 10px;
	 margin-right: 20px;
		border: 1px solid #B3B3B3;
		background: #B3B3B3 none repeat scroll 0% 0%;
		color: white;
		font-weight: bold;
		border-radius: 5px;
		margin-top:10px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .chosen-container-single .chosen-single {
    
    height: 34px !important;
 }
 .chosen-container
 {
	 margin-top: -16px !important;
 }
 .tableadd tr td select {
   
    margin-bottom: 25px !important;
}
.tableadd tr td input {
    width: 210px;
    height: 33px;
    border-radius: 5px;
    padding-left: 10px;
}
/*table tr td
{
	border:1px solid #C2BEBE;
}
.catego li{
	float: left;
width: 175px;
padding-left: 5px;
padding-right: 5px;
}
.qua li
{
	padding-right:5px;
	padding-left:5px;
}*/
.tableadd2 tr td select {
    width: 240px;
    height: 30px;
    border: 1px solid #ccc;
    border-radius: 2px;
}
select{border:1px solid #ccc;}
		input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search]{
    background-color: #fff;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    /* outline: none; */
    /* height: 3.9rem; */
	    height: 28px;
    width: 100%;
    font-size:13px;
    margin: 0 0 15px 0;
    padding: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
#errorBox{
 color:#F00;
 }
 </style>
<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var spare_name = document.frmSpare.spare_name.value,
   spare_qty = document.frmSpare.spare_qty.value,
   purchase_price = document.frmSpare.purchase_price.value,
   sales_price = document.frmSpare.sales_price.value;
  
  
 if( spare_name == "" )
   {
     document.frmSpare.spare_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the spare name";
     return false;
   }
   if( spare_qty == "" )
   {
     document.frmSpare.spare_qty.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the spare quantity";
     return false;
   }
   if( purchase_price == "" )
   {
     document.frmSpare.purchase_price.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the purchase price";
     return false;
   }
   if( sales_price == "" )
   {
     document.frmSpare.sales_price.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the sales price";
     return false;
   }
   
}

</script>
<script type="text/javascript">
 jQuery.noConflict();
$(document).ready(function()
{ 
$(".category").change(function(){
	 //alert("ggg");

var idd=$(this).closest(this).attr('id');
var arr = idd.split('_');
var catid = arr['1'];
//alert(catid);
$('#subcategory_'+catid+ "> option").remove(); 
var id=$(this).val();
//alert("catttt: "+catid);
//alert("iddddd: "+id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsub_category",
data: dataString,
cache: false,
success: function(data)
{    $('#subcategory_'+catid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#subcategory_'+catid).append("<option value='"+data.id+"'>"+data.subcat_name+"</option>");
            });
} 
});
    
});



$(".subcategory").change(function()
{
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(ctid);
var id=$(this).val();

var subcatid=$(this).val();
categoryid = $('#category_'+ctid).val();
//alert("Subcat: "+subcatid+"Cat:" +categoryid);
//$('#subcategory_'+catid+ "> option").remove(); 
$('#brandname_'+ctid+"> option").remove(); 
var dataString = 'subcatid='+ subcatid+'&categoryid='+ categoryid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_brand",
data: dataString,
cache: false,
success: function(data)
{ 		$('#brandname_'+ctid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.brand_name);
            $('#brandname_'+ctid).append("<option value='"+data.id+"'>"+data.brand_name+"</option>");
            });
} 
});

});


$(".brandname").change(function()
{
	var idd=$(this).closest(this).attr('id');
	var arr = idd.split('_');
	var ctid = arr['1'];
	//alert(ctid);
	$('#model_'+ctid+"> option").remove(); 
var brandid=$(this).val();
categoryid = $('#category_'+ctid).val();
subcategoryid = $('#subcategory_'+ctid).val();
//alert("Subcat: "+subcategoryid+"Cat:" +categoryid+"brandid:" +brandid);
var dataString = 'subcatid='+ subcategoryid+'&categoryid='+ categoryid+'&brandid='+ brandid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_model",
data: dataString,
cache: false,
success: function(data)
{ 		$('#model_'+ctid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.model);
            $('#model_'+ctid).append("<option value='"+data.id+"'>"+data.model+"</option>");
            });
} 
});

});

});

</script>
<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table1').append(result);
} 
});

});
  
});
</script>

<script>
$(document).ready(function(){
   $('.model').change(function(){//alert("ddddd");
	 var id = $(this).val();
	
	 var idd=$(this).closest(this).attr('id');
	 var arr= idd.split('-');
	 var vl = arr['1'];
    // alert(vl);
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
<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h5 class="breadcrumbs-title">Edit Spare</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			   <div class="col-md-1">
			   </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>spare/edit_spare" method="post" name="frmSpare" onsubmit="return frmValidate()">
              <div id="errorBox"></div>                 
<table class="tableadd">

<?php foreach($list as $key){?>
<!--<tr>
<td><label>Spare Name</label></td>
<td><input type="text" name="spare_name" class="" value="<?php echo $key->spare_name; ?>"><input type="hidden" name="spareid" class="" value="<?php echo $key->id; ?>"></td>
<td><label>Sales Price</label></td><td><input type="text" name="sales_price" class="" value="<?php echo $key->sales_price; ?>"></td>

</tr>
<tr>
<td><label>Effective Date</label></td><td><input id="datepicker23" type="text" name="datepicker" value="<?php echo $key->effective_date; ?>"></td></tr>-->


<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Spare Name&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="spare_name" class="" value="<?php echo $key->spare_name; ?>"><input type="hidden" name="spareid" class="" value="<?php echo $key->id; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Sales Price&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="sales_price" class="" value="<?php echo $key->sales_price; ?>">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Effective Date&nbsp;<span style="color:red;">*</span></label>
<input id="datepicker23" type="text" name="datepicker" value="<?php echo $key->effective_date; ?>">
</div>
</div>
<?php } ?>
</table>

 <table id="table1" class="tableadd2" style="margin-bottom:40px; margin-top:20px;">
  <tr class="back">
  <td>Model</td> 
  <td>Category</td>
  <td>Sub Category</td>
  <td>Brand</td>
   
  </tr>
  
  <?php 
		foreach($getModels_spareid as $key4)
				{
					$model_id = $key4->model_id;
					$modelid[] = explode(",",$model_id);
					
				}
				/* echo "<pre>";
				print_r($modelid);
				exit; */
		$i='0'; foreach($getsparedetbyid as $key1){
	?>
   <tr>
     <td><select name="model[]" id="model-<?php echo $i; ?>" class="model">
            <option value="">---Select---</option> 
			 <?php foreach($getmodels as $modkey){
					if($modkey->id == $key1->model_id){
				 ?>
			<option value="<?php echo $modkey->id; ?>" selected="selected"><?php echo $modkey->model; ?></option>
		   
			<?php }else{?>
			<option value="<?php echo $modkey->id; ?>"><?php echo $modkey->model; ?></option>
			 <?php }}?>
          </select>
		  </td>
  <td> <input type="text" name="category_name" id="category_name-<?php echo $i; ?>" readonly value="<?php foreach($prodcatlist as $pcatkey){
		  if($pcatkey->id == $key1->cat_id){ echo $pcatkey->product_category; } }
			?>"><input type="hidden" name="category[]" id="category-<?php echo $i; ?>" readonly value="<?php foreach($prodcatlist as $pcatkey){
		  if($pcatkey->id == $key1->cat_id){ echo $pcatkey->id; } }
			?>">
		  
		  
		  </td>
		  
  <td>   <input type="text" name="subcategory_name" id="subcategory_name-<?php echo $i; ?>" readonly value="<?php foreach($subcatlist as $subcatkey){
		   if($subcatkey->id == $key1->subcat_id){ echo $subcatkey->subcat_name; }}
			?>"><input type="hidden" name="subcategory[]" id="subcategory-<?php echo $i; ?>" readonly value="<?php foreach($subcatlist as $subcatkey){
		   if($subcatkey->id == $key1->subcat_id){ echo $subcatkey->id; }}
			?>">
		   
		   </td>
  <td>  <input type="text" name="brand_name" id="brand_name-<?php echo $i; ?>" readonly value="<?php foreach($getbrands as $brkey){
		  if($brkey->id == $key1->brand_id){ echo $brkey->brand_name; }}
			?>"><input type="hidden" name="brandname[]" id="brandname-<?php echo $i; ?>" readonly value="<?php foreach($getbrands as $brkey){
		  if($brkey->id == $key1->brand_id){ echo $brkey->id; }}
			?>">
		  
		  </td>
 

  </tr>
  <input type="hidden" name="countidss[]" value="<?php echo $i; ?>">
  <?php $i++; } ?>
  <input type="hidden" id="countid" value="<?php echo $i; ?>">
  
  </table>

<a id="addMoreRows" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Add Model</a>	<button class="btn cyan waves-effect waves-light " type="submit" name="Save" value="saveit">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>	 
							   

<!--<table>

<tr class="tab">
<td>
<ul class="qua">
<li>Spare Name</li>

</ul>
</td>
<td>
<ul class="qua">
<li>Quantity</li>

</ul>
</td>
<td id="cat">
<ul class="catego">
<li>Category</li>
<li>Sub-Category</li>
<li>Model</li>
<li>Quantity</li>
</ul>
</td>


</tr>

<tr>
<td>
<ul class="qua">

<li><input type="text" name="" value=""></li>
</ul>
</td>
<td>
<ul class="qua">

<li><input type="text" name="" value=""></li>
</ul>
</td>
<td id="cat">

<ul class="catego" id="catego">
<li><select >
            <option value=""></option>
           <option value="">Air Conditioner</option>
		  <option value="">Television</option>
		   <option value="">Digital Camera</option>
		    <option value="">Mobile Phone</option>
           <option value="">Cash Counting Machine</option>
		  <option value="">Washing Machine</option>		   		
          </select></li>
<li><select >
            <option value=""></option>
           <option value="">Subcategory 1</option>
		  <option value="">Subcategory 2</option>
		   <option value="">Subcategory 3</option>
		    <option value="">Subcategory 4</option>
           <option value="">Subcategory 5</option>
		  <option value="">Subcategory 6</option>
		   <option value="">Subcategory 7</option>
		    <option value="">Subcategory 8</option>			
          </select></li>
<li><select >
            <option value=""></option>
           <option value="">23Adfd</option>
		  <option value="">Yere6</option>
		   <option value="">Gd45</option>
		    <option value="">E455f</option>
           <option value="">Hfd45</option>
		  <option value="">W5dfc6</option>
		   <option value="">Tdtr4546</option>		   		
          </select></li>
<li><li><input type="text" name="" value=""></li></li>
</ul>
<br/>
<a id="addRowBtn" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px; float:right;">Add Spare</a>	

</td>
</tr>


</table>-->




					
                         
                        </div>
                       <div class="col-md-1">
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
  
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("input[name='datepicker']").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });

}//]]>  

</script>

 <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
 <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
  
      <script type='text/javascript' src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js"></script>
	  

     

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
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
</body>

</html>