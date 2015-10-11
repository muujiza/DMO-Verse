@extends('layouts.main')

@section('head')
	<title>Items List</title>
@endsection

@section('content')
<div class="uk-container uk-container-center uk-margin-large-top">
<div class="uk-panel uk-panel-box">
<table class="uk-table">
    <caption>Item Lists</caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Icon</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($items as $item)
    	<tr>
			<td>{{ $item->name }}</td>
			<td>{{ $item->description }}</td>
			<td>{{ $item->type }}</td>
			<td><img src="{{ $item->icon }}"></td>
		</tr>
		@endforeach
    </tbody>
</table>
		
</div>
@endsection