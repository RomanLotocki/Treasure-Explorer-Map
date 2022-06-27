<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("browse_items")
     * @Groups("read_item")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("browse_items")
     * @Groups("read_item")
     */
    private $item_name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("read_item")
     */
    private $item_image;

    /**
     * @ORM\Column(type="text")
     * @Groups("browse_items")
     * @Groups("read_item")
     */
    private $item_description;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("read_item")
     */
    private $discovery_description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("read_item")
     */
    private $creation_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("read_item")
     */
    private $discovery_date;

    /**
     * @ORM\Column(type="float")
     * @Groups("browse_items")
     * @Groups("read_item")
     */
    private $item_latitude;

    /**
     * @ORM\Column(type="float")
     * @Groups("browse_items")
     * @Groups("read_item")
     */
    private $item_longitude;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("read_item")
     */
    private $item_country;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("read_item")
     */
    private $item_culture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("read_item")
     */
    private $item_materials;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("read_item")
     */
    private $item_conservation_site;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("read_item")
     */
    private $item_conservation_site_url;

    /**
     * @ORM\ManyToOne(targetEntity=Site::class, inversedBy="items")
     * @Groups("read_item")
     */
    private $site;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemName(): ?string
    {
        return $this->item_name;
    }

    public function setItemName(string $item_name): self
    {
        $this->item_name = $item_name;

        return $this;
    }

    public function getItemImage(): ?string
    {
        return $this->item_image;
    }

    public function setItemImage(string $item_image): self
    {
        $this->item_image = $item_image;

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
