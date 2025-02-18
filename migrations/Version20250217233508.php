<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217233508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation CHANGE Avaibility_id Avaibility_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495561778466 FOREIGN KEY (Avaibility_id) REFERENCES Avaibility (id)');
        $this->addSql('CREATE INDEX IDX_42C8495561778466 ON reservation (Avaibility_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495561778466');
        $this->addSql('DROP INDEX IDX_42C8495561778466 ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE Avaibility_id Avaibility_id INT NOT NULL');
    }
}
