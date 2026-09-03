<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();

        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);

        session()->put('last_revisor_action', $article->id);

      return redirect()->back()->with(
          'message',
         __('ui.revisorRequestSent')
);
    }

    public function reject(Article $article)
    {
        $article->setAccepted(false);

        session()->put('last_revisor_action', $article->id);

        return redirect()->back()->with(
            'message',
            "Hai rifiutato l'articolo {$article->title}"
        );
    }

    public function undo()
    {
        $articleId = session('last_revisor_action');

        if ($articleId) {
            $article = Article::find($articleId);

            if ($article) {
                $article->setAccepted(null);
            }

            session()->forget('last_revisor_action');
        }

        return redirect()->back()->with(
            'message',
            'Ultima operazione annullata'
        );
    }

    public function becomeRevisor()
    {
       Mail::to('admin@presto.it')
        ->locale(session('locale', 'it'))
        ->send(new BecomeRevisor(auth()->user()));

        return redirect()->back()->with(
            'message',
            __('ui.revisorRequestSent')
        );
    }

    public function makeRevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();

        return redirect()->route('homepage')->with(
            'message',
            "{$user->name} è diventato revisore"
        );
    }
}