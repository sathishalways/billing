 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 4px;
    border: 1px solid #ccc;
}

table.dataTable.no-footer tr td {
    border: 1px solid #ccc !important;
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
    background-color: white;
}
thead {
    border: 1px solid #ccc;
    color: #303f9f;
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
#data-table-simple_length {
    display: block;
}
.dataTables_wrapper {
    position: relative;
    clear: both;
    zoom: 1;
}
.dataTables_wrapper .dataTables_length {
    float: left;
}
table.dataTable.no-footer {
    border-bottom: none !important;
}
table.dataTable, table.dataTable th, table.dataTable td {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}
table.dataTable {
    width: 100%;
    margin: 0 auto;
    clear: both;
    border-collapse: collapse !important;
    border-spacing: 0;
}
table {
    width: 100%;
    display: table;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
select {
    background-color: rgba(255, 255, 255, 0.9);
    width: 100%;
    padding: 5px;
    border: 1px solid #bbb;
    border-radius: 2px;
    height: 2rem;
    /* display: none; */
}
#data-table-simple_filter label {
    font-size: 15px !important;
}
.dataTables_wrapper .dataTables_filter input {
    margin-left: 0.5em;
}
input[type=search] {
    background-color: transparent;
    border: 1px solid #bbb;
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
.dataTables_wrapper .dataTables_info {
    clear: both;
    float: left;
    padding-top: 0.755em;
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 0.25em;
}
ul{
	display:none;
}
.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
    color: #bbb;
}
table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #bbb !important;
}
 </style>
 <script>
function frmValidate(){  
  
  if((document.getElementById("print_invoice").checked == false) && (document.getElementById("print_invoice1").checked == false))
   {
     document.getElementById("print_invoice").focus();
	 document.getElementById("errorBox").innerHTML = "Check any button to print invoice";
     return false;
   }
   
}

</script>

	<section id="content">
		<div class="container">
			<div class="section">
				<h2>Spare Purchase Details</h2>
				<div class="divider"></div>
				<div id="table-datatables">
					<div class="row">
						<div class="col-md-12">
							<table id="data-table-simple" class="responsive-table display" cellspacing="0">
								<thead>
									<tr>
									<!--<th style="width:100 !important">Spare Id</th>-->
										<th style="width:200 !important">Quantity</th>
										
										<th>Purchase Date</th>
										<th>Reason</th>
									</tr>
								</thead>
								<tbody>
									<?php
foreach($spare_view as $key){?> 
   <tr>
     <!--<td><?php echo $key->spare_id;?></td>-->
  <td><?php if($key->purchase_qty !=0){ echo $key->purchase_qty;}?></td> 

 <td><?php echo $key->purchase_date;?></td>
 <td><?php echo $key->reason;
 ?>
 
 
 
 </td>
 
  </tr>


<?php
}
?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
            </div>
		</div>
	</section>


  </div>
  

  </div>

<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	
	<!-- data-tables -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/data-tables/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

</body>

</html>