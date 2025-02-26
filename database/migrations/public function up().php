public function up()
{
Schema::create('appliances', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('brand');
$table->decimal('price', 8, 2);
$table->integer('warranty'); // in months
$table->timestamps();
});
}
