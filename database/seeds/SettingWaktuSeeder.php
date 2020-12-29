<?php

use Illuminate\Database\Seeder;

class SettingWaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting_waktus')->insert([
            'waktu_awal'=> '2020-01-02 00:00:00',
            'waktu_akhir'=> '2020-01-20 00:00:00',
            'created_at'=> null,
            'updated_at'=>null
        ]);
    }
}
