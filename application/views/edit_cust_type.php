<style>
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
	$(document).on("keyup","#custtype", function(){
var timer1;	
 clearTimeout(timer1);
        timer1 = setTimeout(brand1, 3000);
		}); 
 //alert("hii");
 function brand1(){
var id=$("#custtype").val();

var datastring = 'id='+id;

$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>customer/custtype_validation",
data: datastring,
cache: false,
success: function(data) 
{ 	//alert(data);
	 if(data == 0){
            $('#fname').html('');
			
        }
        else{
			
			$('#fname').html('Customer Already Exist!').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
			
			$('.corporate').val('');
			
			return false;
         }
	
} 
});
}
});
</script>
<script>
$(document).ready(function(){
$('.corporate').change(function() { //alert("hii");
var id=$(this).val();

var datastring = 'id='+id;



});
$("#registersubmit").click(function(event){
			//alert("xcfg");
			if($(".corporate").val()==""){
				$("#fname").text("Enter Customer Type").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
				event.preventDefault();
			}
		});
		
		$(".corporate").keyup(function(){
			if($(this).val()==""){
				$("#fname").show();
			}
			else{
				$("#fname").hide();
			}
		})
});
</script>

<style>
 .link{
	 padding: 10px;
	 margin-right:10px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold !important;
border-radius: 5px;
cursor:pointer;
 }
 .link:hover{
	
color: white;
text-decoration:none;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .btn{text-transform:none !important;}
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Edit Customer Type</h2>
<hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>customer/edit_customer_type" method="post">
                               


<table id="myTable" class="tableadd">


<div class="col-md-3 col-sm-6 col-xs-12">
<label><font color="red">*</font>Customer Type</label>
<input type="text" name="cust_type" class="corporate" value="<?php   foreach($list as $key){ echo $key->type; } ?>" maxlength="30" id='custtype'><input type="hidden" name="cust_typeid" class="corporate" value="<?php  foreach($list as $key){ echo $key->id;} ?>">
<input type="hidden" name="cust_type1" class="corporate1" value="<?php   foreach($list as $key){ echo $key->type; } ?>">
<div id="fname"></div>
</div>


<!--<tr>
<td><label style="width:180px;font-weight:bold;">Customer Type</label></td>
</tr>
<tr>
<td><input type="text" name="cust_type" class="corporate" value="<?php echo $key->type; ?>"><input type="hidden" name="cust_typeid" class="corporate" value="<?php echo $key->id; ?>"></td>
</tr>-->

</table>

<button class="btn cyan waves-effect waves-light " type="submit" name="action" id="registersubmit" style="margin-left:14px;">Submit</button>


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
</body>

</html>