<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250222085228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, quiz_id INT DEFAULT NULL, certificat_id INT DEFAULT NULL, question VARCHAR(255) NOT NULL, options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', reponse_correcte VARCHAR(255) NOT NULL, INDEX IDX_B6F7494E853CD175 (quiz_id), INDEX IDX_B6F7494EFA55BACF (certificat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EFA55BACF FOREIGN KEY (certificat_id) REFERENCES certificat (id)');
        $this->addSql('ALTER TABLE quiz CHANGE questions questions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE options options LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE reponses_correctes reponses_correctes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE reponses_utilisateur reponses_utilisateur LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E853CD175');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EFA55BACF');
        $this->addSql('DROP TABLE question');
        $this->addSql('ALTER TABLE quiz CHANGE questions questions LONGTEXT NOT NULL, CHANGE options options LONGTEXT NOT NULL, CHANGE reponses_correctes reponses_correctes LONGTEXT NOT NULL, CHANGE reponses_utilisateur reponses_utilisateur LONGTEXT NOT NULL');
    }
}
