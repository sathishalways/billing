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
<style>
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
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
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
<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Quote In-progress</h2>

          <hr>
            
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
						<?php foreach($combine_status_list as $combine_statuskey){ 
								$statuslists[] = $combine_statuskey->status;
						}
						$i=0;
						foreach($service_req_list as $key){?>
                        <tr>
						 <td><a href="<?php echo base_url(); ?>quotereview/service_status/<?php echo $key->id; ?>"><?php echo $key->request_id; ?></a></td>
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
							
					
                        </tr>
                         <?php $i++; } ?>                    
                                          
                        
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