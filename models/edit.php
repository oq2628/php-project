<?php
class edit extends connDB{
    public function edit($title,$description,$choosefile,$status,$id){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);

        $sql="UPDATE `mydb`.`testdb` SET `title`='$title', `description`='$description', `image`='$choosefile', `status`='$status' WHERE `id`='$id'";
        // echo $id;
        if ($this->conn->query($sql) === TRUE) {
          echo '<div style="color:5cb85c; text-align:center; margin-top:20px;"><h1>New record created successfully</h1></div><br/>';

          echo '<div style="
                  margin-left:48%;
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
                  padding: 6px 12px;
                  font-size: 14px;
                  line-height: 1.42857143;
                  border-radius: 4px;
                  user-select: none;
                  "><a href="http://localhost/new/">Back</a>
                </div>';
          } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
          // echo $sql;
    }
}

?>