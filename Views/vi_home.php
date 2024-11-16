<h1>Đây là trang chủ</h1>
<a href="index.php?route=logout">Logout</a>
<hr>
<table border="1">
    <tr>
        <td>Tên</td>
        <td>Giá</td>
        <td>Mô tả ngắn</td>
        <td>Bài viết</td>
        <td>Ảnh</td>
        <td>Mua hàng</td>
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
            </tr>
        <?php
    }
    ?>
</table>
