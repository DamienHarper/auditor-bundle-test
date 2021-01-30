<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210130211854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL, is_active BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE post_audit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(10) NOT NULL, object_id VARCHAR(255) NOT NULL, discriminator VARCHAR(255) DEFAULT NULL, transaction_hash VARCHAR(40) DEFAULT NULL, diffs CLOB DEFAULT NULL, blame_id VARCHAR(255) DEFAULT NULL, blame_user VARCHAR(255) DEFAULT NULL, blame_user_fqdn VARCHAR(255) DEFAULT NULL, blame_user_firewall VARCHAR(100) DEFAULT NULL, ip VARCHAR(45) DEFAULT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('CREATE INDEX type_7d2ab6760afca296cbe1bbe3d5f25777_idx ON post_audit (type)');
        $this->addSql('CREATE INDEX object_id_7d2ab6760afca296cbe1bbe3d5f25777_idx ON post_audit (object_id)');
        $this->addSql('CREATE INDEX discriminator_7d2ab6760afca296cbe1bbe3d5f25777_idx ON post_audit (discriminator)');
        $this->addSql('CREATE INDEX transaction_hash_7d2ab6760afca296cbe1bbe3d5f25777_idx ON post_audit (transaction_hash)');
        $this->addSql('CREATE INDEX blame_id_7d2ab6760afca296cbe1bbe3d5f25777_idx ON post_audit (blame_id)');
        $this->addSql('CREATE INDEX created_at_7d2ab6760afca296cbe1bbe3d5f25777_idx ON post_audit (created_at)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE post_audit');
    }
}
