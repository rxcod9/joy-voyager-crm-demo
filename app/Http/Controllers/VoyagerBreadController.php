<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Joy\VoyagerCore\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;
use Spatie\ResponseCache\Facades\ResponseCache;

class VoyagerBreadController extends BaseVoyagerBreadController
{
    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      CacheClearAll
    //
    //****************************************

    public function cacheClearAll(Request $request)
    {
        // Check permission
        $this->authorize('browse_admin');

        ResponseCache::clear();

        return redirect()->back()->with([
            'message'    => __('generic.cache_cleared_successfully'),
            'alert-type' => 'success',
        ]);
    }
}
