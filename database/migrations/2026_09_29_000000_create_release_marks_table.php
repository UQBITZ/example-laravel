<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

// Cria a tabela lida pela página inicial. Se a página mostra a linha,
// `php artisan migrate --force` rodou no release_command.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('release_marks', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->timestamps();
        });

        DB::table('release_marks')->insert([
            'label' => 'migrated-by-release-command',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('release_marks');
    }
};
