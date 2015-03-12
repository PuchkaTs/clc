<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Appitventures\Phpgmaps\Facades\Phpgmaps as Gmaps;

class ContactsController extends Controller {

    private $contactForm;

    function __construct()
    {
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /contacts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.ask');
	}

    public function contact()
    {
        $config['center'] = '47.920447, 106.917053';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = '47.920447, 106.917053';
        Gmaps::add_marker($marker);
        $map = Gmaps::create_map();
//        echo "<html><head>".$map['js']."</head><body>".$map['html']."</body></html>";

        return view('pages.contact_us')->withMap($map);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /contacts
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::get();

        $this->contactForm->validate($input);

        Message::create($input);

        Flash::message('Бидэнтэй холбогдож байгаад баярлалаа. Таньд удахгүй хариу мэдэгдье!');

        Mail::send('emails.question', $input, function($message)
        {
            $message->to('myagmardorj_b24@yahoo.com')->subject('Ask Ganbaatar');
        });
        Mail::send('emails.question', $input, function($message)
        {
            $message->to('Baagiidagwa@yahoo.com')->subject('Ask Ganbaatar');
        });

        return Redirect::back();
	}


}