<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="http://localhost/new/public/css/2.css"> -->
  </head>
  <body>
  <div class="form-group row">
        <h2 class="col-4 col-form-label" style="text-align: center;">Edit</h2>
        <div class="col-8 button-content"style="display:flex;">
        <a href="http://localhost/new/admin" style="margin:auto;"><button type="button" class="btn btn-light btn-all">Back</button></a>
        </div>
      </div>
      <hr>
  <?php foreach($getbyids as $getbyid) : ?>
    <form action="http://localhost/new/admin/edit/<?php echo $getbyid[0]?>" method="POST">
     <div class="container">

      <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Title</label> 
        <div class="col-8">
          <textarea id="textarea" name="textarea" cols="40" rows="1" class="form-control" required><?php echo $getbyid[1]?></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="textarea1" class="col-4 col-form-label">Description</label> 
        <div class="col-8">
          <textarea id="textarea1" name="textarea1" cols="40" rows="5" class="form-control" required><?php echo $getbyid[2]?></textarea>
        </div>
      </div>
      
      <div class="form-group row">
        <label for="myfile" class="col-4 col-form-label">Select a file: </label> 
        <div class="col-8">
          <input type="file" id="myfile" name="myfile" accept="image/*" onchange="loadFile(event)" class="form-control inputfile" required>
        </div>
        <div class="col-4 col-form-label"></div>
        <div class="col-8"><img id="preview" name="preview" src="<?php echo $getbyid[3]?>" alt="Change" style="width: 200px; height:200px;" class="img-circle"></div>
      </div>

      <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Status</label> 
        <div class="col-8">
          <select id="select" name="select" class="custom-select slt">
            <option value="<?php echo $getbyid[4]?>"><?php echo "default" ?></option>
            <option value="Enable">enable</option>
            <option value="Disable">disable</option>
          </select>
        </div>
      </div> 

      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </div> 
    </form>
  <?php endforeach; ?>
  <script type="text/javascript">
    var loadFile = function (event) {
	    var myfile = document.getElementById ('preview');
      myfile.src = URL.createObjectURL (event.target.files [0]);
    };
  </script>
  </body>
</html>
