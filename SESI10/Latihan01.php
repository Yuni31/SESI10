<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 1</title>
</head>
<body>

     <form name="Latihan01.php" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNama">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJurusan">
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
            <input type="checkbox" name="Musik">Musik
            <input type="checkbox" name="Tari">Tari
            <input type="checkbox" name="Membaca">Membaca
            <input type="checkbox" name="Joging">Joging
            <input type="checkbox" name="Lari">Lari
            <input type="checkbox" name="Tidur">Tidur
            <input type="checkbox" name="Makan">Makan
            <input type="checkbox" name="Menangis">Menangis
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
     </form>


     <script>
        function checkform (frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            console.log("NIM: "+nim); 
            let Nama = f.namedItem("txNama").value;   
            console.log("Nama: "+Nama);    
            let JenisKelamin = f.namedItem("txJK").value;   
            console.log("JK: "+JenisKelamin); 
            let Jurusan = f.namedItem("txJurusan").value;   
            console.log("Jurusan: "+Jurusan);   
            let Hobby_Musik = f.namedItem("Musik").checked;
            let Hobby_Tari = f.namedItem("Tari").checked;
            let Hobby_Membaca= f.namedItem("Membaca").checked;   
            let Hobby_Joging = f.namedItem("Joging").checked;
            let Hobby_Lari = f.namedItem("Lari").checked;
            let Hobby_Tidur = f.namedItem("Tidur").checked;
            let Hobby_Makan= f.namedItem("Makan").checked;
            let Hobby_Menangis= f.namedItem("Menangis").checked;
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