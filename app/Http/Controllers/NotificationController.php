<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function markAllAsRead()
    {
        /** @var User $user */
        $user = Auth::user();

        $user->unreadNotifications->markAsRead();
        return back()->with('success', 'Semua notifikasi ditandai sudah dibaca.');
    }

    public function handleNotification($id)
    {
        /** @var User $user */
        $user = Auth::user();

        $notification = $user->notifications()->findOrFail($id);    
        $data = $notification->data;

        $notification->delete();

        if ($data['type'] === 'rating') {
            return redirect()->route('rating')->with('success', 'Notifikasi rating dibaca.');
        }

        if ($data['type'] === 'form') {
            return redirect()->route('form.show', $data['form_id'])->with('success', 'Notifikasi form dibaca.');
        }

        return back();
    }
}