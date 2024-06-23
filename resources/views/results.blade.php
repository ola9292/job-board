@extends('layouts.app')

@section('content')
<div class="mt-10 max-w-[986px] mx-auto space-y-10">

    <section>
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job"/>
            @endforeach
        </div>

    </section>
</div>

@endsection
