<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250222152108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat ADD nom VARCHAR(255) NOT NULL, ADD note INT DEFAULT NULL, ADD prix INT NOT NULL, ADD prix_piece INT NOT NULL, CHANGE questions reponse_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quiz ADD note INT DEFAULT NULL, CHANGE questions reponse_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat DROP nom, DROP note, DROP prix, DROP prix_piece, CHANGE reponse_utilisateur questions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quiz DROP note, CHANGE reponse_utilisateur questions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }
}
