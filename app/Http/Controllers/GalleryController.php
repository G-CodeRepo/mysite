<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;                // required to use the 'Request' object for POST
use App\Gallery;                            // required to use the 'Gallery' model
use Illuminate\Support\Facades\Validator;   // required to use the 'Validator' object
class GalleryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');          // allow only users that are logged in
    }

    /**
     * view the list of galleries (not the pics)
     */
    public function viewGalleryList() {
        // get all gallery entries from the gallery database which is used by the Gallery model
        $galleries = Gallery::all();

        // pass to the gallery view the database entries that was returned by the Gallery model
        return view('gallery.gallery')->with('galleries', $galleries);
    }

    /**
     * save gallery in the database
     */
    public function saveGallery(Request $request) { // POST request requires the 'Request' object as parameter
        // validate the request throught the validation rules
        // 1st argument: the request (specifically, all request)
        // 2nd argument is the validation rules array based on the name of the user input and piped with other rules
        // 3rd argument is optionally used to override the default error message that already comes with Validator
        $validator = Validator::make($request->all(), ['gallery_name' => 'required|min:3']);

        // take action if validation fails
        // this will redirect user back to the gallery list but will include the errors and the user's previous input
        // use the $errors variable on the html page so that you can output using a foreach loop
        // use the html <input value="{{ old('gallery_name') }}"> to catch the previous input for display
        if($validator->fails()) {
            return redirect('gallery/list')
                ->withErrors($validator)            // include errors
                ->withInput();                      // include user's previous input
        }

        // request validation has passed the validation rules at this point, now proceed with saving gallery
        $gallery = new Gallery;

        // save a new gallery
        $gallery->name = $request->input('gallery_name'); // 'gallery_name' is the name of the html input field
        $gallery->created_by = 1;   // hard coded for now
        $gallery->published = 1;    // hard coded for now
        $gallery->save();           // save the user's input into the database

        return redirect()->back();  // redirect user back to the previous page (page where the user saves a gallery)
    }

    /**
     * view pics for a particular gallery
     */
    public function viewGalleryPics($id) {  // a gallery is specific to a user id
        $gallery = Gallery::findOrFail($id);    // should catch the exception and redirect to proper page

        return view('gallery.gallery-view')->with('gallery', $gallery);
    }

    /**
     * upload an image into a particular gallery
     */
    public function doImageUpload(Request $request) { // POST request requires the 'Request' object as parameter

    }

}

?>