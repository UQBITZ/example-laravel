<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

// Só existe a partir do segundo deploy. Se a página mostra esta linha,
// o release_command rodou de novo, e não apenas no primeiro.
return new class extends Migration
{
    public function up(): void
    {
        DB::table('release_marks')->insert([
            'label' => 'migrated-by-release-command-v2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        DB::table('release_marks')->where('label', 'migrated-by-release-command-v2')->delete();
    }
};
