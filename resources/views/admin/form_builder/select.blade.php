<label for="{{ $name }}" class="col-sm-2 control-label @if(isset($field['required']) && $field['required']) required @endif">{{ $field['label'] }}</label>

<div class="col-sm-10">
    <select class="form-control" id="{{ $name }}" name="{{ $name }}" @if(isset($field['required']) && $field['required']) required @endif>
        
        @if(isset($field['default']) && !empty($field['default']))<option value="0">{{ $field['default'] }}</option>@endif
            
        @foreach($field['options'] as $id => $value)
            <option value="{{ (isset($field['valueid']) && $field['valueid']) ? $id : $value }}">{{ $value }}</option>
        @endforeach
    </select>
</div>