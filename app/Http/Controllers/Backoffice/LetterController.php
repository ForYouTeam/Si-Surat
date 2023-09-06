<?php

namespace App\Http\Controllers\Backoffice;

use App\Contracts\LetterContract;
use App\Http\Controllers\Controller;
use App\Repositories\LetterRepository;
use Illuminate\Http\Request;

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

    public function createPayload(Request $request)
    {
        
        $result = $this->letterRepo->createPayload($request->all());

        return response()->json($result, $result['code']);
    }
}
