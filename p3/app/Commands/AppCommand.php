<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
        'name' => 'varchar(255)',
        'tries' => 'int',
        'timestamp' => 'timestamp',
        'number' => 'int',
        ]);
    }

    public function seed() 
    {
        $faker = Factory::create();
        
        for ($i=20; $i>20; $i--) {
            $this->app->db()->insert('rounds', [
                'name' => $faker->name(),
                'tries' => rand(1, 42),
                'number' => rand(1, 100),
                'timestamp' => $faker->dateTimeBetween('-20 days', 'now')->format('Y-M-d G:i:s')
            ]);
        }
    }
}