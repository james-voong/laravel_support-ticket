<div>
    <table class="table-auto w-full mb-6">
        <thead>
            <tr>
                <th class="px-4 py-2">First name</th>
                <th class="px-4 py-2">Last name</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2">Year at University</th>
                <th class="px-4 py-2">Degree</th>
                <th class="px-4 py-2">Operating System</th>
                <th class="px-4 py-2">Description of Issue</th>
                <th class="px-4 py-2">Date created</th>
                <th class="px-4 py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td class="border px-4 py-2">{{ $ticket->first_name }}</td>
                    <td class="border px-4 py-2">{{ $ticket->last_name }}</td>
                    <td class="border px-4 py-2">{{ $ticket->address }}</td>
                    <td class="border px-4 py-2">{{ $ticket->year_at_uni }}</td>
                    <td class="border px-4 py-2">{{ $ticket->degree }}</td>
                    <td class="border px-4 py-2">{{ $ticket->operating_system }}</td>
                    <td class="border px-4 py-2">{{ $ticket->issue }}</td>
                    <td class="border px-4 py-2">{{ $ticket->created_at->format('d/m/Y H:i') }}</td>
                    <!-- TODO Implement status -->
                    <td class="border px-4 py-2">{{ $ticket->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($tickets as $ticket)
        {{ $ticket }}
    @endforeach
</div>
