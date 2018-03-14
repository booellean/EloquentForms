{{-- Don't include this, use $Field->makeOptionView() instead --}}
@if(!$view_only || $Field->attributes->checked)
    <label class="radio" for={{ $Field->attributes->id }}>
        @if(!$view_only)
            <input {!! $Field->attributes !!}>
        @endif
        {{ $Field->getOption($key) }}
    </label>
@endif
