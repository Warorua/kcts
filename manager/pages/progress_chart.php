<?php
$servername = "45.84.206.68";
$username = "tsavosit_kakamega";
$password = "zSC1OL)*R(ln";
$dbname = "tsavosit_kakamega";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$prog = $conn->query("SELECT * FROM project_partition natural join project_division where project_id = '$id' ");
while ($progress = $prog->fetch_assoc()) {

    $name = $progress['division'];
    $pid = $progress['pp_id'];
    $i = 1;
    $prog3 = $conn->query("SELECT SUM(progress) as total_prog FROM project_progress  where pp_id = '$pid' ");
    $row_prog = $prog3->fetch_assoc();
    if ($prog && $prog->num_rows > 0) {

        if ($row_prog['total_prog'] <= 50) {
            $color = 'rgba(251, 159, 118, 0.53)';
        } elseif ($count > 50) {
            $color = 'rgba(120, 151, 239, 0.53)';
        }
        $array[$id][] = '{"progress":' . '"' . $row_prog['total_prog'] . '"' . ',' . '"name":"' . ucfirst($name) . '"' . ',' . '"color":"' . $color . '"}';
    } else {
        $array[] = '{"progress":"0","name":"0"}';
    }
}
$prog2 = $conn->query("SELECT SUM(progress) as total FROM project_progress natural join project_partition where project_id = '$id' ");
$progress2 = $prog2->fetch_assoc();
if ($progress2['total'] == 0) {
    $progress2['total'] = 1;
} else {
    $progress2['total'] = $progress2['total'];
}

$prgNumrows = $prog->num_rows;
if ($prgNumrows == 0) {
    $prgNumrows = 1;
} else {
    $prgNumrows = $prgNumrows;
}
$total = $progress2['total'] / $prgNumrows;

$tots = number_format($total, 0);
$colors = 'rgba(0, 241, 5, 0.39)';

$data2 = ',{"progress":' . '"' . $tots . '"' . ',' . '"name":"Total"' . ',' . '"color":"' . $colors . '"}';


if(!isset($array)){
    $data = '[0,0,0,0,0,0]';
}else{
   $data = implode(',', $array[$id]); 
}



$conn->close();

?>
<div class="chartdiv" id="chartdiv<?php echo $id ?>" style="width:100% ; height:300px;"></div>

<script>
    jQuery(document).ready(function() {
        chart.exportConfig = {
            menuItems: [{
                icon: '../am_chart/images/export.png',
                format: 'png',
                onclick: function(a) {
                    var output = a.output({
                        format: 'png',
                        output: 'datastring'
                    }, function(data) {
                        console.log(data)
                    });
                }
            }]
        }
    });

    var chart = AmCharts.makeChart("chartdiv<?php echo $id ?>", {
        "type": "serial",
        "theme": "none",
        "pathToImages": "http://localhost/new_admin/am_chart/images/export.png",
        "dataProvider": [<?php echo $data . $data2 ?>],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Project Progress (%)",

        }],

        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "colorField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "progress",
            "labelText": "[[progress]]%",
            "labelPosition": "inside",
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "name",
        "text-transform": "capitalize",
        "categoryAxis": {
            "gridPosition": "start",
            "labelRotation": 50,
            "title": "Divisions"
        },

    });
</script>