<?php
//include 'index.php';
   session_start();
   $_SESSION['username'] = $_POST['username'];
   echo $_SESSION['username'];
?>

<?php
    $pageTitle = "VISITOR";
    include 'header.php';
?>
<html>
<body>

    <center>
        <h1>Welcome to Scan Book Process</h1>
        <div class="column">
        Please scan your QR Code
            <video id="preview"></video>
            <script type='text/javascript'>
                let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                scanner.addListener('scan', function (content) {
                  console.log(content);
                });
                Instascan.Camera.getCameras().then(function (cameras) {
                  if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                  } else {
                    console.error('No cameras found.');
                  }
                }).catch(function (e) {
                  console.error(e);
                });
                scanner.addListener('scan', function(content, image){
                    var v_idnum = document.getElementById("book_process");
                    v_idnum.value = content;
                });
            </script>
        </div>
        <div class="column">
            <form action="book_process_session.php" method="POST">
                <p>
                    <label>Book Process:</label>
                    <input type="text" id="book_process" name="book_process" readonly><br>
                   
                </p>
                    <input type="submit" id="btn" value="  OK  " />
                <p>                
            </form>
        </div>
    </center>
</body>
</html>

<!--
<form action="book_process_session.php" method="post">
Book Process: <input type="text" name="book_process"><br>
<input type="submit">
</form>

</body>
</html>-->













