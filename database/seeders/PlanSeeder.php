<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
  
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic', 
                'slug' => 'basic', 
                'stripe_plan' => 'price_1M3GOrSDrbMKikY9uPdZB4iF', 
                'price' => 10, 
                'description' => 'Basic'
            ],
            [
                'name' => 'Premium', 
                'slug' => 'premium', 
                'stripe_plan' => 'price_1M3GRJSDrbMKikY93vT25rIT', 
                'price' => 100, 
                'description' => 'Premium'
            ]
        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}