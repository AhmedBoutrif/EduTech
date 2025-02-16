<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211013320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD duree INT NOT NULL, DROP durée, CHANGE prix prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE panier DROP id_panier');
        $this->addSql('ALTER TABLE wish_list ADD nom VARCHAR(255) NOT NULL, ADD description LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD durée VARCHAR(255) NOT NULL, DROP duree, CHANGE prix prix VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE panier ADD id_panier INT NOT NULL');
        $this->addSql('ALTER TABLE wish_list DROP nom, DROP description');
    }
}
