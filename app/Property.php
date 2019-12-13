<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {
    protected $fillable = [
        'seller_id',
        'agent_id',
        'agent_confirmation_id',
        'status',
        'transaction_type',
        'purchase_id',
        'photos',
        'address',
        'postcode',
        'year_of_construction',
        'living_area',
        'rooms_num',
        'bathrooms_num',
        'toilets_num',
        'bedrooms_num',
        'has_basements',
        'has_pool',
        'energy_label',
        'insulation',
        'heating',
        'hot_water',
        'boiler',
        'cadastre_id',
        'cadastre_registered_area',
        'cadastre_ownership',
        'has_shed',
        'plot_size',
        'price',
        'has_garage',
        'garage_type',
        'garage_cap',
        'nearby_places',
        'brochure_id',
        'description',
        'page_visits'
    ];
}
