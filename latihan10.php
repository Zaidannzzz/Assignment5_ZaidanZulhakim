<?php
        include_once("input.php");
        function profile($namatabel,$nama,$role,$ava,$usia,$lokasi,$years,$email){
            global $conn;
            $sql = "INSERT INTO $namatabel(nama,role,availability,usia,lokasi,years,email) VALUES('$nama','$role','$ava','$usia','$lokasi','$years','$email')";
            $result = mysqli_query($conn, $sql);
        }
        if(isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $role = $_POST['role'];
            $ava = $_POST['ava'];
            $usia = $_POST['usia'];
            $lokasi = $_POST['lokasi'];
            $years = $_POST['years'];
            $email = $_POST['email'];
                    
            profile("user",$nama,$role,$ava,$usia,$lokasi,$years,$email);
        }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/sesi9/latihan4.css">
        <script src="/sesi9/latihan4.js"></script>
    </head>
    <body class="container-fluid p-4" id="container">
        <section class="row bg-white p-2 m-1 mb-4">
        <?php 
            $result = mysqli_query($conn, "SELECT * FROM user WHERE id = 9 ;"); 
            while($user = mysqli_fetch_array($result)) {
            ?>
            <img id="foto-profile" class="img-fluid rounded-circle" src="foto-profile.jpeg" alt="foto">
            <div class="col-4">
                <h2 id="nama"><?= $user['nama'] ?></h2>
                <p id="role" class="text-muted"><?= $user['role'] ?></p>
                <button class="btn btn-primary">Kontak</button>
                <button class="btn btn-outline-success">Resume</button>
            </div>
            <div class="col-2 lh-1">
                <p>Availability</p>
                <p>Usia</p>
                <p>Lokasi</p>
                <P>Pengalaman</P>
                <p>Email</p>
            </div>
            <div class="col-4 lh-1">
                <p id="ava"><?= $user['availability'] ?></p>
                <p id="usia"><?= $user['usia'] ?></p>
                <p id="lokasi"><?= $user['lokasi'] ?></p>
                <p id="years"><?= $user['years'] ?></p>
                <p id="email"><?= $user['email'] ?></p>
            </div>
            <?php } ?>
        </section>

        <form action="" name="form" id="form" class="form bg-white p-2" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="innama" placeholder="Masukan nama anda" class="form-control">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="inrole" class="form-control">
                    <option value="">Pilih</option>
                    <option value="Front End Dev">Front End Dev</option>
                    <option value="Back End Dev">Back End Dev</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ava" class="form-label">Availability</label>
                <input type="text" name="ava" id="inava" class="form-control">
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" name="usia" id="inusia" class="form-control">
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" id="inlokasi" class="form-control">
            </div>
            <div class="mb-3">
                <label for="years" class="form-label">Years Experience</label>
                <input type="number" name="years" id="inyears" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="inemail" class="form-control">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
            </div>
        </form>
    </body>
</html>