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
					
							window.location = "<?php  echo base_url(); ?>pages/order_list";
						
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
	font-size:12px;
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
	border: 1px solid #dbd0e1 !important;
    /*background-color: white;*/
}
thead {
			border-bottom: 1px solid #ccc;
			border: 1px solid #ccc;
			color: #fff;
			background:#6c477d;
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
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
hr {
    margin-top: 0px !important;
}
a{
	color: #522276 !important;
}
a:hover{
	color: #522276;
}
a:focus{
	color: #522276;
}
a:active{
	color: #522276;
}

</style>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Warranty Lists</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addsale.png" title="Add Sales" style="width:24px;height:24px;">Add Sales</button>-->
       
		  <a href="<?php  echo base_url(); ?>pages/add_order" style="position: relative; bottom: 27px;left: 88%;"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Sales"></i></a>
            <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
							<th class="hidden">id</th>
							<!--<th style="width:9% !important">Customer ID</th>-->
							<th>S.No</th>
                            <th style="width:16% !important">Customer Name</th>
							<th>Branch</th>
                            <th style="width:11% !important">Type Of Customer</th>                           
                            <th style="width:16% !important">Products</th>
							<th style="width:3% !important">Serial No.</th>
							 <th style="width:7% !important">Sale Date</th>
                            <th style="width:9% !important">Warranty Date</th>
                            <th style="width:9% !important">Machine status</th>
							<th>Location</th>
							<th>Action</th>
                        </tr>
                    </thead>
                 
                
                      <tbody><?php $i=1; foreach($orderlist1 as $key1){?>
                        <tr>
						<td class="hidden"><?php echo $key1->id; ?></td>
							<!--<td><?php echo $key1->customer_id; ?></td>-->
							<td><?php  echo $i;?> </td>
                            <td style="width:223px; !important"><?php echo $key1->company_name; ?></td>
							<td style="width:65px;"><?php echo $key1->branch_name; ?></td>
                            <td><?php echo $key1->type; ?></td> 

						
							 
                            <td style="width:16% !important">
							<ul class="quantity1">
							<?php foreach($orderlist as $key){
								if($key->order_id==$key1->id){
								?>
								<li><?php echo $key->model; ?></li>
								<?php } } ?>
								
								</ul>
							</td>
							<td style="width:3% !important"><?php foreach($orderlist as $key){
								if($key->order_id==$key1->id){
								?><?php echo $key->serial_no; ?><?php } } ?></td>
							
							<td style="text-align:left;">
							<ul class="quantity">
							<?php foreach($orderlist as $key){
								if($key->order_id==$key1->id){
								?>
								<li><?php echo date("d-m-Y", strtotime($key->purchase_date)); ?></li>
							<?php } } ?>
								
								</ul>
							
							</td>
                            <td style="width:120px;text-align:left;" >
								<ul class="quantity">
								<?php foreach($orderlist as $key){
									if($key->order_id==$key1->id){
									?>
								<li><?php if($key->warranty_date!=""){echo date("d-m-Y", strtotime($key->warranty_date));} ?></li>
								<?php } } ?>
								
								</ul>
							
							</td>
							
							<td style="width:143px;">
								<ul class="quantity">
								<?php foreach($orderlist as $key){
									if($key->order_id==$key1->id){
									?>
								<li><?php if($key->warranty_date!=""){
											echo "Warranty";
										  }else{
											  echo "Warranty";
										  }?></li>
								<?php } } ?>
								
								</ul>
							
							</td>
							
                            
							  <td style="width:106px;"><ul class="quantity">
								<?php foreach($orderlist as $key){ 
									if($key->order_id==$key1->id){
								?>
								<li><?php echo $key->service_loc; ?></li>
									<?php } } ?>
								
								</ul></td>
							 
							<td class="options-width">
					
					
					<a href="<?php echo base_url(); ?>order/update_order/<?php echo $key1->id; ?>/warranty" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
					<a href="#" ><i onclick="DelStatus('<?php echo $key1->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>
					
					</td>
                        </tr><?php $i++; } ?>
                       
                      
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
  
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


        
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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   -->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->


     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/piklor.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/handlers.js"></script>	
</body>

</html>