<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('academic_employees')->insert([
            'ACUsername' => "paris",
            'ACPassword' => bcrypt("123"),
            'Role' => "Admin",
            'ACFullname'=>"Paraskevas",
            'ACDepartment'=>"Psychology",
            'ACEmail' => 'paris@gmail.com',
        ]);

        DB::table('academic_employees')->insert([
            'ACUsername' => "zoe",
            'ACPassword' => bcrypt("123"),
            'Role' => "Admin",
            'ACFullname'=>"ZoeXygalata",
            'ACDepartment'=>"",
            'ACEmail' => 'zoe@gmail.com',
        ]);


        DB::table('academic_employees')->insert([
            'ACUsername' => "michalis",
            'ACPassword' => bcrypt("123"),
            'Role' => "Supervisor",
            'ACFullname'=>"Michael",
            'ACDepartment'=>"Computer Science",
            'ACEmail' => 'michalis@gmail.com',
        ]);

        DB::table('academic_employees')->insert([
            'ACUsername' => "nikos",
            'ACPassword' => bcrypt("123"),
            'Role' => "Supervisor",
            'ACFullname'=>"Nikolaos",
            'ACDepartment'=>"Computer Science",
            'ACEmail' => 'nikos@gmail.com',
        ]);

        DB::table('academic_employees')->insert([
            'ACUsername' => "chris",
            'ACPassword' => bcrypt("123"),
            'Role' => "Director",
            'ACFullname'=>"Christos",
            'ACDepartment'=>"Computer Science",
            'ACEmail' => 'chris@gmail.com',
        ]);

        DB::table('academic_employees')->insert([
            'ACUsername' => "katarina",
            'ACPassword' => bcrypt("123"),
            'Role' => "Supervisor",
            'ACFullname'=>"Katarina",
            'ACDepartment'=>"Business",
            'ACEmail' => 'katarina@gmail.com',
        ]);

  //////////////////////////
        DB::table('students')->insert([
            'SUsername' => "stud_michalis",
            'SEmail' => 'studmichalis@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student michalis",
            'RN'=>"1",
            'SDepartment'=>"Psychology"
        ]);

        DB::table('students')->insert([
            'SUsername' => "stud_paris",
            'SEmail' => 'studparis94@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student paris",
            'RN'=>"2",
            'SDepartment'=>"Business"
        ]);

        DB::table('students')->insert([
            'SUsername' => "stud_nikos",
            'SEmail' => 'studnikos@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student nikos",
            'RN'=>"3",
            'SDepartment'=>"Computer Science"
        ]);

        DB::table('students')->insert([
            'SUsername' => "stud_katarina",
            'SEmail' => 'studkatarina@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student katarina",
            'RN'=>"4",
            'SDepartment'=>"Business"
        ]);

        DB::table('students')->insert([
            'SUsername' => "stud_chris",
            'SEmail' => 'studchris@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student chris",
            'RN'=>"5",
            'SDepartment'=>"Business"
        ]);

        DB::table('connections')->insert([
            'SFullname' => "student chris",
            'ACFullname' => 'Katarina',
        ]);

        DB::table('connections')->insert([
            'SFullname' => "student michalis ",
            'ACFullname' => 'Michael',
        ]);

        DB::table('connections')->insert([
            'SFullname' => "student katarina",
            'ACFullname' => 'Nikolaos',
        ]);


        DB::table('alumnis')->insert([
            'SUsername' => "stud_katarina",
            'SEmail' => 'studkatarina@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student katarina",
            'RN'=>"4",
            'SDepartment'=>"Business"
        ]);

        DB::table('alumnis')->insert([
            'SUsername' => "stud_chris",
            'SEmail' => 'studchris@gmail.com',
            'SPassword' => bcrypt("123"),
            'SFullname'=>"student chris",
            'RN'=>"5",
            'SDepartment'=>"Business"
        ]);







    }
}
