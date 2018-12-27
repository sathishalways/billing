
<script>
$(document).ready(function(){	

//alert("sdj");
	
	$('.plus1').keyup(function(){ //alert("hiiio");
		var hidden=$('#sample').val();
		//alert(hidden);
		if(!$('.minus1').val()==""){
			
			
			alert("enter any plus or minus");
			$('.plus1').val('');
			//$("#plus").attr("disabled", "disabled"); 
		}
		if($(this).val()>parseInt(hidden)){
			alert("Stock Not Available");
			$('.plus1').val('');
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   $('.minus1').keyup(function(){ //alert("hiiio");
		
		if(!$('.plus1').val()==""){
			
			
			alert("enter any plus or minus");
			$('.minus1').val('');
			//$("#plus").attr("disabled", "disabled"); 
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   
   
   
   	$("#test").change(function(){
			var sparetxt=$(".plus1").val();
			var spare = $(this).val();
			
   var dataString = 'spare='+spare;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/sparevalidation",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#sample').val(data.spare_qty);
		  
		   
    });

} 
});
	});

   
});
</script>


 <link rel="stylesheet" href="css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
.fancybox-inner{

height: 700px !important;

}
.btn, .btn-large, .btn-flat {
   text-transform: none !important;
   margin-left:30px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border:1px solid #ccc;
    
    border-radius: 5px;
    outline: none;
    /* height: 3.9rem; */
    width: 100%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 0;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
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

 .chosen-container {
    width: 100% !important;
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
#errorBox1,#errorBox2,#errorBox3{
 color:#F00;
 }
 .chosen-container-single .chosen-single {
    position: relative;
    display: block;
    overflow: hidden;
    padding: 0 0 0 8px;
    height: 30px;
    width: 100%;
    border: 1px solid #B3B3B3;
    border-radius: 5px;
    background-color: #fff;
    background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #ffffff), color-stop(50%, #f6f6f6), color-stop(52%, #eeeeee), color-stop(100%, #f4f4f4));
    background: -webkit-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background: -moz-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background: -o-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background: linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background-clip: padding-box;
    box-shadow: 0 0 3px white inset, 0 1px 1px rgba(0, 0, 0, 0.1);
    color: #444;
    text-decoration: none;
    white-space: nowrap;
    line-height: 24px;
}
.chosen-container .chosen-drop {
    position: absolute;
    top: 100%;
    left: -9999px;
    z-index: 1010;
    width: 100%;
    border: 1px solid #aaa;
    border-top: 0;
    background: #fff;
    box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
}
.wrapper {
    min-height: 100%;
    position: static;
    overflow: inherit;
}
 </style>

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
<!--<script>
$(document).ready(function(){
	$('.btn').click(function(event){ 
		if($('#spare').val()==''){alert($('#spare').val());
			$('#spare_error').text('Select the Spare Name').show();
			event.preventDefault();
			
		}
		if($('#employee').val()==''){ alert($('#employee').val());
			$('#employee_error').text('Select the Employee Name').show();
			event.preventDefault();
			
		}
	});
});
</script>-->

  

<section id="content">

     
        <div class="container-fluid">
          <div class="section">
            <h2>Add Spares to Engineer</h2>
            <div class="divider"></div>
            <div id="basic-form" class="section">
			   <div class="card-panel">
              <div class="row">
			   
                <div class="col-md-12">
                      <form action="<?php echo base_url(); ?>spare/addsparedetails" method="post" name="frmSpare">
                 <div class="col-md-3">
				 <label>Spare Name</label>
				 <select name="spare" class="spare chosen-select" id="spr">
				 <option value=''>--select--</option>
				 <?php 
				foreach($spares as $row)
				{
				?>
				 <option value="<?php echo $row->id;?>"><?php echo $row->spare_name;?></option><?php } ?>
				</select>
				 <div id='spare_error' style="color:red;font-size:11px;"></div>
				 </div>
				 
				 
				 <div class="col-md-3">
				 <label>Quantity</label>
				  <input type="text" name="plus" id="qtyplus" class="form-control plus1" placeholder="plus"/><span style="float: right;position: relative;top:-44px;left: 20px;">or</span>
				 </div>
				 
				 <div class="col-md-3">
				 <label></label>
				  <input type="text" name="minus" id="qtyminus" class="form-control minus1" placeholder="minus"/>
				 </div>
				 
				 <input type="hidden" value="" id="sample">
				
				  <div class="col-md-3">
				 <label>Engineer Name</label>
				 <select name="employee" class="chosen-select" id='employee'>
				 <option value=''>--select--</option>
				 <?php 
				foreach($list as $roww)
				{
				?>
				 <option value="<?php echo $roww->id;?>"><?php echo $roww->emp_name;?></option><?php } ?>
				</select>
				<span id='employee_error' style="color:red;font-size:11px;"></span>
				 </div>
	            </div>
                <button class="btn cyan waves-effect waves-light " type="submit" name="Save" value="saveit">Submit</button>	 
                </div>
              
                      </form>
                </div>
              </div>
			  </div>
            </div>
  </section>
  
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
<!--<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>-->
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
  <script>
   $(document).ready(function(){ 
   $( "form" ).submit(function( event ) {//alert($( "#spr" ).val());
  if ( $( "#spr" ).val() === "" ) {
	$( "#spare_error" ).text( "Select Spare Name" ).show();
    event.preventDefault();
  }
  if ( $( "#employee" ).val() === "" ) {
	$( "#employee_error" ).text( "Select Engineer Name" ).show();
    event.preventDefault();
  }  
});
});
   </script>
<script>
    $(function(){
		$("#spr").change(function(){
			if($(this).val()==""){
			    $("#spare_error").show();
			}
			else{
				$("#spare_error").hide();
			}
		});
		$("#employee").change(function(){
			if($(this).val()==""){
			    $("#employee_error").show();
			}
			else{
				$("#employee_error").hide();
			}
		});		
	});
</script>

  
  
</body>

</html>