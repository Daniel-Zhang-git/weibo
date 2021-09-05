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
        //create 方法会接收两个参数：一个是数据表的名称，另一个则是接收 $table （Blueprint 实例）的闭包。
    {   //CreateUsersTable 类中通过 Blueprint 的实例 $table 为 users 表创建所需的数据库字段
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');//由 increments 方法创建了一个 integer 类型的自增长 id。
            $table->string('name');//由 string 方法创建了一个 name 字段，用于保存用户名称。
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
