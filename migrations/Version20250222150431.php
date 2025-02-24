<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250222150431 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat ADD questions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', DROP nomc, DROP descriptionc, DROP prixc, DROP prix_piece, DROP questionc, DROP reponse_correcte, DROP options, DROP reponse_utilisateur');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA927ECF78B0');
        $this->addSql('DROP INDEX IDX_A412FA927ECF78B0 ON quiz');
        $this->addSql('ALTER TABLE quiz DROP cours_id, DROP note, DROP options, DROP reponses_correctes, DROP reponses_utilisateur');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE certificat ADD nomc VARCHAR(255) NOT NULL, ADD descriptionc VARCHAR(255) DEFAULT NULL, ADD prixc INT NOT NULL, ADD prix_piece INT NOT NULL, ADD reponse_correcte LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD reponse_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE questions questionc LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quiz ADD cours_id INT DEFAULT NULL, ADD note INT DEFAULT NULL, ADD options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD reponses_correctes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD reponses_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA927ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_A412FA927ECF78B0 ON quiz (cours_id)');
    }
}
