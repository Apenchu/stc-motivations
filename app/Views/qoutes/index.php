<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Navbar -->
<nav class="navbar navbar-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">STC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link linkNavigasi" href="#home">Home</a>
                <a class="nav-link linkNavigasi" href="#about">About</a>
                <a class="nav-link linkNavigasi" href="#footer">Sosial Media</a>
                <a href="#services" class="btn shadow linkNavigasi">Yuk Lihat!</a>
                <!-- <a href="#services" class="btn shadow linkNavigasi" data-toggle="modal" data-target="#thumbnailqoute">Thumbnail</a>
                <a href="#" class="btn shadow linkNavigasi" data-toggle="modal" data-target="#qouteqoutes">Qoutes</a> -->
                <a href="#" class="btn shadow linkNavigasi" data-toggle="modal" data-target="#qoutes">Buat Qoutes</a>
            </div>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- Landing  -->
<section class="landing" id="landing">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 text">
                <h1 class="text-center">Motiv<span>ations</span> </h1>
                <h1 class="text-center"><span>Web</span>site</h1>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#4d4dff" fill-opacity="1" d="M0,96L15,117.3C30,139,60,181,90,202.7C120,224,150,224,180,192C210,160,240,96,270,74.7C300,53,330,75,360,106.7C390,139,420,181,450,181.3C480,181,510,139,540,122.7C570,107,600,117,630,154.7C660,192,690,256,720,250.7C750,245,780,171,810,149.3C840,128,870,160,900,176C930,192,960,192,990,192C1020,192,1050,192,1080,165.3C1110,139,1140,85,1170,85.3C1200,85,1230,139,1260,176C1290,213,1320,235,1350,245.3C1380,256,1410,256,1425,256L1440,256L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
    </svg>

</section>

<!-- akhir Landing -->

<!-- Services -->
<section class="services" id="services">
    <div class="container">
        <div class="row">
            <?php foreach ($qoutes as $qoute) : ?>
                <div class="col-md-4 service">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $qoute['judul-thumbnail']; ?></h5>
                            <p class="card-text"><?= $qoute['isi']; ?></p>
                            <a href="home/detail/<?= $qoute['id']; ?>" class="btn">Lihat yuk</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- akhir Services -->

<!-- About -->
<section class="about" id="about">
    <div class="container">
        <div class="row about-1">
            <div class="col-6 abouts">
                <h3>Tujuan Membuat Website ini?</h3>
                <h5>Website ini dibuat untuk membantu mereka yang sedang kekurangan motivasi.</h5>
            </div>
            <div class="col-6 abouts">
                <div class="buletan about"></div>
            </div>
        </div>
        <div class="row about-2">
            <div class="col-6 abouts">
                <div class="buletan about"></div>
            </div>
            <div class="col-6 abouts">
                <h3>Siapa yang membuat website ini?</h3>
                <h5>Hai hai, nama saya Steven.</h5>
                <h5>Berasal dari Kalimantan Barat, Singkawang.</h5>
                <h5>Saat ini berumur 15 Tahun.</h5>
            </div>
        </div>
        <div class="row about-2 ">
            <div class="col-6 abouts">
                <h3>Cara menshare qoutes yang kita punya</h3>
                <h5>Kalian dapat membagikan qoutes yang kalian punya di navigasi.</h5>
            </div>
            <div class="col-6 abouts">
                <div class="buletan about"></div>
            </div>
        </div>
    </div>
</section>
<!-- akhir About -->


<!-- Footer -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#4d4dff" fill-opacity="1" d="M0,96L20,85.3C40,75,80,53,120,64C160,75,200,117,240,149.3C280,181,320,203,360,186.7C400,171,440,117,480,106.7C520,96,560,128,600,133.3C640,139,680,117,720,133.3C760,149,800,203,840,213.3C880,224,920,192,960,170.7C1000,149,1040,139,1080,128C1120,117,1160,107,1200,138.7C1240,171,1280,245,1320,261.3C1360,277,1400,235,1420,213.3L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
    <path fill="#4d4dff" fill-opacity="0.5" d="M0,160L16,149.3C32,139,64,117,96,101.3C128,85,160,75,192,64C224,53,256,43,288,58.7C320,75,352,117,384,154.7C416,192,448,224,480,208C512,192,544,128,576,101.3C608,75,640,85,672,122.7C704,160,736,224,768,245.3C800,267,832,245,864,218.7C896,192,928,160,960,176C992,192,1024,256,1056,245.3C1088,235,1120,149,1152,112C1184,75,1216,85,1248,85.3C1280,85,1312,75,1344,58.7C1376,43,1408,21,1424,10.7L1440,0L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
    <path fill="#4d4dff" fill-opacity="0.3" d="M0,32L12,74.7C24,117,48,203,72,197.3C96,192,120,96,144,53.3C168,11,192,21,216,74.7C240,128,264,224,288,266.7C312,309,336,299,360,293.3C384,288,408,288,432,261.3C456,235,480,181,504,160C528,139,552,149,576,133.3C600,117,624,75,648,58.7C672,43,696,53,720,80C744,107,768,149,792,138.7C816,128,840,64,864,69.3C888,75,912,149,936,170.7C960,192,984,160,1008,160C1032,160,1056,192,1080,181.3C1104,171,1128,117,1152,90.7C1176,64,1200,64,1224,101.3C1248,139,1272,213,1296,229.3C1320,245,1344,203,1368,160C1392,117,1416,75,1428,53.3L1440,32L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path>
</svg>
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Sosial Media</h4>
                <a href="https://www.instagram.com/apenchu/"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center copyright">Copyright <?= date('Y'); ?> by Steven <i class="bi bi-emoji-smile-fill"></i></p>
                <p class="text-center">Built with <i class="bi bi-cup-straw"></i> <i class="bi bi-headphones"></i> <i class="bi bi-heart-fill"></i> </p>
            </div>
        </div>
    </div>
</footer>
<!-- akhir Footer -->


<!-- Modal -->
<form action="home/qoutes" method="post">
    <div class="modal fade" id="qoutes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Qoutes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="basic-url">Thumbnail</label>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="With textarea" placeholder="Judul" name="judul-thumbnail" id="judul-thumbnail">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="With textarea" placeholder="Kalimat Singkat di Thumbnail" name="isi" id="isi">
                    </div>
                    <label for="basic-url">Qoutes Detail</label>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="With textarea" placeholder="Judul" name="judul-qoutes" id="judul-qoutes">
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Paragraf 1" name="bagian1" id="bagian1"></textarea>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Paragraf 2" name="bagian2" id="bagian2"></textarea>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Paragraf 3" name="bagian3" id="bagian3"></textarea>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Paragraf 4" name="bagian4" id="bagian4"></textarea>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="https://instagram.com/username kalian" name="instagram" id="instagram"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Bikin</button>
                </div>
            </div>
        </div>
    </div>
</form>




<?= $this->endSection(); ?>