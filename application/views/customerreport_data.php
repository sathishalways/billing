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
  table.display {
  	margin-top:15px;
  }
  table.display th,td {
  	padding:0px;
  	border:1px solid #522276;
  }
  table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #ccc;
  	background: #DBD0E1 !important;
  	border:2px solid #D3B5E6 !important;
  	color: #522276 !important;
  }
  table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 8px !important;
  	border: 1px solid #ccc !important;
  }
  table.dataTable.no-footer tr td {
    border: 1px solid #ccc !important;
  }
  thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #522276;
    color: #522276 !important;
  	background:#DBD0E1 !important;
  	
  }
  table {
    width: 98%;
    display: table;
    margin-left: 15px;
  }
</style>

<div class="pull-right" style="margin-right:145px;margin-top:9px;">
  <img src="<?php echo base_url()  ?>assets/images/x1.png" style="height:35px;float:left;"  onclick="tableToExcel('example', 'W3C Example Table')">
  <img src="<?php echo base_url()  ?>assets/images/p1.png" style="margin-left:8px;height:35px;" onClick="printDiv('table-datatables')">
</div>


<div id="table-datatables">
  <div class="row">
    <div class="col-md-12">
      <div>
        <h2>Customer Report</h2>
      </div>
      <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" >
          <thead>
            <tr>
              <th>S.No</th>
              <th>Date</th>
              <th>Customer Name</th>
              <th>Type Of Customer</th>
              <th>Contact Name</th>
              <th>Mobile</th>	
              <th>Email ID</th>
              <th>Address</th>
              <th>Address1</th>
              <th>City</th>
              <th>Service Zone</th>							
            </tr>
          </thead>


          <tbody>
          <?php if(!empty($customerreport))
          {
          $i=1; foreach($customerreport as $row)
          {
          ?>

            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $row->created_on;?></td>
              <td><?php echo $row->company_name;?></td>
              <td><?php echo $row->customertype;?></td>
              <td><?php echo $row->customer_name;?></td>
              <td><?php echo $row->mobile;?></td>
              <td><?php echo $row->email_id;?></td>
              <td><?php echo $row->address;?></td>
              <td><?php echo $row->address1;?></td>
              <td><?php echo $row->city;?></td>
              <td><?php echo $row->service_loc;?></td>
            </tr>

          <?php $i++; } } else
          { ?>
          <tr><td align="center" colspan="12"><?php echo "<h4 align='center'>No Data Available</h4>"; ?></td></tr>
          <?php }
          ?>

          </tbody>
        </table>
      </div>
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