@props(['active' => false])

<a
   aria-current="{{ $active ? 'page' : 'false' }}"
 {{ $attributes->merge(['class' => ($active ? 'bg-green cursor-default font-medium' : 'hover:bg-secondary-grey hover:text-white cursor-pointer text-grey') . ' px-4 basis-full flex items-center justify-center h-14']) }}>{{ $slot }}</a>
