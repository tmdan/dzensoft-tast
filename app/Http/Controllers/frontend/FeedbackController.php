<?php

namespace App\Http\Controllers\frontend;

use App\Feedback;
use App\Http\Requests\frontend\FeedbackStoreRequest;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
   public function index()
   {
        return view('index');
   }



   public function store(FeedbackStoreRequest $request)
   {
       Feedback::create($request->all());
       return back()->with('success', 'Сообщение принято!');
   }


}
