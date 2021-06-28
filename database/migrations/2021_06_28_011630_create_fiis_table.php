<?php

use App\Models\Fii;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Fii::TABLE_NAME, function (Blueprint $table) {
            $table->increments(Fii::PRIMARY_KEY);
            $table->string(Fii::FILLABLE[0])->index();
            $table->float(Fii::FILLABLE[1]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Fii::TABLE_NAME);
    }
}
