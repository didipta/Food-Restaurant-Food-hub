$(function(){
    $('.bars li .bar').each(function(key,bar){
       var percentage=$(this).data('percentage');
       $(this).animate({
               'height' : percentage + '%'
           },1000);
    });
});


$(function(){
    $('.item-bars li .item-bar').each(function(key,bar){
       var percentage=$(this).data('percentage');
       $(this).animate({
               'width' : percentage + 300 + '%'
           },1000);
    });
});


window.onload = function () {

    var options = {
        animationEnabled: true,
        theme: "light2",
        axisX:{
            valueFormatString: "DD MMM"
        },
        axisY: {
            suffix: "K",
            minimum: 30
        },
        toolTip:{
            shared:true
        },  
        legend:{
            cursor:"pointer",
            verticalAlign: "bottom",
            horizontalAlign: "left",
            dockInsidePlotArea: true,
            itemclick: toogleDataSeries
        },
        data: [{
            type: "line",
            showInLegend: true,
            name: "Income",
            markerType: "square",
            xValueFormatString: "DD MMM, YYYY",
            
            yValueFormatString: "#,##0K",
            dataPoints: [
                { x: new Date(2021, 6, 1), y: 63 },
                { x: new Date(2021, 6, 2), y: 69 },
                { x: new Date(2021, 6, 3), y: 65 },
                { x: new Date(2021, 6, 4), y: 70 },
                { x: new Date(2021, 6, 5), y: 71 },
                { x: new Date(2021, 6, 6), y: 65 },
                { x: new Date(2021, 6, 7), y: 73 },
                { x: new Date(2021, 6, 8), y: 96 },
                { x: new Date(2021, 6, 9), y: 84 },
                { x: new Date(2021, 6, 10), y: 85 },
                { x: new Date(2021, 6, 11), y: 86 },
                { x: new Date(2021, 6, 12), y: 94 },
                { x: new Date(2021, 6, 13), y: 97 },
                { x: new Date(2021, 6, 14), y: 86 },
                { x: new Date(2021, 6, 15), y: 89 }
            ]
        },
        {
            type: "line",
            showInLegend: true,
            name: "Investment",
            lineDashType: "dash",
            color: "#F08080",
            yValueFormatString: "#,##0K",
            dataPoints: [
                { x: new Date(2021, 6, 1), y: 60 },
                { x: new Date(2021, 6, 2), y: 57 },
                { x: new Date(2021, 6, 3), y: 51 },
                { x: new Date(2021, 6, 4), y: 56 },
                { x: new Date(2021, 6, 5), y: 54 },
                { x: new Date(2021, 6, 6), y: 55 },
                { x: new Date(2021, 6, 7), y: 54 },
                { x: new Date(2021, 6, 8), y: 69 },
                { x: new Date(2021, 6, 9), y: 65 },
                { x: new Date(2021, 6, 10), y: 66 },
                { x: new Date(2021, 6, 11), y: 63 },
                { x: new Date(2021, 6, 12), y: 67 },
                { x: new Date(2021, 6, 13), y: 66 },
                { x: new Date(2021, 6, 14), y: 56 },
                { x: new Date(2021, 6, 15), y: 64 }
            ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);
    
    function toogleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else{
            e.dataSeries.visible = true;
        }
        e.chart.render();
    }
    
    }