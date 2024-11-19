<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/style.css">
    </head>
<body>
    <div class="container">
        <h1>Đây là trang chủ</h1>
        <p><a href="index.php?route=logout">Logout</a></p>
        <a href="index.php?route=add_pro"><button class="button-add">Thêm sản phẩm</button></a>
       
        <table border="1">
            <tr>
                <td>Tên</td>
                <td>Giá</td>
                <td>Mô tả ngắn</td>
                <td>Bài viết</td>
                <td>Ảnh</td>
                <td>Mua hàng</td>
                <td>Sửa</td>
                <td>Xóa</td>
            </tr>
            <?php
            foreach($arr_products as $row){
                // print_r($row);die();
                ?>
                    <tr>
                        <td><?=$row['name']?></td>
                        <td><?=number_format($row['price'])?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['article']?></td>
                        <td><img src="uploads/<?=$row['image']?>" height="100"> </td>   
                        <td><a href="index.php?route=cart&id=<?=$row['id']?>"><button>Mua ngay</button></a></td>       
                        <td><a href="index.php?route=edit_pro&id=<?=$row['id']?>"><button>Sửa</button></a></td>      
                        <td><a href="index.php?route=delete_pro&id=<?=$row['id']?>" ><button>Xóa</button></a></td>      
                    </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>