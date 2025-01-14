<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageSystemController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.layout.layout');
// });

//สร้างเมนู
Route::get('/PagesManageSystem', [ManageSystemController::class, 'PagesManageSystem'])->name('PagesManageSystem');
Route::post('/PagesManageSystem/CreateNewSystem', [ManageSystemController::class, 'CreateNewSystem'])->name('CreateNewSystem');
Route::get('/PagesManageSystemMenu', [ManageSystemController::class, 'PagesManageSystemMenu'])->name('PagesManageSystemMenu');
Route::get('/PagesManageSystemMenu/ManageSystemMenuDetails/{id}', [ManageSystemController::class, 'ManageSystemMenuDetails'])->name('ManageSystemMenuDetails');
Route::post('/CreateNewSystemMenuDetails/{id}', [ManageSystemController::class, 'CreateNewSystemMenuDetails'])->name('CreateNewSystemMenuDetails');

//adminDashbord
Route::get('/WelcomeAdmin', [AdminController::class, 'WelcomeAdmin'])->name('WelcomeAdmin');


