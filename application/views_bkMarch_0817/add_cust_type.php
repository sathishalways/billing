<style>
.tableadd tr td input {
    width: 230px;
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
</style>
<script type='text/javascript'>//<![CDATA[ 

$(function(){
    var tbl = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		
        $('<tr>  <td style="width: 29.5%";><input type="text" name="cust_type[]" class="corporate" id="UserName'+i+'"><div class="fname" id="lname'+i+'"></div></td><td><a class="delRowBtn btn btn-primary"><i class="fa fa-trash"></i></a></td></tr>').appendTo(tbl);



			$("#UserName"+i).keyup(function(){
			
		
			
			var name1=document.getElementById( "UserName"+i ).value;
			
			//alert(name1);
			
			if(name1)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>customer/custtype_validation',
  data: {
   p_id:name1,
  },
  success: function (data) {
	 // alert(data);
  if(data == 0){
        
        $('#lname'+i).html('');    
        
            
        }
        else{
			//alert("else called");
			$('#lname'+i).text('Customer Type Already Exist').show().delay(1000).fadeOut(); 
			$('#UserName'+i).val('');
			return false;
             
            
        }	
  }
  });
 }

		});
		
		
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#UserName"+i).val()==""){
				$("#lname"+i).text("Enter Customer Type").show().css({'color':'#ff0000','position':'relative','bottom':'10px','left':'14px'});
				event.preventDefault();
			}
		});
		
		$("#UserName"+i).keyup(function(){
			if($(this).val()==""){
				$("#lname"+i).show();
			}
			else{
				$("#lname"+i).fadeOut('slow');
			}
		});




		i++;
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});


</script>
<style>
body{background-color:#fff;}
 .link{
	 padding: 10px;
	 margin-right:10px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
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

<!--<tr>
<td><label style="width:180px;font-weight:bold;">Customer Type</label></td>
</tr>
<tr>
<td><input type="text" name="cust_type[]" class="corporate"></td>
</tr>-->
<div class="col-md-3 col-sm-6 col-xs-12">
<label><font color="red">*</font>Customer Type</label>
<input type="text" name="cust_type[]"  id="UserName1" class="firstname">
<div class="fname" id="lname1" style="color:red"></div>
</div>

</table>

<a class="link" id="addRowBtn1">Add</a><button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action">Submit
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
  


 <!--   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> -->   

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	
			<script>

$(document).on("keyup","#UserName1", function(){

	
var name=$(this).val();
 
//alert(name);
 if(name)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>customer/custtype_validation',
  data: {
   p_id:name,
  },
  success: function (data) {
  if(data == 0){
        
        $('#lname1').html('');    
        
            
        }
        else{
			$('#lname1').html('Customer Type Already Exist').show().delay(1000).fadeOut(); 
			$('#UserName1').val('');
			return false;
             
            
        }
  }
  });
 }
 
});
</script>
	
<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($(".firstname").val()==""){
				$(".fname").text("Enter Customer Type").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
		});
		
		$(".firstname").keyup(function(){
			if($(this).val()==""){
				$(".fname").show();
			}
			else{
				$(".fname").fadeOut('slow');
			}
		})
	});
</script>   
	   
	   
</body>

</html>