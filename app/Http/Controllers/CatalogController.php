<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CatalogtRequest;
use App\Models\Vehicle;

use \DB;

class CatalogController extends Controller
{
    public function allCatalog() {
    	// $vehicle = new Vehicle;
    	// dd($vehicle->all());
    	// dd(Vehicle::all());


    	// $vehicle =Vehicle::all()
    	// ->join('model', 'vehicle.model_id', 'model.id')
    	// ->get();
    	// return view('catalog', ['data' => Vehicle::all()]);
    	// dd(Vehicle::get());
    	// return Vehicle::get();
    	// return Vehicle::toSql();

    	return view('catalog', ['data' => DB::table('vehicles')
    		->select('vehicles.id', 'features.name_ru as body', 'producers.id as mark_id', 'producers.name as mark', 'models.id as model_id', 'models.name as model',
			'engines.type_ru as engine', 'vehicles.engine_volume_value as volume', 'vehicles.power',
			'transmissions.type_ru as transmission', 'drives.type_ru as drive',
			'colors.name_ru as color',
			'colors.name_en as color_en',
			'vehicles.year',
			'vehicles.price',
			'vehicles.discount_id',
			'discounts.name_ru as discount',
			'stores.name_ru as store',
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
    		->get()]);
    }


    public function catalogByPurpose($purposeId) {

    	return view('catalog', ['data' => DB::table('vehicles')
    		->select('vehicles.id', 'features.name_ru as body', 'producers.id as mark_id', 'producers.name as mark', 'models.id as model_id', 'models.name as model',
			'engines.type_ru as engine', 'vehicles.engine_volume_value as volume', 'vehicles.power',
			'transmissions.type_ru as transmission', 'drives.type_ru as drive',
			'colors.name_ru as color',
			'colors.name_en as color_en',
			'vehicles.year',
			'vehicles.price',
			'vehicles.discount_id',
			'discounts.name_ru as discount',
			'stores.name_ru as store',
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
			->where('features.purpose_id', '=', $purposeId)
    		->get()
    	]);
    }

    public function catalogByFeature($featureId) {

    	return view('catalog', ['data' => DB::table('vehicles')
    		->select('vehicles.id', 'features.name_ru as body', 'producers.id as mark_id', 'producers.name as mark', 'models.id as model_id', 'models.name as model',
			'engines.type_ru as engine', 'vehicles.engine_volume_value as volume', 'vehicles.power',
			'transmissions.type_ru as transmission', 'drives.type_ru as drive',
			'colors.name_ru as color',
			'colors.name_en as color_en',
			'vehicles.year',
			'vehicles.price',
			'vehicles.discount_id',
			'discounts.name_ru as discount',
			'stores.name_ru as store',
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
			->where('features.id', '=', $featureId)
    		->get()]);
    }

    public function productLine() {

    	return view('home', ['data' => DB::table('vehicles')
    		->select('vehicles.id', 'features.name_ru as body', 'producers.id as mark_id', 'producers.name as mark', 'models.id as model_id', 'models.name as model',
			'colors.name_en as color_en',
			'vehicles.price',
			'vehicles.discount_id',
			'discounts.name_ru as discount',
			'stores.name_ru as store')
    		->join('models', 'vehicles.model_id', '=', 'models.id')
    		->join('features', 'models.feature_id', '=', 'features.id')
			->join('producers', 'models.producer_id', '=', 'producers.id')
			->join('colors', 'vehicles.color_id', '=', 'colors.id')
			->join('discounts', 'vehicles.discount_id', '=', 'discounts.id')
			->join('stores', 'vehicles.store_id', '=', 'stores.id')
			->join('purposes', 'purposes.id', '=', 'features.purpose_id')
			->where('purposes.id', '=', 1)
			->orderBy(DB::raw('RAND()'))
        	->take(4)
    		->get()]);
	}
}