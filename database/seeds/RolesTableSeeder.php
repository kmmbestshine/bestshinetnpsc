<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin' => '["5","6","49","7","9","4","50","18","17","15","14","45","46","19","24","25","47","20","29","30","54","55","33","41","44","38","39","40"]',
                'teacher' => '["2","6","85","18","17","46","24","41","87"]',
                'student' => '["6","15","85","17","46","23","28","41","87"]',
                'parent' => NULL,
                'accountant' => '["28","62","30","39","82"]',
                'librarian' => '["8","46","54","55","41","40"]',
                'driver' => NULL,
                'school_id' => 2,
                'created_at' => '2020-05-25 11:42:00',
                'updated_at' => '2018-11-27 01:30:04',
            ),
            1 => 
            array (
                'id' => 2,
                'admin' => '["43","6","85","17","16","46","20","28","41","39","82","83"]',
                'teacher' => '["2","6","85","18","17","46","24","41","87"]',
                'student' => '["6","15","85","17","46","23","28","41","87"]',
                'parent' => '["2","80"]',
                'accountant' => '["28","62","30","39","82"]',
                'librarian' => '["8","46","54","55","41","40"]',
                'driver' => '["5","43","49","7","51","17","15","12","14","45","46","19","24","23","28","29","30","55","33","44"]',
                'school_id' => 1,
                'created_at' => '2020-05-25 11:42:01',
                'updated_at' => '2020-05-24 11:49:05',
            ),
            2 => 
            array (
                'id' => 3,
                'admin' => '["43","6","85","17","16","46","20","28","41","39","82","83"]',
                'teacher' => '["2","6","85","18","17","46","24","41","87"]',
                'student' => '["6","15","85","17","46","23","28","41","87"]',
                'parent' => NULL,
                'accountant' => '["28","62","30","39","82"]',
                'librarian' => '["8","46","54","55","41","40"]',
                'driver' => '["85"]',
                'school_id' => 6,
                'created_at' => '2020-05-25 11:42:02',
                'updated_at' => '2020-05-21 12:55:16',
            ),
            3 => 
            array (
                'id' => 4,
                'admin' => '["43","6","85","17","16","46","20","28","41","39","82","83"]',
                'teacher' => '["2","6","85","18","17","46","24","41","87"]',
                'student' => '["6","15","85","17","46","23","28","41","87"]',
                'parent' => '["2","85","15"]',
                'accountant' => '["28","62","30","39","82"]',
                'librarian' => '["8","46","54","55","41","40"]',
                'driver' => NULL,
                'school_id' => 8,
                'created_at' => '2020-04-30 17:39:45',
                'updated_at' => '2020-05-24 18:27:42',
            ),
            4 => 
            array (
                'id' => 6,
                'admin' => '["43","6","85","17","16","46","20","28","41","39","82","83"]',
                'teacher' => '["2","6","85","18","17","46","24","41","87"]',
                'student' => '["6","15","85","17","46","23","28","41","87"]',
                'parent' => NULL,
                'accountant' => '["28","62","30","39","82"]',
                'librarian' => '["8","46","54","55","41","40"]',
                'driver' => NULL,
                'school_id' => 13,
                'created_at' => '2020-05-25 11:41:14',
                'updated_at' => '2020-05-25 11:41:14',
            ),
        ));
        
        
    }
}