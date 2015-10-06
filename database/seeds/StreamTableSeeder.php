<?php
use App\Stream;
use Illuminate\Database\Seeder;

class StreamTableSeeder extends Seeder
{
    public function run()
    {
        Stream::create([
           'streaming' => 0
        ]);
    }
}