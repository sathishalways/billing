<style>
.ui-state-default {
    background:#6c477d;
    color:#fff;
    border: 3px solid #fff !important;
    font-size: 12px;
   border-bottom:1px solid #000;
	}
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #dbd0e1;
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
}
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    background:#6c477d;
    color:#fff;
	font-weight:bold;
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

input[type=text]{
    background-color: transparent;
    border: 0px solid #522276;
    border-radius: 7;
    width: 55% !important;
    font-size: 12px;
    margin: 0 0 -2px 0;
    padding: 3px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
	height:17px;
}
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
a{
	color: #522276;
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
body{    background-color: #fff;}
</style>


<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		service_cat = $("#service_cat_name_"+id).val();
		service_charge = $("#service_charge_"+id).val();
		//alert(service_charge);
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Servicecategory/update_serv_category', 
         data: {'id' : id, 'service_category' : service_cat, 'service_charge' : service_charge},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Service Category updated");  
              }
          });

        });
}

function DelStatus(id){
	
		//$(function()
        //{
			var r=confirm("Are you sure want to delete");
					//alert(r);
					if (r==true)
						{
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Servicecategory/del_serv_category', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					
							window.location = "<?php  echo base_url(); ?>pages/service_cat_list";
						
                alert("Product Category deleted");  
              }
          });

       // });
		}
}
function DelStatus1(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>tax/del_tax', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/tax_list";
						}
                alert("Tax deleted");  
              }
          });

        });
}

</script>


<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Service Category List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/servicescat.png" title="Add Service Category" style="width:24px;">Add Service Category</button>-->
           <a href="<?php  echo base_url(); ?>pages/add_service_cat" style="position: relative; bottom: 27px;left: 88%;"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Service Category"></i></a>
           <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display">
                    <thead>
                        <tr>
							<th>S.No.</th>
                            <th style="text-align:center;font-size:13px;color:##303f9f;">Service Category Name</th>
                           <th style="text-align:center;font-size:13px;color:##303f9f;">Action</th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php $i=1;foreach($list as $key){ ?>
                        <tr>
						<td><?php echo $i;?></td>
                            <td><input type="text" value="<?php echo $key->service_category; ?>" class="" name="service_cat_name" id="service_cat_name_<?php echo $key->id; ?>" readonly></td>
								
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>Servicecategory/update_service_cat/<?php echo $key->id; ?>" style="padding-right:10px;"><i class="fa fa-pencil" aria-hidden="true"></i></a>
					<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>
					
					<!--<a href="#" style="padding-right:10px;" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->
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
</body>

</html>