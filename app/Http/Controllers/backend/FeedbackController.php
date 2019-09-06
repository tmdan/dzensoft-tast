<?php

namespace App\Http\Controllers\backend;

use App\Feedback;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class FeedbackController extends VoyagerBaseController
{

    public function show(Request $request, $id)
    {
        Feedback::where('id',$id)->update(['status'=>true]);
        return parent::show($request,$id);
    }

}
