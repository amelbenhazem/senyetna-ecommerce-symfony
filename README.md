# Senyetna

Projet académique réalisé dans le cadre du module **Symfony**.

**Senyetna** est une plateforme e-commerce de vente de produits agricoles (plusieurs catégories : fruits, légumes, etc.).

Repo : [https://github.com/amelbenhazem/projetsymfony](https://github.com/amelbenhazem/projetsymfony)

## Stack

- PHP 8.1
- Symfony 6.4
- Doctrine ORM
- Twig
- MySQL

## Fonctionnalités

- Inscription et connexion
- Catalogue de produits (plusieurs catégories, images)
- Gestion des fournisseurs
- Gestion des commandes et des lignes de commande
- Avis clients (note + commentaire)
- Page d’accueil avec les produits en base
- Page contact

## Installation

```bash
git clone https://github.com/amelbenhazem/projetsymfony.git
cd projetsymfony
composer install
```

Copier `.env.example` vers `.env.local` et indiquer la base MySQL :

```
DATABASE_URL="mysql://root:@127.0.0.1:3306/senyetna?serverVersion=8.0.32&charset=utf8mb4"
```

Ensuite :

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

## Lancer le projet

```bash
symfony serve
```

Ouvrir le site ici : **http://127.0.0.1:8000**


