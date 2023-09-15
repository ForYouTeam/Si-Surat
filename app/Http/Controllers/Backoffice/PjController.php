<?php

namespace App\Http\Controllers\Backoffice;

use App\Contracts\PJContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\PjRequest;
use App\Repositories\PJRepository;
use Illuminate\Http\Request;

class PjController extends Controller
{
    private PJContract $pjRepo;
    public function __construct()
    {
        $this->pjRepo = new PJRepository;
    }

    public function index() 
    {
        return view('pages.pj');    
    }

    public function getAllData()
    {
        $result = $this->pjRepo->getAllPayload([]);

        return response()->json($result, $result['code']);
    }

    public function getDataById(int $id)
    {
        $result = $this->pjRepo->getPayloadById($id);

        return response()->json($result, $result['code']);
    }

    public function upsertData(PjRequest $request)
    {
        $id = $request->id | null;
        $result = $this->pjRepo->upsertPayload($id, $request->all());

        return response()->json($result, $result['code']);
    }

    public function deleteData(int $id)
    {
        $result = $this->pjRepo->deletePayload($id);
        return response()->json($result, $result['code']);
    }
}
