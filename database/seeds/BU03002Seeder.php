<?php

use Illuminate\Database\Seeder;

class BU03002Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SistemaEmbebido::create([
            'user_id'=>1,
            'nombre'=>"Sistema de prueba 1",
            'activo'=>true
        ]);
        Sistemaembebido::create([
            'user_id'=>1,
            'nombre'=>"Sistema de prueba 2",
            'activo'=>false
        ]);
        TipoDato::create([
            'nombre'=>"Entero"
        ]);
        TipoDato::create([
            'nombre'=>"Decimal"
        ]);
        TipoDato::create([
            'nombre'=>"Cadena de texto"
        ]);

        Unidad::create([
            'user_id'=>1,
            'nombre'=>"Centimetro",
            'abreviacion'=>"cm"
        ]);
        Unidad::create([
            'user_id'=>1,
            'nombre'=>"Farad",
            'abreviacion'=>"F"
        ]);
        Unidad::create([
            'user_id'=>1,
            'nombre'=>"Libra",
            'abreviacion'=>"lb"
        ]);

       Componente::create([
        'sistema_embebido_id'=>1,
        'tipo_dato_id'=>1,
        'unidad_id'=>2,
        'nombre'=>"Sistema de muestreo digital"
       ]);
       Componente::create([
        'sistema_embebido_id'=>1,
        'tipo_dato_id'=>2,
        'unidad_id'=>3,
        'nombre'=>"Sistema de pesaje"
       ]);
       Componente::create([
        'sistema_embebido_id'=>2,
        'tipo_dato_id'=>3,
        'unidad_id'=>1,
        'nombre'=>"Sistema de Kilometraje recorrido"
       ]);
       Componente::create([
        'sistema_embebido_id'=>2,
        'tipo_dato_id'=>1,
        'unidad_id'=>2,
        'nombre'=>"Sistema de calculo de capacitancia"
       ]);

       Medicion::create([
        'componente_id'=>1,
        'valor'=>"cinco farads"
       ]);
       Medicion::create([
        'componente_id'=>1,
        'valor'=>"nueve farads"
       ]);
       Medicion::create([
        'componente_id'=>2,
        'valor'=>"veinte libras"
       ]);
       Medicion::create([
        'componente_id'=>2,
        'valor'=>"cuatrocientos libras"
       ]);
       Medicion::create([
        'componente_id'=>3,
        'valor'=>"diez metros"
       ]);
       Medicion::create([
        'componente_id'=>3,
        'valor'=>"cuarenta metros"
       ]);
       Medicion::create([
        'componente_id'=>4,
        'valor'=>"cien farads"
       ]);
       Medicion::create([
        'componente_id'=>4,
        'valor'=>"10.5 farads"
       ]);


    }

}
