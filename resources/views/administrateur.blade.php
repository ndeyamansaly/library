<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard-styles.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo.png" alt="BiblioISI">
        </div>
        <ul class="menu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Cours</a></li>
            <li><a href="#">Thèses</a></li>
            <li><a href="#">Mémoires</a></li>
            <li><a href="#">Paramètres</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="search-bar">
            <input type="text" placeholder="Rechercher par titre, auteur, sujet...">
        </div>

        <div class="collections">
            <div class="collection">
                <img src="livres.jpg" alt="Nos livres">
                <p>Nos livres</p>
            </div>
            <div class="collection">
                <img src="theses.jpg" alt="Les différentes thèses">
                <p>Les différentes thèses</p>
            </div>
            <div class="collection">
                <img src="memoires.jpg" alt="Les mémoires">
                <p>Les mémoires</p>
            </div>
        </div>

        <div class="shortcuts">
            <p>Raccourcis:</p>
            <ul>
                <li>Transactions</li>
                <li>Activité de l'utilisateur</li>
                <li>Dépôts Document</li>
            </ul>
        </div>

        <div class="statistics">
            <p>Statistique paiement:</p>
            <div class="payment-stats">
                <!-- Insérer des graphiques/statistiques -->
            </div>
        </div>

        <div class="admin-profile">
            <img src="admin.jpg" alt="Admin">
            <p>Nom de l'admin</p>
            <p>Email de l'admin</p>
            <p>Nombre de j'aime</p>
            <p>Nombre de commentaires</p>
            <button><img src="add.png" alt="Ajouter">Ajouter un document</button>
            <button><img src="payment.png" alt="Versements">Versements</button>
        </div>
    </div>
</body>
</html>
