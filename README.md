# SAT
Project untuk sistem absensi tutor HIMSI bidang Keilmuan

#hirarki singkat
1. Untuk Folder sat-fixed, folder ini memuat sistem sat versi awal (belum terjadi perubahan database)
2. Untuk Folder sat-fixed-r1, folder ini memuat sistem sat versi pengembangan (implementasi perubahan database) (suggested bingits)

#Panduan install :

1. Sebelumnya, import dulu script sql (sat_fixed.sql)

2. Buka file Pentutor.php (sat-fixed/applications/models/)

3. Ganti semua method __construct pada applications/models/ sebelum melakukan instalasi

4. Pada file tersebut, dalam method __construct(), ganti seperlunya pada bagian $config
	 Bagian yang diganti pada config :

	 	$config['hostname'] = "localhost"; --> Definisikan hostname anda

		$config['dbdriver'] = "mysqli"; --> Default menggunakan ini, karena yang sebelumnya deprecated :)

		$config['database'] = "mydb"; --> Definisikan schema database yang ingin anda gunakan

		$config['username'] = 'root'; --> Definisikan username yang dapat mengakses database client anda

		$config['password'] = ''; --> Definisikan password database client anda disini, biasanya tidak ada password

4. Copy folder sat-fixed ke directory htdocs

5. Buka browser, ketik url : localhost/sat-fixed/

*Catatan :
1. Mengerjakan controller c_php_excel_class.php untuk mencetak absen mahasiswa yang ikut tutorial
2. Controller c_php_excel_class.php belum pada view yang tepat (seharusnya berada di viewabsen.php)
3. 

#Developer

1. Kenny Karnama
2. Halimatuz Zuhriyah
3. Zafitra Ramadani
4. Pratomo Adi Atmaji
