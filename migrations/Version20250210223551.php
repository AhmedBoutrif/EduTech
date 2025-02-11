<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210223551 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD feed_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC51A5BC03 FOREIGN KEY (feed_id) REFERENCES feed (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC51A5BC03 ON commentaire (feed_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC51A5BC03');
        $this->addSql('DROP INDEX IDX_67F068BC51A5BC03 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP feed_id');
    }
}
