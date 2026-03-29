# Portfolio BTS SIO SLAM - Récapitulatif Rapide

## ✅ Qu'est-ce qui a été créé ?

Un **portfolio responsive d'une seule page** inspiré de https://elouanbret.alwaysdata.net avec :

- ✅ Navigation fluide par sections
- ✅ Section Accueil (Hero) avec liens sociaux
- ✅ Section Profil avec bio et objectifs
- ✅ Section Parcours avec timeline
- ✅ Section Compétences avec tags dynamiques
- ✅ Section Projets (scolaires, personnels, professionnels)
- ✅ Section Contact avec formulaire
- ✅ Design responsive (mobile, tablet, desktop)
- ✅ Couleurs personnalisables
- ✅ Tous les textes en Lorem ipsum prêts à être remplacés

---

## 🎯 Quoi faire maintenant ?

### Étape 1 : Personnaliser vos infos (5 min)
Fichier : `src/Controller/Portfolio/PortfolioController.php`

```php
'nom' => 'Maxence BRULLON',          // ← Votre nom
'email' => 'votre.email@exemple.com' // ← Votre email
'github' => 'https://github.com/...'  // ← Votre GitHub
'linkedin' => 'https://linkedin.com/...' // ← Votre LinkedIn
```

### Étape 2 : Remplir le contenu (1-2 h)
Fichier : `templates/portfolio/index.html.twig`

- Remplacer tous les Lorem ipsum par vos textes
- Ajouter vos projets réels
- Lister vos compétences
- Mettre à jour votre parcours

### Étape 3 : Tester et finir (30 min)
- Ouvrir https://localhost dans votre navigateur
- Vérifier sur mobile (`F12` → toggledevicesize)
- Corriger les textes/erreurs
- Sauvegarder

### Étape 4 : Votre portfolio est prêt ! 🚀

---

## 📖 Documentation Complète

Pour plus de détails :
→ Consultez **PORTFOLIO_GUIDE.md** dans le dossier racine

---

## 🗂️ Fichiers à Modifier

```
Portfolio/
├── src/Controller/Portfolio/
│   └── PortfolioController.php ........ Vos infos personnelles
├── templates/portfolio/
│   └── index.html.twig ............... Contenu du portfolio (HTML + CSS)
└── PORTFOLIO_GUIDE.md ................ Guide complet (EN COURS DE LECTURE)
```

**C'est tout ! Seulement 2 fichiers à modifier !**

---

## 🔥 Tips Rapides

### Pour ajouter un projet :
1. Trouver une carte `<div class="card">...</div>` existante
2. La copier/coller
3. Modifier le titre, description, technologies
4. C'est automatiquement mis en place !

### Pour changer les couleurs :
Au début de `index.html.twig`, modifier les couleurs CSS :
```css
--primary-color: #2563eb;    /* Bleu par défaut */
--accent-color: #f59e0b;     /* Orange par défaut */
```

### Si c'est pas à jour dans le navigateur :
Faire un `Ctrl+Maj+Suppr` pour vider le cache ou `F12` → Network → Disable cache

---

## 🚀 Déploiement (Optionnel)

Une fois terminé, vous pouvez déployer sur :
- **Heroku** (gratuit, simple)
- **Vercel** (super rapide)
- **OVH/Infomaniak** (domaine .fr perso)
- **Votre propre serveur**

---

## 📚 Structure du Portfolio

### Sections (dans l'ordre) :
1. **Accueil** - Présentation + liens sociaux
2. **Profil** - Qui êtes-vous + objectifs
3. **Parcours** - Études + expériences (timeline)
4. **Compétences** - Skills par catégorie
5. **Projets** - Vos réalisations
6. **Contact** - Formulaire + infos

Chaque section a un `id` pour la navigation (ex: `id="profil"` → `#profil`)

---

## ⚡ Commandes Docker Utiles

```bash
# Redémarrer le portfolio
docker compose down
docker compose up -d

# Voir les logs
docker compose logs -f

# Accéder au container PHP pour des commandes
docker compose exec -T php bash
```

---

## 🎨 Couleurs par Défaut

- **Bleu principal** : #2563eb
- **Bleu foncé** : #1e40af
- **Orange/Accent** : #f59e0b
- **Arrière-plan clair** : #f8fafc
- **Texte foncé** : #1e293b

Modifier dans la section `:root { }` du CSS au début de `index.html.twig`

---

## ❓ Questions Fréquentes

**Q: Où mettre mes images?**
R: Créer un dossier `public/images/` et utiliser `<img src="/images/ma-photo.jpg">`

**Q: Comment ajouter une nouvelle section?**
R: Copier une `<section>` entière, puis l'adapter. Consulter PORTFOLIO_GUIDE.md

**Q: Les emojis c'est important?**
R: Non, ce sont juste des icônes décoratives. Les retirer ou les remplacer par des icons Font Awesome

**Q: Peut-on ajouter une base de données?**
R: Oui ! Mais ce n'est pas nécessaire pour commencer

---

## ✨ Prochaines Améliorations Possibles

- [ ] Ajouter des images réelles
- [ ] Créer des pages détaillées pour chaque projet
- [ ] Ajouter un système de filtrage des projets
- [ ] Intégrer un vrai formulaire de contact
- [ ] Animation au scroll
- [ ] Mode sombre
- [ ] Blog avec articles

---

## 🎓 Pour Votre BTS SIO SLAM

Ce portfolio montre :
- ✅ Maîtrise de **Symfony**
- ✅ Compétences en **HTML/CSS/JavaScript**
- ✅ **Design responsive** et **UX**
- ✅ Capacité d'**organisation** et de **présentation**
- ✅ **Portfolio personnel** = argument d'emploi

C'est un très bon projet pour votre portfolio professionnel !

---

**Bonne chance ! 🚀**

*Pour des questions détaillées, consultez PORTFOLIO_GUIDE.md*
