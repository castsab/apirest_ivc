<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170116_162150_create_visita extends Migration
{
    public function up()
    {
        $this->createTable('visita', [
            'id'=>Schema::TYPE_BIGPK,
            'id_entidad'=>Schema::TYPE_INTEGER.' not null',
            'id_establecimiento'=>Schema::TYPE_INTEGER.' not null',
            'fecha_evento'=>Schema::TYPE_STRING.'(10)',
            'causa_visita'=>Schema::TYPE_STRING.'(3)',
            'estado_visita'=>Schema::TYPE_STRING.'(3)',
            'concepto_visita'=>Schema::TYPE_STRING.'(3)',
            'tipo_identificacion_funcionario'=>Schema::TYPE_STRING.'(1)',
            'numero_identidad_funcionario'=>Schema::TYPE_STRING.'(14)',
            'apellidos_funcionario'=>Schema::TYPE_STRING.'(100)',
            'nombres_funcionario'=>Schema::TYPE_STRING.'(100)',
            'tipo_identidad_atiende'=>Schema::TYPE_STRING.'(1)',
            'numero_identidad_atiende'=>Schema::TYPE_STRING.'(14)',
            'apellidos_atiende'=>Schema::TYPE_STRING.'(100)',
            'nombres_atiende'=>Schema::TYPE_STRING.'(100)',
            'observacion_visita'=>Schema::TYPE_STRING.'(500)'
        ]);
        
        $this->addForeignKey('fk_id_entidad_visita', 'visita', 'id_entidad', 'entidad', 'id');
        $this->addForeignKey('fk_id_establecimiento_visita', 'visita', 'id_establecimiento', 'establecimiento', 'id');
    }

    public function down()
    {
        $this->dropTable('visita');
    }

}
