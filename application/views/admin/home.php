    
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <h2>Statistique de nombre de vente par mois.</h2>
            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
            <div class="row">
                <div class="col-md-12 grid-margin">
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
                </div>
            </div>
        </div>
    </div>
</div>