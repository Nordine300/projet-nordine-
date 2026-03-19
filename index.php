<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MMAfoot — Archives & Collection</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Cormorant+Garamond:wght@300;400;600&family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ══════════════════════════════════════
     NAVIGATION
══════════════════════════════════════ -->
<nav>
  <div class="logo" onclick="showPage('home')">⚽ MMAfoot <span class="badge">Archives</span></div>
  <ul class="menu">
    <li><a onclick="showPage('home')">Accueil</a></li>
    <li><a onclick="showPage('catalog')">La Collection</a></li>
    <li><a onclick="showPage('about')">À Propos</a></li>
    <li id="nav-login-link"><a onclick="showPage('login')">Connexion</a></li>
    <li id="nav-reg-link"><button class="btn-nav" onclick="showPage('register')">Devenir Membre</button></li>
    <li id="nav-account-link" style="display:none"><a onclick="showPage('profil')" id="user-display">Mon Profil</a></li>
    <li id="nav-logout" style="display:none"><a onclick="doLogout()">Déconnexion</a></li>
  </ul>
</nav>

<!-- ══════════════════════════════════════
     ACCUEIL
══════════════════════════════════════ -->
<div id="home" class="page active">

  <section class="hero">
    <div class="hero-content">
      <span class="eyebrow">Maison de Collection depuis 1997</span>
      <h1>L'Art du Maillot<br><em>Historique</em></h1>
      <p>Pièces authentifiées, éditions rares et archives de légende.<br>Chaque maillot raconte une histoire.</p>
      <div class="hero-actions">
        <button class="btn-primary" onclick="showPage('catalog')">Explorer les Archives</button>
        <button class="btn-outline" onclick="showPage('register')">Rejoindre le Club</button>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="stat-item"><span class="stat-number">340+</span><span class="stat-label">Pièces Archivées</span></div>
    <div class="stat-item"><span class="stat-number">28</span><span class="stat-label">Années d'expertise</span></div>
    <div class="stat-item"><span class="stat-number">12</span><span class="stat-label">Pays représentés</span></div>
    <div class="stat-item"><span class="stat-number">4 800</span><span class="stat-label">Membres</span></div>
  </div>

  <section style="padding:75px 5%;text-align:center;">
    <span class="eyebrow">Notre Mission</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:2.4rem;margin:13px 0;">Préserver le Patrimoine<br>du Football Mondial</h2>
    <p style="max-width:580px;margin:0 auto 46px;font-size:1rem;color:var(--gray);line-height:1.8;font-weight:300;">MMAfoot conserve et partage les maillots qui ont écrit l'histoire du football. Chaque pièce est expertisée, documentée et archivée selon les standards de la haute collection.</p>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:22px;max-width:820px;margin:0 auto;">
      <div style="padding:26px;background:#fff;border:1px solid var(--border);">
        <div style="font-size:2rem;margin-bottom:10px">🔍</div>
        <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;margin-bottom:7px">Expertise</h4>
        <p style="font-size:.86rem;color:var(--gray);line-height:1.6;">Authentification par nos experts avec certificat d'origine officiel.</p>
      </div>
      <div style="padding:26px;background:#fff;border:1px solid var(--border);">
        <div style="font-size:2rem;margin-bottom:10px">📚</div>
        <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;margin-bottom:7px">Archives</h4>
        <p style="font-size:.86rem;color:var(--gray);line-height:1.6;">Accès aux fiches historiques détaillées, photos et contexte sportif.</p>
      </div>
      <div style="padding:26px;background:#fff;border:1px solid var(--border);">
        <div style="font-size:2rem;margin-bottom:10px">🤝</div>
        <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;margin-bottom:7px">Communauté</h4>
        <p style="font-size:.86rem;color:var(--gray);line-height:1.6;">Rejoignez 4 800 passionnés qui partagent leur collection.</p>
      </div>
    </div>
  </section>

</div>

<!-- ══════════════════════════════════════
     CATALOGUE
══════════════════════════════════════ -->
<div id="catalog" class="page">

  <div class="catalog-header">
    <span class="eyebrow">Archives 1960 — 2010</span>
    <h2>La Collection Complète</h2>
  </div>

  <div class="filter-bar">
    <button class="filter-btn active" onclick="filterCategory('all',this)">Tout voir</button>
    <button class="filter-btn" onclick="filterCategory('vintage',this)">Vintage 70s–90s</button>
    <button class="filter-btn" onclick="filterCategory('national',this)">Sélections</button>
    <button class="filter-btn" onclick="filterCategory('limited',this)">Éditions Limitées</button>
    <button class="filter-btn" onclick="filterCategory('club',this)">Grands Clubs</button>
  </div>

  <!-- VINTAGE -->
  <div class="catalog-section">
    <div class="section-header">
      <h3>Vintage 70s — 90s</h3>
      <div class="section-line"></div>
      <span class="section-count">4 pièces</span>
    </div>
    <div class="product-grid">

      <div class="product-card vintage" onclick="openJersey('napoli8788')">
        <span class="card-badge badge-unique">Pièce Unique</span>
        <div class="img-container">
          <img src="https://footcollectors.co/wp-content/uploads/2025/01/Maillot-Naples-Domicile-1987-1988-1-1.jpg" alt="Napoli 87-88">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Serie A — 1987</span>
          <h3>SSC Napoli 1987–88</h3>
          <p>Époque Diego Maradona — Scudetto historique</p>
          <div class="product-footer">
            <span class="product-status">Pièce Unique</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('napoli8788')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card vintage" onclick="openJersey('france98')">
        <span class="card-badge badge-rare">Archive Rare</span>
        <div class="img-container">
          <img src="https://footsoccerpro.co/wp-content/uploads/2020/07/Maillot-Retro-Vintage-Equipe-de-France-1988-1-1.jpg" alt="France 98">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Coupe du Monde — 1998</span>
          <h3>France 1998 — Finale</h3>
          <p>Maillot Adidas identique à la finale CDM 98</p>
          <div class="product-footer">
            <span class="product-status">Archive Rare</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('france98')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card vintage" onclick="openJersey('acmilan89')">
        <span class="card-badge badge-certified">Certifié Or</span>
        <div class="img-container">
          <img src="https://lart-du-maillot.com/cdn/shop/files/6CDC3E43-E471-41AF-A25C-DCF9115E8A71.jpg?v=1749809347" alt="AC Milan 88-89">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Serie A — 1988</span>
          <h3>AC Milan 1988–89</h3>
          <p>Saison Arrigo Sacchi — Triplé historique</p>
          <div class="product-footer">
            <span class="product-status">Certifié Or</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('acmilan89')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card vintage" onclick="openJersey('ajax95')">
        <span class="card-badge badge-museum">Archive Musée</span>
        <div class="img-container">
          <img src="https://lart-du-maillot.com/cdn/shop/files/D35C8CAD-A40D-4F50-9679-701ADDAAE484.jpg?v=1706017985&width=1445" alt="Ajax 1995">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Champions League — 1995</span>
          <h3>Ajax Amsterdam 1994–95</h3>
          <p>Finale C1 — Génération Seedorf &amp; Kluivert</p>
          <div class="product-footer">
            <span class="product-status">Archive Musée</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('ajax95')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- SÉLECTIONS NATIONALES -->
  <div class="catalog-section">
    <div class="section-header">
      <h3>Sélections Nationales</h3>
      <div class="section-line"></div>
      <span class="section-count">4 pièces</span>
    </div>
    <div class="product-grid">

      <div class="product-card national" onclick="openJersey('bresil70')">
        <span class="card-badge badge-certified">Certifié Or</span>
        <div class="img-container">
          <img src="https://backtothefootball.com/wp-content/uploads/2025/04/BRE59_1.png" alt="Brésil 1970">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Coupe du Monde — 1970</span>
          <h3>Brésil 1970</h3>
          <p>Signé par l'équipe championne — Pelé, Jairzinho</p>
          <div class="product-footer">
            <span class="product-status">Certifié Or</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('bresil70')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card national" onclick="openJersey('argentine86')">
        <span class="card-badge badge-museum">Archive Musée</span>
        <div class="img-container">
          <img src="https://www.footpack.fr/wp-content/uploads/2020/12/maillot-maradona-coupe-du-monde-1986-argentine-angleterre-steve-hodge-1.jpeg" alt="Argentine 1986">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Coupe du Monde — 1986</span>
          <h3>Argentine 1986</h3>
          <p>Le maillot de la "Mano de Dios" — Maradona</p>
          <div class="product-footer">
            <span class="product-status">Archive Musée</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('argentine86')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card national" onclick="openJersey('allemagne74')">
        <span class="card-badge badge-unique">Pièce Unique</span>
        <div class="img-container">
          <img src="https://dcdn-us.mitiendanube.com/stores/004/530/304/products/1000280691-9757c9f1bed22122a717124257650110-480-0.webp" alt="Allemagne 1974">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Coupe du Monde — 1974</span>
          <h3>Allemagne de l'Ouest 1974</h3>
          <p>Finale Munich — Beckenbauer &amp; Müller</p>
          <div class="product-footer">
            <span class="product-status">Pièce Unique</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('allemagne74')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card national" onclick="openJersey('paysbas88')">
        <span class="card-badge badge-rare">Archive Rare</span>
        <div class="img-container">
          <img src="https://maxikitsfoot.com/wp-content/uploads/2025/10/Maillot-de-foot-Pays-Bas-Coupe-du-monde-2026-concept-Noir.jpg" alt="Pays-Bas 1988">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Championnat d'Europe — 1988</span>
          <h3>Pays-Bas 1988</h3>
          <p>Euro 88 — Gullit, Van Basten &amp; Rijkaard</p>
          <div class="product-footer">
            <span class="product-status">Archive Rare</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('paysbas88')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- GRANDS CLUBS -->
  <div class="catalog-section">
    <div class="section-header">
      <h3>Grands Clubs Européens</h3>
      <div class="section-line"></div>
      <span class="section-count">3 pièces</span>
    </div>
    <div class="product-grid">

      <div class="product-card club" onclick="openJersey('barca92')">
        <span class="card-badge badge-museum">Archive Musée</span>
        <div class="img-container">
          <img src="https://shoptonmaillot.net/cdn/shop/files/Barcelona2023-24BlackSpecialEdition1.jpg?v=1742504161" alt="FC Barcelona">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Champions League — 1992</span>
          <h3>FC Barcelona 1991–92</h3>
          <p>Finale Wembley — Stoïchkov &amp; Laudrup</p>
          <div class="product-footer">
            <span class="product-status">Archive Musée</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('barca92')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card club" onclick="openJersey('liverpool78')">
        <span class="card-badge badge-certified">Certifié Or</span>
        <div class="img-container">
          <img src="https://footlife.store/cdn/shop/files/rn-image_picker_lib_temp_b83eec98-325c-4397-89cc-9ad53f32d31f.jpg?v=1741632152" alt="Liverpool FC">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Coupe d'Europe — 1978</span>
          <h3>Liverpool FC 1977–78</h3>
          <p>Bob Paisley — Keegan &amp; Dalglish</p>
          <div class="product-footer">
            <span class="product-status">Certifié Or</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('liverpool78')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card club" onclick="openJersey('realmadrid00')">
        <span class="card-badge badge-rare">Archive Rare</span>
        <div class="img-container">
          <img src="https://www.footpack.fr/wp-content/uploads/2025/04/maillot-real-madrid-1999-2000-reedition-adidas-3-819x1024.jpg" alt="Real Madrid 2000">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Champions League — 2000</span>
          <h3>Real Madrid 1999–2000</h3>
          <p>Finale Paris — Zidane, Figo &amp; Raúl</p>
          <div class="product-footer">
            <span class="product-status">Archive Rare</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('realmadrid00')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ÉDITIONS LIMITÉES -->
  <div class="catalog-section">
    <div class="section-header">
      <h3>Éditions Limitées</h3>
      <div class="section-line"></div>
      <span class="section-count">3 pièces</span>
    </div>
    <div class="product-grid">

      <div class="product-card limited" onclick="openJersey('italie06')">
        <span class="card-badge badge-unique">500 Exemplaires</span>
        <div class="img-container">
          <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/9a/c8/1b/9ac81b2d3142c1303456f46ec0cf1e9ab423b3cf.jpg?rule=ad-large" alt="Italie 2006">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Édition Limitée — 2006</span>
          <h3>Italie 2006 — Édition Or</h3>
          <p>500 exemplaires numérotés — 4e titre mondial</p>
          <div class="product-footer">
            <span class="product-status">500 Exemplaires</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('italie06')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card limited" onclick="openJersey('angleterre66')">
        <span class="card-badge badge-rare">1 000 ex.</span>
        <div class="img-container">
          <img src="https://i.etsystatic.com/40419340/r/il/e8241b/6100731631/il_570xN.6100731631_2psx.jpg" alt="Angleterre 1966">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Édition Centenaire — 2000</span>
          <h3>Angleterre 1966 — Réédition</h3>
          <p>1 000 exemplaires — Centenaire de la FA</p>
          <div class="product-footer">
            <span class="product-status">1 000 Exemplaires</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('angleterre66')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

      <div class="product-card limited" onclick="openJersey('france18')">
        <span class="card-badge badge-certified">Signé x23</span>
        <div class="img-container">
          <img src="https://www.maillots-foot-actu.fr/wp-content/uploads/2017/09/France-2018-maillot-coupe-du-monde-deux-%C3%A9toiles.jpg" alt="France 2018">
          <div class="img-overlay"><span class="view-hint">Voir le maillot</span></div>
        </div>
        <div class="product-info">
          <span class="product-era">Coupe du Monde — 2018</span>
          <h3>France 2018 — Collection Étoile</h3>
          <p>Signé par les 23 champions du monde</p>
          <div class="product-footer">
            <span class="product-status">Signé x23</span>
            <button class="btn-expertiser" onclick="event.stopPropagation();openJersey('france18')">Voir &amp; Expertiser</button>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<!-- ══════════════════════════════════════
     À PROPOS
══════════════════════════════════════ -->
<div id="about" class="page">
  <div class="about-hero">
    <div><span class="eyebrow">Fondée en 1997</span><h1>À Propos de MMAfoot</h1></div>
  </div>
  <div class="about-body">
    <span class="eyebrow">Notre Histoire</span>
    <h2>Une Passion Devenue Référence</h2>
    <p>MMAfoot est née d'une passion simple : conserver et partager les maillots qui ont marqué l'histoire du football mondial. Fondée à Lyon en 1997 par Michel Armand, la maison s'est imposée comme la référence européenne de la haute collection de maillots historiques.</p>
    <p>En près de 30 ans, nous avons expertisé plus de 340 pièces, accompagné des milliers de collectionneurs et construit une communauté de passionnés à travers 12 pays. Notre réseau d'experts certifiés garantit l'authenticité de chaque pièce archivée.</p>

    <span class="eyebrow" style="margin-top:48px;display:block;">Notre Équipe</span>
    <h2>Les Experts de la Maison</h2>
    <div class="about-team">
      <div class="team-card">
        <div class="team-avatar">M</div>
        <h4>Michel Armand</h4>
        <span class="role">Fondateur &amp; Expert Principal</span>
        <p>30 ans d'expérience. Formé à l'École du Louvre, spécialiste des textiles sportifs d'époque.</p>
      </div>
      <div class="team-card">
        <div class="team-avatar" style="background:#2d5a27;color:#fff">S</div>
        <h4>Sophie Leclerc</h4>
        <span class="role">Responsable Archives</span>
        <p>Historienne du sport, ancienne conservatrice au Musée National du Sport de Nice.</p>
      </div>
      <div class="team-card">
        <div class="team-avatar" style="background:#1a3a5c;color:#fff">R</div>
        <h4>Roberto Fiori</h4>
        <span class="role">Expert Italie &amp; Espagne</span>
        <p>Collectionneur depuis 1985, référent pour les maillots italiens et espagnols des années 80–90.</p>
      </div>
    </div>

    <span class="eyebrow" style="margin-top:52px;display:block;">Nos Engagements</span>
    <h2>Les Valeurs de la Maison</h2>
    <div class="about-values">
      <div class="value-card"><h4>Authenticité</h4><p>Chaque pièce est soumise à un protocole d'expertise strict. Aucun maillot ne rejoint nos archives sans certification.</p></div>
      <div class="value-card"><h4>Transparence</h4><p>Toute l'histoire connue d'une pièce est documentée : provenance, propriétaires précédents, contexte sportif.</p></div>
      <div class="value-card"><h4>Passion</h4><p>Nous sommes des collectionneurs avant d'être des experts. Cette passion guide chacune de nos décisions.</p></div>
      <div class="value-card"><h4>Communauté</h4><p>Notre plateforme est un espace d'échange entre passionnés, pas un simple catalogue en ligne.</p></div>
    </div>

    <div style="margin-top:52px;background:var(--dark);padding:38px;text-align:center;color:#fff;">
      <span class="eyebrow">Nous contacter</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:1.9rem;margin:10px 0 9px;">Une question ? Une pièce à soumettre ?</h2>
      <p style="color:#555;font-size:.92rem;margin-bottom:22px;">Notre équipe répond sous 48h ouvrées.</p>
      <p style="color:var(--gold);font-family:'Josefin Sans',sans-serif;font-size:.78rem;letter-spacing:2px;">contact@mmafoot-archives.fr</p>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════
     CONNEXION
══════════════════════════════════════ -->
<div id="login" class="page">
  <div class="auth-wrapper">
    <div class="auth-side">
      <span class="eyebrow">Espace Privé</span>
      <h2>Content de vous revoir.</h2>
      <p>Accédez à votre collection, vos expertises en cours et les nouvelles pièces disponibles.</p>
      <div class="auth-features">
        <div class="auth-feature"><span class="dot"></span>Collection personnelle archivée</div>
        <div class="auth-feature"><span class="dot"></span>Expertises exclusives</div>
        <div class="auth-feature"><span class="dot"></span>Alertes nouvelles pièces</div>
        <div class="auth-feature"><span class="dot"></span>Réseau collectionneurs privé</div>
      </div>
    </div>
    <div class="auth-form">
      <h3>Connexion</h3>
      <p class="subtitle">Votre espace collectionneur vous attend.</p>
      <div class="success-msg" id="login-success">Connexion réussie — Bienvenue.</div>
      <div class="form-group">
        <label>Adresse Email</label>
        <input type="email" id="login-email" placeholder="votre@email.com">
        <span class="error-msg" id="email-err">Email invalide.</span>
      </div>
      <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" id="login-pass" placeholder="••••••••">
        <span class="error-msg" id="pass-err">Mot de passe requis.</span>
      </div>
      <div style="text-align:right;margin-bottom:13px;">
        <a style="font-family:'Josefin Sans',sans-serif;font-size:.65rem;letter-spacing:1px;color:var(--gold);cursor:pointer;text-decoration:underline;" onclick="showPage('forgot')">Mot de passe oublié ?</a>
      </div>
      <button class="btn-auth" onclick="doLogin()">Se connecter</button>
      <p class="auth-switch">Pas encore membre ? <a onclick="showPage('register')">Créer un compte</a></p>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════
     INSCRIPTION
══════════════════════════════════════ -->
<div id="register" class="page">
  <div class="auth-wrapper" style="max-width:980px;">
    <div class="auth-side">
      <span class="eyebrow">Inscription</span>
      <h2>Rejoignez la communauté.</h2>
      <p>Accédez à l'ensemble de nos archives, expertises et réseau privé de collectionneurs.</p>
      <div class="auth-features">
        <div class="auth-feature"><span class="dot"></span>340+ pièces archivées</div>
        <div class="auth-feature"><span class="dot"></span>Soumission de vos pièces</div>
        <div class="auth-feature"><span class="dot"></span>Échanges avec 4 800 membres</div>
        <div class="auth-feature"><span class="dot"></span>Newsletter mensuelle exclusive</div>
        <div class="auth-feature"><span class="dot"></span>Certifications officielles</div>
      </div>
    </div>
    <div class="auth-form">
      <h3>Créer un compte</h3>
      <p class="subtitle">Gratuit — Sans engagement.</p>
      <div class="success-msg" id="register-success">✓ Compte créé ! Un email de bienvenue vous a été envoyé.</div>
      <div class="form-row">
        <div class="form-group">
          <label>Prénom</label>
          <input type="text" id="reg-prenom" placeholder="Jean">
          <span class="error-msg" id="prenom-err">Prénom requis.</span>
        </div>
        <div class="form-group">
          <label>Nom</label>
          <input type="text" id="reg-nom" placeholder="Dupont">
          <span class="error-msg" id="nom-err">Nom requis.</span>
        </div>
      </div>
      <div class="form-group">
        <label>Adresse Email</label>
        <input type="email" id="reg-email" placeholder="votre@email.com">
        <span class="error-msg" id="reg-email-err">Email invalide.</span>
      </div>
      <div class="form-group">
        <label>Pays de résidence</label>
        <select id="reg-pays">
          <option value="">Sélectionner un pays</option>
          <option>France</option><option>Belgique</option><option>Suisse</option>
          <option>Espagne</option><option>Italie</option><option>Allemagne</option>
          <option>Portugal</option><option>Angleterre</option><option>Autre</option>
        </select>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label>Mot de passe</label>
          <input type="password" id="reg-pass" placeholder="••••••••">
          <span class="error-msg" id="reg-pass-err">6 caractères minimum.</span>
        </div>
        <div class="form-group">
          <label>Confirmer</label>
          <input type="password" id="reg-pass2" placeholder="••••••••">
          <span class="error-msg" id="reg-pass2-err">Ne correspond pas.</span>
        </div>
      </div>
      <div class="captcha-box" onclick="toggleCaptcha()">
        <div class="captcha-check" id="captcha-check"><span class="tick">✓</span></div>
        <span class="captcha-label">Je ne suis pas un robot</span>
        <div class="captcha-logo">🛡️<br>reCAPTCHA</div>
      </div>
      <span class="error-msg" id="captcha-err">Veuillez cocher la case anti-robot.</span>
      <div class="form-group" style="margin-top:6px;">
        <div class="checkbox-group">
          <input type="checkbox" id="reg-cgu">
          <label for="reg-cgu">J'accepte les <a style="color:var(--gold);cursor:pointer">conditions générales</a> et la <a style="color:var(--gold);cursor:pointer">politique de confidentialité</a>.</label>
        </div>
        <span class="error-msg" id="cgu-err">Vous devez accepter les CGU.</span>
      </div>
      <div class="form-group">
        <div class="checkbox-group">
          <input type="checkbox" id="reg-newsletter" checked>
          <label for="reg-newsletter">Recevoir la newsletter mensuelle MMAfoot.</label>
        </div>
      </div>
      <button class="btn-auth" onclick="doRegister()">Créer mon compte</button>
      <p class="auth-switch">Déjà membre ? <a onclick="showPage('login')">Se connecter</a></p>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════
     MOT DE PASSE OUBLIÉ
══════════════════════════════════════ -->
<div id="forgot" class="page">
  <div class="forgot-wrapper">
    <h3>Mot de passe oublié</h3>
    <p>Saisissez votre adresse email. Si un compte existe, vous recevrez un lien de réinitialisation dans quelques minutes.</p>
    <div class="success-msg" id="forgot-success">✓ Email envoyé — Vérifiez votre boîte de réception et vos spams.</div>
    <div class="form-group">
      <label>Adresse Email</label>
      <input type="email" id="forgot-email" placeholder="votre@email.com">
      <span class="error-msg" id="forgot-err">Adresse email invalide.</span>
    </div>
    <div class="captcha-box" onclick="toggleCaptchaForgot()" style="margin-bottom:11px;">
      <div class="captcha-check" id="captcha-check-forgot"><span class="tick">✓</span></div>
      <span class="captcha-label">Je ne suis pas un robot</span>
      <div class="captcha-logo">🛡️<br>reCAPTCHA</div>
    </div>
    <span class="error-msg" id="captcha-forgot-err">Veuillez cocher la case anti-robot.</span>
    <button class="btn-auth" style="margin-top:8px;" onclick="doForgot()">Envoyer le lien de réinitialisation</button>
    <p class="auth-switch" style="margin-top:14px;">Vous vous souvenez ? <a onclick="showPage('login')">Se connecter</a></p>
  </div>
</div>

<!-- ══════════════════════════════════════
     PROFIL
══════════════════════════════════════ -->
<div id="profil" class="page">
  <div class="profil-hero">
    <div class="avatar" id="profil-avatar">J</div>
    <div class="profil-info">
      <div class="eyebrow">Espace Collectionneur</div>
      <h2 id="profil-name">Jean Dupont</h2>
      <p style="color:#555;font-size:.86rem;margin-top:4px;">Membre depuis 2025 · <span style="color:var(--gold)">Collectionneur Certifié</span></p>
    </div>
  </div>
  <div class="profil-body">
    <div class="profil-grid">
      <div class="profil-stat"><span class="num">0</span><span class="lbl">Pièces Archivées</span></div>
      <div class="profil-stat"><span class="num">0</span><span class="lbl">Expertises en cours</span></div>
      <div class="profil-stat"><span class="num">0</span><span class="lbl">Échanges effectués</span></div>
    </div>
    <div style="background:#fff;border:1px solid var(--border);padding:38px;text-align:center;">
      <div style="font-size:2.8rem;margin-bottom:12px">📦</div>
      <h3 style="font-family:'Playfair Display',serif;font-size:1.35rem;margin-bottom:7px;">Votre collection est vide</h3>
      <p style="color:var(--gray);font-size:.9rem;margin-bottom:20px;">Explorez nos archives et soumettez vos premières pièces à l'expertise.</p>
      <button class="btn-primary" onclick="showPage('catalog')">Explorer la Collection</button>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════
     FOOTER
══════════════════════════════════════ -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <div class="logo-text">MMAfoot</div>
      <p>Maison de collection et d'expertise de maillots de football historiques. Fondée en 1997, référence européenne de la haute collection.</p>
    </div>
    <div class="footer-col">
      <h4>Collection</h4>
      <ul>
        <li onclick="showPage('catalog')">Vintage 70s–90s</li>
        <li onclick="showPage('catalog')">Sélections Nationales</li>
        <li onclick="showPage('catalog')">Grands Clubs</li>
        <li onclick="showPage('catalog')">Éditions Limitées</li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Expertise</h4>
      <ul>
        <li>Authentification</li>
        <li>Certification Or</li>
        <li>Archives Numériques</li>
        <li>Livret d'Origine</li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Maison</h4>
      <ul>
        <li onclick="showPage('about')">À Propos</li>
        <li onclick="showPage('about')">Nos Experts</li>
        <li>Presse &amp; Médias</li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 MMAfoot Archives — Tous droits réservés</p>
    <p>CGU · Confidentialité · Mentions légales</p>
  </div>
</footer>

<!-- ══════════════════════════════════════
     MODAL DÉTAIL MAILLOT
══════════════════════════════════════ -->
<div class="jmodal-overlay" id="jmodal">
  <div class="jmodal-box">
    <button class="jmodal-close" onclick="closeJersey()">✕</button>
    <div class="jmodal-grid">
      <div class="jmodal-gallery">
        <img id="jmodal-main" class="jmodal-main-img" src="" alt="">
        <div class="jmodal-thumbs" id="jmodal-thumbs"></div>
      </div>
      <div class="jmodal-info">
        <p class="jmodal-era" id="jmodal-era"></p>
        <h2 id="jmodal-title"></h2>
        <p class="jmodal-desc" id="jmodal-desc"></p>
        <div class="jmodal-specs" id="jmodal-specs"></div>
        <div class="jmodal-divider"></div>
        <h4>Demande d'expertise</h4>
        <div class="expertise-fields">
          <input type="text" id="exp-nom" placeholder="Votre nom complet">
          <input type="email" id="exp-email" placeholder="Votre adresse email">
          <select id="exp-type">
            <option value="">Type de demande</option>
            <option>Authentification officielle</option>
            <option>Estimation de valeur</option>
            <option>Certification Or</option>
            <option>Informations historiques</option>
          </select>
          <textarea id="exp-msg" placeholder="Message ou précisions (optionnel)..."></textarea>
          <button class="btn-auth" onclick="submitExpertise()">Envoyer la demande</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════
     APERÇU EMAIL DE BIENVENUE
══════════════════════════════════════ -->
<div class="email-preview" id="emailPreview">
  <div class="email-box">
    <div class="email-topbar">
      <div class="email-dot" style="background:#ff5f57"></div>
      <div class="email-dot" style="background:#febc2e"></div>
      <div class="email-dot" style="background:#28c840"></div>
      <span style="font-family:'Josefin Sans',sans-serif;font-size:.62rem;letter-spacing:1px;color:#888;margin-left:10px;">📬 Boîte de réception — Nouveau message</span>
    </div>
    <div style="background:#f0f0f0;padding:8px 18px;font-family:'Josefin Sans',sans-serif;font-size:.6rem;color:#666;letter-spacing:1px;">
      De : <strong>MMAfoot Archives</strong> &lt;contact@mmafoot-archives.fr&gt; · À : <span id="email-to-display">vous</span>
    </div>
    <div class="email-header">
      <div class="logo-text">⚽ MMAfoot <span class="badge-gold">Archives</span></div>
      <p style="font-family:'Josefin Sans',sans-serif;font-size:.58rem;letter-spacing:3px;color:#555;margin-top:5px;">BIENVENUE DANS LA COLLECTION</p>
    </div>
    <div class="email-body">
      <h2>Bienvenue, <span id="email-prenom-display">Jean</span> !</h2>
      <p>Votre compte <strong>MMAfoot Archives</strong> a été créé avec succès. Vous faites maintenant partie d'une communauté de <strong>4 800 collectionneurs passionnés</strong>.</p>
      <p>Votre espace personnel vous permet de :</p>
      <ul style="padding-left:18px;margin-bottom:14px;color:#555;font-size:.92rem;line-height:2.1;">
        <li>Soumettre vos pièces à l'expertise officielle</li>
        <li>Consulter nos 340+ archives historiques</li>
        <li>Échanger avec d'autres collectionneurs</li>
        <li>Recevoir nos alertes de nouvelles pièces</li>
      </ul>
      <button class="email-cta" onclick="closeEmailPreview();showPage('catalog')">Explorer la Collection →</button>
      <p style="font-size:.8rem;color:#bbb;line-height:1.6;">Si vous n'êtes pas à l'origine de cette inscription, ignorez cet email en toute sécurité.</p>
    </div>
    <div class="email-footer-bar">MMAfoot Archives · contact@mmafoot-archives.fr · Lyon, France<br><span style="color:#ccc;">© 2025 — Tous droits réservés</span></div>
    <div style="text-align:center;padding:14px;">
      <button class="email-close-btn" onclick="closeEmailPreview()">Fermer l'aperçu email</button>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast"><span id="toast-msg"></span></div>

<!-- ══════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════ -->
<script>

// ── Données maillots (images + galerie modal) ──
const JERSEYS = {
  napoli8788: {
    era: 'Serie A — Saison 1987–88', title: 'SSC Napoli 1987–88',
    desc: "Maillot porté lors du Scudetto historique sous Maradona. Tissu original Ennerre, sponsors San Paolo Banco di Napoli. L'un des rares exemplaires de jeu authentifiés encore en circulation.",
    specs: { Équipementier:'Ennerre', Taille:'L (coupe 80s)', Provenance:'Naples, Italie', Authenticité:"Certificat d'origine 2003" },
    imgs: [
      'https://footcollectors.co/wp-content/uploads/2025/01/Maillot-Naples-Domicile-1987-1988-1-1.jpg',
      'https://footcollectors.co/wp-content/uploads/2025/01/Maillot-Naples-Domicile-1987-1988-1-1.jpg',
      'https://footcollectors.co/wp-content/uploads/2025/01/Maillot-Naples-Domicile-1987-1988-1-1.jpg',
      'https://footcollectors.co/wp-content/uploads/2025/01/Maillot-Naples-Domicile-1987-1988-1-1.jpg'
    ]
  },
  france98: {
    era: 'Coupe du Monde — 1998', title: 'France 1998 — Finale',
    desc: "Maillot Adidas authentique de la finale France–Brésil (3–0), 12 juillet 1998. Patches officiels FIFA World Cup et FFF. Accompagné de la fiche de match originale.",
    specs: { Équipementier:'Adidas', Taille:'XL', Provenance:'Paris, France', Authenticité:'Certificat Adidas Heritage + FFF' },
    imgs: [
      'https://footsoccerpro.co/wp-content/uploads/2020/07/Maillot-Retro-Vintage-Equipe-de-France-1988-1-1.jpg',
      'https://footsoccerpro.co/wp-content/uploads/2020/07/Maillot-Retro-Vintage-Equipe-de-France-1988-1-1.jpg',
      'https://footsoccerpro.co/wp-content/uploads/2020/07/Maillot-Retro-Vintage-Equipe-de-France-1988-1-1.jpg',
      'https://footsoccerpro.co/wp-content/uploads/2020/07/Maillot-Retro-Vintage-Equipe-de-France-1988-1-1.jpg'
    ]
  },
  acmilan89: {
    era: 'Serie A — Saison 1988–89', title: 'AC Milan 1988–89',
    desc: "Maillot Adidas de la saison du triplé historique d'Arrigo Sacchi — Serie A, Coupe d'Europe et Supercoupe. La bande rouge et noire la plus emblématique de l'histoire milanaise.",
    specs: { Équipementier:'Adidas', Taille:'M (coupe 80s)', Provenance:'Milan, Italie', Authenticité:'Certificat AC Milan Fondazione' },
    imgs: [
      'https://lart-du-maillot.com/cdn/shop/files/6CDC3E43-E471-41AF-A25C-DCF9115E8A71.jpg?v=1749809347',
      'https://lart-du-maillot.com/cdn/shop/files/6CDC3E43-E471-41AF-A25C-DCF9115E8A71.jpg?v=1749809347',
      'https://lart-du-maillot.com/cdn/shop/files/6CDC3E43-E471-41AF-A25C-DCF9115E8A71.jpg?v=1749809347',
      'https://lart-du-maillot.com/cdn/shop/files/6CDC3E43-E471-41AF-A25C-DCF9115E8A71.jpg?v=1749809347'
    ]
  },
  ajax95: {
    era: 'Champions League — 1994–95', title: 'Ajax Amsterdam 1994–95',
    desc: "Maillot Umbro de la victoire en finale face au Milan AC (1–0). Génération Van der Sar, Seedorf, Kluivert, Davids — le dernier grand Ajax avant la dispersion.",
    specs: { Équipementier:'Umbro', Taille:'L', Provenance:'Amsterdam, Pays-Bas', Authenticité:'Certificat AFC Ajax Museum' },
    imgs: [
      'https://lart-du-maillot.com/cdn/shop/files/D35C8CAD-A40D-4F50-9679-701ADDAAE484.jpg?v=1706017985&width=1445',
      'https://lart-du-maillot.com/cdn/shop/files/D35C8CAD-A40D-4F50-9679-701ADDAAE484.jpg?v=1706017985&width=1445',
      'https://lart-du-maillot.com/cdn/shop/files/D35C8CAD-A40D-4F50-9679-701ADDAAE484.jpg?v=1706017985&width=1445',
      'https://lart-du-maillot.com/cdn/shop/files/D35C8CAD-A40D-4F50-9679-701ADDAAE484.jpg?v=1706017985&width=1445'
    ]
  },
  bresil70: {
    era: 'Coupe du Monde Mexico — 1970', title: 'Brésil 1970',
    desc: "Signé par les membres de l'équipe championne — Pelé, Jairzinho, Rivelino, Carlos Alberto. Tissu original Castor. L'équipe la plus belle de l'histoire du football mondial.",
    specs: { Équipementier:'Castor', Taille:'M (coupe 70s)', Provenance:'Rio de Janeiro, Brésil', Authenticité:"Certificat CBF + expertise Sotheby's 2001" },
    imgs: [
      'https://backtothefootball.com/wp-content/uploads/2025/04/BRE59_1.png',
      'https://backtothefootball.com/wp-content/uploads/2025/04/BRE59_1.png',
      'https://backtothefootball.com/wp-content/uploads/2025/04/BRE59_1.png',
      'https://backtothefootball.com/wp-content/uploads/2025/04/BRE59_1.png'
    ]
  },
  argentine86: {
    era: 'Coupe du Monde Mexico — 1986', title: 'Argentine 1986',
    desc: "Le maillot de la 'Mano de Dios'. Modèle Le Coq Sportif identique au quart de finale Argentine–Angleterre (22 juin 1986). Pièce de référence absolue dans la collection mondiale.",
    specs: { Équipementier:'Le Coq Sportif', Taille:'M', Provenance:'Buenos Aires, Argentine', Authenticité:"Certificat AFA + expertise Christie's 1999" },
    imgs: [
      'https://www.footpack.fr/wp-content/uploads/2020/12/maillot-maradona-coupe-du-monde-1986-argentine-angleterre-steve-hodge-1.jpeg',
      'https://www.footpack.fr/wp-content/uploads/2020/12/maillot-maradona-coupe-du-monde-1986-argentine-angleterre-steve-hodge-1.jpeg',
      'https://www.footpack.fr/wp-content/uploads/2020/12/maillot-maradona-coupe-du-monde-1986-argentine-angleterre-steve-hodge-1.jpeg',
      'https://www.footpack.fr/wp-content/uploads/2020/12/maillot-maradona-coupe-du-monde-1986-argentine-angleterre-steve-hodge-1.jpeg'
    ]
  },
  allemagne74: {
    era: 'Coupe du Monde Munich — 1974', title: "Allemagne de l'Ouest 1974",
    desc: "Maillot Adidas de la finale contre les Pays-Bas (2–1). L'équipe de Beckenbauer, Gerd Müller et Breitner. Tissu original avec numérotation conforme d'époque.",
    specs: { Équipementier:'Adidas', Taille:'M (coupe 70s)', Provenance:'Munich, Allemagne', Authenticité:'Certificat DFB Museum' },
    imgs: [
      'https://dcdn-us.mitiendanube.com/stores/004/530/304/products/1000280691-9757c9f1bed22122a717124257650110-480-0.webp',
      'https://dcdn-us.mitiendanube.com/stores/004/530/304/products/1000280691-9757c9f1bed22122a717124257650110-480-0.webp',
      'https://dcdn-us.mitiendanube.com/stores/004/530/304/products/1000280691-9757c9f1bed22122a717124257650110-480-0.webp',
      'https://dcdn-us.mitiendanube.com/stores/004/530/304/products/1000280691-9757c9f1bed22122a717124257650110-480-0.webp'
    ]
  },
  paysbas88: {
    era: "Championnat d'Europe — 1988", title: 'Pays-Bas 1988',
    desc: "Maillot Adidas de la victoire à l'Euro 1988. Gullit, Van Basten et Rijkaard à leur apogée. Le but de Van Basten en finale reste le plus beau de l'histoire du tournoi.",
    specs: { Équipementier:'Adidas', Taille:'L', Provenance:'Amsterdam, Pays-Bas', Authenticité:'Certificat KNVB Heritage' },
    imgs: [
      'https://maxikitsfoot.com/wp-content/uploads/2025/10/Maillot-de-foot-Pays-Bas-Coupe-du-monde-2026-concept-Noir.jpg',
      'https://maxikitsfoot.com/wp-content/uploads/2025/10/Maillot-de-foot-Pays-Bas-Coupe-du-monde-2026-concept-Noir.jpg',
      'https://maxikitsfoot.com/wp-content/uploads/2025/10/Maillot-de-foot-Pays-Bas-Coupe-du-monde-2026-concept-Noir.jpg',
      'https://maxikitsfoot.com/wp-content/uploads/2025/10/Maillot-de-foot-Pays-Bas-Coupe-du-monde-2026-concept-Noir.jpg'
    ]
  },
  barca92: {
    era: 'Champions League — Finale 1992', title: 'FC Barcelona 1991–92',
    desc: "Maillot Meyba de la finale contre la Sampdoria (1–0 a.p.). La génération Cruyff, Stoïchkov, Laudrup. Premier sacre européen de l'histoire du club catalan.",
    specs: { Équipementier:'Meyba', Taille:'L', Provenance:'Barcelone, Espagne', Authenticité:'Certificat FC Barcelona Museu' },
    imgs: [
      'https://shoptonmaillot.net/cdn/shop/files/Barcelona2023-24BlackSpecialEdition1.jpg?v=1742504161',
      'https://shoptonmaillot.net/cdn/shop/files/Barcelona2023-24BlackSpecialEdition1.jpg?v=1742504161',
      'https://shoptonmaillot.net/cdn/shop/files/Barcelona2023-24BlackSpecialEdition1.jpg?v=1742504161',
      'https://shoptonmaillot.net/cdn/shop/files/Barcelona2023-24BlackSpecialEdition1.jpg?v=1742504161'
    ]
  },
  liverpool78: {
    era: "Coupe d'Europe — Saison 1977–78", title: 'Liverpool FC 1977–78',
    desc: "Maillot Umbro original de la saison où Liverpool remporte sa deuxième Coupe d'Europe sous Bob Paisley. L'âge d'or des Reds — Keegan, Dalglish, Souness, Clemence.",
    specs: { Équipementier:'Umbro', Taille:'M (coupe 70s)', Provenance:'Liverpool, Angleterre', Authenticité:'Certificat LFC Heritage Foundation' },
    imgs: [
      'https://footlife.store/cdn/shop/files/rn-image_picker_lib_temp_b83eec98-325c-4397-89cc-9ad53f32d31f.jpg?v=1741632152',
      'https://footlife.store/cdn/shop/files/rn-image_picker_lib_temp_b83eec98-325c-4397-89cc-9ad53f32d31f.jpg?v=1741632152',
      'https://footlife.store/cdn/shop/files/rn-image_picker_lib_temp_b83eec98-325c-4397-89cc-9ad53f32d31f.jpg?v=1741632152',
      'https://footlife.store/cdn/shop/files/rn-image_picker_lib_temp_b83eec98-325c-4397-89cc-9ad53f32d31f.jpg?v=1741632152'
    ]
  },
  realmadrid00: {
    era: 'Champions League — Finale 2000', title: 'Real Madrid 1999–2000',
    desc: "Maillot Adidas de la 8e Coupe d'Europe du Real, finale à Paris contre Valence (3–0). Zidane, Figo et Raúl — l'ère des Galácticos qui commence.",
    specs: { Équipementier:'Adidas', Taille:'XL', Provenance:'Madrid, Espagne', Authenticité:'Certificat Real Madrid Fundación' },
    imgs: [
      'https://www.footpack.fr/wp-content/uploads/2025/04/maillot-real-madrid-1999-2000-reedition-adidas-3-819x1024.jpg',
      'https://www.footpack.fr/wp-content/uploads/2025/04/maillot-real-madrid-1999-2000-reedition-adidas-3-819x1024.jpg',
      'https://www.footpack.fr/wp-content/uploads/2025/04/maillot-real-madrid-1999-2000-reedition-adidas-3-819x1024.jpg',
      'https://www.footpack.fr/wp-content/uploads/2025/04/maillot-real-madrid-1999-2000-reedition-adidas-3-819x1024.jpg'
    ]
  },
  italie06: {
    era: 'Édition Limitée — Coupe du Monde 2006', title: 'Italie 2006 — Édition Or',
    desc: "Édition limitée (500 ex.) commémorant le 4e titre mondial. Design Puma spécial finitions dorées. Chaque exemplaire numéroté, accompagné d'un livret officiel de la Fédération italienne.",
    specs: { Équipementier:'Puma (édition spéciale)', Taille:'L', Exemplaires:'N° 247 / 500', Authenticité:'Certificat FIGC + numérotation gravée' },
    imgs: [
      'https://img.leboncoin.fr/api/v1/lbcpb1/images/9a/c8/1b/9ac81b2d3142c1303456f46ec0cf1e9ab423b3cf.jpg?rule=ad-large',
      'https://img.leboncoin.fr/api/v1/lbcpb1/images/9a/c8/1b/9ac81b2d3142c1303456f46ec0cf1e9ab423b3cf.jpg?rule=ad-large',
      'https://img.leboncoin.fr/api/v1/lbcpb1/images/9a/c8/1b/9ac81b2d3142c1303456f46ec0cf1e9ab423b3cf.jpg?rule=ad-large',
      'https://img.leboncoin.fr/api/v1/lbcpb1/images/9a/c8/1b/9ac81b2d3142c1303456f46ec0cf1e9ab423b3cf.jpg?rule=ad-large'
    ]
  },
  angleterre66: {
    era: 'Édition Centenaire — FA 2000', title: 'Angleterre 1966 — Réédition',
    desc: "Réédition officielle du maillot de la victoire anglaise à Wembley en 1966. Tissu et coupe d'époque, reproduction fidèle. 1 000 exemplaires pour le centenaire de la Football Association.",
    specs: { Équipementier:'Umbro (réédition)', Taille:'M', Exemplaires:'N° 612 / 1000', Authenticité:'Certificat The FA + Umbro Heritage' },
    imgs: [
      'https://i.etsystatic.com/40419340/r/il/e8241b/6100731631/il_570xN.6100731631_2psx.jpg',
      'https://i.etsystatic.com/40419340/r/il/e8241b/6100731631/il_570xN.6100731631_2psx.jpg',
      'https://i.etsystatic.com/40419340/r/il/e8241b/6100731631/il_570xN.6100731631_2psx.jpg',
      'https://i.etsystatic.com/40419340/r/il/e8241b/6100731631/il_570xN.6100731631_2psx.jpg'
    ]
  },
  france18: {
    era: 'Coupe du Monde Russie — 2018', title: 'France 2018 — Collection Étoile',
    desc: "Maillot officiel Nike de la victoire au Mondial 2018. Signé par les 23 joueurs lors de la cérémonie officielle de la FFF. Accompagné d'une lettre authentifiée de la Fédération.",
    specs: { Équipementier:'Nike', Taille:'XL', Signatures:'23 (groupe complet)', Authenticité:'Certificat FFF + lettre officielle signée' },
    imgs: [
      'https://www.maillots-foot-actu.fr/wp-content/uploads/2017/09/France-2018-maillot-coupe-du-monde-deux-%C3%A9toiles.jpg',
      'https://www.maillots-foot-actu.fr/wp-content/uploads/2017/09/France-2018-maillot-coupe-du-monde-deux-%C3%A9toiles.jpg',
      'https://www.maillots-foot-actu.fr/wp-content/uploads/2017/09/France-2018-maillot-coupe-du-monde-deux-%C3%A9toiles.jpg',
      'https://www.maillots-foot-actu.fr/wp-content/uploads/2017/09/France-2018-maillot-coupe-du-monde-deux-%C3%A9toiles.jpg'
    ]
  }
};

// ── Modal maillot ──
function openJersey(id) {
  const d = JERSEYS[id];
  if (!d) return;
  document.getElementById('jmodal-era').textContent   = d.era;
  document.getElementById('jmodal-title').textContent = d.title;
  document.getElementById('jmodal-desc').textContent  = d.desc;
  let sh = '';
  for (const [k, v] of Object.entries(d.specs)) sh += `<p><strong>${k} :</strong> ${v}</p>`;
  document.getElementById('jmodal-specs').innerHTML = sh;
  document.getElementById('jmodal-main').src = d.imgs[0];
  const tb = document.getElementById('jmodal-thumbs');
  tb.innerHTML = '';
  d.imgs.forEach((src, i) => {
    const img = document.createElement('img');
    img.src = src;
    img.className = 'jmodal-thumb' + (i === 0 ? ' active' : '');
    img.alt = d.title;
    img.onerror = () => img.style.display = 'none';
    img.onclick = () => {
      document.getElementById('jmodal-main').src = src;
      document.querySelectorAll('.jmodal-thumb').forEach(t => t.classList.remove('active'));
      img.classList.add('active');
    };
    tb.appendChild(img);
  });
  ['exp-nom','exp-email','exp-msg'].forEach(x => document.getElementById(x).value = '');
  document.getElementById('exp-type').value = '';
  document.getElementById('jmodal').classList.add('open');
}

function closeJersey() {
  document.getElementById('jmodal').classList.remove('open');
}
document.getElementById('jmodal').addEventListener('click', e => {
  if (e.target === document.getElementById('jmodal')) closeJersey();
});

function submitExpertise() {
  const n = document.getElementById('exp-nom').value.trim();
  const e = document.getElementById('exp-email').value.trim();
  const t = document.getElementById('exp-type').value;
  if (!n || !e || !t) { showToast('Remplissez tous les champs obligatoires.'); return; }
  closeJersey();
  showToast('✓ Demande envoyée — Réponse sous 48h ouvrées.');
}

// ── Navigation ──
function showPage(id) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  const el = document.getElementById(id);
  if (el) el.classList.add('active');
  window.scrollTo(0, 0);
}

// ── Filtres ──
function filterCategory(cat, btn) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  if (btn) btn.classList.add('active');
  document.querySelectorAll('.product-card').forEach(c => {
    c.style.display = (cat === 'all' || c.classList.contains(cat)) ? '' : 'none';
  });
}

// ── Captcha ──
let captchaDone = false;
function toggleCaptcha() {
  captchaDone = !captchaDone;
  document.getElementById('captcha-check').classList.toggle('checked', captchaDone);
}

let captchaForgotDone = false;
function toggleCaptchaForgot() {
  captchaForgotDone = !captchaForgotDone;
  document.getElementById('captcha-check-forgot').classList.toggle('checked', captchaForgotDone);
}

// ── Connexion ──
function doLogin() {
  const email = document.getElementById('login-email').value.trim();
  const pass  = document.getElementById('login-pass').value.trim();
  let ok = true;
  ['email-err','pass-err'].forEach(id => document.getElementById(id).classList.remove('show'));
  if (!email || !email.includes('@')) { document.getElementById('email-err').classList.add('show'); ok = false; }
  if (!pass)                          { document.getElementById('pass-err').classList.add('show'); ok = false; }
  if (!ok) return;
  document.getElementById('login-success').classList.add('show');
  setTimeout(() => setLoggedIn(email, email.split('@')[0]), 1000);
}

// ── Inscription ──
function doRegister() {
  const prenom     = document.getElementById('reg-prenom').value.trim();
  const nom        = document.getElementById('reg-nom').value.trim();
  const email      = document.getElementById('reg-email').value.trim();
  const pass       = document.getElementById('reg-pass').value.trim();
  const pass2      = document.getElementById('reg-pass2').value.trim();
  const cgu        = document.getElementById('reg-cgu').checked;
  let ok = true;
  ['prenom-err','nom-err','reg-email-err','reg-pass-err','reg-pass2-err','cgu-err','captcha-err']
    .forEach(id => document.getElementById(id).classList.remove('show'));
  if (!prenom)                        { document.getElementById('prenom-err').classList.add('show'); ok = false; }
  if (!nom)                           { document.getElementById('nom-err').classList.add('show'); ok = false; }
  if (!email || !email.includes('@')) { document.getElementById('reg-email-err').classList.add('show'); ok = false; }
  if (pass.length < 6)                { document.getElementById('reg-pass-err').classList.add('show'); ok = false; }
  if (pass !== pass2)                 { document.getElementById('reg-pass2-err').classList.add('show'); ok = false; }
  if (!captchaDone)                   { document.getElementById('captcha-err').classList.add('show'); ok = false; }
  if (!cgu)                           { document.getElementById('cgu-err').classList.add('show'); ok = false; }
  if (!ok) return;
  document.getElementById('register-success').classList.add('show');
  document.getElementById('email-prenom-display').textContent = prenom;
  document.getElementById('email-to-display').textContent     = email;
  setTimeout(() => { showEmailPreview(); setLoggedIn(email, prenom + ' ' + nom); }, 1400);
}

// ── Mot de passe oublié ──
function doForgot() {
  const email = document.getElementById('forgot-email').value.trim();
  let ok = true;
  ['forgot-err','captcha-forgot-err'].forEach(id => document.getElementById(id).classList.remove('show'));
  if (!email || !email.includes('@')) { document.getElementById('forgot-err').classList.add('show'); ok = false; }
  if (!captchaForgotDone)             { document.getElementById('captcha-forgot-err').classList.add('show'); ok = false; }
  if (!ok) return;
  document.getElementById('forgot-success').classList.add('show');
  showToast('✓ Si un compte existe, un email a été envoyé.');
  setTimeout(() => showPage('login'), 2800);
}

// ── État connecté / déconnecté ──
function setLoggedIn(email, name) {
  document.getElementById('nav-login-link').style.display  = 'none';
  document.getElementById('nav-reg-link').style.display    = 'none';
  document.getElementById('nav-account-link').style.display = 'block';
  document.getElementById('nav-logout').style.display      = 'block';
  document.getElementById('user-display').textContent      = name.split(' ')[0];
  document.getElementById('profil-name').textContent       = name;
  document.getElementById('profil-avatar').textContent     = name[0].toUpperCase();
  showPage('profil');
}

function doLogout() {
  document.getElementById('nav-login-link').style.display  = 'block';
  document.getElementById('nav-reg-link').style.display    = 'block';
  document.getElementById('nav-account-link').style.display = 'none';
  document.getElementById('nav-logout').style.display      = 'none';
  showPage('home');
  showToast('Vous avez été déconnecté.');
}

// ── Aperçu email ──
function showEmailPreview()  { document.getElementById('emailPreview').classList.add('open'); }
function closeEmailPreview() { document.getElementById('emailPreview').classList.remove('open'); }
document.getElementById('emailPreview').addEventListener('click', e => {
  if (e.target === document.getElementById('emailPreview')) closeEmailPreview();
});

// ── Toast ──
function showToast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toast-msg').textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3400);
}

</script>
</body>
</html>
