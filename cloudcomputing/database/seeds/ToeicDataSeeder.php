<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ToeicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dbInsert = DB::table('ToeicData');
      $content = File::get(storage_path('data/FP_result_noSW_v4.txt'));
      $line = preg_split("/\n/",$content);
      foreach ($line as $key => $value) {
        $words = preg_split("/\t/",$value);
        $dbInsert->insert([
          'words' => $words[0],
          'all' => (int)$words[1],
          'aa' => (int)$words[2],
          'ar' => (int)$words[3],
          'as' => (int)$words[4],
          'be' => (int)$words[5],
          'ge' => (int)$words[6],
          'sc' => (int)$words[7],
          'ss' => (int)$words[8],
          'created_at'=>Carbon::now(),
          'updated_at'=>Carbon::now(),
        ]);
      }
    }
}
