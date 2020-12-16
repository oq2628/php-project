<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="http://localhost/new/public/css/1.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="http://localhost/new/public/css/1.css">
    <title>Amin</title>
</head>
<body>
<div style="text-align:center; display:flex; justify-content: space-around; background-color:#F9F9F9;">
        <h2 style="margin:0 200px 0 0; border-radius: 10px;">Manage</h2>
        <a href="http://localhost/new/admin/news"  style="
                    color: #fff;
                    background-color: #5cb85c;
                    border-color: #4cae4c;
                    display: inline-block;
                    font-weight: 400;
                    cursor: pointer;
                    border: 1px solid transparent;
                    padding: 10px 12px;
                    font-size: 14px;
                    border-radius: 10px;
        ">New</a>
</div>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>thumb</th>
            <th>title</th>
            <th>status</th>
            <th>Action</th>
        </tr>
    </thead>
        <tbody>
            <?php foreach($getalls as $getall) : ?>
                <tr>
                    <td><?php echo $getall[0]?></td>
                    <td><a href="<?php echo $getall[3]?>"><img src="<?php echo $getall[3]?>" alt="<?php echo $getall[1]?>"></a></td>
                    <td><?php echo $getall[1]?></td>
                    <td><?php echo $getall[4]?></td>
                    <td>
                        <a href="http://localhost/new/admin/showpost/<?php echo $getall[0]?>" class="btn btn-link actions">Show</a>
                        <a href="http://localhost/new/admin/edits/<?php echo $getall[0]?>" class="btn btn-link actions">Edit</a>
                        <a href="http://localhost/new/admin/delete/<?php echo $getall[0]?>" class="btn btn-link actions">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>
<script>
    $(document).ready(function () {
		$('#example').dataTable({
			"pagingType": "full_numbers",
			"lengthMenu": [[5, 10,20, -1], [5, 10,20, "All"]],
		});
	});
</script>
</body>
</html>