<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200410151923 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE list_films CHANGE list_id list_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE list_films ADD CONSTRAINT FK_177F5E52A6D70A54 FOREIGN KEY (list_id_id) REFERENCES lists (id)');
        $this->addSql('CREATE INDEX IDX_177F5E52A6D70A54 ON list_films (list_id_id)');
        $this->addSql('ALTER TABLE lists CHANGE shared shared TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE list_films DROP FOREIGN KEY FK_177F5E52A6D70A54');
        $this->addSql('DROP INDEX IDX_177F5E52A6D70A54 ON list_films');
        $this->addSql('ALTER TABLE list_films CHANGE list_id_id list_id INT NOT NULL');
        $this->addSql('ALTER TABLE lists CHANGE shared shared INT NOT NULL');
    }
}
