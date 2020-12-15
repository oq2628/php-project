<?php
class getbyid extends connDB {
    function getbyid($id){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        $sql="SELECT `id`,`title`,`description`,`image`,`status` FROM `testdb` WHERE `id`='$id'";
        
        $result = mysqli_query($this->conn,$sql);
        $rows = mysqli_fetch_all($result);
        
        if ($result->num_rows > 0) {
            // echo "data is exits";
            // return true;
        } else {
            echo "0 results";
        }
        return $rows;
    }
}

?>