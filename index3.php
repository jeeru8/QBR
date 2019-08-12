<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>QBR</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

 

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" width="200" height="200" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="generate3.php">
                                <i class="fas fa-copy"></i>Generate QBR Report</a>
                           
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo2.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="generate3.php">
                                <i class="fas fa-copy"></i>Generate QBR Report</a>
                            
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Sample</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Sample</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Sample</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/logo.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Sample</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/logo.png" alt="Sample" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Sample</a>
                                                    </h5>
                                                    <span class="email">sample@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                 
                                    <h1 align="center">Welcome to QBR</h1>
                                    
                                    <hr>

                                    

                                </div>
                            </div>
                        </div>

                         

                        <hr>


                        <div class="row">
                            <div class="col-md-6">
                                <h3 align="center" class="alert alert-info">Customer Information</h3>

                                <h5> <b>Customer Name:</b> &nbsp;AYUTTHAYA HOSPITAL</h5>
                                    <br>
                                    <h5> Country of Operation: &nbsp;Thailand</h5>
                                    <br>
                                    <h5> Quarter in Review: &nbsp;<br> <?php echo $_REQUEST['date1'];?> - <?php echo $_REQUEST['date2'];?></h5>

                                    
                            </div>

                            <div class="col-md-6">
                                <img width="500" height="500" align="center" src="images/wallpaper2.jpg" class="img-responsive"/>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info">Your GE Install Base</h3>

                                   
                            </div>
                        </div>

                         <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info">Service Delivery - Corrective Jobs</h3>

                                   
                            </div>
                        </div>
                      
                        <hr>

                          <div class="row">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info">Equipment Level Coverage & Uptimes</h3>

                                    
                            </div>
                        </div>

                        <hr>


                        <div class="row">
                            <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Equipment ID</th>
                                                <th>Description</th>
                                                <th>Modality</th>
                                                <th>Coverage</th>
                                                <th>Warranty Expiration</th>
                                                <th>Coverage Start</th>
                                                <th>Coverage End</th>
                                                <th>Current Year Contract Uptime (%)</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>1-4192510408</td>  
                                               <td>SOLARIX 350 TUBE UNIT FOR BRIGHTSPEED SELECT SYSTEMS.</td>               
                                               <td>TUBES / TARGETS</td>
                                               <td>NO CONTRACT</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>

                                            <tr>
                                               <td>1-4829858883</td>  
                                               <td>SOLARIX 350 TUBE UNIT FOR BRIGHTSPEED SELECT SYSTEMS.</td>               
                                               <td>TUBES / TARGETS</td>
                                               <td>NO CONTRACT</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>

                                             <tr>
                                               <td>GIB_S_TH_0856210162</td>  
                                               <td>LOGIQ BOOK XP</td>               
                                               <td>CT</td>
                                               <td>CONTRACT</td>
                                                <td></td>
                                                <td>4/1/2019</td>
                                                <td>3/31/2020</td>
                                                <td>99.1837</td>
                                                
                                            </tr>

                                             <tr>
                                               <td>GIB_S_SG_0847374126</td>  
                                               <td>LOGIQ E BT08 WITH CART</td>               
                                               <td>ULTRASOUND</td>
                                               <td>NO CONTRACT</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>

                                            <tr>
                                               <td>GIB_S_TH_0856370228</td>  
                                               <td>LOGIQ E</td>               
                                               <td>ULTRASOUND</td>
                                               <td>NO CONTRACT</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>

                                            <tr>
                                               <td>GIB_S_TH_0856370418</td>  
                                               <td>LOGIQ C2 BT08</td>               
                                               <td>ULTRASOUND</td>
                                               <td>NO CONTRACT</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>100</td>
                                                
                                            </tr>

                                              <tr>
                                               <td>GIB_S_TH_1573UL0240</td>  
                                               <td>LOGIQ V5</td>               
                                               <td>ULTRASOUND</td>
                                               <td> CONTRACT</td>
                                                <td>2/10/2017</td>
                                                <td>1/1/2019</td>
                                                <td>12/31/2019</td>
                                                <td>100</td>
                                                
                                            </tr>

                                              <tr>
                                               <td>GIB_S_TH_1573UL0423</td>  
                                               <td>LOGIQ V5</td>               
                                               <td>ULTRASOUND</td>
                                               <td>CONTRACT</td>
                                                <td>5/17/2017</td>
                                                <td>1/1/2019</td>
                                                <td>12/31/2019</td>
                                                <td>100</td>
                                                
                                            </tr>

                                              <tr>
                                               <td>GIB_S_TH_1573UL0708</td>  
                                               <td>LOGIQ V5 EXPERT R2</td>               
                                               <td>ULTRASOUND</td>
                                               <td>CONTRACT</td>
                                                <td>3/22/2018</td>
                                                <td>3/23/2018</td>
                                                <td>3/22/2020</td>
                                                <td>100</td>
                                                
                                            </tr>

                                              
                                           
                                        </tbody>
                                    </table>
                                </div>
                        </div>


                        <hr>

                          <div class="row">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info">Technical Assessment</h3>

                                    
                            </div>
                        </div>

                        <hr>


                        <div class="row">
                            <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>System</th>
                                                <th>Findings</th>
                                                <th>Actions</th>
                                                <th>Recommendations</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td></td>
                                               <td></td>
                                               <td></td>
                                               <td></td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                        <hr>

                          <div class="row" align="center">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info">Service Delivery - Planned Jobs</h3>

                                <hr>

                                <img align="center" src="images/TH.png" class="img-responsive"/>
                                    
                            </div>
                        </div>


                         <div class="row">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info"> FMI</h3>

                                    
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 align="center" class="alert alert-info"> Others</h3>

                                    
                            </div>
                        </div>

                        <hr>



                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main3.js"></script>

</body>

</html>
<!-- end document-->