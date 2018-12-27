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
<style>
body{background-color:#fff;}
 .link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid transparent !important;
background: transparent !important;
/*color: white;*/
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .delRowBtn{
	 background-color: transparent !important;
	 border-color: transparent !important;
	 color:#337ab7 !important;
 }
 
   .mandatory{color:red;}

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
	    padding: 0px 12px;
	}
 </style>
 <script>
function frmValidate(){
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 //alert(document.frmService.serial_no.value);
 var service_catname = document.frmServicecat.service_catname.value;
	 
  
 if(service_catname == "")
   {
     document.frmServicecat.service_catname.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the service category name.";
     return false;
   }
   if(model == "")
   {
     document.frmServicecat.model.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the model name";
     return false;
   }
   
}

</script>

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Add Service Category</h2>

           <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                     <form action="<?php echo base_url(); ?>Servicecategory/add_service_category" method="post" name="frmServicecat">
                       <div id="errorBox"></div>          


<div id="myTable" class="tableadd">
	<div class="col-md-12" style="padding:0px">
		<div class="col-md-3">
			<label style="font-weight:bold;width:180px;">Service Category Name <span class="mandatory">*</span></label>
			<input type="text" name="service_catname[]" id="UserName1" class="firstname">
			<div class="fname" id="lname1" style="color:red"></div>
		</div>
		<div><a class="link" id="addRowBtn1"><i class="fa fa-plus-square" aria-hidden="true"></i></a></div>
	</div>
</div>

<button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action">Submit
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
	   
	   <script>
	 

$(function(){
    
	var tb2 = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		i++;
        $('<div class="col-md-12"><div class="col-md-3"><input type="text" name="service_catname[]" id="UserName1" class="firstname"><div class="fname" id="lname1" style="color:red"></div></div><div><a class="delRowBtn btn btn-primary fa fa-trash"></a></div></div>').appendTo(tb2); 
		
		
				$(".subcat").keyup(function(){
			
			var a=$(this).attr('id').split('-').pop();
			
			//alert(a);
			
			var name1=$(this).val();
			
			//alert(name1);
			
			if(name1)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Servicecategory/service_validation',
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
			$('#lname'+i).text('Service Category Name Already Exist').show().delay(1000).fadeOut(); 
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
				$("#lname"+i).text("Enter Service Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
		});
		
		$(".subcat").keyup(function(){
			//alert("xdfn");
			if($(this).val()==""){
				$("#lname"+i).show();
			}
			else{
				$("#lname"+i).fadeOut('slow');
			}
		});
		
		
	});
	
	 $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });
    
});
	   
	   </script>
	   <script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($(".firstname").val()==""){
				$(".fname").text("Enter Service Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
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
<script>

$(document).on("keyup","#UserName1", function(){

	
var name=$(this).val();
 
//alert(name);
 if(name)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Servicecategory/service_validation',
  data: {
   p_id:name,
  },
  success: function (data) {
  if(data == 0){
        
        $('#lname1').html('');    
        
            
        }
        else{
			$('#lname1').html('Service Category Name Already Exist').show().delay(1000).fadeOut(); 
			$('#UserName1').val('');
			return false;
             
            
        }
  }
  });
 }
 
});
</script>
</body>

</html>