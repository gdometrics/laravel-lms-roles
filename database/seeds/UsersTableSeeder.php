<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker            = Faker::create();

        $sezer = User::create([
            'name'       => 'Sezer Tunca',
            'email'      => 'sezertunca@gmail.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $sezer2 = User::create([
            'name'       => 'Mike Norris',
            'email'      => 'sezer@getwhiteboard.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $sezer->actAs('teacher');
        $sezer2->actAs('student');


         //create 20 users
        foreach (range(1, 20) as $index) 
        {
            $user_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $user_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $user_updated_at);
            $user_name = $faker->firstName;
            $name = ($user_name.' '.$faker->lastName);
            $email = $faker->companyEmail;
            $temp_user = User::create([
                'name'       => $name,
                'email'      => $email,
                'password'   => bcrypt('password'),
                'created_at' => $user_created_at,
                'updated_at' => $user_updated_at
            ]);

            $temp_user->actAs('student');
        }

    }

}
