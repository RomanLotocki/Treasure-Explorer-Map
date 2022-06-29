<?php

namespace App\DataFixtures;

use App\Entity\Site;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $site = new Site();
        $site->setName("Tōdai-ji");
        $site->setImage("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Daibutsu-den_in_Todaiji_Nara01bs3200.jpg/1280px-Daibutsu-den_in_Todaiji_Nara01bs3200.jpg");
        $site->setSiteDescription("Le Todai-ji est un temple bouddhique situé à Nara, sur l'île principale de Honshu. Ce grand temple de l'est abrite notamment le bâtiment Daibutsu-den, connue pour être la plus grande construction en bois du monde et hébergeant un monumental Grand Bouddha assis en bronze.");
        $site->setSiteCulture("Epoque de Nara, Ere Tenpyō");
        $site->setSiteCountry("Japon");
        $site->setSiteLatitude(34.68953);
        $site->setSiteLongitude(135.83977);
        $site->setSiteUrl("https://www.todaiji.or.jp/en/");
        $manager->persist($site);

        $site = new Site();
        $site->setName("Machu Pichu");
        $site->setImage("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Daibutsu-den_in_Todaiji_Nara01bs3200.jpg/1280px-Daibutsu-den_in_Todaiji_Nara01bs3200.jpg");
        $site->setSiteDescription("Machu Picchu (du quechua machu pikchu, littéralement « vieille montagne » ou « vieux sommet »)est une ancienne cité inca du XVe siècle au Pérou, perchée sur un promontoire rocheux qui unit les monts Machu Picchu et Huayna Picchu (« le Jeune Pic » en quechua) sur le versant oriental des Andes centrales. Son nom aurait été Pikchu ou Picho.");
        $site->setSiteCulture("Incas");
        $site->setSiteCountry("Pérou");
        $site->setSiteLatitude(-13.163464);
        $site->setSiteLongitude(-72.545138);
        $site->setSiteUrl("https://www.todaiji.or.jp/en/");
        $manager->persist($site);

        $manager->flush();
    }
}
