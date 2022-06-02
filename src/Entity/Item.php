<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $item_description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $discovery_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $creation_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $discovery_date;

    /**
     * @ORM\Column(type="float")
     */
    private $item_latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $item_longitude;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $item_country;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $item_culture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $item_materials;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $item_conservation_site;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $item_conservation_site_url;

    /**
     * @ORM\ManyToOne(targetEntity=Site::class, inversedBy="items")
     */
    private $site;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getItemDescription(): ?string
    {
        return $this->item_description;
    }

    public function setItemDescription(string $item_description): self
    {
        $this->item_description = $item_description;

        return $this;
    }

    public function getDiscoveryDescription(): ?string
    {
        return $this->discovery_description;
    }

    public function setDiscoveryDescription(?string $discovery_description): self
    {
        $this->discovery_description = $discovery_description;

        return $this;
    }

    public function getCreationDate(): ?string
    {
        return $this->creation_date;
    }

    public function setCreationDate(string $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getDiscoveryDate(): ?string
    {
        return $this->discovery_date;
    }

    public function setDiscoveryDate(?string $discovery_date): self
    {
        $this->discovery_date = $discovery_date;

        return $this;
    }

    public function getItemLatitude(): ?float
    {
        return $this->item_latitude;
    }

    public function setItemLatitude(float $item_latitude): self
    {
        $this->item_latitude = $item_latitude;

        return $this;
    }

    public function getItemLongitude(): ?float
    {
        return $this->item_longitude;
    }

    public function setItemLongitude(float $item_longitude): self
    {
        $this->item_longitude = $item_longitude;

        return $this;
    }

    public function getItemCountry(): ?string
    {
        return $this->item_country;
    }

    public function setItemCountry(string $item_country): self
    {
        $this->item_country = $item_country;

        return $this;
    }

    public function getItemCulture(): ?string
    {
        return $this->item_culture;
    }

    public function setItemCulture(string $item_culture): self
    {
        $this->item_culture = $item_culture;

        return $this;
    }

    public function getItemMaterials(): ?string
    {
        return $this->item_materials;
    }

    public function setItemMaterials(?string $item_materials): self
    {
        $this->item_materials = $item_materials;

        return $this;
    }

    public function getItemConservationSite(): ?string
    {
        return $this->item_conservation_site;
    }

    public function setItemConservationSite(?string $item_conservation_site): self
    {
        $this->item_conservation_site = $item_conservation_site;

        return $this;
    }

    public function getItemConservationSiteUrl(): ?string
    {
        return $this->item_conservation_site_url;
    }

    public function setItemConservationSiteUrl(?string $item_conservation_site_url): self
    {
        $this->item_conservation_site_url = $item_conservation_site_url;

        return $this;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): self
    {
        $this->site = $site;

        return $this;
    }
}
