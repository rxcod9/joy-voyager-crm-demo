<?php

namespace App\Hasher;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\ResponseCache\CacheProfiles\CacheProfile;
use Spatie\ResponseCache\Hasher\DefaultHasher as HasherDefaultHasher;

class DefaultHasher extends HasherDefaultHasher
{
    public function __construct(
        protected CacheProfile $cacheProfile,
    ) {
        parent::__construct($cacheProfile);
    }

    public function getHashFor(Request $request): string
    {
        if ($request->isMethod('get')) {
            return parent::getHashFor($request);
        }

        // $request->routeIs([
        //     '*.post-ajax',
        //     '*.relations-table-post-ajax',
        // ])

        $cacheNameSuffix = $this->getCacheNameSuffix($request);
        $payloadSuffix = md5(json_encode(Arr::except($request->all(), 'draw')));

        return 'responsecache-' . md5(
            "{$request->getHost()}-{$this->getNormalizedRequestUri($request)}-{$request->getMethod()}/$cacheNameSuffix/$payloadSuffix"
        );
    }
}
