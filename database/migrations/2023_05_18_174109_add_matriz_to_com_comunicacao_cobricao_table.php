<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMatrizToComComunicacaoCobricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('com_comunicacao_cobricao', function (Blueprint $table) {
            $table->integer('matriz')->nullable();
            $table->string('data_cobricao')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('com_comunicacao_cobricao', function (Blueprint $table) {
            $table->dropColumn('matriz');
            $table->dropColumn('data_cobricao');
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
        });
    }
}
