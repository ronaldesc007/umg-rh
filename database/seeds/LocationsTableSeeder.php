<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class RoleTableSeeder.
 */
class LocationsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('locations_master');
        $countries = [
            [
                'master_location_name' => 'Guatemala',
                'master_location_enabled' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'master_location_name' => 'El Salvador',
                'master_location_enabled' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'master_location_name' => 'Honduras',
                'master_location_enabled' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'master_location_name' => 'Costa Rica',
                'master_location_enabled' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'master_location_name' => 'Nicaragua',
                'master_location_enabled' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'master_location_name' => 'Panama',
                'master_location_enabled' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('locations_master')->insert($countries);

        $this->truncate('locations');
        $cities = [
            [
                'location_name' => 'Alta Verapaz', //1
                'location_enabled' => 1,
                'm_location' => 1, //Guatemala
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Baja Verapaz', //2
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Chimaltenango', //3
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Chiquimula', //4
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'El Progreso', //5
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Escuintla', //6
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Guatemala', //7
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Huehuetenango', //8
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Izabal', //9
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Jalapa', //10
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Jutiapa', //11
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Petén', //12
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Quetzaltenango', //13
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Quiché',  //14
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Retalhuleu', //15
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Sacatepéquez', //16
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'San Marcos', //17
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Santa Rosa', //18
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Sololá',  //19
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Suchitepéquez', //20
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Totonicapán', //21
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'location_name' => 'Zacapa', //22
                'location_enabled' => 1,
                'm_location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('locations')->insert($cities);

        $this->truncate('locations_sub');
        $provinces = [
            [
                'sub_location_name' => 'Cobán',
                'sub_location_enabled' => 1,
                'location' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Salama',
                'sub_location_enabled' => 1,
                'location' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Chimaltenango',
                'sub_location_enabled' => 1,
                'location' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Chiquimula',
                'sub_location_enabled' => 1,
                'location' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Guastatoya',
                'sub_location_enabled' => 1,
                'location' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Escuintla',
                'sub_location_enabled' => 1,
                'location' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Ciudad de Guatemala',
                'sub_location_enabled' => 1,
                'location' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Huehuetenango',
                'sub_location_enabled' => 1,
                'location' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Puerto Barrios',
                'sub_location_enabled' => 1,
                'location' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Jalapa',
                'sub_location_enabled' => 1,
                'location' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Jutiapa',
                'sub_location_enabled' => 1,
                'location' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Flores',
                'sub_location_enabled' => 1,
                'location' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Quetzaltenango',
                'sub_location_enabled' => 1,
                'location' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Santa Cruz del Quiché',
                'sub_location_enabled' => 1,
                'location' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Retalhuleu',
                'sub_location_enabled' => 1,
                'location' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Antigua Guatemala',
                'sub_location_enabled' => 1,
                'location' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'San Marcos',
                'sub_location_enabled' => 1,
                'location' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Cuilapa',
                'sub_location_enabled' => 1,
                'location' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Sololá',
                'sub_location_enabled' => 1,
                'location' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Mazatenango',
                'sub_location_enabled' => 1,
                'location' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Totonicapán',
                'sub_location_enabled' => 1,
                'location' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sub_location_name' => 'Zacapa',
                'sub_location_enabled' => 1,
                'location' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('locations_sub')->insert($provinces);

        $this->enableForeignKeys();
    }
}
