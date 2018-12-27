      <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="data-table-simple"  class="sample"  cellspacing="0" style="width:50%; margin-top:2%;">
                    <thead>
                        <tr>
                            <td>Spare_Name</td>
                            <td>Stock In Hand</td>
                            <td>Purchase Price</td>
                            <td>Engineer Name</td>
							<td>Qty</td>
							
                           
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php if(!empty($sparereport))
					{
					foreach($sparereport as $row)
					{?>
					
                        <tr>
                            
                            <td><?php echo $row->spare_name;?></td>
                            <td></td>
                            <td><?php echo $row->purchase_price;?></td>
                            <td><?php echo $row->emp_name;?></td>
                            <td></td>
                           
                           
							
                        </tr>
					
					<?php } }?>
                    </tbody>
                  </table>
				 
                </div>
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