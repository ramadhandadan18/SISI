<?php

namespace Kantor;

include 'OOP.php';


	final class Tugas extends Pegawai{
		public $tugasMulai;
		public $tugasSelesai;
		public $StatusLembur
		
		public function settugasMulai($tugasMulai){
			$this -> tugasMulai = $tugasMulai;
		}
		
		public function settugasSelesai($tugasSelesai){
			$this -> tugasSelesai =$tugasSelesai;
		}
	}

	//interface Kamar{
		//public function getNomerKamar();
	//}

$info = new  Pegawai();
//echo $info -> getInformasi ("Poli Syaraf");
echo "<br/>";

	
$Pegawai = new Tugas();
$Pegawai -> settugasMulai ("08.00");
$Pegawai -> settugasSelesai ("17.00");
$Pegawai -> setstatusLembur ("Y/N");

echo "<br/>";
echo "Waktu bertugas :";
echo "<br/>";
echo "<br/>";
echo "Mulai bertugas : ", $tugasMulai -> tugasMulai;
echo "<br/>";
echo "Selesai bertugas : ", $tugasSelesai -> tugasSelesai;
echo "<br/>";
echo "<br/>";
echo "Status Lembur : ", $StatusLembur -> StatusLembur;
echo "<br/>";
?>