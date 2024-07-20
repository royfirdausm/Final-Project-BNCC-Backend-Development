php artisan make:migration create_toys_table
// database/migrations/xxxx_xx_xx_create_toys_table.php
Schema::create('toys', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->string('image')->nullable();
    $table->timestamps();
});
