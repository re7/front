<?php

namespace App\Component\FAQ\Reader;

use App\Component\FAQ\Category;
use App\Component\FAQ\Question;

/**
 * A static glossary reader containing a defined set of words and definitions
 */
class StaticGlossaryReader implements ReaderInterface
{
    /**
     * The static array of categories of the glossary
     *
     * @var Category[]
     */
    private $categories;

    /**
     * The constructor of this service
     */
    public function __construct()
    {
        $this->categories = static::buildCategories();
    }

    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
        return $this->categories;
    }

    /**
     * Create an array containing all categories and questions
     *
     * @return Category[]
     */
    static private function buildCategories()
    {
        $categories = [
            new Category('Termes généraux / JV', 'termes-generaux-jv', [
                new Question('AOE', "\"Area of effect\" est la zone d’effet d’un sort, d’une déflagration, autrement dit sa portée."),
                new Question('Autofire (turbo or rapid fire)', "Option d’un contrôleur (manette) ou d’un <strong>émulateur</strong> qui permet à bouton pressé d’être activé continuellement selon une certaine fréquence. Il n’est pas rare d’avoir et d’utiliser un autofire dans les <strong>STG</strong> pour faciliter le scoring. Cependant sur d’autres jeux, il n’est pas autorisé."),
                new Question('Back-tracking', 'Elément de <strong>game design</strong> demandant au joueur de revenir sur ses pas.'),
                new Question('Buffering', 'Possibilité dans un jeu d’entrer une <strong>input</strong> alors qu’une autre est toujours en cours. Cela permet la plupart du temps de placer une input dès les premières <strong>frames</strong> actives nécessaire à sa validation. (voir <strong>pause buffering</strong>)'),
                new Question('Bug', 'Il s’agit tout comme le <strong>glitch</strong> d’une erreur involontaire laissée par les développeur dans le code de programmation du jeu (exemple : un bug de collision).'),
                new Question('Bullet cancel', 'Lorsqu’un ennemi est tué et que ses tirs disparaissent de l’écran. Action du joueur engendrant une disparition des tirs ennemis de l’écran.'),
                new Question('CAC', 'Corps à corps.'),
                new Question('DPS', 'Dégats par seconde.'),
                new Question('Drop', 'Butin abandonné par un adversaire en mourant. Butin (items, argent, etc) délaissé, relâché à la mort d’un ennemi.'),
                new Question('Frame', 'Une image affichée selon la fréquence de mise à jour d’affichage du jeu (rafraîchissement). Généralement, une frame représente de 1/30 ou 1/60 de seconde. Temps pris par le jeu pour mettre à jour l’affichage et considérer un input.'),
                new Question('Glitch', 'Une erreur ou un oubli dans la programmation du jeu donnant lieu à des choses imprévues, souvent exploitées par les runners.'),
                new Question('Hitbox', 'La \"hitbox\" - ou masque de collisions - est une forme ou une série de formes en général invisibles qui détermine à partir de quelle zone le joueur ou un ennemi va se prendre un dégât ou être en mesure de toucher l’autre. Zone dans laquelle une collision entre deux éléments est détectée.'),
                new Question('Input', 'Action rentrée dans le contrôleur qui est effectuée par le joueur. Autrement dit, manette en main, cela correspond à l’appui sur un bouton du contrôleur.'),
                new Question('Lag', 'Les ralentissements prenant place quand le jeu est surchargé. Beaucoup de choses peuvent le causer, même si la raison la plus connue est un trop grand nombre déléments à l’écran.'),
                new Question('NG+ (New Game +)', "Une option permettant de recommencer une nouvelle partie après avoir terminé le jeu une 1ère fois, souvent en conservant les compétences/niveaux de la partie précédente, ou avec de nouveaux éléments/donjons.\nMode de jeu disponible une fois que l’on a fini le jeu une première fois."),
                new Question('One shot', 'Tuer un ennemi/être tué en un coup.'),
                new Question('PAL/NTSC', 'Le format PAL est européen alors que le NTSC est utilisé notamment au Japon et en Amérique. Sur les vieilles consoles, le PAL est souvent associé au 50hz (qui correspond à la fréquence du signal électrique) et ses bandes noires, ainsi qu’un jeu 20% plus lent, ce qui rend les versions PAL déconseillées pour jouer/runner un jeu.'),
                new Question('Pattern', 'Comportement récurrent, suivant un schéma préprogrammé. Une routine de comportements d’un ennemi ou d’un élément du jeu.'),
                new Question('PNJ', 'Personnage Non Jouable.'),
                new Question('Recovery', 'Après une attaque, temps mis par le personnage du joueur ou l’ennemi pour se remettre en position initiale. Durant cette phase, aucune action ne peut être effectuée, laissant ainsi une brèche dans la garde d’un ennemi par exemple.'),
                new Question('RNG (Random Number Generator)', 'Une fonction dans le code du jeu qui régit et crée les évènements aléatoires (<strong>spawns</strong>, <strong>drops</strong>, <strong>stats</strong>, combats aléatoires, etc).'),
                new Question('Spawn', "Le temps et le lieu où des objets/ennemies apparaissent. Les spawns peuvent être aléatoires, scriptés ou manipulés par le joueur.\nTo spawn = apparaître. Zone d'apparition du joueur ou des ennemis."),
                new Question('Sprite', 'Dans les jeux en 2D, élément graphique qui peut se déplacer sur l’écran.'),
                new Question('Sprite 3D', 'Dans les jeux en 3D, élément graphique en 2D restant toujours de face.'),
                new Question('STG (Shooting Games ou Shoot’em Up)', 'Il s’agit de la dénomination japonaise des shoot’em up.'),
                new Question('Stun', 'Étourdissement.'),
                new Question('SuperPlay', 'Pratique alternative du jeu vidéo mettant en avant la performance. Le superplay regroupe plusieurs catégories distinctes : le <strong>scoring</strong> (faire le plus de points possibles), le <strong>speedrun</strong> (finir un jeu le plus rapidement possible), les <strong>runs</strong> à challenge (s’imposer une contrainte pour finir un jeu), le <strong>TAS</strong>.'),
                new Question('TAS (Tools Assisted Speedrun)', "Pratique consistant à optimiser un jeu/speedrun à la frame prêt via des logiciels.\nBeaucoup d’outils sont disponible grâce à l’émulation, tel que les <strong>savestate</strong>, le <strong>rerecording</strong>, le <strong>frame advance</strong> ou la <strong>ram watch</strong>."),
                new Question('Tile', 'Bloc graphique rectangulaire utilisé dans les jeux en 2D.'),
            ]),
            new Category('Termes propres au speedrun', 'termes-speedrun', [
                new Question('Speedrun (Run)', 'Pratique consistant à essayer de finir un jeu le plus vite possible en exploitant tout ce qu’il est possible de mettre en oeuvre dans le jeu.'),
                new Question('Back-up strat', 'Stratégie permettant de se rattraper en cas d’erreur sur la route initialement prévue. Stratégie de secours. (voir <strong>strat</strong>)'),
                new Question('Damage Boost', 'Accélération grâce a une prise de dégâts.'),
                new Question('Frame Perfect/Just Frame', 'Une action ne pouvant être exécutée que lors d’une <strong>frame</strong> d’animation.'),
                new Question('Frames d’invulnérabité', 'Période pendant laquelle on ne peut pas être touché et donc est invincible. C’est souvent le cas après que notre personnage ait pris un dégât et se soit mis à clignoter dans la plupart des cas.'),
                new Question('In-game time', 'Temps affiché par le jeu.'),
                new Question('Leaderboard', 'Classement des meilleurs scores/temps par joueurs.'),
                new Question('Loop', 'Faire plusieurs fois le jeu en entier d’affilé, en général la difficulté augmente.'),
                new Question('Manipulation', 'Une action du joueur pour contrôler certains évènements du jeu (<strong>drops</strong>, <strong>spawns</strong>, <strong>IA</strong>).'),
                new Question('Manipulation de la chance', 'Surtout utilisée dans les TAS, une séquence d’actions en amont pour manipuler la RNG et obtenir des résultats particulièrement favorables.'),
                new Question('Mash/Mashing/Spam', 'Le fait d’appuyer de manière répétitive sur un ou plusieurs boutons le plus rapidement possible.'),
                new Question('Multi Segment', 'Un <strong>run</strong> en plusieurs sauvegardes, dont chacune sera runnée individuellement jusqu’à ce que la meilleure performance soit conservée. Le multi segment est un assemblage de toutes ces sauvegardes optimisées.'),
                new Question('OoB (Out of Bounds)', 'Sortir des des limites physiques prévues dans le jeu. Cela signifie généralement passer à travers, au-dessus d’un mur.'),
                new Question('Overflow/Underflow', 'Un <strong>glitch</strong> de mémoire, le plus souvent utilisé pour transformer une donnée négative en donnée énorme. (exemple : si on arrive à faire passer notre nombre d’épées de zéro à -1 dans Final Fantasy IV, on se retrouve à 65000 épées, c’est un "underflow").'),
                new Question('Pause buffering', 'Mettre le jeu en pause afin de charger une <strong>input</strong> qui sera activée dès lors que la pause sera interrompue. (voir <strong>buffering</strong>)'),
                new Question('PB (Personal Best)', 'Le record personnel d’un joueur sur une catégorie d’un jeu. (ex : mon PB sur Kirby’s Adventure est de 00:52:28 !)'),
                new Question('Race', 'Course entre différents speedrunners.'),
                new Question('RTA (Real Time Attack)', 'Un speedrun effectué en temps réel. Contrairement au <strong>single segment</strong>, cette définition n’exclut pas l’utilisation de sauvegardes et de resets.'),
                new Question('Safe strat', 'Stratégie permettant de prendre moins de risques que les stratégies les plus optimisées.'),
                new Question('Save State', 'Une sauvegarde totale et instantanée disponible sur <strong>émulateur</strong>, généralement utilisée pour s’entraîner, elle est interdite en race/speed run non-TAS.'),
                new Question('Sequence Breaking', 'Effectuer une action qui perturbe, sort de la séquence d’évènements prévue par le jeu. Supprimer, éviter une des parties de l’histoire normalement indispensable.'),
                new Question('Setup', 'Préparation nécessaire au runner afin de réussir une technique avancée.'),
                new Question('Single Segment', 'Un <strong>run</strong> qui est effectué en une fois, sans resets - à l’exception des save et death warps - et qui donc ne charge aucune sauvegarde, hormis si le jeu dispose d’une autosave. Ces runs sont plus demandeurs d’efforts car la performance doit être obtenue d’une traite. Toutefois, il est un peu plus permissif au niveau des erreurs commises au vu de ses spécificités.'),
                new Question('Skip', 'Sauter une séquence, un élément, une arme, etc.'),
                new Question('Split', 'Temps intermédiaire durant un <strong>run</strong> afin de connaître son avance, son retard.'),
                new Question('Start-up', 'Temps nécessaire au déclenchement d’une action.'),
                new Question('Strats', 'Statégies ou méthodes utiles pour le speedrun.'),
                new Question('Tricks', 'Techniques avancées permettant de gagner du temps.'),
                new Question('Trigger', 'Déclencheur d’évènements.'),
                new Question('WR (World Record)', 'Le record mondial d’une catégorie sur un jeu.'),
                new Question('Zip', 'Une routine ayant pour but d’éjecter violemment un joueur qui rentrerait dans un mur.'),
            ]),
            new Category('Catégories', 'categories', [
                new Question('Catégories', 'Plusieurs speedruns peuvent exister sur le même jeu. Les catégories définissent les diverses façons de runner le jeu. Les plus communes étant le any% (terminer le jeu le plus vite, peu importe la qualité de la fin) et le 100% (récolter tous les objets et power ups, obtenir la meilleure fin, etc).'),
                new Question('Any%', 'Le any% est la catégorie la plus commune pour un speedrun, elle définit un speedrun qui a pour but de terminer le jeu le plus rapidement possible (voir les crédits), sans se soucier d’éventuelles quêtes annexes, secrets ou "véritable" fin.'),
                new Question('100%', 'Un run 100% définit généralement une partie qui récoltera l’intégralite des objets de l’inventaire, les power-ups, les personnages et/ou la meilleure fin. Certains jeux montrent ce pourcentage à la fin, rendant le calcul plus simple. Parfois, c’est la communauté du jeu elle-même qui définit les termes de cette catégorie.'),
                new Question('Low%', 'Le low% est un run particulier et dur qui consiste souvent à terminer le jeu en prenant le minimum de powerup (ou aucun si possible) et/ou couvrir le minimum de terrain sur la carte du jeu. Basiquement, un run au pourcentage le plus faible est souvent (paradoxalement) bien plus long qu’un any%.'),
                new Question('Glitchless', 'Comme son nom l’indique, l’idée du run glitchless est de finir un run (que ça soit un any% glitchless, un 100% glitchless) sans glitchs. Parfois, seulement certains glitchs sont interdits dans le run, ce qui crée des types particuliers comme le "Any% no RBA/WW" de Zelda Ocarine of Time.'),
                new Question('All bosses', 'Un run all bosses consiste à tuer tous les boss du jeu (voir Dark Souls ou Metal Gear Solid).'),
                new Question('Run Pacifiste', 'Le run pacifiste est une catégorie de runs trouvable sur certains jeux. Elle consiste à tuer le minimum d’ennemis possibles dans une partie allant à la fin du jeu. Dans ce genre de run, seuls les boss ou ennemis qu’on ne peut épargner seront tués.'),
            ]),
            new Category('Jardon Twitch', 'jargon-twitch', [
                new Question('GLOD', 'Désigne un split doré, comprennez le meilleur temps jamais réalisé par le runner sur ce segment.'),
                new Question('Raid', 'A la fin d’un stream, certains streamers aiment "raider" un autre streamer, c’est à dire lui envoyer tous leurs viewers avec un message identique envoyé sur le chat.'),
                new Question('Teh Urn', 'Façon de dire "THE RUN", un run particulièrement prometteur.'),
            ]),
        ];

        return $categories;
    }
}
