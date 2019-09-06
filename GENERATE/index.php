<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>QBR Report</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body>
    <div class="row"></div>
    <hr>
    <div class="row">
        <div class="col-xl-3"><img src="assets/img/logo.png" width="100"></div>
        <div class="col-xl-6"></div>
        <div class="col-xl-3"><button class="btn btn-info" onclick="script()">Print this page to PDF</button></div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-left">One Services</h1>
        </div>
    </div>
    <h3>Quarterly Review Report</h3>
    <div class="row">
        <div class="col"><img src="assets/img/wallpaper.jpg" width="900">
            <div class="container">
                <p><strong>gehealthcare.com</strong></p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="container"></div>
            <div class="container">
                <h1 style="color: rgb(57,116,186);">Table of Contents</h1>
                <p>Table of Contents........................................................................................................................................................................................................................................................................................1</p>
                <p>Your Install Base...........................................................................................................................................................................................................................................................................................2<br></p>
                <p>Service Delivery - Corrective Jobs.........................................................................................................................................................................................................................................................3<br></p>
                <p>Technical Assessment................................................................................................................................................................................................................................................................................4<br></p>
                <p>Service Delivery - Planned Jobs.............................................................................................................................................................................................................................................................5<br></p>
                <p>Closing Comments.....................................................................................................................................................................................................................................................................................6<br></p>
                <p>Appendices....................................................................................................................................................................................................................................................................................................7<br></p>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!--CUSTOMER INFORMATION-->
          
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <p><strong>Customer Name: ASIAN HOSPITAL AND MEDICAL CENTER&nbsp;</strong></p>
                        <p><strong>Country of Operation: Philippines</strong></p>
                        <p><strong>Quarter in Review</strong></p>
                    </div>
                </div>
            <br>
            <br>
            <br>
                <div class="row">
                    <div class="col-xl-6">
                        <h4><strong>Technical Contact</strong></h4>
                    </div>
                    <div class="col">
                        <h4><strong>Commercial Contact:</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <br>
            

        <!--CONTACT-->
            
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Name : <?php echo $_REQUEST['tech_name'];?></strong></p>
                    <p><strong>Title : <?php echo $_REQUEST['tech_title'];?>&nbsp;</strong></p>
                    <p><strong>Email : <?php echo $_REQUEST['tech_email'];?></strong></p>
                    <p><strong>Contact Info: <?php echo $_REQUEST['tech_info'];?></strong></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Name : <?php echo $_REQUEST['tech_name'];?></strong></p>
                    <p><strong>Title : <?php echo $_REQUEST['tech_title'];?>&nbsp;</strong></p>
                    <p><strong>Email : <?php echo $_REQUEST['tech_email'];?></strong></p>
                    <p><strong>Contact Info: <?php echo $_REQUEST['tech_info'];?></strong></p>
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Name : <?php echo $_REQUEST['comm_name'];?></strong></p>
                    <p><strong>Title : <?php echo $_REQUEST['comm_title'];?>&nbsp;</strong></p>
                    <p><strong>Email : <?php echo $_REQUEST['comm_email'];?></strong></p>
                    <p><strong>Contact Info: <?php echo $_REQUEST['comm_info'];?></strong></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Name : <?php echo $_REQUEST['comm_name'];?></strong></p>
                    <p><strong>Title : <?php echo $_REQUEST['comm_title'];?>&nbsp;</strong></p>
                    <p><strong>Email : <?php echo $_REQUEST['comm_email'];?></strong></p>
                    <p><strong>Contact Info: <?php echo $_REQUEST['comm_info'];?></strong></p>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row">
                <div class="col">
                    <p><br>The following report is a summary of services provided by GE Healthcare and contains a holistic view of the <strong><em>services delivered</em></strong> aka jobs performed – both scheduled &amp; unscheduled; <strong><em>IB coverage &amp; uptime</em></strong>                        information; upcoming <strong><em>contractual renewals</em></strong> as well as our <strong><em>experts’ recommendations</em></strong> on relevant system health drivers including but not restricted to environmental conditions like
                        PGTH, system connectivity etc.<br><br><br><br><br><br></p>
        
                </div>
            </div>
        </div>

        <!--GE INSTALL BASE-->

        <?php

        error_reporting(0);
        if($_REQUEST['include1']=='include1'){

        
        echo'

        <div class="container">
        <div class="row">
                        <div class="col">
                            <h1>Your GE Install Base</h1>
                            <div class="row">
                                <div class="col">
                                    <p><br>This section provides an overview of all your GE Assets by modality &amp; facility (if applicable). &nbsp;It also gives you a high level as well as detail view of your IB’s coverage entitlement as well as current
                                        connectivity status.&nbsp;&nbsp;&nbsp;&nbsp; <br></p>
                                </div>
                            </div>
                        </div>
                    
        </div>
        </div>

        



        

        
        
        
        <div class="container">
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <p><strong>GE Recommendation</strong></p>
                    <p>______________________________________________________________________________________________________________________________________________________________________</p>
                    <p><em>GE Recommendations: '.$_REQUEST["ge1"].'</em><br></p>
                    <p>______________________________________________________________________________________________________________________________________________________________________</p>
                </div>
            </div>
        </div>

        <p class="alert alert-info">Comments: '.$_REQUEST["comment1"].'</p>
            <br>
            <br>
            <br>
            <br>

    
        ';
        }

        else{
            echo "";
        }
        
        ?>


        <!--Service Delivery Corrective Jobs-->
        
     
        <?php

        error_reporting(0);
        if($_REQUEST['include2']=='include2'){


        echo'
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Service Delivery – Corrective Jobs<br></h1>
                </div>
            </div>
        </div>
    
   
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Initial asset availability # of Jobs</h3>
                    <div id="chartContainer3" style="height: 300px; width: 70%;"></div>
                </div>

                <div class="col-md-3">
                    <label class="for"><b>Time To Repair</b></label>
                    <h1><?php echo $GET['data'];?></h1>
                    <br>
                    <label class="for">Hours on Average<br>(Hard Down Jobs)</label>
                </div>

                <div class="col-md-3">
                    <label class="for"><b>Time To Repair</b></label>
                    <h1><?php echo $GET['data'];?></h1>
                    <br>
                    <label class="for">Average Uptime across entitled systems</label>
                </div>
            </div>
        </div>

  
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label class="for">Remote Fix Rate</label>
                    <br>
                    <h1><?php echo $GET['data'];?>%</h1>
                </div>

                <div class="col-md-6">
                <label class="for">Parts Changed</label>
                    <br>
                    <h1><?php echo $GET['data'];?></h1>
                </div>
            </div>
        </div>
        
    
        <p class="alert alert-info">Comments: '.$_REQUEST["comment2"].'</p>
            <br>
            <br>
            <br>
            <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 align="center">Time to Close Distribution - Hard Down Jobs</h3>
                    <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
   
   
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 align="center">Time to Close Distribution - All Jobs</h3>
                    <div id="chartContainer5" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>


        ';
        }

        else{
            echo "";
        }

        ?>

        <br>
        <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        <!--EQUIPMENT LEVEL COVERAGE UPTIMES-->

        <?php

        error_reporting(0);
        if($_REQUEST['include3']=='include3'){

        echo '

        <div class="container">
        <h3 align="center">Equipment Level Coverage &amp; Uptimes</h3>
        <br>
     
         
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-striped table-data3">
                                        <thead class="thead-dark">
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
                                            <?php echo $GET['data'];?>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        

                        

                            </div>

                            <p class="alert alert-info">Comments: '.$_REQUEST["comment3"].'</p>
        </div>
        <br>
            <br>
            <br>
            <br>

        ';
        }

        else{
            echo "";
        }
        ?>

         


        <!--TECHNICAL ASSESMENT-->

        <?php

        error_reporting(0);
        if($_REQUEST['include4']=='include4'){ 

        echo '

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Technical Assessment</h1>
                    <p>Our technical team recently conducted a comprehensive health check on all the vascular systems.&nbsp;Here is a summary of the findings and recommendations. Detailed reports are attached in the appendix.<br></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">System</th>
                            <th scope="col">Findings</th>
                            <th scope="col">Actions</th>
                            <th scope="col">Recommendations</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">'.$_REQUEST['system'].'</th>
                            <td>'.$_REQUEST['findings'].'</td>
                            <td>'.$_REQUEST['actions'].'</td>
                            <td>'.$_REQUEST['recommendations'].'</td>
                        </tr>
                        
                        </tbody>
                    </table>
                    
                    
                </div>
            </div>
        </div>
        <br>

        <p class="alert alert-info">Comments: '.$_REQUEST["comment4"].'</p>
        ';
            }
            else{
                echo "";
            }
            ?>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
         
        
      <!--SERVICE DELIVERT PLANNED JOBS-->

        <?php

        error_reporting(0);
        if($_REQUEST['include5']=='include5'){ 
    
            echo '            
        
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Service Delivery - Planned Jobs</h1>
                    <br>
                    <?php echo $GET['data'];?>
                </div>
            </div>
        </div>
        <br>
        <p class="alert alert-info">Comments: '.$_REQUEST["comment5"].'</p>

        ';
            }
            else{
                echo "";
            }
            ?>

            <br>
            <br>
            <br>
    
           
         <!--FMI-->

         <?php

        error_reporting(0);
        if($_REQUEST['include6']=='include6'){ 

            echo '   
    
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>FMI</h1>
                    <br>
                    <p><strong>GE Recommendation</strong></p>
                    <p>______________________________________________________________________________________________________________________________________________________________________</p>
                    <p><em>GE Recommendations: '.$_REQUEST["ge2"].'</em><br></p>
                    <p>______________________________________________________________________________________________________________________________________________________________________</p>
                    
                </div>
            </div>
        </div>
  
    <br>
    <p class="alert alert-info">Comments: '.$_REQUEST["comment6"].'</p>

    ';
            }
            else{
                echo "";
            }
            ?>

            <br>
            <br>
            <br>

       



        <!--OTHER INFORMATION-->


    
        <?php

        error_reporting(0);
        if($_REQUEST['include7']=='include7'){ 

        echo '
        <div class="container">
            <h1>Other Information</h1>
            <br>
            <div class="row">
            
           
                <div class="col-md-6">
                    <p><strong>Upcoming Warranty Expiry</strong><br><strong>(Next 3 months)</strong><br></p><br>
                    <h1><?php echo $GET['data'];?>*</h1>

                </div>
                <div class="col-md-6">
                    <p><strong>Upcoming Contract Renewals</strong><br><strong>(Next 3 months)</strong><br></p><br>
                    <h1><?php echo $GET['data'];?></h1
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>* Ultrasound Vivid</p>
                </div>
            </div>
        </div>

        ';
        }

        else{

            echo"";
        }
        ?>

        <br>

        <br>
        <p class="alert alert-info">Closing Comments: <?php error_reporting(0); echo $_REQUEST['comment7'];?></p>

            <br>
            <br>
            <br>
            <br>


        <!--APPENDECIS-->


        <?php

        error_reporting(0);

        if($_REQUEST['include8']=='include8'){ 

        echo '
 
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Appendices</h1>
                </div>
            </div>
        </div>
        ';
        }

        else{
            echo "";
        }
        ?>





<!--SCRIPTS--->
        
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
                { y: 0, label: "Mammography" },
                { y: 7, label: "Ultrasound" },
                { y: 2, label: "Rad Systems" },
               
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "Contract",
            color: "#0055e9",
            dataPoints: [
                { y: 1, label: "Mammography" },
                { y: 0, label: "Ultrasound" },
                { y: 0, label: "Rad Systems" },
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
                { y: 4, label: "<?php echo $GET['data'];?>" }
               
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "N",
            color: "#005eb8",
            dataPoints: [
                { y: 1, label: "<?php echo $GET['data'];?>" }
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
                { y: 4, label: "<?php echo $GET['data'];?>" }
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "Partial",
            color: "#d0cece",
            dataPoints: [
                { y: 1, label: "<?php echo $GET['data'];?>" }
            ]
        },
        {
            type: "bar",
            showInLegend: true,
            name: "Down",
            color: "#09244c",
            dataPoints: [
                { y: 0, label: "<?php echo $GET['data'];?>" }
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

<script>
function script() {
  window.print();

}
</script>
    



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>