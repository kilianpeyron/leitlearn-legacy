<main>
    <div class="open-sidebar">
        <span class="material-symbols-rounded">
            menu_open
        </span>
    </div>
    <div class="container dashboard">
        <section class="charts">
            <h1 class="title">Mes statistiques</h1>
            <canvas id="pieChart"></canvas>
        </section>
    </div>
</main>

<script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Mes paquets', 'Paquets importés', 'Paquets généré avec Leitlearn AI'],
            datasets: [{
                label: '# of Votes',
                data: [<?= $results['created'] ?>, <?= $results['imported'] ?>, <?= $results['ia'] ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>