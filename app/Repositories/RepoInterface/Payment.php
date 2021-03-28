<?php

namespace App\Repositories\RepoInterface;

Interface Payment {
    public function tambahpayment(array $data);
    public function getpayment();
    public function deletepayment($id);
}