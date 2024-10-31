# projet de sission 3 du cours 31w

## introduction à un systeme de gestion de contenu

### Objectifs de l’exercice #3

1. Améliorer le thème existant

2. Améliorer le modèle front-page.php

3. Ajouter les modèles category-cours.php et 404.php

4. Ajouter un champ personnalisé aux articles de catégorie « Cours »

5. Ajouter de nouvelles règles de style dans le dossier Sass

6. Utilisation des variables CSS/Sass

7. Utilisation/ajout de « Mixin »

8. Améliorer le design général du thème

#### front-page.php

1. Permettra d’afficher les articles de catégorie « Nouvelle »

2. Pour afficher uniquement les article de catégorie « Nouvelle », il faut alterner la requête principal en utilisant le hook « pre_get_posts »

#### category-cours.php

1- Affiche l’ensemble des cours du département TIM

2- Le titre de la page correspond au titre qui a été associé à la catégorie cours

3- L’affichage de chaque cours contient le professeur responsable du cours

#### 404.php

1- Créer un modèle permettant d’afficher un message d’erreur

2- Le modèle intègre l’entête et le pied-page comme les autres modèles

3- A l’intérieur de la section principale, afficher une liste de l’ensemble des cours, en affichant uniquement le sigle sur 3 caractères uniquement du cours. Ex: 1W1, 2W2, 1J1, 2J2, 3J3, 5W5. Chaque sigle contient un lien permettant d’accéder à la description complète du cours.

#### footer.php

1. Ajouter une nouvelle ligne à votre pied de page existant. La ligne contiendra une liste de liens permettant d’accéder au cours Web : 1w1, 2w2, 3w3, 4w4 et 5w5
