<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TrainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'John Doe',
            'email' => 'john.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/1.png')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 1,
        ],
        [
            'name' => 'Jane Doe',
            'email' => 'jane.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/2.jpg')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 0,
        ],
        [
            'name' => 'Amber Doe',
            'email' => 'amber.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/3.jpg')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 0,
        ],
        [
            'name' => 'Lucy Doe',
            'email' => 'lucy.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/4.png')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 0,
        ],
        [
            'name' => 'Gaya Doe',
            'email' => 'gaya.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/5.png')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 0,
        ],
        [
            'name' => 'Billy Doe',
            'email' => 'billy.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/6.jpg')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 0,
        ],
        ['name' => 'Mike Doe',
            'email' => 'mike.doe@email.com',
            'image' => Storage::disk('public')->putFile('trainers', new File('storage/app/public/avatars/7.jpg')),
            'password' => bcrypt('12345678'),
            'isAdmin' => 0,
        ],
    ]);
    }
}