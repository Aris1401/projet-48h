<?php
require_once('Abonnement_Model.php');
$abonnementModel = new Abonnement_Model();
$abonnements = $abonnementModel->getAllAbonnement();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Graph.js - Variation des abonnements</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <style>
        #abonnementsChart {
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container">
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

    <script>
        // Récupérer les données des abonnements
        const abonnementsData = <?php echo json_encode($abonnements); ?>;

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
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Prix'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Abonnements'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
