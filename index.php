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
            <li class="logo"> MMAfoot</li>
            <div class="menu">
                <li><a onclick="showPage('home')">Accueil</a></li>
                <li><a onclick="showPage('catalog')">Catalogue</a></li>
                <li><a onclick="showPage('login')">Connexion</a></li>
            </div>
        </ul>
    </nav>

    <div id="home" class="page active">
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue chez coucoudurd</h1>
                <p>Votre destination pour les maillots des plus grands clubs européens</p>
                <button class="btn" onclick="showPage('catalog')">Découvrir la Collection</button>
            </div>
        </section>

        <div class="featured-jerseys">
            <h2>Maillots à la Une</h2>
            <div class="jersey-showcase">
                <div class="showcase-card">
                    <img src="https://images.psg.fr/transform/ee2cfda4-efbc-49f1-804f-f2f5eacc8ee7/PSG_NIKE_JERSEY_HOME_24_25_FRONT?io=transform:fill,width:600,height:600" alt="PSG">
                    <div class="showcase-info">
                        <h3>Paris Saint-Germain</h3>
                        <p>Maillot Domicile 2024/25</p>
                    </div>
                </div>
                <div class="showcase-card">
                    <img src="https://store.realmadrid.com/cdn/shop/files/DZ0656-101-1_480x480.jpg?v=1720691645" alt="Real Madrid">
                    <div class="showcase-info">
                        <h3>Real Madrid</h3>
                        <p>Maillot Domicile 2024/25</p>
                    </div>
                </div>
            </div>
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
            </div>
        </div>

        <section class="products">
            <h2>Notre Collection - Maillots Européens</h2>
            <div class="product-grid" id="productGrid">
                <div class="product-card" data-league="ligue1">
                    <img src="https://images.psg.fr/transform/ee2cfda4-efbc-49f1-804f-f2f5eacc8ee7/PSG_NIKE_JERSEY_HOME_24_25_FRONT?io=transform:fill,width:600,height:600" alt="PSG" class="product-img">
                    <div class="product-info">
                        <span class="league">LIGUE 1</span>
                        <h3>Paris Saint-Germain</h3>
                        <p>Maillot Domicile 2024/25</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function showPage(pageId) {
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            document.getElementById(pageId).classList.add('active');
        }
    </script>
</body>
</html>
