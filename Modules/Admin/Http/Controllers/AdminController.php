<?php

namespace Modules\Admin\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Bill_Detail;
use App\Bills;
use App\User;
use App\ProductType;
use Auth;
use Session;
use Hash;
use Helpers;

class AdminController extends Controller
{
    public function index()
    {
        $bill = Bills::orderby('id', 'desc')->paginate(5);
        $new_cus = User::orderby('id', 'desc')->paginate(5);
        $new_pro = Product::orderby('id', 'desc')->paginate(3);
        return view('admin::index', compact('bill', 'new_cus', 'new_pro'));
    }
    public function getlogin()
    {
        return view('admin::login');
    }
    public function postlogin(Request $request)
    {
        //dd($request->all());
        $credentials = array('email'=>$request->email, 'password'=>$request->password);
        if(Auth::guard('admins')->attempt($credentials)){
              //dd(Auth::guard('customers')->user()->phone_number);
              return redirect('admin/index')->with(['flag'=>'success','message'=>'Login successfully']);
        }
        else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Email or password does not match']);
        }
       // return view('admin::show');
    }
    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect('admin/login');
    }
    public function getproduct()
    {
        if(Auth::guard('admins')->check())
        {
        $product = Product::with('type_products:id,name')->paginate(10);
        return view('admin::product', compact('product'));
        }
        else{
            return redirect()->route('login');
        }
    }
    public function productdetail(Request $request)
    {
        if(Auth::guard('admins')->check())
        {
        $cat = Product::with('type_products:id,name')->where('id', $request->id)->first();
        $category = ProductType::all();
        //dd($category);
        $product = Product::where('id', $request->id)->first();
        return view('admin::product-detail', compact('product', 'category', 'cat'));
        }
        else{
            return redirect()->route('login');
        }
    }
    public function add_product(){
        if(Auth::guard('admins')->check()){
        $category = ProductType::all();
        return view('admin::add_product', compact('category'));
        }
        else{
            return redirect()->route('login');
        }
    }
    public function post_add_product(Request $request){
        if(Auth::guard('admins')->check()){
            //dd($request->all());
            $product = new Product();
            $product->name = $request->pro_name;
            $product->id_type = $request->pro_category_id;
            $product->description = $request->pro_des;
            $product->unit_price = $request->pro_unit_price;
            $product->promotion_price = $request->pro_promotion_price;
            $product->quantity = $request->pro_qty;
            $product->name = $request->pro_name;
            if($request->hasFile('pro_image'))
            {
                $file = upload_image('pro_image');
                if(isset($file['name']))
                {
                    $product->image = $file['name'];
                }
            }
            if(isset($request->pro_status)){
                $product->status = 1;
            }
            else{
                $product->status = 0;
            }
            $product->save();
            return redirect()->route('product');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function post_update_product(Request $request, $id){
        if(Auth::guard('admins')->check()){
            $product = Product::find($id);
            $product->name = $request->pro_name;
            $product->id_type = $request->pro_category_id;
            $product->description = $request->pro_des;
            $product->unit_price = $request->pro_unit_price;
            $product->promotion_price = $request->pro_promotion_price;
            $product->quantity = $request->pro_qty;
            $product->name = $request->pro_name;
            if($request->hasFile('pro_image'))
            {
                $file = upload_image('pro_image');
                if(isset($file['name']))
                {
                    $product->image = $file['name'];
                }
            }
            if(isset($request->pro_status)){
                $product->status = 1;
            }
            else{
                $product->status = 0;
            }
            $product->save();
            return redirect()->route('product');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function getorder(){
        if(Auth::guard('admins')->check())
        {
        $bill = Bills::all();
        return view('admin::order', compact('bill'));
        }
        else{
            return redirect()->route('login');
        }
    }
    public function order_detail(Request $request){
        if(Auth::guard('admins')->check())
        {
        //dd($request->id);
        $bill_detail = Bill_Detail::where('id_bill', $request->id)->get();
        $bill = Bills::where('id', $request->id)->first();
        //dd($bill_detail);
        return view('admin::order_detail', compact('bill_detail', 'bill'));
        }
        else{
                return redirect()->route('login');
            }
    }
    public function order_update(Request $request, $id){
        $bill = Bills::find($id);
        $bill->status = $request->bill_status;
        $bill->save();
        return redirect()->back();
    }
    public function get_customer(){
        $customer = User::where('user_group', '=', 1)->get();
        return view('admin::customer', compact('customer'));
    }
}
