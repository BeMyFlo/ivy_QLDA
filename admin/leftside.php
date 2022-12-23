<?php
if(isset($_GET['admin_id'])){
    Session::destroyAdmin();
}
?>

<section class="admin-content row space-between">
        <div class="admin-content-left">
        <div class="header-top-left">
            <a href="index.php"><img src="../image/logo.png"></a>
        </div>
            <ul class="cot-trai-tru-logo">
                <li><a  href="#"><span  style="color:red; font-size:22px; font-family:var(--main-text-font)">Chào:</span>  <span  style="color:red; font-size:22px; font-family:var(--main-text-font)"><?php echo Session::get('admin_name') ?></span></a>
                <li><a href="#"><i style="margin-right: 10px;"  class="fa-solid fa-layer-group"></i>Đơn hàng</a>
                    <ul>
                        <li><a href="orderlist.php">Chưa hoàn thành</a></li>
                        <li><a href="orderlistdone.php">Đã hoàn thành</a></li>
                        <li><a href="orderlistall.php">Tất cả Đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa-solid fa-list-check"></i></i></i>Danh Mục</a>
                    <ul>
                        <li><a href="cartegorylist.php">Danh sách</a></li>
                        <li><a href="cartegoryadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><i style="margin-right: 10px;" class="fa-sharp fa-solid fa-graduation-cap"></i>Loại Sản Phẩm</a>
                    <ul>
                        <li><a href="brandlist.php">Danh sách</a></li>
                        <li><a href="brandadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><i style="margin-right: 10px;" class="fa-sharp fa-solid fa-palette"></i>Màu sắc</a>
                    <ul>
                        <li><a href="colorlist.php">Danh sách</a></li>
                        <li><a href="coloradd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><i style="margin-right: 10px;" class="fa-sharp fa-solid fa-shirt"></i>Sản phẩm</a>
                    <ul>
                        <li><a href="productlist.php">Danh sách</a></li>
                        <li><a href="productadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><i style="margin-right: 10px;" class="fa-regular fa-image"></i>Ảnh Sản phẩm</a>
                    <ul>
                        <li><a href="anhsanphamlists.php">Danh sách</a></li>
                        <li><a href="anhsanphamadds.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><i style="margin-right: 10px;" class="fa-sharp fa-solid fa-signal"></i>Size Sản phẩm</a>
                    <ul>
                        <li><a href="sizesanphamlists.php">Danh sách</a></li>
                        <li><a href="sizesanphamadds.php">Thêm</a></li>
                    </ul>
                </li>

                <li><a href="?admin_id=<?php echo Session::get('admin_id') ?>"><i style="margin-right: 10px"; class="fa-sharp fa-solid fa-right-from-bracket"></i>Đăng Xuất</a>
                    
                </li>
            </ul>
        </div>