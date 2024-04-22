<?php

namespace App\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoList extends Component
{
    public $todo_id;
    public $msg = '';
    public $todos = [];
    public $count = 0;

    public function mount ()
    {
        $this->todos = Todo::where('user_id', Auth::id())->get();
        // $todos = Todo::all();
    }

    // public function hydrate ()
    // {
    //     $this->count++;
    // }

    // public function updated ()
    // {
    //     $this->count++;
    //     // $todos = Todo::all();
    // }

    public function updated ($field)
    {
        $this->validateOnly($field, [
            // 'msg' => 'required|min:10',
            'msg' => 'required',
        ]);
    }

    public function addTodo()
    {
        // echo "<pre>"; print_r($this->msg); die("========");
        $this->validate([
            // 'msg' => 'required|min:10'
            'msg' => 'required'
        ]);
        $todo = new Todo();
        $todo->user_id = Auth::id();
        $todo->message = $this->msg;
        $todo->save();
        $this->todos = Todo::all();
        // $this->todos[] = $this->msg;
        // $this->todo = '';
        $this->reset('msg');
    }

    public function delete($id)
    {
        // dd($id);
        $todo = Todo::find($id);
        $todo->delete();
        $this->todos = Todo::where('user_id', Auth::id())->get();
        // $this->todos[] = $this->msg;
        $this->reset('msg');
    }

    public function edit($id)
    {
        // dd($id);
        $todo = Todo::find($id);
        $this->todos = Todo::where('user_id', Auth::id())->get();
        // echo "<pre>"; dd($todo);
        // $this->todos[] = $this->msg;
        $this->msg = $todo->message;
        $this->todo_id = $todo->id;
    }

    public function update($id)
    {
        // dd($id);
        $todo = Todo::find($id);
        $todo->message = $this->msg;
        $todo->save();
        $this->todos = Todo::where('user_id', Auth::id())->get();
        // $this->todos[] = $this->msg;
        $this->reset('msg');
        $this->reset('todo_id');
        $this->reset('count');
    }

    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
