<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CategoryFAQs;
use App\Http\Requests\FAQs\CategoryFAQsAddRequest;
use App\Http\Requests\FAQs\CategoryFAQsUpdateRequest;

class CategoryFAQsController extends Controller
{
    public function index(Request $req){
        $data = CategoryFAQs::searchFilter($req)->paginate(6);
        $orderByOption = config('options.FAQs_options');
        $orderByStatus = config('options.FAQs_status_options');
        $options = array_merge($orderByOption,$orderByStatus);
        return view('admin.CategoryFAQs.index', compact('data','options'));
    }

    public function create(){
        return view('admin.CategoryFAQs.create');
    }

    public function store(CategoryFAQsAddRequest $req){
        $form_data = $req->only('name', 'question','content','status');
        $FAQs = new CategoryFAQs();
        if ($FAQs->add($form_data)) {
            return redirect()->route('CategoryFAQs.index')->with('yes','Thêm mới thành công');
        }
        return redirect()->back()->with('no','Thêm mới không thành công');
    }

    public function edit($id){
        $FAQs = new CategoryFAQs();
        $FAQs = $FAQs->editFind($id);
        return view('admin.CategoryFAQs.edit', compact('FAQs'));
    }

    public function update(CategoryFAQsUpdateRequest $req, $id){
        $FAQs = new CategoryFAQs();
        $FAQs = $FAQs->editFind($id);
        $form_data = $req->only('name','status');
        
        if ($FAQs->edit($form_data)) {
            return redirect()->route('CategoryFAQs.index')->with('yes','Sửa thành công');
        }
        return redirect()->back()->with('no','Sửa không thành công');
    }

    public function delete($id){
        $FAQs = new CategoryFAQs();
        $FAQs = $FAQs->editFind($id);
        if ($FAQs->delete()) {
            return redirect()->route('CategoryFAQs.index')->with('yes','Xóa thành công');
        }
        return redirect()->back()->with('no','Không thể xóa mục này vì có sản phẩm tham chiếu');
    }
}