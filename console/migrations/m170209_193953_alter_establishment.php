<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170209_193953_alter_establishment extends Migration
{
    public function up()
    {
        $this->alterColumn('establishment', 'name_economic_activity', Schema::TYPE_STRING."(500)");
    }

    public function down()
    {
        echo "m170209_193953_alter_establisment cannot be reverted.\n";
        return false;
    }

}
