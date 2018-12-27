
	 <script>
	$(function(){
		//alert("xcfg");
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
url: "<?php  echo base_url(); ?>Servicecategory/add_scatrow",
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

	<!-- <script>
	 

$(function(){
    
	var tb2 = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		i++;
        $('<div class="col-md-12"><div class="col-md-3"><input type="text" name="service_catname[]" id="UserName'+i+'" class="firstname" maxlength="80"><div class="fname" id="lname'+i+'" style="color:red"></div></div><div><a class="delRowBtn btn btn-primary fa fa-trash"></a></div></div>').appendTo(tb2); 
		
		
				$(".subcat").keyup(function(){
			
			var a=$(this).attr('id').split('-').pop();
			
			//alert(a);
			
			var name1=$(this).val();
			
			//alert(name1);
			
			
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
			$('#lname'+i).text('Service Category Name Already Exist').show(); 
			$('#UserName'+i).val('');
			return false;
             
            
        }	
  }
  });


		});
		
			$('#UserName'+i).bind("keyup blur", function(){
				$(this).val($(this).val().replace(/[^a-zA-Z ]/g,""));
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
        $(this).closest("div").parent().remove();        
    });
	//$('.firstname').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        //});
		
	
});
	   
	   </script>-->
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
 .delRowBtn{
	 background-color:  #dbd0e1 none repeat scroll 0% 0% !important;
	 border-color: transparent !important;
	 color:#522276 !important;
	  padding: 0px 4px 4px 4px;
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
    
	a{
		color:#522276;
	}
	a:hover{
		color:#522276;
		cursor:pointer;
	}
	a:focus{
		color:#522276;
	}
	a:active{
		color:#522276;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
    $(document).ready(function(){
		$('.firstname').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z. ]/g,'') );
        });
		/*$('#UserName1').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });*/
		 });
		 </script>
		

<section id="content">

     
        <div class="container">
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
	<div class="col-md-12">
		<div class="col-md-3">
			<label style="font-weight:bold;width:180px;">Service Category Name <span class="mandatory"  style="color:red;">*</span></label>
			<input type="text" name="service_catname[]" id="UserName" class="firstname" maxlength="80">
			<div class="fname" id="lname1" style="color:red; font-size: 10px;"></div>
		</div>
		<div><a class="link" id="addRowBtn1" style="    height: 30px;"><i class="fa fa-plus-square" aria-hidden="true" style="margin-top: 30px;color:#58277a;"></i></a></div>
	</div>
	
</div>
<input type="hidden" id="countid" value="1">
<div class="col-md-12">
		<div class="col-md-4">
			<button class="btn cyan waves-effect waves-light registersubmit" type="submit" name="action">Submit</button>
		</div>
	</div>



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
 
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   

	   
<script>

$(document).on("keyup","#UserName", function(){

	
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
			$('#lname1').html('Service Category Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'}); 
			$('#UserName').val('');
			return false;
             
            
        }
  }
  });
 }
 
});
</script>
</body>

</html>