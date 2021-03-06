<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('nokk')->nullable();
            $table->foreignId('city_born_id');
            $table->date('date_born');
            $table->char('relation', 1);
            $table->char('last_edu', 1)->comment('1 :Non Formal/tidak Lulus SD/MI, 2:SD/MI/Sederajat, 3:SMP/MTs/Sederajat, 4:SMA/MA/Sederajat, 5:D3, 6:D4, 7:S1, 8:S2, 9:S3')->nullable();
            $table->char('income', 1)->comment('1:<=  Rp 500.000, 2:Rp 500.001 - Rp 1.000.000, 3:Rp 1.000.001 - Rp 2.000.000, 4:Rp 2.000.001 - Rp 3.000.000, 5:Rp 3.000.001 - Rp 5.000.000, 6:> Rp 5.000.000')->nullable();
            $table->char('job', 1)->comment('a: Tidak Bekerja, b: Pensiunan/Almarhum, c: PNS (selain poin 05 dan 10), d: TNI/Polisi, e: Guru/Dosen, f: Pegawai Swasta, g: Pengusaha/Wiraswasta, h: Pengacara/Hakim/Jaksa/Notaris, i: Seniman/Pelukis/Artis/Sejenis, j: Dokter/Bidan/Perawat, k: Pilot/Pramugari, l: Pedagang, m: Petani/Peternak, n: Nelayan, o: Buruh (Tani/Pabrik/Bangunan), p: Sopir/Masinis/Kondektur, q: Politikus, r: Lainnya')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardians');
    }
}