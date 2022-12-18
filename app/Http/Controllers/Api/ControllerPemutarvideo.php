<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pemutarvideo;
use Illuminate\Http\Request;


class ControllerPemutarvideo extends Controller
{
    public function list()
    {
        $videos = Pemutarvideo::get();

        if ($videos) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil menampilkan video',
                'videos' => $videos
            ]);
        } else {
            $this->error('Gagal menampilkan video!');
        }
    }

    public function videoDetail($id)
    {
        $video = Pemutarvideo::where('id', $id)->get();
        if ($video) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan detail Video',
                'videos' => $video
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan detail Video!',
            ]);
        }
    }

    public function search(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $videos = Pemutarvideo::where([
            ['judul', 'LIKE', "%$filterKeyword%"],
        ])->get();

        if ($videos) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil',
                'videos' => $videos
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Error',
                'videos' => $videos
            ]);
        }
    }
}
