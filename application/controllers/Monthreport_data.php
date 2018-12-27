     
	 <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="data-table-simple" cellspacing="0" style="width:50%; margin-top:2%;">
				 
                    <thead>
                        <tr >
                            <td>Request ID</td>
                            <td>stamping Charge</td>
                            <td>Penalty Charge</td>
                            <td>Agent_Charge</td>
                            <td>Conveyance_Charge</td>
							<td>Pending_Amount</td>							
							
												
                         
                        </tr>
						
						
						
				
                    </thead>
               
				
                
                    <tbody>
					<?php if(!empty($month))
					{
					foreach($month as $row)
					{
						
						?>
						
					
                        <tr >
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->stamping_charge;?></td>
                            <td><?php echo $row->penalty;?></td>
                            <td><?php echo $row->agn_charge;?></td>
                            <td><?php echo $row->conveyance;?></td>
                            <td><?php echo $row->pending_amt;?></td>
                           
							
                        </tr>
			
				

					
					
					
					
					
					
					
						
                    </tbody>
					
						<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total :  <?php echo $row->total;?></div></td>                           
							
							
							
							
                        </tr>
			
					<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Stamping :<?php echo $row->process;?></div></td>                           
							
							
							
							
                        </tr>
						<?php } }?>
                  </table>
				 
                </div>
              </div>
            </div> 
			  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url()  ?>assets/js/materialize.js"></script>
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