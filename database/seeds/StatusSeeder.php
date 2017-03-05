<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $availableStatus = [
            'pending',
            'published',
            'deleted',
            'blocked'
        ];
        
        foreach($availableStatus as $status){
            Status::create([
                'description' => $status
            ]);
        }
    }
}
