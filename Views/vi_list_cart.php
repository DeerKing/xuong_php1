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
         $tong = 0;
        if($array_cart != null){
           
            foreach($array_cart as $row){
                $amount = $row['soluong'] * $row['price'];
                $tong += $amount;
                ?>
                <tr>
                    <td><?=$row['name']?></td>   
                    <td><img src="uploads/<?=$row['image']?>" height="100"/></td> 
                    <td><?=number_format($row['price'])?></td>
                    <td><?=$row['soluong']?></td>
                    <td><?=number_format($amount)?></td>
                </tr>
                <?php
            }
        }
        ?>
        <tr>
            <td colspan="4">Tổng tiền phải thanh toán</td>
            <td><?=number_format($tong)?></td>
        </tr>
    </table>
    <form>
        <table>
        <tr>
            <td>Tên khách hàng:</td>
            <td><input type="text" name="cus_name"></td>
        </tr>
        <tr>
            <td>SĐT:</td>
            <td><input type="text" name="cus_phone"></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><input type="text" name="cus_address"></td>
        </tr>
        </table>
        <button>Đặt mua</button>
    </form>
</form>