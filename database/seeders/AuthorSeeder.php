<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name' => 'Masashi Kishimoto',
                'photoPath' => 'kishimoto.jpg',
                'birthPlace' => 'Nagi, Okayama, Japan',
                'birthDate' => '1974-11-08',
                'biography' => 'Masashi Kishimoto (岸本 斉史 Kishimoto Masashi) is a Japanese manga artist, well known for creating the manga series Naruto. His younger twin brother, Seishi Kishimoto, is also a manga artist and creator of the manga series O-Parts Hunter (666 Satan) and Blazer Drive. Two of his former assistants, Osamu Kajisa (Tattoo Hearts) and Yuuichi Itakura (Hand\'s), have also gone on to moderate success following their work on Naruto.'
            ],
            [
                'name' => 'Hirohiko Araki',
                'photoPath' => 'araki.jpg',
                'birthPlace' => 'Sendai, Japan',
                'birthDate' => '1960-06-07',
                'biography' => 'Hirohiko Araki ( 荒木飛呂彦) is a Japanese manga artist. He left school before graduation from Miyagi University of Education. <br>He enjoys the baseball manga Kyojin No Hoshii (Star of the Giants); the video games Mario Kart and Bomberman; and likes Prince and other African-American singers, as well as jazz, rock, and rap.'
            ],
            [
                'name' => 'Shuichi Shigeno',
                'photoPath' => 'shigeno.jpg',
                'birthPlace' => 'Matsunoyama, Tokamachi, Niigata, Japan',
                'birthDate' => '1958-03-08',
                'biography' => 'Shuichi Shigeno (しげの 秀一) is a Japanese manga artist famous for creating Initial D. Shigeno has also created Bari Bari Densetsu, Dopkan, and Tunnel Nuketara Sky Blue ("First Love in Summer") all prior to the manga that would make him famous in 1995. In 1985, he received the Kodansha Manga Award in shōnen for Bari Bari Densetsu.'
            ],
            [
                'name' => 'Hajime Isayama',
                'photoPath' => 'isayama.jpg',
                'birthPlace' => 'Oita, Japan',
                'birthDate' => '1986-08-29',
                'biography' => 'Hajime Isayama (諫山 創 Isayama Hajime, born 1986) is a Japanese manga artist from Ōyama, Ōita. His first and currently ongoing serial, Attack on Titan, has sold over 22 million copies as of July 2013. He has mentioned Tsutomu Nihei, Ryōji Minagawa, Kentaro Miura, Hideki Arai and Tōru Mitsumine as artists he respects, but stated that the manga that had the biggest influence on him was ARMS.'
            ],
            [
                'name' => 'Andrew Hussie',
                'photoPath' => 'andrew.jpg',
                'birthPlace' => 'The United States',
                'birthDate' => '1979-08-25',
                'biography' => 'Andrew Hussie is the creator of MS Paint Adventures, a collection of webcomics that includes Homestuck, as well as of several other webcomics, books, and videos.'
            ],
            [
                'name' => 'Sukismo',
                'photoPath' => 'sukismo.jpg',
                'birthPlace' => 'Indonesia',
                'birthDate' => '0000-01-01',
                'biography' => '-'
            ],
            [
                'name' => 'Marthen Kaningan',
                'photoPath' => 'marthen.jpg',
                'birthPlace' => 'Makassar, Indonesia',
                'birthDate' => '1958-03-31',
                'biography' => 'Ir. Marthen Kanginan, M.Sc., lahir di Makassar, 31 Maret 1958. Alumnus Fisika Institut Teknologi Bandung yang mengidolakan Einstein ini telah mulai mengajar sejak di tingkat 2. Saat itu, ia mengajar di SMA Darmabakti, SMA Tut Wuri Handayani, dan SMA Negeri 2 Cimahi. <br>Ia adalah seorang yang tekun sehingga mampu menguasai ilmu pasti seperti matematika, fisika dan kimia. Ketekunannya itu pun diwujudkan dalam bentuk karya. Saat ini, ia telah menulis lebih dari 40 buku pelajaran dalam bidang Matematika dan Fisika tingkat SMP dan SMA, Siaga dan Sukses Jelang Ujian Nasional Matematika IPS, dan buku OSN Fisika. Kiprahnya dalam dunia pendidikan juga semakin meluas dengan keaktifannya membina OSN Fisika di SMA Kristen Penabur 1 Bandung, SMAN 1 Rancaekek, SMAN 1 Lembang, Tim Matematika dan Fisika SMP Cimahi, SMAN 4 Bandung serta membawakan seminar hampir di seluruh Indonesia tentang pembelajaran matematika dan fisika, baik dalam menghadapi UN, SNMPTN, OSN maupun pendalaman materi.'
            ],
            [
                'name' => 'James Dashner',
                'photoPath' => 'james.jpg',
                'birthPlace' => 'Austell, Georgia, United States',
                'birthDate' => '1972-11-26',
                'biography' => 'James is the author of THE MAZE RUNNER trilogy and THE 13TH REALITY series. He also published a series (beginning with A DOOR IN THE WOODS) with a small publisher several years ago. He lives and writes in the Rocky Mountains.'
            ],
            [
                'name' => 'Brandon Sanderson',
                'photoPath' => 'brandon.jpg',
                'birthPlace' => 'Lincoln, Nebraska, The United States',
                'birthDate' => '1975-12-19',
                'biography' => 'Brandon Winn Sanderson is an American author of high fantasy and science fiction. He is best known for the Cosmere fictional universe, in which most of his fantasy novels, most notably the Mistborn series and The Stormlight Archive, are set. Outside of the Cosmere, he has written several young adult and juvenile series including The Reckoners, the Skyward series, and the Alcatraz series. He is also known for finishing Robert Jordan\'s high fantasy series The Wheel of Time and has created several graphic novel fantasy series including White Sand and Dark One.'
            ],
        ];

        foreach($authors as $key => $value){
            Author::create($value);
        }
    }
}
