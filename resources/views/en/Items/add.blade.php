@extends('layouts.main')

@section('head')
	<title>Add new item</title>
@endsection

@section('content')
@if (count($errors) > 0)
    <div class="uk-alert uk-alert-danger uk-text-center">
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
            	<select name="category" class="uk-form-large uk-width-1-1">
            		<option value="">Category</option>
            		<option>Accesories</option>
            		<option>Attributes</option>
            		<option>Chipsets</option>
            		<option>Consumables</option>
            		<option>DigiEggs (cash)</option>
            		<option>DigiEggs (normal)</option>
            		<option>Enhancements</option>
            		<option>Evolutions</option>
            		<option>Expansions</option>
            		<option>Hatch Materials</option>
            		<option>Scannables</option>
            		<option>Tamer Exchange</option>
            		<option>MISC</option>
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