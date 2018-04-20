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
        DB::table('employees')->delete();

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

        $this->command->info('employees table seeded!');
    }
}
