<?php
class checkDaftar
{
    function daftar($nim)
    {
        if($nim == 'Terdaftar'){
            return TRUE;
        }
    }

    function main($nim)
    {
        if ($this->daftar($nim) == TRUE){
            return 'Anda Sudah Terdaftar';
        }
        else{
            return 'Anda Belum Mendaftar';
        }
    }
}
$checknim = new checkDaftar;
$cek = $checknim->main('Terdaftar');
echo $cek;
