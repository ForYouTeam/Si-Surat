<?php

namespace App\Repositories;

use App\Contracts\LetterContract;
use App\Contracts\LetterTypeContract;
use App\Models\Letter;
use App\Models\LetterType;
use App\Traits\HttpResponseModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class LetterTypeRepository implements LetterTypeContract
{
    use HttpResponseModel;

    private LetterType $letterTypeModel;
    public function __construct()
    {
        $this->letterTypeModel = new LetterType();
    }
    public function getAllPayload()
    {
        try {
            $data = $this->letterTypeModel->all();
            return $this->success($data, "success getting data");
        } catch (\Throwable $th) {

            return $this->error($th->getMessage(), 500, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getPayloadById(int $id)
    {
        try {

            $find = $this->letterTypeModel->whereId($id)->first();

            if (!$find) {
                return $this->error('Letter Type not found', 404);
            }

            return $this->success($find, "success getting data");
        } catch (\Throwable $th) {

            return $this->error($th->getMessage(), 500, $th, class_basename($this), __FUNCTION__);
        }
    }
}
