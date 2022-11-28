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
        Book::create([
            'publisher_id' => 6,
            'title' => 'Divergent',
            'author' => 'Veronica Roth',
            'year' => 2014,
            'synopsis' => "One choice can transform you. Beatrice Prior's society is divided into five factions—Candor (the honest), Abnegation (the selfless), Dauntless (the brave), Amity (the peaceful), and Erudite (the intelligent). Beatrice must choose between staying with her Abnegation family and transferring factions. Her choice will shock her community and herself. But the newly christened Tris also has a secret, one she's determined to keep hidden, because in this world, what makes you different makes you dangerous.",
            'image' => "https://cdn.shopify.com/s/files/1/0285/2821/4050/products/9780062387240_6f32aafe-ab30-4184-9dbc-947755c5aa07.jpg?v=1668372804&width=350"
        ]);

        Book::create([
            'publisher_id' => 1,
            'title' => 'Just Like Mother',
            'author' => 'Anne Heltzel',
            'year' => 2022,
            'synopsis' => "The last time Maeve saw her cousin was the night she escaped the cult they were raised in. For the past two decades, Maeve has worked hard to build a normal life in New York City, where she keeps everything—and everyone—at a safe distance. When Andrea suddenly reappears, Maeve regains the only true friend she’s ever had. Soon she’s spending more time at Andrea’s remote Catskills estate than in her own cramped apartment. Maeve doesn’t even mind that her cousin’s wealthy work friends clearly disapprove of her single lifestyle. After all, Andrea has made her fortune in the fertility industry—baby fever comes with the territory.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1631903448l/53620541.jpg"
        ]);


        Book::create([
            'publisher_id' => 2,
            'title' => 'Dead Man\'s Hand',
            'author' => 'James J. Butcher',
            'year' => 2022,
            'synopsis' => "On the streets of Boston, the world is divided into the ordinary Usuals, and the paranormal Unorthodox. And in the Department of Unorthodox Affairs, the Auditors are the magical elite, government-sanctioned witches with spells at their command and all the power and prestige that comes with it. Grimshaw Griswald Grimsby is...not one of those witches. After flunking out of the Auditor training program and being dismissed as \"not Department material,\" Grimsby tried to resign himself to life as a mediocre witch. But he can't help hoping he'll somehow, someway, get another chance to prove his skill. That opportunity comes with a price when his former mentor, aka the most dangerous witch alive, is murdered down the street from where he works, and Grimsby is the Auditors' number one suspect.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1648218624l/60097440.jpg"
        ]);

        Book::create([
            'publisher_id' => 3,
            'title' => 'Hex Appeal',
            'author' => 'Kate Johnson',
            'year' => 2022,
            'synopsis' => "Essie Winterscale lives in a huge and ever-changing house in the village of Good Winter, in deepest, darkest Essex. She lives with various witches of various ages, one of whom is still a bit salty about having been burned at the stake in 1635, one who keeps accidentally casting fertility spells, and one who knits things that create the future. All Essie ever wanted was to have a normal life but in the end she found herself drawn back to Beldam House because she just can’t stop her witchiness (although the ability to instantly chill wine is pretty awesome, even she has to admit).",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1660183463l/61931921._SY475_.jpg"
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'Fairy Tale',
            'author' => 'Stephen King',
            'year' => 2022,
            'synopsis' => "Charlie Reade looks like a regular high school kid, great at baseball and football, a decent student. But he carries a heavy load. His mom was killed in a hit-and-run accident when he was ten, and grief drove his dad to drink. Charlie learned how to take care of himself—and his dad. Then, when Charlie is seventeen, he meets Howard Bowditch, a recluse with a big dog in a big house at the top of a big hill. In the backyard is a locked shed from which strange sounds emerge, as if some creature is trying to escape. When Mr. Bowditch dies, he leaves Charlie the house, a massive amount of gold, a cassette tape telling a story that is impossible to believe, and a responsibility far too massive for a boy to shoulder. Because within the shed is a portal to another world—one whose denizens are in peril and whose monstrous leaders may destroy their own world, and ours. In this parallel universe, where two moons race across the sky, and the grand towers of a sprawling palace pierce the clouds, there are exiled princesses and princes who suffer horrific punishments; there are dungeons; there are games in which men and women must fight each other to the death for the amusement of the “Fair One.” And there is a magic sundial that can turn back time.             A story as old as myth, and as startling and iconic as the rest of King’s work, Fairy Tale is about an ordinary guy forced into the hero’s role by circumstance, and it is both spectacularly suspenseful and satisfying.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1647789287l/60177373.jpg"
        ]);

        Book::create([
            'publisher_id' => 5,
            'title' => 'Lore Olympus: Volume one',
            'author' => 'Rachel Smythe',
            'year' => 2021,
            'synopsis' => "Scandalous gossip, wild parties, and forbidden love—witness what the gods do after dark in this stylish and contemporary reimagining of one of mythology’s most well-known stories from creator Rachel Smythe. Featuring a brand-new, exclusive short story, Smythe’s original Eisner-nominated web-comic Lore Olympus brings the Greek Pantheon into the modern age with this sharply perceptive and romantic graphic novel. This volume collects episodes 1-25 of the #1 WEBTOON comic, Lore Olympus. ",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1614887007l/57282218.jpg"
        ]);

        Book::create([
            'publisher_id' => 6,
            'title' => 'Blackout',
            'author' => 'Dhonielle Clayton',
            'year' => 2021,
            'synopsis' => "A summer heatwave blankets New York City in darkness. But as the city is thrown into confusion, a different kind of electricity sparks... A first meeting. Long-time friends. Bitter exes. And maybe the beginning of something new. When the lights go out, people reveal hidden truths. Love blossoms, friendship transforms, and new possibilities take flight.",
            'image' => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1614165901i/55926761.jpg"
        ]);

        Book::create([
            'publisher_id' => 7,
            'title' => 'Unbroken Bonds',
            'author' => 'J. Bree',
            'year' => 2022,
            'synopsis' => "I thought that the death of the man who tortured me, broke me, and then hunted me to the ends of the Earth would be the end of our fight; but it’s only the beginning. After thousands of years of being apart, our god bonds are reunited once again; and they’re not ready to go down without a fight. They’ve woken up hungry. All of the research in the world couldn’t have prepared us for what’s to come, enemies and wars fought over millennia. Now we’re being forced to act, but this time, we have the advantage. This time, we’re Bonded. Are we strong enough to survive the gods and their plans? Will we ever live in the peaceful world we’ve fought so hard for, or is history doomed to repeat itself?",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659139281l/60909286._SY475_.jpg"
        ]);

        Book::create([
            'publisher_id' => 6,
            'title' => 'Imagine Me',
            'author' => 'Tahereh Mafi',
            'year' => 2021,
            'synopsis' => "Juliette Ferrars. Ella Sommers. Which is the truth and which is the lie? Now that Ella knows who Juliette is and what she was created for, things have only become more complicated. As she struggles to understand the past that haunts her and looks to a future more uncertain than ever, the lines between right and wrong—between Ella and Juliette—blur. And with old enemies looming, her destiny may not be her own to control. The day of reckoning for the Reestablishment is coming. But she may not get to choose what side she fights on.",
            'image' => "https://cdn.shopify.com/s/files/1/0285/2821/4050/products/9780062676436.jpg?v=1667974028&width=350"
        ]);

        Book::create([
            'publisher_id' => 1,
            'title' => 'Manhunt',
            'author' => 'Gretchen Felker-Martin',
            'year' => 2022,
            'synopsis' => "Beth and Fran spend their days traveling the ravaged New England coast, hunting feral men and harvesting their organs in a gruesome effort to ensure they'll never face the same fate. Robbie lives by his gun and one hard-learned motto: other people aren't safe.After a brutal accident entwines the three of them, this found family of survivors must navigate murderous TERFs, a sociopathic billionaire bunker brat, and awkward relationship dynamics―all while outrunning packs of feral men, and their own demons.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1623167555l/53329296.jpg"
        ]);
    }
}
