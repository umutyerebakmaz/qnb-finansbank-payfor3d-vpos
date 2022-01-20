![qnb logo](https://github.com/umutyerebakmaz/qnb-finansbank-payfor3d-vpos/blob/main/images/qnb-logo.jpg?raw=true)
# QNB Finansbank (PayFor3D) VPOS for Laravel 8


## Installation

Place the sample files in the same places as your project

## Supported Methods
* **purchase** : 3d secure verification and purchase
* **coming soon** : ....
## Basic Usages

#### Purchase Action:

```php
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
```

browse *samples* folder for more samples.

## Support

If you think there is a mistake, you can contribute to my improvement by using the issues. [GitHub issue tracker](https://github.com/umutyerebakmaz/qnb-finansbank-payfor3d-vpos/issues),
Or send me a pull request using a new branch.

## License

The MIT License (MIT). Please see [License File](https://github.com/umutyerebakmaz/qnb-finansbank-payfor3d-vpos/blob/main/LICENCE) for more information.