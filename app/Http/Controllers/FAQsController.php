<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\FAQs;
use App\models\CategoryFAQs;
use App\Http\Requests\FAQs\FAQsAddRequest;
use App\Http\Requests\FAQs\FAQsUpdateRequest;

class FAQsController extends Controller
{
    public function view(){
        $data = FAQs::view();
        return view('home.FAQs',compact('data'));
    }

    public function index(Request $req){
        $data = FAQs::searchFilter($req)->paginate(6);
        $orderByOption = config('options.FAQs_options');
        $orderByStatus = config('options.FAQs_status_options');
        $options = array_merge($orderByOption,$orderByStatus);
        return view('admin.FAQs.index', compact('data','options'));
    }

    public function create(){
        $cats = CategoryFAQs::get();
        return view('admin.FAQs.create', compact('cats'));
    }

    public function store(FAQsAddRequest $req){
        $form_data = $req->only('name', 'catfaqs_id','content','status');
        $FAQs = new FAQs();
        if ($FAQs->add($form_data)) {
            return redirect()->route('FAQs.index')->with('yes','Thêm mới thành công');
        }
        return redirect()->back()->with('no','Thêm mới không thành công');
    }

    public function edit($id){
        $FAQs = new FAQs();
        $FAQs = $FAQs->editFind($id);
        $cats = CategoryFAQs::get();
        return view('admin.FAQs.edit', compact('FAQs','cats'));
    }

    public function update(FAQsUpdateRequest $req, $id){
        $FAQs = new FAQs();
        $FAQs = $FAQs->editFind($id);
        $form_data = $req->only('name', 'catfaqs_id','content','status');
        
        if ($FAQs->edit($form_data)) {
            return redirect()->route('FAQs.index')->with('yes','Sửa thành công');
        }
        return redirect()->back()->with('no','Sửa không thành công');
    }

    public function delete($id){
        $FAQs = new FAQs();
        $FAQs = $FAQs->editFind($id);
        if ($FAQs->delete()) {
            return redirect()->route('FAQs.index')->with('yes','Xóa thành công');
        }
        return redirect()->back()->with('no','Không thể xóa mục này vì có sản phẩm tham chiếu');
    }
}
