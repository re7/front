<?php

namespace App\Component\FAQ;

class Question
{
    /**
     * The question itself
     *
     * @var string
     */
    private $title;

    /**
     * The answer to the question
     *
     * @var string
     */
    private $answer;

    /**
     * The constructor of this object
     *
     * @param string $title
     * @param string $answer
     */
    public function __construct($title, $answer)
    {
        $this->title  = $title;
        $this->answer = $answer;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}
