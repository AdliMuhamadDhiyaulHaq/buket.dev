<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buat EVent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
  <link href="../../assets/img/icon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <style>
    .container_ {
      margin: 10px;
      padding: 10px;
      border: solid 1px teal;
    }

    .image_upload>input {
      display: none;
    }

    /* input[type=text] */
  </style>
  <link href="../../assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="../../assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block"><i class="fas fa-ticket"></i> BUKET Apps</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>

            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile_penjual">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  include 'sidebar_penjual.php';
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Seller</li>
          <li class="breadcrumb-item ">Buat Event </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>



                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Lupa Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <form>
                    <div class=" card-body mt-2 bg-image-responsive p-5 text-center shadow-1-strong rounded mb-5 text-white" style="background-image: url(https://images.pexels.com/photos/593158/pexels-photo-593158.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1); ">

                      <p class="image_upload">
                        <label for="userImage">
                          <a class="btn btn btn-lg border-0" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> <i class="fa-solid fa-folder-plus fa-4x"></i></a>
                        </label>
                        <input type="file" name="userImage" id="userImage">
                        <h3> Unggah gambar/poster/banner</h3>
                      </p>
                      <p style="font-size: 14px; font-family: sans-serif;">
                        Direkomendasikan 724x340px dan tidak lebih dari 1 mb
                      </p>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-12">
                        <input name="nama_event" class="form-control form-control-lg  border-0" placeholder="Nama Event*"><br>
                        <div type="text" style="outline: 0;border-width: 0 0 2px;" class="form-control form-control-sm  border-2" data-bs-toggle="modal" data-bs-target="#exampleModal" id="text_kategori">Pilih Kategori*</div>
                        <input type="hidden" name="text_kategori" id="data_text_kategori">
                        <input type="hidden" name="jenis_acara" id="data_jenis_event">
                      </div>
                    </div>


                    <!-- Modal 1 -->
                    <div class="row mb-3">
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pilih Kategori Event</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row mb-3">
                                <div class="col-md-8 col-lg-12">
                                  <select class="form-control" id="format_event">
                                    <option class="border-0">Pilih Format Event*</option>
                                    <option value="Festival,Fair,Bazzar">Festival,Fair,Bazzar</option>
                                    <option value="Konser">Konser</option>
                                    <option>Pertandingan</option>
                                    <option>Exhibition,Expo,Pameran</option>
                                    <option>Konferensi</option>
                                    <option>Workshop</option>
                                    <option>Pertunjukan</option>
                                    <option>Atraksi,Theme Park</option>
                                    <option>Akomodasi</option>
                                    <option>Seminar,Talkshow</option>
                                    <option>Pensi,Event Sekolah,Kampus</option>
                                    <option>Trip,Tur</option>
                                    <option>Turnamen,Kompetisi</option>
                                    <option>Lainya</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-md-8 col-lg-12">
                                  <select class="form-control" id="topik_event">
                                    <option class="border-0">Pilih Topik Event*</option>
                                    <option value="Anak, Keluarga">Anak, Keluarga</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option>Desain,Foto,Video</option>
                                    <option>Fashion,Kecantikan</option>
                                    <option>Film,Sinema</option>
                                    <option>Game,E-Sports</option>
                                    <option>Hobi,Kerajinan Tangan</option>
                                    <option>Investasi,Saham</option>
                                    <option>Karir,Pengembangan Diri</option>
                                    <option>Keagamaan</option>
                                    <option>Kesehatan,Kebugaran</option>
                                    <option>Keuangan,Finansial</option>
                                    <option>Lingkungan Hidup</option>
                                    <option>Makanan,Minuman</option>
                                    <option>Marketing</option>
                                    <option>Musik</option>
                                    <option>Olahraga</option>
                                    <option>Otomotif</option>
                                    <option>Sains,Teknologi</option>
                                    <option>Seni,Budaya</option>
                                    <option>Sosial,Hukum,Politik</option>
                                    <option>Standup Comedy</option>
                                    <option>Pendidikan,Beasiswa</option>
                                    <option>Wisata &Liburan</option>
                                    <option>Lainya</option>

                                  </select>
                                </div>
                              </div>

                              <div class="row ">
                                <div class="col-md-8 col-lg-12 ">
                                  <div class="d-grid gap-2">
                                    <p>Jenis Event</p>

                                    <input type="radio" class="btn-check" name="jenis_event" id="Public" autocomplete="off" value="Public" />
                                    <label class="btn btn-outline-secondary" for="Public" style="text-align: left;"><i class="fa-solid fa-users"></i> Public</label>
                                    <input type="radio" class="btn-check  " name="jenis_event" id="Private" autocomplete="off" value="Private" />
                                    <label class="btn btn-outline-secondary" for="Private" style="text-align: left;"><i class="fa-solid fa-user"></i> Private</label>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="PrintData();">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- End Modal 1 -->
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="card h-100  ">
                        <div class="card-body">
                          <h5 class="card-title"><b>Diselenggarakan Oleh</b></h5>
                          <input type="text" class="form-control border-0" placeholder="Nama Penyelenggara">     
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4 ">
                      <div class="card h-100 mb-4">
                        <div class="card-body">
                          <h5 class="card-title"><b>Tanggal & Waktu</b></h5>
                          <div class="col-4 ">
                            <div class="input-group mb-3 ">
                              <button type="button" style="margin-left: -27px;" class="btn  border-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  style="text-align:left;">
                                <i class="fa-solid fa-calendar-days"></i> <span id="text_tanggal">Pilih Tanggal</span>
                                <input type="hidden" name="data_text_tanggal" id="data_text_tanggal" class="form-control border-0" id="data_tanggal" placeholder=" Pilih Tanggal">
                              </button>
                            </div>
                            <div class="input-group mb-3">
                              <button type="button" style="margin-left: -27px;" class="btn  border-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="fa-solid fa-clock"></i> <span id="text_waktu">Pilih Waktu</span>
                                <input type="hidden" name="data_text_waktu" class="form-control border-0" id="data_text_waktu" placeholder=" Pilih Waktu">
                              </button>
                            </div>
                          </div>

                          <!-- Modal 2 -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">

                                <div class="modal-body">

                                  <!-- SmartWizard html -->
                                  <div id="smartwizard">
                                    <ul class="nav nav-progress">
                                      <li class="nav-item">
                                        <a class="nav-link" id="nav-step-1" type="button">
                                          <div class="num">1</div>
                                          TANGGAL EVENT
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <!-- nav-link default active -->
                                        <a class="nav-link" id="nav-step-2" type="button">
                                          <span class="num">2</span>
                                          WAKTU EVENT
                                        </a>
                                      </li>

                                    </ul>

                                    <div class="tab-content">
                                      <!-- <div class="tab-pane" role="tabpanel" aria-labelledby="step-1"> -->
                                        <br>
                                        <div id="step-1">
                                          <label for="exampleInputEmail1" class="form-label ">Tanggal Mulai</label>
                                          <input type="date" class="form-control " id="tanggal_mulai" aria-describedby="emailHelp"><br>
                                          <label for="exampleInputEmail1" class="form-label">Tanggal Berakhir</label>
                                          <input type="date" class="form-control" id="tanggal_selesai" aria-describedby="emailHelp">
                                        </div>

                                        <!-- </div> -->
                                        <div id="step-2" class="d-none">
                                          <label for="exampleInputEmail1" class="form-label">Waktu Mulai</label>
                                          <input type="time" class="form-control" id="waktu_mulai" aria-describedby="emailHelp"><br>
                                          <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                                          <input type="time" class="form-control" id="waktu_selesai" aria-describedby="emailHelp">
                                        </div>
                                        <!-- <div class="tab-pane" role="tabpanel" aria-labelledby="step-2"> -->
                                          <!-- </div> -->

                                        </div>
                                        <br>
                                        <div class="progress">
                                          <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="modal-footer">
                                      <!-- <button class="btn btn-secondary btn-sm" onclick="onCancel()">Cancel</button> -->
                                      <span id="btn-step">
                                        <a class="btn btn-primary btn-sm text-light d-none" id="prev-btn-modal" onclick="BtnStepPrev();">Previous</a>
                                        <a class="btn btn-primary btn-sm text-light" id="next-btn-modal" onclick="BtnStepNext();">Selanjutnya</a>
                                      </span>
                                      <button type="submit" class="btn btn-success btn-sm" data-bs-dismiss="modal" onclick="PrintData1();">Finish</button>
                                    </div>

                                  </div>
                                </div>
                              </div>
                              <!-- end modal 2 -->

                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <h5 class="card-title"><b>Lokasi</b></h5>
                              <button type="button" class="btn  btn-sm btn border-0" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-location-dot"></i> <span id="text_lokasi">Pilih Lokasi</span>
                                <input type="hidden" name="text_kategori" id="data_text_lokasi">
                                <!-- <input type="hidden" name="jenis_acara" id="data_jenis_event"> -->
                              </button>     
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>




                    <div class="row mb-3">

                      <!-- Modal 3 -->

                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog  modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header mb-0">
                              <h3><b> Event Lokasi </b> </h3>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <div class="mb-3">
                                <h5 style="font-size: 14px;">Pelaksanaan Event</h5>
                                <select onchange="CekEvent();" id="cek_event" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                  <option selected value="1">OFFLINE</option>
                                  <option value="2">ONLINE</option>
                                </select>
                              </div>
                              <!-- Offline -->
                              <form id="form_offline">
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Nama Tempat:</label>
                                  <input type="text" class="form-control" id="nama_tempat">
                                </div>
                                <div class="row">
                                  <div class="col-md-6 form-group">
                                    <h5 style="font-size: 14px;">Alamat</h5>
                                    <input type="text" name="tempat_lahir" id="alamat" class="form-control" required>
                                  </div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <h5 style="font-size: 14px;">Kota</h5>
                                    <select  id="nama_kota" class="form-select form-select" aria-label=".form-select-sm example">
                                      <option selected value="1">Cirebon</option>
                                      <option value="2">Kuningan</option>
                                      <option value="2">Majalengka</option>
                                    </select>
                                  </div>


                                </div>
                                <!-- Online -->
                              </form>
                              <form id="form_online" class="d-none">
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">URL Streaming:</label>
                                  <input type="text" class="form-control" id="url_event">
                                </div>

                              </form>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm " data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm lg2" data-dismiss="modal"  onclick="PrintData2();">Simpan</button>  

                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <!-- <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>




            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <section>
                <div class="wizard">
                  <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                      <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                          <span class="round-tab">
                            <i class="glyphicon glyphicon-folder-open"></i>
                          </span>
                        </a>
                      </li>

                      <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                          <span class="round-tab">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </span>
                        </a>
                      </li>

                      <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                          <span class="round-tab">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </span>
                        </a>
                      </li>
                      <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                          <span class="round-tab">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>

            </div>



            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form>


                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-6 col-lg-3 col-form-label">Masukan Password lamamu</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Masukan Password barumu</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Masukan sekali lagi Password barumu</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
          <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script>
          function PrintData() {
            var a = document.getElementById("format_event");
            var avalue = a.options[a.selectedIndex].avalue;
            var format_event = a.options[a.selectedIndex].text;
            var b = document.getElementById("topik_event");
            var bvalue = b.options[b.selectedIndex].bvalue;
            var topik_event = b.options[b.selectedIndex].text;
            var radioButtonGroup = document.getElementsByName("jenis_event");
            document.getElementById("text_kategori").innerHTML = format_event + ' - ' + topik_event + ' <i  class="fa-regular fa-pen-to-square text-primary"></i>';
            document.getElementById("data_text_kategori").value = format_event + ' - ' + topik_event;
      // alert(format_event);
            var checkedRadio = Array.from(radioButtonGroup).find(
              (radio) => radio.checked
              );
            isi_jenis_event = checkedRadio.value;
            document.getElementById("data_jenis_event").value = isi_jenis_event;

          }
        </script>

        <script>
          function PrintData2() {
           var a = document.getElementById("nama_kota");
           var avalue = a.options[a.selectedIndex].avalue;
           var nama_kota = a.options[a.selectedIndex].text;


           var nama_tempat = document.getElementById("nama_tempat").value;
           var alamat = document.getElementById("alamat").value;
           var url_event = document.getElementById("url_event").value;




           document.getElementById("text_lokasi").innerHTML = nama_tempat + ' , ' + alamat + ','+nama_kota+' <i  class="fa-regular fa-pen-to-square text-primary"></i>';
           document.getElementById("data_text_lokasi").value = nama_tempat + ', ' + alamat;

           



         }
       </script>
       <script>
        function PrintData1() {

          var tanggal_mulai = document.getElementById("tanggal_mulai").value;
          var tanggal_selesai = document.getElementById("tanggal_selesai").value;


          var waktu_mulai = document.getElementById("waktu_mulai").value;
          var waktu_selesai = document.getElementById("waktu_selesai").value;

          document.getElementById("text_waktu").innerHTML = waktu_mulai + '   s/d ' + waktu_selesai + ' <i  class="fa-regular fa-pen-to-square text-primary"></i>';
          document.getElementById("data_text_waktu").value = waktu_mulai + '     s/d ' + waktu_selesai;
      // alert(tanggal_selesai);


      // document.getElementById("data_jenis_event").value = isi_jenis_event;
          document.getElementById("text_tanggal").innerHTML = tanggal_mulai + '   s/d ' + tanggal_selesai + ' <i  class="fa-regular fa-pen-to-square text-primary"></i>';
          document.getElementById("data_text_tanggal").value = tanggal_mulai + '     s/d ' + tanggal_selesai;


        }

        function BtnStepNext() {
          document.getElementById("next-btn-modal").classList.add("d-none");
          document.getElementById("step-1").classList.add("d-none");
          document.getElementById("nav-step-2").classList.add("active");
          document.getElementById("prev-btn-modal").classList.remove("d-none");;
          document.getElementById("step-2").classList.remove("d-none");;
          document.getElementById("nav-step-1").classList.remove("active");
          document.getElementById("progress-bar").style.width = "100%";

        }

        function BtnStepPrev() {
          document.getElementById("prev-btn-modal").classList.add("d-none");
          document.getElementById("step-2").classList.add("d-none");
          document.getElementById("nav-step-1").classList.add("active");
          document.getElementById("next-btn-modal").classList.remove("d-none");;
          document.getElementById("step-1").classList.remove("d-none");;
          document.getElementById("nav-step-2").classList.remove("active");
          document.getElementById("progress-bar").style.width = "50%";
        }
      </script>

      <script>
        function CekEvent() {
          var e = document.getElementById("cek_event");
          var value = e.value;
          var text = e.options[e.selectedIndex].text;
          if (text == 'ONLINE') {
                                      // alert(text);
            document.getElementById("form_offline").classList.add("d-none");
            document.getElementById("form_online").classList.remove("d-none");
          } else {
            document.getElementById("form_online").classList.add("d-none");
            document.getElementById("form_offline").classList.remove("d-none");
                                      // alert(0);
          }

        }
      </script>


      <script type="text/javascript">
        $(function() {
      // Step show event

      // Smart Wizard
          $('#smartwizard').smartWizard({
            selected: 0,
        // autoAdjustHeight: false,
        theme: 'arrows', // basic, arrows, square, round, dots
        transition: {
          animation: 'none'
        },
        toolbar: {
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          position: 'none' // none/ top/ both bottom
        },
        anchor: {
          enableNavigation: true, // Enable/Disable anchor navigation 
          enableNavigationAlways: false, // Activates all anchors clickable always
          enableDoneState: true, // Add done state on visited steps
          markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
          unDoneOnBackNavigation: false, // While navigate back, done state will be cleared
          enableDoneStateNavigation: true // Enable/Disable the done state navigation
        },
        disabledSteps: [], // Array Steps disabled
        errorSteps: [], // Highlight step with errors
        hiddenSteps: []
      });


        });
      </script>
    </script>
    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../assets/vendor/quill/quill.min.js"></script>
    <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

    <script>

      </body>

      </html>