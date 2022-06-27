<?php

namespace App\Entity;

use App\Repository\SiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=SiteRepository::class)
 */
class Site
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("browse_sites")
     * @Groups("read_site")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("browse_sites")
     * @Groups("read_site")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("read_site")
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     * @Groups("browse_sites")
     * @Groups("read_site")
     */
    private $site_description;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("read_site")
     */
    private $site_culture;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups("read_site")
     */
    private $site_country;

    /**
     * @ORM\Column(type="float")
     * @Groups("browse_sites")
     * @Groups("read_site")
     */
    private $site_latitude;

    /**
     * @ORM\Column(type="float")
     * @Groups("browse_sites")
     * @Groups("read_site")
     */
    private $site_longitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("read_site")
     */
    private $site_url;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="site")
     * @Groups("read_site")
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

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

    public function getSiteDescription(): ?string
    {
        return $this->site_description;
    }

    public function setSiteDescription(string $site_description): self
    {
        $this->site_description = $site_description;

        return $this;
    }

    public function getSiteCulture(): ?string
    {
        return $this->site_culture;
    }

    public function setSiteCulture(string $site_culture): self
    {
        $this->site_culture = $site_culture;

        return $this;
    }

    public function getSiteCountry(): ?string
    {
        return $this->site_country;
    }

    public function setSiteCountry(string $site_country): self
    {
        $this->site_country = $site_country;

        return $this;
    }

    public function getSiteLatitude(): ?float
    {
        return $this->site_latitude;
    }

    public function setSiteLatitude(float $site_latitude): self
    {
        $this->site_latitude = $site_latitude;

        return $this;
    }

    public function getSiteLongitude(): ?float
    {
        return $this->site_longitude;
    }

    public function setSiteLongitude(float $site_longitude): self
    {
        $this->site_longitude = $site_longitude;

        return $this;
    }

    public function getSiteUrl(): ?string
    {
        return $this->site_url;
    }

    public function setSiteUrl(?string $site_url): self
    {
        $this->site_url = $site_url;

        return $this;
    }

    /**
     * @return Collection<int, Item>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Item $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setSite($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getSite() === $this) {
                $item->setSite(null);
            }
        }

        return $this;
    }
}
