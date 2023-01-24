<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'authorId' => 9,
                'publisherId' => 1,
                'title' => 'The Lost Metal',
                'ISBN' => '9781473215269',
                'photoPath' => 'the-lost-metal.jpg',
                'synopsis' => 'For years, frontier lawman turned big-city senator Waxillium Ladrian has hunted the shadowy organization the Set - with his late uncle and his sister among their leaders - since they started kidnapping people with the power of Allomancy in their bloodlines. When Detective Marasi Colms and her partner, Wayne, find stockpiled weapons bound for the Outer City of Bilming, this opens a new lead. Conflict between the capital, Elendel, and the Outer Cities only favors the Set, and their tendrils now reach to the Elendel Senate - whose corruption Wax and his wife, Steris, have sought to expose - and Bilming is even more entangled.',
                'languageId' => 1,
                'publishedYear' => 2022,
                'weight' => 800
            ],
            [
                'authorId' => 9,
                'publisherId' => 1,
                'title' => 'The Final Empire',
                'ISBN' => '9780575089914',
                'photoPath' => 'the-final-empire.jpg',
                'synopsis' => 'A thousand years ago evil came to the land and has ruled with an iron hand ever since. The sun shines fitfully under clouds of ash that float down endlessly from the constant eruption of volcanoes. A dark lord rules through the aristocratic families and ordinary folk are condemned to lives in servitude, sold as goods, labouring in the ash fields.',
                'languageId' => 1,
                'publishedYear' => 2009,
                'weight' => 465
            ],
            [
                'authorId' => 1,
                'publisherId' => 2,
                'title' => 'Naruto vol 1',
                'ISBN' => '1421539896',
                'photoPath' => 'naruto.jpg',
                'synopsis' => 'Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.',
                'languageId' => 3,
                'publishedYear' => 1999,
                'weight' => 188
            ],
            [
                'authorId' => 2,
                'publisherId' => 2,
                'title' => 'JoJo\'s Bizarre Adventure',
                'ISBN' => '9783964333957',
                'photoPath' => 'jojo.jpg',
                'synopsis' => 'The story of the Joestar family, who are possessed with intense psychic strength, and the adventures each member encounters throughout their lives. Chronicles the struggles of the cursed Joestar bloodline against the forces of evil.',
                'languageId' => 3,
                'publishedYear' => 1987,
                'weight' => 156
            ],
            [
                'authorId' => 3,
                'publisherId' => 3,
                'title' => 'Initial D',
                'ISBN' => '9781931514989',
                'photoPath' => 'initial-d.jpg',
                'synopsis' => 'Takumi has been driving on Mt. Akina every morning to deliver Tofu to the summit five years before he even had his license. As a result his skills in mountain racing were honed, and is able to drive under adverse weather conditions.',
                'languageId' => 3,
                'publishedYear' => 1995,
                'weight' => 172
            ],
            [
                'authorId' => 4,
                'publisherId' => 3,
                'title' => 'Attack on Titan',
                'ISBN' => '9783551742339',
                'photoPath' => 'attack-on-titan.jpg',
                'synopsis' => 'The story follows Eren Yeager, who vows to exterminate the Titans after they bring about the destruction of his hometown and the death of his mother',
                'languageId' => 3,
                'publishedYear' => 2009,
                'weight' => 197
            ],
            [
                'authorId' => 5,
                'publisherId' => 4,
                'title' => 'Homestuck',
                'ISBN' => '9781421599427',
                'photoPath' => 'homestuck.jpg',
                'synopsis' => 'Twelve trolls start playing a game. Their extensive and convoluted journey will involve extreme role playing, dreadful cinema, emotional theatrics and romantic intrigue, dou8lecrossings and backsta88ery, payback scenarios, mirAcLeS, a levitating ghostly amphibian, and the troll disease called friendship.',
                'languageId' => 1,
                'publishedYear' => 2009,
                'weight' => 1538
            ],
            [
                'authorId' => 1,
                'publisherId' => 4,
                'title' => 'Chainsaw Man',
                'ISBN' => '9781974709939',
                'photoPath' => 'chainsaw-man.jpg',
                'synopsis' => 'Chainsaw Man follows the story of Denji, an impoverished young man who makes a contract that fuses his body with that of a dog-like devil named Pochita, granting him the ability to transform parts of his body into chainsaws.',
                'languageId' => 3,
                'publishedYear' => 2019,
                'weight' => 169
            ],
            [
                'authorId' => 6,
                'publisherId' => 5,
                'title' => 'Erlangga Fokus Ujian Sekolah SMP/MTs 2022',
                'ISBN' => '9786232665347',
                'photoPath' => 'cover-ujian-sekolah.jpg',
                'synopsis' => 'Siapkan diri anda untuk ujian sekolah SMP dengan buku ini, terdiri dari berbagai materi dan latihan soal yang sering dikeluarkan ketika ujian sekolah',
                'languageId' => 2,
                'publishedYear' => 2021,
                'weight' => 1025
            ],
            [
                'authorId' => 7,
                'publisherId' => 5,
                'title' => 'Fisika untuk SMA/MA Kelas XII',
                'ISBN' => '9789797416768',
                'photoPath' => 'fisika.jpg',
                'synopsis' => 'Fisika merupakan pelajaran yang menarik dan mudah untuk dipelajari. Mulai lah belajar fisika dengan materi-materi penuh dengan teori, soal dan praktikum di buku ini.',
                'languageId' => 2,
                'publishedYear' => 2015,
                'weight' => 825
            ],
            [
                'authorId' => 8,
                'publisherId' => 6,
                'title' => 'The Maze Runner #1',
                'ISBN' => '9780385737951',
                'photoPath' => 'maze-runner-1.jpg',
                'synopsis' => 'If you ain\’t scared, you ain\’t human. When Thomas wakes up in the lift, the only thing he can remember is his name. He\’s surrounded by strangers—boys whose memories are also gone. Nice to meet ya, shank. Welcome to the Glade. Outside the towering stone walls that surround the Glade is a limitless, ever-changing maze. It\’s the only way out—and no one\’s ever made it through alive. Everything is going to change. Then a girl arrives. The first girl ever. And the message she delivers is terrifying.

        	Remember. Survive. Run.',
                'languageId' => 1,
                'publishedYear' => 2010,
                'weight' => 340
            ],
            [
                'authorId' => 8,
                'publisherId' => 6,
                'title' => 'The Maze Runner #2',
                'ISBN' => '9780385738767',
                'photoPath' => 'maze-runner-2.jpg',
                'synopsis' => 'Thomas was sure that escape from the Maze would mean freedom for him and the Gladers. But WICKED isn\’t done yet. Phase Two has just begun. The Scorch.
There are no rules. There is no help. You either make it or you die. The Gladers have two weeks to cross through the Scorch—the most burned-out section of the world. And WICKED has made sure to adjust the variables and stack the odds against them. Friendships will be tested. Loyalties will be broken. All bets are off.
There are others now. Their survival depends on the Gladers\’ destruction—and they’re determined to survive
',
                'languageId' => 1,
                'publishedYear' => 2011,
                'weight' => 356
            ],
            [
                'authorId' => 8,
                'publisherId' => 6,
                'title' => 'The Maze Runner #3',
                'ISBN' => '9780385738781',
                'photoPath' => 'maze-runner-3.jpg',
                'synopsis' => 'WICKED has taken everything from Thomas: his life, his memories, and now his only friends—the Gladers. But it\’s finally over. The trials are complete, after one final test. Will anyone survive? What WICKED doesn\’t know is that Thomas remembers far more than they think. And it\’s enough to prove that he can\’t believe a word of what they say. The truth will be terrifying. Thomas beat the Maze. He survived the Scorch. He\’ll risk anything to save his friends. But the truth might be what ends it all. The time for lies is over.',
                'languageId' => 1,
                'publishedYear' => 2013,
                'weight' => 342
            ],
        ];
        foreach($books as $key => $value){
            Book::create($value);
        }
    }
}
