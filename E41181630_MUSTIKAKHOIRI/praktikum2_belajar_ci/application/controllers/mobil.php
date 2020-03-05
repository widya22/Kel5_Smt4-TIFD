<?php
//mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');

/**	URI (Uniform Resource Identifier) digunakan untuk membantu mengambil data yang diberikan user melalui url codeigniter.
 * Penyebutan uri segment adalah seperti segment 1, segment 2, segment 3, dan seterusnya.
 * Semakin banyak data yang diberikan user pada url, maka semakin tinggi juga angka yang digunakan dalam function segment URI.
 */





// membuat class Mobil yang mewarisi sifat dari class CI_Controller
class Mobil extends CI_Controller {
	
	public function warna(){
		// $this->uri->segment('') digunakan untuk menampilkan isi data dari URI setiap segment
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>";	//menampilkan isi dari URI segment 1	
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";	//menampilkan isi dari URI segment 2	
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>";	//menampilkan isi dari URI segment 3	
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>";	//menampilkan isi dari URI segment 4
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";	//menampilkan isi dari URI segment 5
	}
}