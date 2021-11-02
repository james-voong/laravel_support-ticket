<div>
    <div class="w-full flex pb-10 justify-center">
        <div class="w-1/3 relative mx-1">
            <select wire:model="orderBy" class="block appearance-none w-full bg-purple-100 border border-gray-200 text-gray-700 py-3
                    px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-purple-200 focus:border-purple-500">
                <option value="created_at">Date created</option>
                <option value="status">Status</option>
            </select>
        </div>
        <div class="w-1/3 relative mx-1">
            <select wire:model="orderAsc" class="block appearance-none w-full bg-purple-100 border border-gray-200 text-gray-700 py-3
                    px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-purple-200 focus:border-purple-500">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
    </div>

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
                    <td class="border px-4 py-2">{{ $ticket->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $tickets->links() !!}
</div>
