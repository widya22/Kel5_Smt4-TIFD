<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/format_suratA4.css');?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
</head>
<?php 
		$no = 1;
		foreach($detailnilai as $u){ 
      $u->ID_SURAT 
		?>
<body>
    <div id="printableArea">
        <div class="page">
            <div class="subpage">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <div id="tdData" align="center">
                                    <table border="0" align="center" cellspacing="0">
                                        <tr>
                                            <td width="20%" align="center"><img src="<?php echo base_url('assets/logoPolije.png');?>" width="70%"></td>
                                            <td width="80%" align="center" id="kop">
                                                <p><strong>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</strong>
                                                    <br>
                                                    <strong>POLITEKNIK NEGERI JEMBER</strong> <br>
                                                    Jalan Mastrip Kotak Pos 164 Jember 68101 Telp. (0331) 333532-34;
                                                    Fax.
                                                    (0331)
                                                    333531 <br>
                                                    Email: <a href="#">politeknik@polije.ac.id</a>; Laman: <a
                                                        href="https://www.polije.ac.id/"
                                                        target="blank">www.polije.ac.id</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <hr>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Nomor : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; / PL17 / KN /
                                2019
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Perihal : <strong>Permohonan Ijin Survei</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Kepada Yth.</strong></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo $u->NAMA_MITRA ?>
                                </strong></td>
                        </tr>
						<?php } ?>
                        <tr>
                            <td><strong>Di <br>
                                    &nbsp; &nbsp; &nbsp; Tempat</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dengan hormat,<br>
                                    Sehubungan dengan adanya kewajiban mahasiswa untuk menyelesaikan
                                    tugas kuliah maka bersama ini kami menugaskan mahasiswa
                                    semester IV Program Studi Teknik Informatika
                                    Jurusan Teknologi Informasi yang namanya tersebut di bawah ini untuk
                                    menindaklanjuti survei pada perusahaan/instansi yang Bapak/Ibu
                                    pimpin.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Adapun nama-nama anggota kelompok yang ditugaskan adalah sebagai
                                    berikut :</p>
                            </td>
                        </tr>						
                        <table border="1 solid" cellspacing="0" cellpadding="5" id="datamahasiswa">
                            <tr align="center" id="header">
                                <th><strong>No.</strong></th>
                                <th><strong>Nama Mahasiswa</strong></th>
                                <th><strong>NIM</strong></th>
                                <th><strong>Jurusan / Prodi</strong></th>                                  
                            </tr>
							<?php 
						$noA = 1;
						foreach($detailAnggota as $DA){ 
						$DA->ID_SURAT 
						?>
                            <tr>
                                <td align="center"><?php echo $noA++ ?></td>
                                <td><?php echo $DA->ANGGOTA_MHS ?></td>
                                <td><?php echo $DA->NIM_ANGGOTA ?></td>                                
                                <td>Teknologi Informasi / <?php echo $DA->PRODI ?></td>
                                
                            </tr>
							<?php } ?>							                    
                        </table>
						
                        <p>Atas perhatian dan kerjasamanya dalam ikut peningkatan keterampilan anak didik kami,
                            diucapkan terima kasih.</p>
                        <table align="right">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>a n Direktur</td>
                            </tr> <br>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Wakil Direktur Bidang Akademik</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Surateno, S.Kom, M.Kom</td>
                            </tr> <br>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>NIP. 19790703 200312 1 001</td>
                            </tr>
                        </table>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
		window.print();
	</script>