<?php

namespace App\Contracts;

interface LetterTypeContract
{
    public function getAllPayload();
    public function getPayloadById(int $id);
}
