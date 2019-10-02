<?php  
	namespace Kantor;
	namespace error;

	echo "__________DATA PEGAWAI RAMA INDUSTRIES__________";
	echo "<br />";
	echo "<br />";
		
		//1. class, 2. objek
		class pegawai{

			//3. properti
			public $id;
			public $nama;
			public $email;
			public $alamat;

			//6. konstanta
			const Gender1 = "Laki-laki";
			const Gender2 = "Perempuan";

			//4. Method, 5.Enkapsulasi, 7.Constructor	
			public function __construct(){
				
			 echo "Biodata";
    		 echo "<br />";
   			}
   			public function __destruct(){
   				echo "<br />";
    		 echo "--------------------THE END--------------------";
    		 echo "<br />";
   			}

			public function setid($id){
				$this -> id = $id;
			}
			public function setnama($nama){
				$this -> nama = $nama;
			}
			public function setIemail($email){
				$this -> email = $email;
			}
			public function setalamat($alamat){
				$this -> alamat = $alamat;
			}

			//6. konstanta
			public function getGender1(){
				return self :: Gender1;
			}
			public function getGender2(){
				return self :: Gender2;
			}
			
		}
		//8. inheritance
		class departemen extends pegawai{
			public $namaDepartemen;
			public $absenMasuk;
			public $absenKeluar;

			public function setnamaDepartemen($namaDepartemen){
				$this -> namaDepartemen = $namaDepartemen;
			}

			public function setabsenMasuk($absenMasuk){
				$this -> absenMasuk = $absenMasuk;
			}

			public function setabsenKeluar($absenKeluar){
				$this -> absenKeluar = $absenKeluar;
			}
		}	

		$pegawai = new Departemen();
		$pegawai -> setnama ("Dudung");
		$pegawai -> setId ("12345");
		$pegawai -> setIemail ("dudung@gmail.com");
		$pegawai -> getGender1();
		$pegawai -> setalamat ("JL.kesana kemari no.18");
		$pegawai -> setnamaDepartemen ("ICT");
		$pegawai -> setabsenMasuk ("07.00 WIB");
		$pegawai -> setabsenKeluar ("17.00 WIB");

		echo "<br/>";
		echo "Nama : ", $pegawai -> nama;
		echo "<br/>";
		echo "E mail : ", $pegawai -> email;
		echo "<br/>";
		echo "Gender :", $pegawai -> getGender1();
		echo "<br/>";
		echo "Alamat :", $pegawai -> alamat;
		echo "<br/>";
		echo "Departemen :", $pegawai -> namaDepartemen;
		echo "<br/>";
		echo "Absen Masuk :", $pegawai -> absenMasuk;
		echo "<br/>";
		echo "Absen Keluar :", $pegawai -> absenKeluar;
		echo "<br/>";
		echo "------------------------------------------------------------";

		$pegawai -> setnama ("Alea");
		$pegawai -> setId ("001");
		$pegawai -> setIemail ("Alea@gmail.com");
		$pegawai -> getGender2();
		$pegawai -> setalamat ("JL.Buntu");
		$pegawai -> setnamaDepartemen ("ICT");
		$pegawai -> setabsenMasuk ("07.00 WIB");
		$pegawai -> setabsenKeluar ("17.00 WIB");

		echo "<br/>";
		echo "Nama : ", $pegawai -> nama;
		echo "<br/>";
		echo "E mail : ", $pegawai -> email;
		echo "<br/>";
		echo "Gender :", $pegawai -> getGender2();
		echo "<br/>";
		echo "Alamat :", $pegawai -> alamat;
		echo "<br/>";
		echo "Departemen :", $pegawai -> namaDepartemen;
		echo "<br/>";
		echo "Absen Masuk :", $pegawai -> absenMasuk;
		echo "<br/>";
		echo "Absen Keluar :", $pegawai -> absenKeluar;
		echo "<br/>";
		echo "------------------------------------------------------------";

  	//10. exception handling
  	class Program
  	{
  	public function setnama($nama){
    	      $this -> nama = $nama; 
    	try
    	{
     	Console.Write("Masukkan Angka = ");
      	$pegawai -> nama.ToInt32(Console.ReadLine());
    	}
    	catch(Exception $pegawai)
    	{
      	Console.WriteLine("Input Pake Angka . . bukan Huruf . . .");
    	}
    	Console.Write("\nPress any key to continue . . . ");
    	Console.ReadKey(true);
      }
    }
  
?>