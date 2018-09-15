<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConvertDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = DB::table("504")->get();
        foreach ($words as $key => $value) {
            if ($key != 0)
                \App\Words::create([
                    "pronunciation" => $value->COL2,
                    "examples" => $value->COL3,
                    "word" => $value->COL4,
                    "definition" => $value->COL5,
                    "persian" => $value->COL6
                ]);
            echo $key . "\n";
        }
        echo "finish\n";
    }
}
