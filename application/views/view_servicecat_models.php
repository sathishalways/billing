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
        table.dataTable tbody th, table.dataTable tbody td {
            padding: 3px 10px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            color: #000;
            font-size: 13px;
        }
        table.dataTable tbody tr:nth-child(even) {background: #f9f9f9}
        table.dataTable tbody tr:nth-child(odd) {background: #eaeaea}
		
		table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
	border: 1px solid #dbd0e1 !important;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 8px !important;
	border: 1px solid #522276 !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
}
thead {
			border-bottom: 1px solid #eeeeee;
			border: 1px solid #eeeeee;
			/*color: #303f9f;*/
			background:#6c477d;
			color:#fff;
		}
		input[type=search]{
    background-color: transparent;
    border: 1px solid #522276;
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
		h2{
			color: #6C217E;
		}
    </style>
</head>
<body>
    <div class="container">
        <h2>Service Charge List</h2>

        <table cellpadding="1" cellspacing="1" id="detailTable">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Charge</th>                
                </tr>
            </thead>

            <tbody>
                <?php foreach($service_list as $key1){?>
                <tr>
                    <?php foreach($service_charge as $key){
                    if($key->service_cat_id==$key1->id){?>
                    <td><?php echo $key->model;?></td>
                    <td><?php echo $key->service_charge;?></td>
                </tr>
                <?php } } }?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#detailTable').DataTable();
        });
    </script>
</body>
</html>