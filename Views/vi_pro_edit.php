<h1>Sửa sản phẩm</h1>
<form method="post" action="" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Tên</td>
            <td><input type="text" name="pro_name" value="<?=$pro_edit['name']?>" required></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="pro_price" value="<?=$pro_edit['price']?>"  required></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <textarea name="pro_description" id="pro_description"><?=$pro_edit['description']?></textarea>
            </td>
        </tr>
        <tr>
            <td>Bài viết</td>
            <td>
                <textarea name="pro_article" id="pro_article"><?=$pro_edit['article']?></textarea>
            </td>
        </tr>
        <tr>
            <td>Ảnh</td>
            <td>
                <input type="file" name="image">
                <img src="uploads/<?=$pro_edit['image']?>" height="100" alt="">
            </td>
        </tr>
    </table>
    <button type="submit" name="submit" value="add">Lưu</button>
</form>