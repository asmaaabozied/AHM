<?php

use App\Http\Controllers\TypecourtController;
use Illuminate\Support\Facades\Route;



Route::redirect('/', '/login');
Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/clear', function() {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');

        Artisan::call('config:cache');
        return "Cache is cleared";
    })->name('clear');

    Route::get('/home', 'HomeController@index')->name('home');



    //search

    Route::post('search', 'HomeController@search')->name('search');

    // clients
    Route::resource('client', 'ClientController');

    //users
    Route::resource('users', 'UserController');


    // cases
    Route::resource('case', 'CaseController')->parameter('case', 'lawyerCase');

    Route::resource('Typecases', 'TypeCaseController');


    // payments
    Route::resource('payment', 'PaymentController');

    // documents
    Route::resource('document', 'DocumentController');

    // EXpenses
    Route::resource('expense', 'ExpenseController');

    Route::resource('expensecases', 'ExpenseCaseController');

    Route::resource('expensepayment', 'ExpensepaymentController');


    Route::resource('lawyers', 'LawyerController');

    Route::resource('courts', 'CourtController');

    Route::resource('typecourts', 'TypecourtController');


    Route::resource('ssesiots', 'SsesiotController');

    Route::resource('stages', 'StageController');

    Route::resource('statements', 'StatementController');

    Route::resource('decisions', 'DecisionController');

    Route::resource('typessesiots', 'TypessesiotController');

    Route::resource('lawercases', 'LawercaseController');

    Route::resource('statuscases', 'StatuscaseController');

    Route::resource('roles', 'RoleController');

    Route::resource('reports', 'ReportController');


    Route::get('seessiots/{typecourt}', [TypecourtController::class, 'getSeessiots'])->name('getSeessiots');

});
