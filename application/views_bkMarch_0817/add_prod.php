<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
<style>
hr {
    border-style: solid;
    border-width: 1px;
    color: #303F9F;
}
    body{background-color:#fff;}
    #errorBox {
        color:#F00;
    }
    .tableadd1 select {
        border: 1px solid #000;
        background-image:none;
        border-radius: 5px;
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
      overflow-y: hidden;
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
</style>
<script>
function frmValidate(){ 
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
url: "<?php  echo base_url(); ?>Product/getsub_category",
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

            <h2>Add Product Details</h2>
           <hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>product/add_product" method="post" name="frmProd" onsubmit="return frmValidate()" >
                               
 <div id="errorBox"></div>

<div class="col-md-12 tableadd1">
<!--<tr>
<td><label>Serial No</label></td><td><input type="text" name="serial_no" id="serial_no" class=""></td>

</tr>-->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Product Name</label>
        <input type="text" name="product_name" id="product_name" class="">
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Category</label>
        <select name="category" id="category">
            <option value="">---Select---</option>
            <?php foreach($prodcatlist as $pcatkey){ ?>
            <option value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Sub-Category</label>
        <select name="subcategory" id="subcategory">
        <option value="">---Select---</option>
        </select>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Brand Name</label>
        <select name="brand" id="brand">
            <option value="">---Select---</option>
            <?php foreach($brandlists as $brkey){ ?>
            <option value="<?php echo $brkey->id; ?>"><?php echo $brkey->brand_name; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="col-md-12 tableadd1">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Model</label>
        <input type="text" name="model" id="model" class="" >
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Additional Information</label>
        <select name="addlinfo[]" class="limitedNumbChosen" multiple="true">
            <option value="">---Select---</option>
            <?php foreach($accessories_list as $acckey1){ ?>
            <option value="<?php echo $acckey1->accessory; ?>"><?php echo $acckey1->accessory; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Description</label>
        <textarea type="text" name="description" id="description" class="materialize-textarea"></textarea>
    </div>
</div>

<div class="col-md-12 tableadd1">
    <!--<div>
    <td><input type="checkbox" class="" name="addlinfo[]" value="charger"></td><td><input type="checkbox" class="" name="addlinfo[]" value="DataCable"></td><td><input type="checkbox" class="" name="addlinfo[]" value="Battery"></td><td><input type="checkbox" class="" name="addlinfo[]" value="Headset"></td><td><input type="checkbox" class="" name="addlinfo[]" value="Cover"></td>
    </div>-->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <button class="btn cyan waves-effect waves-light " type="submit" >Submit<i class="fa fa-arrow-right"></i></button>
    </div>
</div>
                     
                  
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
  
<!--<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
  
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
  </script>-->

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      //Chosen
      $(".limitedNumbChosen").chosen({
        placeholder_text_multiple: "---Select---"
      })
      .bind("chosen:maxselected", function (){
        window.alert("You reached your limited number of selections which is 2 selections!");
      })
    });
  </script>  

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>