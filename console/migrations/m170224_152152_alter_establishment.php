<?php

use yii\db\Migration;
use yii\db\Schema;

class m170224_152152_alter_establishment extends Migration
{
    public function up()
    {
        $this->addColumn('establishment', 'batch', Schema::TYPE_SMALLINT.'(2) default 0');
    }

    public function down()
    {
        echo "m170224_152152_alter_establishment cannot be reverted.\n";
        return false;
    }
}
