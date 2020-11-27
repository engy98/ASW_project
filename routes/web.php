<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sign-up');
});

Route::post('register',function (\Illuminate\Http\Request $request){

    $user=new \App\Models\User($request->all());
    $user->save();

  return redirect('profile/'.$user->id);
})->name('register');

Route::get('profile/{user}',function (\App\Models\User $user){
   return view('profile',compact('user'));
});
Route::prefix('admin')
    ->group(function (){
        Route::resource('templates',\App\Http\Controllers\TemplateController::class);

    });