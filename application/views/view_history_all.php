<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" ></script>

    <style>
        h2 {
            color: #000;
            font-family: 'Source Sans Pro',sans-serif;
        }
        table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #522276 !important;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
	border: 1px solid #522276 !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
}
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #522276 !important;
	background-color:#DBD0E1 !important;
	
}
.dataTables_wrapper .dataTables_length {
    float: left;
    padding-top: 10px;
}
/* ul li{
	list-style:none;
	display:inline-block;
	margin:5px 5px 0px;
	background:#DBD0E1;
	color:#522276 !important;
	padding:5px 25px;
	width:180px;
	border-top-left-radius:5px;
	border-top-right-radius:5px;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 0px;
}
     */    /*table.dataTable tbody tr:nth-child(even) {background: #f9f9f9}
        table.dataTable tbody tr:nth-child(odd) {background: #eaeaea}*/
    </style>
</head>

<body>

<?php
//print_r($get_log_onholds);


?>
    <div class="container">
        <h2>History View</h2>
				<!--<ul>
			<li><a class="a">Coordinator Notes</a></li>
			<li><a class="b">Customer Remarks</a></li>
			<li><a class="c">Engineer Notes</a></li>
			<li><a class="d">Engineer Solution</a></li>
			<li><a class="e">Previous Holds</a></li>
		</ul>-->
		
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#detailTable" class="a">Coordinator Notes</a></li>
			<li><a data-toggle="tab" href="#detailTable1" class="b">Customer Remarks</a></li>
			<li><a data-toggle="tab" href="#detailTable2" class="c">Engineer Notes</a></li>
			<li><a data-toggle="tab" href="#detailTable3" class="d">Engineer Solution</a></li>
			<li><a data-toggle="tab" href="#detailTable4" class="e">Previous Holds</a></li>
		</ul>
		
		<div style="margin-top:10px;">
        <table cellpadding="1" cellspacing="1" id="detailTable" class="first">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Request ID</th>
                    <th>Coordinator Notes</th>   					
                    <th>Updated On</th>   					
                </tr>
            </thead>

            <tbody>
			<?php foreach($history_conotes as $key){
				$sddd = $key->created_on;
				?>
                <tr>
                    <td><?php echo $key->id; ?></td>
                    <td><?php echo $key->request_id; ?></td>
                    <td><?php echo $key->co_notess; ?></td>   					
                    <td><?php echo $sddd; ?></td>   					
                </tr>
			<?php } ?>
            </tbody>
        </table>
		</div>
		<div >
		 <table cellpadding="1" cellspacing="1" id="detailTable1" class="second">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Request ID</th>
                    <th>Customer Notes</th> 
					<th>Updated By</th>   		
                    <th>Updated On</th>   					
                </tr>
            </thead>

            <tbody>
			<?php foreach($history_remark as $key){
				$sddd = $key->created_on;
				?>
                <tr>
                    <td><?php echo $key->id; ?></td>
                    <td><?php echo $key->request_id; ?></td>
                    <td><?php echo $key->cust_remark; ?></td>
					<td><?php echo $key->emp_name; ?></td>  					
                    <td><?php echo $sddd; ?></td>   					
                </tr>
			<?php } ?>
            </tbody>
        </table>
		</div>
		
		
		
		
		

		<div >
		 <table cellpadding="1" cellspacing="1" id="detailTable2" class="third">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Request ID</th>
                    <th>Engineer Notes</th>  
					<th>Updated By</th>   					
                    <th>Updated On</th>   					
                </tr>
            </thead>

            <tbody>
			
			
			<?php foreach($history_engnotess as $key){
				$sddd = $key->created_on;
				?>
                <tr>
                    <td><?php echo $key->id; ?></td>
                    <td><?php echo $key->request_id; ?></td>
                    <td ><?php $data=$key->eng_notess; $data1=nl2br($data); echo $data1; ?></td>  
					<td><?php echo $key->emp_name; ?></td> 					
                    <td><?php echo $sddd; ?></td>   					
                </tr>
			<?php } ?>
            </tbody>
        </table>
		</div>
		
		<div >
		 <table cellpadding="1" cellspacing="1" id="detailTable3" class="fourth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Request ID</th>
                    <th>Solution</th> 
					<th>Updated By</th> 		
                    <th>Updated On</th>   					
                </tr>
            </thead>

            <tbody>
			<?php foreach($history_sol as $key){
				$sddd = $key->created_on;
				?>
                <tr>
                    <td><?php echo $key->id; ?></td>
                    <td><?php echo $key->request_id; ?></td>
                    <td><?php echo $key->cust_solution; ?></td>   	
					<td><?php echo $key->emp_name; ?></td>				
                    <td><?php echo $sddd; ?></td>   					
                </tr>
			<?php } ?>
			
            </tbody>
        </table>
		</div>
		
		<div >
		 <table cellpadding="1" cellspacing="1" id="detailTable4" class="fivth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Request ID</th>
                    <th>Solution</th> 
					<!--<th>Updated By</th>--> 		
                    <th>Updated On</th>   					
                </tr>
            </thead>

            <tbody>
			<?php foreach($get_log_onholds as $key){
				$sddd = $key->on_hold;
				//echo $sddd;exit;
				?>
                <tr>
                    <td><?php echo $key->id; ?></td>
                    <td><?php echo $key->req_id; ?></td>
                    <td><?php echo $key->onhold_reason; ?></td>   	
					<!--<td><?php echo $key->on_hold; ?></td>-->				
                    <td><?php echo $sddd; ?></td>   					
                </tr>
			<?php } ?>
			
            </tbody>
        </table>
		</div>
		
    </div>
    <script>
        $(document).ready(function() {
            $('#detailTable').DataTable({
				"pagingType": "full_numbers"
			} );
			$('#detailTable1').DataTable({
				"pagingType": "full_numbers"
			} );
			$('#detailTable2').DataTable({
				"pagingType": "full_numbers"
			} );
			$('#detailTable3').DataTable({
				"pagingType": "full_numbers"
			} );
			$('#detailTable4').DataTable({
				"pagingType": "full_numbers"
			} );
			
			$("#detailTable1_wrapper, #detailTable2_wrapper, #detailTable3_wrapper,#detailTable4_wrapper").hide();
			
			$(".a").click(function(){
				$("#detailTable_wrapper").show();
				$("#detailTable1_wrapper, #detailTable2_wrapper, #detailTable3_wrapper,#detailTable4_wrapper").hide();
			});
			$(".b").click(function(){
				$("#detailTable1_wrapper").show();
				$("#detailTable_wrapper, #detailTable2_wrapper, #detailTable3_wrapper,#detailTable4_wrapper").hide();
			});
			$(".c").click(function(){
				$("#detailTable2_wrapper").show();
				$("#detailTable1_wrapper, #detailTable_wrapper, #detailTable3_wrapper,#detailTable4_wrapper").hide();
			});
			$(".d").click(function(){
				$("#detailTable3_wrapper").show();
				$("#detailTable1_wrapper, #detailTable2_wrapper, #detailTable_wrapper,#detailTable4_wrapper").hide();
			});
			$(".e").click(function(){
				$("#detailTable4_wrapper").show();
				$("#detailTable1_wrapper, #detailTable2_wrapper, #detailTable_wrapper,#detailTable3_wrapper").hide();
			});
			
        });
    </script>
</body>
</html>