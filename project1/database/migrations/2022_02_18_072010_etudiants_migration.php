<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EtudiantsMigration extends Migration
{
  
  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        schema::create('etudiants',function(Blueprint $table)
        {
            $table->id();
            $table->string('noms');
            $table->string('age');
        });  //
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
