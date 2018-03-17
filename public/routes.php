Route::get('/', function()
{
    return User::all();
});