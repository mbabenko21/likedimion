<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140425182046 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE battle_options (id INT AUTO_INCREMENT NOT NULL, object_id INT DEFAULT NULL, hit INT NOT NULL, mag_hit INT NOT NULL, attack INT NOT NULL, mag_boost INT NOT NULL, bias INT NOT NULL, parring INT NOT NULL, def INT NOT NULL, mag_def INT NOT NULL, shield_block INT NOT NULL, dtype VARCHAR(255) NOT NULL, INDEX IDX_1AAA4EE4232D562B (object_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE npc_aggresive (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, info LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE battle_options ADD CONSTRAINT FK_1AAA4EE4232D562B FOREIGN KEY (object_id) REFERENCES chars (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE chars ADD battle_options_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE chars ADD CONSTRAINT FK_7B32BF899053952B FOREIGN KEY (battle_options_id) REFERENCES battle_options (id) ON DELETE CASCADE");
        $this->addSql("CREATE INDEX IDX_7B32BF899053952B ON chars (battle_options_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE chars DROP FOREIGN KEY FK_7B32BF899053952B");
        $this->addSql("DROP TABLE battle_options");
        $this->addSql("DROP TABLE npc_aggresive");
        $this->addSql("DROP INDEX IDX_7B32BF899053952B ON chars");
        $this->addSql("ALTER TABLE chars DROP battle_options_id");
    }
}
