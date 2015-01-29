<?php
$val = $_REQUEST['val'];
$sqlSelect = "";
if($val==1){
    $sqlSelect = "Select * from ---";
}else if($val ==2){
    echo "<-";
}else if($val == 3){
    echo "-V-";
}else{
    echo "";
}

if($sqlSelect!=""){
    ?>
<form  name="formq1" action="saveCost.php">
    <input type="text" name="typesave" value="<?=$val?>">
        <LABEL>Select your cost list </LABEL>
        <select class="form-control" id="selectMet" name="selectMet"> 
            <option value="">Please Select</option>
            <option value="1">ค่าอาหาร เช้า</option>
            <option value="2">ค่าอาหาร เที่ยง</option>
            <option value="3">ค่าอาหาร เย็น</option>
        </select>
        <label>Date</label>
        <input type="date"  class="form-control datepicker" name="date" ><br>
         <label>Price</label>
        <input class="form-control text-danger" placeholder="Price" type="number" name="price">
        
</form>     
    <?php
}
?>
