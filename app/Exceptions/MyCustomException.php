<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class MyCustomException extends Exception
{
    public function report() {
        Log::info('Meu log do report', ['context' => 'my context']);
    }

    public function render()
    {
        dd('my custom exception');
    }
}
