<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/6/21
 * Time: 18:47
 */

namespace GuoJiangClub\EC\Open\Server\Http\Controllers;


use GuoJiangClub\Component\Balance\Balance;
use GuoJiangClub\Component\Balance\BalanceRepository;
use GuoJiangClub\EC\Open\Server\Transformers\BalanceTransformer;

class BalanceController extends Controller
{

    protected $balanceRepository;
    protected $rechargeRuleRepository;
    protected $pay;

    public function __construct(BalanceRepository $balanceRepository)
    {     
        $this->balanceRepository = $balanceRepository;
    }

    public function index()
    {
        $type = request('type');
        $limit = request('limit') ? request('limit') : 15;
        $balance = $this->balanceRepository->fluctuation(request()->user()->id, $type)->paginate($limit);

        return $this->response()->paginator($balance, new BalanceTransformer());
    }

    public function sum()
    {
        $user = request()->user();
        $sum = Balance::sumByUser($user->id);
        if (!is_numeric($sum)) {
            $sum = 0;
        } else {
            $sum = (int)$sum;
        }
        return $this->success(compact('sum'));
    }

}