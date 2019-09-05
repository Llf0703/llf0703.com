<?php
$lg=$this->fields->luogu;

if (isset($lg)) {

$db = Typecho_Db::get();
$dif = $db->fetchRow($db->select('dif')->from('table.ldt')->where('id = ?' , $lg));
$dif = $dif['dif'];

?>

<?php if ($dif==0){?>
    <span class="badge lg-bg-gray">尚无评定</span>
<?php }else if ($dif==1){?>
    <span class="badge lg-bg-red">入门难度</span>
<?php }else if ($dif==2){?>
    <span class="badge lg-bg-orange">普及-</span>
<?php }else if ($dif==3){?>
    <span class="badge lg-bg-yellow">普及/提高-</span>
<?php }else if ($dif==4){?>
    <span class="badge lg-bg-green">普及+/提高</span>
<?php }else if ($dif==5){?>
    <span class="badge lg-bg-bluelight">提高+/省选-</span>
<?php }else if ($dif==6){?>
    <span class="badge lg-bg-purple">省选/NOI-</span>
<?php }else if ($dif==7){?>
    <span class="badge lg-bg-bluedark">NOI/NOI+/CTSC</span>
<?php }?>
<?php }?>
