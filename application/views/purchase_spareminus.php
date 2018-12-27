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
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
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
   
    /*margin-bottom: 25px !important;*/
    margin-bottom: 0px !important;
	border: 1px solid gray;
height: 27px;
}
.dropdown-content
{
	display:none;
}
#table1
{
	margin-top:10px;
	width:100%;
	border-collapse: collapse;
}
#table1 tr
{
	height:40px;
}
#table1 tr td
{
	border:1px solid #522276;
	text-align:center;
}
/*span
{
	float: right;
margin-top: -44px;
margin-right: 20px;
}*/
#table1 tr td input
{
	width:120px;
	border: 1px solid gray;
height: 27px;
}
#table1 tr td select
{
	width:120px;
	border: 1px solid gray;
height: 27px;
}
h5
{
	font-size: 22px;
 border-bottom: 1px solid #055E87 !important;
text-align: center;
width: 114px;
margin: auto auto 35px;
}
.rowadd
{
	 border: 1px solid #8868a0 !important;
background: #8868a0 none repeat scroll 0% 0% !important;
padding: 4px;
border-radius: 5px;
color: white;
font-weight: bold;
font-family: calibri;
font-size: 15px;
margin-top: 30px;
}
.color
{
    background: #6c477d;
    color: white;
    height: 30px !important;
}
.breadcrumbs-title {
	color: #6C217E !important;
}
.btn{cursor:pointer;}
	a{cursor:pointer;}
	#or{    float: right;
    margin-top: 2px;
    font-size: 11px;
    margin-right: 6px;}
 </style>
 
 <script type="text/javascript">
$(document).ready(function()
{
$("#pro_cat").change(function()
{
	var vl=$('#countid').val();
	//alert(vl);
//$('#spare_name_'+vl+ "> option").remove(); 	

$(".spare_name > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_spares",
data: dataString,
cache: false,
success: function(data) 
{  
		$('.spare_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){ 
            $('.spare_name').append("<option value='"+data.id+"'>"+data.spare_name+"</option>");
            });
} 
});

});

});

</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#pro_subcat").change(function()
{
	var vl=$('#countid').val();
	//alert(vl);
//$('#spare_name_'+vl+ "> option").remove(); 	

$(".spare_name > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_sparesbysubcat",
data: dataString,
cache: false,
success: function(data) 
{  
		$('#spare_name_'+vl).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){ 
            $('#spare_name_'+vl).append("<option value='"+data.id+"'>"+data.spare_name+"</option>");
            });
} 
});

});

});

</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#brand").change(function()
{
	var vl=$('#countid').val();
	alert(vl);
//$('#spare_name_'+vl+ "> option").remove(); 	

$(".spare_name > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_sparesbybrand",
data: dataString,
cache: false,
success: function(data) 
{  
		$('.spare_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){ 
            $('.spare_name').append("<option value='"+data.id+"'>"+data.spare_name+"</option>");
            });
} 
});

});

});

</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#model").change(function()
{
	var vl=$('#countid').val();
	//alert(vl);
//$('#spare_name_'+vl+ "> option").remove(); 	

$(".spare_name > option").remove(); 
var id=$(this).val();
//alert(id);
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/get_sparesbymodel",
data: dataString,
cache: false,
success: function(data) 
{  
		$('.spare_name').append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){ 
            $('.spare_name').append("<option value='"+data.id+"'>"+data.spare_name+"</option>");
            });
} 
});

});

});

</script>

<script>
$(document).ready(function(){
   $('.spare_name').change(function(){ //alert("hiiio");
   var id = $(this).val();
   
   var vl=$('#countid').val();
	//alert(vl);
  // alert("spareid: "+idd);
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
		   $('#spare_qty1_'+vl).val(data.spare_qty),
		   $('#used_spare1_'+vl).val(data.used_spare),
		   $('#purchase_price1_'+vl).val(data.purchase_price),
		   $('#purchase_qty1_'+vl).val(data.purchase_qty)
		   
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
	var catt=$('#pro_cat').val();
	//var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1+'&prod_cat='+catt;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/addrowminus",
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

            <h5 class="breadcrumbs-title">Stock Out</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>Spare/update_spare_stockminus" method="post" >
                               


<table id="myTable" class="tableadd" style="width:100%;">
<tr><td><label>Category</label></td><td></td><td><label>Sub-Category</label></td><td></td><td><label>Brand</label></td><td></td><td><label>model</label></td></tr>
<tr>
<td> 
	
	<select id= "pro_cat" name="pro_cat" style="width: 162px;">
           <option value="">---Select---</option>
		   <?php foreach($prodcatlist as $prodcatkey){ ?>
			<option value="<?php echo $prodcatkey->id; ?>"><?php echo $prodcatkey->product_category; ?></option>
		   <?php } ?>
          </select></td><td> <span id="or">OR</span>
		  </td>
<td> 
	
	<select id= "pro_subcat" name="pro_subcat" style="width: 165px;">
           <option value="">---Select---</option>
		   <?php foreach($subcatlist as $subcatkey){ if($subcatkey->subcat_name != null){ ?>
			<option value="<?php echo $subcatkey->id; ?>"><?php echo $subcatkey->subcat_name; ?></option>
		   <?php }} ?>
          </select></td><td><span id="or">OR</span>
		  </td>
<td> 
	
	<select id="brand" name="brand" style="width: 164px;">
           <option value="">---Select---</option>
		   <?php foreach($getbrands as $brandkey){ ?>
			<option value="<?php echo $brandkey->id; ?>"><?php echo $brandkey->brand_name; ?></option>
		   <?php } ?>
          </select></td><td><span id="or">OR</span>
		  </td>
<td> 
	
	<select id="model" name="model" style="width: 171px;">
           <option value="">---Select---</option>
		   <?php foreach($getmodels as $modelkey){ ?>
			<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } ?>
          </select>
		  </td>
		
		  

</tr>
</table>

<table id="table1">
<tr class="color"><td><label>Spare Name<span style="color:red;">*</span></label></td><td><label>Qty<span style="color:red;color: red;">*</span></label></td><td><label>Date Of Purchase</label></td>
<!--<td><label>Price</label></td><td><label>Invoice Ref</label></td>-->
 <td><label>Reason</label></td></tr>

<tr>
<td>
	<select id="spare_name_0" class="spare_name" name="spare_name[]">
           <option value="">---Select---</option>
		   
          </select><div id="name_error_0" style="color:red"></div>
</td>
<td><input type="text" name="qty[]" id="qty_0" maxlength="10"><div id="qty_error_0" style="color:red"><input type="hidden" name="spare_qty1[]" id="spare_qty1_0"><input type="hidden" name="used_spare1[]" id="used_spare1_0"><input type="hidden" name="purchase_price1[]" id="purchase_price1_0"><input type="hidden" name="purchase_qty1[]" id="purchase_qty1_0"></td>
<td><input type="text" name="purchase_date[]" id="datetimepicker7" class="datetimepicker7"></td>
<!--<td><input type="text" name="purchase_price[]" id="price"></td>
<td><input type="text" name="invoice_no[]" id="ino"></td>-->
<td><input type="text" name="reason[]" id="reason" maxlength="100"></td>

</tr>



</table>
<input type="hidden" name="countid" id="countid" class="" value="0" >
<a id="addMoreRows" class="rowadd">Add Row</a>

<button class="btn cyan waves-effect waves-light rowadd" type="submit" name="action"  id="register" >Submit
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
  
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('<tr><td>	<select id="spare_name" class="spare_name" name="spare_name[]"><option value="">---Select---</option>    </select></td><td><input type="text" name="qty[]"></td><td><input type="text" name="purchase_date[]"></td><td><input type="text" name="purchase_price[]"></td><td><input type="text" name="invoice_no[]"></td><td style="border:none;"><button class="delRowBtn" >Delete</button></td></tr>').appendTo(tbl);        
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>




<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css" />

<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js"></script>

	<script>

$.datetimepicker.setLocale('en');

$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});


var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('.datetimepicker7').datetimepicker({
	onChangeDateTime:logic,
	onShow:logic	
});

 



</script>
<script>
    $(document).ready(function(){
		
		$('#reason').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z .\/-_,]+$/,'') );
        });
		
		
		$('#qty_0,#price').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		$('#ino').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z. ]+$/,'') );
        });
		 $( "form" ).submit(function( event ) {
   
  if ( $( "#spare_name_0" ).val() === "" ) {
	$( "#name_error_0" ).text( " Please Select the Spare Name" ).show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  } 
  
  if ( $( "#qty_0" ).val() === "" ) {
	$( "#qty_error_0" ).text( " Please Enter the Quantity" ).show().css({'color':'#ff0000','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  } 
  
	 });
$("#spare_name_0").change(function(){
			if($(this).val()==""){
			    $("#name_error_0").show();
			}
			else{
				$("#name_error_0").hide();
			}
		});
		$("#qty_0").keyup(function(){
			if($(this).val()==""){
			    $("#qty_error_0").show();
			}
			else{
				$("#qty_error_0").hide();
			}
		});	 
	 });
</script>

</body>

</html>