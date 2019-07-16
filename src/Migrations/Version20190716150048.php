<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190716150048 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE langues (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, langues VARCHAR(255) NOT NULL, notion VARCHAR(255) NOT NULL, INDEX IDX_119D3659A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competences (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(500) NOT NULL, INDEX IDX_DB2077CEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projets (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, lien VARCHAR(500) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(500) NOT NULL, INDEX IDX_B454C1DBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, zipcode INT NOT NULL, ville VARCHAR(255) NOT NULL, date_naissance DATETIME NOT NULL, photo VARCHAR(500) NOT NULL, a_propos LONGTEXT NOT NULL, titre VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experiences (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, titre VARCHAR(500) NOT NULL, nom_societe VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, date_start DATETIME NOT NULL, date_end DATETIME NOT NULL, missions LONGTEXT NOT NULL, logo VARCHAR(500) NOT NULL, INDEX IDX_82020E70A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE loisirs (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(500) NOT NULL, INDEX IDX_56739573A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liens (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, lien VARCHAR(500) NOT NULL, INDEX IDX_A0A0BABCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formations (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, titre VARCHAR(255) NOT NULL, ecole VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, date_start DATETIME NOT NULL, date_end DATETIME NOT NULL, diplome VARCHAR(255) NOT NULL, logo VARCHAR(500) NOT NULL, INDEX IDX_40902137A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE langues ADD CONSTRAINT FK_119D3659A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE competences ADD CONSTRAINT FK_DB2077CEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE projets ADD CONSTRAINT FK_B454C1DBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE experiences ADD CONSTRAINT FK_82020E70A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE loisirs ADD CONSTRAINT FK_56739573A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE liens ADD CONSTRAINT FK_A0A0BABCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE formations ADD CONSTRAINT FK_40902137A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE langues DROP FOREIGN KEY FK_119D3659A76ED395');
        $this->addSql('ALTER TABLE competences DROP FOREIGN KEY FK_DB2077CEA76ED395');
        $this->addSql('ALTER TABLE projets DROP FOREIGN KEY FK_B454C1DBA76ED395');
        $this->addSql('ALTER TABLE experiences DROP FOREIGN KEY FK_82020E70A76ED395');
        $this->addSql('ALTER TABLE loisirs DROP FOREIGN KEY FK_56739573A76ED395');
        $this->addSql('ALTER TABLE liens DROP FOREIGN KEY FK_A0A0BABCA76ED395');
        $this->addSql('ALTER TABLE formations DROP FOREIGN KEY FK_40902137A76ED395');
        $this->addSql('DROP TABLE langues');
        $this->addSql('DROP TABLE competences');
        $this->addSql('DROP TABLE projets');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE experiences');
        $this->addSql('DROP TABLE loisirs');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE liens');
        $this->addSql('DROP TABLE formations');
    }
}
