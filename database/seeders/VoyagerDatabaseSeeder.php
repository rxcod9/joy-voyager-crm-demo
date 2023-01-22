<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use Joy\VoyagerBreadSample\Database\Seeders\VoyagerDatabaseSeeder as SampleVoyagerDatabaseSeeder;
use Joy\VoyagerUserSettings\Database\Seeders\UserSettingsTableSeeder;
use Joy\VoyagerUserSettings\Database\Seeders\UserSettingsPermissionsTableSeeder;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
            UserSettingsPermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UserSettingsTableSeeder::class,
            SampleVoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerDataSettings\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerDataTypeSettings\Database\Seeders\VoyagerDatabaseSeeder::class,
        ]);
    }
}
