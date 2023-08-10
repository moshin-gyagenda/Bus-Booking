<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\PaymentController;


Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    
    
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login');
    Route::post('user-login', 'login')->name('user-login');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'create')->name('register');
    
});

Route::group(['middleware' =>['auth:sanctum']], function() {
    //Dashboard routes
    Route::controller(DashboardController::class)->group(function() {
        Route::get('dashboard', 'index')->name('dashboard');
 
    });

    //Ticket routes
    Route::controller(TicketController::class)->group(function() {
        Route::get('view-tickets', 'index')->name('view-tickets');
        Route::get('add-ticket', 'create')->name('add-ticket');
        Route::post('add-tickets','store')->name('add-tickets');
        Route::get('reciept', 'reciept')->name('reciept');
        Route::get('/tickets/{id}/receipt', 'show')->name('tickets');
 
    });

    //Bus routes
    Route::controller(BusController::class)->group(function() {
        Route::get('add-bus', 'index')->name('add-bus');
        Route::post('add-buses', 'store')->name('add-buses');
        Route::get('view-buses', 'create')->name('view-buses');
 
    });

    //Route routes
    Route::controller(RouteController::class)->group(function() {
        Route::get('add-route', 'index')->name('add-route');
        Route::post('add-routes', 'store')->name('add-routes');
        Route::get('view-routes', 'create')->name('view-routes');
        // Route::delete('routes/{route}', 'destroy')->name('routes.destroy');
 
    });

    //Payment routes
    Route::controller(PaymentController::class)->group(function() {
        Route::get('pay-for-ticket', 'index')->name('pay-for-ticket');
        
 
    });

    
});

Route::post('/download-pdf', function(Request $request) {
    $pdf = PDF::loadHTML($request->input('content'));
    return $pdf->download('receipt.pdf');
})->name('download-pdf');
