<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia - Accueil</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <section id="presentation">
        <h2>Présentation du Zoo Arcadia</h2>
        <p>Le Zoo Arcadia est un lieu unique situé près de la forêt de Brocéliande. Découvrez nos habitats naturels et les nombreuses espèces d'animaux que nous protégeons.</p>
        <img src="assets/images/zoo-image1.jpg" alt="Vue du Zoo Arcadia">
    </section>

    <section id="habitats">
        <h2>Nos Habitats</h2>
        <ul>
            <li>Savane</li>
            <li>Jungle</li>
            <li>Marais</li>
        </ul>
        <div class="habitat-images">
            <img src="assets/images/habitat-savane.jpg" alt="Habitat de la Savane">
            <img src="assets/images/habitat-jungle.jpg" alt="Habitat de la Jungle">
            <img src="assets/images/habitat-marais.jpg" alt="Habitat des Marais">
        </div>
    </section>

    <section id="avis">
        <h2>Avis de nos visiteurs</h2>
        <div id="avis-container">
            <!-- Les avis seront ajoutés ici par JavaScript -->
        </div>
        <form id="avis-form">
            <label for="nom">Votre nom :</label>
            <input type="text" id="nom" required>
            <label for="message">Votre avis :</label>
            <textarea id="message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Zoo Arcadia. Tous droits réservés.</p>
    </footer>

    <script src="assets/js/scripts.js"></script>
</body>

</html>
