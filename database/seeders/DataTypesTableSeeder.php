<?php

namespace Joy\VoyagerBreadPipeline\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'pipelines');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pipelines',
                'display_name_singular' => __('joy-voyager-bread-pipeline::seeders.data_types.pipeline.singular'),
                'display_name_plural'   => __('joy-voyager-bread-pipeline::seeders.data_types.pipeline.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadPipeline\\Models\\Pipeline',
                // 'policy_name'           => 'Joy\\VoyagerBreadPipeline\\Policies\\PipelinePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadPipeline\\Http\\Controllers\\VoyagerBreadPipelineController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
