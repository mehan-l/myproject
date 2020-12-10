<?php

use yii\db\Migration;

/**
 * Create table supermarkets
 *
 * Class m201124_133421_table_supermarkets
 */
class m201124_133421_table_supermarkets extends Migration
{
    /**
     * Create table
     *
     * @return bool|void
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('supermarkets', [
            'id' => $this->primaryKey(),
            'username' => $this->string()
                ->notNull()
                ->unique()
                ->append(`CHARACTER SET utf8mb4_unicode_ci COLLATE utf8mb4_unicode_ci`),
            'review' => $this->text()->notNull()->append(`CHARACTER SET utf8mb4_unicode_ci COLLATE utf8mb4_unicode_ci`),
            ], $tableOptions);
    }

    /**
     * Delete table if it exist
     *
     * @return bool|void
     */
    public function down()
    {
    }
}
