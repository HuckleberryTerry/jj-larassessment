<x-layout>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-12">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Employees</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            @foreach ($employees as $employee)
                <h2>{{$employee['first_name'] . ' ' . $employee['companies_id']}}</h2>
                {{-- <p>{{$employee->company->name}}</p>
                <img src="{{$employee->company->logo}}"> --}}
            @endforeach
        </div>
    </main>
</x-layout>