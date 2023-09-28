<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Languages | Admin');
        $lang = Language::all();
        return view('admin.language.index', compact('lang'));
    }

    public function add()
    {
        $this->seo()->setTitle('Add Language | Admin');
        return view('admin.language.add');
    }

    public function add_process(Request $request)
    {
        $rules = [
            'name' => 'required',
            'code' => 'required'
        ];

        $message = [
            'name.required' => 'Language Name Is Required',
            'code.required' => 'Language Code Is Required'
        ];

        $validated = $request->validate($rules, $message);

        $lang = new Language();
        $lang->language_name = $validated['name'];
        $lang->lang_code = $validated['code'];
        $lang->save();

        return redirect()->route('admin.lang');
    }
}
