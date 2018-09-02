<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->string('url', 255)->nullable(false)->default('')->comment('电影的url');
            $table->string('name')->nullable(false)->default('')->comment('电影名称');
            $table->text('description')->nullable(false)->comment('电影简介');
            $table->string('release_area')->nullable(false)->default('')->comment('电影上映地点');
            $table->string('director')->nullable(false)->default('')->comment('导演');
            $table->string('actor')->nullable(false)->default('')->comment('演员');
            $table->bigInteger('hits')->nullable(false)->default(0)->comment('点击');
            $table->double('score')->nullable(false)->default(0)->comment('评分');
            $table->integer('comment_number')->nullable(false)->default(0)->comment('评论人数');
            $table->tinyInteger('sort')->nullable(false)->default(0)->comment('排序');
            $table->tinyInteger('status')->nullable(false)->default(1)->comment('状态：1:表示正常 2:表示未开启');
            $table->timestamp('release_at')->nullable()->comment('上映时间');
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
        Schema::dropIfExists('movies');
    }
}
