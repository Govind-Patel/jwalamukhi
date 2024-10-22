<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title'=>'माँ ज्वालामुखी चैरिटेबल ट्रस्ट, पीलीभीत',
            'image'=>null,
            'description'=>"माँ ज्वालामुखी जी की स्थापना वर्ष 2019 में जिले के प्राचीन मंदिर श्री गोपाल मंदिर, मौहल्ला इनायतगंज, शहर व जिला पीलीभीत (उत्तर प्रदेश) पिन- 262001 में 8 दिसम्बर को ट्रस्ट के मुख्य ट्रस्टी श्री नीलेश चतुर्वेदी द्वारा की गई थी। माँ ज्वालामुखी की अष्टधातु की प्रतिमा माँ ज्वाला जी मंदिर हिमांचल प्रदेश से माँ ज्वाला जी की ज्योति के साथ लाकर श्री गोपाल मंदिर में स्थापित की गई थी। तब से प्रत्येक वर्ष माँ ज्वाला जी का ज्योति जागरण व गुणगान, भंडारा इत्यादि होता आ रहा है।"
        ]);
    }
}