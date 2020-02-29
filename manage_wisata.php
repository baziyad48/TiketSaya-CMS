<?php
include 'firebase/auth_session.php'
?>

<html>

<head>
    <title>Manage Wisata Details — TiketSaya</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

    <div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">
            <div class="emblemapp">
                <img src="images/emblemapp.png" height="29" alt="">
            </div>
            <div class="menus">

                <div class="item-menu inactive">
                    <a href="dashboard.html">
                        <p class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="sales.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
                    <a href="wisata.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="customer.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="setting.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-cog"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="#">
                        <p class="icon-item-menu">
                            <i class="fas fa-power-off"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture">
                <img src="images/admin_picture.png" alt="">
            </div>
            <p class="admin-name">
                Angga Risky
            </p>
            <p class="admin-level">
                Super Admin
            </p>
            <ul class="admin-menus">
                <a href="dashboard.html">
                    <li>
                        My Dashboard
                    </li>
                </a>
                <a href="sales.html">
                    <li>
                        Ticket Sales
                    </li>
                </a>
                <a href="wisata.html">
                    <li class="active-link">
                        Manage Wisata
                    </li>
                </a>
                <a href="customer.html">
                    <li>
                        Customers <span class="badge-tiketsaya badge badge-pill badge-primary">96</span>
                    </li>
                </a>
                <a href="setting.html">
                    <li>
                        Account Settings
                    </li>
                </a>
                <a href="#">
                    <li style="padding-top: 120px;">
                        Log Out
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Candi
                </p>
                <nav aria-label="sitemap-ts breadcrumb">
                    <ol class="breadcrumb" style="margin-left: -15px; background: none;">
                        <li class="breadcrumb-item"><a style="color: #C7C7C7;" href="wisata.html">Wisata</a></li>
                        <li style="color: #21272C;" class="breadcrumb-item active" aria-current="page">Details Wisata
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">


                    <div class="row">
                        <div class="overlay-box col-md-4">
                            <a href="#" id="open_file" class="btn btn-primary btn-third-tiketsaya">Replace</a>
                        </div>
                        <div style="padding-left: 30px;" class="thumbnail-box col-md-4">
                            <p class="label-thumbnail">
                                Thumbnail Wisata
                            </p>
                            <img class="thumbnail-wisata" src="images/admin_picture.png" alt="">
                        </div>

                        <div class="col-md-5">
                            <form>

                                <div class="form-group content-sign-in">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Nama
                                        Wisata</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Wisata">
                                </div>
                                <div class="form-group">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Lokasi
                                        Wisata</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputPassword1" placeholder="Lokasi">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">Harga Tiket (US$)</label>
                                            <input type="number" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Harga">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">Tanggal Wisata</label>
                                            <input type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Tanggal">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: -20px;">
                                    <label class="title-input-type-primary-tiketsaya"
                                        for="exampleFormControlTextarea1">Ketentuan</label>
                                    <textarea class="input-type-primary-tiketsaya form-control"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title-input-type-primary-tiketsaya"
                                        for="exampleFormControlTextarea1">Deskripsi Wisata</label>
                                    <textarea class="input-type-primary-tiketsaya form-control"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">has Wifi?</label>
                                            <input type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Wifi">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">has Spot?</label>
                                            <input type="number" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Spot">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputPassword1">has Festival?</label>
                                            <input type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Festival">
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-bottom: -40px; visibility: hidden;"
                                    class="form-group content-sign-in">
                                    <input id="image_file" type="file" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Update</button>
                                <button style="margin-left: 10px;" type="reset"
                                    class="btn btn-primary btn-secondary-tiketsaya">Cancel</button>
                            </form>
                        </div>
                    </div>


                </div>



            </div>



        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
