<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ItemFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // Function getRepository allows to load the Repo from item class. So we can use it to get information with a findOneBy
        $classRepo = $manager->getRepository(Item::class);
        
        $item = new Item();
        $item->setItemName("Masque de Gigaku");
        $item->setItemImage("https://www.guimet.fr/wp-content/uploads/2011/10/images_musee-guimet_collections_japon_masque-de-gigaku.jpg");
        $item->setItemDescription("Ce masque de théâtre Gigaku représente Karura, un oiseau divin de la mythologie indienne qui a été introduit dans le panthéon bouddhique japonais comme l’une des huit divinités protectrices de la religion. L’apparence féroce de cet oiseau de proie est accentuée par un long bec crochu tenant une perle et encadré par des plumes rouges ; il possédait également une crête qui a aujourd’hui disparu. Ces masques, par leurs éléments stylistiques et iconographiques ne montrent pas seulement l’influence de la Chine mais aussi celle de l’Asie centrale et peut-être de la Grèce.");
        $item->setDiscoveryDescription(null);
        $item->setCreationDate("VIIIe siècle ");
        $item->setDiscoveryDate(null);
        $item->setItemLatitude(34.68939);
        $item->setItemLongitude(135.84031);
        $item->setItemCountry("Japon");
        $item->setItemCulture("Epoque de Nara, Ere Tenpyō");
        $item->setItemMaterials("Bois de paulownia laqué, peinture");
        $item->setItemConservationSite("Musée Guimet, Paris");
        $item->setItemConservationSiteUrl("https://www.guimet.fr/");
        $item->setSite($classRepo->findOneBy(["id" => 1]));


        $manager->persist($item);

        $manager->flush();
    }

    // This function ask the app to load first the SiteFixtures Class because it could need the information about the site to load the item.
    public function getDependencies()
    {
        return [SiteFixtures::class];
    }
}

