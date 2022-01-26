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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard')->middleware('auth');

// Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//     Route::get('/', 'HomeController@index')->name('user_dashboard');
// });

// Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//     Route::get('/', 'HomeController@index')->name('admin_dashboard');
// });

Route::group(['middleware' => 'auth'], function () {
	Route::get('add_funds', function () {
		return view('pages.funds.add_funds');
	})->name('add_funds');

	Route::get('pending_transactions', function () {
		return view('pages.funds.pending');
	})->name('pending_transactions');

	Route::get('confirmed_transactions', function () {
		return view('pages.funds.confirmed');
	})->name('confirmed_transactions');

	Route::get('expired_transactions', function () {
		return view('pages.funds.expired');
	})->name('expired_transactions');

	Route::get('make_investment', function () {
		return view('pages.funds.investment');
	})->name('make_investment');

	Route::get('invest_others', function () {
		return view('pages.funds.invest_others');
	})->name('invest_others');

	Route::get('wallet_transfer', function () {
		return view('pages.funds.transfer');
	})->name('wallet_transfer');

	Route::get('wallet_withdrawal', function () {
		return view('pages.funds.withdrawal');
	})->name('wallet_withdrawal');

	// Route::get('affiliate_promotional', function () {
	// 	return view('pages.affiliate.promotional');
	// })->name('affiliate_promotional');

	Route::get('affiliate_presentaion', function () {
		return view('pages.affiliate.presentation');
	})->name('affiliate_presentaion');

	// team
	Route::get('direct_referral', function () {
		return view('pages.team.referral');
	})->name('direct_referral');

	Route::get('team_view', function () {
		return view('pages.team.t_view');
	})->name('team_view');

	Route::get('downline_investment', function () {
		return view('pages.team.downline');
	})->name('downline_investment');

	// income
	Route::get('direct_income', function () {
		return view('pages.income.direct');
	})->name('direct_income');

	Route::get('roi_income', function () {
		return view('pages.income.roi');
	})->name('roi_income');

	Route::get('binary_income', function () {
		return view('pages.income.binary');
	})->name('binary_income');

	Route::get('coordinator_income', function () {
		return view('pages.income.coordinator');
	})->name('coordinator_income');

	Route::get('elite_income', function () {
		return view('pages.income.elite');
	})->name('elite_income');

	//withdrawal
	Route::get('withdrawal_balance', function () {
		return view('pages.withdrawal.balance');
	})->name('withdrawal_balance');

	Route::get('withdrawal_report', function () {
		return view('pages.withdrawal.report');
	})->name('withdrawal_report');

	//reports
	Route::get('inv_r', function () {
		return view('pages.reports.investment_r');
	})->name('inv_r');

	Route::get('transfer_r', function () {
		return view('pages.reports.transfer_r');
	})->name('transfer_r');

	Route::get('wallet_r', function () {
		return view('pages.reports.wallet_r');
	})->name('wallet_r');
	
	// dd
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

