<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
<script>
function printDiv(divName) {
	
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
     <div class="pull-right" style="margin-right:145px;margin-top:9px;">
<img src="<?php echo base_url()  ?>assets/images/x1.png" style="height:35px;float:left;"  onclick="tableToExcel('export', 'W3C Example Table')">
<img src="<?php echo base_url()  ?>assets/images/p1.png" style="margin-left:8px;height:35px;" onClick="printDiv('table-datatables')">
</div>
<?php $h=0;
$count=0;
?>
<style>
table.display
{
	margin-top:15px;
}
thead {
    border-bottom: 1px solid #d0d0d0;
    border: 1px solid #522276;
    color: #522276;
}
table.display th, td {
    padding: 10px;
    border: 1px solid #522276;
}
table.dataTable tbody td{
	padding: 8px 10px !important;
}
input
{
	border-style: none !important;
	height: 2rem !important;
}
#data-table-simple_filter
{
	display:none;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}
table{
	width:98%;
	margin-left:15px;
}
</style>
	 <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
					<div class="col-md-4">
						<h2>Service Machines Report</h2>
					</div>
                  <table id="export" class="responsive-table display" cellspacing="0" >
				 
                    <thead>
                        <tr>
                         	<th>S.No</th>
							<th>Model</th>
							<th>Serial No</th>
							<th>Category</th>
							<th>Customer Name</th>
                            <th>Customer Type</th>
							<th>Mobile</th>
							<th>Zone</th>
							<th>State</th>
							<th>Purchase Date</th>
                            <th>Warranty End Date</th>
							<th>Machine Status</th>
                        </tr>
                    </thead>
               
				
                
                    <tbody>
					<?php if(!empty($get_sermachine_report))
					{
						$j=1;
						
					foreach($get_sermachine_report as $row)
					{
					//echo "<pre>";	print_r($row); exit;
						?>
					    <tr>
							
                            <td><?php echo $j;?></td>
							<td><?php echo $row->model;?></td>
							<td><?php echo $row->serial_no;?></td>
							<td><?php echo $row->product_category;?></td>
                            <td><?php echo $row->company_name;?></td>
							<td><?php echo $row->cust_type;?></td>
                            <td><?php echo $row->mobile;?></td>
							<td><?php echo $row->service_loc;?></td>
							<td><?php echo $row->state;?></td>
							<td><?php if($row->purchase_date!=""){echo date("d/m/Y", strtotime($row->purchase_date)); };?></td>
                            <td><?php if($row->warranty_date!=""){echo date("d/m/Y", strtotime($row->warranty_date)); };?></td>
							
							
							<td>
							<?php if($row->paid =="paid")
							{ 
								echo "Chargeable";
							}elseif($row->amc_start_date !='')
							{
								echo "AMC";
							}elseif($row->cmc_start_date !='')
							{ echo "CMC";
							}elseif($row->warranty_date !='')
							{echo "Warranty";
							}
							elseif($row->rent_type =="syndicate")
							{echo "Syndicate";
							}elseif($row->rent_type =="distributor")
							{echo "Distributor";
							}?>
							</td>
							
							
                        </tr>
		
					
					<?php $j++; } } else
					{ ?>
						<tr><td align="center" colspan="13"><?php echo "<h4 align='center'>No Data Available</h4>"; ?></td></tr>
					<?php }
					?>
					</tbody>
				
                  </table>
				 
                </div>
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
	<script>
	var $= jQuery.noConflict();
	</script>
	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>