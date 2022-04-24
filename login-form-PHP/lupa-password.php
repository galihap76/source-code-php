<?php
//koneksi ke database dan function
include_once "connect_db.php";

//cek jika tombol lupa password sudah di tekan 
if(isset($_POST["lupa-password"])){
	//cek jika password berhasil di reset
	if(lupaPassword($_POST)>0){
        //maka tampilkan
		echo "
		<script>
		alert('Update password berhasil!');
		document.location.href='login.php';
		</script>
		";
        //jika gagal
	}else{
        //maka tampilkan
		echo "
		<script>
		alert('Update password gagal!');
		document.location.href='lupa-password.php';
		</script>
		";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lupa Password</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--        <link href="styles.css" rel="stylesheet" />-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4" id="username" name="username" type="text" placeholder="Username" maxlength="10" autocomplete="off" required/>                       
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Password" required/>
                                               
                                            </div>  
                                             <div class="form-group">
                                                <label class="small mb-1" for="password2">Konfirmasi Password</label>
                                                <input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Konfirmasi Password" required/>
                                               
                                            </div>                                         
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Kembali Login</a>
                                                <button type="submit" class="btn btn-primary" name="lupa-password">Ubah</a>
                                            </div>
                                        </form>
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>