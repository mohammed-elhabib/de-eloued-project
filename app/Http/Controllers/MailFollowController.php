<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\MailFollow;
use Illuminate\Http\Request;

class MailFollowController extends Controller
{


    public function list()
    {
        $mailFollows = MailFollow::all();
        return view("mail-follow.list", ["mailFollows" => $mailFollows]);
    }
    public function add()
    {
        $actors = Actor::all();

        return view("mail-follow.add-mail", ["actors" => $actors]);
    }
    public function store(Request $request)
    {
        $path = $request->file('file')->store('sp', 'public');
        $mailFollowRows = $request->except(["_token", "targets"]);
        $mailFollowRows['path'] =  "storage/" . $path;
        $mailFollow = MailFollow::create($mailFollowRows);
        $mailFollow->actors()->attach($request->only("targets")["targets"]);

        return redirect()->route("mail-follow-list");
    }

    public function view($mail_follow_id)
    {
        $mailFollow = MailFollow::find($mail_follow_id);
        return view("mail-follow.view-mail", ["mailFollow" => $mailFollow]);
    }
    public function changeStatus($mail_follow_id, $status)
    {
        $mailFollow = MailFollow::find($mail_follow_id);
        $mailFollow->status = $status;
        $mailFollow->save();
        return  $mailFollow->status;
    }
}
