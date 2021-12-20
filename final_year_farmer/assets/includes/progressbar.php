<?php 
$total = rand(1,100);
$current = rand(1,$total);

$percent =round(($current/$total)*100,1);

?>

<style type="text/CSS">
.outer{

    height: 25px;
    width: 100px;
  border:solid 1px lightblue;
}

.inner{

height: 25px;
width: <?=$percent?>;

background-color: lightblue;
}

</style>


<div class="outer">
    <div class="inner"></div>
</div>