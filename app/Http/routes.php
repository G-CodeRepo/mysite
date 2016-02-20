<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* ORIGINAL TEST PAGE */
/*
Route::get('/', function () {
    return view('welcome');
});
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
use App\User;
use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

    // this is a custom test page
    /*
    Route::get('/test', function() {
      return view('/test/test');
    });
    */

    // my website pages. note that these contain anonymous functions
    // but these should point to controllers instead
    /*
    Route::get('/', function () {
    	return view('index');			// option 1 back to home page
    });
    */


    /************************************ MY SITE *********************************************************************/
    Route::get('/index', function () {
    	return view('index');			// option 2 back to home page
    });

    Route::get('gallery', function () {
    	return view('gallery');
    });
    Route::get('coming_soon', function () {
    	return view('coming_soon');
    });

     // raw database test for the 'users' table
     Route::get('user', function () {
     	//$results = DB::select('select * from users where id = ?', array(1));
          $results = DB::select('select * from users');
 	     echo '<pre>'; print_r($results); echo '</pre>';
     	//return App\User::all();
     });

    /************************************ MY SITE *********************************************************************/



    // CRUD TEST for 'tasks' table
    /**
     * Show Task Dashboard
     */
  
     Route::get('/', function () {
          $tasks = Task::orderBy('created_at', 'asc')->get();

          return view('tasks', [
               'tasks' => $tasks,
          ]);
     });


     Route::get('foo', function() {
          $user = App\User::find(1);  // this is for a single user
          echo $user->name ."'s tasks<br />";
          echo $user->email . "<br />";
          echo $user->password . "<br />";

          if(isset($user)) {
            $i = 1;
            foreach ($user->tasks as $task) { // note that 'tasks' called function
              echo $i . ") " . $task->name . "<br />";
              $i++;
            }
          } else {
              echo "no entries in the user table";
          }
     });

    /************************************ TASK ************************************************************************/

     // USER TASKS
     /**
     * Add New Task
     */
     /*
     Route::post('/task', function(Request $request){
          // return an array of possible errors
          
          $validator = Validator::make($request->all(), [
             'name' => 'required|max:255',
          ]);

          // an error was found
          if ($validator->fails()) {
             return redirect('/')
                 ->withInput()
                 ->withErrors($validator);
          }

          // Create The Task (The Task Object or 'Eloquent Model')
          $task = new Task;
          $task->name = $request->name;
          $task->save();
          return redirect('/');
     });
     */

    /**
     * Delete Task
     */
    /*
    Route::delete('/task/{task}', function(Task $task){
          $task->delete();
          return redirect('/');
    });
    */



    // HOME PAGE
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');


    // TASK
    Route::get('/tasks', 'TaskController@index'); // note 'tasks' is plural
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');


    // AUTHENTICATION
    Route::auth();
    Route::get('/home', 'HomeController@index');

    /************************************ TASK ************************************************************************/


    /************************************ GALLERY *********************************************************************/
    Route::get('/gallery/list', 'GalleryController@viewGalleryList');
    Route::post('/gallery/save', 'GalleryController@saveGallery');
    Route::get('/gallery/view/{id}', 'GalleryController@viewGalleryPics');
    Route::post('/image/do-upload', 'GalleryController@doImageUpload');



    /************************************ GALLERY *********************************************************************/


});
?>
