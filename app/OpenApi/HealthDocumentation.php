<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

#[OA\Info(
    title: 'API',
    version: '1.0.0'
)]
#[OA\Server(
    url: 'http://127.0.0.1:8000',
    description: 'Local'
)]
#[OA\PathItem(path: '/api/health')]
class HealthDocumentation
{
    #[OA\Get(
        path: '/api/health',
        tags: ['Health'],
        summary: 'Health check',
        responses: [
            new OA\Response(response: 200, description: 'OK'),
        ]
    )]
    public function health(): void
    {
    }
}
