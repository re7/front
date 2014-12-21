<?php

namespace App\Component\FAQ\Reader;

/**
 * The service used to access questions and their categories
 */
interface ReaderInterface
{
    /**
     * Find all questions grouped by category
     *
     * @return \App\Component\FAQ\Category[]
     */
    public function findAll();
}
