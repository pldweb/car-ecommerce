<div class="col-6">
    <div class="card border-0 shadow">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="fs-5 fw-bold mb-0">Grafik Perkembangan Transaksi</h2>
                </div>
            </div>
        </div>
        <div class="p-3">
            <canvas id="lineChart"></canvas>
        </div>

        <script>
            var line = document.getElementById("lineChart").getContext('2d');
            var myChart = new Chart(line, {
                type: 'line',
                data: {
                    labels: ["Tokyo",	"Mumbai",	"Mexico City",	"Shanghai",	"Sao Paulo",	"New York",	"Karachi","Buenos Aires",	"Delhi","Moscow"],
                    datasets: [{
                        label: 'Series 1', // Name the series
                        data: [500,	50,	2424,	14141,	4111,	4544,	47,	5555, 6811],
                        fill: false,
                        borderColor: '#2196f3', // Add custom color border (Line)
                        backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                        borderWidth: 1 // Specify bar border width
                    }]},
                options: {
                    responsive: true, // Instruct chart js to respond nicely.
                    maintainAspectRatio: true, // Add to prevent default behaviour of full-width/height
                }
            });
        </script>
    </div>
</div>
