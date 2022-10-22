<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Auth\RegistersUsers;
use Haruncpi\LaravelIdGenerator\IdGenerator;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('no_telp');
            $table->string('role_id');
            $table->timestamps();
        });



        // $idAdmin = IdGenerator::generate([
        //     'table' => 'users',
        //     'length' => 5,
        //     'prefix' => 'A'
        // ]);

        // $admins = [
        //     [
        //         'id' => $idAdmin,
        //         'email' => "superadmin@gmail.com",
        //         'password' => Hash::make("superadmin"),
        //         'first_name' => "super",
        //         'last_name' => "admin",
        //         'no_telp' => "082367556755",
        //         'role_id' => '1',

        //     ]
        // ];

        // foreach ($admins as $admin) {
        //     DB::table('users')->insert($admin);
        // }
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
};
