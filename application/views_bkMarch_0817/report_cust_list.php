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
</style>
<?php $profit=0;
						$stot=0;
						$net=0;
						$count=0;
						$cmr=0;
						$pending=0;
						$totcharge=0;
						$servicecharge=0;
						?>
<div class="pull-right" style="margin-right:145px;margin-top:9px;">
<img src="<?php echo base_url()?>assets/images/x1.png" style="height:35px;float:left;"  onclick="tableToExcel('example', 'W3C Example Table')">
<img src="<?php echo base_url()?>assets/images/p1.png" style="margin-left:8px;height:35px;" onClick="printDiv('table-datatables')">
</div>


	  <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="example" class="responsive-table display" cellspacing="0" >
                    <thead>
                        <tr>
							<td>Date</td>
                            <td>RequestID</td>
                            <td>CustomerName</td>
                            <td>Address</td>
                            <td>EngineerName</td>
                            <td>Model</td>
                            <td>Brand</td>                           
                            <td>ServiceCategory</td>
                            <td>Problem</td>
                            <td>Zone</td>
                            <td>Mobile</td>
                            <td>Status</td>
                            <td>Site</td>   
							<td>SpareCharge</td>	
                            <td>ServiceCharge</td>	
							<td>TotalCharge</td>
							<td>Discounts</td>
							<td>Cmr_Paid</td>								
							<td>PendingAmount</td>												
                            <td>Notes</td>
                            <td>emp_pts</td>
							
                         
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php if($report)
					{
						
						$count = count($report);
					foreach($report as $row)
					{
						$profit=$row->spare_tax+$row->spare_tot;
						//$tax+=$row->spare_tax;
						$stot+=$profit;
						//$net=$tax+$stot;
						$cmr+=$row->cmr_paid;
						$pending+=$row->pending_amt;
						$totcharge+=$row->total_amt;
						$servicecharge+=$row->labourcharge;
						
						?>
					
                        <tr>
							<td><?php echo $row->request_date;?></td>
                            <td><?php echo $row->request_id;?></td>
                            <td><?php echo $row->customer_name;?></td>
                            <td><?php echo $row->address1;?></td>
                            <td><?php echo $row->emp_name;?></td>
                            <td><?php echo $row->model;?></td>                           
                            <td><?php echo $row->brand_name;?></td>                           
                            <td><?php echo $row->service_category;?></td>
                            <td><?php echo $row->problem;?></td>
                            <td><?php echo $row->service_loc;?></td>
                            <td><?php echo $row->mobile;?></td>
                            <td><?php echo $row->status;?></td>
                            <td><?php echo $row->site;?></td>
							<td><?php echo $profit;?></td>
                            <td><?php echo $row->labourcharge;?></td>
							<td><?php echo $row->total_amt;?></td>
							<td><?php echo $row->disc_amt;?></td>
							<td><?php echo $row->cmr_paid;?></td>
							<td><?php echo $row->pending_amt;?></td>
                            <td><?php echo $row->notes;?></td>
                            <td><?php echo $row->emp_pts;?></td>
                           
							
                        </tr>
					
					<?php } }
					
					 else
					{
						echo "<h4 align='center'>No Data Available</h4>";
					}
					?>
                    </tbody>
					<?php if(!empty($report))
					{
						?>
						<tbody>
						
						<tr style="visibility:hidden;"><td style="border:none;" ></td></tr>
						<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Service Received :<?php echo $count;?></div></td>                           
							
							
							
							
                        </tr>
					
						<tr>
						<td colspan="7" style="border:none !important;margin-top:15px;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Spare Charge :  <?php echo $stot;?></div></td>                           
							
							
							
							
                        </tr>
						
						<tr>
						<td colspan="7" style="border:none !important;margin-top:15px;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Service Charge :  <?php echo $servicecharge;?></div></td>                           
							
							
							
							
                        </tr>
						
						<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Charges :<?php echo $totcharge;?></div></td>                           
							
							
							
                        </tr>
						
						<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total customer Paid :<?php echo $cmr;?></div></td>                           
							
							
							
							
                        </tr>
						<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total OutStanding Amount :<?php echo $pending;?></div></td>                           
							
							
							
                        </tr>
						
					<tbody>
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