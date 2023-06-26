<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
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
    <br><br>
    <div class="container" id="form">
        <h2>Tambah Kegiatan</h2>
        <form action="../config/simpan.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul Kegiatan:</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Kegiatan" name="judul" required>
            </div>
            <div class="form-group">
                <label for="isi_kegiatan">Isi Kegiatan:</label>
                <textarea class="form-control" rows="10" id="isi_kegiatan" placeholder="Masukkan Isi Kegiatan" name="isi_kegiatan"></textarea>
            </div>
            <label for="gambar">Gambar:</label>
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" required/>
            </div>           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br>   
</body>
</html>