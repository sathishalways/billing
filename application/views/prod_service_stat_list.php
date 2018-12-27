<style>
table.dataTable tbody td{
	padding: 8px 10px !important;
}
input
{
	border-style: none !important;
	height: 2rem !important;
}
#data-table-simple_filter
{
	display:none;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}
</style>
 
<script>
$(document).ready(function(){   //alert("vijayy");

    $("#send").click(function()
    { 
	id = $("#status_id").val();  
	status_name = $("#status_name").val();
	//alert("id: "+id+ "name: "+status_name);
     $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Prodservicestat/update_prod_service_status', 
         data: {'id' : id, 'status_name' : status_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Product Service Status updated");  //as a debugging message.
              }
          });// you have missed this bracket
     return false;
 });
 });
 
 
 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		status_na = $("#status_name_"+id).val();
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Prodservicestat/update_prod_service_status', 
         data: {'id' : id, 'status_name' : status_na},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Product Service Status updated");  
              }
          });

        });
}

function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Prodservicestat/del_prod_service_status', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/prod_service_stat_list";
						}
                alert("Product Service Status deleted");  
              }
          });

        });
}


</script>


<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header">Service Status List</h4>

          
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="data-table-simple"  cellspacing="0" style="width:50%; margin-top:2%;">
                    <thead>
                        <tr>
                            <td>Status Name</td>
                           <td>Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($list as $key){ ?>
                        <tr>
                            <td><input type="text" value="<?php echo $key->prod_service_status; ?>" class="" name="status_name" id="status_name_<?php echo $key->id; ?>"><input type="hidden" value="<?php echo $key->id; ?>" class="" name="status_id" id="status_id"></td>
                           
							<td class="options-width"><a onclick="UpdateStatus('<?php echo $key->id; ?>')" class="fa fa-floppy-o fa-2x" ></i></a>
							<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>
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
</body>

</html>