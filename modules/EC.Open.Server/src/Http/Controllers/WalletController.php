<?php
namespace GuoJiangClub\EC\Open\Server\Http\Controllers;


use Dingo\Api\Http\Response;
use GuoJiangClub\Component\Point\Repository\PointRepository;
use GuoJiangClub\Component\User\Repository\UserRepository;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    private $user;
    private $point;

    public function __construct(
        UserRepository $userRepository,
        PointRepository $pointRepository)
    {
        $this->user = $userRepository;
        $this->point = $pointRepository;
    }

    public function myPoint()
    {
        $id=request()->user()->id;
        $type=request('type');
        $point = $this->point->getSumPoint($id, $type);
        $pointValid = $this->point->getSumPointValid($id);
        $pointFrozen = $this->point->getSumPointFrozen($id, $type);
        $pointOverValid = $this->point->getSumPointOverValid($id, $type);

        $data = [
            'point' => $point,
            'pointValid' => $pointValid,
            'pointFrozen' => $pointFrozen,
            'pointOverValid' => $pointOverValid
        ];
        
        return $this->success($data);
    }

}