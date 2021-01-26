<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\{Schema, Blade};

use App\Models\{Task};

class TasksRowComposer 
{
    public function compose(View $view )
    {
       $Tasks = Task::all();
       $view->with(compact('Tasks'));
    }
}
