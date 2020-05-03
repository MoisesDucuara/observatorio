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
            $table->integer('EgresadoDNI');
            $table->char('EgresadoNombreCompleto',30);
            $table->char('EgresadoGenero',15);
            $table->char('EgresadoCorreoElectronico',30)->unique();
            $table->char('EgresadoContrasena',30);
            $table->char('EgresadoPais',20);
            $table->char('EgresadoCiudad',20);
            //$table->integer('EgresadoNotificacion')->nullable();
            $table->integer('EgresadoEdad');
            //$table->tinyInteger('EgresadoFlagConfirmacion')->nullable();
            //$table->integer('AdministradorDNI')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->primary('EgresadoDNI');
            //$table->foreign('AdministradorDNI',10)->references('AdministradorDNI')->on('Administradores');
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
