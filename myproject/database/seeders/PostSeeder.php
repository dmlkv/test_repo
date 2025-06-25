<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'How to Choose Your First Surfboard',
            'body' => 'Buying your first surfboard is a big step. Beginners should start with a soft-top board — it\'s safer and easier to control. In this article, we’ll help you choose the right length, volume, and shape for your goals.'
        ]);

        Post::create([
            'title' => '5 Mistakes Beginners Make in Surfing',
            'body' => 'Standing up too early, skipping the warm-up, or surfing in unsafe spots — these are common beginner mistakes. Let’s go over them and share how to avoid frustration in your first sessions.'
        ]);

        Post::create([
            'title' => 'Surf Dictionary: 15 Must-Know Terms',
            'body' => 'Line-up, duck dive, swell, break — these terms are all part of the surf lingo. We’ve put together a list of key words every surfer should know, explained in plain English.'
        ]);

        Post::create([
            'title' => 'Pre-Surf Warm-Up: 7 Essential Exercises',
            'body' => 'Warming up is key to staying safe and surfing better. In this guide, we’ll show you simple stretches and movements to activate your body before paddling out.'
        ]);

        Post::create([
            'title' => 'What a Lesson Looks Like in Our Surf School',
            'body' => 'A lesson starts with theory and a safe intro to the board, then practice on the beach, and finally — supervised time in the water. Here’s how we teach surfing from scratch.'
        ]);

        Post::create([
            'title' => 'Where and When to Learn Surfing Best',
            'body' => 'The best time to start is during the low season, when waves are gentle and beaches are less crowded. We’ll highlight top beginner-friendly locations and how to pick the right one for you.'
        ]);

        Post::create([
            'title' => 'The History of Surfing: From Polynesian Canoes to World Champs',
            'body' => 'Surfing began with ancient Polynesian tribes and has evolved into a global sport. Let’s take a quick look at how surf culture has grown over time.'
        ]);

        Post::create([
            'title' => 'How to Train for Surfing Without Waves',
            'body' => 'Progress doesn’t just happen in the ocean. Yoga, balance boards, and swimming are great ways to build strength and improve your balance between sessions.'
        ]);

        Post::create([
            'title' => 'What to Pack for a Surf Trip: A Coach’s Checklist',
            'body' => 'Wax? Extra leash? Sunscreen? Here\'s a full list of essentials to bring on a surf trip — from gear to first aid.'
        ]);

        Post::create([
            'title' => 'How to Overcome Fear of Waves',
            'body' => 'Fear is natural for beginners. Understanding how waves work and learning to trust yourself can change everything. We share real tips for feeling confident in the water.'
        ]);
    }
}
