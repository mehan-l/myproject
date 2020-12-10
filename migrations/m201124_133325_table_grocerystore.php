<?php

use yii\db\Migration;

/**
 * Create table grocerystore
 *
 * Class m201124_133325_table_grocerystore
 */
class m201124_133325_table_grocerystore extends Migration
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

        $this->createTable('grocerystore', [
            'id' => $this->primaryKey(),
            'username' => $this
                ->string()
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
