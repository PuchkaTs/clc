<?php namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use App\News;
use App\Place;
use App\Video;
use Appitventures\Phpgmaps\Facades\Phpgmaps as Gmaps;
use App\Project;
use Illuminate\Support\Facades\Redirect;
use Request;

class PagesController extends Controller {


    private  $map;

    function __construct()
    {
        $config['center'] = '47.909876, 106.917516';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);
        $places = Place::with('type')->get();

        foreach($places as $place){
            $marker = array();
            $position = (string) $place->xloc . ", " . (string) $place->yloc;
            $marker['position'] = $position;
            $marker['draggable'] = false;
            $marker['animation'] = 'DROP';
            $marker['title'] = $place->name;
            $marker['infowindow_content'] ="<p>$place->name</p>";
            $marker['icon'] = asset("uploads/icon/" . $place->type->icon_link);
            Gmaps::add_marker($marker);
        }
        Request::is('available') ? $projects = Project::with('image')->where('available', '=', '1')->get() : $projects = Project::with('image')->get();
        foreach($projects as $project){
            $marker = array();
            $position = (string) $project->xloc . ", " . (string) $project->yloc;
            $marker['position'] = $position;
            $marker['draggable'] = false;
            $marker['animation'] = 'DROP';
            $marker['title'] = $project->title;

            Request::is('portfolio/' . $project->id) ? $marker['icon'] = $marker['icon'] = asset("uploads/icon/house_red.png") :
            $marker['icon'] = $marker['icon'] = asset("uploads/icon/house.png");

            if($project->image()->first()){
                $image = '/uploads/projects/430x200/' . $project->image()->first()->image;} else {$image ='';}

            $marker['infowindow_content'] =
                '<div id="content">'.
                '<h1><a href="' .
                route('project_path', $project->id) .
                 '">' .
                $project->title .
                '</a></h1>'.
                '<p><a href="' .
                route('project_path', $project->id) .
                '">' .
                $project->shorten(50) .
                '</a></p>'.
                '<a href="' .
                route('project_path', $project->id) .
                '">' .
                '<img src="'.
                $image.
                '" width="432" height="200">'.
                '</a></div>';
            Gmaps::add_marker($marker);
        }
        $this->map = Gmaps::create_map();
    }

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

        $projects = Project::with('image')->limit(8)->get();
        $news = News::with('image')->limit(3)->get();


        $body = 'body goes here';
        $header = 'Header goes here';
        if ($content = Content::whereTag('Home')->first())
        {
            $body = $content->body;
            $header = $content->header;

        }
        $map = $this->map;
        $videos = Video::wherePin(true)->get();
        return view('pages.home')->with(compact('projects', 'map', 'body', 'header', 'news', 'banners', 'videos'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function portfolio()
	{
        $map = $this->map;
        $title = 'Portfolio';
        $projects = Project::latest()->paginate(8);

        return view('pages.portfolio')->with(compact('projects', 'title', 'map'));
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

        $map = $this->map;

        return view('pages.projectId')->with(compact('project', 'map'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function available()
	{
        $map = $this->map;
        $title = 'Available Properties';
        $projects = Project::where('available', '=', '1')->latest()->paginate(8);

        return view('pages.portfolio')->with(compact('projects', 'title', 'map'));
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
