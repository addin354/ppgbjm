<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('desas')) {
            Schema::create('desas', function (Blueprint $table) {
                $table->id();
                $table->string('kode')->nullable();
                $table->string('nama');
                $table->string('kecamatan')->nullable();
                $table->text('alamat')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('pengajars')) {
            Schema::create('pengajars', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
                $table->string('kode')->nullable();
                $table->string('nama_lengkap');
                $table->string('telepon')->nullable();
                $table->text('alamat')->nullable();
                $table->date('tanggal_lahir')->nullable();
                $table->string('status')->default('aktif');
                $table->date('tanggal_mulai_tugas')->nullable();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('kelompoks')) {
            Schema::create('kelompoks', function (Blueprint $table) {
                $table->id();
                $table->foreignId('desa_id')->constrained('desas')->cascadeOnDelete();
                $table->string('kode')->nullable();
                $table->string('nama');
                $table->foreignId('pengajar_aktif_id')->nullable()->constrained('pengajars')->nullOnDelete();
                $table->text('deskripsi')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('generuses')) {
            Schema::create('generuses', function (Blueprint $table) {
                $table->id();
                $table->foreignId('kelompok_id')->constrained('kelompoks')->cascadeOnDelete();
                $table->string('nama_lengkap');
                $table->string('nama_panggilan')->nullable();
                $table->string('tempat_lahir')->nullable();
                $table->date('tanggal_lahir')->nullable();
                $table->string('jenis_kelamin', 1)->default('L');
                $table->string('kelas')->nullable();
                $table->text('alamat')->nullable();
                $table->string('nama_ortu')->nullable();
                $table->string('telepon_ortu')->nullable();
                $table->foreignId('user_ortu_id')->nullable()->constrained('users')->nullOnDelete();
                $table->unsignedSmallInteger('tahun_masuk')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('karakter_luhurs')) {
            Schema::create('karakter_luhurs', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('urutan');
                $table->string('nama');
                $table->text('deskripsi')->nullable();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('materi_pengajians')) {
            Schema::create('materi_pengajians', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->text('ringkasan')->nullable();
                $table->string('kategori')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('target_pembinaans')) {
            Schema::create('target_pembinaans', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->text('deskripsi')->nullable();
                $table->string('kategori')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('generus_targets')) {
            Schema::create('generus_targets', function (Blueprint $table) {
                $table->id();
                $table->foreignId('generus_id')->constrained('generuses')->cascadeOnDelete();
                $table->foreignId('target_pembinaan_id')->constrained('target_pembinaans')->cascadeOnDelete();
                $table->string('status')->default('belum_dimulai');
                $table->text('catatan')->nullable();
                $table->timestamps();

                $table->unique(['generus_id', 'target_pembinaan_id']);
            });
        }

        if (! Schema::hasTable('pembinaans')) {
            Schema::create('pembinaans', function (Blueprint $table) {
                $table->id();
                $table->foreignId('kelompok_id')->constrained('kelompoks')->cascadeOnDelete();
                $table->foreignId('pengajar_id')->constrained('pengajars')->restrictOnDelete();
                $table->foreignId('materi_id')->nullable()->constrained('materi_pengajians')->nullOnDelete();
                $table->foreignId('target_pembinaan_id')->nullable()->constrained('target_pembinaans')->nullOnDelete();
                $table->date('tanggal');
                $table->string('judul')->nullable();
                $table->string('dokumentasi_path')->nullable();
                $table->text('catatan')->nullable();
                $table->boolean('pengajar_hadir')->default(true);
                $table->string('catatan_absensi_pengajar')->nullable();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('pembinaan_absensi_generus')) {
            Schema::create('pembinaan_absensi_generus', function (Blueprint $table) {
                $table->id();
                $table->foreignId('pembinaan_id')->constrained('pembinaans')->cascadeOnDelete();
                $table->foreignId('generus_id')->constrained('generuses')->cascadeOnDelete();
                $table->string('status')->default('hadir');
                $table->text('evaluasi')->nullable();
                $table->text('catatan')->nullable();
                $table->timestamps();

                $table->unique(['pembinaan_id', 'generus_id']);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('pembinaan_absensi_generus');
        Schema::dropIfExists('pembinaans');
        Schema::dropIfExists('generus_targets');
        Schema::dropIfExists('target_pembinaans');
        Schema::dropIfExists('materi_pengajians');
        Schema::dropIfExists('karakter_luhurs');
        Schema::dropIfExists('generuses');
        Schema::dropIfExists('kelompoks');
        Schema::dropIfExists('pengajars');
        Schema::dropIfExists('desas');
    }
};
