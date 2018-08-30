
<?php
   session_start();
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
                scanner.addListener('scan', function (contents) {
                  console.log(contents);
                });
                Instascan.Camera.getCameras().then(function (cameras) {
                  if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                  } else {5
                    console.error('No cameras found.');
                  }
                }).catch(function (e) {
                  console.error(e);
                });
                scanner.addListener('scan', function(contents, image){
                    var v_idnum = document.getElementById("username");
                    v_idnum.value = contents;
                });
            </script>
        </div>
        <div class="column">
            <form action="login_session.php" method="POST">
                <p>
                    <label>Book Process:</label>
                    <input type="text" id="username" name="username" readonly><br>
                   
                </p>
                    <input type="submit" id="btn" value="  OK  " style="height:200px; width:200px;" />
                <p>                
            </form>
        </div>
    </center>
</body>
</html>

<!--
<html>
<body>

<form action="login_session.php" method="post">
Book Process: <input type="text" name="username"><br>
<input type="submit">
</form>

</body>
</html>-->

