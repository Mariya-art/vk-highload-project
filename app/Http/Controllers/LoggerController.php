<?php

namespace App\Http\Controllers;

use App\Handlers\LoggerHandler;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class LoggerController implements LoggerControllerInterface
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(LoggerHandler $logger)
    {
        $this->logger = $logger;
    }

    public function index(Request $request):void
    {
        $this->logger->handle($request);
    }
}