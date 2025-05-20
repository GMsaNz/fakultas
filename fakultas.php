<?php

// database/migrations/xxxx_xx_xx_create_fakultas_table.php

public function up()
{
    Schema::create('fakultas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_fakultas');
        $table->string('kode_fakultas')->unique();
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}
