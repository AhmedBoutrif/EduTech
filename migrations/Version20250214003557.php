<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250214003557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat ADD descriptionc VARCHAR(255) DEFAULT NULL, ADD prixc INT NOT NULL, ADD prix_piece INT NOT NULL, ADD questionc LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD reponse_correcte LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD reponse_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', DROP cout_points, DROP coutpieces, CHANGE titre_certif nomc VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat ADD cout_points INT NOT NULL, ADD coutpieces INT NOT NULL, DROP descriptionc, DROP prixc, DROP prix_piece, DROP questionc, DROP reponse_correcte, DROP options, DROP reponse_utilisateur, CHANGE nomc titre_certif VARCHAR(255) NOT NULL');
    }
}
