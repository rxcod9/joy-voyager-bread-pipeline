<?php

namespace Joy\VoyagerBreadPipeline\Database\Seeders;

use Joy\VoyagerBreadPipeline\Models\Pipeline;
use Illuminate\Database\Seeder;

class PipelinesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Pipeline::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Pipeline::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Pipeline ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Pipeline Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
