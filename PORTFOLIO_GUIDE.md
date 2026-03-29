# 📚 Guide de Personnalisation du Portfolio

## 🎯 Introduction

Ce portfolio est un template Symfony prêt à être personnalisé avec vos infos. Ce guide vous montre exactement **où et quoi modifier** pour vous le réapproprier.

---

## 📂 Structure du Projet

```
Portfolio/
├── src/
│   └── Controller/
│       └── Portfolio/
│           └── PortfolioController.php    ← Contrôleur principal
├── templates/
│   └── portfolio/
│       └── index.html.twig                ← Template HTML principal
└── public/
    └── ...
```

**Fichiers à modifier :** 2 fichiers seulement !
1. **PortfolioController.php** - Vos infos personnelles
2. **index.html.twig** - Contenu et textes

---

## 🔧 Modification 1 : Vos Informations Personnelles

### Fichier : `src/Controller/Portfolio/PortfolioController.php`

Ce fichier contient vos infos de base utilisées dans tout le portfolio.

```php
#[Route('/', name: 'app_portfolio_index')]
public function index(): Response
{
    $data = [
        'nom' => 'Maxence BRULLON',              // ← Votre nom
        'titre' => 'Étudiant en BTS SIO - Option SLAM',  // ← Votre titre
        'email' => 'votre.email@exemple.com',   // ← Votre email
        'telephone' => '+33 X XX XX XX XX',      // ← Votre téléphone
        'adresse' => 'Votre Ville, France',      // ← Votre adresse
        'github' => 'https://github.com/votre-username',    // ← Votre GitHub
        'linkedin' => 'https://linkedin.com/in/votre-profil',  // ← Votre LinkedIn
    ];

    return $this->render('portfolio/index.html.twig', $data);
}
```

**À faire :**
1. Ouvrir le fichier
2. Remplacer les valeurs entre les guillemets par vos infos
3. Sauvegarder
4. Actualiser le navigateur pour voir les changements

---

## 📝 Modification 2 : Contenu du Portfolio

### Fichier : `templates/portfolio/index.html.twig`

C'est ici que vous trouvez tous les textes à remplacer.

### 2.1 - Section Profil

```html
<h3>À propos de moi</h3>
<p>
    Je suis un étudiant en BTS Services Informatiques aux Organisations option SLAM passionné par le développement informatique.
</p>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
    <!-- ↑↑↑ REMPLACER ce texte par votre biographie ↑↑↑ -->
</p>
```

**À faire :**
- Remplacer le Lorem ipsum par un texte qui parle de vous
- Garder le même format HTML

### 2.2 - Section Parcours (Éducation)

Les dates et noms des écoles :

```html
<div class="date">Sept 2024 - Aujourd'hui</div>
<h4>BTS SIO - Option SLAM</h4>
<p>BTS Services Informatiques aux Organisations</p>
<p>Lycée [Nom du lycée], [Ville] - Bretagne</p>
```

**À faire :**
- Remplacer `[Nom du lycée]` par votre lycée
- Remplacer `[Ville]` par votre ville
- Adapter les dates si nécessaire

### 2.3 - Section Parcours (Stages & Expériences)

```html
<div class="date">Juin 2024 - Septembre 2024</div>
<h4>Stage en Développement Web</h4>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
    <!-- ↑↑↑ Décrire votre expérience ici ↑↑↑ -->
</p>
<p><strong>Entreprise :</strong> [Nom de l'entreprise], [Ville]</p>
```

**À faire :**
- Ajouter vos stages réels
- Décrire ce que vous avez fait
- Ajouter des blocs supplémentaires si vous en avez d'autres

### 2.4 - Section Compétences

```html
<div class="skill-category">
    <h4>🌐 Développement Web</h4>
    <div class="skill-tags">
        <span class="skill-tag">HTML5</span>
        <span class="skill-tag">CSS3</span>
        <span class="skill-tag">JavaScript</span>
        <!-- ↑↑↑ Remplacer par vos compétences ↑↑↑ -->
    </div>
</div>
```

**À faire :**
- Modifier les compétences dans chaque catégorie
- Ajouter/retirer des `<span class="skill-tag">VOTRE_COMPETENCE</span>`
- Créer de nouvelles catégories si nécessaire en copiant/collant une section

### 2.5 - Section Projets

Chaque projet suit ce format :

```html
<div class="card">
    <h4>Gestion de Bibliothèque</h4>
    <p>
        Application web en Symfony permettant la gestion d'une bibliothèque...
        <!-- Description de votre projet -->
    </p>
    <p><strong>Technologies :</strong> Symfony, PostgreSQL, Twig</p>
    <a href="#" class="btn">Voir le projet</a>  <!-- Mettre votre URL -->
</div>
```

**À faire :**
1. Remplacer le titre du projet
2. Décrire votre projet (remplacer le Lorem ipsum)
3. Lister les technologies utilisées
4. Remplacer `href="#"` par l'URL de votre projet

**Pour ajouter un projet :**
- Copier/coller un bloc `<div class="card">...</div>`
- Modifier le contenu
- C'est tout ! Ça se redimensionnera automatiquement

### 2.6 - Textes Contact

```html
<p>📧 <a href="mailto:{{ email }}">{{ email }}</a></p>
<p>📱 {{ telephone }}</p>
<p>📍 {{ adresse }}</p>
```

Ces infos viennent du contrôleur, elles se mettent à jour automatiquement. Pas besoin de modifier ici !

---

## 🎨 Personnalisation Avancée

### Changer les Couleurs

En haut du fichier `index.html.twig`, il y a une section CSS :

```css
:root {
    --primary-color: #2563eb;       /* Bleu principal */
    --secondary-color: #1e40af;     /* Bleu foncé */
    --accent-color: #f59e0b;        /* Orange/Gold */
    --light-bg: #f8fafc;            /* Arrière-plan clair */
    --dark-text: #1e293b;           /* Texte foncé */
    --muted-text: #64748b;          /* Texte gris */
}
```

**Pour changer les couleurs :**
1. Trouver la couleur hex que vous voulez (#RRGGBB)
2. Remplacer les valeurs dans les `--primary-color`, `--secondary-color`, etc.

**Sites pour choisir les couleurs :**
- https://colorpicker.com
- https://coolors.co
- https://www.color-hex.com

### Ajouter une Nouvelle Section

1. Copier une section entière (de `<section id="">` à `</section>`)
2. Le coller après une autre section
3. Modifier l'`id` (exemple : `id="nouvellepage"`)
4. Ajouter un lien dans la navigation :

```html
<nav>
    <ul>
        <li><a href="#nouvellepage">Nouvelle Page</a></li>
    </ul>
</nav>
```

### Modifier le Style des Cartes

Les cartes (cards) ont ces propriétés CSS modifiables :

```css
.card {
    background: white;              /* Couleur de fond */
    padding: 2rem;                  /* Espacement interne */
    border-radius: 8px;             /* Arrondissement des coins */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);  /* Ombre */
    border-top: 4px solid var(--primary-color); /* Barre du haut */
}
```

---

## 🚀 Mettre à Jour les Images

Pour ajouter une image (photo, logo, projet) :

```html
<img src="/images/votre-image.jpg" alt="Description de l'image">
```

**Où placer l'image :**
- Créer un dossier `images/` dans `public/`
- Y mettre votre image
- Utiliser le chemin `/images/mon-image.jpg`

---

## ✅ Checklist de Personnalisation

- [ ] Modifier votre nom dans le contrôleur
- [ ] Changer votre email et téléphone
- [ ] Ajouter vos liens GitHub et LinkedIn
- [ ] Remplacer le texte "À propos de moi"
- [ ] Mettre à jour votre parcours scolaire
- [ ] Ajouter vos stages/expériences
- [ ] Lister vos compétences
- [ ] Ajouter vos projets réels
- [ ] Changer les couleurs si vous le souhaitez
- [ ] Tester le responsive sur mobile

---

## 🐛 Dépannage

### Le portfolio ne se met pas à jour

**Solution :** Actualiser la page avec `Ctrl+Maj+Suppr` (cache forcé) ou `F12` → Application → Clear Storage

### Mes changements HTML ne s'affichent pas

**Solution :** Vérifier que vous sauvegardez bien le fichier (Ctrl+S dans VS Code)

### Les couleurs ne changent pas

**Solution :** Assurez-vous de modifier les bonnes valeurs CSS au début du fichier

### Les symboles emoji ne s'affichent pas

**Solution :** Garder les emoji tels quels ou les remplacer par des icons Font Awesome

---

## 📚 Ressources Utiles

- **Émojis gratuits :** https://emojipedia.org/
- **Icons gratuits :** https://fontawesome.com/ ou https://feathericons.com/
- **Polices :** https://fonts.google.com/
- **Générateur de couleurs :** https://coolors.co/
- **Optimiser les images :** https://tinypng.com/

---

## 🎓 Prochaines Étapes (Optionnel)

1. **Ajouter une base de données :** Créer une table `projets` pour les récupérer dynamiquement
2. **Formulaire de contact fonctionnel :** Valider et envoyer les emails
3. **Blog :** Système d'articles
4. **Admin panel :** Interface pour gérer votre portfolio
5. **Déploiement :** Mettre en ligne sur Heroku, Vercel, ou OVH

---

## 🤝 Support

Si vous rencontrez un problème :

1. Vérifier la syntaxe HTML (fermeture des balises)
2. Regarder la console navigateur (`F12` → Console)
3. Vérifier les noms des fichiers (casse sensible sur Linux)
4. Redémarrer les containers Docker : `docker compose down && docker compose up -d`

---

**Bon courage pour votre portfolio ! 🚀**
