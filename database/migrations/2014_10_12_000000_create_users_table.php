<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->coment('主键id');
            $table->string('name', 20)->nullable(false)->default('')->comment('用户的姓名');
            $table->char('phone', 11)->nullable(false)->default('')->comment('用户的手机号码');;
            $table->string('email')->nullable(false)->default('')->comment('用户的邮箱');;
            $table->string('password', 255)->nullable(false)->default('')->comment('用户的密码');;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
