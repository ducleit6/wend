<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Http\Requests\blogs\BlogsRequest;
use Auth;
use Str;

class BlogsController extends Controller
{   
    public function view(){
        $data = Blogs::view();
        return view('home.blogs', compact('data'));
    }
    
    public function create(){
        return view('home.blogs-feedback');
    }

    public function store(BlogsRequest $req){
        $ex = $req->image->extension();
        $file_name = 'BLOG-'.time().'-'.Str::random(10).'.'.$ex;
        $req->image->move(public_path('upload'), $file_name);
        $data = [
            'user_id' => $req->user_id,
            'name'=> $req->name,
            'content' => $req->content,
            'image' => $file_name
        ];
        $add = new Blogs();
        if($add->add($data)){
            return redirect()->route('blogs.view')->with('yes','Thêm Bài đăng thành công');
        }else{
            return redirect()->route('blogs.view')->with('no','Thêm Bài đăng không thành công');
        }
        
    }

    public function singer(blogs $data)
    {   
        return view('home.blogs-singer',compact('data'));    
    }

/*****************************************************************ADMIN*********************************************************/
    public function index(Request $req){
        $data = Blogs::searchFilter($req)->paginate(6);
        $orderByOption = config('options.FAQs_options');
        $orderByStatus = config('options.FAQs_status_options');
        $options = array_merge($orderByOption,$orderByStatus);
        return view('admin.blogs.index', compact('data','options'));
    }

    public function editAdmin(blogs $acc)
    {   
        return view('admin.blogs.edit',compact('acc'));    
    }
    public function updateAdmin(blogs $acc,Request $req)
    {   
        $update = new Blogs();
        $update = $update->editFind($acc->id);
        $data = $req->only('name', 'user_id','content','status');
        if($update->edit($data)){
            return redirect()->route('blogs.index')->with('yes','Cập nhật đăng thành công');
        }else{
            return redirect()->route('blogs.index')->with('no','Cập nhật đăng không thành công');
        }
    }

}