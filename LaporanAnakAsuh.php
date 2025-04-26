<?php

namespace App\Services;
namespace App\Services\LaporanAnakAsuh;
use app\Models\LaporanAnakAsuh;
use App\Models\LaporanAnakAsuhDetail;
use App\Models\LaporanAnakAsuhDetailHistory;
use App\Models\LaporanAnakAsuhHistory;

class ProgramAnakAsuhService
{
    public function getLaporanAnakAsuh($id)
    {
        return LaporanAnakAsuh::with('laporanAnakAsuhDetail')
            ->where('id', $id)
            ->first();
    }

    public function getLaporanAnakAsuhDetail($id)
    {
        return LaporanAnakAsuhDetail::with('laporanAnakAsuhDetailHistory')
            ->where('laporan_anak_asuh_id', $id)
            ->get();
    }

    public function getLaporanAnakAsuhHistory($id)
    {
        return LaporanAnakAsuhHistory::with('laporanAnakAsuhDetailHistory')
            ->where('laporan_anak_asuh_id', $id)
            ->get();
    }
    public function getLaporanAnakAsuhDetailHistory($id)
    {
        return LaporanAnakAsuhDetailHistory::where('laporan_anak_asuh_detail_id', $id)->get();
    }

    public function getLaporanAnakAsuhDetailHistoryById($id)
    {
        return LaporanAnakAsuhDetailHistory::where('id', $id)->first();
    }
    public function getLaporanAnakAsuhDetailById($id)
    {
        return LaporanAnakAsuhDetail::where('id', $id)->first();
    }
}


