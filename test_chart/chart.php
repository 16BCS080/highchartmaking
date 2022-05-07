<!DOCTYPE HTML>
<html>
<head> 
<body bgcolor="#000000"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

<script src='https://code.highcharts.com/modules/boost.js'></script>
<script src='https://code.highcharts.com/modules/exporting.js'></script>

<script type="text/javascript">

    jQuery(function () {
        var chart;
        jQuery(document).ready(function () { 

            jQuery.getJSON("query_data.php", function (data_field) { 
                jQuery('#container').highcharts({
                    credits: {
                        enabled: false
                    },

                    colors: ['#0000ff', '#ff00ff'],
                    chart: {
                        backgroundColor: {
                            linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                            stops: [
                                [0, '#000000'],
                                [1, '#000000']
                            ]
                        },
                        style: {
                            fontFamily: 'calibri'
                        },
                        animation: {
                            duration: 1000
                        },
                        type: "spline",
                        spacingBottom: 0,
                        spacingTop: 0,
                        spacingLeft: 0,
                        spacingRight: 0,
                        marginLeft: 36,
                        marginBottom: 5,
                        marginTop: 2,
                        marginRight: 1,
                        zoomType: 'xy'
                    },
                    title: {
                        useHTML: false,
                        text: 'TEST'
                    },
                    style: {
                        color: '#ffffff'
                    },
                    xAxis: {
                        categories: data_field.category,
                        gridLineColor: '#000000',
                        labels: {
                            enabled: false//default is true
                        },
                        lineColor: '#000000',
                        tickColor: '#000000'
                    },
                    yAxis: {
                        tickInterval: 100,
                        gridLineDashStyle: 'longdash',
                        gridLineColor: '#030303',
                        minorTickWidth: 1,
                        title: {
                            text: 'Balance'
                        },
                        labels: {
                            height: 100
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.85)',
                        style: {
                            color: '#F0F0F0'
                        },
                        headerFormat: '{point.x}<br>', 
                        pointFormat: '{series.name}: <b>{point.y:.2f}</b>'
                    },
                    legend: {
                        x: 0,
                        y: 0,
                        borderWidth: 0
                    },
                    plotOptions: {
                        spline: {
                            marker: {
                                fillColor: '#FFFFFF',
                                lineWidth: 1,
                                lineColor: null, // inherit from series
                                radius: 1,
                                enabled: true
                            }
                        }
                    },
                    series: data_field.data
                });
            });
        });
    });

</script>
<div id="container" style="height: 500px; width: auto;"></div>
</body>
</html>