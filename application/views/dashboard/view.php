<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?= base_url('puy/') ?>simrs.jpeg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?= base_url('puy/dist/') ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('puy/dist/') ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>
<style>
    #particles-js canvas {
        display: block;
        vertical-align: bottom;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        -webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
        transition: opacity .8s ease, transform 1.4s ease
    }

    #particles-js {
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgb(28, 171, 128);
        background: linear-gradient(90deg, rgba(28, 171, 128, 1) 4%, rgba(156, 209, 156, 1) 100%);
        z-index: -10;
        top: 0;
        left: 0
    }
</style>

<script src="<?= base_url('puy/') ?>particles.min.js"></script>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
    <div id="particles-js"></div>
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <div class="d-flex flex-column flex-center w-100 min-h-150px min-h-lg-200px px-9">
            <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
            </div>
        </div>

        <style>
            .custom-container {
                position: relative;
                display: inline-block;
                color: #000;
                background-color: #fff;
                border-radius: 4px;
                border: 1px solid #000;
                padding: 0.4em;
                text-align: left;
            }
        </style>
        <div class="mb-lg-n15 position-relative z-index-2">
            <div class="container">
                <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                    <div class="card-body p-lg-20">
                        <div class="text-center mb-5 mb-lg-10">

                        </div>
                        <div class="d-flex flex-center flex-wrap position-relative px-5">
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="RSKD DUREN SAWIT">
                                <img src="<?= base_url('puy/') ?>0001-min.jpg" class="mh-100px mh-lg-80px" alt="" />
                            </div>
                            <h1 class="text-danger lh-base fw-bold fs-2x fs-lg-3x mb-15"><br>
                                Shorten URLs
                                <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                    <span id="kt_landing_hero_text">RSKD DUREN SAWIT</span>
                                </span>
                            </h1>
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="SIMRS RSKDDS">
                                <img src="<?= base_url('puy/') ?>simrs.jpeg" class="mh-100px mh-lg-80px" alt="" />
                            </div>
                        </div>
                        <?php if ($test) { ?>
                            <?php
                            include "php-qrcode-master/lib/full/qrlib.php";

                            $tempdir = "temp/";
                            if (!file_exists($tempdir))    mkdir($tempdir);
                            $isi_teks = "http://10.0.10.50/shorten/" . $test;
                            $logopath = 'puy/2.jpg';
                            $QRCODE = $test . ".jpg";
                            $quality = 'H';
                            $ukuran = 3000;
                            $padding = 0;



                            QRCode::png($isi_teks, $tempdir . $QRCODE, QR_ECLEVEL_H, $ukuran, $padding);
                            $filepath = $tempdir . $QRCODE;
                            $QRTAKEIT = imagecreatefrompng($filepath);

                            $logo = imagecreatefromstring(file_get_contents($logopath));
                            $QR_width = imagesx($QRTAKEIT);
                            $QR_height = imagesy($QRTAKEIT);

                            $logo_width = imagesx($logo);
                            $logo_height = imagesy($logo);

                            $logo_qr_width = $QR_width / 3;
                            $scale = $logo_width / $logo_qr_width;
                            $logo_qr_height = $logo_height / $scale;

                            imagecopyresampled($QRTAKEIT, $logo, $QR_width / 3, $QR_height / 2.5, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
                            imagepng($QRTAKEIT, $filepath);
                            ?>
                            <br><br><br>
                            <div class="card mb-5 mb-xl-10 " id="kt_profile_details_view">
                                <div class="card-header cursor-pointer" style="background-color: #359D9e;">
                                    <div class="card-title m-0">
                                        <h3 class="fw-bolder m-0 text-white">SHORTEN URL ANDA DI BAWAH INI</h3>
                                    </div>
                                </div>
                                <div class="card-body p-9">
                                    <div class="row">
                                        <div class="col-sm-2"><br>
                                            <h4 class="fw-bolder m-0 text-black">URL</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="urlnya" style="outline: none;border:1px solid white;" value="http://10.0.10.50/shorten/<?= $test ?>">

                                            <? $test = "asdasda"; ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-success" id="copyges"><i class="fas fa-copy"></i> Copy</button>
                                        </div>
                                        <div class="col-sm-2"><br>

                                            <h4 class="fw-bolder m-0 text-black">QR Code </h4><br>
                                            <a href="<?= base_url('temp/' . $QRCODE) ?>" download id="downloadqr" class="btn btn-sm btn-success"><i class="fas fa-download"></i> Download</a>
                                        </div>
                                        <div class="col-sm-10">
                                            <img src="<?= base_url('temp/' . $QRCODE) ?>" width="150">

                                        </div>
                                        <div class="col-sm-12">&nbsp;</div>
                                        <div class="col-sm-12">
                                            <a href="<?= base_url() ?>" class="col-sm-12 btn btn-warning"><i class="fas fa-plus"></i> Buat Baru Shorten URL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <form action="<?= base_url('dashboard/add') ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-6 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="text-info">URL </span>
                                        </label>
                                        <input type="text" required class="form-control" placeholder="Tulis URL yang akan di shorten" name="urlnya" value="" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="text-info">URL Custom</span>
                                        </label>
                                        <label class="custom-container" for="custom">rsdurensawit.com/
                                            <input id="custom" type="text" name="custom_url" placeholder="Custom url" maxlength="25" class="custom"></label>
                                    </div>
                                    <div class="col-md-2 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="text-info">&nbsp;</span>
                                        </label>
                                        <button class="btn col-md-12 btn-danger" type="submit"> Shorten Link !</button>
                                    </div>
                                </div>

                            </form>
                        <?php } ?>
                        <div class="">
                            <br>
                            <a class="align-right" href="https://www.instagram.com/neisraka/" target="_blank">
                                <img alt="Logo" src="<?= base_url('puy/') ?>simrs.jpeg" class="h-15px h-md-20px" />
                            </a>
                            <a class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://www.instagram.com/neisraka/" target="_blank">&copy; 2023 Fyvly </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <script src="<?= base_url('puy/dist/') ?>assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?= base_url('puy/dist/') ?>assets/js/scripts.bundle.js"></script>
        <script src="<?= base_url('puy/dist/') ?>assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
        <script src="<?= base_url('puy/dist/') ?>assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
        <script src="<?= base_url('puy/dist/') ?>assets/js/custom/landing.js"></script>
        <script src="<?= base_url('puy/dist/') ?>assets/js/custom/pages/pricing/general.js"></script>
        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#35fce2"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 2,
                            "color": "#f5f5f5"
                        },
                        "polygon": {
                            "nb_sides": 4
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.20518810224680978,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 7.891850086415761,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);;
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            $(document).ready(function() {
                $('#copyges').click(function() {
                    var copyText = document.createElement("textarea");
                    var inputValue = document.getElementById("urlnya").value;
                    copyText.value = inputValue;
                    document.body.appendChild(copyText);
                    copyText.select();
                    document.execCommand("copy");
                    document.body.removeChild(copyText);
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil di Copy!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
                $('#downloadqr').click(function() {

                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil download QR Code!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            });
        </script>
</body>

</html>