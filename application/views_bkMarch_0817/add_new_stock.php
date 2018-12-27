<style>
.tableadd2 tr td select {
    width: 240px;
    height: 30px;
    border: 1px solid #ccc;
	border-radius:2px;
	}
.tableadd2 tr td input {
    border-radius:2px;
    width: 240px;
    height: 20px;
    border: 1px solid #ccc;
	}	
select {
     border: 1px solid #ccc; 
	 margin: 0 0 15px 0;
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
</style>

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
}
.tableadd2 tr td select {
    width: 160px;
    height: 33px;
    border-width: medium medium 1px;
    border-style: none none solid;
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
    padding: 0.5em 3.5em 0.5em 1em;
    margin: 0px 3px;
    box-sizing: border-box;
    -moz-appearance: none;
    border-radius: 5px;
}*/


#errorBox{
 color:#F00;
 }
 body{background-color:white;}
 </style>
<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var spare_name = document.frmSpare.spare_name.value;
 var datepicker = document.frmSpare.datepicker.value;
 var sales_price = document.frmSpare.sales_price.value;
 var part_no = document.frmSpare.part_no.value;
  
  
 if( spare_name == "" )
   {
     document.frmSpare.spare_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the spare name";
     return false;
   }
   
  if( part_no == "" )
   {
     document.frmSpare.part_no.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the part no.";
     return false;
   }
   
   if( sales_price == "" )
   {
     document.frmSpare.sales_price.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the sales price";
     return false;
   }
   
   if( datepicker == "" )
   {
     document.frmSpare.datepicker.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the effective date";
     return false;
   }
   
   
   
   
}

</script>
<script type="text/javascript">
$(document).ready(function()
{
$("#category").change(function()
{
$("#subcategory > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsub_category",
data: dataString,
cache: false,
success: function(data)
{ 		$('#subcategory').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#subcategory').append("<option value='"+data.id+"'>"+data.subcat_name+"</option>");
            });
} 
});

});

});

</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#subcategory").change(function()
{
$("#brandname > option").remove(); 
var subcatid=$(this).val();
categoryid = $("#category").val();
//alert("Subcat: "+subcatid+"Cat:" +categoryid);
var dataString = 'subcatid='+ subcatid+'&categoryid='+ categoryid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_brand",
data: dataString,
cache: false,
success: function(data)
{ 		$('#brandname').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#brandname').append("<option value='"+data.id+"'>"+data.brand_name+"</option>");
            });
} 
});

});

});

</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#brandname").change(function()
{
$("#model > option").remove(); 
var brandid=$(this).val();
//alert(brandid);
categoryid = $("#category").val();
subcategoryid = $("#subcategory").val();
//alert("Subcat: "+subcategoryid+"Cat:" +categoryid+"brandid:" +brandid);
var dataString = 'subcatid='+ subcategoryid+'&categoryid='+ categoryid+'&brandid='+ brandid;


$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_model",
data: dataString,
cache: false,
success: function(data)
{ 		$('#model').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#model').append("<option value='"+data.id+"'>"+data.model+"</option>");
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

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Add New Spare</h2>
<hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			 
                <div class="col-md-10">
                 
             
                 
                 <form action="<?php echo base_url(); ?>spare/add_spare" method="post" name="frmSpare" onsubmit="return frmValidate()">
              <div id="errorBox"></div>                 
<table class="tableadd">
<!--<tr>
<td><label>Spare Name&nbsp;<span style="color:red;">*</span></label></td>
<td><input type="text" name="spare_name" class=""></td>
<td><label>Sales Price&nbsp;<span style="color:red;">*</span></label></td><td><input type="text" name="sales_price" class=""></td>
</tr>
<tr>
<td><label>Effective Date&nbsp;<span style="color:red;">*</span></label></td><td><input id="datepicker23" type="text" name="datepicker"></td></tr>-->

<div class="col-md-12">
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Spare Name&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="spare_name" class="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Part No.&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="part_no" class="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Sales Price&nbsp;<span style="color:red;">*</span></label>
<input type="text" name="sales_price" class="">
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<label>Effective Date&nbsp;<span style="color:red;">*</span></label>
<input id="datepicker23" type="text" name="datepicker">
</div>
</div>
</table>

 <table id="table1" class="tableadd2" style="margin-bottom:40px; margin-top:20px;">
  <tr class="back">
  <td>Model</td>  
  <td>Category</td>
  <td>Sub Category</td>
  <td>Brand</td>
  
  </tr>
   <tr>
  <td><select name="model[]" id="model-0" class="model">
            <option value="">---Select---</option>
			 <?php foreach($modellist as $modelkey){ ?>
			 <option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
			 <?php } ?>
          </select>
		  </td>  
  <td><input type="text" name="category_name" id="category_name-0" readonly><input type="hidden" name="category[]" id="category-0" readonly></td>
  <td><input type="text" name="subcategory_name" id="subcategory_name-0" readonly><input type="hidden" name="subcategory[]" id="subcategory-0" readonly></td>
  <td><input type="text" name="brand_name" id="brand_name-0" readonly><input type="hidden" name="brandname[]" id="brandname-0" readonly></td>
  </tr>
  <input type="hidden" id="countid" value="1">
 
 
  </table>

<a id="addMoreRows" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;">Add Model</a>	<button name="Save" value="saveandnew" style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;
padding: 11px;
color: #FFF;
border-radius: 5px;
margin-right: 20px;" type="submit">Save & Add New</button><button class="btn cyan waves-effect waves-light " type="submit" name="Save" value="saveit">Submit
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