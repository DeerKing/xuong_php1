<?php
//Toán tử + - * / %
//Mảng 2 chiều
$products = [
    ['id' => 1, 'name' => 'Iphone 11', 'category'=> 'Điện thoại','price' => 1000, 'description' => 'Iphone 11 rất đẹp', 'article' =>'Đây là 1 bài viết dài', 'image' => '11.jpg' ],
    ['id' => 2, 'name' => 'Iphone 12', 'category'=> 'Điện thoại', 'price' => 2000, 'description' => 'Iphone 12 rất đẹp', 'article' =>'Đây là 2 bài viết dài', 'image' => '12.jpg' ],
    ['id' => 3, 'name' => 'Iphone 13', 'category'=> 'Điện thoại', 'price' => 3000, 'description' => 'Iphone 13 rất đẹp', 'article' =>'Đây là 3 bài viết dài', 'image' => '13.jpg' ],
    ['id' => 4, 'name' => 'Iphone 14', 'category'=> 'Điện thoại', 'price' => 4000, 'description' => 'Iphone 14 rất đẹp', 'article' =>'Đây là 4 bài viết dài', 'image' => '14.jpg' ],
    ['id' => 5, 'name' => 'Iphone 15', 'category'=> 'Điện thoại', 'price' => 5000, 'description' => 'Iphone 15 rất đẹp', 'article' =>'Đây là 5 bài viết dài', 'image' => '15.jpg' ],
    ['id' => 6, 'name' => 'Iphone 16', 'category'=> 'Điện thoại', 'price' => 6000, 'description' => 'Iphone 16 rất đẹp', 'article' =>'Đây là 6 bài viết dài', 'image' => '16.jpg' ],
];
//Hàm có sẵn: count, array_push, array_merge
echo count($products).'<br>';//Hàm count Đếm mảng có bao nhiêu phần tử
//Hàm tự tạo
//Viết hàm in ra tên sản phẩm trong mảng 2 chiều
function getNameProduct($arr_products){
    foreach($arr_products as $row){
        if($row['name']){
            echo $row['name'].'<br>';
        }
    }
}

getNameProduct($products);//Gọi hàm ra sử dụng
//Cokie là lưu dữ liệu ở máy local
setcookie('name', 'TrungND87', time() + 7*24*60*60);
if(isset($_COOKIE['name'])) echo $_COOKIE['name'];
//Xóa cookie
setcookie('name', 'TrungND87', time() - 7*24*60*60);//Set thời gian cookie thành quá khứ để xóa cookie