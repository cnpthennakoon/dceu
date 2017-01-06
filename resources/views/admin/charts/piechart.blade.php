@extends('layouts.admin')

@section('content')


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var record={!! json_encode($all) !!};

        console.log(record);
        // Create our data table.
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Subject');
        data.addColumn('number', 'Total_id');

        for(var k in record){
            var v = record[k];

            data.addRow([k,v]);
            console.log(v);
        }
        var options = {
            title: 'Tendency to choose subjects',
            pieHole: 0.4,
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>

<div id="donutchart" style="width: 900px; height: 500px;"></div>


@stop