<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 * @ORM\Column(type="integer")
 */

#[ApiResource()]
class Routes
{
    /** id space 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /** it's a title of route
     * @ORM\Column(type="string")
     */
    public string $title = "";

    /**
     * @ORM\ManyToOne(targetEntity="Objects", inversedBy="routes")
     */
    public ?Objects $objects = null;

    /** it's geotags
     * @ORM\Column(type="integer")
     */
    public int $geotags_id_2;

    /** it's geotags
     * @ORM\Column(type="integer")
     */
    public int $geotags_id_3;

    /** it's geotags
     * @ORM\Column(type="integer")
     */
    public int $geotags_id_4;

    /** it's geotags
     * @ORM\Column(type="integer")
     */
    public int $geotags_id_5;

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
