@props(['status' => ''])

@if ($status)
    <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
        <p class="text-sm">{{ $status }}</p>
    </div>
@endif
