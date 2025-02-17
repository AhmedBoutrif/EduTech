<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217191613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certification (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, img VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorite (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, certification_id INT DEFAULT NULL, INDEX IDX_68C58ED99D86650F (user_id_id), INDEX IDX_68C58ED9CB47068A (certification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordre (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, total_price NUMERIC(10, 2) NOT NULL, INDEX IDX_737992C9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordre_certification (ordre_id INT NOT NULL, certification_id INT NOT NULL, INDEX IDX_5E273199291498C (ordre_id), INDEX IDX_5E27319CB47068A (certification_id), PRIMARY KEY(ordre_id, certification_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_certification (user_id INT NOT NULL, certification_id INT NOT NULL, INDEX IDX_82B2C025A76ED395 (user_id), INDEX IDX_82B2C025CB47068A (certification_id), PRIMARY KEY(user_id, certification_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED99D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED9CB47068A FOREIGN KEY (certification_id) REFERENCES certification (id)');
        $this->addSql('ALTER TABLE ordre ADD CONSTRAINT FK_737992C9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ordre_certification ADD CONSTRAINT FK_5E273199291498C FOREIGN KEY (ordre_id) REFERENCES ordre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordre_certification ADD CONSTRAINT FK_5E27319CB47068A FOREIGN KEY (certification_id) REFERENCES certification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_certification ADD CONSTRAINT FK_82B2C025A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_certification ADD CONSTRAINT FK_82B2C025CB47068A FOREIGN KEY (certification_id) REFERENCES certification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD abonnement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649F1D74413 ON user (abonnement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED99D86650F');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED9CB47068A');
        $this->addSql('ALTER TABLE ordre DROP FOREIGN KEY FK_737992C9A76ED395');
        $this->addSql('ALTER TABLE ordre_certification DROP FOREIGN KEY FK_5E273199291498C');
        $this->addSql('ALTER TABLE ordre_certification DROP FOREIGN KEY FK_5E27319CB47068A');
        $this->addSql('ALTER TABLE user_certification DROP FOREIGN KEY FK_82B2C025A76ED395');
        $this->addSql('ALTER TABLE user_certification DROP FOREIGN KEY FK_82B2C025CB47068A');
        $this->addSql('DROP TABLE certification');
        $this->addSql('DROP TABLE favorite');
        $this->addSql('DROP TABLE ordre');
        $this->addSql('DROP TABLE ordre_certification');
        $this->addSql('DROP TABLE user_certification');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F1D74413');
        $this->addSql('DROP INDEX IDX_8D93D649F1D74413 ON user');
        $this->addSql('ALTER TABLE user DROP abonnement_id');
    }
}
