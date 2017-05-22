<label for="{{ $name }}" class="col-sm-2 control-label @if(isset($required) && $required) required @endif">{{ $label }}</label>

<div class="col-sm-10">
    <textarea class="form-control" rows="{{ $row_count ?? 2 }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}" @if(isset($required) && $required) required @endif>{{ old($name) ?? $value }}</textarea>
</div>