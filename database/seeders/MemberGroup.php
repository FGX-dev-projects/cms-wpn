<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MemberGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_groups')->insert([
    ['name' => 'Cape Peninsula University of Technology', 'model_class' => \App\Models\CapePeninsula::class],
        ['name' => 'Eastern Cape Chapter', 'model_class' => \App\Models\EasternChapter::class],
        ['name' => 'Gauteng Chapter', 'model_class' => \App\Models\Members::class],
        ['name' => 'KZN Chapter', 'model_class' => \App\Models\KznChapter::class],
        ['name' => 'Western Cape Chapter', 'model_class' => \App\Models\WesternChapter::class],
        ['name' => 'Student Registration', 'model_class' => \App\Models\StudentReg::class],
        ['name' => 'Trust', 'model_class' => \App\Models\Trust::class],
        ['name' => 'University of Cape Town', 'model_class' => \App\Models\CapeTown::class],
        ['name' => 'University of Johannesburg', 'model_class' => \App\Models\Johannesburg::class],
        ['name' => 'University of KwaZulu-Natal', 'model_class' => \App\Models\Kznuni::class],
        ['name' => 'University of Port Elizabeth (Mandela Bay)', 'model_class' => \App\Models\PortElizabeth::class],
        ['name' => 'University of Pretoria', 'model_class' => \App\Models\Pretoria::class],
        ['name' => 'University of Witwatersrand', 'model_class' => \App\Models\Wits::class],
        ['name' => 'Young Professional (under 30)', 'model_class' => \App\Models\YoungProfessional::class],
    ]);  
        
    }
}
