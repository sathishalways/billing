<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header">Quote Review</h4>

          
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
							<th>Problem</th>							
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
						 <?php foreach($quote_review_req_list as $key){?>
                        <tr>
						
						 <td><a href="<?php echo base_url(); ?>quote_review_view/quote_review_display/<?php echo $key->id; ?>"><?php echo $key->request_id; ?></a></td>
                            <td><?php echo $key->customer_name; ?></td>
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->model;} } ?></td>
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){
											echo $key1->machine_status; 
											
											 }  }?></td>
							 
                            <td><?php echo $key->request_date; ?></td>
							
							  <td><?php foreach($service_req_listforEmp as $key2){
										if($key2->request_id==$key->id){ echo $key2->emp_name; } } ?></td>
										
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->site; } } ?></td>
										
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->service_loc; } } ?></td>
							 <td><?php foreach($service_req_listforProb as $servprobkey2){
										if($servprobkey2->request_id==$key->id){ echo $servprobkey2->prob_category; } } ?></td>
										
					
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