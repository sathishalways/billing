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
width:100%;
	margin-top:15px;
}
table.display th,td
{
	padding:0px 8px;
	border:1px solid #522677;
}
table.dataTable tbody td{
	padding: 0px 10px !important;
	border:1px solid #522677;
}
input
{
	/*border-style: none !important;*/
	height: 2rem !important;
}
#data-table-simple_filter
{
	display:block;
}
#data-table-simple_length
{
	display:block;
}
.dataTables_wrapper .dataTables_filter input {
    margin-left: 0;
}

input[type=text], input[type=search]{
    background-color: transparent;
    border: none;
    border: 1px solid #522677;
    border-radius: 0;
    outline: none; 
    height: 3.9rem; 
    width: 100%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 0;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
	padding: 0px 20px;
}
.dataTables_wrapper .dataTables_length {
    float: left;
    padding: 0px 20px;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}
table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
    border: 1px solid #522677 !important;
	font-size: 13px;
}
table.dataTable thead th, table.dataTable thead td {
    padding: 0px 18px;
	font-size:13px;
}
thead {
    border: 1px solid #522677;
    /* border: 2px solid #AB9BB7; */
    color: #fcfcfc;
	background: #6c477d;
}
</style>
	<h2 style="margin-left: 15px;
    margin-right: 15px;">Aging Report</h2>
	 <div id="table-datatables" style="margin-left: 15px;
    margin-right: 15px;">
           
              <div class="row">
              
			
               <div class="col-md-12">
			 
                  <table id="export" class="table table-border display" cellspacing="0" >
				 
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
							<th>Request Date</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Model</th>
							<th>Serial No</th>
                            <th>Machine Status</th>
                            <th>Problem</th>
                            <th>status</th>
							<th>Solution</th>
							<!--<th>Engineer Name</th>-->
                            
							
							
							
												
                         
                        </tr>
						
						
						
				
                    </thead>
               
				
                
                    <tbody>
					<?php if($agingreport)
					{
					
						
						//$stot = 0;
						
						
						
					foreach($agingreport as $row)
					{
						//$stot+=$row->amt;
						$problem_data = $row->problem;
						
						$exp = explode(",",$problem_data);
						
						
						
						?>
						
					
                        <tr>
							
                            <td><?php echo $row->request_id;?></td>
                            <td><?php echo $row->request_date;?></td>
                            <td><?php echo $row->customer_name;?></td>
                            <td><?php echo $row->address;?></td>
                           <td><?php echo $row->model;?></td>
						    <td><?php echo $row->serial_no;?></td>
                            <td><?php echo $row->machine_status;?></td>
							<td><?php if(!empty($category)){
									foreach($category as $problemlistkey1){ 
										if (in_array($problemlistkey1->id, $exp)){
											echo "<br>".$prob_category = $problemlistkey1->prob_category;
											
									}} 
									}else{
										echo $prob_category ="";
							} ?>
							
							</td>
							<td><?php echo $row->status;?></td>
							<td><?php echo $row->cs;?></td>
                        </tr>
		
					
					<?php } } 
					?>
					
						
                    </tbody>
					
					<!--<tbody>
						
						<tr style="visibility:hidden;"><td style="border:none;" ></td></tr>
						<tr>
						<td colspan="4" style="border:none !important;"></td>
                           
							
							
                            <td colspan="2"><div class="pull-right">Total Spare Charge :<?php echo $stot;?></div></td>                           
							
							
							
							
							
                        </tr>
						</tbody>-->
					
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
	<!--<script>
	var $= jQuery.noConflict();
	</script>-->
	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
	
	<!--<script>
		$(function(){
			$("#export").dataTable();
		});
	</script>-->
	
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>