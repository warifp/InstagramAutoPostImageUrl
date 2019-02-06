<?
//@@ Author : Wahyu Arif P
//@@ Date   : 07 Februari 2019
//@@ File   : Instagram Auto Post URL

$username = '####WAHYU ARIF P####'; // MASUKKAN USERNAME
$password = '####WAHYU ARIF P####'; // MASUKKAN PASSWORD

$photoFilename = "rand.jpg";

$debug = false;
$truncatedDebug = true;

// EDIT CAPTION DISINI!

function randCaption($rand)
{
    switch ($rand) {
        case '1':$name = "CAPTION 1";
            break;
        case '2':$name = "CAPTION 2";
            break;
        case '3':$name = "CAPTION 3";
            break;
        case '4':$name = "CAPTION 4";
            break;
        case '5':$name = "CAPTION 5";
            break;
    }return $name;
}

// EDIT URL GAMBAR DISINI!
function randImageURL($rand)
{
    switch ($rand) {
        case '1':$name = "URL 1";
            break;
        case '2':$name = "URL 2";
            break;
        case '3':$name = "URL 3";
            break;
        case '4':$name = "URL 4";
            break;
        case '5':$name = "URL 5";
            break;
    }return $name;
}