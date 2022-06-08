<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220608210021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, site_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, item_description LONGTEXT NOT NULL, discovery_description LONGTEXT DEFAULT NULL, creation_date VARCHAR(255) NOT NULL, discovery_date VARCHAR(255) DEFAULT NULL, item_latitude DOUBLE PRECISION NOT NULL, item_longitude DOUBLE PRECISION NOT NULL, item_country VARCHAR(100) NOT NULL, item_culture VARCHAR(100) NOT NULL, item_materials VARCHAR(255) DEFAULT NULL, item_conservation_site VARCHAR(255) DEFAULT NULL, item_conservation_site_url VARCHAR(255) DEFAULT NULL, INDEX IDX_1F1B251EF6BD1646 (site_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, site_description LONGTEXT NOT NULL, site_culture VARCHAR(100) NOT NULL, site_country VARCHAR(100) NOT NULL, site_latitude DOUBLE PRECISION NOT NULL, site_longitude DOUBLE PRECISION NOT NULL, site_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251EF6BD1646 FOREIGN KEY (site_id) REFERENCES site (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EF6BD1646');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE site');
        $this->addSql('DROP TABLE user');
    }
}
