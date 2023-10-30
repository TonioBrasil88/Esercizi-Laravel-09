<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Amount;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $mario = User::where('email','mario@email.com')->delete();

        User::create([

            'name' => 'Mario',
            'email' => 'mario@email.com',
            'password' => Hash::make('password'),
        ]);

        $amounts = [75,150,300,600];

        foreach($amounts as $value){
            Amount::create([
                // 'value' => $value // DOMANDA X I PROF, PERCHE' DA ERRRORE
                'value' => $value
            ]);
        }

    //     $platforms = ['Netflix','Prime Video','Disney+','Now TV','Apple TV','Paramount+'];

    //     foreach($platforms as $name) {
    //         Platform::create([
    //             'name' => $name
    //         ]);
    }
}
