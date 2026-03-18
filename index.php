<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMAfoot - Maillots de Football</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li class="logo">⚽ MMAfoot</li>
            <div class="menu">
                <li><a onclick="showPage('home')">Accueil</a></li>
                <li><a onclick="showPage('catalog')">Catalogue</a></li>
                <li id="nav-login-link"><a onclick="showPage('login')">Connexion</a></li>
                <li id="nav-account-link" style="display:none"><a onclick="showPage('profil')" id="nav-username-label">Mon compte</a></li>
                <li id="nav-logout-link" style="display:none"><a onclick="doLogout()">Déconnexion</a></li>
                <li><a onclick="showPage('cart')" style="position:relative">🛒 Panier <span id="cart-badge" style="display:none;position:absolute;top:-8px;right:-12px;background:#ffd700;color:#1e3c72;border-radius:50%;width:20px;height:20px;font-size:0.7rem;font-weight:bold;display:inline-flex;align-items:center;justify-content:center;min-width:20px">0</span></a></li>
            </div>
        </ul>
    </nav>

    <div id="home" class="page active">
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue chez MMAfoot</h1>
                <p>Votre destination pour les maillots des plus grands clubs européens</p>
                <button class="btn" onclick="showPage('catalog')">Découvrir la Collection</button>
            </div>
        </section>
        <div class="featured-jerseys">
            <h2>Maillots à la Une</h2>
            <div class="jersey-showcase" id="jersey-showcase"></div>
        </div>
    </div>

    <div id="catalog" class="page">
        <div class="filter-section">
            <h3>Filtrer par championnat</h3>
            <div class="filter-buttons">
                <button class="filter-btn active" onclick="filterLeague('all')">Tous</button>
                <button class="filter-btn" onclick="filterLeague('ligue1')">Ligue 1</button>
                <button class="filter-btn" onclick="filterLeague('premier')">Premier League</button>
                <button class="filter-btn" onclick="filterLeague('laliga')">La Liga</button>
                <button class="filter-btn" onclick="filterLeague('bundesliga')">Bundesliga</button>
                <button class="filter-btn" onclick="filterLeague('seriea')">Serie A</button>
            </div>
        </div>
        <section class="products">
            <h2>Notre Collection</h2>
            <div class="product-grid" id="productGrid">
                <div class="product-card" data-league="ligue1">
                    <img src="https://media.intersport.fr/is/image/intersportfr/HJ4593_KSM_Q1?$product_grey$&layer=comp&fit=constrain,0&$produit_xl$&fmt=webp" alt="PSG" class="product-img">
                    <div class="product-info">
                        <span class="league">LIGUE 1</span>
                        <h3>Paris Saint-Germain</h3>
                        <p>Maillot Domicile 2024/25</p>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:10px;">
                            <span style="font-weight:bold;color:#1e3c72">79€</span>
                            <button class="add-cart-btn" onclick="addToCart('PSG','Domicile','L1',79,this)">🛒 Ajouter</button>
                        </div>
                    </div>
                </div>
                </div>
        </section>
    </div>

    <script>
        // Gardez ici toute la logique de navigation et de panier 
        // que votre développeur a écrite entre les balises <script>
        function showPage(pageId){
            document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
            document.getElementById(pageId).classList.add('active');
            window.scrollTo(0,0);
        }
        // ... (Suite du script original) ...
    </script>
</body>
</html>
