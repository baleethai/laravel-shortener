<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            $randomLink = Str::random(6);
            $link = 'https://' . $randomLink . '.com';
            Link::create([
                'member_id' => 1,
                'name' => $link,
                'long_url' => $link,
                'short_url' => $randomLink,
                'total_click' => rand(1111,9999),
            ]);
        }
    }
}
