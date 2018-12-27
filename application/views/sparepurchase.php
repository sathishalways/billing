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
	padding:0px 5px;
	border:1px solid #522276;
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
thead {
		border-bottom: 1px solid #eeeeee;
		border: 1px solid #eeeeee;
		background:#6c477d;
		color:#fff;
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
						<h2> Spare Purchase Report </h2>
					</div>
                  <table id="export" class="responsive-table display" cellspacing="0" >
				 
                    <thead>
                        <tr>
                         
							<th>Purchase Date</th>
							<th>Spare Name</th>
                            <th>Purchase Qty</th>
                       
                            <th>Purchase Price</th>
                            <th>Invoice No</th>
                            <th>Reason</th>
							
							
							
							
												
                         
                        </tr>
						
						
						
				
                    </thead>
               
				
                
                    <tbody>
					<?php if($purchase)
					{
					
						
						
						
						
						
					foreach($purchase as $row)
					{
						if($row->return_qty == '0')
						{
						
						?>
						
					
                        <tr>
							<td><?php echo $row->purchase_date;?></td>
                            <td><?php echo $row->spare_name;?></td>
                            <td><?php echo $row->purchase_qty;?></td>
                            
                            <td><?php echo $row->purchase_price;?></td>
                            <td><?php echo $row->invoice_no;?></td>
                            <td><?php echo $row->reason;?></td>
                          
                            
                            
							
							
                        </tr>
		
					
					<?php } } }else
					{ ?>
						<tr><td colspan="6"><?php echo "<h4 align='center'>No Data Available</h4>"; ?></td></tr>
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