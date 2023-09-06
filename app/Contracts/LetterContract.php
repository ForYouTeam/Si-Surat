<?php

namespace App\Contracts;

interface LetterContract
{
  public function getAllPayload(array $payload);
  public function getPayloadById(int $id);
  public function createPayload(array $payload);
  public function deletePayload(int $id);
}