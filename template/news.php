<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/2.css">
  </head>
  <body>
    <form action="./inserts"  method="POST">
     <div class="container">
      <div class="form-group row">
        <h1 class="col-4 col-form-label">New</h1>
        <div class="col-8 button-content">
        <a href=".."><button type="button" class="btn btn-light btn-all">Back</button></a>
        </div>
      </div>
      <hr>

      <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Title</label> 
        <div class="col-8">
          <textarea id="textarea" name="textarea" cols="40" rows="1" class="form-control" required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="textarea1" class="col-4 col-form-label">Description</label> 
        <div class="col-8">
          <textarea id="textarea1" name="textarea1" cols="40" rows="5" class="form-control" required></textarea>
        </div>
      </div>
      
      <div class="form-group row">
        <label for="myfile" class="col-4 col-form-label">Select a file: </label> 
        <div class="col-8">
          <input type="file" id="myfile" name="myfile" onchange="loadFile(event);" class="form-control inputfile" required>
        </div>
        <div class="col-4 col-form-label"></div>
        <div class="col-8"><img id="preview" alt="Change" style="width: 200px; height:200px;" class="img-circle"></div>
      </div>

      <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Status</label> 
        <div class="col-8">
          <select id="select" name="select" class="custom-select slt">
            <option value="Enable">Enable</option>
            <option value="Disable">Disable</option>
          </select>
        </div>
      </div> 

      <div class="form-group row">
        <div class="offset-4 col-8">
         <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </div>
    <script type="text/javascript">
      var loadFile = function (event) {
	      var myfile = document.getElementById ('preview');
        myfile.src = URL.createObjectURL (event.target.files [0]);
        // console.log(myfile);
      };
  </script>
    </form>
  </body>
</html>
