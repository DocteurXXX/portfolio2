<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190716135344 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE langues ADD CONSTRAINT FK_119D3659A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_119D3659A76ED395 ON langues (user_id)');
        $this->addSql('ALTER TABLE loisirs ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE loisirs ADD CONSTRAINT FK_56739573A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_56739573A76ED395 ON loisirs (user_id)');
        $this->addSql('ALTER TABLE liens ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE liens ADD CONSTRAINT FK_A0A0BABCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A0A0BABCA76ED395 ON liens (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE langues DROP FOREIGN KEY FK_119D3659A76ED395');
        $this->addSql('DROP INDEX IDX_119D3659A76ED395 ON langues');
        $this->addSql('ALTER TABLE liens DROP FOREIGN KEY FK_A0A0BABCA76ED395');
        $this->addSql('DROP INDEX IDX_A0A0BABCA76ED395 ON liens');
        $this->addSql('ALTER TABLE liens DROP user_id');
        $this->addSql('ALTER TABLE loisirs DROP FOREIGN KEY FK_56739573A76ED395');
        $this->addSql('DROP INDEX IDX_56739573A76ED395 ON loisirs');
        $this->addSql('ALTER TABLE loisirs DROP user_id');
    }
}
