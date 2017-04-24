<label for="{{ $name }}" class="col-sm-2 control-label @if(isset($field['required']) && $field['required']) required @endif">{{ $field['label'] }}</label>

<div class="col-sm-10">
    <input class="form-control" id="{{ $name }}" type="email" name="{{ $name }}" placeholder="{{ $field['placeholder'] }}" value="{{ old($name) ?? $field['value'] }}" @if(isset($field['required']) && $field['required']) required @endif>
</div>