<?php

namespace App\Contracts\Interfaces\Masters;

interface TransactionTypeServiceInterface
{
    public function getAllData(): array;
    public function addNewData(array $requestedData): array;
    public function deleteDataById(int $id): array;
    public function updateDataById(int $id, array $requestedData): array;
}
