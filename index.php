<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GE">


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

    <style type="text/css">
        html, body {
        padding-top: 20px;
    }

    [data-role="dynamic-fields"] > .form-inline + .form-inline {
        margin-top: 0.5em;
    }

    [data-role="dynamic-fields"] > .form-inline [data-role="add"] {
        display: none;
    }

    [data-role="dynamic-fields"] > .form-inline:last-child [data-role="add"] {
        display: inline-block;
    }

    [data-role="dynamic-fields"] > .form-inline:last-child [data-role="remove"] {
        display: none;
    }
        </style>




 


 

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
                                 
                                    <h1 align="center">Customer Information</h1>
                                    
                                    <hr>

                                    

                                </div>
                            </div>
                        </div>

                         

                        <hr>


                        <div class="row">
                            <div class="col-md-6">
                                <h3 align="center" class="alert alert-info">Customer Information</h3>

                                    <h5> <b>Customer Name:</b> &nbsp; <?php $GET['customer_name'];?> </h5>
                                    <br>
                                    <h5> Country of Operation: &nbsp;<?php $GET['country'];?></h5>
                                    <br>
                                    <h5> Quarter in Review: &nbsp;<br> <?php echo $_REQUEST['date1'];?> to <?php echo $_REQUEST['date2'];?></h5>
                            </div>

                            <div class="col-md-6" align="center">
                                <img width="500" height="500" src="images/wallpaper2.jpg" class="img-responsive"/>
                            </div>
                        </div>


                        <hr>
                        <form action="GENERATE/index2.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 align="center" class="alert alert-info">Technical Contact</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name" name="tech_name" class="form-control"/><br>
                                        <input type="text" placeholder="Title" name="tech_title" class="form-control"/><br>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" placeholder="Email" name="tech_email" class="form-control"/><br>
                                        <input type="text" placeholder="Info" name="tech_info" class="form-control"/><br>
                                    </div>
                                </div>
                                
                                
                                   
                            </div>

                            <div class="col-md-6">
                                <h3 align="center" class="alert alert-info">Commercial Contact</h3>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text"  placeholder="Name" name="comm_name" class="form-control"/><br>
                                        <input type="text"  placeholder="Title" name="comm_title" class="form-control"/><br>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text"  placeholder="Email" name="comm_email" class="form-control"/><br>
                                        <input type="text"  placeholder="Info" name="comm_info" class="form-control"/><br>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>



                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info">Your GE Install Base</h3>

                                <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>IB Entitlement by Modality</h3>
                                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3>Connectivity by Modality</h3>
                                        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                                    </div>
                                </div>


                                

                                   
                            </div>
                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include1" value="include1" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment1">
                            
                            </textarea>
                            </div>

                            <div class="col-md-6">
                            <label for="comment">GE Recommendations:</label>
                            <textarea rows="4" cols="50" class="form-control" name="ge1">
                            
                            </textarea>
                            </div>
                        </div>


                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info">Service Delivery - Corrective Jobs</h3>

                                   
                            </div>

                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include2" value="include2" />
                            </div>
                        </div>
                      
                         <hr>

                         <div class="row">
                            <div class="col-md-6">
                                <h3>Initial asset availability # of Jobs</h3>
                                <div id="chartContainer3" style="height: 300px; width: 70%;"></div>
                            </div>

                            <div class="col-md-3">
                                <label class="for"><b>Time To Repair</b></label>
                                <h1><?php $GET['time'];?></h1>
                                <br>
                                <label class="for">Hours on Average<br>(Hard Down Jobs)</label>
                            </div>

                            <div class="col-md-3">
                                <label class="for"><b>Uptime</b></label>
                                <h1><?php $GET['uptime'];?></h1>
                                <br>
                                <label class="for">Average Uptime across entitled systems</label>
                            </div>
                         </div>

                         <hr>

                         <div class="row">
                            <div class="col-md-6">
                                <label class="for">Remote Fix Rate</label>
                                <br>
                                <h1><?php $GET['remote'];?>%</h1>
                            </div>

                            <div class="col-md-6">
                            <label class="for">Parts Changed</label>
                                <br>
                                <h1><?php $GET['parts'];?></h1>
                            </div>
                         </div>

                         <hr>

                         <div class="row">

                            <div class="col-md-12">
                                <h3 align="center">Time to Close Distribution - Hard Down Jobs</h3>
                                <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                            </div>
                        
                         </div>   
                         
                         <hr>

                        
                         <div class="row">

                            <div class="col-md-12">
                                <h3 align="center">Time to Close Distribution - All Jobs</h3>
                                <div id="chartContainer5" style="height: 300px; width: 100%;"></div>
                            </div>
                        
                         </div>  
                    

                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment2">
                            
                            </textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info">Equipment Level Coverage & Uptimes</h3>

                                    
                            </div>

                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include3" value="include3" />
                            </div>

                        </div>

                        <hr>

                        

                        <hr>


                            <div class="row">
                            <div class="col-md-12">
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
                                              
                                                
                                            </tr>

                                            <tr>
                                               <?php echo $GET['equipment_data'];?>
                                                
                                            </tr>

                                             
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        

                       

                        </div>

                        

                  


                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment3">
                            
                            </textarea>
                            </div>
                        </div>
                        <hr>   

                        <div class="row">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info"> Technical Assessment</h3>

                                    
                            </div>

                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include4" value="include4" />
                            </div>
                            
                        </div>

                        <hr>

                        


                        <div class="row">
                            <div class="col-md-12" align="center">
                                <div data-role="dynamic-fields">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="field-name">System</label>
                                            <input type="text" class="form-control" id="field-name" name="system" placeholder="System">
                                        </div>
                                        <span>---</span>
                                        <div class="form-group">
                                            <label class="sr-only" for="field-value">Findings</label>
                                            <input type="text" class="form-control" id="field-value" name="findings" placeholder="Findings">
                                        </div>
                                        <span>---</span>
                                        <div class="form-group">
                                            <label class="sr-only" for="field-value">Actions</label>
                                            <input type="text" class="form-control" id="field-value" name="actions" placeholder="Actions">
                                        </div>
                                        <span>---</span>
                                        <div class="form-group">
                                            <label class="sr-only" for="field-value">Recommendations</label>
                                            <input type="text" class="form-control" id="field-value" name="recommendations" placeholder="Recommendations">
                                        </div>

                                        <button class="btn btn-danger" data-role="remove">
                                        <i class="fas fa-minus"></i>
                                        </button>
                                        <button class="btn btn-primary" data-role="add">
                                        <i class="fas fa-plus"></i>
                                        </button>
                                    </div>  <!-- /div.form-inline -->
                                </div>  <!-- /div[data-role="dynamic-fields"] -->
                            </div>  <!-- /div.col-md-12 -->
                        </div>  <!-- /div.row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment4">
                            
                            </textarea>
                            </div>
                        </div>
                        
                        <hr>

                        <div class="row" align="center">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info">Service Delivery - Planned Jobs</h3>

                                <hr>
                                <h5 align="center">Planned Maintenance (Completed & Upcoming)</h5>
                                <br>
                               
                                <?php $GET['delivery'];?>
                                    
                            </div>

                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include5" value="include5"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment5">
                            
                            </textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info"> FMI</h3>

                                    
                            </div>

                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include6" value="include6"/>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment6">
                            
                            </textarea>
                            </div>

                            <div class="col-md-6">
                            <label for="comment">GE Recommendations:</label>
                            <textarea rows="4" cols="50" class="form-control" name="ge2">
                            
                            </textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-11">
                                <h3 align="center" class="alert alert-info"> Other Information</h3>

                                    
                            </div>

                            <div class="col-md-1">
                                <label>Include</label>
                                <input type="checkbox" class="form-control" name="include7" value="include7"/>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6" align="center">
                                <label class="for">Upcoming Warrant Expiry<br>(Next 3 Months)</label>
                                <h1><?php echo $GET['warranty'];?></h1>
                            </div>

                            <div class="col-md-6" align="center">
                                <label class="for">Upcoming Contract Renewals<br>(Next 3 Months)</label>
                                <h1>0</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            <label for="comment">Closing Comment:</label>
                            <textarea rows="4" cols="50" class="form-control" name="comment7">
                            
                            </textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12" align="center">
                                <button type="submit" name="submit" class="btn btn-success btn-lg" onclick="myFunction()">
                                GENERATE QBR REPORT
                                </button>
                                <a href="index2.php" class="btn btn-danger btn-lg">RESET</a>
                                
                            </div>
                        </div>
                        </form>
                        
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
    <script>
        
        var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title:{
            
        },
        axisY: {
            
        },
       

        data: [{
            type: "bar",
            showInLegend: true,
            name: "Warranty",
            color: "#00d5ff",
            dataPoints: [
                { y: 0, label: <?php $GET['data_get'];?>},
                
               
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "Contract",
            color: "#0055e9",
            dataPoints: [
                { y: 1, label: <?php $GET['data_get'];?> },
               
            ]
        }]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        title:{
            
        },
        axisY: {
            
        },
       

        data: [{
            type: "bar",
            showInLegend: true,
            name: "Y",
            color: "#63666a",
            dataPoints: [
                { y: 1, label: <?php $GET['data_get'];?> },
                
               
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "N",
            color: "#005eb8",
            dataPoints: [
                { y: 0, label: <?php $GET['data_get'];?> },
              
            ]
        }]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer3", {
        animationEnabled: true,
        title:{
            
        },
        axisY: {
            
        },
       

        data: [{
            type: "bar",
            showInLegend: true,
            name: "Up",
            color: "#009cda",
            dataPoints: [
                { y: 4, label: <?php $GET['data_get'];?> }
               
               
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "Partial",
            color: "#d0cece",
            dataPoints: [
                { y: 1, label: <?php $GET['data_get'];?> },
                
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "Down",
            color: "#09244c",
            dataPoints: [
                { y: 0, label: <?php $GET['data_get'];?>},
                
            ]
        }]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer4",
    {
      title:{
        
      },
      data: [

      {
        dataPoints: [
        { x: 1, y: 2, label: "0-1 Days",color: "#00b050"},
        { x: 2, y: 1,  label: "1-15 Days" , color: "#ffc000" }
        
        ]
      }
      ]
    });

    chart.render();

    var chart = new CanvasJS.Chart("chartContainer5",
    {
      title:{
        
      },
      data: [

      {
        dataPoints: [
        { x: 1, y: 2, label: "0-1 Days",color: "#00b050"},
        { x: 2, y: 1,  label: "2-5 Days" , color: "#92d050" },
        { x: 3, y: 1,  label: "11-15 Days" , color: "#ffc000" },
        { x: 4, y: 1,  label: "16-30 Days" , color: "#ff9999" }
        
        ]
      }
      ]
    });

    chart.render();

    
    </script>

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
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(function() {
            // Remove button click
            $(document).on(
                'click',
                '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
                function(e) {
                    e.preventDefault();
                    $(this).closest('.form-inline').remove();
                }
            );
            // Add button click
            $(document).on(
                'click',
                '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
                function(e) {
                    e.preventDefault();
                    var container = $(this).closest('[data-role="dynamic-fields"]');
                    new_field_group = container.children().filter('.form-inline:first-child').clone();
                    new_field_group.find('input').each(function(){
                        $(this).val('');
                    });
                    container.append(new_field_group);
                }
            );
        });

        </script>

<script>
function myFunction() {
  alert("All the information will be generated. Click on Print Button on the top right side to translate in PDF format. Thank you for using the QBR");
}
</script>

<?php include 'php_queries/queries.php';?>

</body>

</html>
<!-- end document-->
