<?php


namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait CustomExcection
{
    public function myCustomErrors($request, $exception) {
        if($exception instanceof ModelNotFoundException) {
            return response()->json(['error' => 'Modelo não encontrado'], 400);
        }

        if($exception instanceof NotFoundHttpException) {
            return response()->json(['error' => 'Rota não encontrada'], 400);
        }

        if($exception instanceof QueryException) {
            return response()->json(['error' => 'Algum campo faltando'], 400);
        }

        return parent::render($request, $exception);
    }
}
