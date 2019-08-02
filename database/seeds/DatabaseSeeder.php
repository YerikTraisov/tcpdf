<?php

use Illuminate\Database\Seeder;

use App\Models\Computer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->initComputers();
    }

    public function initComputers() {
        DB::table('computers')->delete();

        Computer::create(['owner' => 'Client1', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client2', 'type' => 'Mac Book', 'hard' => '2TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client3', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client4', 'type' => 'Mac Book', 'hard' => '2TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client5', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client6', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client7', 'type' => 'Mac Book', 'hard' => '2TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client8', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client9', 'type' => 'Mac Book', 'hard' => '500GB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client10', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client11', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client12', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client13', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client14', 'type' => 'Mac Book', 'hard' => '500GB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client15', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client16', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client17', 'type' => 'Mac Book', 'hard' => '500GB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client18', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client19', 'type' => 'Mac Book', 'hard' => '2TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client20', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client21', 'type' => 'Mac Book', 'hard' => '500GB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client22', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client23', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client24', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client25', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client26', 'type' => 'Mac Book', 'hard' => '2TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client27', 'type' => 'Mac Book', 'hard' => '500GB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client28', 'type' => 'Mac Book', 'hard' => '1TB', 'ram' => '64G', 'size' => '29in']);
        Computer::create(['owner' => 'Client29', 'type' => 'Mac Book', 'hard' => '2TB', 'ram' => '64G', 'size' => '29in']);
    }
}
