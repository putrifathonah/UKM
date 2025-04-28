<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM</title>
</head>
<body>
    <h3>Form Pendaftaran UKM</h3>

    <form action="proses_daftar.php" method="POST">
        <input type="text" name="var_npm" placeholder="Input NPM"/>
        <br/><br/>
        <input type="text" name="var_nama" placeholder="Input Nama"/>
        <br/><br/>
        Pilihan UKM :
        <select name="var_ukm">
            <option>UKM Programming</option>
            <option>UKM Band</option>
            <option>UKM Futsal</option>
            <option>UKM Basket</option>
            <option>UKM Taekwondo</option>
        </select>
        <br><br>
        <input type="submit" value="Daftra"/>
        &nbsp;
        <input type="reset" value="Batal"/>
    </form>
</body>
</html>