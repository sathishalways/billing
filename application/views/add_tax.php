
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
      
<style>
body{background-color:#fff;}
 .link{
	 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
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
      border: 1px solid #ccc !important;
    }
	.star{
		color:#ff0000;
		font-size:15px;
	}
	a{ cursor:pointer;}
	.btn{text-transform:none !important;}
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Add Tax</h2>

            <hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>tax/add_tax" method="post">
                               


<div id="myTable" class="tableadd">
    <div class="col-md-12" style="padding: 0px;">
        <div class="col-md-3">
            <label><b>Tax Name</b> <span class="star">*</span></label>
            <input type="text" name="tax_name[]" class="model tax" id="tax" maxlength="30">
			<div class="taxerror"></div>
        </div>
        <div class="col-md-3">
            <label><b>Percentage</b> <span class="star">*</span></label>
            <input type="text" name="percentage[]" class="model percentage" maxlength="5">
			<div class="percenterror"></div>
			<input type="hidden" id="countid" value="1">
        </div>
		<div class="col-md-3">
		<a class="link" id="addRowBtn" ><i class="fa fa-plus-square" aria-hidden="true"style="margin-top: 30px;
    color: #643886;"></i></a></div>
    </div>
</div>


<button class="btn cyan waves-effect waves-light submittax" type="submit" name="action" style="margin-left:20px;">Submit</button>


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
  


       

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> -->
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
  <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
   $(document).ready(function(){
$('#tax').change(function(){
      var tax=$('#tax').val();
	 //alert("hiii");
	    var datastring='tax='+tax;
  
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>tax/check_tax",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('.taxerror').html('');    
        }
        else{
			$('.taxerror').html('Tax Name Already Exist!').show().css({'color':'#ff0000','position':'relative','bottom':'14px','font-size':'10px'}); 
			$('#tax').val('');
			return false;
         }
        }
    });
 });
   });
   </script>
   <!--<script>
$(document).ready(function(){
$('.email_check').change(function(){
      var ben_email=$(this).val();
	 // var ben_type = $('#ben_types').val();
	    var datastring='email='+ben_email;
   //var datastring='email='+email+'&ben_type='+ben_type;
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>home/chk_email",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('#email_error').html('');    
        }
        else{
			$('#email_error').html('Email already Exist!').show().delay(4000).fadeOut(); 
			$('#ben_email').val('');
			return false;
         }
        }
    });
 });
});
</script>-->
	   <!--<script type='text/javascript'>//<![CDATA[ 
//$(window).load(function(){
$(function(){
    var tbl = $("#myTable");
	var i=0;
    //alert("test");
    $("#addRowBtn").click(function(){
        $('<div class="col-md-12" style="padding: 0px;"><div class="col-md-3"><input type="text" name="tax_name[]" class="model tax'+i+'" id="tax"><div class="taxerror'+i+'"></div></div><div class="col-md-3"><input type="text" name="percentage[]" class="model percentage'+i+'" maxlength="3"><div class="percenterror'+i+'"></div></div><div class="col-md-3"><a class="delRowBtn"><i class="fa fa-trash"></i></a></div></div>').appendTo(tbl);  
		
   
	
 
$('.tax'+i).keyup(function(){
      var tax=$(this).val();
	//alert(tax);
	    var datastring='tax='+tax;
  //alert(tax);
    $.ajax({  
    type:"POST",
    url:"<?php echo base_url(); ?>tax/check_tax",
        data:datastring,
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('.taxerror'+i).html('');    
        }
        else{
			$('.taxerror'+i).html('Tax Name Already Exist!').show().css({'color':'#ff0000','position':'relative','bottom':'10px'}); 
			$('.tax'+i).val('');
			return false;
         }
        }
    });
 });
  
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
	
	
	$(".percentage"+i).bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9%]/g,""));
		});
		$(".tax"+i).bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
		
	$(".submittax").click(function(event){
			if($(".tax"+i).val()==""){
				$(".taxerror"+i).text("Please Enter Tax Name").show().css({
					'font-size':'11px',
					'color':'#ff0000',
					'position': 'relative',
					'bottom': '10px'
				});
				event.preventDefault();
			}
			if($(".percentage"+i).val()==""){
				$(".percenterror"+i).text("Please Enter the Percentage").show().css({
					'font-size':'11px',
					'color':'#ff0000',
					'position': 'relative',
					'bottom': '5px'
				});;
				event.preventDefault();
			}
		});
		$(".percentage"+i).keyup(function(){
			$(".percenterror"+i).fadeOut('slow');
		});
		$(".tax"+i).keyup(function(){
			$(".taxerror"+i).fadeOut('slow');
		});
		});
	i++;
});
 
//});//]]>  

</script>-->
<script>
$(document).ready(function(){
$('#addRowBtn').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	//var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Tax/add_taxrow",
data: datastring,
cache: false,
success: function(result)
{ //alert(result);
		$('#myTable').append(result);
} 
});

});
  
});
</script>
  <script>
	$(function(){
		//alert("percentage");
		$(".submittax").click(function(event){
			if($(".tax").val()==""){
				$(".taxerror").text("Please Enter Tax Name").show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position': 'relative',
					'bottom': '15px'
				});
				event.preventDefault();
			} 
			if($(".percentage").val()==""){
				$(".percenterror").text("Please Enter the Percentage").show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position': 'relative',
					'bottom': '15px'
				});
				event.preventDefault();
			}
		});
		
		$(".percentage").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9.]/g,""));
		});
		$(".tax").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
		
		$(".percentage").keyup(function(){
			$(".percenterror").fadeOut('slow');
		});
		$(".tax").keyup(function(){
			$(".taxerror").fadeOut('slow');
		});
	});
  </script>
 
</body>

</html>