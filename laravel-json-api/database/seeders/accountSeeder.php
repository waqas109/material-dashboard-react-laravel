<?php

namespace Database\Seeders;

use App\Models\account;
use App\Models\accountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountTypes = accountType::all();
        foreach ($accountTypes as $accountType) {
            for ($i = 1; $i <= 10; $i++) {
                account::create([
                    // 'account_type_id' => 1,
                    'account_type_id' => $accountType->id,
                    'whatsapp' => '0300',
                    'phone' => '0300',
                    'bank' => '123456',
                    'bank1' => '123456',
                    'cnic' => '00000-0000000-0',
                    'address' => 'sarrgodha',
                    'shop_address' => 'sarrgodha',
                    'cr' => '0',
                    'dr' => '0',
                    // 'name' => 'Farms', // Generate a name dynamically (optional)
                    'name' => rtrim($accountType->name, 's') . '_' . $i, // Dynamically generate account name based on the account type
                    'user_id' => 1, // Setting user_id as NULL (or you can modify based on your requirements)
                    'created_at' => Carbon::now(), // Current timestamp for created_at
                    'updated_at' => Carbon::now(), // Current timestamp for updated_at
                ]);
            }
        }
    }
}
