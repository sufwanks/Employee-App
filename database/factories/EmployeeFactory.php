<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class EmployeeFactory extends Factory
{
    //    Define the models default state.
    // @return array
     
    public function definition()
    {
         return[
            'employee_name'=>$this->faker->name(),
            'salary'=>$this->faker->numberBetween(5000,50000)            
        ];
            
    }
}
       