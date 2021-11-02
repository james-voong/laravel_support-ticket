<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class AllIssuesTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $orderBy = 'created_at';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.all-issues-table', [
            'tickets' => Ticket::orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
