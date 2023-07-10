document.getElementById('exportButton').addEventListener('click', function() {
    // Sélectionner la page entière (élément <html>)
    var element = document.documentElement;

    // Options de configuration pour html2pdf
    var options = {
        filename: 'export.pdf', // Nom du fichier PDF
        margin: [10, 10, 10, 10], // Marges du document (haut, droite, bas, gauche)
        image: { type: 'jpeg', quality: 0.98 }, // Format et qualité des images
        html2canvas: { scale: 2 }, // Échelle de conversion HTML à Canvas
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' } // Format du document PDF
    };

    // Utiliser html2pdf pour exporter la page en PDF
    html2pdf().set(options).from(element).save();
});

// import necessaire dans la page <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
