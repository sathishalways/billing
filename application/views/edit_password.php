<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#brand-1").val()==""){
				$("#fname1").text("Enter your Old password").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'11px'});
				event.preventDefault();
			}
			
			
				if($("#brand-2").val()==""){
				$("#fname2").text("Enter your New password").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'11px'});
				event.preventDefault();
			}
			
			
				if($("#brand-3").val()==""){
				$("#fname3").text("ReEnter your New password").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'11px'});
				event.preventDefault();
			}
			
			
		});
		
		$("#brand1").keyup(function(){
			if($(this).val()==""){
				$("#fname1").show();
			}
			else{
				$("#fname1").fadeOut('slow');
			}
		})
		
		$("#brand2").keyup(function(){
			if($(this).val()==""){
				$("#fname2").show();
			}
			else{
				$("#fname2").fadeOut('slow');
			}
		})
		
		
		
		$("#brand3").keyup(function(){
			if($(this).val()==""){
				$("#fname3").show();
			}
			else{
				$("#fname3").fadeOut('slow');
			}
		})
		
	});
</script>
<script>
$(document).ready(function(){
	//alert("sdfdasf");
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

<script type="text/javascript">
  $(document).ready(function() { 
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();
      }); 
  });
</script>

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
<!--<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('<tr>  <td style="width:27.2%;"><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>  </tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>-->


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

<!--<script type="text/javascript">
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

</script>-->

<script type="text/javascript">
$(document).ready(function()
{ 
$(".category").change(function(){
	alert("vijayyy");
    
});
});

</script>

<!--<script type="text/javascript">
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

</script>-->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--<script type="text/javascript">


function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}
</script>-->


 <link rel="stylesheet" href="css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
body{background-color:#fff;}
 .link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
margin-top:10px;
cursor:pointer;
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
 a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    color: #fff;
}
.delRowBtn{
	padding:0px 12px;
	height:30px;
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
	margin-bottom:5px;
}
.tableadd tr td label {
	font-weight:bold;
}
label {
    font-size: 1.3rem;
    color: #522276;
}
.btn{
	text-transform:capitalize;
}
.link{
	font-size: 13px;
    font-weight: bold !important;
}
.star{
	font-size:15px;
	color:#ff0000;
}
 </style>
 
 <script>
 function checkOld()
 {
	// var getpold = $("#brand-1").val();
//	 var getuser = $("#changepas").val();
	 var aaaa = document.getElementById('brand-1').value;
	 var bbbb = document.getElementById('changepas').value;

if(aaaa!=bbbb)
{
alert("Mismatched Old Passward!")
$("#brand-1").val('');
$("#brand-1").focus();
}




 }
 </script>
 
 
  <script>
 function checkNew()
 {
	 var aaaa = document.getElementById('brand-2').value;
	 var bbbb = document.getElementById('brand-3').value;

if(aaaa!=bbbb)
{
alert("Incorrect Re-entered Passward!")
$("#brand-3").val('');
$("#brand-3").focus();
}




 }
 </script>


<section id="content">


     
        <div class="container-fluid">
          <div class="section">

            <h2>Change Password</h2>

            <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
				
			  </div>
			  
                <div class="col-md-10">
                 
             <?php
			 //print_r($user_dat);
			 ?>
                 
				 
				 
                      <form action="<?php echo base_url(); ?>login/update_password" method="post" autocomplete="off">
                               


<div id="myTable" class="tableadd">
<!--<tr><td><label>Brand Name</label></td></tr>
<tr>
	<td><input type="text" value="" name="brand_name[]" id="brand1" class="firstname"><div class="fname"></div><div id="dpt_error1" style="color: #ff0000;position: relative; top: 0px;left: 0px;"></div></td>
</tr>
<input type="hidden" id="countid" value="1">-->
  <div class="col-md-12">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Old Password<span class="star">*</span></label>
        <input type="text" value="" name="brand_name1" id="brand-1" onchange="checkOld();" maxlength="80"><div id="fname1"></div>
            </div>
  </div>
  
  
    <div class="col-md-12">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>New Password <span class="star">*</span></label>
        <input type="text" value="" name="brand_name2" id="brand-2" maxlength="80"><div id="fname2"></div>
            </div>
  </div>
  
  
    <div class="col-md-12">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <label>Re Enter New Password<span class="star">*</span></label>
        <input type="text" value="" name="brand_name3" onchange="checkNew();" id="brand-3" maxlength="80"><div id="fname3"></div>
         </div>
  </div>
  
  <?php
				foreach($user_dat as $usd)
				{
					$pasdsad[] = $usd->password;
					$idd[] = $usd->id;
				}
				 ?>
				 
				 <input type="hidden" name="changepas" id="changepas" value="<?php echo $pasdsad[0];?>">
				 <input type="hidden" name="changeid" id="changeid" value="<?php echo $idd[0];?>">
  
  
  
</div>


 <div class="col-md-12">
	<div class="col-md-6">
<!--<a class="link" id="addMoreRows">Add Brand</a>-->
	
<button class="btn cyan waves-effect waves-light registersubmit" type="submit" >Submit <i class="fa fa-arrow-right"></i></button>
	</div>
</div>

<div class="tableadd">



<div>
  <div></div>
  <div style="padding-top: 25px;"></div>
</div>

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
  


    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>--> 
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

/* $(document).on("keyup","#brand1", function(){
	//alert("dfg");
	//alert($(this').val());
var brand=$(this).val();
//alert(brand);

 if(brand)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Brand/brand_validation',
  data: {
   brand:brand,
  },
  success: function (data) {
  if(data == 0){
        
        $('#dpt_error1').fadeOut('slow');    
        
            
        }
        else{
			$('#dpt_error1').text('Brand Name Already Exist').show().delay(1000).fadeOut(); 
			$('#brand1').val('');
			return false;
             
            
        }
  }
  });
 }
 
});  */

$("#brand-1").keyup(function(){
		$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
	});
	
</script>

	

</body>

</html>