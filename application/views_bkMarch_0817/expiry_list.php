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
</style>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Expiring Product List</h2>
			<hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
							<th>Branch</th>	
                            <th>Product Name</th>
                            <th>Model</th>
							 <th>Purchase Date</th>
                            <th>Warranty Date</th>
							<th>Preventive Maintenance End Date</th>
							<th>Location</th>
							<th>Status</th>
							<!--<th>Action</th>-->
							<!--<th>Action</th>-->
                        </tr>
                    </thead>
                 
                 
                
                    <tbody>
					<?php
						error_reporting(0);
						/* $servername = "localhost";
						$username = "syndinzg_service";
						$password = "synservice123";
						$dbname = "syndinzg_service"; */
						
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "srs";
						
						/*  $servername = "localhost";
						$username = "sellejyp_servmax";
						$password = "service@123";
						$dbname = "sellejyp_service_maxsell"; */
						
						
						$con = mysql_connect($servername,$username,$password);
						mysql_select_db($dbname,$con);
					    $date1 = date('Y-m-d');
						//echo "SELECT unix_timestamp(warranty_date) from order_details where id='52'";
						
						$qry = mysql_query("SELECT ord.id,cust.customer_name,cust.company_name	,pro.product_name,pro.model, ordt.purchase_date,ordt.warranty_date,ordt.prev_main,ordt.amc_type,ser_loc.service_loc, csl.branch_name, csl.id As csl_id FROM `order_details` As ordt
						inner join orders As ord ON ord.id = ordt.order_id
						inner join customers As cust ON cust.id = ord.customer_id
						inner join customer_service_location As csl ON csl.id=ord.customer_service_loc_id	
						inner join products As pro ON pro.id = ordt.model_id
						inner join service_location As ser_loc ON ser_loc.id = ordt.service_loc_id
						WHERE (datediff(ordt.warranty_date, date(now())) <= 30 and datediff(ordt.warranty_date, date(now())) >= 0 and ordt.amc_end_date='' and ordt.paid='') or (datediff(ordt.prev_main, date(now())) <= 30 and datediff(ordt.prev_main, date(now())) >= 0 and ordt.amc_end_date='' and ordt.paid='') or (datediff(ordt.amc_end_date, date(now())) <= 30 and datediff(ordt.amc_end_date, date(now())) >= 0 and ordt.paid='')");
						while($res = mysql_fetch_array($qry))
						{ ?>
                        <tr>
                            <td><?php echo $res['company_name'];?><input type="hidden" name="order_id" id="order_id" value="<?php echo $res['id'];?>"></td>
								<td><?php echo $res['branch_name'];?></td>
                            <td><?php echo $res['product_name'];?></td>
                            <td><?php echo $res['model']; ?></td>							  
                            <td><?php if($res['purchase_date']!=""){echo date("d-m-Y", strtotime($res['purchase_date']));} ?></td>
							
							 <td><?php if($res['warranty_date']!=""){echo date("d-m-Y", strtotime($res['warranty_date']));} ?></td>
							 <td><?php if($res['prev_main']!=""){echo date("d-m-Y", strtotime($res['prev_main']));} ?></td>
							 <td><?php echo $res['service_loc'];?></td>            
                          	<td class="options-width">
								<select name="stats[]" id="stats_<?php echo $res['id']; ?>">
									<option value="">----Select-----</option>
									
									<?php //if($res['warranty_date']!=""){?>
									<!--<option <?php //if($res['amc_type']=='Out of Warranty'){?>selected="selected"<?php //}?> value="<?php //echo $res['id'].'- Out of Warranty'; ?>"><?php //echo "Out of Warranty"; ?></option>-->
									<?php //} ?> 
									
									<?php //if($res['prev_main']!=""){?>
									<!--<option <?php //if($res['amc_type']=='Out of Preventive Maintenance'){?>selected="selected"<?php //}?> value="<?php //echo $res['id'].'- Out of Preventive Maintenance'; ?>"><?php //echo "Out of Preventive Maintenance"; ?></option>-->
									<?php //} ?>
									
									<option <?php if($res['amc_type']=='Comprehensive'){?>selected="selected"<?php }?> value="<?php echo $res['id'].'-Comprehensive'; ?>"><?php echo "Comprehensive AMC"; ?></option>
									
									<option <?php if($res['amc_type']=='serviceonly'){?>selected="selected"<?php }?> value="<?php echo $res['id'].'-serviceonly'; ?>"><?php echo "Service Only"; ?></option>
									
									<option <?php if($res['amc_type']=='closed'){?>selected="selected"<?php }?> value="<?php echo $res['id'].'-Close'; ?>">Paid</option>
								</select>
							</td>
							<!--<td><a href="<?php  echo base_url(); ?>createpdf/pdf/<?php echo $res['id'];?>" target="_blank">AMC Quotation</a></td>-->
							<!--<td><a class="fancybox-manual-b" href="javascript:;" id="amcquote_<?php echo $res['id'].'-'.$res['csl_id'];?>">AMC Quotation</a></td>-->
					
					<!--<td class="options-width">
							<a href="#" style="padding-left:15px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					</td>-->
					
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
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>  --> 
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	 
	 
	
	
	<!-- Add jQuery library -->
	
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
$(document).ready(function() { 
	$(".fancybox-manual-b").click(function() { 
				//alert($("#order_id").val());
				var idd=$(this).closest(this).attr('id');
				var arr = idd.split('_');
				var orderid = arr['1'];
				//alert(orderid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>createpdf/pdf_view/'+orderid,
					type : 'iframe',
					padding : 5
				});
			});
			
});
</script>

<script>
$(document).ready(function(){
   $('[id^="stats_"]').change(function(){//alert("hii");
  
   var id = $(this).val();
   var arr = id.split('-');
   var orderid = arr['0'];
   var amc_type = arr['1'];
   
   if(amc_type=="Comprehensive" || amc_type=="serviceonly"){
	   $.fancybox.open({
					href : '<?php  echo base_url(); ?>order/update_amc_type/'+orderid+'/'+amc_type,
					type : 'iframe',
					padding : 5
				});
   }
				
   if(amc_type=="Close"){ 
	   var status = 'paid';
	   var data_String;
		data_String = 'id='+orderid+'&status='+status;
	
		$.post('<?php  echo base_url(); ?>order/update_stats',data_String,function(data){ 
          //var data= jQuery.parseJSON(data);
		  alert("Product Closed");
           //$('#actaddress').val(data.Address1),
       });
   }
   
  
   });
 });

</script>
	
</body>

</html>