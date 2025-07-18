
<?php
define('PREPEND_PATH', '../');
$hooks_dir = dirname(__FILE__);
include("../../autostore/defaultLang.php");
include("../../autostore/language.php");
include("../../autostore/lib.php");

$country   = isset($_GET['country']) ? $_GET['country'] : '';

$query1 = sql("SELECT * FROM bosta_zoon WHERE id = '$country' limit 1", $eo);
$in_re1 = mysqli_num_rows($query1);
if ($in_re1 > 0){
$row1     = mysqli_fetch_array($query1);
$countid = $row1['city_name_ar'];
}

?>

<ul class="custom-options list-unstyled">
<?php
            $us_con1 = sql("SELECT * FROM bosta_zoon WHERE city_name_ar = '$countid' GROUP BY zoneName", $eo);
            while ($row2 = mysqli_fetch_array($us_con1)) { ?>
            <li  data-value="<?php echo $row2['zoneName']?>" id="<?php echo $row2['id']?>" onclick="getCity(this)" > <span> <?php echo $row2['zoneName']?> </span> </li>
            <?php } ?>

 </ul>



