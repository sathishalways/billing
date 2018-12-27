<script>
function InactiveStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Product/update_status_product', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("Product made Inactive"); 
				window.location = "<?php  echo base_url(); ?>pages/prod_list";	
              }
          });

        });
}

function activeStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Product/update_status_product1', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("Product made Active"); 
				window.location = "<?php  echo base_url(); ?>pages/prod_list";	
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
		  
		  
		    <h2>Product List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/proadd.png" style="width:24px;height:24px;">Add Product</button>-->
          <i class="fa fa-plus-square" aria-hidden="true" title="Add New Product" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i> 
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						   
                           
                            <th>Category</th>
							 <th>Subcategory</th>
							  <th>Brand</th>
                            <th>Model</th>
							<?php foreach($accessories_list as $acckey1){ ?>
                            <th><?php echo $acckey1->accessory; ?></th>
                          <?php } ?>
							<th>Action</th>
                        </tr>
                    </thead>
                 
                 
                 
                    <tbody>
                       <?php foreach($list as $key){
						     $addl = explode(",",$key->addlinfo);
							 //print_r($addl);exit;
					   ?>
                        <tr>
                            
                            <td><?php echo $key->category; ?></td>
							<td><?php echo $key->subcategory; ?></td>
							<td><?php echo $key->brand_name; ?></td>
                            <td><?php echo $key->model; ?></td>
							
                            
							
							<?php foreach($accessories_list as $acckey){ ?>
								<?php if (in_array($acckey->accessory, $addl)){ ?><td><i class="material-icons">done</i></td><?php } else{ ?><td></td><?php } ?>
							<?php } ?>
							
							   
							   
							<td class="options-width">
					
					
					<a href="<?php echo base_url(); ?>Product/update_product/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
					<?php if($key->status!='1') { ?><a href="#" onclick="InactiveStatus('<?php echo $key->id; ?>')">InActive</a><?php } ?><?php if($key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $key->id; ?>')">Active</a><?php } ?>
					
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