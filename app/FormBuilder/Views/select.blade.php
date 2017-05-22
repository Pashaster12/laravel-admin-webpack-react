<label for="{{ $name }}" class="col-sm-2 control-label @if(isset($required) && $required) required @endif">{{ $label }}</label>

<div class="col-sm-10">
    <select class="form-control" id="{{ $name }}" name="{{ $name }}" @if(isset($required) && $required) required @endif>
        
        @if(isset($default) && !empty($default))<option value="0">{{ $default }}</option>@endif
            
        @foreach($options as $id => $value)
            <option value="{{ (isset($valueid) && $valueid) ? $id : $value }}">{{ $value }}</option>
        @endforeach
    </select>
</div>