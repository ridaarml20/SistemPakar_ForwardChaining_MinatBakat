<?php

function answer($kode){
    if($kode=='C1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C8'>Tidak</a>";
    }
    if($kode=='C2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C8'>Tidak</a>";
    }


    if($kode=='C3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C8'>Tidak</a>";
    }
    if($kode=='C4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C8'>Tidak</a>";
    }
    if($kode=='C5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C8'>Tidak</a>";
    }

    if($kode=='C6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C7'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C8'>Tidak</a>";
    }

    if($kode=='C7'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S1'>Tidak</a>";
    }


    if($kode=='C8'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C9'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }    
    if($kode=='C9'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C10'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C10'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C11'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }

    if($kode=='C11'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C12'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C12'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C13'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C13'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C14'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C14'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C15'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }

    if($kode=='C15'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S2'>Tidak</a>";
    }


    if($kode=='C16'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C17'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C23'>Tidak</a>";
    }
    if($kode=='C17'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C18'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C23'>Tidak</a>";
    }
    if($kode=='C18'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C19'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C23'>Tidak</a>";
    }
    if($kode=='C19'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C20'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C23'>Tidak</a>";
    }    
    if($kode=='C20'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C21'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C23'>Tidak</a>";
    }
    if($kode=='C21'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C22'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C23'>Tidak</a>";
    }
    if($kode=='C22'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=MB3>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=S3'>Tidak</a>";
    }

    if($kode=='C23'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C24'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C30'>Tidak</a>";
    }

    if($kode=='C24'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C25'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C30'>Tidak</a>";
    }

    if($kode=='C25'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C26'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C30'>Tidak</a>";
    }

    if($kode=='C26'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C27'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C30'>Tidak</a>";
    }

    if($kode=='C27'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C28'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C30'>Tidak</a>";
    }

    if($kode=='C28'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C29'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C30'>Tidak</a>";
    }

    if($kode=='C29'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S3'>Tidak</a>";
    }



    if($kode=='C30'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C31'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }

    if($kode=='C31'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C32'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }

    if($kode=='C32'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C33'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }
    if($kode=='C33'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C34'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }    
    if($kode=='C34'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C35'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }
    if($kode=='C35'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C36'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }
    if($kode=='C36'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C37'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C38'>Tidak</a>";
    }
    if($kode=='C37'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S2'>Tidak</a>";
    }

    
    if($kode=='C38'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C39'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C45'>Tidak</a>";
    }    
    if($kode=='C39'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C40'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C45'>Tidak</a>";
    }
    if($kode=='C40'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C41'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C45'>Tidak</a>";
    }

    if($kode=='C41'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C42'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C45'>Tidak</a>";
    }
    if($kode=='C42'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C43'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C45'>Tidak</a>";
    }
    if($kode=='C43'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C44'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C45'>Tidak</a>";
    }
    if($kode=='C44'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S4'>Tidak</a>";
    }


    if($kode=='C45'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C46'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C52'>Tidak</a>";
    }


    if($kode=='C46'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C47'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C52'>Tidak</a>";
    }
    if($kode=='C47'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C48'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C52'>Tidak</a>";
    }
    if($kode=='C48'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C49'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C52'>Tidak</a>";
    }
    if($kode=='C49'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='questioni.php?kode=C50'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C52'>Tidak</a>";
    }    
    if($kode=='C50'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C51'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C52'>Tidak</a>";
    }
    if($kode=='C51'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB7'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
    }


    if($kode=='C52'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C53'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C60'>Tidak</a>";
    }

    if($kode=='C53'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C54'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }    
    if($kode=='C54'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C55'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C55'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C56'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }

    if($kode=='C56'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C57'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C57'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C58'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C58'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C59'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C16'>Tidak</a>";
    }
    if($kode=='C59'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB8'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S2'>Tidak</a>";
    }


    if($kode=='C60'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C61'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
    }


    if($kode=='C61'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C62'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S2'>Tidak</a>";
    }
    if($kode=='C62'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C63'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
    }
    if($kode=='C63'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C64'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
    }
    if($kode=='C64'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C65'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
    }    
    if($kode=='C65'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=C66'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=S5'>Tidak</a>";
    }
    if($kode=='C66'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=MB9'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
    }
   
}

function kesimpulan($jurusan){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$jurusan' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='MB1') {
        $jurusan = "Linguistik";
        kesimpulan($jurusan);        
    }
    if ($kode=='MB2') {
        $jurusan = "Logika-Matematika";
        kesimpulan($jurusan);
    }
    if ($kode=='MB3') {
        $jurusan = "Visual-Spasial";
        kesimpulan($jurusan);
    }
    if ($kode=='MB4') {
        $jurusan = "Kinestik";
        kesimpulan($jurusan);
    }
    if ($kode=='MB5') {
        $jurusan = "Musikal";
        kesimpulan($jurusan);
    }
    if ($kode=='MB6') {
        $jurusan = "Interpersonal";
        kesimpulan($jurusan);
    }
    if ($kode=='MB7') {
        $jurusan = "Intrapersonal";
        kesimpulan($jurusan);
    }
    if ($kode=='MB8') {
        $jurusan = "Naturalis";
        kesimpulan($jurusan);
    }
    if ($kode=='MB9') {
        $jurusan = "Eksistensial";
        kesimpulan($jurusan);
    }
    if ($kode=='S1') {
        $jurusan = "x-1";
        kesimpulan($jurusan);
    }
    if ($kode=='S2') {
        $jurusan = "x-2";
        kesimpulan($jurusan);
    }
     if ($kode=='S3') {
        $jurusan = "x-3";
        kesimpulan($jurusan);
    }
    if ($kode=='S4') {
        $jurusan = "x-4";
        kesimpulan($jurusan);
    }
    if ($kode=='S5') {
        $jurusan = "x-5";
        kesimpulan($jurusan);
    }
    
}


?>