<?php
$servername = "localhost"; // MySQL sunucu adı
$username = "root"; // MySQL kullanıcı adı
$password = "nisa2002"; // MySQL şifre
$database = "mizu"; // MIZU Restoranı için veritabanı adı

// MySQL bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
echo "Veritabanına başarıyla bağlandı";

// SQL sorguları
$sql1 = "CREATE TABLE musteriler (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ad VARCHAR(30) NOT NULL,
soyad VARCHAR(30) NOT NULL,
email VARCHAR(50),
telefon VARCHAR(15)
)";

$sql2 = "CREATE TABLE contacts (
id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(50),
last_name VARCHAR(50),
email VARCHAR(100),
phone VARCHAR(20),
address VARCHAR(255)
)";

// Sorguları çalıştır
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "Tablolar oluşturuldu";
} else {
    echo "Tablolar oluşturulamadı: " . $conn->error;
}

// Bağlantıyı kapat
$conn->close();
?> 


