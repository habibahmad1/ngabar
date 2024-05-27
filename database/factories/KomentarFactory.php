<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komentar>
 */
class KomentarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $praises = [
            'Artikel ini sangat bagus!',
            'Sangat informatif, terima kasih!',
            'Penulisan Anda sangat jelas dan mudah dipahami.',
            'Saya suka dengan konten yang Anda bagikan.',
            'Informasinya sangat bermanfaat, terima kasih banyak!',
            'Gokil banget nih artikel',
            'Bisa gitu ya wkwk',
            'Bermanfaat Sob',
            'Mantap, ditunggu artikel lainnya ya',
            'Ga sabar sama artikel mu lainnya wkwk',
            'GG Bro',
            'Lanjut bang :v',
            'Bukannya ini udah pernah ya?',
            'Ini Hoax katanya sih',
            'Jelek, Mending ke Artikel saya',
            'Buset panjang amat 🤣',
            'Topik yang lain dong 😎',
            'Semoga artikel selanjutnya bahas Coding 🤩',
            'Ga jadi post yang itu bang? 😏',
            'Mending bahas gorengan bang 😂',
            'Apakah ada gorengan drama disini? 🤗',
            'Nyimak aja deh 😋'
        ];
        $randomPraise = $praises[array_rand($praises)];

        $comment = $randomPraise;

        return [
            "artikel_id" => mt_rand(1, 20),
            "user_id" => mt_rand(1, 5),
            "content" => $comment,
        ];
    }
}
