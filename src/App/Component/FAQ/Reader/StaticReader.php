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
                new Question('Quel émulateur utiliser ?', ''),
            ]),
            New Category('Bien débuter le speedrun', 'bien-debuter-speedrun', [
                new Question('Quel jeu choisir pour bien débuter ?', ''),
                new Question('Quel rythme adopter pour bien progresser ?', ''),
                new Question('Par où commencer le speedrun ?', ''),
            ]),
            new Category('Le lexique', 'lexique', [
                new Question('Speedrun', 'Pratique consistant à terminer un jeu le plus rapidement possible en suivant certains objectifs'),
                new Question('Glitch', ''),
                new Question('WR / PB', ''),
                new Question('OoB', ''),
                new Question('TAS', 'Tools Assisted Speedrun, une pratique consistant à optimiser un jeu à la frame près grâce à des logiciels'),
                new Question('Races', ''),
                new Question('RNG', ''),
                new Question('Hitbox', 'Littéralement "boîte de coup". Zone dans laquelle une collision entre deux éléments est détectée. Plus largement : hitbox d\'un mur, d\'un ennemi, etc...'),
            ]),
        ];

        return $categories;
    }
}
