<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121223193846 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE chars (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(32) NOT NULL, race VARCHAR(255) NOT NULL, level INT NOT NULL, expirience INT NOT NULL, study_points INT NOT NULL, statistic LONGTEXT NOT NULL COMMENT '(DC2Type:array)', created DATETIME NOT NULL, proff_skills LONGTEXT NOT NULL COMMENT '(DC2Type:array)', bank LONGTEXT NOT NULL COMMENT '(DC2Type:array)', equip LONGTEXT NOT NULL COMMENT '(DC2Type:array)', base_params LONGTEXT NOT NULL COMMENT '(DC2Type:array)', war_params LONGTEXT NOT NULL COMMENT '(DC2Type:array)', char_params LONGTEXT NOT NULL COMMENT '(DC2Type:array)', war_skills LONGTEXT NOT NULL COMMENT '(DC2Type:array)', items LONGTEXT NOT NULL COMMENT '(DC2Type:array)', dtype VARCHAR(255) NOT NULL, class VARCHAR(255) DEFAULT NULL, INDEX IDX_7B32BF89A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE ld_news (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, posted DATETIME NOT NULL, UNIQUE INDEX UNIQ_C4CBAAF54B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE char_list (id INT AUTO_INCREMENT NOT NULL, loc_id VARCHAR(255) NOT NULL, char_list LONGTEXT NOT NULL COMMENT '(DC2Type:array)', UNIQUE INDEX UNIQ_340D86446505CAD1 (loc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, author_id INT DEFAULT NULL, adressat_id INT DEFAULT NULL, parent_post_id INT DEFAULT NULL, post_date DATETIME NOT NULL, message LONGTEXT NOT NULL, INDEX IDX_885DBAFAF675F31B (author_id), INDEX IDX_885DBAFAEDB6D95F (adressat_id), INDEX IDX_885DBAFA39C1776A (parent_post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE account (id INT AUTO_INCREMENT NOT NULL, char_id INT DEFAULT NULL, login VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, pass VARCHAR(64) NOT NULL, cookid VARCHAR(64) DEFAULT NULL, UNIQUE INDEX UNIQ_7D3656A43FF12EF9 (char_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE chars ADD CONSTRAINT FK_7B32BF89A76ED395 FOREIGN KEY (user_id) REFERENCES account (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE ld_news ADD CONSTRAINT FK_C4CBAAF54B89032C FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAF675F31B FOREIGN KEY (author_id) REFERENCES chars (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAEDB6D95F FOREIGN KEY (adressat_id) REFERENCES chars (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA39C1776A FOREIGN KEY (parent_post_id) REFERENCES posts (id) ON DELETE SET NULL");
        $this->addSql("ALTER TABLE account ADD CONSTRAINT FK_7D3656A43FF12EF9 FOREIGN KEY (char_id) REFERENCES chars (id) ON DELETE CASCADE");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAF675F31B");
        $this->addSql("ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAEDB6D95F");
        $this->addSql("ALTER TABLE account DROP FOREIGN KEY FK_7D3656A43FF12EF9");
        $this->addSql("ALTER TABLE ld_news DROP FOREIGN KEY FK_C4CBAAF54B89032C");
        $this->addSql("ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA39C1776A");
        $this->addSql("ALTER TABLE chars DROP FOREIGN KEY FK_7B32BF89A76ED395");
        $this->addSql("DROP TABLE chars");
        $this->addSql("DROP TABLE ld_news");
        $this->addSql("DROP TABLE char_list");
        $this->addSql("DROP TABLE posts");
        $this->addSql("DROP TABLE account");
    }
}
