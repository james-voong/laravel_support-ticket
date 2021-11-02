@extends('layouts.default')

@section('content')
    <section>
        <header>
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold text-center">
                    All issues
                </h1>
            </div>
        </header>
        <livewire:all-issues-table>
    </section>
@endsection