<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = array(
            array(
                'project' => 'Spotify',
                'author' => 'Raffaele',
                'description' => 'The aim of this project is to recreate the official page of Spotify.',
                'date' => '2023-10-24'
            ),
            array(
                'project' => 'Zoom',
                'author' => 'Raffaele',
                'description' => 'The aim of this project is to recreate the official layout of Zoom, an app where people can meet and talk.',
                'date' => '2023-10-12'
            ),
            array(
                'project' => 'Boolando',
                'author' => 'Raffaele',
                'description' => 'The aim of this project is to recreate the official page of Zalando.',
                'date' => '2023-10-11'
            ));

            foreach ($portfolios as $portfolio) {
                $newPortfolio = new Portfolio();
                $newPortfolio-> project=$portfolio['project'];
                $newPortfolio-> author=$portfolio['author'];
                $newPortfolio-> description=$portfolio['description'];
                $newPortfolio-> date=$portfolio['date'];
                $newPortfolio->save();
            }
    }
    }
