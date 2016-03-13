<?
 $conn =mysql_connect("localhost","indonesi_liv1",".abo4rds");
 if ($conn) 
 {
   echo("Success to connect to database!");
 } else {
   echo("Fail to connect to database!");
 }

mysql_query("use indonesi_liveaboard1");



$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_04_D','Maumere','Maumere/Maumere','15','07','2005','-','22','07','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.340 - 2.725','7D/7N','Twin Bed Cabin: US$ 2,340 per person Deluxe Double/Twin Cabin: US$ 2,560 per person Master State Room: US$ 2,725 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}
/*
$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_05_C','Maumere','Bima/Maumere','24','07','2005','-','03','08','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 3.165 - 3.715','10D/10N','Twin Bed Cabin: US$ 3,165 per person Deluxe Double/Twin Cabin: US$ 3,415 per person Master State Room: US$ 3,715 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_06_B','Bima','Bima/Bima','05','08','2005','-','10','08','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 1.670 - 1.945','5D/5N','Twin Bed Cabin: US$ 1,670 per person Deluxe Double/Twin Cabin: US$ 1,795 per person Master State Room: US$ 1,945 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_07_C','Maumere','Bima/Maumere','12','08','2005','-','22','08','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 3.165 - 3.715','10D/10N','Twin Bed Cabin: US$ 3,165 per person Deluxe Double/Twin Cabin: US$ 3,415 per person Master State Room: US$ 3,715 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_08_D','Maumere','Maumere/Maumere','24','08','2005','-','31','08','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.340 - 2.725','7D/7N','Twin Bed Cabin: US$ 2,340 per person Deluxe Double/Twin Cabin: US$ 2,560 per person Master State Room: US$ 2,725 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_09_D','Maumere','Maumere/Maumere','02','09','2005','-','09','09','2005','-','boats/mvanggun.php','boats/myanggun_schedule.php','Luxury','US$ 2.340 - 2.725','7D/7N','Twin Bed Cabin: US$ 3,165 per person Deluxe Double/Twin Cabin: US$ 3,415 per person Master State Room: US$ 3,715 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_10_C','Bima','Bima/Maumere','11','09','2005','-','21','09','2005','-','boats/mvanggun.php','boats/myanggun_schedule.php','Luxury','US$ 3.165 - 3.715','10D/10N','Twin Bed Cabin: US$ 3,165 per person Deluxe Double/Twin Cabin: US$ 3,415 per person Master State Room: US$ 3,715 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_11_B','Bima','Bima/Bima','23','09','2005','-','28','09','2005','-','boats/mvanggun.php','boats/myanggun_schedule.php','Luxury','US$ 1.670 - 1.945','5D/5N','Twin Bed Cabin: US$ 1,670 per person Deluxe Double/Twin Cabin: US$ 1,795 per person Master State Room: US$ 1,945 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_12_B','Bima','Bima/Bima','30','09','2005','-','05','10','2005','-','boats/mvanggun.php','boats/myanggun_schedule.php','Luxury','US$ 1.670 - 1.945','5D/5N','Twin Bed Cabin: US$ 1,670 per person Deluxe Double/Twin Cabin: US$ 1,795 per person Master State Room: US$ 1,945 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','IN_13_A','Bima','Bali/Bima','07','10','2005','-','17','10','2005','-','boats/mvanggun.php','boats/myanggun_schedule.php','Luxury','US$ 3.090 - 3.640','10D/10N','Twin Bed Cabin: US$ 3,090 per person Deluxe Double/Twin Cabin: US$ 3,340 per person Master State Room: US$ 3,640 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_01_B','Myanmar (Burma)','Phuket/Phuket-Thailand','19','11','2005','-','28','11','2005','-','boats/mvanggun.php   ','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_02_C','Similan Islands','Phuket/Phuket-Thailand','29','10','2005','-','06','11','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 1.800 - 2.130','6D/7N','Twin Bed Cabin: US$ 1,800 per person Deluxe Double/Twin Cabin: US$ 1,950 per person Master State Room: US$ 2,130 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_03_B','Myanmar (Burma)','Phuket/Phuket-Thailand','07','12','2005','-','16','12','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9D','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_04_S1','Similan and Southern Islands','Phuket/Phuket-Thailand','17','12','2005','-','28','12','2005','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 3.000 - 3.550','10D/11N','Twin Bed Cabin: US$ 3,000 per person Deluxe Double/Twin Cabin: US$ 3,250 per person Master State Room: US$ 3,550 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_05_S2','Myanmar (Burma)','Phuket/Phuket-Thailand','29','12','2005','-','09','01','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 3.000 - 3.550','10D/11N','Twin Bed Cabin: US$ 3,000 per person Deluxe Double/Twin Cabin: US$ 3,250 per person Master State Room: US$ 3,550 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_07_B','Myanmar (Burma)','Thailand','20','01','2006','-','29','01','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_08_A','Similan and Southern Islands','Similan and Southern Islands','30','01','2006','-','08','02','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_09_B','Myanmar (Burma)','Thailand','09','02','2006','-','18','02','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_10_A','Similan and Southern Islands','Similan and Southern Islands','19','02','2006','-','28','02','2006','-','boats/mvanggun.php','boats/myanggun_schedule.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_11_B','Myanmar (Burma)','Thailand','01','03','2006','-','10','03','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_12_A','Similan and Southern Islands','Phuket/Phuket-Thailand','11','03','2006','-','20','03','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_13_B','Myanmar (Burma)','Phuket/Phuket-Thailand','22','03','2006','-','31','03','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_06_A','Similan and Southern Islands','Phuket/Phuket-Thailand','10','01','2006','-','19','01','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_15_B','Myanmar (Burma)','Phuket/Phuket-Thailand','11','04','2006','-','20','04','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_17_B','Myanmar (Burma)','Phuket/Phuket-Thailand','01','05','2006','-','10','05','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_14_A','Similan and Southern Islands','Phuket/Phuket-Thailand','01','04','2006','-','10','04','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('001','MY Anggun','Yacht','AN_16_A','Similan and Southern Islands','Phuket/Phuket-Thailand','21','04','2006','-','30','04','2006','-','boats/mvanggun.php','boats/myanggun_divedestinations.php','Luxury','US$ 2.400 - 2.840','8D/9N','Twin Bed Cabin: US$ 2,400 per person Deluxe Double/Twin Cabin: US$ 2,600 per person Master State Room: US$ 2,840 per person');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_01_B','Togian Islands','Luwuk/Luwuk-Sulawesi','14','07','2005','-','22','07','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','US$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_02_B','Togian Islands','Luwuk/Luwuk-Sulawesi','24','07','2005','-','01','08','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_03_B','Togian Islands','Luwuk/Luwuk-Sulawesi','04','08','2005','-','12','08','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_04_B','Togian Islands','Luwuk/Luwuk-Sulawesi','14','08','2005','-','22','08','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P.1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_05_B','Togian Islands','Luwuk/Luwuk-Sulawesi','25','08','2005','-','02','09','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_06_B','Togian Islands','Luwuk/Luwuk-Sulawesi','08','09','2005','-','16','09','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_07_B','Togian Islands','Luwuk/Luwuk-Sulawesi','18','09','2005','-','26','09','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_08_A','Togian Islands','Luwuk/Luwuk-Sulawesi','28','09','2005','-','05','10','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.028','7 Nights','Shared cabin, p/P.1.028 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_09_B','Togian Islands','Luwuk/Luwuk-Sulawesi','06','10','2005','-','14','10','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_10_C','Togian Islands','Luwuk/Luwuk-Sulawesi','16','10','2005','-','28','10','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 1.275-1.655','12 Nights','Shared cabin, p/P.1.655 US$ Non diver or snorkeller 1275 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','TG_11_C','Togian Islands','Luwuk/Luwuk-Sulawesi','30','10','2005','-','11','11','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 1.275-1.655','12 Nights','Shared cabin, p/P.1.655 US$ Non diver or snorkeller 1275 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','BA_01_B','Banggai Islands','Luwuk/Luwuk-Sulawesi','13','11','2005','-','21','11','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','BA_02_B','Banggai Islands','Luwuk/Luwuk-Sulawesi','23','11','2005','-','01','12','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','BA_03_B','Banggai Islands','Luwuk/Luwuk-Sulawesi','04','12','2005','-','12','12','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','BA_04_B','Banggai Islands','Luwuk/Luwuk-Sulawesi','15','12','2005','-','23','12','2005','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('002','Wallacea','Wooden Boat','BA_05_B','Banggai Islands','Luwuk/Luwuk-Sulawesi','29','12','2005','-','06','01','2006','-','boats/wallacea.php','boats/wallacea_divecruises.php','Standard','U$ 850-1.175','8 Nights','Shared cabin, p/P. 1.175 US$ Non diver or snorkeller 850 US$');"; 
$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','LOM_01_A','Lombok','Bali/Bali','21','07','2005','-','24','07','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 600-660 p.P','4days/3N','600 U$ Non Diver,660 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_01_A','Komodo','Bali/Bali','28','07','2005','-','04','08','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.440-1.580 p. P.','8 days/7N','1.440 U$ Non Diver,1.580 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','LOM_02_A','Lombok','Bali','18','08','2005','-','21','08','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 600-660','4days/3n','600 U$ Non Diver,660 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_02_A','Komodo','Bali','25','08','2005','-','01','09','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.440-1.580','8days/7N','1.440 U$ Non Diver,1.580 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_03_B','Komodo','Bali/Bali','04','09','2005','-','13','09','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.640-1.820','10days/9N','1.640 U$ Non Diver,1.820 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','LOM_03_A','Lombok','Bali/Bali','15','09','2005','-','18','09','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 600-660','4days/3N','600 U$ Non Diver,660 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_04_A','Komodo','Bali/Bali','23','09','2005','-','30','09','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.440-1.580','8days/7N','1.440 U$ Non Diver,1.580 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_05_B','Komodo','Bali/Bali','02','10','2005','-','11','10','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.640-1.820','10days/9N','1.640 U$ Non Diver,1.820 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','LOM_04_A','Lombok','Bali/Bali','13','10','2005','-','16','10','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 600-660','4days/3N','600 U$ Non Diver,660 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_06_A','Komodo','Bali/Bali','23','10','2005','-','31','10','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.440-1.580','8days/7N','1.440 U$ Non Diver,1.580 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','LOM_05_A','Lombok','Bali/Bali','03','11','2005','-','06','11','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 600-660','4days/7N','600 U$ Non Diver,660 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','KOM_07_B','Komodo','Bali/Bali','08','11','2005','-','17','11','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.640-1.820','10days/9N','1.640 U$ Non Diver,1.820 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('003','Moana','Schoner','SUL_01_B','Sulawesi','Bali/Sulawesi','21','11','2005','-','30','11','2005','-','boats/moana_cruising.php','boats/moana_divedestinations.php','Standard','U$ 1.640-1.820','10 days/9N','1.640 U$ Non Diver,1.820 U$ Diver');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('004','Baruna','Motorboat','BKF-8','Bali-Komodo-Flores ','Bali/Flores','16','08','2005','-','22','08','2005','-','boats/baruna_index.php','boats/baruna_divedestinations.php','Standard','U$ 1.349-1.499','8days/7N','C-Deck 1.349 U$,A/B Deck 1.499 U$,Single suppl. 549-599 U$');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schooner','12-05B','Komodo','Bima/Bali','25','07','2005','-','01','08','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schooner','17-05','Komodo','Bali/Maumere','03','09','2005','-','15','09','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schooner','18-05','Komodo/Wakatobi','Maumere/Kendari','16','09','2005','-','28','09','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','19-05','Wakatobi','Kendari/Kendari','30','09','2005','-','11','10','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','20-05','Wakatobi/Flores','Kendari/Maumere','13','10','2005','-','24','10','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','21-05','Flores-Komodo-Bali','Maumere/Bali','25','10','2005','-','05','11','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','22-05','Komodo','Bali/Bima','07','11','2005','-','15','11','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','8 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','23-05','Komodo/Nudi Branch Charter','Bima/Bali','15','11','2005','-','26','11','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','24-05','Komodo-Digital Seminar','Bali/Komodo','28','11','2005','-','10','12','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','25-05','Komodo-Digital Seminar','Komodo/Bali','11','12','2005','-','23','12','2005','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','26-05','Komodo','Bali/Bali','24','12','2005','-','04','01','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','01-06','Komodo','Bali/Bali','06','01','2006','-','17','01','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','02-05','Komo./Alor/Weta/Banda/Misool/Rj.Empat','Bali/Sorong','18','02','2006','-','05','03','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','15 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','03-06','West Irian Jaya','Sorong/Sorong','18','03','2006','-','19','03','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','05-06','West Irian Jaya','Sorong/Sorong','21','03','2006','-','01','04','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','06-06','West Irian Jaya','Sorong/Sorong','03','04','2006','-','14','04','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','07-06','West Irian Jaya','Sororng.Sorong','16','04','2006','-','27','04','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','08-06','West Irian Jaya','Sororng/Sororng','29','04','2006','-','10','05','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','09-06','Misool/Raja Empat/Banda/Alor/Flores','Sororng/Maumere','12','05','2006','-','26','05','2006','-','oats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','14 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','10-06','Flores-Komodo','Maumere/Bima','19','07','2005','-','20','07','2005','-','oats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','11-06','Komodo','Bali/Bima','27','05','2006','-','07','06','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','12-06','Komodo','Bima/Bali','23','06','2006','-','04','07','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','14-06','Komodo','Bali/Bali','04','07','2006','-','15','07','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','15-06','Komodo-Family Cruise','Bali/Bima','17','07','2006','-','24','07','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','16-06','Komodo-Family Cruise','Bima/Bali','24','07','2006','-','31','07','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','17-06','Komodo','Bali/Bima','02','08','2006','-','13','08','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','18-06','Komodo','Bima/Bali','13','08','2006','-','24','08','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','19-06','Komodo','Bali/Bali','26','08','2006','-','06','09','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','20-06','Komodo','Bali/Bima','11','08','2006','-','22','08','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','21-06','Komodo','Bima/Bali','22','09','2006','-','29','09','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','22-06','Komodo','Bali/Bima','01','10','2006','-','08','10','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','23-06a','Komodo','Bima/Bima','08','10','2006','-','15','10','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x ','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','23-06','Komodo','Bima/Bali','16','10','2006','-','27','10','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','7 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','24-06','Komodo-Wakatobi','Bali/Maumere','29','10','2006','-','10','11','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','25-06','Flores-Wakatobi','Maumere/Kendari','11','11','2006','-','23','11','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','26-06','Wakatobi / Flores - Digital Seminar','Kendari/Maumere','25','11','2006','-','07','12','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','27-06','Flores / Komodo - Digital Seminar','Maumere/Bali','08','12','2006','-','20','12','2006','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','12 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','28-06','Komodo','Bali/Bali','22','12','2006','-','02','01','2007','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 
if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}

$dump = "insert into cruise values('005','Sea Safari','Schoner','29-06','Komodo','Bali/Bali','04','01','2007','-','15','01','2007','-','boats/seasafari_index.php','boats/seasafari_divedestinations.php','Luxury','x','11 Nights','-');"; 
$go_dump = mysql_query($dump); 

if ($go_dump) {
     echo ("<br>data berhasil insert!");
} else {
     echo ("<br>data GAGAL diinsert!");  
}
*/

?>
