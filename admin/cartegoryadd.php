<?php
include "header.php";
include "leftside.php";
//include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/cartegory_class.php');
?>
<?php
$cartegory = new cartegoty;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cartegory_name = $_POST['cartegory_name'];
	$insert_cartegory = $cartegory ->insert_cartegory($cartegory_name);
}
?>
        <div class="admin-content-right">
            <div class="cartegory-add-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="" name="" style="color:black">Vui lòng chọn danh mục<span style="color: red;">*</span></label> <br>
                    <input type="text" name="cartegory_name">
                    <button class="btn-index button-stt" style="background-color:red; border-color:blue; color:white" type="submit">Gửi</button>             
                </form>
            </div>           
        </div>
    </section>
    <section>
    </section>
    <script src="js/script.js"></script>
</body>
</html>  