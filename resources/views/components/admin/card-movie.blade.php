@props(['img', 'title', 'href' => null])
<a class="space-y-6 border border-secondary-grey flex-1 basis-full max-w-[500px] p-8 rounded-md hover:bg-secondary-grey group" href="{{ $href }}">
    <div class="border border-grey rounded-full p-3 max-w-fit group-hover:bg-green group-hover:border-green">
      <img class="h-10 w-10" src="{{ Vite::asset($img) }}" alt="{{ $title }} Card">
    </div>
    <h4 class="text-2xl font-semibold">{{ $title }}</h4>
</a>
