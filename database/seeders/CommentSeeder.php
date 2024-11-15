<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            'Great article! Learned a lot.',
            'Interesting read, thanks for sharing!',
            'This was really helpful.',
            'I disagree with some points, but overall good.',
            'Fantastic explanation!',
            'I have a question about this part...',
            'Can you provide more examples?',
            'This clarified a lot for me, thanks!',
            'Awesome! Looking forward to more posts like this.',
            'Well written and easy to understand.',
            'Great article! Learned a lot.',
            'Interesting read, thanks for sharing!',
            'This was really helpful.',
            'I disagree with some points, but overall good.',
            'Fantastic explanation!',
            'I have a question about this part...',
            'Can you provide more examples?',
            'This clarified a lot for me, thanks!',
            'Awesome! Looking forward to more posts like this.',
            'Well written and easy to understand.',
            'Thanks, this was exactly what I needed!',
            'Could you elaborate more on this section?',
            'Super informative, keep up the great work!',
            'Found this through a friend, great job!',
            'This really resonated with my experience.',
            'I never thought about it this way—eye-opening!',
            'Thank you for addressing this topic.',
            'Please continue posting content like this!',
            'Helped me prepare for a project—thanks!',
            'Any additional resources you could recommend?',
            'Could you clarify the point on...?',
            'This is a must-read for anyone interested in the field.',
            'I think this article could benefit from more examples.',
            'Brilliant insights, changed my perspective!',
            'Some parts were a bit unclear, but overall useful.',
            'Would love to see a follow-up article on this!',
        ];

        foreach ($comments as $commentText) {
            Comment::create([
                'comment' => $commentText,
                'user_id' => User::inRandomOrder()->first()->id,
                'article_id' => Article::inRandomOrder()->first()->id,
            ]);
        }
    }
}
