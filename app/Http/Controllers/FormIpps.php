<?php

namespace App\Http\Controllers;

use App\FormIpps2021;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FormIpps extends Controller
{
    //
    public function FormValidator(Request $request){
        $rules = [
            'field1' => 'required',
            'field2' => 'required',
            'field5' => 'required|email',
            'field6' => 'required|same:field5|email'
        ];
        $messages =
            [
                'field1.required' => '姓を入力してください。',
                'field2.required' => '名を入力してください。',
                'field5.required' => 'Eメールアドレスを入力してください。',
                'field6.required' => 'Eメールアドレス(確認用)を入力してください。',
                'field5.email' => 'Eメールアドレスをご確認ください。',
                'field6.same' => 'Eメールアドレス(確認用)はEメールアドレスと同じアドレスを入力してください。',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else{
                $form_ipps = new FormIpps2021;
                $form_ipps->first_name = $request->field1;
                $form_ipps->last_name = $request->field2;
                $form_ipps->company_name = $request->field3;
                $form_ipps->department = $request->field4;
                $form_ipps->email = $request->field5;
                $form_ipps->save();
                return redirect()->back()->with('message', 'IT WORKS!');
            }
    }
}
