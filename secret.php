<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>secret</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-image: url('assets/img/Brain.jpg'); /* Hier den Pfad zum Hintergrundbild einfügen */
            background-size: cover; /* Passt das Bild an die Größe des Bildschirms an */
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            flex: 1;
            background: rgba(255, 255, 255, 0.8); /* Weißer Hintergrund mit Transparenz für besseren Textkontrast */
            padding: 20px;
            margin: 20px;
            border-radius: 10px; /* Abgerundete Ecken */
        }
        footer {
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Weißer Hintergrund mit Transparenz für besseren Textkontrast */
            padding: 10x;
            border-radius: 5px; /* Abgerundete Ecken */
            margin: 10px;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #1C86EE;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color:#1874CD;  
        }
    </style>
</head>
<body>
    <div class="container secret-content">
        <h1>Geheime Informationen</h1>
        <br><br>
        <p>Vollständiger Name: Swen Neunzig</p>
        <p>Adresse: Vulkanstraße 174</p>
        <p>Postleitzahl: 47807 Krefeld</p>
        <p>Telefon: 0176-21821902</p>
    </div>
    <br><br><br>
    <button onclick="zurueckZurIndex()">Zurück zur Startseite</button>

    <script>
        function zurueckZurIndex() {
            window.location.href = 'index.php'; // Ersetzt 'index.html' durch den tatsächlichen Pfad zur Startseite
        }
    </script>

    <footer>
        <?php require_once('./assets/layout/footer.php'); ?>
    </footer>
</body>
</html>
