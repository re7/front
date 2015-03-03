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
                new Question('Quel émulateur utiliser ?', 'Cela dépend des consoles émulées. On choisit un émulateur en fonction de la fidélité de reproduction du comportement de la console. Le mieux pour choisir un émulateur reste de contacter les speedrunners déjà actifs sur votre jeu.'),
            ]),
            New Category('Bien débuter le speedrun', 'bien-debuter-speedrun', [
                new Question('Quel jeu choisir pour bien débuter ?', 'Il n\'y a pas de réponse universelle à cette question. Il faut choisir un jeu qui vous plait, et dont vous ne vous lasserez pas, car il faut bien comprendre que vous passerez de nombreuses heures dessus. N\'hésitez pas, avant de vous lancer, à regarder des runs de ce jeu. Il est important de savoir qu\'un jeu peut changer radicalement si l\'on y joue en casu ou en speedrun. C\'est à vous de voir ce qui vous plait et ce que vous voulez runner.'),
                new Question('Quel rythme adopter pour bien progresser ?', 'La clé de la progression est la régularité. Si vous le voulez, vous pouvez faire une pause de speedrun en cas de ras-le-bol sur un jeu. Il faudra néanmoins jouer souvent et régulièrement pour bien progresser. Un runner joue en moyenne une ou deux fois par semaine, selon ses disponibilités bien sûr. Plus la cadence est élevée et plus la technique évolue. Le speedrun est un sport au final !'),
                new Question('Par où commencer le speedrun ?', 'Avant tout, et avant même de choisir un jeu à runner, il faut se demander quel genre de speedrun on aime. Celui qui nécessite de la maîtrise ? Celui avec beaucoup de glitchs impressionnants ? Les jeux courts ? Les jeux longs ? Si vous aimez particulièrement tel ou tel jeu, gardez à l\'esprit qu\'il s\'agira peut-être d\'un jeu avec peu de glitchs, ce qui pourrait ne pas correspondre à vos envies. Une fois votre type de speedrun déterminé, vous pouvez choisir un jeu. A partir de là, ce sera à vous de consulter des vidéos de speedrun, d\'aller demander conseil à d\'autres runners, et de jouer ;)'),
                new Question('Je n\'arrive pas à passer ce glitch, que faire ?', 'Pas d\'inquiétude. Les glitchs ne sont pas tous faciles à réaliser, surtout quand on débute. Il ne faut pas hésiter à les laisser de côté et continuer l\'apprentissage sur d\'autres glitchs. Au final, apprendre un run est long mais donne aussi des automatismes et autres fluidités qui vous aideront à mieux maitrîser les techniques de jeu. Car ce sont les petites strats qui font les gros glitchs, pas vrai ?'),
            ]),
        ];

        return $categories;
    }
}
