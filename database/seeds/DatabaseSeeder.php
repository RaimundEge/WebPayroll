<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wp_users')->delete();
        factory(App\User::class, 5)->create();

        DB::table('wp_employees')->delete();

        App\Employee::create([  'name' => 'John Doe', 
                                'street' => '123 Main Street', 
                                'city' => 'Anytown, USA', 
                                'salary' => '0',
                                'routingnumber' => '',
                                'accountnumber' => '',
                            ]);
        App\Employee::create([  'name' => 'Susan Doe', 
                                'street' => '123 Main Street', 
                                'city' => 'Anytown, USA', 
                                'salary' => '0',
                                'routingnumber' => '',
                                'accountnumber' => '',
                            ]);
        App\Employee::create([  'name' => 'Hasso Doe', 
                                'street' => '123 Main Street', 
                                'city' => 'Anytown, USA', 
                                'salary' => '0',
                                'routingnumber' => '',
                                'accountnumber' => '',
                            ]);
        App\Employee::create([  'name' => 'Max Dwyer', 
                                'street' => '123 Water Avenue', 
                                'city' => 'New York, USA', 
                                'salary' => '0'
                            ]);

        factory(App\Employee::class, 20)->create();

        DB::table('wp_projects')->delete();
        factory(App\Project::class, 20)->create();

        $this->command->info('DB tables seeded!');
    }
}
