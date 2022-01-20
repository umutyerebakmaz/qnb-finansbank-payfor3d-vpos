<?php

use App\Http\Controllers\PosController;

Route::get('payfor3DPay', [PosController::class, 'payfor3DPay'])->name('payfor3DPay');
Route::post('payfor3DPayPayment', [PosController::class, 'payfor3DPayPayment'])->name('payfor3DPayPayment');
