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
table.display th,td
{
	padding:10px;
	border:1px solid #ccc;
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
</style>
	 <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="export" class="responsive-table display" cellspacing="0" >
				 
                    <thead>
                        <tr >
                         <!--   <th>Date</th>
                            <th>Job No</th>
                            <th>Customer Name</th>
                            <th>Engineer Name</th>
                            <th>Spare Name</th>
							<th>Qty</th>							
							<th>Remarks</th>-->
							
							<th>Request Id</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Mobile</th>
                            <th>Service Charge</th>
                            <th>Spare Charge</th>
                           <!-- <th>Conveyance Charge</th>-->
                            <th>Site</th>
                            <th>Status</th>
							<!--<th>Engineer Name</th>-->
                            
							
							
							
												
                         
                        </tr>
						
						
						
				
                    </thead>
               
				
                
                    <tbody>
					<?php if($revenuereport)
					{
					
						
						$stot = 0;
						$ctot = 0;
						$resp = 0;
						
						
					foreach($revenuereport as $row)
					{
						
						$stot+=$row->labourcharge;
						$ctot+=$row->concharge;
						
						$total = $stot+$ctot;
						
						$profit=$row->spare_tax+$row->spare_tot;
						//$tax+=$row->spare_tax;
						$resp+=$profit;
						
						?>
						
					
                        <tr>
							
                            <td><?php echo $row->request_id;?></td>
                            <td><?php echo $row->customer_name;?></td>
                            <td><?php echo $row->address;?></td>
                           <td><?php echo $row->mobile;?></td>
                            <td><?php echo $row->labourcharge;?></td>
                            <td><?php echo $profit;?></td>
                          <!--  <td><?php echo $row->concharge;?></td>-->
                            <td><?php echo $row->site;?></td>
                            <td><?php echo $row->status;?></td>
							
							
                        </tr>
		
					
					<?php } } else
					{
						echo "<h4 align='center'>No Data Available</h4>";
					}
					?>
					
						
                    </tbody>
					
					<?php if(!empty($revenuereport))
					{
						?>
					<tbody>
						
						<tr style="visibility:hidden;"><td style="border:none;" ></td></tr>
						
						<tr>
						<td colspan="5" style="border:none !important;"></td>
                           
							
							
                       <td colspan="2"><div class="pull-right">Total Spare Charge :<?php echo $resp;?></div></td>                           
							
							
							
							
							
                        </tr>
						<tr>
						<td colspan="5" style="border:none !important;"></td>
                           
							
							
                       <td colspan="2"><div class="pull-right">Total Service Charge :<?php echo $stot;?></div></td>                           
							
							
							
							
							
                        </tr>
						
						<tr>
						<td colspan="5" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Conveyance Charges :<?php echo $ctot;?></div></td>                           
							
							
							
                        </tr>
						
						<tr>
						<td colspan="5" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Charges :<?php echo $total;?></div></td>                           
							
							
							
                        </tr>
						</tbody>
					<?php } ?>
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