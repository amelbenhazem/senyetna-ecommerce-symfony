# Senyetna — boutique en ligne (Symfony 6)

Projet **académique** réalisé pendant mes études : une boutique de produits alimentaires (fruits, légumes) avec catalogue, commandes, avis et authentification.

Stack : **PHP 8.1+**, **Symfony 6.4**, **Doctrine ORM**, **Twig**, **MySQL**.

> Le design vitrine reprend le template [Ogani](https://colorlib.com/wp/template/ogani/) (Colorlib), adapté en Twig.

## Fonctionnalités

- Inscription et connexion (mot de passe hashé, CSRF)
- Catalogue de produits (image, catégorie, fournisseur)
- CRUD commandes et lignes de commande
- Avis clients (note + commentaire)
- Page d’accueil branchée sur les produits en base

## Limites (projet étudiant)

- Panier et paiement **non implémentés** (le checkout est une démo)
- Pas de rôle administrateur : un utilisateur connecté peut gérer produits / commandes
- Le formulaire contact n’envoie pas d’e-mail (`MAILER_DSN=null`)

## Installation

```bash
git clone <url-du-repo>
cd projetsymfony
composer install
```

Copier la configuration locale :

```bash
cp .env.example .env.local
```

Dans `.env.local`, renseigner MySQL, par exemple :

```
DATABASE_URL="mysql://root:@127.0.0.1:3306/senyetna?serverVersion=8.0.32&charset=utf8mb4"
```

Puis :

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console cache:clear
symfony serve
```

Ouvrir [http://127.0.0.1:8000](http://127.0.0.1:8000).

Si une ancienne base existe déjà et que la migration échoue :

```bash
php bin/console doctrine:database:drop --force --if-exists
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

## Compte

Créer un compte via `/signup`, puis se connecter sur `/login`.

Les pages d’édition (nouveau produit, commandes, fournisseurs, avis) demandent d’être connecté.

## Structure

```
src/Entity      Produit, Fournisseur, Commande, LigneCommande, Avis, User
src/Controller  Pages vitrine + CRUD
src/Security    Authenticator de connexion
templates/      Twig (accueil, boutique, auth)
public/         CSS / JS du thème + uploads des images produits
```

## Auteur

Projet étudiant — portfolio.
