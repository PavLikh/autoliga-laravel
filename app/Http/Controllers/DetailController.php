<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use \DB;

class DetailController extends Controller
{
    public function showOneVehicle($vehicleId) {

    	$vehicle = new Vehicle;
    	return view('detail', ['data' => $vehicle
    		->select('vehicles.id', 'features.name_ru as body',
    		'producers.id as mark_id', 'producers.name as mark', 'models.id as model_id', 'models.name as model',
			'engines.type_ru as engine', 'vehicles.engine_volume_value as volume',
			'vehicles.power',
			'transmissions.type_ru as transmission',
			'drives.type_ru as drive',
			'colors.name_ru as color',
			'colors.name_en as color_en',
			'vehicles.year',
			'vehicles.price',
			'vehicles.discount_id',
			'discounts.name_ru as discount',
			'stores.name_ru as store',
			'stores.id as store_id',
			'vehicles.editable')
    		->join('models', 'vehicles.model_id', '=', 'models.id')
    		->join('features', 'models.feature_id', '=', 'features.id')
			->join('purposes', 'features.purpose_id', '=', 'purposes.id')
			->join('producers', 'models.producer_id', '=', 'producers.id')
			->join('engines', 'vehicles.engine_id', '=', 'engines.id')
			->join('transmissions', 'vehicles.transmission_id', '=', 'transmissions.id')
			->join('drives', 'vehicles.drive_id', '=', 'drives.id')
			->join('colors', 'vehicles.color_id', '=', 'colors.id')
			->join('discounts', 'vehicles.discount_id', '=', 'discounts.id')
			->join('stores', 'vehicles.store_id', '=', 'stores.id')
    		->find($vehicleId)]);
    }
}
