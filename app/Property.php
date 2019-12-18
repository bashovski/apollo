<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Property extends Model {

    //use Searchable;

    protected $fillable = [
        'seller_id',
        'agent_id',
        'property_creatable_id',
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

    public function searchableAs() {
        return 'properties_index';
    }

    public function validateCreatePropertyData() {

    }

    /**
     *
     * Updates created property instance for further updating before completing
     * the creation process of a property. Unique URL/Creatable ID will be provided.
     *
     * @param \App\Property $property
     *
     * @return \App\Property
     */
    public function updateCreatedProperty(Property $property) {

        $property->update([
            $property
        ]);
        return $property;
    }



    public static function createNewProperty($data) {
        return Property::create($data);
    }
}
