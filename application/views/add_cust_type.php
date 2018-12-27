<style>
.tableadd tr td input {
        width:234px;
    height: 33px;
    /* border: 1px solid #B3B3B3; */
    border-radius: 2px;
    padding-left: 10px;
    margin-left: 13px;
}
.tableadd tr td input {
    height: 21px !important;
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
    
.btn {
    display: inline-block;
    padding: 0px 0px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    
}
</style>
<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($(".firstname").val()==""){
				$("#lname1").text("Enter Customer Type").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
				event.preventDefault();
			}
		});
		
		$(".firstname").keyup(function(){
			if($(this).val()==""){
				$("#lname1").show();
			}
			else{
				$("#lname1").hide();
			}
		})
	});
</script> 

<script>
$(document).ready(function(){
$('#addRowBtn1').click(function(){ //alert("ddaaassss");
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
url: "<?php  echo base_url(); ?>customer/add_custtyperow",
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
$(document).ready(function(){
	$(document).on("keyup","#UserName1", function(){
var timer1;	
 clearTimeout(timer1);
        timer1 = setTimeout(brand1, 3000);
		}); 
 //alert("hii");
 function brand1(){
var id=$("#UserName1").val();

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
            $('#lname1').html('');
			
        }
        else{
			
			$('#lname1').html('Customer Already Exist!').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
			
			$('#UserName1').val('');
			
			return false;
         }
	
} 
});

}
});
</script>
<style>
body{background-color:#fff;}
 .link{
	 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
 }
 
 
 .waves-light
 {
	 text-transform:capitalize !important;
 }
 </style>

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Add Customer Type</h2>

           <hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                     <form action="<?php echo base_url(); ?>customer/add_customer_type" method="post">
                               


<table id="myTable" class="tableadd">

<div class="col-md-3 col-sm-6 col-xs-12">
<label><font color="red">*</font>Customer Type</label>
<input type="text" name="cust_type[]"  id="UserName1" class="firstname" maxlength="30">
<div class="fname" id="lname1" style="color:red"></div>
</div>
<a class="link" id="addRowBtn1"><i class="fa fa-plus-square" aria-hidden="true" style="margin-top: 30px;color:#5f3282;"></i></a>

</table>

<button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action" style="padding: 7px 10px 10px 10px;
    margin-left: 20px;">Submit</button>


<table class="tableadd">



<tr>
<td ></td>
<td style="padding-top: 25px;">

 
</td>
</tr>

</table>




<input type="hidden" id="countid" value="1">
					
                         
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
  


 <!--   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
      
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	
			
</body>

</html>