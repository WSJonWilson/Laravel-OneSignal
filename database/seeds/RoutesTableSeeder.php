<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route = new \App\Route();
        $route->route_name= 'East A';
        $route->courier_name= 'Jon';
        $route->save();

        $route = new \App\Route();
        $route->route_name= 'East B';
        $route->courier_name= 'Andy';
        $route->save();

        $route = new \App\Route();
        $route->route_name= 'East C';
        $route->courier_name= 'Shastri';
        $route->save();
    }
}
