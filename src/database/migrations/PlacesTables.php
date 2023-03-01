<?php

namespace Corals\Modules\Places\database\migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlacesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedInteger('created_by')->nullable()->index();
            $table->unsignedInteger('updated_by')->nullable()->index();

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('places_imports', function (Blueprint $table) {
            $table->string('title');
            $table->increments('id');
            $table->string('keyword')->nullable();
            $table->integer('image_count');
            $table->unsignedInteger('type_id')->index();
            $table->unsignedInteger('category_id')->index();
            $table->unsignedInteger('location_id')->index();


            $table->integer('max_result_pages');
            $table->integer('radius');
            $table->enum(
                'status',
                ['canceled', 'pending', 'in_progress', 'completed', 'failed']
            )->default('pending')->nullable();
            $table->text('notes')->nullable();

            $table->text('properties')->nullable();

            $table->unsignedInteger('created_by')->nullable()->index();
            $table->unsignedInteger('updated_by')->nullable()->index();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('places_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('utility_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('location_id')->references('id')->on('utility_locations')->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::create('places_import_listing', function (Blueprint $table) {
            $table->unsignedInteger('listing_id');
            $table->foreign('listing_id')->references('id')->on('directory_listings')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('import_id');
            $table->foreign('import_id')->references('id')->on('places_imports')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['listing_id', 'import_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places_import_listing');
        Schema::dropIfExists('places_imports');
        Schema::dropIfExists('places_types');
    }
}
