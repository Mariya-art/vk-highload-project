<?php

namespace App\Http\Controllers;


use App\Services\MemcacheServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class MemcachedController extends Controller implements MemcachedControllerInterface
{
    public function __construct(private MemcacheServiceInterface $memcacheService)
    {
        $this->memcacheService = $memcacheService;
    }

    public function index(): JsonResponse
    {
        $keys = ['int', 'string',  'array'];

        $values = [
            'int' => 101,
            'string' => 'it is my string',
            'array' => [25, 11, 22, 38]
        ];

        $this->memcacheService->setValues($values);

        return new JsonResponse(iterator_to_array($this->memcacheService->getValues($keys)));
    }
}
