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
        $mailFollowRows = $request->except(["_token", "targets"]);
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('sp', 'public');
            $mailFollowRows['path'] =  "storage/" . $path;
        }

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
    public function edit($mail_follow_id)
    {
        $actors = Actor::all();
        $mailFollow = MailFollow::with("actors")->find($mail_follow_id);
        return view("mail-follow.edit-mail", ["mailFollow" => $mailFollow, "actors" => $actors]);
    }

    public function editStore(Request $request)
    {
        $mailFollowRows = $request->except(["_token", "targets"]);
        $mailFollow = MailFollow::find($mailFollowRows["id"]);
        if ($mailFollow) {
            if ($request->hasFile('file')) {
                $path = $request->file('file')->store('sp', 'public');
                $mailFollow->path =  "storage/" . $path;
            }

            $mailFollow->number = $mailFollowRows["number"];
            $mailFollow->source = $mailFollowRows["source"];
            $mailFollow->sourceTarget = $mailFollowRows["sourceTarget"];
            $mailFollow->title = $mailFollowRows["title"];
            $mailFollow->date = $mailFollowRows["date"];
            $mailFollow->note = $mailFollowRows["note"];
            $mailFollow->save();
            $mailFollow->actors()->detach();
            $mailFollow->actors()->attach($request->only("targets")["targets"]);
        }

        return redirect()->route("mail-follow-list");
    }

    public function delete($mail_follow_id)
    {
        $mailFollow =  MailFollow::find($mail_follow_id);
        $mailFollow->delete();
        return redirect()->route("mail-follow-list");
    }
}
