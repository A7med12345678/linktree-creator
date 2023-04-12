<?php
$key = trim($_GET['key'], '"');
$jsonData = file_get_contents('./json/' . $key . '.json');
// Decode the JSON data into a PHP object
$data = json_decode($jsonData);
?>

<htm1>

  <head>
    <title>Linktree for
      <?php echo $data->PersonName; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- <script src="https://kit.fontawesome.com/f438d91621.js" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/2b6685be60.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mirza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">

    <!--Aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
      body {
        background: linear-gradient(135deg, rgba(255, 193, 18, 1) 0%, rgba(255, 193, 18, 0.5) 100%);
      }

      @media(min-width:0px) and (max-width:315px) {
        /* #big {
          display: none;
        }

        #small {
          display: block;
        } */
        #img{
          width: 110;
          height: 110;
        }
      }
      #img{
          width: 160;
          height: 160;
        }

      /* #big {
        display: block;
      }

      #small {
        display: none;
      } */

      .custom {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.4);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
      }
    </style>
  </head>

  <body>
    <div class="mt-5 mb-2" style="display:flex; justify-content:center; align-items:center;">
      <div data-aos="zoom-in-down" data-aos-duration="1500">
        <img id="profile" src="<?php echo "./uploads/" . $data->photoName ?>" alt="Person Image" class="rounded-circle mx-auto"
          width="160" height="160">
      </div>
      <!-- <div class="col-4 text-center" id="small" data-aos="zoom-in-down" data-aos-duration="1500">
        <img src="<?php echo "./uploads/" . $data->photoName ?>" alt="Person Image" class="rounded-circle mx-auto"
          width="110" height="110">
      </div> -->
    </div>
    <div class="h4 text-center font-weight-bold">
      <?php echo $data->PersonName; ?>
    </div>
    <div class="h5 text-center font-weight-bold text-secondary mt-2">
      <?php echo $data->PersonJob; ?>
    </div>
    <div class="text-center font-weight-bold m-4">
      <?php echo '"' . $data->PersonAbout . '"'; ?>
    </div>
    <div class="mt-5">
      <div class="mt-3 p-3 w-75 mx-auto text-center font-weight-bold custom"
        style="border-radius: 15px; background: white;" data-aos="fade-right" data-aos-duration="1500">
        <div class="">
          <i class="fab fa-facebook fa-2x"></i>
        </div>
        <div class="mx-auto">
          <a href="<?php echo $data->FBLink; ?>" class="text-decoration-none" style="color:black;">Facebook</a>
        </div>
      </div>
      <div class="mt-3 p-3 w-75 mx-auto text-center font-weight-bold custom"
        style="border-radius: 15px; background: white;" data-aos="fade-left" data-aos-duration="1500">
        <div class="">
          <i class="fa-brands fa-instagram fa-2x"></i>
        </div>
        <div class="mx-auto">
          <a href="<?php echo $data->InstaLink; ?>" class="text-decoration-none" style="color:black;">Instgram</a>
        </div>
      </div>
      <div class="mt-3 p-3 w-75 mx-auto text-center font-weight-bold custom"
        style="border-radius: 15px; background: white;" >
        <div class="">
          <i class="fa-brands fa-twitter fa-2x"></i>
        </div>
        <div class="mx-auto">
          <a href="<?php echo $data->TwitterLink; ?>" class="text-decoration-none" style="color:black;">Twitter</a>
        </div>
      </div>
      <div class="mt-3 p-3 w-75 mx-auto text-center font-weight-bold custom"
        style="border-radius: 15px; background: white;" >
        <div class="">
          <i class="fa-brands fa-whatsapp fa-2x"></i>
        </div>
        <div class="mx-auto">
          <a href="<?php echo $data->WsLink; ?>" class="text-decoration-none" style="color:black;">Whatsapp</a>
        </div>
      </div>
      <hr>
      <div class="mt-3 p-3 w-75 mx-auto text-center font-weight-bold custom"
        style="border-radius: 15px; background: white;" >
        <div class="">
          <i class="fa-solid fa-trophy fa-2x"></i>
          
        </div>
        <div class="mx-auto">
          <a href="<?php echo $data->Portofolio; ?>" class="text-decoration-none" style="color:black;">Portofolio</a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init();

    </script>
  </body>
</htm1>