    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_empleado');
            $table->string('ap_paterno_emp');
            $table->string('ap_materno_emp');
            $table->date('fecha_naci_emp');
            $table->string('genero');
            $table->integer('telefono');
            $table->string('direccion');
            $table->date('fache_incio');
            $table->date('fecha_final');

            $table->integer('puesto_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('puesto_id')->references('id')->on('puestos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
