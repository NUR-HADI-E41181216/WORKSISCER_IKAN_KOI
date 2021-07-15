<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Uji Coba Kualitas Air - Ikan Koi</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/tsukamoto.js"></script>
<script type='text/javascript' src="<?php echo base_url();
                                    ?>assets/js/sample.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        packages: ['corechart', 'line']
    });

    function suhuChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['0', 0, 1, 0, 0],
            ['10', 0, 1, 0, 0],
            ['12.5', 0, 0.5, 0, 0],
            ['15', 0, 0, 1, 0],
            ['17.5', 0, 0, 1, 0],
            ['20', 1, 0, 0, 0],
            ['22.5', 1, 0, 0, 0],
            ['25', 0, 0, 0, 1],
            ['26', 0, 0, 0, 1],
            ['27', 1, 0, 0, 0],
            ['28', 1, 0, 0, 0],
            ['29', 0, 0, 1, 0],
            ['30', 0, 0, 1, 0],
            ['31', 0, 0.5, 0, 0],
            ['32', 0, 1, 0, 0],
            ['', 0, 1, 0, 0]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'Suhu'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 1000,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('suhu'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(suhuChart);

    function tdsChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['', 1, 0, 0, 0],
            ['0', 1, 0, 0, 0],
            ['125', 0.5, 0, 0, 0],
            ['250', 0, 0, 0, 1],
            ['300', 0, 0, 0, 1],
            ['325', 1, 0, 0, 0],
            ['350', 1, 0, 0, 0],
            ['400', 0, 0, 1, 0],
            ['450', 0, 0, 1, 0],
            ['475', 0, 0.5, 0, 0],
            ['500', 0, 1, 0, 0],
            ['', 0, 1, 0, 0]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'TDS'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 500,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('tds'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(tdsChart);

    function dosChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['0', 0, 1, 0, 0],
            ['2', 0, 1, 0, 0],
            ['3', 0, 0.5, 0, 0],
            ['3.5', 0, 0, 1, 0],
            ['4', 0, 0, 1, 0],
            ['5', 1, 0, 0, 0],
            ['6', 1, 0, 0, 0],
            ['7', 0, 0, 0, 1],
            ['', 0, 0, 0, 1]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'd.o'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 500,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('dos'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(dosChart);
</script>