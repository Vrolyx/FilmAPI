<?php
/**
 * Created by PhpStorm.
 * User: WesselVrolijks
 * Date: 20/08/2018
 * Time: 13:43
 */

namespace App\Entity;


class Movie
{
    private $id;

    private $voteCount;

    private $voteAverage;

    private $title;

    private $popularity;

    private $posterPath;

    private $originalLanguage;

    private $originalTitle;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }

    /**
     * @param mixed $voteCount
     */
    public function setVoteCount($voteCount): void
    {
        $this->voteCount = $voteCount;
    }

    /**
     * @return mixed
     */
    public function getVoteAverage()
    {
        return $this->voteAverage;
    }

    /**
     * @param mixed $voteAverage
     */
    public function setVoteAverage($voteAverage): void
    {
        $this->voteAverage = $voteAverage;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @param mixed $popularity
     */
    public function setPopularity($popularity): void
    {
        $this->popularity = $popularity;
    }

    /**
     * @return mixed
     */
    public function getPosterPath()
    {
        return $this->posterPath;
    }

    /**
     * @param mixed $posterPath
     */
    public function setPosterPath($posterPath): void
    {
        $this->posterPath = $posterPath;
    }

    /**
     * @return mixed
     */
    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    /**
     * @param mixed $originalLanguage
     */
    public function setOriginalLanguage($originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    /**
     * @return mixed
     */
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    /**
     * @param mixed $originalTitle
     */
    public function setOriginalTitle($originalTitle): void
    {
        $this->originalTitle = $originalTitle;
    }

}