<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->timestamps();
        });

        $roles = [
            [
                'id' => '1',
                'name' => 'admin',
            ],
            [
                'id' => '2',
                'name' => 'user',
            ]
        ];

        foreach ($roles as $role) {
            DB::table('role')->insert($role);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
};
