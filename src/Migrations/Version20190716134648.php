<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190716134648 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projets ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE projets ADD CONSTRAINT FK_B454C1DBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B454C1DBA76ED395 ON projets (user_id)');
        $this->addSql('ALTER TABLE competences ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE competences ADD CONSTRAINT FK_DB2077CEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_DB2077CEA76ED395 ON competences (user_id)');
        $this->addSql('ALTER TABLE formations ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE formations ADD CONSTRAINT FK_40902137A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_40902137A76ED395 ON formations (user_id)');
        $this->addSql('ALTER TABLE langues ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE langues ADD CONSTRAINT FK_119D3659A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_119D3659A76ED395 ON langues (user_id)');
        $this->addSql('ALTER TABLE liens ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE liens ADD CONSTRAINT FK_A0A0BABCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A0A0BABCA76ED395 ON liens (user_id)');
        $this->addSql('ALTER TABLE loisirs ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE loisirs ADD CONSTRAINT FK_56739573A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_56739573A76ED395 ON loisirs (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE competences DROP FOREIGN KEY FK_DB2077CEA76ED395');
        $this->addSql('DROP INDEX IDX_DB2077CEA76ED395 ON competences');
        $this->addSql('ALTER TABLE competences DROP user_id');
        $this->addSql('ALTER TABLE formations DROP FOREIGN KEY FK_40902137A76ED395');
        $this->addSql('DROP INDEX IDX_40902137A76ED395 ON formations');
        $this->addSql('ALTER TABLE formations DROP user_id');
        $this->addSql('ALTER TABLE langues DROP FOREIGN KEY FK_119D3659A76ED395');
        $this->addSql('DROP INDEX IDX_119D3659A76ED395 ON langues');
        $this->addSql('ALTER TABLE langues DROP user_id');
        $this->addSql('ALTER TABLE liens DROP FOREIGN KEY FK_A0A0BABCA76ED395');
        $this->addSql('DROP INDEX IDX_A0A0BABCA76ED395 ON liens');
        $this->addSql('ALTER TABLE liens DROP user_id');
        $this->addSql('ALTER TABLE loisirs DROP FOREIGN KEY FK_56739573A76ED395');
        $this->addSql('DROP INDEX IDX_56739573A76ED395 ON loisirs');
        $this->addSql('ALTER TABLE loisirs DROP user_id');
        $this->addSql('ALTER TABLE projets DROP FOREIGN KEY FK_B454C1DBA76ED395');
        $this->addSql('DROP INDEX IDX_B454C1DBA76ED395 ON projets');
        $this->addSql('ALTER TABLE projets DROP user_id');
    }
}
