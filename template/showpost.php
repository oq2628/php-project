<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./public/css/form.css"> -->
</head>
<body>
<?php foreach($getbyids as $getbyid) : ?>
    <div class="form-group row" style="margin-bottom:0px; height:100%;">
        <h2 class="col-3" style=" padding: 0;
                                        margin: 0 0 0 40px;
                                        border:none;
                                        border-radius:5px;
                                        outline-style:none;
                                        height: 50px;
                                        text-align: center;
                                        padding-top:10px;
                                        "><?php echo $getbyid[1]?></h2>
        <div class="col-8 button-content" style="text-align: right;
    padding-top: 10px;padding-top: 10px;
    text-align: right;">
        <a href="http://localhost/new/admin"><button type="button" class="btn btn-light btn-all">Back</button></a>
        </div>
        <div class="col-1 col-form-label"></div>
    </div>
      <hr>
    <div class="form-group row">
        <img src="<?php echo $getbyid[3]?>" alt="<?php echo $getbyid[1]?>" class="col-4 col-form-label" style="padding: 0 0 0 40px;">
        <div class="col-8">
          <textarea id="textarea1" name="textarea1" cols="40" rows="5" class="form-control" style="display:flex; outline-style:none; width: 500px; height: 150px;" required><?php echo $getbyid[2]?></textarea>
        </div>
    </div>
<?php endforeach; ?>
</form>
</body>
</html>
