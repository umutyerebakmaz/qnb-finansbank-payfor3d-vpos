<?php

namespace App\Http\Controllers;

use App\Classes\Payfor3D;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PosController extends Controller
{
    public function payfor3DPay(): view
    {
        $faker = Container::getInstance()->make(Generator::class);
        $payfor3D = new Payfor3D();
        $payfor3D->setOrderId('PP_'.$faker->numerify('###-###-###')); // must be unique in each transaction
        $payfor3D->setPurchAmount('19.79');
        return view('pages.pos.payfor3DPay', compact('payfor3D'));
    }

    public function payfor3DPayPayment(Request $request): view
    {
        return view('pages.pos.payfor3DPayPayment');
    }
}
