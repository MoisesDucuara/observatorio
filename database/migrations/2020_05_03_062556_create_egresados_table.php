<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->integer('egresadoDNI');
            $table->char('egresadoNombreCompleto',30);
            $table->char('egresadoGenero',15);
            $table->char('egresadoCorreoElectronico',30)->unique();
            $table->char('egresadoContrasena');
            $table->char('egresadoPais',20);
            $table->char('egresadoCiudad',20);
            //$table->integer('egresadoNotificacion')->nullable();
            $table->integer('egresadoEdad');
            //$table->tinyInteger('egresadoFlagConfirmacion')->nullable();
            //$table->integer('administradorDNI')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->primary('egresadoDNI');
            //$table->foreign('administradorDNI',10)->references('administradorDNI')->on('administradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresados');
    }
}
