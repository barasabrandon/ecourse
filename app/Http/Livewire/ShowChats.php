<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Livewire\Component;

class ShowChats extends Component
{
    public $chats;
    public $message;

    public function mount()
    {
        $this->chats = Chat::orderBy('updated_at', 'desc')->get();
    }

    protected $rules = [
        'message' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Chat::create([
            'name' => auth()->user()->name,
            'user_id' => auth()->user()->id,
            'message' => $this->message
        ]);
        //Clearing the message field
        $this->message = '';

        //rerendering the chats
        return redirect()->to(route('chats.index'));
    }

    public function render()
    {
       
        return view('livewire.show-chats');
    }
}
