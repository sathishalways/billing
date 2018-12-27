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
	$(function(){
		$("#submit").click(function(event){
			//alert("xcfg");
			if($("#lname").val()==""){
				$("#lname1").text("Enter Lab Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '12px'});
				event.preventDefault();
			}
		});
		
		$("#lname").keyup(function(){
			if($(this).val()==""){
				$("#lname1").show();
			}
			else{
				$("#lname1").fadeOut('slow');
			}
		})
	});
</script>
<script>
    $(document).ready(function(){
		$('#lname').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z ./-_,]+$/,'') );
        });
	 });
</script>
<script>
$(document).ready(function(){
$('#lname').keyup(function(){
      var name=$(this).val();
	 
	    
  //alert(name);
    $.ajax({
    type:"POST",
    url:"<?php echo base_url(); ?>Labcategory/category_validation",
        data:{
   id:name,
  },
        cache:false,
        success:function(data){
			//alert(data);
        if(data == 0){
            $('#lname1').html('');    
        }
        else{
			$('#lname1').html('Lab Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'}); 
			$('#lname').val('');
			return false;
			//exit;
         }
        }
    });
 });
 });

</script>

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
 .link{
	 padding: 10px;
	 margin-right: 20px;
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
 .btn{text-transform:none !important;}
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

         <h2>Edit Lab</h2>

           <hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>Labcategory/edit_lab_category" method="post">
                               


<table id="myTable" class="tableadd">

<div class="col-md-12" style="padding: 0px">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>Lab Name<span style="color:red;">*</span></label>
			<input type="text" name="lab_name" class="corporate" value="<?php foreach($list As $key){ echo $key->lab_name;  } ?>" id="lname" maxlength="100">
			<input type="hidden" name="lab_name1" class="corporate1" value="<?php foreach($list As $key){ echo $key->lab_name;  } ?>" id="lname" maxlength="100">
			<input type="hidden" name="labid" class="corporate" value="<?php foreach($list As $key){ echo $key->id;  }?>">
			<div class="fname" id="lname1" style="color:red"></div>
		</div>
	</div>
<!--<tr>
<td><label style="font-weight:bold;">Category Name</label></td>
</tr>
<tr>
<td><input type="text" name="cat_name" class="corporate" value="<?php echo $key->product_category; ?>">
<input type="hidden" name="catid" class="corporate" value="<?php echo $key->id; ?>"></td>
</tr>-->

</table>

<button class="btn cyan waves-effect waves-light " type="submit" name="action" id="submit">Submit
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
</body>

</html>