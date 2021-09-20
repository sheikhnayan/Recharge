<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Balance;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Balance::create([
            'type' => 'ding',
            'balance' => 0
        ]);

        Balance::create([
            'type' => 'domestic',
            'balance' => 0
        ]);
    }
}
