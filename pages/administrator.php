<?php
    include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>        
    <title>Document</title>
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
        <a class="navbar-brand" href="administrator.php">
            <img src="../src/icon/logo BPSDMP.png" alt="..." height="36">
            <span>Administrator BDPSDM Kominfo Surabaya</span>
        </a>        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="administrator.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah.php">Tambah kegiatan</a>
                </li>
                <li class="nav-item bg-danger">
                    <a class="nav-link text-white" href="./../index.php">Logout</a>
                </li>                
            </ul>
        </div>
    </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-3" id="tabel">
        <h2>Daftar Kegiatan</h2>        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Kegiatan</th>
                    <th>Isi Kegiatan</th>
                    <th>Gambar</th>                    
                    <th>Aksi</th>                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1;
                    $kegiatan = mysqli_query($koneksi, "SELECT * FROM kegiatan");
                    while ($hslkeg = mysqli_fetch_array($kegiatan)) { ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $hslkeg['judul_kegiatan']?></td>
                            <td><?= $hslkeg['isi_kegiatan']?></td>
                            <td>
                                <img src="./../src/images/kegiatan/<?= $hslkeg['gambar']; ?>" class="img-rounded"width="150" height="150">
                            </td>                                                        
                            <td>
                                <a href="formedit.php?id=<?= $hslkeg['id_kegiatan'] ?>" class="btn bg-primary text-white btn-sm">Edit</a>
                                <a href="../config/delete.php?id=<?= $hslkeg['id_kegiatan'] ?>" class="btn bg-danger text-white btn-sm">Hapus</a>
                            </td>                            
                        </tr>
                    
                    <?php
                    $no++;
                    }
                    ?>                
            </tbody>
        </table>
    </div>
                
</body>
</html>