<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactApiController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'telepon' => 'required|string',
            'pesan' => 'required|string',
        ]);

        $data = $request->only(['nama', 'email', 'telepon', 'pesan']);

        Mail::send('emails.kontak', $data, function($message) use ($data) {
            $message->to('ahyaazka28@gmail.com')
                    ->from($data['email'], $data['nama'])
                    ->subject('Pesan Baru dari API Website');
        });

        return response()->json(['message' => 'Pesan berhasil dikirim!']);
    }
}

