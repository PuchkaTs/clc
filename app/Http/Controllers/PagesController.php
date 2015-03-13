<?php namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use App\News;
use Appitventures\Phpgmaps\Facades\Phpgmaps as Gmaps;
use App\Project;
use Illuminate\Support\Facades\Redirect;
use Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        if (Menu::whereSlug(Request::path())->count())
        {
            $banners = Menu::whereSlug(Request::path())->first()->banner;
        } else
        {
            $banners = false;
        }

        $projects = Project::with('image')->get();
        $news = News::with('image')->get();

        $config['center'] = '47.920447, 106.917053';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);
        foreach($projects as $project){
            $marker = array();
            $position = (string) $project->xloc . ", " . (string) $project->yloc;
            $marker['position'] = $position;
            $marker['draggable'] = false;
            $marker['animation'] = 'DROP';
            $marker['title'] = $project->title;
            if($project->image()->first()){
                $image = '/uploads/projects/430x200/' . $project->image()->first()->image;} else {$image ='';}

            $marker['infowindow_content'] =
                '<div id="content">'.
                    '<h1><a href="' .
                    'portfolio/' .
                    $project->id . '">' .
                    $project->title .
                    '</a></h1>'.
                    '<p> Description</p>'.
                    '<img src="'.
                    $image.
                    '" width="432" height="200" alt="Fairbanks, AK">'.
                '</div>';
            Gmaps::add_marker($marker);
        }


        $map = Gmaps::create_map();

        $body = 'body goes here';
        $header = 'Header goes here';
        if ($content = Content::whereTag('Home')->first())
        {
            $body = $content->body;
            $header = $content->header;

        }
        return view('pages.home')->with(compact('projects', 'map', 'body', 'header', 'news', 'banners'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function portfolio()
	{
        $projects = Project::latest()->paginate(8);

        return view('pages.portfolio')->with(compact('projects'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function show_news_by_id($id)
    {
        $news = News::find($id);
        $image = $news->image()->first();

        return view('pages.newsId')->with(compact('news', 'image'));
    }

    public function show_project_by_id($id)
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

        return view('pages.projectId')->with(compact('project', 'map'));
    }

    public function update_coords($id){
        $project = Project::find($id);
        $project->xloc = floatval(Request::input('xloc'));
        $project->yloc = floatval(Request::input('yloc'));
        $project->save();
        return Redirect::back();
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function available()
	{
        $projects = Project::where('available', '=', '1')->latest()->paginate(8);

        return view('pages.portfolio')->with(compact('projects'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function map()
	{
        return view('home');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function contact()
	{
        return view('home');
	}


}
