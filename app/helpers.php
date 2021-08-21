<?php   

use App\Models\User;
use Illuminate\Support\Facades\DB;

//get user 
function returnUserBalanceById(){
    $bal = DB::table('wallets')->where('users_id' , session('LoggedUser'))->value('balance');
    echo sprintf('%.2f' , $bal/100 );
}


?>