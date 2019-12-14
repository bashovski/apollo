<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller {
    public function index(string $filter, string $query) {

        $properties = null;
        switch($filter) {
            case 'search_query': {

                break;
            }
            default: {

            }
        }

        return response()->json([
            'success' => true,
            'properties' => $properties
        ]);
    }
}
