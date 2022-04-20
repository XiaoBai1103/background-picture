//api:xiaobai1103.cn/img.php
<?php
$seed = time();
$num = rand(1,9);
if($num==1)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/kMBC.png";
}
elseif($num==2)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/krYv.png";
}
elseif($num==3)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/kkX4.png";
}
elseif($num==4)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/kJhT.png";
}
elseif($num==5)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/knsz.png";
}
elseif($num==6)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/kVjG.png";
}
elseif($num==7)
{
    $picpath = "img.cdn.loliloli.net/images/2022/04/19/kuX9.png";
}
elseif($num==8)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/19/kHB3.png";
}
elseif($num==9)
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/19/k6gV.png";
}
else
{
    $picpath = "https://img.cdn.loliloli.net/images/2022/04/11/kSdH.png";
}
die(header("Location: $picpath"));
?>


