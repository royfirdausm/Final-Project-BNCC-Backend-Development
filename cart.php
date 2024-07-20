php artisan make:migration create_carts_table
// database/migrations/xxxx_xx_xx_create_carts_table.php
Schema::create('carts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('toy_id')->constrained()->onDelete('cascade');
    $table->integer('quantity');
    $table->timestamps();
});
