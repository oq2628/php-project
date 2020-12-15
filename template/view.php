<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./public/css/1.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->
    <link rel="stylesheet" href="./public/css/1.css">
    <title>Amin</title>
</head>
<body>
<div style="text-align:center; display:flex; justify-content: space-between;">
        <h2 >Manage</h2>
        <a href="admin/news"  style="
                    color: #fff;
                    background-color: #5cb85c;
                    border-color: #4cae4c;
                    display: inline-block;
                    margin-bottom: 0;
                    font-weight: 400;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    touch-action: manipulation;
                    cursor: pointer;
                    background-image: none;
                    border: 1px solid transparent;
                    padding: 10px 12px 6px 12px;
                    font-size: 14px;
                    line-height: 1.42857143;
                    border-radius: 4px;
                    user-select: none;
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
                        <a href="./admin/showpost/<?php echo $getall[0]?>" class="btn btn-link actions">Show</a>
                        <a href="./admin/edits/<?php echo $getall[0]?>" class="btn btn-link actions">Edit</a>
                        <a href="admin/delete/<?php echo $getall[0]?>" class="btn btn-link actions">Delete</a>
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