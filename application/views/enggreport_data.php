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
	border:1px solid #522276;
}
thead {
    border-bottom: 1px solid #d0d0d0;
    border: 1px solid #522276;
    color: #522276;
	font-weight:bold;
	font-size:12px;
}
table{
	width:98%;
	margin-left:15px;
}
</style>
<div class="pull-right" style="margin-right:145px;margin-top:9px;">
<img src="<?php echo base_url()  ?>assets/images/x1.png" style="height:35px;float:left;"  onclick="tableToExcel('example', 'W3C Example Table')">
<img src="<?php echo base_url()  ?>assets/images/p1.png" style="margin-left:8px;height:35px;" onClick="printDiv('table-datatables')">
</div>

	
	  <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
					<div class="col-md-4">
						<h2>Spare to Engineer Report</h2>
					</div>
                  <table id="example" class="responsive-table display" cellspacing="0" >
                    <thead>
                        <tr>
							<td>S.No.</td>
                            <td>Request ID</td>
                            <td>Customer Name</td>
                            <td>Engineer Name</td>
                            <td>Spare Name</td>
                            <td>Qty Out with Engineer</td>
                            <td>Qty In with Engineer</td>
                           <td>Remarks</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php if($name)
					{$i=1;
					foreach($name as $row)
					{
					
						?>
					
                        <tr>
							<td><?php  echo $i++; ?></td>
                            <td><?php  echo $row->request_id;?></td>
                            <td><?php echo $row->customer_name;?></td>
                            <td><?php echo $row->emp_name;?></td>
                            <td><?php echo $row->spare_name;?></td>
                            <td><?php if($row->qty_out !=0){ echo $row->qty_out;}?></td>
                            <td><?php if($row->qty_in !=0){ echo $row->qty_in;}?></td>
                            <td><?php echo $row->reason;?></td>
                           
							
                        </tr>
					
					<?php  }}
					
					 else
					{?>
						<tr><td colspan="7"><?php echo "<h4 align='center'>No Data Available</h4>"; ?></td></tr>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>