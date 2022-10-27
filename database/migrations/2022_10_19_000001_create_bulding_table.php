<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('category');
            $table->float('area', 10, 2);
            $table->decimal('price', $precision = 10, $scale = 2);
            $table->boolean('status');
            $table->string('image');
            $table->timestamps();
        });

        // Pre data
        $buildings = [
            [
                'id' => '1',
                'name' => "Seminar Room 1",
                'address' => "Teknik Informatika",
                'category' => "seminar",
                'area' => 24.5,
                'price' => 300000,
                'status' => 0,
                'image' => 'seminarRoom1.png'
            ],
            [
                'id' => '2',
                'name' => "Seminar Room 2",
                'address' => "Teknik Fisika",
                'area' => 20,
                'price' => 200000,
                'category' => 'seminar',
                'status' => 0,
                'image' => 'seminarRoom2.png'
            ],
            [
                'id' => '3',
                'name' => "Theater Room 1",
                'address' => "ITS",
                'area' => 30,
                'price' => 500000,
                'category' => 'theater',
                'status' => 0,
                'image' => 'theaterRoom1.png'
            ],
            [
                'id' => '4',
                'name' => "Theater Room 2",
                'address' => "ITS",
                'area' => 35,
                'price' => 550000,
                'category' => 'theater',
                'status' => 0,
                'image' => 'theaterRoom2.png'
            ],
            [
                'id' => '5',
                'name' => "Theater Room 3",
                'address' => "ITS",
                'area' => 25,
                'price' => 400000,
                'category' => 'theater',
                'status' => 0,
                'image' => 'theaterRoom3.png'
            ]
        ];
        foreach ($buildings as $data) {
            DB::table('building')->insert($data);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building');
    }
};
