<?php
    
    require_once 'libfungsi.php';

    // $proses= $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $presentase_uts = (30 * ((int)$nilai_uts))/100;
    $presentase_uas = (35 * ((int)$nilai_uas))/100;
    $presentase_tugas = (35 * ((int)$nilai_tugas))/100;
    $total_nilai = $presentase_uts + $presentase_uas + $presentase_tugas;
    $grade = grade($total_nilai);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(!empty($_POST["proses"])) {
        $proses = "Berhasil";
        echo 'Proses : '.$proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
        echo '<br/> Grade : '.grade($total_nilai);
        predikat($grade);
        echo '<br/>DINYATAKAN ' .kelulusan($total_nilai);
      }
    }else{
          echo "*Format belum terisi";  
    }
?>