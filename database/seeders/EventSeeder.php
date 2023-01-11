<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sql = "
            INSERT INTO `events`(`attendees`, `nome_evento`, `data_evento`) VALUES ('ulysses200915@varen8.com,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 1', '2022-10-13 14:00'), ('dgipolga@edume.me,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00'), ('dgipolga@edume.me,ulysses200915@varen8.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00')
        ";
        DB::insert($sql);
    }
}
