@extends('layouts.default')

@section('content')
    <section class="mb-6">
        <div class="max-w-screen-md mx-auto">
            <form action="{{ url('/ticket') }}" method="post">
                @csrf
                <div class="justify-center rounded">
                    <label class=>
                        First name <input type="text" name="first_name" id="first_name"
                                class="rounded px-4 py-2 border-2 m-2"><br/>
                    </label>

                    <label> Last name
                        <input type="text" name="last_name" id="last_name"
                                class="rounded px-4 py-2 border-2 m-2"><br/>
                    </label>

                    <label> Address
                        <input type="text" name="address" id="address"
                                class="rounded px-4 py-2 border-2 m-2"><br/>
                    </label>

                    <label> Year at University
                        <input type="number" name="year_at_uni" id="year_at_uni"
                                class="rounded px-4 py-2 border-2 m-2" min="0" max="5" step="1"><br/>
                    </label>

                    <label> Operating system
                        <select class="rounded px-4 py-2 border-2 m-2">
                            <option value="Windows">Windows</option>
                            <option value="Mac">Mac</option>
                            <option value="Linux">Linux</option>
                        </select>
                        <br/>
                    </label>

                    <label> Description of issue
                        <input type="text" name="issue" id="issue"
                                class="w-full rounded px-4 py-2 border-2 m-2"><br/>
                    </label>

                    <input type="submit" value="Submit" class="bg-purple-500 px-4 py-2 rounded text-white">
                </div>

            </form>
        </div>
    </section>
@endsection