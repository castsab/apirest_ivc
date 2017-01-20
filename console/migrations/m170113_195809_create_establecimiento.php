<?php

use yii\db\Migration;
use yii\db\pgsql\Schema;

class m170113_195809_create_establecimiento extends Migration
{
    public function safeUp()
    {
        $this->createTable("establecimiento", 
        [
            "id"=>  Schema::TYPE_PK,
            "upz"=>  Schema::TYPE_STRING."(500)",
            "apellidos_propietario"=>  Schema::TYPE_STRING."(100)",
            "apellidos_representante_legal"=>  Schema::TYPE_STRING."(100)",
            "ciiu1"=>  Schema::TYPE_STRING."(10)",
            "ciiu2"=>  Schema::TYPE_STRING."(10)",
            "ciiu3"=>  Schema::TYPE_STRING."(10)",
            "direccion_comercial"=>  Schema::TYPE_STRING."(255)",
            "direccion_estandar"=>  Schema::TYPE_STRING."(500)",
            "direccion_notificacion"=>  Schema::TYPE_STRING."(500)",
            "fecha_fin_matricula"=>  Schema::TYPE_STRING."(10)",
            "fecha_matricula"=>  Schema::TYPE_STRING."(10)",
            "formal"=>  Schema::TYPE_STRING."(1)",
            "digito_verificacion_establecimiento"=>  Schema::TYPE_STRING."(1)",
            "digito_verficacion_propietario"=>  Schema::TYPE_STRING."(1)",
            "digito_verficacion_representate"=>  Schema::TYPE_STRING."(1)",
            "localidad"=>  Schema::TYPE_STRING."(500)",
            "correo_electronico"=>  Schema::TYPE_STRING."(100)",
            "matricula"=>  Schema::TYPE_STRING."(12)",
            "matricula_propietario"=>  Schema::TYPE_STRING."(12)",
            "numero_identificacion_establecimiento"=>  Schema::TYPE_STRING."(14)",
            "numero_identificacion_propietario"=>  Schema::TYPE_STRING."(14)",
            "numero_identificacion_representante"=>  Schema::TYPE_STRING."(14)",
            "nombre_comercial"=>  Schema::TYPE_STRING."(500)",
            "nombres_propietario"=>  Schema::TYPE_STRING."(500)",
            "observaciones"=>  Schema::TYPE_STRING."(500)",
            "observation_historia"=>  Schema::TYPE_STRING."(500)",
            "pagina_web"=>  Schema::TYPE_STRING."(500)",
            "razon_social"=>  Schema::TYPE_STRING."(500)",
            "telefono"=>  Schema::TYPE_STRING."(100)",
            "tipo_historico"=>  Schema::TYPE_STRING."(1)",
            "tipo_identidad_establecimiento"=>  Schema::TYPE_STRING."(1)",
            "tipo_identidad_propietario"=>  Schema::TYPE_STRING."(1)",
            "tipo_identidad_representante_legal"=>  Schema::TYPE_STRING."(1)"      
        ]);
    }

    public function safeDown()
    {
       $this->dropTable("establecimiento");             
    }

}
