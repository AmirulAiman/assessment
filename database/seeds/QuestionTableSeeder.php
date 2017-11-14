<?php

use Illuminate\Database\Seeder;
use App\Questions;
class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Question 1
        $question1 = new Questions();
        $question1->questions = 'Yang manakah berikutnya merupakan tumbuhan yang tidak berbunga?';
        $question1->CollAnswers = serialize(array(
            array('A','Pokok jagung'), 
            array('B','Pokok bunga raya'), 
            array('C','Pokok bunga ros'), 
            array('D','Pokok paku pakis')
        ));
        $question1->answer = 'A';
        $question1->save();

        //Question2
        $question2 = new Questions();
        $question2->questions = 'Plih perkataan sinonim bagi <u><b>berazam</b></u>';
        $question2->CollAnswers = serialize(array(
            array('A','bersatu'), 
            array('B','berpadu'), 
            array('C','bertekad'), 
            array('D','bersepakat')
        ));
        $question2->answer = 'C';
        $question2->save();
        
        //Question3
        $question3 = new Questions();
        $question3->questions = 'Pilih perkataan yang antonim bagi <u><b>pemurah</b></u>';
        $question3->CollAnswers = serialize(array(
            array('A','dermawan'), 
            array('B','pemboros'), 
            array('C','peramah'), 
            array('D','kedekut')
        ));
        $question3->answer = 'D';
        $question3->save();
        
        //Question4
        $question4 = new Questions();
        $question4->questions = 'Pilih ayat yang <u><b>betuk</b></u>';
        $question4->CollAnswers = serialize(array(
            array('A','Lelaki yang segak itu ayah saya.'), 
            array('B','Kedua-dua lelaki itu adalah adik-beradik.'), 
            array('C','Rumah yang baru dibeli oleh ayah adalah terlalu besar.'), 
            array('D','Segala pengakuaan yang dibuat didepan hakim adalah benar.')
        ));
        $question4->answer = 'B';
        $question4->save();
    }
}
