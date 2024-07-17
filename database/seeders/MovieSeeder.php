<?php
namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            'Bad Boys: Ride or Die',
            'Haikyuu!! The Dumpster Battle',
            'Kingdom of the Planet of',
            'Winnie The Pooh: Blood and Honey',
            'Furiosa: A Mad Max Movie',
            'A Quiet Place: Day One',
            'Twisters',
            'Transformers One',
            'Deadpool and Wolverine',
            'Watchers',
            'Inside Out 2',
            'Garfield Movie',
        ];

        $descriptions = [
            'This Summer, the world\'s favorite Bad Boys are back with their iconic mix of edge-of-your seat action and outrageous comedy but this time with a twist: Miami\'s finest are now on the run.',
            'Despite a strong field, Karasuno High volleyball team advances past preliminary round of Harutaka tournament in Miyagi prefecture to reach the third round.',
            'Many years after the reign of Caesar, a young ape goes on a journey that will lead him to question everything he\'s been taught about the past and make choices that will define a future for apes and humans alike.',
            'The days of adventures and merriment have come to an end, as Christopher Robin, now a young man, has left Winnie-The-Pooh and Piglet to fend for themselves. As time passes, feeling angry and abandoned, the two become feral. After getting a taste for blood, Winnie-The-Pooh and Piglet set off to find a new source of food. It\'s not long before their bloody rampage begins.',
            'As the world fell, young Furiosa is snatched from the Green Place of Many Mothers and falls into the hands of a great Biker Horde led by the Warlord Dementus. Sweeping through the Wasteland, they come across the Citadel presided over by The Immortan Joe. While the two Tyrants war for dominance, Furiosa must survive many trials as she puts together the means to find her way home.',
            'Experience the day the world went quiet.',
            'This summer, the epic studio disaster movie returns with an adrenaline-pumping, seat-gripping, big-screen thrill ride that puts you in direct contact with one of nature\'s most wondrous—and destructive—forces.',
            'TRANSFORMERS ONE is the untold origin story of Optimus Prime and Megatron, better known as sworn enemies, but once were friends bonded like brothers who changed the fate of Cybertron forever. In the first-ever fully CG-animated Transformers movie, TRANSFORMERS ONE features a star-studded voice cast, including Chris Hemsworth, Brian Tyree Henry, Scarlett Johansson, Keegan-Michael Key, Steve Buscemi, with Laurence Fishburne, and Jon Hamm.',
            'Marvel Studios\' "Deadpool & Wolverine" delivers the ultimate team-up throwdown on July 26.',
            'Mina, a 28-year-old artist, gets stranded in an expansive, untouched forest in western Ireland. Upon finding shelter, she unknowingly becomes trapped alongside three strangers who are watched and stalked by mysterious creatures each night.',
            'Disney and Pixar\'s “Inside Out 2” returns to the mind of newly minted teenager Riley just as headquarters is undergoing a sudden demolition to make room for something entirely unexpected: new Emotions! Joy, Sadness, Anger, Fear and Disgust, who\'ve long been running a successful operation by all accounts, aren\'t sure how to feel when Anxiety shows up. And it looks like she\'s not alone. Maya Hawke lends her voice to Anxiety, alongside Amy Poehler as the voice of Joy. The voice cast also includes Lewis Black, Phyllis Smith, Tony Hale and Liza Lapira. Directed by Kelsey Mann and produced by Mark Nielsen, “Inside Out 2” releases only in theaters June 14, 2024.',
            'Garfield (voiced by Chris Pratt), the world-famous, Monday-hating, lasagna-loving indoor cat, is about to have a wild outdoor adventure! After an unexpected reunion with his long-lost father - scruffy street cat Vic (voiced by Samuel L. Jackson) - Garfield and his canine friend Odie are forced from their perfectly pampered life into joining Vic in a hilarious, high-stakes heist.',
        ];

        $poster_links = [
            'resources/images/Bad-Boys-Ride-or-Die.webp',
            'resources/images/Haikyu-Dumpster-Battle.webp',
            'resources/images/Kingdom-of-the-Planet-of-the-Apes.webp',
            'resources/images/WInnie-the-Pooh-Blood-and-Honey.webp',
            'resources/images/Furiosa.webp',
            'resources/images/Quiet-Place-Day-One.webp',
            'resources/images/Twisters.webp',
            'resources/images/Transformers-One.webp',
            'resources/images/Deadpool-and-Wolverine-Poster-2.webp',
            'resources/images/Watchers.webp',
            'resources/images/Inside-Out-Two.webp',
            'resources/images/Garfield-Movie.webp',
        ];

        $lengths = [
            117,
            84,
            144,
            83,
            148,
            100,
            122,
            100,
            127,
            102,
            96,
            105,
        ];

        $rating_score = [
            7.00,
            7.00,
            8.00,
            4.00,
            9.00,
            4.00,
            5.00,
            6.00,
            7.00,
            4.00,
            9.00,
            8.00,
        ];

        $age_rating = [
            4,
            3,
            3,
            3,
            5,
            3,
            3,
            3,
            5,
            3,
            2,
            2,
        ];

        $status_id = [
            1,
            1,
            1,
            1,
            2,
            2,
            2,
            2,
            3,
            3,
            3,
            3,
        ];

        foreach ($movies as $key => $movie) {
            Movie::create([
                'title' => $movie,
                'description' => $descriptions[$key],
                'poster_link' => $poster_links[$key],
                'length' => $lengths[$key],
                'rating_score' => $rating_score[$key],
                'age_rating_id' => $age_rating[$key], // Ensure your array name matches
                'movie_status_id' => $status_id[$key], // Ensure your array name matches
            ]);
        }

    }
}
