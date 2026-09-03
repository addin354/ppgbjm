<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('generuses') && ! Schema::hasColumn('generuses', 'kelas')) {
            Schema::table('generuses', function (Blueprint $table) {
                $table->string('kelas')->nullable()->after('jenis_kelamin');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('generuses') && Schema::hasColumn('generuses', 'kelas')) {
            Schema::table('generuses', function (Blueprint $table) {
                $table->dropColumn('kelas');
            });
        }
    }
};
