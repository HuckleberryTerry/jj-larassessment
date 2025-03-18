<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Companies</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{-- content --}}
            @foreach ($companies as $company)
                <h2>{{$company->name}}</h2>
                <img src="{{$company->logo}}">
            @endforeach
        </div>
    </main>
</x-layout>