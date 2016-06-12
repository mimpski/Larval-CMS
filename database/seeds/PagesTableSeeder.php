<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'id' => '1',
            'section' => 'homepage',
            'title' => 'Homepage',
            'body' => 'Homepage copy lashfdkjfhdsaljkfabfdsakjfhdasfjhdsjfh',
            'description' => 'Homepage description lkdsfsdjhfasdjkhfsadljf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pages')->insert([
            'id' => '2',
            'section' => 'about',
            'title' => 'About',
            'body' => 'About page copy lashfdkjfhdsaljkfabfdsakjfhdasfjhdsjfh',
            'description' => 'About Page description lkdsfsdjhfasdjkhfsadljf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('pages')->insert([
            'id' => '3',
            'section' => 'contact',
            'title' => 'Contact',
            'body' => 'Contact page copy lashfdkjfhdsaljkfabfdsakjfhdasfjhdsjfh',
            'description' => 'Contact Page description lkdsfsdjhfasdjkhfsadljf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
