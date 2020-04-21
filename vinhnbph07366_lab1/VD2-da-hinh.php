<?php

class HinhHoc
{
    function Ve(){}
    function tinh_Dien_Tich(){}
}
class HinhVuong extends HinhHoc
{

    public $canh = 0;
    function Ve()
    {
        echo 'Vẽ Hình Vuông';
    }
}
class HinhChuNhat extends HinhHoc
{
    public function Ve()
    {
        echo 'Vẽ Hình Chữ Nhật';
    }
}
$HinhChuNhat = new HinhChuNhat();
$HinhChuNhat->Ve();
echo '<br/>';
$HinhVuong = new HinhVuong();
$HinhVuong->Ve();


?>