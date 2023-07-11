document.getElementById('exportButton').addEventListener('click', function() {
    // Sélectionner la page entière (élément <html>)
    var element = document.getElementById('export');

    // Options de configuration pour html2pdf
    var options = {
        filename: 'export.pdf', // Nom du fichier PDF
        margin: [10, 10, 10, 10], // Marges du document (haut, droite, bas, gauche)
        image: { type: 'jpeg', quality: 0.98 }, // Format et qualité des images
        html2canvas: { scale: 2 }, // Échelle de conversion HTML à Canvas
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' } // Format du document PDF
    };

    // Utiliser html2pdf pour exporter la page en PDF
    html2pdf().set(options).from(element).save();
});
