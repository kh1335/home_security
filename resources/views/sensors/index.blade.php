@extends('layouts.app')

@section('title', 'Sensors')

@section('content')
    <h1 class="text-center">Sensor State</h1>
    <table class="table table-bordered">
        <tr class="active text-center">
            <th>Name</th>
            <th>Type</th>
            <th>State</th>
            <th>Alarm</th>
        </tr>
        @foreach($sensors as $sensor)
            {{ $sensor->setState() }}
            <tr class="{{ $sensor->alarm() ? 'danger' : 'success' }}">
                <td>{{ $sensor->name }}</td>
                <td>{{ str_replace('App\\', '', $sensor->sensor_type) }}</td>
                <td>{{ $sensor->sensor->state . (isset($sensor->sensor->units) ? $sensor->sensor->units : '') }}</td>
                <td>{{ $sensor->alarm() ? 'Alarm' : '' }}</td>
            </tr>
        @endforeach
    </table>
    <div class="text-right">
        <a class="btn btn-default" href="{{ route('sensors.index') }}" role="button">Refresh State</a>
    </div>
@endsection
