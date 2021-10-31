@extends('layouts.default')

@section('content')
    <section class="mb-6">
        <div class="max-w-screen-md mx-auto">
            <form action="{{ url('/ticket') }}" method="post">
                @csrf
                <div class="flex justify-center shadow rounded">
                    <!--
                        'operating_system',
                    -->
                    <label>
                        First name
                        <input type="text" name="first_name" id="first_name"
                                class="w-full rounded-l px-4 py-2 outline-none"><br/>
                    </label>

                    <label> Last name
                        <input type="text" name="last_name" id="last_name"
                                class="w-full rounded-l px-4 py-2 outline-none"><br/>
                    </label>

                    <label> Address
                        <input type="text" name="address" id="address"
                                class="w-full rounded-l px-4 py-2 outline-none"><br/>
                    </label>

                    <label> Year at University
                        <input type="number" name="year_at_uni" id="year_at_uni"
                                class="w-full rounded-l px-4 py-2 outline-none" min="0" max="5" step="1"><br/>
                    </label>

                    <!-- Select goes here -->

                    <label> Description of issue
                        <input type="text" name="issue" id="issue"
                                class="w-full rounded-l px-4 py-2 outline-none"><br/>
                    </label>

                    <input type="submit" value="Submit" class="bg-purple-500 px-4 py-2 rounded-r text-white">
                </div>

            </form>
        </div>
    </section>
@endsection