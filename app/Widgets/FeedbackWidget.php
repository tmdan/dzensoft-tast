<?php

namespace App\Widgets;

use App\Feedback;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class FeedbackWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $allCount = Feedback::all()->count();
        $unreadCount = Feedback::where('status',false)->count();
        $allString = trans_choice('собщение|сообщения|сообщений', $allCount);
        $newString = trans_choice('новое|новых|новых', $unreadCount);
        $unreadString = trans_choice('собщение|сообщения|сообщений', $unreadCount);
        //$string = "новое";
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-mail',
            'title'  => "{$unreadCount} {$newString} {$unreadString}",
            'text'   => __('voyager::dimmer.user_text', ['count' => $allCount, 'string' => $allString]),
            'button' => [
                'text' => "Все сообщения",
                'link' => route('voyager.feedback.index'),
            ],
            'image' => asset('storage/widgets/feedback.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
       return true;
    }
}
