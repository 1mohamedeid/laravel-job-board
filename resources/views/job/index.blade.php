<div>
    <h1>Job Borad</h1>
    <h3>My Name Is: {{ $name }}</h3>
    @foreach ($jobs as $job)
        <div>{{ $job['title'] }}:{{ $job['salary'] }}</div>
    @endforeach
</div>
