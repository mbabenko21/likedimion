<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140425183111 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE base_npc ADD battle_options_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE base_npc ADD CONSTRAINT FK_2CEA08669053952B FOREIGN KEY (battle_options_id) REFERENCES battle_options (id) ON DELETE CASCADE");
        $this->addSql("CREATE INDEX IDX_2CEA08669053952B ON base_npc (battle_options_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE base_npc DROP FOREIGN KEY FK_2CEA08669053952B");
        $this->addSql("DROP INDEX IDX_2CEA08669053952B ON base_npc");
        $this->addSql("ALTER TABLE base_npc DROP battle_options_id");
    }
}
