<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operates', function (Blueprint $table) {
            $prefix = config('database.connections.prefix');
            $table->increments('id');
            $table->integer('plant_id')->unsigned()->comment('盆栽id');
            $table->datetime('datetime')->comment('时间');
            $table->text('info')->nullable()->comment('操作信息');
            $table->text('img')->nullable()->comment('图片');
            $table->string('type',255)->nullable()->comment('操作类型');
            $table->text('memo')->nullable()->comment('其他信息');
            $table->softDeletes();   //deleted_at字段
            $table->timestamps();
            $table->foreign('plant_id',$prefix.'operates_plant_id_foreign')->references('id')->on('plants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operates');
    }
}
