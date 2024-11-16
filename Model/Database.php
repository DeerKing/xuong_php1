<?php
class Database{
    private $conn;
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=xuong_php1", $username, $password);
        $this->conn = $conn;
        // set the PDO error mode to exception
        //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //   echo "Kết nối thành công";
        } catch(PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
        }
    }
    /**
     * Hàm kiểm tra user có đúng username và password hay không
     * @param mixed $username
     * @param mixed $password
     * @return mixed
     */
    public function checkUser($username, $password){
        //Thực hiện câu lệnh để kiểm tra user submit có tồn tại trong database hay không
        $sql = "SELECT * FROM users WHERE username ='".$username."' AND password ='".$password."' LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    /**
     * Hàm lấy danh sách sản phẩm getListProduct
     * @return void
     */
    public function getListProduct(){
        $sql = 'SELECT * FROM products';//Câu lệnh sql lấy toàn bộ sản phẩm
        $stmt = $this->conn->prepare($sql);//Chuẩn bị câu lệnh sql
        $stmt->execute();//Thực hiện câu lệnh
        $result = $stmt->fetchAll();
        return $result;//Trả về kết quả
    }
    public function getProductById($id){
        $sql = "SELECT * FROM products WHERE id = ". $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}