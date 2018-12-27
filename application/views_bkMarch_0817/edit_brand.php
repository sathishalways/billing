<style>
.tableadd tr td input {
    width: 237px;
    /* height: 22px !important; */
    /* border: 1px solid #B3B3B3; */
    border-radius: 2px;
    /* padding-left: 10px; */
    margin-left: 14px;
}
.tableadd tr td input {
    height: 22px !important;
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
        $('<tr>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>  </tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>


<script>
$(document).ready(function(){
   $('[id^="pro_cat_"]').change(function(){alert("hii");
   var id = $(this).val();
   var arr = id.split(',');
   var procatid = arr['0'];
   var subid = arr['1'];
   var data_String;
    data_String = 'id='+subid+'&procatid='+procatid;
	
    $.post('<?php  echo base_url(); ?>subcategory/update_sub_category',data_String,function(data){ 
          //var data= jQuery.parseJSON(data);
		  alert("Category changed");
           //$('#actaddress').val(data.Address1),
       });
   });
 });
</script>

<script type="text/javascript">
$(document).ready(function()
{ 

var rowCount = 1;

$('#addMoreRowsc').click(function()
{ alert("xs");
rowCount ++;
var recRow = '<tr><td><select name="category[]" id="category'+rowCount+'" class="category"><option value="">---Select---</option> <?php foreach($prodcatlist as $pcatkey){ ?><option value="<?php echo $pcatkey->id; ?>"><?php echo $pcatkey->product_category; ?></option><?php } ?></select></td><td><select name="subcategory[]" id="subcategory"><option value="">---Select---</option></select></td> <td><input type="text" value="" name=""></td></tr>';

$("#myTable").append(recRow);

});


});

</script>

<script type="text/javascript">
$(document).ready(function()
{ 
$(".category").change(function(){
	alert("vijayyy");
    
});
});

</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#category").change(function()
{ //alert("ffff");
$("#subcategory > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Brand/getsub_category",
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

<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddssss");
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
url: "<?php  echo base_url(); ?>Brand/addrow",
data: datastring,
cache: false,
success: function(result)
{ 
		// alert(result);
            
        $('#myTable').append(result);
} 
});

});
  
});
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">


function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}
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
	 border-radius:5px;
   
   /* margin-bottom: 25px !important;*/
}
.tableadd tr td input {
    width: 215px;
}
.tableadd
{
	margin-bottom:35px;
}
.tableadd tr td label {
	font-weight:bold;
}
 </style>


<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Edit Product Brand Name</h2>

           <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>Brand/edit_brand" method="post">
                               


<table id="myTable" class="tableadd">
<?php foreach($list As $key){?>
<div class="col-md-3 col-sm-6 col-xs-12">
<label>Brand Name</label>
<input type="text" value="<?php echo $key->brand_name; ?>" name="brand_name"><input type="hidden" id="brandid" name="brandid" value="<?php echo $key->br_id; ?>">

</div>

<!--<tr><td><label>Brand Name</label></td></tr>
<tr>
	<td><input type="text" value="<?php echo $key->brand_name; ?>" name="brand_name"><input type="hidden" id="brandid" name="brandid" value="<?php echo $key->br_id; ?>"></td>
</tr>-->
<?php } ?>

</table>

<button class="btn cyan waves-effect waves-light " type="submit">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>


<table class="tableadd">



<tr>
<td ></td>
<td style="padding-top: 25px;">
 
</td>
</tr>

</table>





					
                         
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
  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

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