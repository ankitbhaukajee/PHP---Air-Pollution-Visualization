<?php


/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="site-index">
<div class="container" style="margin-top: 80px;">

<html>
 <head>
 <style type="text/css">
 #chartdiv {
	width	: 100%;
	height	: 500px;
}								
</style>
</head>

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<h1>
<div id="chartdiv"></div>   
<div id="placeholder"></div>
<div>
<!-- Chart code -->
<script>

var data = sessionStorage.getItem("sent").split(",").map(Number);;
// var first = sessionStorage.getItem("first");
var id=data[0]; 
var white=data[1]; 
var black=data[2]; 
var hispanic=data[3];
//title+=data[4];

// alert(id);
// alert(first); 
// alert(second); 
// alert(third); 
var chart = AmCharts.makeChart("chartdiv",
{
	
    //alert(a);
    "titles": [
        {
            "text": "Lung Cancer Data For "+sessionStorage.name,
            "size": 20
        }
    ],
    
    "type": "serial",
    "theme": "light",
    "dataProvider": [{
        "name": "White",
        "points": white,
        "color": "#7F8DA9",
        "bullet": "https://www.amcharts.com/lib/images/faces/F05.png"
    }, {
        "name": "Black",
        "points": black,
        "color": "#C0C0C0",
        "bullet": "https://www.amcharts.com/lib/images/faces/FH03.png"
    },  {
        "name": "Hispanic",
        "points": hispanic,
        "color": "#FF0000",
        "bullet": "https://www.amcharts.com/lib/images/faces/E01.png"
    }],
     "synchronizeGrid":true,
    "valueAxes": [{
        "maximum": 100,
        "minimum": 0,
        "axisAlpha": 2,
        "dashLength": 4,
        "position": "left",
        "axisColor": "#FF6600",
        "axisThickness": 4
        
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "<span style='font-size:13px;'>[[category]]: <b>[[value]]</b></span>",
        "bulletOffset": 10,
        "bulletSize": 52,
        "colorField": "color",
        "cornerRadiusTop": 8,
        "customBulletField": "bullet",
        "fillAlphas": 0.8,
        "lineAlpha": 0,
        "type": "column",
        "valueField": "points"
    }],
    "marginTop": 0,
    "marginRight": 0,
    "marginLeft": 0,
    "marginBottom": 0,
    "autoMargins": false,
    "categoryField": "name",
    "categoryAxis": {
        "axisAlpha": 0,
        "gridAlpha": 0,
        "inside": true,
        "tickLength": 0
    },
    "export": {
    	"enabled": true
     }
});
</script>
</html>
</div>
<div >
    <br>
    <br>
    <br>
    <p><font size="6">* Rates are per 100,000 persons</font></p>
    
</div>
</div>