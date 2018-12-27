<script>
function DelStatus(id){
	
		
			var r=confirm("Are you sure want to delete?");
					if (r==true)
						{
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>order/del_order', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					
							window.location = "<?php  echo base_url(); ?>pages/expiry_closed";
						
                alert("Order Deleted Successfully!!!");  
              }
          });
						}

       
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
    border: 1px solid #522276;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 8px !important;
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
	border:1px solid #dbd0e1 !important;
    /*background-color: white;*/
}
thead {
			border-bottom: 1px solid #eeeeee;
			border: 1px solid #eeeeee;
			/*color: #303f9f;*/
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
body{    background-color: #fff;}
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
</style>
<section id="content">

        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Chargeable List</h2>

            <a href="<?php  echo base_url(); ?>pages/add_order"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Sales" style="position: relative;float: right;bottom: 27px;right: 22px;"></i></a>
           <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
							<th class="hidden">ID</th>
							<!--<th>Customer ID</th>-->
							<th>S.No</th>
                            <th>Customer Name</th>
                           <!--<th>Branch</th>-->
                            <!--<th>Type Of Customer</th>-->                        
                            <th>Model</th>
							<th>Serial No.</td>
							 <th>Purchase Date</th>
                            <th>Warranty Date</th>
                            <th>AMC Date</th>
							<th>Location</th>
							<th style="width: 8% !important;">Action</th>
							
                        </tr>
                    </thead>
                 
                 
                 
                    <tbody>
						<?php $i=1; foreach($expiry_closed As $key){?>
                        <tr>
						<td class="hidden"><?php echo $key->id;?></td>
						<!--<td><?php echo $key->customer_id; ?></td>-->
						<td><?php echo $i; ?></td>
                            <td><?php echo $key->company_name; ?></td>
                            <td><?php echo $key->model; ?></td>
							<td><?php echo $key->serial_no;?></td>
                            <td><?php echo $key->purchase_date; ?></td>
							<td><?php if($key->warranty_date!=""){echo $key->warranty_date;}elseif($key->prev_main!=""){echo $key->prev_main;}//$key->warranty_date; ?></td>
							
							<td><?php if($key->amc_type!=""){echo $key->amc_end_date;} ?></td>
							
							 <td><?php echo $key->service_loc; ?></td>
                             <td><a href="<?php echo base_url(); ?>order/update_order/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a> 							 
                          	
								<a href="<?php echo base_url(); ?>order/view_order/<?php echo $key->id; ?>" title="View" style="padding-right:10px;" ><i class="fa fa-eye fa-2x"></i></a>
								<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>
								</td>
					
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
	 <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>-->  
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>