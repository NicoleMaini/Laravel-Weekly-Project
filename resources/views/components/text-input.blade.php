@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2']) !!}>
