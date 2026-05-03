<?php

namespace App\CacheProfiles;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\ResponseCache\CacheProfiles\CacheAllSuccessfulGetRequests as ParentProfilesCacheAllSuccessfulGetRequests;
use Symfony\Component\HttpFoundation\Response;

class CacheAllSuccessfulGetRequests extends ParentProfilesCacheAllSuccessfulGetRequests
{
    public function shouldCacheRequest(Request $request): bool
    {
        if (parent::shouldCacheRequest($request)) {
            return true;
        }

        if ($this->isRunningInConsole()) {
            return false;
        }

        return $request->isMethod('get') || $request->routeIs([
            '*.post-ajax',
            '*.relations-table-post-ajax',
        ]);
    }

    public function shouldCacheResponse(Response $response): bool
    {
        if (! $this->hasCacheableResponseCode($response)) {
            return false;
        }

        if (! $this->hasCacheableContentType($response)) {
            return false;
        }

        return true;
    }

    public function hasCacheableResponseCode(Response $response): bool
    {
        if ($response->isSuccessful()) {
            return true;
        }

        if ($response->isRedirection()) {
            return true;
        }

        return false;
    }

    public function hasCacheableContentType(Response $response): bool
    {
        $contentType = $response->headers->get('Content-Type', '');

        if (str_starts_with($contentType, 'text/')) {
            return true;
        }

        if (Str::contains($contentType, ['/json', '+json'])) {
            return true;
        }

        return false;
    }
}
