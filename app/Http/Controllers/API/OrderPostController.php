<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderPostController extends Controller
{
    public $successStatus = 200;


    public function getAllPosts(Request $request)
    {
        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid


        $lists = DB::table('orders_api')
        ->leftJoin('users','orders_api.id', '=','users.id')
        ->select('orders_api.id','orders_api.product','orders_api.quantity','orders_api.price','orders_api.time_of_dispatch','orders_api.time_of_arrival','orders_api.name_of_handler','orders_api.name_of_reciever','users.name','orders_api.created_at','orders_api.updated_at')
        ->get();
        return response()->json($lists,$this->successStatus);

    }



    public function getPost(Request $request)
    {

        $id = $request['pid']; //old post id

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $lists = Order::where('id',$id)->first();
            if($user != null){
                return response()->json($lists,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    public function searchPost(Request $request)
    {

        $params = $request['p']; //p = params

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $lists = Order::where('product','LIKE','%' .$params . '%')->get();
            if($user != null){
                return response()->json($lists,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }
}
