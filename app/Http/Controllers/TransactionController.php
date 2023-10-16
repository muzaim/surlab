<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Contracts\Encryption\DecryptException;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {

        $dataTransaction = Transaction::with(['users', 'products', 'payments'])
            ->whereHas('users', function ($query) use ($request) {
                $query->where('id', $request);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('transaction.index', compact('dataTransaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $params = $request->all();
        $transaksi = new Transaction;
        $transaksi->users_id = Auth::user()->id;
        $transaksi->products_id = $params['products_id'];
        $transaksi->address = $params['address'];
        $transaksi->phone = $params['phone'];
        $transaksi->total = $params['total'];
        $transaksi->payments_id = $params['payments_id'];
        $saldoSekarang = $params['saldo'] - $params['total'];
        $transaksi->save();

        return redirect()->back()->with(array('saldoSekarang' => $saldoSekarang, 'message' => 'Transaction was successful, and you have ' . currency_IDR($saldoSekarang) . ' left.'));;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function checkout(Request $request)
    {
        $dataProduct = Product::where('id', $request->id)->get();
        // $dataPayment = DB::select('SELECT * FROM payments');
        $dataPayment = Payment::all();
        $saldo = 1000000;
        return view('transaction.checkout', ["dataProduct" => $dataProduct, "saldoSekarang" => $saldo, "dataPayment" => $dataPayment]);
    }
}
