<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class AllIssuesTable extends Component
{
    public function render()
    {
        return view('livewire.all-issues-table', [
            'tickets' => Ticket::all(),
        ]);
    }
}
