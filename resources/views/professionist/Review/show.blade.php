<x-app-layout>
    <div class="py-12">
        <div class="container m-auto">
            <ul class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">
                <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg bg-blue-600 text-white">
                    Tutti i lavori presenti nel database
                </li>
                @foreach ($jobs as $info)
                    <li class="px-6 py-2 border-b border-gray-200 w-full">
                        {{ $info->name }}

                    </li>
                @endforeach
            </ul>
            <ul class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">
                <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg bg-blue-600 text-white">
                    Tutte le sponsorships nel database
                </li>
                @foreach ($sponsorships as $item)
                    <li class="px-6 py-2 border-b border-gray-200 w-full">
                        {{ $item->name }} / {{ $item->pivot->startDate }} / {{ $item->pivot->endDate }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
