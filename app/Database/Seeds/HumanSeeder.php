<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class HumanSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //     'nama' => 'Ari Purnama',
        //     'email'    => 'arie@theempire.com',
        //     'alamat'    => 'Jl.chokro No.26',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now(),
        //     ],
        //     [
        //     'nama' => 'Antum',
        //     'email'    => 'antum@theempire.com',
        //     'alamat'    => 'Jl.minoto No.23',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now(),
        //     ],
        //     [
        //     'nama' => 'shima',
        //     'email'    => 'shima@theempire.com',
        //     'alamat'    => 'Jl.shima No.11',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now(),
        //     ],

        // ];

        $faker = \Faker\Factory::create('id_ID');
        for($i = 0 ; $i < 50 ; $i++)
        {
        $data =[
                'nama' => $faker->name,
                'email'    => $faker->email,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
        ];

        $this->db->table('human')->insert($data);
        }

        // Simple Queries
        // $this->db->query('INSERT INTO human (nama, email, alamat, created_at, updated_at) VALUES(:nama:, :email:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('human')->insertBatch($data);
    }
}