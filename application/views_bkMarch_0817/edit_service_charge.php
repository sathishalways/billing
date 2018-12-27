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
    height: 25px !important;
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
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    outline: none;
    height: 25px;
    width: 160px;
    font-size: 12px;
    margin: 0 0 15px 0;
    padding: 4px;
    box-shadow: none;
    border-color: -moz-use-text-color -moz-use-text-color #055E87;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    background-color: transparent;
    background-image: linear-gradient(45deg, transparent 50%, #333 50%), linear-gradient(135deg, #070708 50%, transparent 50%), linear-gradient(to right, #F6F8F9, #FBFBFB);
    background-attachment: scroll, scroll, scroll;
    background-clip: border-box, border-box, border-box;
    background-origin: padding-box, padding-box, padding-box;
    background-position: calc(100% - 21px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), 100% 0px;
    background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
    background-repeat: no-repeat;
    font: 300 1em/1.5em "Helvetica Neue",Arial,sans-serif;
    box-sizing: border-box;
    -moz-appearance: none;
}

/*input{
	 width: 145px !important;
	 border-radius: 5px !important;
	   border-color:  #055E87 !important;
	   	margin-top:10px !important;
		text-align:center;
}
.tab
{
	background:#055E87;
	color:white;
	height:50px;
}*/
#errorBox{
 color:#F00;
 }
 .box{ 
        display: none;
		box-shadow:none !important; 
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
  border: 1px solid #ccc;
}
.tableadd2 tr td input {
    border-radius: 5px;
    height: 25px;
    margin-top: 17px;
    width: 100px;
    margin-left: 3px;
    margin-right: 3px;
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
url: "<?php  echo base_url(); ?>Servicecategory/addrow2",
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
<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Edit Service Charge</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			   <div class="col-md-1">
			   </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>Servicecategory/edit_service_charge" method="post" name="frmSpare" onsubmit="return frmValidate()">
              <div id="errorBox"></div>                 

<div class="tableadd">
  <?php foreach($list as $key){?>
  <div class="col-md-12" style="margin-bottom:20px;">
    <div class="col-md-3">
      <label>Service Category</label>
      <select name="service_cat" id="service_cat-0">
        <option value="">---Select---</option>
        <?php foreach($service_cat_list as $listkey){ 
        if($listkey->id == $key->id){
        ?>
        <option selected="selected" value="<?php echo $listkey->id; ?>"><?php echo $listkey->service_category; ?></option>
        <?php } else{?>
        <option value="<?php echo $listkey->id; ?>"><?php echo $listkey->service_category; ?></option>
        <?php } } ?>
      </select>
    </div>
  </div>
</div>

<?php } ?>

 <table id="table1" class="tableadd2" style="margin-bottom:40px;">
  <tr class="back">
  
  <td>Model</td>
  <td>Charge</td>  
  </tr>
  
  <?php $i='0'; foreach($getservicechargeInfobyid as $key1){?>
   <tr>
    
  <td><select name="model[]" id="model_<?php echo $i; ?>" class="category">
            <option value="">---Select---</option>
			<?php foreach($modellist as $modellistkey){
				  if($modellistkey->id == $key1->model){
			?>
			<option selected="selected" value="<?php echo $modellistkey->id; ?>"><?php echo $modellistkey->model; ?></option>
		   <?php } else {?>	   	
			<option value="<?php echo $modellistkey->id; ?>"><?php echo $modellistkey->model; ?></option>
			<?php } } ?>	   	
          </select></td>
		  
  <td><input type="text" name="service_charge[]" class="" value="<?php echo $key1->service_charge; ?>"><input type="hidden" name="service_charge_id[]" class="" value="<?php echo $key1->id; ?>"></td>

  </tr>
  <?php $i++; } ?>
  <input type="hidden" id="countid" value="<?php echo $i; ?>">
  </table>

<a class="link" id="addMoreRows" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 10px;
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

<script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){ //alert("hi buddy");
        if($(this).attr("value")=="no"){ 
            $(".box").not(".no").hide();
            $(".no").show();
        }
        if($(this).attr("value")=="yes"){ 
            $(".box").not(".yes").hide();
			
            $(".yes").show();
        }
    });
});
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