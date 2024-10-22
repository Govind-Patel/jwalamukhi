<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(
            [
                'logo' => null,
                'company_name' =>'माँ ज्वालामुखी चैरिटेबल ट्रस्ट',
                'address'=>'माँ ज्वालामुखी विराजमान श्री गोपाल मंदिर, मौहल्ला इनायतगंज, शहर व जिला पीलीभीत (उत्तर प्रदेश) पिन- 262001',
                'phone' => '+919458466666',
                'email' => 'info@maajwala.org'
            ]
        );
    }
}