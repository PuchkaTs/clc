<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Appitventures\Phpgmaps\Facades\Phpgmaps as Gmaps;
use App\Place;
use Illuminate\Support\Facades\Redirect;
use Request;

class PlacesController extends Controller {

	public function show($id)
	{
        $place = Place::find($id);
        $config['center'] = '47.920447, 106.917053';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);

        $marker = array();
        if($place->xloc == 0){
            $marker['position'] = '47.920447, 106.917053';
        } else {
            $position = (string) $place->xloc . ", " . (string) $place->yloc;
            $marker['position'] = $position;
        }
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateInputs(event.latLng.lat(), event.latLng.lng());';
        Gmaps::add_marker($marker);
        $map = Gmaps::create_map();

        return view('pages.placeId')->with(compact('place', 'map'));
	}

    public function update_coords($id){
        $place = Place::find($id);
        $place->xloc = floatval(Request::input('xloc'));
        $place->yloc = floatval(Request::input('yloc'));
        $place->save();
        return Redirect::back();
    }

    public function edit_project_by_id($id)
    {
        $project = Project::with('image', 'features')->find($id);
        $config['center'] = '47.920447, 106.917053';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);

        $marker = array();
        if($project->xloc == 0){
            $marker['position'] = '47.920447, 106.917053';
        } else {
            $position = (string) $project->xloc . ", " . (string) $project->yloc;
            $marker['position'] = $position;
        }
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateInputs(event.latLng.lat(), event.latLng.lng());';
        Gmaps::add_marker($marker);
        $map = Gmaps::create_map();

        return view('pages.project_edit')->with(compact('project', 'map'));
    }

    public function update_coords_project($id){
        $project = Project::find($id);
        $project->xloc = floatval(Request::input('xloc'));
        $project->yloc = floatval(Request::input('yloc'));
        $project->save();
        return Redirect::back();
    }
}
