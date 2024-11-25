<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  
            $table->foreignId('id_nome')->constrained('referencias');
            $table->string('nome');  
            $table->string('email')->unique();  
            $table->string('senha'); 
            $table->text('feedback')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     *
     * @return void
     */
}
;