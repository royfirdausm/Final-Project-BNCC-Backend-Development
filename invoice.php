php artisan make:migration create_invoices_table
// database/migrations/xxxx_xx_xx_create_invoices_table.php
Schema::create('invoices', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->decimal('total', 8, 2);
    $table->timestamps();
});
