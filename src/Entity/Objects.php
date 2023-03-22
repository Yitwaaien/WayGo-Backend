<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

#[ApiResource()]
class Objects
{
    /** id space 
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /** it's a title 
     * @ORM\Column(type="string")
     */
    public string $title = "";

    /** it's a summary 
     * @ORM\Column(type="string")
     */
    public string $summary = "";

    /** it's a latitude 
     * @ORM\Column(type="float")
     */
    public float $lat;

    /** it's a longitude 
     * @ORM\Column(type="float")
     */
    public float $lon;

    /**
     * @var Rotes[] Available rotes from this objects
     * 
     * @ORM\OneToMany(targetEntity="Routes", mappedBy="objects")
     */
    private $routes = null;

    public function __construct()
    {
        $this->routes = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }



    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
