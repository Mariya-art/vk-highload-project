<?php

namespace App\Http\Controllers;

use App\Services\RedisServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class RedisController extends Controller implements RedisControllerInterface
{
    public function __construct(private RedisServiceInterface $redisService)
    {
        $this->redisService = $redisService;
    }

    public function index(): JsonResponse
    {
        $keys = ['int', 'string',  'array'];

        $values = [
            'int' => 101,
            'string' => 'it is my string',
            'array' => [25, 11, 22, 38]
        ];

        $this->redisService->setValues($values);
        return new JsonResponse(iterator_to_array($this->redisService->getValues($keys)));
    }
}
