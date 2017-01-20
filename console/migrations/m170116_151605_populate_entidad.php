<?php

use yii\db\Migration;

class m170116_151605_populate_entidad extends Migration
{
    public function safeUp()
    {
        $this->insert('entidad', [
            'id'=>'1',
            'nombre_entidad'=>'Ambiente'
        ]);
        
        $this->insert('entidad', [
            'id'=>'2',
            'nombre_entidad'=>'Salud'
        ]);
        
        $this->insert('entidad', [
            'id'=>'3',
            'nombre_entidad'=>'Gobierno'
        ]);
        
        $this->insert('entidad', [
            'id'=>'4',
            'nombre_entidad'=>'Bomberos'
        ]);
        
    }

    public function safeDown()
    {
        $this->delete('entidad');
    }

}
