
<!--<script type='text/javascript'>//<![CDATA[ 

$(function(){
    
	var tb2 = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		++i;
        $('<div class="col-md-12" style="padding: 0px"><div class="col-md-3 col-sm-6 col-xs-12"><input type="text" name="cat_name[]"  id="UserName'+i+'" class="firstname"><div class="fname" id="lname'+i+'" style="color:red"></div></div><div class="col-md-1 col-sm-6 col-xs-12" style="padding:0px"><a class="delRowBtn btn btn-primary fa fa-trash" style="height:30px;"></a></div></div>').appendTo(tb2);  
		
		$("#UserName"+i).keyup(function(){
			
		
			
			var name1=document.getElementById( "UserName"+i ).value;
			
			//alert(name1);
			
			if(name1)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Productcategory/category_validation',
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
			$('#lname'+i).text('Category Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '12px'}); 
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
				$("#lname"+i).text("Enter Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '12px'});
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
		
		
    });
   
   $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("div").parent().remove();        
    });
    
});
 

</script>-->

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
url: "<?php  echo base_url(); ?>Productcategory/add_prodrow",
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


<style>
.btn, .btn-large, .btn-flat{text-transform:none;}
.tableadd tr td input {
    width: 238px;
    height: 33px;
    /* border: 1px solid #B3B3B3; */
    border-radius: 3px;
    /* padding-left: 10px; */
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
		<script>
$(document).ready(function(){
//$('#prob_cat_name').change(function(){ //alert("check");
$(document).on("keyup","#UserName1", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){
//$(document).on("keyup","#UserName1", function(){

	
var name=$("#UserName1").val();
 
//alert(name);
 if(name !=''){
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Productcategory/category_validation',
  data: {
   p_id:name,
  },
  success: function (data) { //alert(data);
  if(data == 0){
        
        $('#lname12').html('');    
        
            
        }
        else{
			
			$('#lname12').text('Category Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'}); 
			$('.firstname').val('');
			return false;
			
			
             
            
        }
  }
  });
 }
}
});
</script>
<script>
	$(function(){
		$("#submit").click(function(event){
			//alert("xcfg");
			if($(".firstname").val()==""){
				$("#lname1").text("Enter Category Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'});
				event.preventDefault();
			}
		});
		$("#UserName1").keyup(function(){
			if($(this).val()==""){
				$("#lname1").show();
			}
			else{
				$("#lname1").fadeOut('slow');
			}
		});
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
 
 .delRowBtn {
    display: inline-block;
    padding: 0px 5px;
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
.star{
	color:#ff0000;
	font-size:15px;
}

 </style>

<section id="content">  
    <div class="container">
         <div class="section">
			<h2>Add Product Category</h2>
				<hr>
         <div id="basic-form" class="section">
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
               <form action="<?php echo base_url(); ?>Productcategory/add_prod_category" method="post" >
                           


<div id="myTable" class="tableadd" >
	<div class="col-md-12" style="padding: 0px">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>Category Name <span class="star">*</span></label>
			<input type="text" name="cat_name[]"  id="UserName1" class="firstname" maxlength="80">
			<div class="fname" id="lname1" style="color:red"></div>
			<span id="lname12" style="color:red"></span>
			<input type="hidden" id="countid" value="1">
		</div>
		<a class="link" id="addRowBtn1"><i class="fa fa-plus-square" aria-hidden="true"style="margin-top:30px;color:#5f3282;"></i>
</a>
	</div>

</div>

<button class="btn cyan waves-effect waves-light registersubmit" type="submit" id="submit" style="margin-left:20px;">Submit</button>


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
 
</body>

</html>