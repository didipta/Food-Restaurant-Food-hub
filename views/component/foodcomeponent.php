<?php
function foodproducts($poproductname,$poproductprice,$productimg ,$producttype){
    $elemented="  
     <div class='food $producttype'>
     <img src='$productimg'>
    <h3>$poproductname</h3>
    <h4>$poproductprice</h4>
    </div>

    ";
    echo $elemented;
}
?>