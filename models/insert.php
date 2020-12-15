<?php
class insert extends connDB{
    public function insert($title,$description,$choosefile,$status){
      // echo "hello";
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        $sql="INSERT INTO `mydb`.`testdb` (`title`, `description`, `image`, `status`)
              VALUES ('$title', '$description', '$choosefile', '$status')";

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
                    "><a href="..">Back</a>
                  </div>';
          } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
          // echo $sql;
          // mysqli_close($this->conn); // Đóng kết nối CSDL
    }
}
?>