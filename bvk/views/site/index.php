<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

   <!--  <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div> -->


     <html>
 <head>
 <style type="text/css">
 
#chartdiv {
    width       : 100%;
    height      : 700px;
    font-size   : 11px;
}   

#placeholder {
  width: 200px;
  height: 200px;
  position: absolute;
  right: 0;
  top: 300px;
  border: 3px solid #fff;
  opacity: 0.9;
  background: #ccc;
}
.amcharts-graph-graph2 .amcharts-graph-stroke {
  stroke-dasharray: 4px 5px;
  stroke-linejoin: round;
  stroke-linecap: round;
  -webkit-animation: am-moving-dashes 1s linear infinite;
  animation: am-moving-dashes 1s linear infinite;
}

@-webkit-keyframes am-moving-dashes {
  100% {
    stroke-dashoffset: -28px;
  }
}
@keyframes am-moving-dashes {
  100% {
    stroke-dashoffset: -28px;
  }
}
 </style>
 </head>
 <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/usaLow.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
                        
<div id="chartdiv"></div>   
<div id="placeholder"></div>
<div>

<form action="Visualization.html">
    <input type="submit" value="Back">
</form>

</div>


        
<script type="text/javascript">
var map = AmCharts.makeChart( "chartdiv", {
  "type": "map",
  "theme": "light",
  "colorSteps": 10,

  "dataProvider": {
    "map": "usaLow",
    "areas": [ {
      "id": "US-AL",
      "value": 4447100
    }, {
      "id": "US-AK",
      "value": 626932
    }, {
      "id": "US-AZ",
      "value": 5130632
    }, {
      "id": "US-AR",
      "value": 2673400
    }, {
      "id": "US-CA",
      "value": 33871648
    }, {
      "id": "US-CO",
      "value": 4301261
    }, {
      "id": "US-CT",
      "value": 3405565
    }, {
      "id": "US-DE",
      "value": 783600
    }, {
      "id": "US-FL",
      "value": 15982378
    }, {
      "id": "US-GA",
      "value": 8186453
    }, {
      "id": "US-HI",
      "value": 1211537
    }, {
      "id": "US-ID",
      "value": 1293953
    }, {
      "id": "US-IL",
      "value": 12419293
    }, {
      "id": "US-IN",
      "value": 6080485
    }, {
      "id": "US-IA",
      "value": 2926324
    }, {
      "id": "US-KS",
      "value": 2688418
    }, {
      "id": "US-KY",
      "value": 4041769
    }, {
      "id": "US-LA",
      "value": 4468976
    }, {
      "id": "US-ME",
      "value": 1274923
    }, {
      "id": "US-MD",
      "value": 5296486
    }, {
      "id": "US-MA",
      "value": 6349097
    }, {
      "id": "US-MI",
      "value": 44444444
    }, {
      "id": "US-MN",
      "value": 4919479
    }, {
      "id": "US-MS",
      "value": 2844658
    }, {
      "id": "US-MO",
      "value": 5595211
    }, {
      "id": "US-MT",
      "value": 902195
    }, {
      "id": "US-NE",
      "value": 1711263
    }, {
      "id": "US-NV",
      "value": 1998257
    }, {
      "id": "US-NH",
      "value": 1235786
    }, {
      "id": "US-NJ",
      "value": 8414350
    }, {
      "id": "US-NM",
      "value": 1819046
    }, {
      "id": "US-NY",
      "value": 18976457
    }, {
      "id": "US-NC",
      "value": 8049313
    }, {
      "id": "US-ND",
      "value": 642200
    }, {
      "id": "US-OH",
      "value": 11353140
    }, {
      "id": "US-OK",
      "value": 3450654
    }, {
      "id": "US-OR",
      "value": 3421399
    }, {
      "id": "US-PA",
      "value": 12281054
    }, {
      "id": "US-RI",
      "value": 1048319
    }, {
      "id": "US-SC",
      "value": 4012012
    }, {
      "id": "US-SD",
      "value": 754844
    }, {
      "id": "US-TN",
      "value": 5689283
    }, {
      "id": "US-TX",
      "value": 20851820
    }, {
      "id": "US-UT",
      "value": 2233169
    }, {
      "id": "US-VT",
      "value": 608827
    }, {
      "id": "US-VA",
      "value": 7078515
    }, {
      "id": "US-WA",
      "value": 5894121
    }, {
      "id": "US-WV",
      "value": 1808344
    }, {
      "id": "US-WI",
      "value": 5363675
    }, {
      "id": "US-WY",
      "value": 0
    } ]
  },

  "areasSettings": {
    "autoZoom": true
  },

  "valueLegend": {
    "right": 10,
    "minValue": "little",
    "maxValue": "a lot!"
  },

  "export": {
    "enabled": true
  }

  // "listeners": [{
  //   "event": "clickMapObject",
  //   "method": function(event) {
  //     document.getElementById("placeholder").innerHTML = '<img src="http://lorempixel.com/200/200/city/' + event.mapObject.title + '/" />';
  //   }
  //}]

} );
</script>

</html>
</div>
