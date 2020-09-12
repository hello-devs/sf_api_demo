<?php

namespace App\Entity;

use App\Repository\TripRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TripRepository::class)
 */
class Trip
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=8)
     */
    private $start_lat;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=8)
     */
    private $start_lng;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartLat(): ?string
    {
        return $this->start_lat;
    }

    public function setStartLat(string $start_lat): self
    {
        $this->start_lat = $start_lat;

        return $this;
    }

    public function getStartLng(): ?string
    {
        return $this->start_lng;
    }

    public function setStartLng(string $start_lng): self
    {
        $this->start_lng = $start_lng;

        return $this;
    }
}
