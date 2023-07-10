<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new project();
            $project->title = $faker->sentence(3);
            $project->slug = $faker->slug();
            $project->excerpt = $faker->sentence(10);
            $project->description = $faker->sentence(50);
            $project->link = $faker->url();
            $project->image = $faker->imageUrl(640, 480, 'animals', true);
            $project->published_at = $faker->dateTimeBetween('-1 year', 'now');
            $project->updated_at = $faker->dateTimeBetween('-1 year', 'now');
            $project->save();
        }
    }
}
