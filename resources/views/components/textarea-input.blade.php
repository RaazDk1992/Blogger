@props(['disabled' => false,'value'=>''])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'border-orange-400 focus:border-orange-500 focus:ring-orange-600 rounded-md shadow-sm']) }}>{{ $value }}</textarea>
