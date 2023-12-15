<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogPanelController extends Controller
{

    public function index()
    {
        return view("panel");
    }

    public function create(Request $req)
    {
        $user = User::find(Auth::id());
        $blog = new Blog([
            'title' => $req->title,
            'authorid' => $user->id,
            'authorname' => $user->name,
            'summary' => $req->summary,
            'content' => $req->text,
        ]);
        $blog->save();

        $count = DB::table('blogs')->where("authorid", $user->id)->count('authorid');

        /**
         * SELECT COUNT(CustomerID) AS OrdersFromCustomerID7 FROM Orders
         * WHERE CustomerID=7;
         */
        $req->session()->flash('msg-title', 'Blog Created');
        $req->session()->flash('msg', "Good job! Thats your $count. entry.");
        return redirect()->intended(route("panel"));
    }

}
