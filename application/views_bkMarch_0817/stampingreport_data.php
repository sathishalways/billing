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
                            <th>Request ID</th>
                            <th>Customer Name</th>
                            <th>Customer Mobile</th>
                            <th>Customer landline</th>
                            <th>City</th>
							<th>State</th>							
							<th>Conveyance Charge</th>
							<th>Agent Charge</th>
							<th>Cmr Paid</th>
												
                         
                        </tr>
						
						
						
				
                    </thead>
               
				
                
                    <tbody>
					<?php if($report)
					{
					
						$count = count($report);
						
						
						
						
					foreach($report as $row)
					{
						$h+=$row->agn_charge;
						
						?>
						
					
                        <tr >
                            <td><?php echo $row->req_id;?></td>
                            <td><?php echo $row->customer_name;?></td>
                            <td><?php echo $row->mobile;?></td>
                            <td><?php echo $row->land_ln;?></td>
                            <td><?php echo $row->city;?></td>
                            <td><?php echo $row->state;?></td>
                            <td><?php echo $row->conveyance;?></td>
							 <td><?php echo $row->agn_charge;?></td>
							<td><?php echo $row->cmr_paid;?></td>
							
                        </tr>
		
					
					<?php } } else
					{
						echo "<h4 align='center'>No Data Available</h4>";
					}
					?>
					
						
                    </tbody>
					<tbody>
					<tr style="visibility:hidden;"><td style="border:none;" ></td></tr>
						<tr>
						<td colspan="7" style="border:none !important;margin-top:15px;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Agent Charge :  <?php echo $h;?></div></td>                           
							
							
							
							
                        </tr>
			
					<tr>
						<td colspan="7" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Stamping :<?php echo $count;?></div></td>                           
							
							
							
							
                        </tr>
					<tbody>	
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