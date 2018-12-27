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
<div class="pull-right" style="margin-right:145px;margin-top:9px;">
<img src="<?php echo base_url()  ?>assets/images/x1.png" style="height:35px;float:left;"  onclick="tableToExcel('example', 'W3C Example Table')">
<img src="<?php echo base_url()  ?>assets/images/p1.png" style="margin-left:8px;height:35px;" onClick="printDiv('table-datatables')">
</div>

	
	  <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="example" class="responsive-table display" cellspacing="0" >
                    <thead>
                        <tr>
                            <td>RequestID</td>
                            <td>CustomerName</td>                           
                            <td>SpareName</td>
                            <td>spare_qty</td>
                            <td>Machine Status</td>
                            <td>Purchase Price</td>
                            <td>Amount</td>
                          
                         
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php if($name)
					{
						$count=0;
					foreach($name as $row)
					{
						
					$count+=$row->amt;
						?>
					
                        <tr>
                            <td><?php echo $row->request_id;?></td>
                            <td><?php echo $row->customer_name;?></td>
                            <td><?php echo $row->spare_name;?></td>
                            <td><?php echo $row->spare_qty;?></td>
                            <td><?php echo $row->machine_status;?></td>
                            <td><?php echo $row->purchase_price;?></td>
                            <td><?php echo $row->amt;?></td>
                            
                           
							
                        </tr>
					
					<?php } }
					
					 else
					{
						echo "<h4 align='center'>No Data Available</h4>";
					}
					?>
                    </tbody>
					<?php if(!empty($name))
					{
						?>
						<tbody>
						
						<tr style="visibility:hidden;"><td style="border:none;" ></td></tr>
						<tr>
						<td colspan="5" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total SpareCharge :<?php echo $count;?></div></td>                           
							
							
							
							
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>