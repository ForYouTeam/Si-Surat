<?php

namespace App\Repositories;

use App\Contracts\LetterContract;
use App\Models\Letter;
use App\Traits\HttpResponseModel;
use Carbon\Carbon;

class LetterRepository implements LetterContract
{
  use HttpResponseModel;

  private Letter $letterModel;
  public function __construct()
  {
    $this->letterModel = new Letter();
  }
  public function getAllPayload(array $payload)
  {
    try {

      $data = $this->letterModel->all();

      return $this->success($data, "success getting data");

    } catch (\Throwable $th) {

      return $this->error($th->getMessage(), 500, $th, class_basename($this), __FUNCTION__ );
    }
  }

  public function getPayloadById(int $id)
  {
    try {
      
      $find = $this->letterModel->whereId($id)->first();

      if (!$find) {
        return $this->error('user not found', 404);
      }

      return $this->success($find, "success getting data");

    } catch (\Throwable $th) {

      return $this->error($th->getMessage(), 500, $th, class_basename($this), __FUNCTION__ );
    }
  }

  public function createPayload(array $payload)
  {
    try {
        $result = [
          'data' => $this->letterModel->create($payload),
          'message' => 'Created data successfully'
        ];
        
      return $this->success($result['data'], $result['message']);

    } catch (\Throwable $th) {
      return $this->error($th->getMessage(), 500, $th, class_basename($this), __FUNCTION__ );
    }
  }

  public function deletePayload(int $id)
  {
    try {

      $find = $this->getPayloadById($id);

      if ($find['code'] != 200) {
        return $find;
      }

      $data = $this->letterModel->whereId($id)->delete();

      return $this->success($data, "success deleting data");

    } catch (\Throwable $th) {

      return $this->error($th->getMessage(), 500, $th, class_basename($this), __FUNCTION__ );
    }
  }
}