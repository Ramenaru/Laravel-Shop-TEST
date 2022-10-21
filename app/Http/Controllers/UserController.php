<?php

namespace App\Http\Controllers;

use App\Models\detail_transaction;
use App\Models\product;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //HOME PRODUCT
    public function home()
    {
        $data = product::where('category_id','1')->get();
        return view('home',compact('data'));
    }
    public function home2()
    {
        $data2 = product::where('category_id','2')->get();
        return view('home2',compact('data2'));
    }
    public function home3()
    {
        $data3 = product::where('category_id','3')->get();
        return view('home3',compact('data3'));
    }


    //FUNCTION VIEW
    public function detail(Request $request, product $product)
    {
        return view('detail',compact('product'));
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function register()
    {
        return view('register');
    }

    public function cart()
    {
        $detail=detail_transaction::where('user_id',auth()->id())->where('status','cart')->with('product')->get();
        return view('cart',compact('detail'));
    }

    public function buy(detail_transaction $detail_transaction)
    {
        return view('buy',compact('detail_transaction'));
    }

    public function summary(detail_transaction $detail_transaction)
    {
        $sum=detail_transaction::where('user_id',auth()->id())->where('status','checkout')->with('product')->get();
        return view('summary',compact('sum'));
    }

    //LITERALLY FUNCTION
    public function postlogin(Request $request)
    {
        $check=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($check)) {
            $User=Auth::User();

            return redirect()->route('home');
        }
        return back()->with('status','Invalid Username or Password');
    }
        

    public function postregister(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        try {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'role'=>'user'
            ]);
            return redirect()->route('login')->with('success','Register Success');
          } catch (\Exception $e) {
              return redirect()->route('register')->with('fail','Data Already Used');
          }
    }

    public function postcart(Request $request, product $product)
    {
        $request->validate([
            'qty'=>'required'
        ]);

        detail_transaction::create([
            'qty'=>$request->qty,
            'user_id'=>Auth::id(),
            'product_id'=>$product->id,
            'status'=>'cart',
            'total_price'=>$product->price * $request->qty
        ]);
        return redirect()->route('cart')->with('insert','Added to Cart');
    }

    public function delete_cart(detail_transaction $detail_transaction)
    {
        $detail_transaction->delete();
        return back();
    }

    public function postbuy (Request $request, detail_transaction $detail_transaction)
    {
        $request->validate([
            'file'=>'required|file'
        ]);

        $transaction=transaction::create([
            'user_id'=>Auth::id(),
            'invoice'=>'INV'.Str::random(4),
            'total_price'=>$detail_transaction->total_price
        ]);

        $detail_transaction->update([
            'status'=>'checkout',
            'transaction_id'=>$transaction->id,
            'file'=>$request->file->store('images')
        ]);
        return redirect()->route('summary')->with('insert','Success Checkout');
    }

}
