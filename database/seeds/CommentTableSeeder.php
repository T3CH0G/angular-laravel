<?php
use Illuminate\Database\Seeder;
use App\Comment;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();
        Comment::create(['author' => 'Dave Rivera','text' => 'First comment!.']);
        Comment::create(['author' => 'Chris Sevilleja','text' => 'Look I am a test comment.']);
        Comment::create(['author' => 'Nick Cerminara','text' => 'This is going to be super crazy.']);    
        Comment::create(['author' => 'Holli Lloyd','text' => 'I am a master of Laravel and Angular.']);
    }
}
