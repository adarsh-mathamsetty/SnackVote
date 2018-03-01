<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VoteFruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {

            $table->string('Fruitname')->default(0);
            $table->integer('NumofVotes')->default(0);
            $table->integer('userid');
            $table->timestamps();

        });

        DB::table('fruits')->insert([
        [

            'Fruitname' => 'Apple',
            'NumofVotes' => '0',
            'userid' => '0'
        ],

        [

            'Fruitname' => 'Orange',
            'NumofVotes' => '0',
            'userid' => '0'
        ],

        [

            'Fruitname' => 'Banana',
            'NumofVotes' => '0',
            'userid' => '0'
        ],

        [
            
            'Fruitname' => 'Pineapple',
            'NumofVotes' => '0',
            'userid' => '0'
        ]

    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fruits');
    }
}
