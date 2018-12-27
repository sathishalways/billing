<script>
function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>order/del_order', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/order_list";
						}
                alert("Order deleted");  
              }
          });

        });
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
    /*background-color: white;*/
}
thead {
			border-bottom: 1px solid #eeeeee;
			border: 1px solid #eeeeee;
			color: #303f9f;
			background:#6c477d;
			color:#fff;
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
section h2{
			color:#6C217E;
		}
</style>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>AMC List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addsale.png" style="width:24px;height:24px;">Add Sales</button>-->
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
						<th>ID</th>
                            <th>Customer Name</th>
								<th>Branch</th>
                            <th>Type Of Customer</th>                           
                            <th>Products</th>
							 <th>Purchase Date</th>
                            <th>AMC Date</th>
                            <th>Machine status</th>
							<th>Location</th>
							<th>Action</th>
                        </tr>
                    </thead>
                 
                
                      <tbody><?php foreach($amclist1 as $key1){?>
                        <tr>
						<td><?php echo $key1->id; ?></td>
                            <td><?php echo $key1->company_name; ?>
							<?php foreach($amclist as $key){
								   if($key->order_id==$key1->id && $key->prenos!='0'){
								?>
							<!--<p class="my-element">PM : <?php echo $key->prenos_cnt;?> of <?php echo $key->prenos;?> </p>-->
							<?php } } ?>
							</td>
							<td><?php echo $key1->branch_name; ?></td>
                            <td><?php echo $key1->type; ?></td> 

						
							 
                            <td style="text-align:left;">
							<ul class="quantity1">
							<?php foreach($amclist as $key){
									if($key->order_id==$key1->id){
								?>
								<li><?php echo $key->product_category.'-'.$key->subcat_name.'-'.$key->brand_name.'-'.$key->model; ?></li>
								<?php } } ?>
								
								</ul>
							</td>
							
							<td style="text-align:right;">
							<ul class="quantity">
							<?php foreach($amclist as $key){
								if($key->order_id==$key1->id){
								?>
								<li><?php if(isset($key->purchase_date)){ 
										$pur_date = $key->purchase_date; 
										echo date("d-m-Y", strtotime($pur_date));
									} ?></li>
							<?php } } ?>
								
								</ul>
							
							</td>
                            
							
							<td style="text-align:right;">
								<ul class="quantity">
								<?php foreach($amclist as $key){
									if($key->order_id==$key1->id){
									?>
								<li><?php echo date("d-m-Y", strtotime($key->amc_end_date));?></li>
								<?php } } ?>
								
								</ul>
							
							</td>
							
							
							
							<td style="text-align:left;">
								<ul class="quantity">
								<?php foreach($amclist as $key){
									if($key->order_id==$key1->id){
									?>
								<li><?php if($key->amc_type!="") {
											echo $key->amc_type;
										  }?></li>
								<?php } } ?>
								
								</ul>
							
							</td>
                            
							  <td><ul class="quantity"  style="text-align:left;">
								<?php foreach($amclist as $key){ 
									if($key->order_id==$key1->id){
								?>
								<li><?php echo $key->service_loc; ?></li>
									<?php } } ?>
								
								</ul></td>
							 
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>order/update_order/<?php echo $key1->id; ?>" title="Edit"  style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
					
					<a href="<?php echo base_url(); ?>order/view_order/<?php echo $key1->id; ?>" title="View" style="padding-right:10px;" ><i class="fa fa-eye fa-2x"></i></a>
					<!--<a href="#" ><i onclick="DelStatus('<?php echo $key1->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>-->
					
					</td>
                        </tr><?php } ?>
                       
                      
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