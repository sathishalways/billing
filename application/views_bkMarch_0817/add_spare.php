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
background-color: white;
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
<script>
function Updatedefault(id)
	{
		
		if(document.getElementById('dashboard_show'+id).checked) {
			
			var dashboard_show = '1';
			//alert(tax_default);
		} else {
			var dashboard_show = '0';
			//alert(tax_default);
		}
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Spare/update_important', 
         data: {'id' : id, 'dashboard_show' : dashboard_show},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ //alert(data);
				alert("Spare Selected");
              }
          });

        });
		
	}
</script>



<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Spare List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addspare.png" title="Add Spare" style="width:24px;height:24px;">Add Spare</button>-->
          <i class="fa fa-plus-square" aria-hidden="true" title="Add New Spare" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i>
           <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                   <table id="data-table-simple"  class="responsive-table display" cellspacing="0" style="margin-top:2%;">
                    <thead>
                        <tr>
                            <td>Spare Name</td>
							<td>Part No.</td>
							  <td>Sales Price</td>
							  <td>Purchase Price</td>
							  <td>Category-SubCategory-Brand-Model</td>
							  <td>Effective Date</td>
							  <td>Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody><?php foreach($sparelist1 as $key1){?>
                        <tr>
                            <td><input type="checkbox" name="dashboard_show" id="dashboard_show<?php echo $key1->id; ?>" onclick="Updatedefault('<?php echo $key1->id; ?>')" <?php if($key1->dashboard_show){?> checked="checked" <?php }?>> <?php echo $key1->spare_name; ?></td>
					<td style="text-align:right;"><?php echo $key1->sales_price; ?></td>							 
							 <td style="text-align:right;"><?php echo $key1->sales_price; ?></td>
							  <td style="text-align:right;"><?php echo $key1->purchase_price; ?></td>
							    <td>
								<ul class="quantity">
									<?php foreach($sparelist as $key){
										if($key->spare_id==$key1->id){
									?>
										<li><?php echo $key->product_category.'-'.$key->subcat_name.'-'.$key->brand_name.'-'.$key->model; ?></li>
									<?php } } ?>
								</ul>
								</td>
								<td style="text-align:right;"><?php echo $key1->effective_date; ?></td>
								<td style="text-align:center;"><a href="<?php echo base_url(); ?>Spare/update_spare/<?php echo $key1->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
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