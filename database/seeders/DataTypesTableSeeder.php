<?php

namespace Joy\VoyagerBreadReport\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'reports');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'reports',
                'display_name_singular' => __('joy-voyager-bread-report::seeders.data_types.report.singular'),
                'display_name_plural'   => __('joy-voyager-bread-report::seeders.data_types.report.plural'),
                'icon'                  => 'voyager-bread voyager-bread-report voyager-file-text',
                'model_name'            => 'Joy\\VoyagerBreadReport\\Models\\Report',
                // 'policy_name'           => 'Joy\\VoyagerBreadReport\\Policies\\ReportPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadReport\\Http\\Controllers\\VoyagerBreadReportController',
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
