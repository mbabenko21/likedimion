<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140420230238 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE chars ADD loc_id VARCHAR(255) DEFAULT NULL");
        $this->addSql("ALTER TABLE chars ADD CONSTRAINT FK_7B32BF896505CAD1 FOREIGN KEY (loc_id) REFERENCES locations (loc_id) ON DELETE SET NULL");
        $this->addSql("CREATE INDEX IDX_7B32BF896505CAD1 ON chars (loc_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE chars DROP FOREIGN KEY FK_7B32BF896505CAD1");
        $this->addSql("DROP INDEX IDX_7B32BF896505CAD1 ON chars");
        $this->addSql("ALTER TABLE chars DROP loc_id");
    }
}
