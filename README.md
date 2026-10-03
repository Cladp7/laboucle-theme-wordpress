# La Boucle – thème WordPress codé à la main

Série de défis du cours **CMS niveau 2** (2e année de Web Design UI/UX, EAFC Fléron-Charlemagne, 2026).

Un thème WordPress classique, sans page builder, pour un catalogue de films, séries, livres, BD et mangas. Chaque étape a été validée par le correcteur du professeur.

## Ce que contient le thème

- **Les fondations** : `style.css`, `functions.php`, en-tête, pied de page et la Boucle WordPress (`index.php`)
- **Des template parts** réutilisables : `template-parts/content-card.php`, `content-single.php`, `content-auteur.php`
- **Les archives** : catégories, étiquettes, recherche (`category.php`, `tag.php`, `search.php`)
- **Un type de contenu sur mesure** « auteur » et une taxonomie « domaine », déclarés en PHP dans `functions.php`, avec leurs modèles (`archive-auteur.php`, `single-auteur.php`, `taxonomy-domaine.php`)
- **Un affichage sécurisé** : chaque donnée est échappée au plus près de la sortie (`esc_html`, `esc_url`)

## Installer le thème

1. Copier le dossier dans `wp-content/themes/`
2. L'activer dans **Apparence → Thèmes**

## Portfolio

Le projet est présenté sur mon portfolio : https://clarisse-dupont.netlify.app/projets/la-boucle/

---

*English: a hand-coded classic WordPress theme (PHP) built during the CMS Level 2 course: template hierarchy, template parts, a custom post type and taxonomy, and escaped output.*
