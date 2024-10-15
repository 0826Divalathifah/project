<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudayaTable extends Migration
{
    public function up()
    {
        Schema::create('budaya', function (Blueprint $table) {
            $table->id('id_budaya'); // Menambahkan kolom id_budaya sebagai primary key
            $table->enum('kategori_budaya', ['Kesenian', 'Adat Istiadat']);
            $table->string('nama_budaya');
            $table->string('alamat');
            $table->decimal('harga', 10, 2);
            $table->string('youtube_link')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('maps_link')->nullable();
            $table->text('deskripsi');
            $table->string('foto_card')->nullable();
            $table->json('foto_kebudayaan')->nullable(); // Menyimpan beberapa foto lain dalam format JSON
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('budaya');
    }
}
