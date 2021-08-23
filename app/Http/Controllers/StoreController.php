<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use \DB;

class StoreController extends Controller
{

    public function showOneStore($storeId) {

    	$store = new Store;
    	return view('stores', ['data' => $store
    		->select('stores.id as id',
    		'stores.name_ru as name_ru',
			'stores.address_ru as address',
			'stores.coordinates as coordinates',
			'regions.name_ru as region')
			->join('regions', 'stores.region_id', '=', 'regions.id')
    		->find($storeId)]);
    }
}
