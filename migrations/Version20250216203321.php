<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216203321 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz CHANGE questions questions LONGTEXT NOT NULL, CHANGE options options LONGTEXT NOT NULL, CHANGE reponses_correctes reponses_correctes LONGTEXT NOT NULL, CHANGE reponses_utilisateur reponses_utilisateur LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz CHANGE questions questions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE options options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE reponses_correctes reponses_correctes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE reponses_utilisateur reponses_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }
}
