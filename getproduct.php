

        <script src="assets/js/plugins.js"></script>


<?php
define('PREPEND_PATH', '../');
$hooks_dir = dirname(__FILE__);
include("../../autostore/defaultLang.php");
include("../../autostore/language.php");
include("../../autostore/lib.php");



$us_id1 = sql("SELECT * FROM products WHERE product_custom_field4 = 'online' ORDER by id", $eo);

$num_id1   = mysqli_num_rows($us_id1);

if ($num_id1 > 0){

while ($rowid = mysqli_fetch_array($us_id1)) {

$proid      = $rowid['id'];

$pro_price = sqlValue("SELECT default_sell_price FROM `variations` WHERE product_id='$proid' limit 1");



	echo'




                            <div class="product">
                                <div class="top-product">
                                    <h4>'.$rowid['name'].' </h4>
                                    <img src="https://autostore-eg.com/pos/public/uploads/img/'.$rowid['image'].'" alt="" class="img-fluid" style="height: 150px">
                                    <div class="price"> '.$pro_price.' EGP </div>
                                </div>
                                <div class="bottom-product">
                                    <div class="qty">
                                        <button type="button" class="minusBtn">
                                            <img src="assets2/img/icons/minusCircle.png" class="minusImg" alt="">
                                            <img src="assets2/img/icons/minusCircleColor.png" class="minusCircleColorImg" alt="">
                                        </button>
                                        <input type="number" name="'.$proid.'" min="0" class="text-center" value="0">
                                        <button type="button" class="plusBtn">
                                            <img src="assets2/img/icons/plusCircle.png" class="plusCircleImg" alt="">
                                            <img src="assets2/img/icons/plusCircleColor.png" class="plusCircleColorImg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>




                            ';
}
}
                            ?>


