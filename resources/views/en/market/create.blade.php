@extends('layouts.main')

@section('head')
	<title>Make a market</title>
@endsection

@section('content')
@if (count($errors) > 0)
    <div class="uk-alert uk-alert-danger uk-text-center uk-margin-top-remove">
    <strong>Warning!</strong> You got some errors
        @foreach ($errors->all() as $error)
           | {{ $error }}
        @endforeach
    </div>
@endif

<div class="uk-vertical-align uk-text-center uk-height-1-1 uk-margin-large-top">
    <div class="uk-vertical-align-middle uk-margin-large-top" style="width: 280px;">

        <form class="uk-panel uk-panel-box uk-form" method="POST" action="{{ route('itemStore') }}" enctype="multipart/form-data">
        	{!! csrf_field() !!}

            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="text" 
                	placeholder="Item Name" name="name"
                >
            </div>
            <div class="uk-form-row">
                <textarea class="uk-width-1-1 uk-form-large" type="text" 
                	placeholder="Item Description" name="description"
                ></textarea>
            </div>
            <div class="uk-form-row">
            	<select name="type" class="uk-form-large uk-width-1-1">
            		<option value="">Type</option>
            		<option>Sale</option>
            		<option>Trade</option>
            		<option>Bid</option>
            	</select>
            </div>
            <div class="uk-form-row">
            <div class="uk-form-file">
    			<button class="uk-button uk-button-danger">Upload icon</button>
    			<input type="file" name="icon">
			</div>
			</div>
            <div class="uk-form-row">
                <button class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit">Add Item</button>
            </div>
        </form>
    </div>
</div>
@endsection