<?php include __DIR__ . '/../includes/header.php';?>

<div class="bienvenue">
    <h1>Bienvenue</h1>
    </br>
    <p>Notre entreprise créée en hommage à notre papy Charly reprend son activité de vente de vins des vignerons de la région de Bergerac.</p>
</div>
<div class="vendus">
    <h1 class="titre">À la une</h1>
    <ul>
        <li><img src="/assets/img/Antidote.jpg" height="411px" width="344px"><h2>Antidote 2023 - Demis-sec</h2></br><p>Blanc</br>Demi-sec IGP (pays du Périgord)</p></li>
        <li><img src="/assets/img/Antidote.jpg" height="411px" width="344px"><h2>Chateau La Besage</h2></br><p>Rouge</br>Médaille d'OR Paris 2020</p></li>
        <li><img src="/assets/img/Rose-Rouge.jpg" height="411px" width="344px"><h2>Rose De Sigoulès</h2></br><p>Rouge</br>Fût de chêne 12 mois</p></li>
    </ul>
</div>
<div class="question">
    <h1>Foire aux questions</h1>
    <div class="faq">
        <details>
            <summary>Dans quels secteurs livrez-vous ?</summary>
            <p>Nous livrons dans Puy-de-Dôme (principalement aux environs d'Issoire, Clermont-Ferrand et Riom) ainsi qu'aux alentours de Montpellier.</p>
        </details>
        <details>
            <summary>Quels sont vos tarifs ?</summary>
            <p>Voici le lien vers nos tarifs - <a href="/views/tarifs.php">Tarifs</a>.</p>
        </details>
        <details>
            <summary>Où sont produits vos vins ?</summary>
            <p>Nos vins sont produits en Dordogne à Sigoulès.</p>
        </details>
    </div>
</div>
<div class="message" id="contact">
    <h1>Nous contacter</h1>
    </br>
    <p>
        N'hésitez pas à nous contacter pour toute demande d'information ou de pré-commande.
    </p>
    <div class="contact-form">
        <form action="https://formspree.io/f/xldgrrav" method="POST">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Nom" required>
        
            <label for="email">Mail</label>
            <input type="email" id="email" name="email" placeholder="Mail" required>
        
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message" required></textarea>
        
            <button type="submit" class="btn-envoyer">Envoyer</button>
        </form>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php';?>