<script>
function InactiveStatus(id){
	
		//$(function()
        //{
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

       // });
}

function activeStatus(id){
	
		//$(function()
       // {
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

        //});
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
    border: 1px solid #dbd0e1 !important;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
	border: 1px solid #522276 !important;
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
}
thead {
    /*border-bottom: 1px solid #d0d0d0;*/
    border: 1px solid #522276;
	font-weight:bold;
	font-size:12px;
	background:#6c477d;
    color:#fff;
}
/*thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
}*/
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
 #data-table-simple_length{
	 display:block;
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
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 0px;
}
hr {
    margin-top: 0px;
}
a {
    color: #522276;
}
a:hover {
    color: #9678ab;
}
a:focus {
    color: #522276;
}
a:active {
    color: #522276;
}
</style>
 <section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Product List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/proadd.png" style="width:24px;height:24px;">Add Product</button>-->
          <a href="<?php  echo base_url(); ?>pages/add_prod" style="position: relative;
    bottom: 27px;left: 88%;"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Product"></i></a>
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						   
                           <th class="hidden">id</th>
						   <th>S.No.</th>
						   <th>Product Name</th>
                            <th>Category</th>
							 <th>Subcategory</th>
							 <th>Action</th>
                        </tr>
                    </thead>
                 
                 
                 
                    <tbody>
                       <?php $i=1;foreach($list as $key){
					   ?>
                        <tr>
                            <td class="hidden"><?php echo $key->id; ?></td>
							<td><?php echo $i; ?></td>
							<td><?php echo $key->model; ?></td>
                            <td><?php echo $key->category; ?></td>
							<td><?php echo $key->subcategory; ?></td>
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>Product/update_product/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
					</td>
                        </tr>
					 <?php $i++;} ?>
                      
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
 
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>  -->
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>