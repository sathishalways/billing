<style>
.fancybox-inner{
overflow: auto;
    width: 500px !important;
    height: 353px !important;
}
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #dbd0e1 !important;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
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
    /*background-color: white;*/
}
thead {
        border-bottom: 1px solid #eeeeee;
        border: 1px solid #eeeeee;
        background:#6c477d;
        color:#fff;
        }
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
#data-table-simple_length {
    display: block;
}

/* For info in correct position */

.select-wrapper {
    position: relative;
    margin: -5px 6px;
}
#data-table-simple_length > label {
    display: inline-flex;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    padding-right: 0px;
}

/* Ends Here */

input[type=search]{
    background-color: transparent;
    border: 1px solid #522276;
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
a{
	color:#522276;
}
a:hover{
	color:#522276;
}
a:active{
	color:#522276;
}
a:focus{
	color:#522276;
}
body{    background-color: #fff;}
</style>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Calls Completed</h2>
<hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						<th>Request ID</th>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Service Type</th>
                            <th>Requested Date</th>
							<th>Assign To</th>
                            <th>Location</th>
							<th>Action</th>
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
					<?php foreach($ready_delivery_list as $key){?> 
                        <tr>
						 <td><a href="<?php echo base_url(); ?>ready_delivery/ready_delivery_status/<?php echo $key->id; ?>"><?php echo $key->request_id; ?></a></td>
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
										if($key1->request_id==$key->id){ echo $key1->service_loc; } } ?></td>
							<td class="options-width">
								<?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){?>
											<a style="padding-left:15px;" onclick="UpdateStatus('<?php echo $key->id; ?>')"><i class="fa fa-print fa-2x"></i></a>
								<?php }} ?>
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
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>--> 
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
	 
	 
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
function UpdateStatus(id){ 
		var sitename = $("#sitename_"+id).val();
		
		$.fancybox.open({
					href : '<?php  echo base_url(); ?>delivery/check_invoice_type/'+id+'/'+sitename,
					type : 'iframe',
					padding : 5
				});
}

</script>

</body>

</html>