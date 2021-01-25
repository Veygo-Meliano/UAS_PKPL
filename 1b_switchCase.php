<?php

class PrismaSegitiga
{
    public function luasPermukaanPrismaSegitiga($kelilingAlas, $tinggi, $luasAlasSegitiga)
    {
        echo "Luas Permukaan Segitiga Adalah : " . (($kelilingAlas * $tinggi) + (2 * $luasAlasSegitiga));
    }
    public function volumePrismaSegitiga($alas, $tinggi, $TinggiPrisma)
    {
        echo "Volume Prisma Segitiga Adalah : " . ((($alas * $tinggi)/2 * $TinggiPrisma));  
    }
    public function noChoice()
    {
        echo "Anda tidak memilih";
    }  

    public function hitung($pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $alas, $TinggiPrisma)
    {
        switch ($pilihan){
            case 'Luas Permukaan Prisma Segitiga':
                $this->luasPermukaanPrismaSegitiga($kelilingAlas, $tinggi, $luasAlasSegitiga);
                break;
            case 'Volume Prisma Segitiga':
                $this->volumePrismaSegitiga($alas, $tinggi, $TinggiPrisma);
                break;
            default:
            $this->noChoice($kelilingAlas, $tinggi, $luasAlasSegitiga, $alas, $TinggiPrisma);    
        }
    }
}
$kelilingAlas = 5;
$tinggi = 3;
$luasAlasSegitiga = 10;
$alas = 2;
$TinggiPrisma = 10;
$pilihan = new PrismeSegitiga;
$pilihan->hitung('Luas', $pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $alas, $TinggiPrisma);