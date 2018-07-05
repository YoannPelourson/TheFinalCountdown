Validation Finale

Seeders a utiliser: -GenresTableSeeder
                    -SoundsTableSeeder
                    -Genres_SoundsTableSeeder
                    -ComposersTableSeeder

Pour se projet j'ai choisi un magasin en ligne vendant des OST de film et jeux.


-VIEWS
Toutes les views sont classer et appeler sur un template avec un header et footer commun (placé dans le dossier /parts)

-ROUTES
Rien de particulier, chaque action à sa route qui renvoi au controller demander, soit SoundController pour les OST soit ComposerController pour les compositeurs.

-CONTROLLERS
2 Controllers présents: -Composer qui permet de Créer, d'update et de voir les compositeurs
                        -Sounds qui permet de Créer, voir, update et supprimer les OST

-MODEL
3models : Genre, sound et composer lier entre eux.

-Design
utilisation de less 



Avec plus de temps je pense que j'aurai utiliser la liaison compositeur->OST pour afficher uniquement les OST d'un compositeur voulu.
j'aurai également voulu ajouter les images pour les OST.

