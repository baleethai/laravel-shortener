<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = new Member();
        $member->name = 'Tum';
        $member->email = 'tum@x.com';
        $member->password = bcrypt('1111');
        $member->save();
    }
}
