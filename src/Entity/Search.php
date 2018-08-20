<?php
/**
 * Created by PhpStorm.
 * User: WesselVrolijks
 * Date: 20/08/2018
 * Time: 14:52
 */

namespace App\Entity;


class Search
{
    protected $search;

    /**
     * @return mixed
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param mixed $searchString
     */
    public function setSearch($search): void
    {
        $this->search = $search;
    }

}