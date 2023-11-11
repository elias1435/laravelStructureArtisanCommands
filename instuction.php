// Step 1: Create a New Laravel Application
laravel new YourAppName

// Step 2: Generate a New Controller (Navigate to your project's directory:)
cd YourAppName

// Use the Artisan command to generate a new controller named 'UserController':
php artisan make:controller UserController

// Step 3: Create a Route (Open the routes/web.php file in your text editor and define a route that maps to a function in the UserController. Add the following code:)
use App\Http\Controllers\UserController;
Route::get('/hello', [UserController::class, 'hello']);

//Step 4: Implement the Controller (Open the app/Http/Controllers/UserController.php file and add the following code to the hello method:)
public function hello() {
    return 'Hello, Laravel!';
}

// Step 5: Start the Development Server
php artisan serve

// Step 6: Test the Route (Open your web browser and navigate to http://127.0.0.1:8000/hello. You should see the message 'Hello, Laravel!' displayed on the page.)
// output
Hello, Laravel!