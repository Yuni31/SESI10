<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>

     <form name="Latihan02.php" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim"name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNama">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="Jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="JK" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select id="Jurusan" name="txJurusan">
                <option value="TI-KAB">TI-KAB</option>
                <option value="TI-MTI">TI-MTI</option>
                <option value="DGM">DGM</option>
                <option value="DKV">DKV</option>
                <option value=" TI-PAR">TI-PAR</option>
                <option value="SK">SK</option>
            </select>
        </div>
        <div>
            Hobby
            <input type="checkbox" id="txhobby" name="Musik">Musik
            <input type="checkbox" id="txhobby" name="Tari">Tari
            <input type="checkbox" id="txhobby" name="Membaca">Membaca
            <input type="checkbox" id="txhobby" name="Joging">Joging
            <input type="checkbox" id="txhobby" name="Lari">Lari
            <input type="checkbox" id="txhobby" name="Tidur">Tidur
            <input type="checkbox" id="txhobby"name="Makan">Makan
            <input type="checkbox" id="txhobby"name="Menangis">Menangis
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
     </form>


     <script>
        function checkform(){
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            let Nama = f.nama.value;    
            let JenisKelamin = f.JK.value;   
            let Jurusan = f.Jurusan.value;     
            let Hobby_Musik = f.txhobby[0].checked;
            let Hobby_Tari = f.txhobby[1].checked;
            let Hobby_Membaca= f.txhobby[2].checked;   
            let Hobby_Joging = f.txhobby[3].checked;
            let Hobby_Lari = f.txhobby[4].checked;
            let Hobby_Tidur = f.txhobby[5].checked;
            let Hobby_Makan= f.txhobby[6].checked;
            let Hobby_Menangis= f.txhobby[7].checked;
            
            console.log("NIM: "+nim);
            console.log("Nama: "+Nama);
            console.log("JK: "+JenisKelamin);   
            console.log("Jurusan: "+Jurusan);   
            console.log("Musik: "+Hobby_Musik);   
            console.log("Musik: "+Hobby_Tari);
            console.log("Musik: "+Hobby_Membaca);
            console.log("Musik: "+Hobby_Joging);
            console.log("Musik: "+Hobby_Lari);
            console.log("Musik: "+Hobby_Tidur);
            console.log("Musik: "+Hobby_Makan);
            console.log("Musik: "+Hobby_Menangis);
            return false;
        }
     </script>



    
</body>
</html>