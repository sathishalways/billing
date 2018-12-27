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
url: "<?php  echo base_url(); ?>accessories/add_accsrow",
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






<!--<script type='text/javascript'>//<![CDATA[ 

$(function(){
	
    var tbl = $("#myTable");
    $("#addRowBtn").click(function(){
		//var inc=1;
	//	var v1=$('#countid').val();
		
		//alert(v1);
       $('<tr><td width="25.35%"><input type="text" name="acc_name[]" id="acc1"><div id="dname1"></div></td><td><a class="delRowBtn btn btn-primary fa fa-trash" style="height:36px; margin-left: 15px"></a></td>  </tr>').appendTo(tbl); 
		 
    });
	/* 
		 $(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#acc1"+i).val()==""){
				$("#dname1"+i).text("Enter Accessories Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
		}); 
		
		$("#acc1").keyup(function(){
			if($(this).val()==""){
				$("#dname1").show();
			}
			else{
				$("#dname1").fadeOut('slow');
			}
		}); */
		
		
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
  
});
</script>-->
<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#acc1").val()==""){
				$("#dname1").text("Enter Accessories Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
		});
		
		$("#acc1").keyup(function(){
			if($(this).val()==""){
				$("#dname1").show();
			}
			else{
				$("#dname1").fadeOut('slow');
			}
		});
		
		$("#acc1").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
		});
	});
</script>
<style>
 .link{
	 padding: 10px;
	 margin-right:10px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
cursor:pointer;
font-size:13px;
font-weight:bold !important;
 }
 .link:hover{
	
color: white;
font-size:13px;
font-weight:bold !important;
text-decoration:none;
 }
 input[type=text]{
	border: 1px solid #ccc;
 }
 .divider {
    background-color: #522276 !important;
}
h5{
	color: #dbd0e1;
}
.btn, .btn-large {
	    letter-spacing: 0;
		text-transform:capitalize;
}
.star{
	color:#ff0000;
	font-size:15px;
}
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">New Accessories</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>accessories/add_accessories" method="post">
	<table id="myTable" class="tableadd">
		<tr>
			<td><label style="width:180px;font-weight:bold;">Accessories Name <span class="star">*</span></label></td>
		</tr>
		<tr>
			<td><input type="text" name="acc_name[]" id="acc1" maxlength="80"><input type="hidden" value="1" id="countid"><div id="dname1" style="color:red; font-size: 11px;"></div>
			
			</td>
		</tr>
	</table>
	<input type="hidden" id="countid" value="1">
	<a class="link" id="addRowBtn">Add</a><button class="btn cyan waves-effect waves-light registersubmit" type="submit">Submit
                               <!--<i class="fa fa-arrow-right"></i>-->

                              </button>
<!--<a class="link" href='' onclick='$("<tr><td><input type=\"text\" name=\"acc_name[]\" /></td></tr>").appendTo($("#myTable")); return false;'>Add</a><button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>
                              </button>-->
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

$(document).on("keyup","#acc1", function(){
var name=$(this).val();
 
//alert(name);
 if(name)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>accessories/acc_validation',
  data: {
   p_id:name,
  },
  success: function (data) {
  if(data == 0){
        
        $('#dname1').html('');
        }
        else{
			$('#dname1').html('Accessories Name Already Exist').show(); 
			$('#acc1').val('');
			return false;
        }
  }
  });
 }
 
});
</script>
</body>

</html>