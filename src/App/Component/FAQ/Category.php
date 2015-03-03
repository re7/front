<?php

namespace App\Component\FAQ;

/**
 * A FAQ category containing many questions
 */
class Category
{
    /**
     * The title of this category
     *
     * @var string
     */
    private $title;

    /**
     * The slug of this category
     *
     * @var string
     */
    private $slug;

    /**
     * Questions in this category
     *
     * @var Question[]
     */
    private $questions;

    /**
     * The constructor of this object
     *
     * @param string     $title
     * @param string     $slug
     * @param Question[] $questions
     */
    public function __construct($title, $slug, array $questions)
    {
        $this->title     = $title;
        $this->slug      = $slug;
        $this->questions = $questions;
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
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get questions
     *
     * @return Question[]
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}
