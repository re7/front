<?php

namespace App\Component\FAQ\Reader;

use App\Component\FAQ\Category;
use App\Component\FAQ\Question;

/**
 * A static FAQ reader containing a defined set of categories and questions
 */
class StaticReader implements ReaderInterface
{
    /**
     * The static array of categories of the FAQ
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
            new Category('Le matériel', 'materiel', [
                new Question('Quel boitier choisir pour capturer une console ?', "SD : Easy CAP / Dazzle\nHD : Happauge HDPVR / Elgato Game Capture / AverMedia Live Gamer HD"),
            ]),
            new Category('Les logiciels', 'logiciels', [
                new Question('Quel logiciel choisir pour les splits ?', 'WSplit / LiveSplit'),
                new Question('Quel logiciel utiliser pour streamer ?', 'XSplit / Open Broadcaster Software (OBS) / Mishira'),
                new Question('Quel émulateur utiliser ?', 'Cela dépend des consoles émulées. On choisit un émulateur en fonction de la fidélité de reproduction du comportement de la console. Le mieux pour choisir un émulateur reste de contacter les speedrunners déjà actifs dessus.'),
            ]),
            New Category('Bien débuter le speedrun', 'bien-debuter-speedrun', [
                new Question('Quel jeu choisir pour bien débuter ?', 'Il n\'y a pas de réponse universelle à cette question. Il faut choisir un jeu qui vous plait, et dont vous ne vous lasserez pas, car il faut bien comprendre que vous passerez de nombreuses heures dessus. N\'hésitez pas, avant de vous lancer, à regarder des runs de ce jeu. Il est important de savoir qu\'un jeu peut changer radicalement si l\'on y joue en casu ou en speedrun. C\'est à vous de voir ce qui vous plait et ce que vous voulez runner.'),
                new Question('Quel rythme adopter pour bien progresser ?', ''),
                new Question('Par où commencer le speedrun ?', 'Avant tout, et avant même de choisir un jeu à runner, il faut se demander quel genre de speedrun on aime. Celui qui nécessite de la maîtrise ? Celui avec beaucoup de glitchs impressionnants ? Les jeux courts ? Les jeux longs ? Si vous aimez particulièrement tel ou tel jeu, gardez à l\'esprit qu\'il s\'agira peut-être d\'un jeu avec peu de glitchs, ce qui pourrait ne pas correspondre à vos envies. Une fois votre type de speedrun déterminé, vous pouvez choisir un jeu. A partir de là, ce sera à vous de consulter des vidéos de speedrun, d\'aller demander conseil à d\'autres runners, et de jouer ;)'),
                new Question('Je n\'arrive pas à passer ce glitch, que faire ?', 'Pas d\'inquiétude. Les glitchs ne sont pas tous faciles à réaliser, surtout quand on débute. Il ne faut pas hésiter à les laisser de côté et de continuer l\'apprentissage sur d\'autres glitchs. Au final, apprendre un run est long mais donne aussi des automatismes et autres fluidités qui vous aideront à mieux maitrîser les glitchs, car ce sont les petites strats qui font les gros glitchs pas vrai ?'),
            ]),
            new Category('Le lexique', 'lexique', [
                new Question('Speedrun', 'Pratique consistant à terminer un jeu le plus rapidement possible en suivant certains objectifs'),
                new Question('Glitch', 'Bug, défaut de programmation. En speedrun, utilisé pour gagner du temps sur le chronomètre final'),
                new Question('WR / PB', 'World Record (record du monde) / Personal Best (meilleur temps personnel)'),
                new Question('OoB', 'Out of Bound, en dehors des limites physiques prévues dans le jeu. Cela signifie généralement passer à travers/au-dessus d\'un mur'),
                new Question('TAS', 'Tools Assisted Speedrun, une pratique consistant à optimiser un jeu à la frame près grâce à des logiciels'),
                new Question('Races', 'Course entre différents speedrunners'),
                new Question('RNG', 'Random Number Generator, ce qui définit l\'aléatoire dans un jeu'),
                new Question('Hitbox', 'Littéralement "boîte de coup". Zone dans laquelle une collision entre deux éléments est détectée. Plus largement : hitbox d\'un mur, d\'un ennemi, etc...'),
                new Question('Any%', 'Catégorie de speedrun. Il faut terminer le jeu sans condition particulière, en utilisant toutes les techniques permettant de gagner du temps.'),
                new Question('Glitchless', 'Catégorie de speedrun. Ici, on termine le jeu rapidement mais sans utilliser de glitch'),
                new Question('100%', 'Catégorie de speedrun. Il s\'agit généralement de récolter tous les objets/pouvoirs... Chaque jeu définit ses conditions pour le 100%'),
                new Question('All bosses', 'Catégorie de speedrun consistant à tuer tous les boss (voir Dark Souls ou MGS)'),
                new Question('Backup strat', 'Stratégie permettant de se rattraper en cas d\'erreur sur la route initialement prévue'),
                new Question('Safe strat', 'Stratégie permettant de prendre moins de risques que les stratégies les plus optimisées'),
                new Question('Single-segment', 'Speedrun réalisé d\'une seule traite du début à la fin'),
                new Question('Multi-segment', 'Speedrun dont les différentes parties ont été enregistrées à part et réassemblées par la suite'),
                new Question('GLOD', 'Désigne dans le jargon un split doré. Comprenez : le meilleur temps jamais réalisé par le runner sur ce segment'),
                new Question('Teh Urn', 'Façon de dire "THE RUN", un(e) run particulièrement prometteuse'),
                new Question('Raid', 'A la fin d\'un stream, certains streamers aiment raider un autre streamer. C\'est à dire lui envoyer tous ses viewers avec un même message envoyé sur le chat'),
            ]),
        ];

        return $categories;
    }
}
