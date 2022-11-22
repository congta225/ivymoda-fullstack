<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/cartegory_class.php');
?>
<?php
$product = new product();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sanpham_id = $_POST['sanpham_id'];
    $sanpham_size = $_POST['sanpham_size'];
    $insert_sizesp =$product ->insert_sizesp($sanpham_id,$sanpham_size);
    
}
?>
<div class="admin-content-right">
    <div class="subcartegory-add-content">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Chọn mã sản phẩm<span style="color: red;">*</span></label> <br>
            <select required="required" name="sanpham_id">
                <option value="">--Chọn--</option>
                <?php
                        $show_product = $product ->show_product();
                        if($show_product){while($result=$show_product->fetch_assoc()){
                        ?>
                <option value="<?php echo $result['sanpham_id'] ?>">
                    <?php echo $result['sanpham_id'] ?>-<?php echo $result['sanpham_ma'] ?></option>
                <?php
                        }}
                        ?>
            </select> <br>
            <label for="">Chọn Size sản phẩm<span style="color: red;">*</span></label> <br>
            <select name="sanpham_size" id="">
                <option value="">--Chọn--</option>
                <option value="S">Size 36</option>
                <option value="S">Size 37</option>
                <option value="S">Size 38</option>
                <option value="S">Size 39</option>
                <option value="S">Size 40</option>
                <option value="S">Size 41</option>
                <option value="S">Size 42</option>
                <option value="S">Size 43</option>
                <option value="S">Size 44</option>
            </select>

            <button class="admin-btn" type="submit">Gửi</button>
        </form>
    </div>
</div>
</section>
<section>
</section>
<script src="js/script.js"></script>
</body>

</html>