

    var chart = new CanvasJS.Chart("chartContainer", {
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
    chart.render();



   