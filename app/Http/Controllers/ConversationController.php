<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function store()
    {
        $random_usernames = [
            'Anonymous',
            'Someone',
            'Some Girl',
            'Some Boy',
            'Mr. X',
            'Mr. Y',
            'Mr. ABC',
            'Ms. A',
            'Ms. B',
            'Ms. C',
        ];

        $conversation = Conversation::create([
            'message' => request('message'),
            'user' => $random_usernames[array_rand($random_usernames)],
        ]);

        broadcast(new NewMessage($conversation))->toOthers();
    }
}
