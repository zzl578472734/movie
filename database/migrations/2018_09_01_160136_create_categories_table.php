<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->integer('cid')->nullable(false)->default(0)->comment('父级分类id');
            $table->string('name')->nullable(false)->default('')->comment('分类的名称');
            $table->string('description', 255)->nullable(false)->default('')->comment('分类的描述');
            $table->tinyInteger('sort')->nullable(false)->default(0)->comment('排序');
            $table->tinyInteger('status')->nullable(false)->default(1)->comment('状态：1:表示正常 2:表示未开启');
            $table->timestamps();
            $table->engine = 'innodb';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
