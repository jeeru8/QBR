window.onload = function () {

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            title:{
                
            },
            axisY: {
                
            },
            legend: {
                cursor:"pointer",
                itemclick : toggleDataSeries
            },
            toolTip: {
                shared: true,
                content: toolTipFormatter
            },
            data: [{
                type: "bar",
                showInLegend: true,
                name: "Warranty",
                color: "blue",
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
                color: "gray",
                dataPoints: [
                    { y: 1, label: "Mammography" },
                    { y: 0, label: "Ultrasound" },
                    { y: 0, label: "Rad Systems" },
                ]
            }]
        });
        chart2.render();

        function toolTipFormatter(e) {
            var str = "";
            var total = 0 ;
            var str3;
            var str2 ;
            for (var i = 0; i < e.entries.length; i++){
                var str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
                total = e.entries[i].dataPoint.y + total;
                str = str.concat(str1);
            }
            str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
            str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
            return (str2.concat(str)).concat(str3);
        }

        function toggleDataSeries(e) {
            if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            }
            else {
                e.dataSeries.visible = true;
            }
            chart2.render();
        }

        }