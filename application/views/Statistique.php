<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
</head>
<body>
<script>
        const xValues = <?php echo json_encode($results['xValues']); ?>;
        const yValues = <?php echo json_encode($results['yValues']); ?>;
        const barColors = ["red", "green","blue","orange","brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        suggestedMin: 0,
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
