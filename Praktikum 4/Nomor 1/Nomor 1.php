<!-- Nama   : Tatsbita Thifalia                 -->
<!-- NIM    : 20051397027                       -->
<!-- Kelas  : D4 Manajemen Informatika/2020A    -->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Nomor 1.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Nomor 1</h2>
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Tatsbita', 35, 20051397027); 
$dosen2 = new Dosen('Thifalia', 40, 200513970);
$dosen3 = new Dosen('Tatsbita Thifalia', 20, 200513970);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
</div>
</body>
</html>