<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\EloquentPaymentRepository;
use App\Jobs\DeleteProcess;
use DB;
use App\Events\SendNotification;

class PaymentController extends Controller
{
    private $repo;

    public function __construct(EloquentPaymentRepository $repo){
        $this->repo = $repo;
    }

    public function tambahdata(){
        return view('tambah');
    }

    public function add(Request $request){
        $payment_name = $request->get('payment_name');
        $this->repo->tambahpayment($payment_name);
        return redirect('/payments');        
    }

    public function tampilkandata(EloquentPaymentRepository $repo){
        $data = $this->repo->getpayment();
        return view('latihan',['data' =>$data]);
    }

    public function deletedata(Request $request){
        $data = $request->input('dataid',[]);
        foreach($data as $key=>$id){
            DeleteProcess::dispatch($data);
            event(new SendNotification('Telah Berhasil Menghapus '.$key.' Data'));
        }
        return event(new SendNotification('Hapus Data Selesai'));    
    }
}
