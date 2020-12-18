<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>acgcreative</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>

  <nav class="navbar sticky-top navbar-expand-lg pb-0">
    <div class="container justify-content-around">
      <button class="navbar-toggler" onclick="toggle()" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
        aria-label="Toggle navigation">
        <div class="nav-icon">
          <div class="bar" id="tog-1"></div>
          <div class="bar" id="tog-2"></div>
        </div>
      </button>

      <a class="nav-link d-more-lg" href="#">ABOUT</a>
      <a class="navbar-brand m-0 p-0" href="index.html">
        <img height="60" src="images/acgLogo.png" alt="">
      </a>
      <a class="nav-link d-more-lg" href="contact.html">CONTACT</a>

    </div>

    <div class="d-less-lg">
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">CONTACT</a>
          </li>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <img class="img-fluid" src="images/tower.png" alt="">
        </div>
        <div class="col-md-7">
            <div class="d-more-lg" style="height: 150px;"></div>
            <h3 class="text-danger">WHAT ARE YOU LOOKING FOR</h3>
            <div id="topic">
              <p class="text-red">< คลิกหัวข้อที่ต้องการ</p>
            </div>

            <form action="contact.php" method="POST" id="contactForm">
              <input type="text" id="name" name="name" placeholder="ชื่อ">
              <input class="mt-3" type="text" id="mail" name="mail" placeholder="อีเมล">
              <input class="mt-3" type="text" id="phoneNum" name="phoneNum" placeholder="เบอร์โทรติดต่อ">
              <textarea class="mt-3" id="content" name="content" form="contactForm" placeholder="ข้อมูลเบื้องต้นของ PROJECT ที่ต้องการรับบริการ"></textarea>
              <input class="btn" id="submit" name="submit" type="submit" value="ส่งข้อมูล">
            </form>
        </div>
    </div>
  </div>

</body>

</html>

<?php
              
    if(isset($_POST['submit'])){
        date_default_timezone_set("Asia/Bangkok");
        $data = $_POST['name'];

        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $phone = $_POST['phoneNum'];
        $content = $_POST['content'];

        $info = "";
        $info = $info.date("d/m/Y H:i:s")."\n";
        $info = $info."Name: $name\n";
        $info = $info."Mail: $mail\n";
        $info = $info."Phone number: $phone\n";
        $info = $info."Content: $content\n\n\n";


        $fp = fopen('data.txt', 'a');

        fwrite($fp, $info);
        fclose($fp);
    }
?>