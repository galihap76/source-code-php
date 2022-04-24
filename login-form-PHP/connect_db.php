<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "users");

//registrasi 
function registrasi($data){
    //ambil objek global variabel $conn
	global $conn;
	 //ambil data dari form registrasi.php
	$username = stripslashes(mysqli_real_escape_string($conn, $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");
	
    //cek jika username nya sudah ada sebelumnya
	if(mysqli_fetch_assoc($result)){
        //maka tampilkan
		echo "
		   <script>
		   alert('Username sudah terdaftar!');
		   </script>
		";
		return false;
	}
	
	//cek jika konfirmasi password nya tidak sesuai
	if($password!==$password2){
        //maka tampilkan
		echo "<script>
		 alert('Konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);	
	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$username', '$password')");   
     //simpan data ke database  	
	return mysqli_affected_rows($conn);
}

//lupa password
function lupaPassword($data){
    //ambil objek global variabel $conn
	global $conn;
	 //ambil data dari form lupa-password.php
	$username = stripslashes(mysqli_real_escape_string($conn, $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);	
    
	//cek jika konfirmasi password nya tidak sesuai
	if($password!==$password2){
         //maka tampilkan
		echo "<script>
		 alert('Konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	//ganti password
	mysqli_query($conn, "UPDATE tb_user SET password='$password' WHERE username = '$username'");
     //simpan data ke database
	return mysqli_affected_rows($conn);
}

?>