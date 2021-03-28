<?php

namespace App\Repositories;

use App\Models\Payments;
use App\Repositories\RepoInterface\Payment;

class EloquentPaymentRepository implements Payment{

    private $model;
    private $data_payment;
    public function __construct(Payments $model){
        $this->model = $model;
    }

    public function tambahpayment($data){
        $this->data_payment = $data;
        return $this->model->create([
           'payment_name' => $this->data_payment
        ]);
    }

    public function getpayment(){
        return $this->model->get();
    }

    public function deletepayment($id){
        $delete = $this->model->destroy($id);
        return $delete;
    }
}