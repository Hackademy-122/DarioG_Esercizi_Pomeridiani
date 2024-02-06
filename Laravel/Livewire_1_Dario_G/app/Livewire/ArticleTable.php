<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{


    public function destroy($id){


        Article::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.article-table', ['articles'=>Article::all()]);
    }

}
