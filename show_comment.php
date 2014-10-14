<?php
	$con = mysqli_connect("localhost", "root", "", "dbblog");
	if(mysqli_connect_errno()){
		echo "Gagal menghubungkan dengan basis data blog";
	}
	
	$Id = $_GET['ID'];
	$res = mysqli_query($con, "SELECT * FROM komen WHERE ID=$Id ORDER BY Waktu DESC;");
	
	while($tabel = mysqli_fetch_array($res)){
		echo"
            <li class='art-list-item'>
                <div class='art-list-item-title-and-time'>
					<h2 class='art-list-title'><a href=''>".$tabel['Nama']."</a></h2>
                    <div class='art-list-time'>2 menit lalu</div>
				</div>
                <p>".$tabel['Komentar']."&hellip;</p>
            </li>
		";
	}
	mysqli_close($con);
?>

<script type="text/javascript" src="assets/js/ajaxcomment.js"> </script>
