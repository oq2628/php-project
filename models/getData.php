<?php
    // include_once "./core/connDB.php";
    class get_data extends connDB {
        function get_data(){
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
            // var_dump(mysqli_select_db($this->conn, $this->dbname));
            // var_dump(mysqli_select_db($this->conn, $this->dbname));
            


            if (!mysqli_select_db($this->conn,$this->dbname))
                die("Unable to select database: " . mysqli_error());
            // Thông báo lỗi nếu chọn CSDL thất bại
                $sql_stmt = "SELECT * FROM testdb"; 
                // Câu lệnh select
                $result = mysqli_query($this->conn,$sql_stmt);
                $rows = mysqli_fetch_all($result);
                return $rows;
            // mysqli_close($this->conn); // Đóng kết nối CSDL
        }
}
?>