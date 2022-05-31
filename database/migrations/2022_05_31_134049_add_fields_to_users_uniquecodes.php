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
        Schema::table('users_uniquecodes', function (Blueprint $table) {
            
            $table->string('email',150)->nullable()->after('code');
            
            $table->enum('is_expired', ['0', '1'])->default('1')->comment('0: expired, 1:active')->after('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_uniquecodes', function (Blueprint $table) {
            //
        });
    }
};
