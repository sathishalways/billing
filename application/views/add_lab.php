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
url: "<?php  echo base_url(); ?>Labcategory/add_labrow",
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
    
	var tb2 = $("#myTable");
    var i=1;
    $("#addRowBtn1").click(function(){
		i++;
        $('<div class="col-md-12" style="padding: 0px"><div class="col-md-3 col-sm-6 col-xs-12"><input type="text" name="lab_name[]"  id="UserName'+i+'" class="firstname"><div class="fname" id="lname'+i+'" style="color:red"></div></div><div class="col-md-1 col-sm-6 col-xs-12" style="padding:0px"><a class="delRowBtn btn btn-primary fa fa-trash" style="height:30px;"></a></div></div>').appendTo(tb2);  
		
		$("#UserName"+i).change(function(){
			
		
			
			var name1=$(this).val();
			
			//alert(name1);
			
			if(name1)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Labcategory/category_validation',
  data: {
   id:name1,
  },
  success: function (data) {
	  //alert(data);
  if(data == 0){
        $('#lname'+i).html('');    
        }
        else{
			//alert("else called");
			$('#lname'+i).text('Lab Name Already Exist').show().delay(3000).fadeOut(); 
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
				$("#lname"+i).text("Enter Lab Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','left':'14px'});
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


<style>
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
.btn{text-transform:none !important;}
</style>	
		<!--<script>

$(document).on("keyup","#UserName1", function(){

	
var name=$(this).val();
 
//alert(name);
 if(name)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Labcategory/category_validation',
  data: {
   p_id:name,
  },
  success: function (data) {
  if(data == 0){
        
        $('#lname1').html('');    
        
            
        }
        else{
			$('#lname1').html('Lab Name Already Exist').show().delay(1000).fadeOut(); 
			$('#UserName1').val('');
			return false;
             
            
        }
  }
  });
 }
 
});
</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('#UserName1').keyup(function(){
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
			$('#UserName1').val('');
			return false;
			//exit;
         }
        }
    });
 });
 });

</script>    
<!--<script> /* worked on 31-07-2017 */
    $(document).ready(function(){
		$('.firstname').bind('keyup ', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^0-9a-zA-Z. ]/g,'') );
        });
		 });
		 </script>-->
	
<script>
	$(function(){
		$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($(".firstname").val()==""){
				$("#lname1").text("Enter Lab Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'});
				event.preventDefault();
			}
		});
		
		$(".firstname").keyup(function(){
			if($(this).val()==""){
				$("#lname1").show();
			}
			else{
				$("#lname1").fadeOut('slow');
			}
		})
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
 .link:focus{
	
color: white;
text-decoration:none;
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

 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h2>Add Lab</h2>

           <hr>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
               <form action="<?php echo base_url(); ?>Labcategory/add_lab_category" method="post" >
                           


<div id="myTable" class="tableadd" >
	<div class="col-md-12" style="padding: 0px">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<label>Lab Name<span style="color:red;">*</span></label>
			<input type="text" name="lab_name[]"  id="UserName1" class="firstname" maxlength="100">
			<div class="fname" id="lname1" style="color:red"></div>
		</div>
		<a class="link" id="addRowBtn1"><i class="fa fa-plus-square" aria-hidden="true"style="    margin-top: 30px;
    color: #4b1b72;"></i></a>
	</div>
<!--<tr>
<td><label style="font-weight:bold;">Category Name</label></td>
</tr>
<tr>
<td><input type="text" name="cat_name[]"  id="UserName1" class="firstname"><div class="fname" id="lname1" style="color:red"></div></td>
</tr>-->
</div>

<button class="btn cyan waves-effect waves-light registersubmit" type="submit" style="margin-left:20px;">Submit</button>


<table class="tableadd">
<input type="hidden" id="countid" value="1">


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