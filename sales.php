<?php
include 'firebase/auth_session.php'
?>

<html>

<head>
    <title>Sales — TiketSaya</title>
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

                <div class="item-menu">
                    <a href="sales.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
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
                    <li class="active-link">
                        Ticket Sales
                    </li>
                </a>
                <a href="wisata.html">
                    <li>
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
                    Ticket Sales
                </p>
                <p class="sub-header-title">
                    The items are bought around the world
                </p>
            </div>
        </div>

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">


                    <table class="table-tiketsaya table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Picture</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Jumlah Wisata</th>
                                <th scope="col">Sisa Balance</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td scope="row user-table-item">
                                    <img class="user-table-item" src="images/user_1.png" />
                                </td>
                                <td>Mark Balley</td>
                                <td>2 Place</td>
                                <td>US$ 109</td>
                                <td>
                                    <a href="sales_detail.html" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row user-table-item">
                                    <img class="user-table-item" src="images/user_3.png" />
                                </td>
                                <td>Aulia Amanda</td>
                                <td>6 Place</td>
                                <td>US$ 822</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row user-table-item">
                                    <img class="user-table-item" src="images/user_2.png" />
                                </td>
                                <td>Puji Sari</td>
                                <td>3 Place</td>
                                <td>US$ 500</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row user-table-item">
                                    <img class="user-table-item" src="images/user_1.png" />
                                </td>
                                <td>Mark Balley</td>
                                <td>2 Place</td>
                                <td>US$ 109</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row user-table-item">
                                    <img class="user-table-item" src="images/user_3.png" />
                                </td>
                                <td>Aulia Amanda</td>
                                <td>6 Place</td>
                                <td>US$ 822</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>



            </div>



        </div>
    </div>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
