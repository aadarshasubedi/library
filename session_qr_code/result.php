<style>
#books {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	#books  td, #books  th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	#books  tr:nth-child(even){background-color: #f2f2f2;}

	
  #books  tr:hover {background-color: #ddd;}

	#books  th {

		text-align: left;
		background-color: #4CAF50;
		color: white;
	}
	#book {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	#book  td, #book  th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	#book  tr:nth-child(even){background-color: #f2f2f2;}

	#book  tr:hover {background-color: #ddd;}

	#book  th {

		text-align: left;
		background-color: #4CAF50;
		color: white;
	}

</style>
<table id='books'>

<?php
 session_start();
$_SESSION['username']="ram";
$_SESSION['book_method']="abc";
$_SESSION['book_process']="xyz";
  /// session_start();
  // include 'login_session.php';
  session_reset();
   $_SESSION['book_method'] = $_POST['book_method'];
   //$_SESSION['book_process'] = $_POST['book_process'];
  // $_SESSION['book_method'] = $_POST['book_method'];
   echo "<tr><td>Username</td>";
   echo "<td>Book Taken/Return</td>";
   echo "<td>Book</td></tr>";
   echo "<tr>";
				echo"<td>" .$_SESSION['username']."</td>";
				echo"<td>" .$_SESSION['book_method']."</td>";
   echo "<td>".$_SESSION['book_process']."</td></tr>";
  /* echo $_SESSION['username'];
   echo $_SESSION['book'];*/
?>
</table>