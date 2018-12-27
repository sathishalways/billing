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
    </style>
</head>
<body>
    <div class="container">
        <h2>History View</h2>

        <table cellpadding="1" cellspacing="1" id="detailTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Request Id</th>
                    <th>Notes</th>   					
                </tr>
            </thead>

            <tbody>
			<?php foreach($history as $key){?>
                <tr>
                    <td><?php echo $key->id; ?></td>
                    <td><?php echo $key->req_id; ?></td>
                    <td><?php echo $key->eng_notes; ?></td>   					
                </tr>
			<?php } ?>
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