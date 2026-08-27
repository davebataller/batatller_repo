<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('user.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('conversation.{id}', function ($user, $id) {
    $conversation = \App\Models\Conversation::find($id);
    if (!$conversation) {
        return false;
    }
    
    return $conversation->user_one_id === $user->id || $conversation->user_two_id === $user->id;
});
