<?php


/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="site-index">
<div class="container" style="
    margin-top: 95px;">

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
 <body>
 <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/usaLow.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
                        
<div id="chartdiv"></div>   







        
<script type="text/javascript">
var map = AmCharts.makeChart( "chartdiv", {
  "type": "map",
  "theme": "light",
  "colorSteps": 5,

  "dataProvider": {
    "map": "usaLow",
    "areas": [ {

      "id": "US-AL",
      "value": 18
    }, {
      "id": "US-AK",
      "value": 45
    }, {
      "id": "US-AZ",
      "value": 63.03
    }, {
      "id": "US-AR",
      "value": 72
    }, {
      "id": "US-CA",
      "value": 85
    }, {
      "id": "US-CO",
      "value": 40.23
    }, {
      "id": "US-CT",
      "value": 16
    }, {
      "id": "US-DE",
      "value": 27
    }, {
      "id": "US-FL",
      "value": 40
    }, {
      "id": "US-GA",
      "value": 56.21
    }, {
      "id": "US-HI",
      "value": 45.71
    }, {
      "id": "US-ID",
      "value": 34
    }, {
      "id": "US-IL",
      "value": 40.47
    }, {
      "id": "US-IN",
      "value": 35.9
    }, {
      "id": "US-IA",
      "value": 20
    }, {
      "id": "US-KS",
      "value": 24
    }, {
      "id": "US-KY",
      "value": 28
    }, {
      "id": "US-LA",
      "value": 45.75
    }, {
      "id": "US-ME",
      "value": 19
    }, {
      "id": "US-MD",
      "value": 35
    }, {
      "id": "US-MA",
      "value": 25.54
    }, {
      "id": "US-MI",
      "value": 56.79
    }, {
      "id": "US-MN",
      "value": 19.96
    }, {
      "id": "US-MS",
      "value": 59
    }, {
      "id": "US-MO",
      "value": 13
    }, {
      "id": "US-MT",
      "value": 85
    }, {
      "id": "US-NE",
      "value": 27
    }, {
      "id": "US-NV",
      "value": 51.63
    }, {
      "id": "US-NH",
      "value": 20
    }, {
      "id": "US-NJ",
      "value": 28
    }, {
      "id": "US-NM",
      "value": 31
    }, {
      "id": "US-NY",
      "value": 59.75
    }, {
      "id": "US-NC",
      "value": 32
    }, {
      "id": "US-ND",
      "value": 41
    }, {
      "id": "US-OH",
      "value": 26.63
    }, {
      "id": "US-OK",
      "value": 24
    }, {
      "id": "US-OR",
      "value": 21.65
    }, {
      "id": "US-PA",
      "value": 40.23
    }, {
      "id": "US-RI",
      "value": 17
    }, {
      "id": "US-SC",
      "value": 17
    }, {
      "id": "US-SD",
      "value": 13
    }, {
      "id": "US-TN",
      "value": 22
    }, {
      "id": "US-TX",
      "value": 44.44
    }, {
      "id": "US-UT",
      "value": 60.4
    }, {
      "id": "US-VT",
      "value": 16
    }, {
      "id": "US-VA",
      "value": 24.85
    }, {
      "id": "US-WA",
      "value": 31.59
    }, {
      "id": "US-WV",
      "value": 20
    }, {
      "id": "US-WI",
      "value": 17
    }, {
      "id": "US-WY",
      "value": 20
    } ]
  },

  "areasSettings": {
    "autoZoom": true
  },

  "valueLegend": {
    "right": 10,
    "minValue": "Less Polluted",
    "maxValue": "Most Polluted"
  },

  

//   "listeners": [{
//     "event": "clickMapObject",
//     "method": function(event) {
//      var id = event.mapObject.id ;
//   //    alert(id);
//      window.open('<?php // echo Yii::$app->getUrlManager()->getBaseUrl();?> // /site/state', {id: id});
//       // document.getElementById("placeholder").innerHTML = '<img src="http://lorempixel.com/200/200/city/' + event.mapObject.title + '/" />';
//     }
//   }]

  "listeners": [{
	    "event": "clickMapObject",
	    "method": function(event) {
	     var id = event.mapObject.id ;
       //alert(baseUrl + '/site/state');
	     
       var success=false;
       $.ajax({
        url: '<?php echo Yii::$app->request->baseUrl. '/site/about' ?>',
        data: ({id: id }),
        type: 'post',
        dataType: 'json',
        success: function(res)
        {
          var id=res['id'];
          var first=res['white'];
          var second=res['black'];
          var third=res['hispanic'];
          var fourth=res['state_name'];
          
            var data=[id,first,second,third];
            sessionStorage.setItem("sent",data);
            sessionStorage.setItem('name',fourth);
            //alert(data);
            window.open("state");
            
            }
        });
       
       //window.open("state",a);
       
       // sessionStorage.setItem("sent", id);
      
	     
	     
       }
	   }]
	  

} );
</script>
</body>



</html>
</div>
</div>