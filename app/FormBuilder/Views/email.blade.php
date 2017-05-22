<label for="{{ $name }}" class="col-sm-2 control-label @if(isset($required) && $required) required @endif">{{ $label }}</label>

<div class="col-sm-10">
    <input class="form-control" id="{{ $name }}" type="email" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) ?? $value }}" @if(isset($required) && $required) required @endif>
</div>