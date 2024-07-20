@props(['label'])
<div class="w-full space-y-2">
    <x-form.label label="{{ $label }}" />
    <textarea name="description" id="description"
        class="border-2 border-secondary-grey rounded-md w-full bg-transparent p-4 min-h-64"
        placeholder="Enter Description here...."></textarea>
</div>
