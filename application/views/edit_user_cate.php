



<style>
select {
     border: 1px solid #ccc; 
	 margin: 0 0 15px 0;
}

select[multiple]
{

height: 200px !important;
width:200px !important;
}
select
{
	width:100% !important;
}
#errorBox{
 color:#F00;
 }
 .user_type
 {
	 height: 35px;
border-radius: 5px;
border: none;
border-bottom: 1px solid #055E87;
background-color: transparent;
background-image: linear-gradient(45deg, transparent 50%, #333 50%), linear-gradient(135deg, #070708 50%, transparent 50%), linear-gradient(to right, #F6F8F9, #FBFBFB);
background-attachment: scroll, scroll, scroll;
background-clip: border-box, border-box, border-box;
background-origin: padding-box, padding-box, padding-box;
background-position: calc(100% - 21px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), 100% 0px;
background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
background-repeat: no-repeat;
font: 300 1em/1.5em "Helvetica Neue",Arial,sans-serif;
padding: 0.5em 3.5em 0.5em 1em;
border-radius: 0px;
margin: 0px;
box-sizing: border-box;
-moz-appearance: none;
 }
 .btn{text-transform:none !important;}
 </style>



<script type="text/javascript">
//var $= jQuery.noConflict();
$(document).ready(function()
{
$("#user_type").change(function()
{ 
var id=$(this).val();
if(id=='3'){
	
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
	
	}

});

});

</script>

<section id="content">
     
        <div class="container">
          <div class="section">

            <h2>Edit Users</h2>
<hr>
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">		  
			   
			  
                <div class="col-md-10">                
             
                 
                      <form action="<?php echo base_url(); ?>Users/update_users" method="post" onsubmit="return frmValidate()" autocomplete="off" name="frmUsers">
					  <!--<div id="errorBox"></div>-->
					  <?php foreach($get_usersbyid As $user_key){
								/* if(isset($user_key->categories_assigned)){
									 $categories_assigned = explode(",",$user_key->categories_assigned);
								} */
							?>
            <div class="col-md-12 col-sm-12">         

				<div class="col-md-6 col-sm-4">
					<div class="form-group">
						<label for="form-control" class="col-md-5">Name&nbsp;<span style="color:red;">*</span></label>
						<div class="col-md-7">
							<input type="text" class="form-control frstname" id="text-input" name="first_name" value="<?php echo $user_key->name; ?>" style="border: 1px solid #ccc;margin-bottom:0px;"><input type="hidden" class="form-control" id="text-input" name="user_id" value="<?php echo $user_key->id; ?>">
							<div id="nameerror"></div>
						</div>
					</div>
				</div>					
				
				<div class="col-md-6 col-sm-4">
					<div class="form-group">
						<label for="form-control" class="col-md-5">User Name&nbsp;<span style="color:red;">*</span></label>
						<div class="col-md-7">
							<input type="text" class="form-control user_name" id="text-input" name="user_name" value="<?php echo $user_key->user_name; ?>" style="border: 1px solid #ccc;margin-bottom:0px;" >
							<div id="usernameerror"></div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-4">
					<div class="form-group">
						<label for="form-control" class="col-md-5">Confirm Password&nbsp;<span style="color:red;">*</span></label>
						<div class="col-md-7">
							<input type="password" class="form-control password" id="text-input" name="pass" value="<?php echo $user_key->password; ?>" style="border: 1px solid #ccc;margin-bottom:0px;" >
							<div id="passerror"></div>
						</div>
					</div>
				</div>
		
					
			</div>
			<div class="col-md-12 col-sm-12">
			  
				<div class="col-md-6 col-sm-4">
					<div class="form-group">
						<label for="form-control" class="col-md-5">User Type&nbsp;<span style="color:red;">*</span></label>
						<div class="col-md-7">
							<select name="user_type" class="user_type" style="border: 1px solid #ccc;" onchange="document.getElementById('usertypeerror').style.display='none'">
								<option value="" >---Select---</option>
								
								<option value="1" <?php if(isset($user_key->user_type) && $user_key->user_type=='1') {?> selected="selected" <?php } ?>>Administrator</option>
								<option value="2" <?php if(isset($user_key->user_type) && $user_key->user_type=='2') {?> selected="selected" <?php } ?>>Service Co-ordinator</option>
								
								<option value="3" <?php if(isset($user_key->user_type) && $user_key->user_type=='3') {?> selected="selected" <?php } ?>>Accounts</option>
								<option value="4" <?php if(isset($user_key->user_type) && $user_key->user_type=='4') {?> selected="selected" <?php } ?>>Spares</option>
								<option value="5" <?php if(isset($user_key->user_type) && $user_key->user_type=='5') {?> selected="selected" <?php } ?>>Sales</option>
								<option value="6" <?php if(isset($user_key->user_type) && $user_key->user_type=='6') {?> selected="selected" <?php } ?>>Stamping</option>
								<option value="7" <?php if(isset($user_key->user_type) && $user_key->user_type=='7') {?> selected="selected" <?php } ?>>Engineers</option>
							</select>
							<div id="usertypeerror"></div>
						</div>
					</div>
				</div>


				<!--<div class="col-md-6 col-sm-4">
					<div class="form-group">
						<label for="form-control" class="col-md-5">User Access</label>
						<div class="col-md-7">
							<select name="user_access" id="user_access" class="user_type" style="border: 1px solid #ccc; " onchange="document.getElementById('useraccesserror').style.display='none'">
								<option value="">---Select---</option>
								<option value="stamping_user" <?php if(isset($user_key->user_access) && $user_key->user_access=='stamping_user') {?> selected="selected" <?php } ?>>Stamping</option>
								<option value="nonstamping_user" <?php if(isset($user_key->user_access) && $user_key->user_access=='nonstamping_user') {?> selected="selected" <?php } ?>>Non-Stamping</option>
								<!--<option value="3">Engineers</option>
							</select>
							<div id="useraccesserror"></div>
						</div>
					</div>
				</div>-->


<?php if(isset($user_key->user_type) && $user_key->user_type=='7') {?>
				<div class="col-md-6 col-sm-4">
					<div class="form-group">
						<label for="form-control" class="col-md-5">Engineers</label>
						<div class="col-md-7">
							<select name="engg_name" id="engg_name" style="border: 1px solid #ccc;" onchange="document.getElementById('engineerserror').style.display='none'">
								<option value="0">---Select---</option>
							<?php foreach($get_employees as $empkey){
									if($empkey->id == $user_key->emp_id){
								?>
								<option value="<?php echo $empkey->id; ?>" selected="selected"><?php echo $empkey->emp_name; ?></option>
							<?php } else{?>
								<option value="<?php echo $empkey->id; ?>"><?php echo $empkey->emp_name; ?></option>
							<?php } }?>
							</select>
							<div id="engineerserror"></div>
						</div>
					</div>
				</div>
<?php } ?>	
			</div>

<?php } ?>
<button style="margin-left: 6%; "class="btn cyan waves-effect waves-light " type="submit" name="action" id="submit">Submit
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
            $('#usernameerror').html('');
			
        }
        else{
			$('#usernameerror').html('User Name Already Exist!').show().css({'color':'#ff0000','font-size':'10px'}); 
			$('.user_name').val('');
			
			return false;
         }
	
} 
 
});
}
});
</script>
<script>
  $(document).ready(function(){  //alert("hii");
   $( "#submit" ).click(function( event ) {// alert("1");
  if ( $( ".frstname" ).val() === "" ) {
	$( "#nameerror" ).text( "Enter the Name" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( ".user_name" ).val() === "" ) {
	$( "#usernameerror" ).text( "Enter the User Name" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  
 
  
  if ( $( ".user_type" ).val() === "" ) {
	$( "#usertypeerror" ).text( "Please Select the User Type" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( ".password" ).val() === "" ) {
	$( "#passerror" ).text( "Enter the Confirm Password" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
 
});
});
   </script>
<script>
    $(function(){
		$(".frstname").keyup(function(){
			if($(this).val()==""){
			    $("#nameerror").show();
			}
			else{
				$("#nameerror").hide();
			}
		});
		
		$(".user_name").keyup(function(){
			if($(this).val()==""){
			    $("#usernameerror").show();
			}
			else{
				$("#usernameerror").hide();
			}
		});
		
		
		$("#user_type").change(function(){
			if($(this).val()==""){
			    $("#usertypeerror").show();
			}
			else{
				$("#usertypeerror").hide();
			}
		});
		
		
		$(".password").keyup(function(){
			if($(this).val()==""){
			    $("#passerror").show();
			}
			else{
				$("#passerror").hide();
			}
		});
		
	});
</script>

 
 
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">    
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   
    <script type="text/javascript">  
  $(document).ready(function() {  
  //alert("ghdsg");
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