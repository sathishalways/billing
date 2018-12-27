<style>
.ui-state-default {
    background: #fff !important; 
    border: 3px solid #fff !important;
    color: #303f9f !important;
    font-size: 12px;
   border-bottom:1px solid #000;
	}
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border-bottom: 1px solid #111;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 0px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #eee !important;
}
td {
    text-align: left;
font-size: 12px; 
 padding: 0px;
}
th {
padding: 0px;
    text-align: center;
    font-size: 12px;
    background-color: white;
}
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
	background-color:#fff;
	
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
input[type=text]{
    background-color: transparent;
    border:none;
    border-radius: 7;
    width: 55% !important;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
input[type=search]{
    background-color: transparent;
    border: 1px solid #eee;
    border-radius: 7;
    width: 55%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
body{    background-color: #fff;}
</style>


<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		acc_name = $("#acc_name_"+id).val();
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>accessories/update_accessories', 
         data: {'id' : id, 'acc_name' : acc_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Accessories updated");  
              }
          });

        });
}

function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>customer/del_cust_type', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/cust_type_list";
							alert("Customer Type deleted");  
						}
                
              }
          });

        });
}


function InactiveStatus(id){
	//alert(id);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Users/update_status', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("User made Inactive"); 
				window.location = "<?php  echo base_url(); ?>pages/user_cate_list";	
              }
          });

        });
}

function activeStatus(id){
	//alert(id);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Users/update_status1', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("User made Active"); 
				window.location = "<?php  echo base_url(); ?>pages/user_cate_list";	
              }
          });

        });
}
</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Users List</h2> 

          <i class="fa fa-plus-square" aria-hidden="true" title="Add New User" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i> 
           <hr>
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple"  class="responsive-table display">
                    <thead>
                        <tr>
							   <td style="text-align:center;font-size:13px;color:##303f9f;">Name</td>
                            <td style="text-align:center;font-size:13px;color:##303f9f;">UserName</td>
							   <td style="text-align:center;font-size:13px;color:##303f9f;">User Type</td>
						      <td style="text-align:center;font-size:13px;color:##303f9f;">User Access</td>
							   <td style="text-align:center;font-size:13px;color:##303f9f;">Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
						<?php foreach($get_users As $user_key){
								/* if(isset($user_key->categories_assigned)){
									 $categories_assigned = explode(",",$user_key->categories_assigned);
								} */
							?>
                        <tr>
							   <td><?php echo $user_key->name; ?></td>								
                            <td><?php echo $user_key->user_name; ?></td>
                               <td><?php if(isset($user_key->user_type) && $user_key->user_type=='1'){echo "Administrator"; } if(isset($user_key->user_type) && $user_key->user_type=='2'){echo "Service Co-ordinator"; }if(isset($user_key->user_type) && $user_key->user_type=='3'){echo "Accounts"; } if(isset($user_key->user_type) && $user_key->user_type=='4'){echo "Spares"; } if(isset($user_key->user_type) && $user_key->user_type=='5'){echo "Sales"; }if(isset($user_key->user_type) && $user_key->user_type=='6'){echo "Stamping"; }if(isset($user_key->user_type) && $user_key->user_type=='7'){echo "Engineer"; }?></td>
					        <td><?php if($user_key->user_access=="stamping_user"){ echo "Stamping";} if($user_key->user_access=="nonstamping_user"){ echo "Non - Stamping";} ?></td>
									  
							<td class="options-width" style="text-align:center;">
					
						<a href="#" style="padding-right:10px;" onclick='brinfo(<?php echo $user_key->id; ?>)' ><i class="fa fa-pencil-square-o"></i></a>
					
					<?php if($user_key->status!='1') { ?> <a href="#" onclick="InactiveStatus('<?php echo $user_key->id; ?>')" >InActive</a><?php } ?><?php if($user_key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $user_key->id; ?>')" >Active</a><?php } ?>
						
					</td>
					
                        </tr>
						<?php } ?>     
                      
                    </tbody>
                  </table>
                </div>
				

				
				
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
      


           
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	 
	 
	  <!-- Add jQuery library -->
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	
	
<script>
var $= jQuery.noConflict();
function brinfo(id){
		$.fancybox.open({
					href : '<?php  echo base_url(); ?>Users/edit_user_cate/'+id,
					type : 'iframe',
					padding : 5,
					afterClose: function () { // USE THIS IT IS YOUR ANSWER THE KEY WORD IS "afterClose"
						parent.location.reload(true);
					}
				});
}

</script>
</body>

</html>