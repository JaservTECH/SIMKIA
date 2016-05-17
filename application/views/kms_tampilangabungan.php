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
        labels: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,"24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35", "36", "37", "38", "39", "40", "41", "42", "42", "43", "44", "45", "46", "47", "48", "49", "50", "51", "52", "53", "54", "55", "56", "57", "58"],
        datasets: [
		{
            fillColor: "rgba(220,220,220,0)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30,30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30,30, 30, 30,30, 30,30,30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30]
        },
		{
            label: "greenOld3",
            fillColor: "rgba(220,220,0,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [4.7,6.1,7.3,8.3,9.2,9.8,10.4,10.95,11.3,11.7,12.1,12.4,12.6,12.9,13.2,13.53,13.85,14.3,14.6,14.9,15.2,15.5,16,16.5,'16.89', 17.2, 17.5, 17.74, '18', 18.25, 18.49, 18.77, 18.99, '19.35', 19.69, 19.98, '20.12', 20.48, 20.76,20.99, '21.22', 21.58, 21.97, '22.23', 22.75, '23.13', 23.58, '23.92', 24.25, 24.55, '24.9', 25.15, 25.39, '25.9', 26.18, 26.5, '26.99', 27.27, 27.65, 28.01]
        },
		{
            label: "greenOld2",
            fillColor: "rgba(120,220,120,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [4.3,5.5,6.5,7.4,8.1,8.9,9.4,9.7,10,10.3,10.6,10.85,11.1,11.45,11.75,12.05,12.3,12.55,12.8,13.1,13.4,13.8,14.2,14.5,'14.89', 15.2, 15.54, 15.74, '16', 16.2, 16.45, 16.77, '17', 17.35, 17.68, '17.98', 18.2, 18.48, 18.79,'19', 19.25, 19.58, '19.97', 20.28, 20.5, 20.73, 20.95, '21.05', 21.25, 21.55, 21.8, '22.05', 22.32, 22.68, '22.98', 23.16, 23.42, 23.67, 23.95, 24.35]
        },
		{
            label: "greenOld2",
            fillColor: "rgba(40,220,40,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [3.7,4.8,5.8,6.5,7.2,7.8,8.2,8.5,8.8,9,9.25,9.55,9.85,10.15,10.45,10.75,11,11.25,11.4,11.65,11.9,12.25,12.5,12.8,'13', 13.2, 13.54, 13.74, '14', 14.13, 14.38, 14.72, '14.94', 15.12, 15.48, 15.74, '15.98', 16.08, 16.38,16.55, 16.83, '17', 17.34, 17.58, 17.73, '17.98', 18.15, 18.39, 18.56, 18.75, '18.98', 19.32, 19.57, 19.78, '19.95', 20.16, 20.42, 20.67, 20.8, 20.9]
        },
		{
            label: "greenOld",
            fillColor: "rgba(40,220,40,1)",
            strokeColor: "rgba(2,255,2,1)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [3.2,4.2,5.2,5.8,6.4,6.9,7.2,7.5,7.8,8,8.25,8.35,8.65,8.95,9.2,9.4,9.6,9.85,10.05,10.25,10.45,10.75,10.95,11.25,'11.55', 11.75, 11.93, 12.12, 12.34, 12.58, 12.82, 13.01, 13.19, 13.37, 13.58, 13.74, 13.88, 14.04, 14.18,14.35, 14.53, 14.73, 14.85, '15', 15.26, 15.5, 15.61, 15.775, "15.9", 16.04, 16.23, 16.35, 16.61, 16.83, '17', 17.26, 17.45, 17.68, 17.89, 18]
        },
		{
            label: "green",
            fillColor: "rgba(120,220,120,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [2.8,3.7,4.5,5.2,5.7,6.1,6.2,6.5,6.7,7,7.2,7.4,7.6,7.8,8,8.2,8.4,8.6,8.8,9,9.2,9.45,9.7,9.95,'10.2', 10.37, 10.53, 10.71, 10.865, 11.06, 11.21, 11.45, 11.6, 11.8, "11.98", 12.1, 12.24, 12.35, 12.48,12.62, 12.75, 12.88, "13", 13.15, 13.29, 13.53, 13.65, 13.795, "13.9", 14.14, 14.25, 14.35, 14.54, 14.73, 14.86, 14.96, 15.1, 15.25, 15.39, 15.5]
        },
		{
            label: "yellow",
            fillColor: "rgba(220,220,0,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [2.4,3.2,3.9,4.5,5,5.4,5.6,5.8,5.95,6.1,6.25,6.35,6.5,6.65,6.8,7,7.2,7.45,7.65,7.85,8.05,8.25,8.5,8.75,9, 9.17, 9.35, 9.48, 9.675, 9.815, 9.96, 10.1, 10.18, 10.28, 10.38, 10.51, 10.67, 10.78, 10.89,10.99, 11.1, 11.23, 11.34, 11.45, 11.56, 11.67, 11.78, 11.89, 12, 12.14, 12.25, 12.35, 12.54, 12.73, 12.86, 13, 13.11, 13.25, 13.39, 13.5]
        },
		{
            label: "minimum",
            fillColor: "rgba(250,250,250,1)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [2.1,2.7,3.4,4,4.4,4.8,5,5.15,5.3,5.4,5.5,5.6,5.7,5.8,5.9,6,6.15,6.3,6.5,6.8,7.05,7.25,7.5,7.75,8, 8.17, 8.3, 8.45, 8.575, 8.725, 8.86, 9, 9.12, 9.24, 9.36, 9.48, 9.6, 9.7, 9.8,9.89, 10, 10.1, 10.2, 10.3, 10.4, 10.5, 10.6, 10.67, 10.765, 10.84, 10.91, 11, 11.09, 11.2, 11.32, 11.45, 11.58, 11.7, 11.83, 12]
        },
		{
            fillColor: "rgba(220,220,220,0)",
            strokeColor: "rgba(220,220,220,0)",
            pointColor: "rgba(220,220,220,0)",
            pointStrokeColor: "rgba(0,0,0,0)",
            pointHighlightFill: "rgba(0,0,0,0)",
            pointHighlightStroke: "rgba(220,220,220,0)",
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0,0, 0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0,0, 0,0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
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
