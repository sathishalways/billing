<script>
function UpdateStatus(id){
		  var idd = id.split('-');
		  var inc = idd['1'];
		  var reqid = idd['0'];
		 
		  var status_warran = $("#status_warran-"+inc).val();
		  window.open("<?php  echo base_url(); ?>service/view_claim/"+reqid+'/'+status_warran, '_blank');
		
}
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
</style>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>warranty claim List</h2>
  
		  <i class="fa fa-plus-square" aria-hidden="true" title="Add New Sales" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i>
            <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Request id</th>
							<th>Customer Name</th>
                            <th>Model</th>  
							<th>Warranty Mode</th>  							
                            <th>action</th>
							 
                        </tr>
                    </thead>
                      <tbody>
					  <?php $i=0; foreach($warranty_pending_claims as $war_key){?>
                        <tr>
                            <td><?php echo $war_key->request_id; ?></td>
							<td><?php echo $war_key->company_name; ?></td>
                            <td><?php echo $war_key->model; ?></td> 
							<td>
								<select name="status_warran" id="status_warran-<?php echo $i; ?>">
									<option value="credit">credit</option>
									<option value="replacement">replacement</option>
								</select>
							</td> 
							<td style="text-align:center;"><a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a></td>
                        </tr>
					  <?php $i++; }?>	
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
  
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


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


     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/piklor.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/handlers.js"></script>	
</body>

</html>