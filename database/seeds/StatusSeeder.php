<?php

use Illuminate\Database\Seeder;

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
            \App\Status::create([
                'description' => $status
            ]);
        }
    }
}
