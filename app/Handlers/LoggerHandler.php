<?php

namespace App\Handlers;

use App\Services\BubbleSortService;
use App\Services\QuickSortService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggerHandler implements LoggerHandlerInterface
{
    public function handle(Request $request):void
    {
        $array = [1, 2, 3, 5, 6, 8, 1, 12, 15, 18, 1, 2, 3, 4, 6, 13, 15, 17];
        date_default_timezone_set('Europe/Moscow');

        $time_start = date('Y-m-d H:i:s');
        Log::info('Сортировка пузырьком началась в ' . $time_start);
        app(BubbleSortService::class)->sort($array);

        $time_end = date('Y-m-d H:i:s');
        Log::info('Закончилась сортировка пузырьком в ' . $time_end);
        Log::debug('Использовано памяти: ' . memory_get_usage() . ' байт');

        $time_start = date('Y-m-d H:i:s');
        Log::info('Быстрая сортировка началась в ' . $time_start);       
        app(QuickSortService::class)->sort($array);

        $time_end = date('Y-m-d H:i:s');
        Log::info('Закончилась быстрая сортировка в ' . $time_end);
        Log::debug('Использовано памяти: ' . memory_get_usage() . ' байт');
    }
}