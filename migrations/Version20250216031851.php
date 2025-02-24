<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216031851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat CHANGE questionc questionc LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE reponse_correcte reponse_correcte LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE options options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE reponse_utilisateur reponse_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat CHANGE questionc questionc LONGTEXT NOT NULL, CHANGE reponse_correcte reponse_correcte LONGTEXT NOT NULL, CHANGE options options LONGTEXT NOT NULL, CHANGE reponse_utilisateur reponse_utilisateur LONGTEXT NOT NULL');
    }
}
