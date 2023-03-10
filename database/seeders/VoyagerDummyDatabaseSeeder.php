<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Joy\VoyagerBreadSample\Database\Seeders\VoyagerDummyDatabaseSeeder as SampleVoyagerDummyDatabaseSeeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            PagesTableSeeder::class,
            TranslationsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SampleVoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerDataSettings\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerDataTypeSettings\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
        ]);
    }
}
