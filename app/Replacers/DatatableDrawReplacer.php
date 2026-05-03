<?php

namespace App\Replacers;

use Illuminate\Support\Str;
use Spatie\ResponseCache\Replacers\Replacer;
use Symfony\Component\HttpFoundation\Response;

class DatatableDrawReplacer implements Replacer
{
    protected string $replacementString = '<laravel-responsecache-datatabledraw-here>';

    public function prepareResponseToCache(Response $response): void
    {
        if (!$response->getContent()) {
            return;
        }

        $response->setContent(preg_replace(
            '/("draw":)\d+/',
            $this->replacementString,
            $response->getContent()
        ));
    }

    public function replaceInCachedResponse(Response $response): void
    {
        if (!$response->getContent()) {
            return;
        }

        $response->setContent(str_replace(
            $this->replacementString,
            '"draw":' . request()->input('draw'),
            $response->getContent()
        ));
    }
}
