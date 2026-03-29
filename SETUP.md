# Stack Symfony Docker - Configuration Complète ✅

## État actuel
✅ **Le stack est fonctionnel et prêt à être utilisé !**

### Services disponibles
- **Application Symfony** : https://localhost (HTTPS) ou http://localhost (redirection HTTP->HTTPS)
- **Adminer (BDD UI)** : http://localhost:8080
- **Mailpit (Email testing)** : http://localhost:8025
- **PostgreSQL Database** : database:5432

## Configuration initiale effectuée

### 1. Clonage du dépôt
```bash
git clone https://github.com/dunglas/symfony-docker.git .
```

### 2. Containers Docker configurés
- **PHP-FrankenPHP** (PHP 8.5.4)
- **PostgreSQL 16** (base de données)
- **Adminer** (interface de gestion BDD)
- **Mailpit** (service de mail)

### 3. Bases de données
```
DATABASE URL: postgresql://app:!ChangeMe!@database:5432/app?serverVersion=16&charset=utf8
```

**À FAIRE** : Changer le mot de passe par défaut !ChangeMe! en production.

### 4. Extensions PHP installées
- pdo_pgsql (driver PostgreSQL)
- composer
- apcu, intl, opcache, zip
- xdebug (développement)

## Démarrer le projet

```bash
cd "c:\Cours\BTS Info\2 eme année\Portefolio"
docker compose up -d
```

## Arrêter le projet

```bash
docker compose down
```

## Commandes utiles

### Accéder au container PHP
```bash
docker compose exec -T php bash
```

### Lancer une commande Symfony
```bash
docker compose exec -T php php bin/console <commande>
```

### Créer un contrôleur
```bash
docker compose exec -T php php bin/console make:controller NomDuControleur
```

### Créer une entité (modèle)
```bash
docker compose exec -T php php bin/console make:entity NomDeLaTable
```

### Créer une migration (après modification d'entité)
```bash
docker compose exec -T php php bin/console make:migration
docker compose exec -T php php bin/console doctrine:migrations:migrate
```

### Installer de nouveaux paquets
```bash
docker compose exec -T php composer require <package>
```

## Accéder à Adminer (Gestion BDD)

1. Allez à http://localhost:8080
2. **Serveur** : `database`
3. **Utilisateur** : `app`
4. **Mot de passe** : `!ChangeMe!` (à changer !)
5. **Base de données** : `app`

## Installer des extensions PHP

Pour ajouter de nouvelles extensions PHP, modifiez le `Dockerfile` et relancez la build :

```bash
docker compose build --pull --no-cache
docker compose up -d
```

## Notes importantes

- ✅ Le driver PostgreSQL (pdo_pgsql) est installé
- ✅ Doctrine ORM est configuré
- ✅ Les migrations sont actives
- ⚠️ N'oubliez pas de changer le mot de passe PostgreSQL en production
- 📝 Tous les ports de développement sont exposés sur localhost

## Prochaines étapes

1. Créer un contrôleur : `make:controller HomeController`
2. Créer une entité : `make:entity Film`
3. Créer une migration : `make:migration` puis `doctrine:migrations:migrate`
4. Créer un formulaire : `make:form FilmType`
5. Créer un formulaire complet : `make:crud` pour CRUD automatique

## Ressources documentation

- [Symfony Official Docs](https://symfony.com/doc/current/index.html)
- [Doctrine ORM](https://www.doctrine-project.org/)
- [FrankernPHP](https://frankenphp.dev/)
- [PostgreSQL](https://www.postgresql.org/)

---
**Stack créé le** : 22 mars 2026  
**Dernière mise à jour** : Setup complété et validé
