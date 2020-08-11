<link rel="stylesheet" href="<?= base_url('asset/css/style.css'); ?>">
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="#">Trakteer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input type="checkbox" id="cek">
        <div class="cover-search rounded">
            <label for="cek">
                <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-search search rounded" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                </svg>
            </label>
        </div>
        <input type="text" name="search" placeholder="Cari..." class="form-control off">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="<?= base_url('control/register'); ?>" type="button" class="nav-item btn btn-primary rounded-pill"> Join Us</a>
            </div>
        </div>
    </div>
</nav>
<img src="<?= base_url('asset/img/corona.gif'); ?>" class="images rounded-pill" alt="">
<div class="card" style="width: 18rem">
    <div class="card-body">
        <h5>Hello Users</h5>
        <p class="card-text">Kamu dapat belajar sesuatu disini!</p>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="footer" viewBox="0 0 1440 320">
    <path fill="#5e60ce" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,149.3C672,160,768,224,864,240C960,256,1056,224,1152,186.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
</svg>