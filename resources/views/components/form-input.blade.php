<div class="relative">
    <label for="{{ $for }}">
        <img src="{{ $icon }}" class="h-6 w-6 absolute left-4 top-[1.1rem] cursor-pointer" alt="">
    </label>
    <input {{ $attributes->merge(['class' => 'pl-14 bg-transparent w-full border-grey border py-4 px-4 rounded-xl']) }}>
</div>
