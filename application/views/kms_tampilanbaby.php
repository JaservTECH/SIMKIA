<?php
if (!defined ('BASEPATH'))
	exit ("you dont have to see this contenct");
?>
<!doctype html>
<html>

<head>
    <title>Line Chart with Custom Tooltips</title>
    <script src="<?php echo base_url();?>resource/js/Chart.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
    #canvas-holder1 {
        width: 300px;
        margin: 20px auto;
    }
    #canvas-holder2 {
        width: 100%;
    }
    #chartjs-tooltip {
        opacity: 1;
        position: absolute;
        background: rgba(0, 0, 0, .7);
        color: white;
        padding: 3px;
        border-radius: 3px;
        -webkit-transition: all .1s ease;
        transition: all .1s ease;
        pointer-events: none;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
    }
   	.chartjs-tooltip-key{
   		display:inline-block;
   		width:10px;
   		height:10px;
   	}
    </style>
</head>

<body>
    <div id="canvas-holder2">
        <canvas id="chart2" width="800" height="400" />
    </div>

    <div id="chartjs-tooltip"></div>


    <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var lineChartData = {
        labels: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24],
        datasets: [
		{
            fillColor: "rgba(220,220,220,0)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [18, 18, 18, 18, 18, 18, 18, 18, 18, 18,18, 18, 18,18, 18,18,18, 18, 18, 18, 18, 18, 18, 18, 18]
        },
		{
            label: "greenOld3",
            fillColor: "rgba(220,220,0,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [4.7,6.1,7.3,8.3,9.2,9.8,10.4,10.95,11.3,11.7,12.1,12.4,12.6,12.9,13.2,13.53,13.85,14.3,14.6,14.9,15.2,15.5,16,16.5,16.89]
        },
		{
            label: "greenOld2",
            fillColor: "rgba(120,220,120,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [4.3,5.5,6.5,7.4,8.1,8.9,9.4,9.7,10,10.3,10.6,10.85,11.1,11.45,11.75,12.05,12.3,12.55,12.8,13.1,13.4,13.8,14.2,14.5,14.89]
        },
		{
            label: "greenOld2",
            fillColor: "rgba(40,220,40,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [3.7,4.8,5.8,6.5,7.2,7.8,8.2,8.5,8.8,9,9.25,9.55,9.85,10.15,10.45,10.75,11,11.25,11.4,11.65,11.9,12.25,12.5,12.8,13]
        },
		{
            label: "greenOld",
            fillColor: "rgba(40,220,40,1)",
            strokeColor: "rgba(2,255,2,1)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [3.2,4.2,5.2,5.8,6.4,6.9,7.2,7.5,7.8,8,8.25,8.35,8.65,8.95,9.2,9.4,9.6,9.85,10.05,10.25,10.45,10.75,10.95,11.25,11.55]
        },
		{
            label: "green",
            fillColor: "rgba(120,220,120,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [2.8,3.7,4.5,5.2,5.7,6.1,6.2,6.5,6.7,7,7.2,7.4,7.6,7.8,8,8.2,8.4,8.6,8.8,9,9.2,9.45,9.7,9.95,10.2]
        },
		{
            label: "yellow",
            fillColor: "rgba(220,220,0,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [2.4,3.2,3.9,4.5,5,5.4,5.6,5.8,5.95,6.1,6.25,6.35,6.5,6.65,6.8,7,7.2,7.45,7.65,7.85,8.05,8.25,8.5,8.75,9]
        },
		{
            label: "minimum",
            fillColor: "rgba(250,250,250,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [2.1,2.7,3.4,4,4.4,4.8,5,5.15,5.3,5.4,5.5,5.6,5.7,5.8,5.9,6,6.15,6.3,6.5,6.8,7.05,7.25,7.5,7.75,8]
        },
		{
            fillColor: "rgba(220,220,220,0)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0,0, 0,0,0, 0, 0, 0, 0, 0, 0, 0, 0]
        },
		{
			label : "data anak",
			fillColor: "rgba(220,220,220,0)",
            strokeColor: "rgba(20,20,20,1)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,1)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [<?php echo $dataArray; ?>]
		}
		]
    };

    window.onload = function() {
        var ctx2 = document.getElementById("chart2").getContext("2d");
        window.myLine = new Chart(ctx2).Line(lineChartData, {
            responsive: true
        });
    };
    </script>
</body>

</html>
