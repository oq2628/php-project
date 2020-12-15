<?php
class delete extends connDB{
    function delete($id){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
       
        $sql="DELETE FROM `testdb` WHERE `id`='$id'";
        if ($this->conn->query($sql) === TRUE) {
            
            echo '<div style="color:5cb85c; text-align:center; margin-top:20px;"><h1>Field deleted successfully</h1></div><br/>';
        } else {
            echo "Error creating database: " . $this->conn->error;
        }
    }

}
?>