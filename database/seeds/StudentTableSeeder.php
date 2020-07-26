<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $new_student = new Student();
            $new_student->nome = $faker->word;
            $new_student->cognome = $faker->word;
            $new_student->matricola = $faker->randomFloat(11);
            $new_student->updated_at = $faker->dateTime($max = 'now', $timezone = null);
            $new_student->created_at = $faker->dateTime($max = 'now', $timezone = null);
            $new_student->save();
        }
    }
}
