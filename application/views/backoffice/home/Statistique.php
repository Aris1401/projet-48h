<?php
$abonnementModel = $abonnements;
$abonnementsData = array_map(function($abonnement) {
    return [
        'designation' => $abonnement->getDesignation(),
        'prix' => $abonnement->getPrix()
    ];
}, $abonnementModel);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variation des abonnements</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <style>
    #abonnementsChart {
        max-width: 1200px;
        margin: 10px auto;
    }
</style>

</head>
<body>
    <div class="container" id="export">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Variation des abonnements
                    </div>
                    <div class="card-body">
                        <canvas id="abonnementsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="exportButton">Exporter</button>

    <script>
    // Récupérer les données des abonnements
    const abonnementsData = <?php echo json_encode($abonnementsData); ?>;

    // Convertir les données en tableaux pour les labels et les valeurs
    const labels = abonnementsData.map(abonnement => abonnement.designation);
    const prix = abonnementsData.map(abonnement => abonnement.prix);

    // Créer le graphe
    const ctx = document.getElementById('abonnementsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Prix des abonnements',
                data: prix,
                backgroundColor: 'rgba(75, 192, 192, 0.8)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        font: {
                            size: 16
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Prix',
                        font: {
                            size: 18,
                            weight: 'bold'
                        }
                    },
                    ticks: {
                        font: {
                            size: 14
                        }
                    }
                },
                x: {
                    type: 'category',
                    title: {
                        display: true,
                        text: 'Durée',
                        font: {
                            size: 18,
                            weight: 'bold'
                        }
                    },
                    offset: true,
                    ticks: {
                        maxRotation: 90,
                        minRotation: 90,
                        autoSkip: false,
                        font: {
                            size: 14
                        }
                    }
                }
            }
        }
    });
    </script>
     <script src="<?php echo base_url('assets/js/export-pdf.js')?>"></script>
</body>
</html>
