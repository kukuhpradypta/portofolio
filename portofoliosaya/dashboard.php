<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <title>Hello, world!</title>
    <style>
      body {
  background-color: #f1f2f6;
}
.jumbotron {
  padding-top: 5%;
  background-color: #c8d6e5;
}
.glombang {
  margin-top: -5%;
}
#galery {
  background-color: #c8d6e5;
}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php" style="margin-left:-5%; padding-right:3%;">Pengguna</a>
        <a class="navbar-brand" href="admin.php">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="jumbotron text-center pb-3" >
     <?php                        
      $id_user = mysqli_query($connect,'SELECT * FROM tbl_user ORDER BY tbl_user.id_user');
      while ($prdk = mysqli_fetch_array($id_user)){
      $idp = $prdk['id_user'];
      ?>
       <img src="<?php echo $prdk['image_user'] ?>" alt="" width="200" height="190" class="rounded-circle" />
      <h1 class="display-5"><?php echo $prdk['nama_user'] ?></h1>
      <p class="lead" id="about"><?php echo $prdk['keahlian'] ?></p>
    </section>
    <?php } ?>

    <section >
      <div class="container">
        <div class="row text-center">
             <?php                        
      $id_profile = mysqli_query($connect,'SELECT * FROM tbl_profile ORDER BY tbl_profile.id_profile');
      while ($prdk = mysqli_fetch_array($id_profile)){
      $idp = $prdk['id_profile'];
      ?>
          <div class="col fs-3 pt-3">About Me</div>
        </div>
        <div class="row text-justify pt-4 justify-content-center">
          <div class="col-md-5 fs-5 mb-4"><?php echo $prdk['nama_profile']?><br> <?php echo $prdk['umur_profile']?><br> <?php echo $prdk['alamat_profile']?><br> <?php echo $prdk['ttl_profile']?></div>
          <div class="col-md-5 fs-5"><?php echo $prdk['about_profile'] ?></div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c8d6e5"
          fill-opacity="1"
          d="M0,224L26.7,208C53.3,192,107,160,160,170.7C213.3,181,267,235,320,224C373.3,213,427,139,480,128C533.3,117,587,171,640,202.7C693.3,235,747,245,800,234.7C853.3,224,907,192,960,154.7C1013.3,117,1067,75,1120,85.3C1173.3,96,1227,160,1280,197.3C1333.3,235,1387,245,1413,250.7L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
  <?php } ?>
    <section id="galery">
      <div class="container">
        <div class="row text-center">
          <div class="col fs-3 mb-5">My Project</div>
        </div>
         <div class="card-group justify-content-evenly text-center">
                        
                        <?php
                        
                        $id = mysqli_query($connect,'SELECT * FROM tbl_galery ORDER BY tbl_galery.id_galery');
                        while ($prdk = mysqli_fetch_array($id)){
                            $idp = $prdk['id_galery'];

                        ?>

                          <div class="col-md-4 mb-5">
                            <a href="dashboard.php?id=<?php echo $prdk['id_galery']; ?>" style="text-decoration: none; color: black;">
                                <div class="card m-2 shadow-sm" style="width: 300px;height:250px;">
                                    <img src="<?php echo $prdk['gambar_galery'] ?>" style="height:150px; width:100%;" alt="Gambar">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold" style="margin-top:-5%;"><?php echo $prdk['nama_galery'] ?></h5>
                                        <p class="card-text" style="margin-top:%;"><?php echo $prdk['about_galery'] ?></p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <?php
                        }
                        ?>
                            
                        </div>
        </div>
        </div>
      </div>           
      <svg style="margin-top:-3%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f1f2f6" fill-opacity="1" d="M0,224L26.7,208C53.3,192,107,160,160,170.7C213.3,181,267,235,320,224C373.3,213,427,139,480,128C533.3,117,587,171,640,202.7C693.3,235,747,245,800,234.7C853.3,224,907,192,960,154.7C1013.3,117,1067,75,1120,85.3C1173.3,96,1227,160,1280,197.3C1333.3,235,1387,245,1413,250.7L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    </section>
    
    <section id="contact">
      <div class="container">
          <div class="row text-center">
            <div class="col fs-3">Contact</div>
          </div>
          

        <div class="row justify-content-center">
          <div class="col-md-7">
            <form action="simpanpesan.php" method="POST">

              <div class="mb-3">
                <label for="name" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" name="nama_user" id="nama_user" aria-describedby="name">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email_user" id="email_user" aria-describedby="email">
              </div>

              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan_user" name="pesan_user" rows="3"></textarea>
              </div>

              <button type="submit" name="simpanpesan" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      </section>

      <footer>
        <div class="card text-white bg-dark mt-5">
          <div class="card-header">Contact Me</div>
          <div class="card-body">
            <ul>
              <li>kukuhpaa@gmail.com</li>
              <li>081906663094</li>
            </ul>
          </div>
        </div>
      </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
