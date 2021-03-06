<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'displayed_name' => 'student',
                'route_name' => 'student.index',
                'parent' => 3,
                'sort_order' => 2,
                'status' => 1,
                'icon' => 'dripicons-user',
                'created_at' => '2020-04-30 03:05:19',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            1 => 
            array (
                'id' => 3,
                'displayed_name' => 'users',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 1,
                'status' => 1,
                'icon' => 'dripicons-user',
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            2 => 
            array (
                'id' => 4,
                'displayed_name' => 'admin',
                'route_name' => '',
                'parent' => 3,
                'sort_order' => 90,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            3 => 
            array (
                'id' => 5,
                'displayed_name' => 'result',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-blog',
                'created_at' => '2020-05-18 21:04:38',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            4 => 
            array (
                'id' => 6,
                'displayed_name' => 'teacher',
                'route_name' => 'teacher.index',
                'parent' => 3,
                'sort_order' => 30,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            5 => 
            array (
                'id' => 7,
                'displayed_name' => 'parent',
                'route_name' => 'parent.index',
                'parent' => 3,
                'sort_order' => 50,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-07 21:46:50',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            6 => 
            array (
                'id' => 8,
                'displayed_name' => 'librarian',
                'route_name' => 'librarian.index',
                'parent' => 3,
                'sort_order' => 70,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            7 => 
            array (
                'id' => 9,
                'displayed_name' => 'accountant',
                'route_name' => 'accountant.index',
                'parent' => 3,
                'sort_order' => 60,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            8 => 
            array (
                'id' => 10,
                'displayed_name' => 'driver',
                'route_name' => NULL,
                'parent' => 3,
                'sort_order' => 80,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-05 08:28:48',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            9 => 
            array (
                'id' => 11,
                'displayed_name' => 'academic',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-store',
                'created_at' => '2019-01-30 06:57:16',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            10 => 
            array (
                'id' => 12,
                'displayed_name' => 'class',
                'route_name' => 'class.index',
                'parent' => 11,
                'sort_order' => 40,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            11 => 
            array (
                'id' => 13,
                'displayed_name' => 'section',
                'route_name' => NULL,
                'parent' => 11,
                'sort_order' => 50,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            12 => 
            array (
                'id' => 14,
                'displayed_name' => 'class_room',
                'route_name' => 'room.index',
                'parent' => 11,
                'sort_order' => 60,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            13 => 
            array (
                'id' => 15,
                'displayed_name' => 'syllabus',
                'route_name' => 'syllabus.index',
                'parent' => 11,
                'sort_order' => 30,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2019-01-16 19:16:55',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            14 => 
            array (
                'id' => 16,
                'displayed_name' => 'subject',
                'route_name' => 'subject.index',
                'parent' => 11,
                'sort_order' => 80,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            15 => 
            array (
                'id' => 17,
                'displayed_name' => 'class_timetable',
                'route_name' => 'routine.index',
                'parent' => 11,
                'sort_order' => 20,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-30 19:12:18',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            16 => 
            array (
                'id' => 18,
                'displayed_name' => 'daily_attendance',
                'route_name' => 'daily_attendance.index',
                'parent' => 11,
                'sort_order' => 10,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            17 => 
            array (
                'id' => 19,
                'displayed_name' => 'noticeboard',
                'route_name' => NULL,
                'parent' => 11,
                'sort_order' => 110,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            18 => 
            array (
                'id' => 20,
                'displayed_name' => 'promotion',
                'route_name' => 'student.promotion',
                'parent' => 21,
                'sort_order' => 70,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-07 21:46:35',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            19 => 
            array (
                'id' => 21,
                'displayed_name' => 'exam',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-to-do',
                'created_at' => '2019-01-30 06:59:13',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            20 => 
            array (
                'id' => 22,
                'displayed_name' => 'exam',
                'route_name' => 'exam.index',
                'parent' => 21,
                'sort_order' => 20,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            21 => 
            array (
                'id' => 23,
                'displayed_name' => 'grades',
                'route_name' => 'grade.index',
                'parent' => 21,
                'sort_order' => 30,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            22 => 
            array (
                'id' => 24,
                'displayed_name' => 'marks',
                'route_name' => 'mark.index',
                'parent' => 21,
                'sort_order' => 10,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2019-01-20 13:45:11',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            23 => 
            array (
                'id' => 25,
                'displayed_name' => 'tabulation_sheet',
                'route_name' => NULL,
                'parent' => 21,
                'sort_order' => 40,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-20 13:47:21',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            24 => 
            array (
                'id' => 27,
                'displayed_name' => 'accounting',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-suitcase',
                'created_at' => '2019-01-30 06:58:34',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            25 => 
            array (
                'id' => 28,
                'displayed_name' => 'student_fee_manager',
                'route_name' => 'invoice.index',
                'parent' => 27,
                'sort_order' => 10,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            26 => 
            array (
                'id' => 29,
                'displayed_name' => 'student_fee_report',
                'route_name' => NULL,
                'parent' => 27,
                'sort_order' => 20,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-17 06:44:11',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            27 => 
            array (
                'id' => 30,
                'displayed_name' => 'expense_manager',
                'route_name' => 'expense.index',
                'parent' => 27,
                'sort_order' => 40,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2019-01-19 08:38:15',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            28 => 
            array (
                'id' => 31,
                'displayed_name' => 'back_office',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-archive',
                'created_at' => '2019-01-30 06:55:31',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            29 => 
            array (
                'id' => 32,
                'displayed_name' => 'library',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 12,
                'status' => 1,
                'icon' => 'dripicons-blog',
                'created_at' => '2020-05-02 16:38:24',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            30 => 
            array (
                'id' => 33,
                'displayed_name' => 'transport',
                'route_name' => NULL,
                'parent' => 31,
                'sort_order' => 0,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-16 15:40:26',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            31 => 
            array (
                'id' => 34,
                'displayed_name' => 'hostel',
                'route_name' => NULL,
                'parent' => 31,
                'sort_order' => 0,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-16 15:40:29',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            32 => 
            array (
                'id' => 35,
                'displayed_name' => 'school_website',
                'route_name' => NULL,
                'parent' => 31,
                'sort_order' => 0,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-16 15:40:32',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            33 => 
            array (
                'id' => 36,
                'displayed_name' => 'settings',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-gear',
                'created_at' => '2020-05-01 20:17:31',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            34 => 
            array (
                'id' => 37,
                'displayed_name' => 'system_settings',
                'route_name' => 'system.settings',
                'parent' => 36,
                'sort_order' => 10,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-27 18:57:19',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            35 => 
            array (
                'id' => 38,
                'displayed_name' => 'sms_settings',
                'route_name' => 'sms.settings',
                'parent' => 36,
                'sort_order' => 40,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-27 18:58:55',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            36 => 
            array (
                'id' => 39,
                'displayed_name' => 'payments',
                'route_name' => 'payment.settings',
                'parent' => 36,
                'sort_order' => 20,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-05-16 07:29:12',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            37 => 
            array (
                'id' => 40,
                'displayed_name' => 'language_settings',
                'route_name' => 'language.index',
                'parent' => 36,
                'sort_order' => 30,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-05-01 20:12:38',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            38 => 
            array (
                'id' => 41,
                'displayed_name' => 'session_manager',
                'route_name' => 'session_manager.index',
                'parent' => 31,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            39 => 
            array (
                'id' => 42,
                'displayed_name' => 'department',
                'route_name' => 'department.index',
                'parent' => 11,
                'sort_order' => 70,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            40 => 
            array (
                'id' => 43,
                'displayed_name' => 'admission',
                'route_name' => 'student.create',
                'parent' => 3,
                'sort_order' => 20,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            41 => 
            array (
                'id' => 44,
                'displayed_name' => 'addon_manager',
                'route_name' => 'addon_manager.index',
                'parent' => 31,
                'sort_order' => 0,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-07 22:31:04',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            42 => 
            array (
                'id' => 45,
                'displayed_name' => 'assignment',
                'route_name' => NULL,
                'parent' => 11,
                'sort_order' => 90,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-16 14:45:09',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            43 => 
            array (
                'id' => 46,
                'displayed_name' => 'event_calender',
                'route_name' => 'event_calendar.index',
                'parent' => 11,
                'sort_order' => 100,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2019-01-21 09:51:47',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            44 => 
            array (
                'id' => 47,
                'displayed_name' => 'online_exam',
                'route_name' => NULL,
                'parent' => 21,
                'sort_order' => 50,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-20 13:48:01',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            45 => 
            array (
                'id' => 48,
                'displayed_name' => 'certificate',
                'route_name' => NULL,
                'parent' => 21,
                'sort_order' => 60,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-20 13:48:04',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            46 => 
            array (
                'id' => 49,
                'displayed_name' => 'teacher_permission',
                'route_name' => 'permission.index',
                'parent' => 3,
                'sort_order' => 40,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            47 => 
            array (
                'id' => 50,
                'displayed_name' => 'messaging',
                'route_name' => NULL,
                'parent' => 3,
                'sort_order' => 110,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            48 => 
            array (
                'id' => 51,
                'displayed_name' => 'role_permission',
                'route_name' => 'role.index',
                'parent' => 3,
                'sort_order' => 100,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-27 19:06:20',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            49 => 
            array (
                'id' => 53,
                'displayed_name' => 'form_builder',
                'route_name' => NULL,
                'parent' => 35,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            50 => 
            array (
                'id' => 54,
                'displayed_name' => 'book_list_manager',
                'route_name' => 'book.index',
                'parent' => 32,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            51 => 
            array (
                'id' => 55,
                'displayed_name' => 'book_issue_report',
                'route_name' => 'book_issue.index',
                'parent' => 32,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            52 => 
            array (
                'id' => 57,
                'displayed_name' => 'room_manager',
                'route_name' => NULL,
                'parent' => 34,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            53 => 
            array (
                'id' => 58,
                'displayed_name' => 'student_report',
                'route_name' => NULL,
                'parent' => 34,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            54 => 
            array (
                'id' => 59,
                'displayed_name' => 'school_manager',
                'route_name' => 'school.index',
                'parent' => 31,
                'sort_order' => 0,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2019-01-24 11:37:50',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            55 => 
            array (
                'id' => 60,
                'displayed_name' => 'ex',
                'route_name' => NULL,
                'parent' => NULL,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            56 => 
            array (
                'id' => 61,
                'displayed_name' => 'income_expense_category',
                'route_name' => NULL,
                'parent' => NULL,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            57 => 
            array (
                'id' => 62,
                'displayed_name' => 'expense_category',
                'route_name' => 'expense_category.index',
                'parent' => 27,
                'sort_order' => 30,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-16 04:44:46',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            58 => 
            array (
                'id' => 79,
                'displayed_name' => 'SMTP_settings',
                'route_name' => 'smtp.settings',
                'parent' => 36,
                'sort_order' => 50,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-27 18:57:12',
                'updated_at' => '2019-01-22 19:00:00',
            ),
            59 => 
            array (
                'id' => 80,
                'displayed_name' => 'school_settings',
                'route_name' => 'school.settings',
                'parent' => 36,
                'sort_order' => 11,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2019-01-23 19:00:00',
                'updated_at' => '2019-01-23 19:00:00',
            ),
            60 => 
            array (
                'id' => 81,
                'displayed_name' => 'pin_management',
                'route_name' => NULL,
                'parent' => 0,
                'sort_order' => 120,
                'status' => 1,
                'icon' => 'dripicons-pin',
                'created_at' => '2020-04-07 15:25:45',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            61 => 
            array (
                'id' => 82,
                'displayed_name' => 'list_pin',
                'route_name' => 'pin.index',
                'parent' => 81,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-05 08:38:02',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            62 => 
            array (
                'id' => 83,
                'displayed_name' => 'generate_pin',
                'route_name' => 'generate.pin',
                'parent' => 81,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-05 08:44:59',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            63 => 
            array (
                'id' => 84,
                'displayed_name' => 'schools',
                'route_name' => 'schools.index',
                'parent' => 11,
                'sort_order' => 0,
                'status' => 0,
                'icon' => NULL,
                'created_at' => '2020-04-27 18:59:43',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            64 => 
            array (
                'id' => 85,
                'displayed_name' => 'exam_result',
                'route_name' => 'report.index',
                'parent' => 5,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-29 19:15:32',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            65 => 
            array (
                'id' => 86,
                'displayed_name' => 'generate_result',
                'route_name' => 'generate',
                'parent' => 5,
                'sort_order' => 0,
                'status' => 1,
                'icon' => NULL,
                'created_at' => '2020-04-29 19:15:32',
                'updated_at' => '2020-04-16 04:44:46',
            ),
            66 => 
            array (
                'id' => 87,
                'displayed_name' => 'lessons',
                'route_name' => 'lesson.index',
                'parent' => 11,
                'sort_order' => 0,
                'status' => 1,
                'icon' => 'dripicons-store',
                'created_at' => '2020-05-25 19:16:50',
                'updated_at' => '2020-04-16 04:44:46',
            ),
        ));
        
        
    }
}