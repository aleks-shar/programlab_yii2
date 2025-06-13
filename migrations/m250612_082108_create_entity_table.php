<?php

declare(strict_types=1);

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%entity}}`.
 */
class m250612_082108_create_entity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $this->createTable('{{%entity}}', [
            'id' => $this->primaryKey(),
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%entity}}');
    }
}
