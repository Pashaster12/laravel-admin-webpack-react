<label for="{{ $name }}" class="col-sm-2 control-label @if(isset($field['required']) && $field['required']) required @endif">{{ $field['label'] }}</label>

<div class="col-sm-10">
    <textarea class="form-control" rows="{{ $field['row_count'] ?? 2 }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $field['placeholder'] }}" @if(isset($field['required']) && $field['required']) required @endif>
        {{ old($name) ?? $field['value'] }}
    </textarea>
</div>