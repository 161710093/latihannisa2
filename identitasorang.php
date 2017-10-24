<?php

require_once 'identitas.php';
$identitas = new identitas('Annisa','Bandung','XI RPL 2','Single');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('Nisa','Jakarta','XI RPL 1','Jomblo');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('Anha','Garut','XI TKR 1','Menikah');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('Nifi','Majalengka','XI TKR 2','Pacaran');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";


$identitas = new identitas('Icha-Cha','Sumedang','XI TSM 2','Silita Jofisa');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";


?>