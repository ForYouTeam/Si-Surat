<?php

namespace App\Http\Controllers\Backoffice;

use App\Contracts\LetterContract;
use App\Contracts\LetterTypeContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuratRequest;
use App\Models\LetterType;
use App\Repositories\LetterRepository;
use App\Repositories\LetterTypeRepository;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{
    private LetterContract $letterRepo;
    private LetterTypeContract $letterTypeRepo;
    public function __construct()
    {
        $this->letterRepo = new LetterRepository;
        $this->letterTypeRepo = new LetterTypeRepository;
    }

    public function index()
    {
        $result = $this->letterRepo->getAllPayload([]);
        $type = $this->letterTypeRepo->getAllPayload([]);
        // dd($type['data']);
        return view('pages.letter', compact(['result', 'type']));
    }

    public function getAllData()
    {
        $result = $this->letterRepo->getAllPayload([]);

        return response()->json($result, $result['code']);
    }

    public function getDataById(int $id)
    {
        $result = $this->letterRepo->getPayloadById($id);
        return response()->json($result, $result['code']);
    }

    public function createPayload(SuratRequest $request)
    {

        $result = $this->letterRepo->createPayload($request->all());

        return response()->json($result, $result['code']);
    }

    public function suratKelahiran()
    {
        $pdf = PDF::loadview('surat.template-surat');
        return $pdf->stream('laporan-pegawai.pdf');
    }

    public function addLetter(Request $request)
    {

        $data = $request->letter_type_id;
        $type = $this->letterTypeRepo->getPayloadById($data);
        // dd($type);
        return view('pages.add')->with(['data' => $data, 'type' => $type]);
    }

    public function viewAdd()
    {
        return view('pages.add');
    }
}
