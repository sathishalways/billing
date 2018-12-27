<style>
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top:1px solid #ccc !important;
    margin-bottom: 9px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
select {
     border: 1px solid #ccc; 
	 margin: 0 0 15px 0;
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
select[multiple]
{

height: 200px !important;
}
#errorBox{
 color:#F00;
 font-size:12px;
 }
 
 </style>
<!--<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var first_name = document.frmUsers.first_name.value,
   user_name = document.frmUsers.user_name.value,
   pass = document.frmUsers.pass.value,
   user_type = document.frmUsers.user_type.value;
   //branch_name = document.frmCust.branch_name.value
   
   
  if( first_name == "" )
   { 
    document.frmUsers.first_name.focus() ;
	document.getElementById("errorBox").innerHTML = "enter the name";
     return false;
   }
   
   if( user_name == "" )
   {
     document.frmUsers.user_name.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the user name";
     return false;
   }
   if( pass == "" )
   {
     document.frmUsers.pass.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the password";
     return false;
   }
   if( user_type == "" )
   {
     document.frmUsers.user_type.focus() ;
	 document.getElementById("errorBox").innerHTML = "enter the user type";
     return false;
   }
  
}

</script>-->
<script>
   $(function(){
   $( "form" ).submit(function( event ) {
  if ( $( "#text-input" ).val() === "" ) {
	$( "#first_name_error" ).text( "Enter the Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( ".user_name" ).val() === "" ) {
	$( "#user_name_error" ).text( "Enter the User Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( ".pass" ).val() === "" ) {
	$( "#pass_error" ).text( "Enter the Password" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( ".cpass" ).val() === "" ) {
	$( "#cpass_error" ).text( "Enter the Confirm Password" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( "#user_type" ).val() === "" ) {
	$( "#user_type_error" ).text( "Please select the User Type" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  if ( $( ".cpass" ).val() === $( ".pass" ).val() ) {
	  return true;
	//$( "#cpass_error" ).text( "" ).show();
    //event.preventDefault();
  }else{
	  $( "#cpass_error" ).text( "Confirm Password does not match with the Password" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
	  $('.cpass').val('');
	  event.preventDefault();
  }
  
});
});
   </script>
<script>
    $(function(){
		$("#text-input").keyup(function(){
			if($(this).val()==""){
			    $("#first_name_error").show();
			}
			else{
				$("#first_name_error").hide();
			}
		});
		
		$(".user_name").keyup(function(){
			if($(this).val()==""){
			    $("#user_name_error").show();
			}
			else{
				$("#user_name_error").hide();
			}
		});
		
		$(".pass").keyup(function(){
			if($(this).val()==""){
			    $("#pass_error").show();
			}
			else{
				$("#pass_error").hide();
			}
		});
		$(".cpass").keyup(function(){
			if($(this).val()==""){
			    $("#cpass_error").show();
			}
			else{
				$("#cpass_error").hide();
			}
		});
		
		$("#user_type").change(function(){
			if($(this).val()==""){
			    $("#user_type_error").show();
			}
			else{
				$("#user_type_error").hide();
			}
		});
		
	});
</script>


<script type="text/javascript">
//var $= jQuery.noConflict();
$(document).ready(function()
{
$("#user_type").change(function()
{ 
var id=$(this).val();
if(id=='7'){
	
	//alert("sdsadsdsd");
	$("#engg_name > option").remove();
	var dataString = 'id='+ id;

	$.ajax
	({
	type: "POST",
	url: "<?php  echo base_url(); ?>Users/get_employees",
	data: dataString,
	cache: false,
	success: function(data) 
	{ 	$('#engg_name').append("<option value='0'>---Select---</option>");
		$.each(data, function(index, data){//alert(data.branch_name);
            $('#engg_name').append("<option value='"+data.id+"'>"+data.emp_name+"</option>");
            });
	} 
	});	
	
	} else{
		$("#engg_name > option").remove();
		$('#engg_name').append("<option value='0'>---Select---</option>");
	}

});

});

</script>



<section id="content">
     
        <div class="container-fluid">
          <div class="section">

            <h2>New Users</h2>
<hr>
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
                      <form action="<?php echo base_url(); ?>Users/add_users" method="post" onsubmit="return frmValidate()" autocomplete="off" name="frmUsers">
					  <div id="errorBox"></div>
                <div class="col-md-12">         

					<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="form-group">
							<label>Name&nbsp;<span style="color:red;">*</span></label>
							<input type="text" class="first_name" id="text-input" name="first_name">
							<div id="first_name_error" style="color:red; font-size:11px;"></div>
							</div>
					</div>					
					<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="form-group">
							<label>User Name&nbsp;<span style="color:red;">*</span></label>
							<input type="text" class="form-control user_name" id="text-input" name="user_name">
							<div id="user_name_error" style="color:red; font-size:11px;"></div>
							</div>
					</div>					   
		
                     <div class="col-md-3 col-sm-6 col-xs-12">
							<div class="form-group">
							<label>Password&nbsp;<span style="color:red;">*</span></label>
							<input type="password" class="form-control pass" id="text-input" name="pass">
							<div id="pass_error" style="color:red; font-size:11px;"></div>
							</div>
                     </div>					   
                     <div class="col-md-3 col-sm-6 col-xs-12">
					 <div class="form-group">
							<label>Confirm Password&nbsp;<span style="color:red;">*</span></label>
							<input type="password" class="form-control cpass" id="text-input" name="cpass">
							<div id="cpass_error" style="color:red; font-size:11px;"></div>
							</div>
							
                 </div>
				</div> 
                 <div class="col-md-12">
				 <div class="col-md-3 col-sm-6 col-xs-12">
				 <div class="form-group">
							<label >User Type&nbsp;<span style="color:red;">*</span></label>
							<select name="user_type" id="user_type" class="user_type_list">
								<option value="">---Select---</option>
								<option value="1">Administrator</option>
								<option value="2">Service Co-ordinator</option>
								<option value="3">Accounts</option>
								<option value="4">Spares</option>
								<option value="5">Sales</option>
								<option value="6">Stamping</option>
								<option value="7">Engineers</option>
							</select>
							<div id="user_type_error" style="color:red; font-size:11px;"></div>
							</div>
					</div>	

                         <!--<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="form-group">
									<label>User Access</label>
									<select name="user_access" id="user_access" class="user_type_list">
										<option value="">---Select---</option>
										<option value="stamping_user">Stamping</option>
										<option value="nonstamping_user">Non-Stamping</option>
										<!--<option value="3">Engineers</option>
									</select>
									</div>
                           </div>-->
                           <div class="col-md-3 col-sm-6 col-xs-12">
									<div class="form-group">
									<label>Engineers</label>
									<select name="engg_name" id="engg_name">
										<option value="0">---Select---</option>
									</select>
									</div>
                         </div>
                   

 </div>
 <div class="col-md-3 col-sm-6 col-xs-12">
									<div class="form-group">
<button style="margin-left: 6%;margin-top: 5%;"class="btn cyan waves-effect waves-light " type="submit" name="action">Submit</button>
</div></div>

<table class="tableadd">



<tr>
<td ></td>
<td style="padding-top: 25px;">
 
</td>
</tr>

</table>

                  
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){ 
	
 $(document).on("keyup",".user_name", function(){ 
var timer;	
 clearTimeout(timer);
        timer = setTimeout(user, 3000);
		}); 
//alert(brand);
function user(){
var id=$(".user_name").val();

var datastring = 'id='+id;
//alert(datastring);
$.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Users/checkname",
data: datastring,
cache: false,
success: function(data) 
{ 	//alert(data);
	 if(data == 0){
            $('#user_name_error').html('');
			
        }
        else{
			$('#user_name_error').html('User Name Already Exist!').show(); 
			$('.user_name').val('');
			
			return false;
         }
	
} 
 
});
}
});
</script>
  
 <script type="text/javascript">  
  $(document).ready(function() {  
   $('#add').click(function() {  
   $('#select1 option:selected').remove().appendTo('#select2');  
   });  
   $('#remove').click(function() {  
   $('#select2 option:selected').remove().appendTo('#select1');  
   });  
  });  
  
 </script> 

        

   
</body>

</html>