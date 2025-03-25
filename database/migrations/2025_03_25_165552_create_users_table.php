<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID de usuario, clave primaria
            $table->string('name'); // Nombre del usuario
            $table->string('email')->unique(); // Correo electrónico único
            $table->timestamp('email_verified_at')->nullable(); // Fecha de verificación del correo (opcional)
            $table->string('password'); // Contraseña cifrada
            $table->rememberToken(); // Token para "recordarme" (opcional, útil en la autenticación)
            $table->timestamps(); // Fechas de creación y actualización
        });
    }

   
     
    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
