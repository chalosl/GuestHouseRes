<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/4/2018
 * Time: 11:35 AM
 */

class Packages
{
    private $name;
    private $tour;
    private $offers;

    /**
     * Packages constructor.
     * @param $name
     * @param $tour
     * @param $offers
     */
    public function __construct($name, $tour, $offers)
    {
        $this->name = $name;
        $this->tour = $tour;
        $this->offers = $offers;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTour()
    {
        return $this->tour;
    }

    /**
     * @param mixed $tour
     */
    public function setTour($tour): void
    {
        $this->tour = $tour;
    }

    /**
     * @return mixed
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param mixed $offers
     */
    public function setOffers($offers): void
    {
        $this->offers = $offers;
    }




}