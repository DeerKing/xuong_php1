<h1>Đây là trang danh sách sản phẩm trong giỏ hàng</h1>
<form action="" method="post">
    <table border="1">

        <tr>
            <td>Tên</td>   
            <td>Ảnh</td> 
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
        </tr>
        <?php 
        if($array_cart != null){
            foreach($array_cart as $row){
                ?>
                <tr>
                    <td><?=$row['name']?></td>   
                    <td><img src="uploads/<?=$row['image']?>" height="100"/></td> 
                    <td><?=number_format($row['price'])?></td>
                    <td><?=$row['soluong']?></td>
                    <td>Thành tiền</td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</form>