<?php

namespace App\Providers;

use App\Http\Middleware\VoyagerAdminMiddleware;
use App\Models\Category;
use App\Models\DataRow;
use App\Models\DataSetting;
use App\Models\DataSettingType;
use App\Models\DataType;
use App\Models\DataTypeSetting;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Translation;
use App\Models\User;
use App\Models\UserSetting;
use App\Models\UserSettingType;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router, Dispatcher $event)
    {
        \URL::forceRootUrl(\Config::get('app.url'));
        // And this if you wanna handle https URL scheme
        // It's not usefull for http://www.example.com, it's just to make it more independant from the constant value
        if (\Str::contains(\Config::get('app.url'), 'https://')) {
            \URL::forceScheme('https');
            //use \URL:forceSchema('https') if you use laravel < 5.4
        }

        // Override User model
        Voyager::useModel('Category', Category::class);
        Voyager::useModel('DataRow', DataRow::class);
        Voyager::useModel('DataType', DataType::class);
        Voyager::useModel('Menu', Menu::class);
        Voyager::useModel('MenuItem', MenuItem::class);
        Voyager::useModel('Page', Page::class);
        Voyager::useModel('Permission', Permission::class);
        Voyager::useModel('Post', Post::class);
        Voyager::useModel('Role', Role::class);
        Voyager::useModel('Setting', Setting::class);
        Voyager::useModel('User', User::class);
        Voyager::useModel('Translation', Translation::class);
        Voyager::useModel('UserSettingType', UserSettingType::class);
        Voyager::useModel('UserSetting', UserSetting::class);
        Voyager::useModel('DataTypeSetting', DataTypeSetting::class);
        Voyager::useModel('DataSettingType', DataSettingType::class);
        Voyager::useModel('DataSetting', DataSetting::class);

        $router->aliasMiddleware('admin.user', VoyagerAdminMiddleware::class);
    }
}
