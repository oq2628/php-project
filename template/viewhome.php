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

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>thumb</th>
            <th>title</th>
        </tr>
    </thead>
        <tbody>
            <?php foreach($getalls as $getall) : ?>
                <tr>
                    <td><?php echo $getall[0]?></td>
                    <td><a href="./home/showpost/<?php echo $getall[0]?>"><img src="<?php echo $getall[3]?>" alt="<?php echo $getall[1]?>"></a></td>
                    <td><?php echo $getall[1]?></td>
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