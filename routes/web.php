<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayrollController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/payrolls/run', [PayrollController::class, 'create'])->name('payrolls.create');
Route::post('/payrolls/run', [PayrollController::class, 'process'])->name('payrolls.process');
Route::get('/payslip/{id}', [PayrollController::class, 'downloadPayslip'])->name('payslip.download');
