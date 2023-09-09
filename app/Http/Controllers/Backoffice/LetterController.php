<?php

namespace App\Http\Controllers\Backoffice;

use App\Contracts\LetterContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuratRequest;
use App\Models\LetterType;
use App\Repositories\LetterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{
    private LetterContract $letterRepo;
    public function __construct()
    {
        $this->letterRepo = new LetterRepository;
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
}
