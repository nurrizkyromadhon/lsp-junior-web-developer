<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>        
    <title>Document</title>
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="src/icon/logo BPSDMP.png" alt="..." height="36">
            <span>BDPSDM Kominfo Surabaya</span>
        </a>        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/about.php">About</a>
                </li>
                <li class="nav-item dropdown bg-info">
                    <a class="nav-link text-white" href="pages/login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <!-- Page Content -->
    <div class="home bg-light">                
            <div class="landing-text">
                <h1>BDPSDM Kominfo Surabaya</h1>
                <h3>Selamat datang di website Digital Talent</h3>
            </div>        
    </div>
	
	<!--Section: News of the day-->
	<?php         
        $kegiatan = mysqli_query($koneksi, "SELECT * FROM kegiatan order by id_kegiatan desc");
        while ($hslkeg = mysqli_fetch_array($kegiatan)) { ?>
	<div class="container mt-3 mb-3 border">
		<div class="row gx-5 bg-light p-4">
			<div class="col-md-2 mb-4">
				<div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
				<img src="./src/images/kegiatan/<?= $hslkeg['gambar']; ?>" class="img-rounded" width="150" height="150" />
				<a href="#!">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
				</a>
				</div>
			</div>

			<div class="col-md-10 mb-4">
				<span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
				<h4><strong><?= $hslkeg['judul_kegiatan']?></strong></h4>
				<p class="text-muted">
					<?= substr($hslkeg['isi_kegiatan'],0,210) ?> ...
				</p>
				<a href="pages/readmore.php?id=<?= $hslkeg['id_kegiatan'] ?>" class="btn bg-primary text-white btn-sm">Read more</a>
			</div>
		</div>
	</div>
	<?php 
		}
	?>	
	<!--Section: News of the day-->
    
    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0 bg-primary text-white">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-6 col-md-6">
                    <h4>TENTANG KAMI</h4>
                    <p class="small">Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika Surabaya
					Badan Penelitian dan Pengembangan Sumber Daya Manusia - Kementerian Komunikasi dan Informatika Republik Indonesia</p>
                    <p class="small mb-0">&copy; Copyrights. All rights reserved. <span>Nur Rizky Romadhon</span></p>
                </div>
				<div class="col-lg-6 col-md-6">
                    <h4>HUBUNGI KAMI</h4>										
                    <p class="small">Jl. Raya Ketajen No.36, Ketajen, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254</p>
					<p class="small">(031) 8011944</p>
					<p class="small">Jawa Timur</p>                    
                </div>                
            </div>
        </div>
    </footer>
                
</body>
</html>