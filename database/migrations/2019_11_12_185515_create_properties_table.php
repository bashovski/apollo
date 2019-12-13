<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('agent_confirmation_id')->nullable();
            $table->string('status')->default('');
            $table->string('transaction_type')->nullable();
            $table->unsignedBigInteger('purchase_id')->nullable();
            $table->json('photos')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->unsignedSmallInteger('year_of_construction')->nullable();
            $table->unsignedInteger('living_area')->nullable();
            $table->unsignedSmallInteger('rooms_num')->nullable();
            $table->unsignedSmallInteger('bathrooms_num')->nullable();
            $table->unsignedSmallInteger('toilets_num')->nullable();
            $table->unsignedSmallInteger('bedrooms_num')->nullable();
            $table->boolean('has_basement')->nullable();
            $table->boolean('has_pool')->nullable();
            $table->char('energy_label')->nullable();
            $table->string('insulation')->nullable();
            $table->string('heating')->nullable();
            $table->string('hot_water')->nullable();
            $table->string('boiler')->nullable();
            $table->string('cadastre_id')->nullable();
            $table->string('cadastre_registered_area')->nullable();
            $table->string('cadastre_ownership')->nullable();
            $table->boolean('has_shed')->nullable();
            $table->unsignedInteger('plot_size')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->boolean('has_garage')->nullable();
            $table->string('garage_type')->nullable();
            $table->unsignedSmallInteger('garage_cap')->nullable();
            $table->json('nearby_places')->nullable();
            $table->string('brochure_id')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('page_visits')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
