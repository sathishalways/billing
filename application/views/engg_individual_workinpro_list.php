<script>
$(document).ready(function(){
   $('[id^="service_status_"]').change(function(){//alert("hiisss");
   var id = $(this).val();
   //alert(id);
   var arr = id.split(',');
   var statusid = arr['0'];
   var reqid = arr['1'];
   var data_String;
    data_String = 'statusid='+statusid+'&reqid='+reqid;
	
    $.post('<?php  echo base_url(); ?>service/update_service_status',data_String,function(data){ 
          //var data= jQuery.parseJSON(data);
		  alert("Service status changed");
           //$('#actaddress').val(data.Address1),
       });
   });
 });
</script>
<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header">Engineer's Work inProgress List</h4>

          
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						 <th>Request Id</th> 
						
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Machine Status</th>
							      <th>Requested Date</th>                     
							  <th>Assign To</th>
                            <th>Site</th>
                            <th>Location</th>
							<th>Status</th>
                        </tr>
                    </thead>
                 
                  <!--  <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>-->
                 
                    <tbody>
						<?php 
						foreach($engg_workinpro_list as $key){?>
                        <tr>
						 <td><a href="<?php echo base_url(); ?>service/update_service_req/<?php echo $key->id; ?>"><?php echo $key->request_id; ?></a></td>
                            <td><?php echo $key->customer_name; ?></td>
							     
								<td><?php foreach($engg_workinpro_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->model;} } ?></td>
							  
                        
							<td><?php foreach($engg_workinpro_list1 as $key1){
										if($key1->request_id==$key->id){
											echo $key1->machine_status; 
											
											 }  }?></td>	
						
							
                            <td><?php echo $key->request_date; ?></td>
							
							
							 <td><?php echo $key->emp_name; ?></td>
							
							 
                            <td><?php foreach($engg_workinpro_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->site; } } ?></td>
							 
							
                            <td><?php foreach($engg_workinpro_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->service_loc; } } ?></td>
							
							<td class="options-width">
								<select name="service_status[]" id="service_status_<?php echo $key->id; ?>">
									<option value="">---Select---</option>
									<?php foreach($status_list as $statuskey){
										  if($statuskey->id==$key->status){
											 // if(in_array($statuskey->id, $statuslists[$i])){
								    ?>
									<option selected="selected" value="<?php echo $statuskey->id.','.$key->id; ?>"><?php echo $statuskey->status; ?></option>
									<?php } else {?>
									<option value="<?php echo $statuskey->id.','.$key->id; ?>"><?php echo $statuskey->status; ?></option>
									<?php } } ?>

								</select>			
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