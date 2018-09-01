<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->string('name')->nullable(false)->default('')->comment('横幅的名称');
            $table->string('description', 255)->nullable(false)->default('')->comment('横幅的描述');
            $table->string('image', 255)->nullable(false)->default('')->comment('横幅的图片地址');
            $table->tinyInteger('sort')->nullable(false)->default(0)->comment('排序');
            $table->tinyInteger('status')->nullable(false)->default(1)->comment('状态：1:表示正常 2:表示未开启');
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
        Schema::dropIfExists('banners');
    }
}
