@props(['seats'])

@foreach ($seats as $key => $seat)
    @php
        $seatStatus = $seat->bookingSeat->pluck('seat_status_id')->first();
        $seatColor = null;
        if ($seatStatus === 2) {
            $seatColor = 'bg-grey text-white/70';
        } elseif ($seatStatus === 3) {
            $seatColor = 'bg-green/50 text-black/50';
        } elseif ($seatStatus === 4) {
            $seatColor = 'bg-red/70 text-black/50';
        } else {
            $seatColor = 'bg-white text-secondary-black hover:bg-green hover:text-white';
        }

    @endphp
    <button value="{{ $seat->id }}" {{ $seatStatus ? 'disabled' : '' }}
        class="flex-1 basis-full max-w-[40px] h-[40px] {{ $seatColor }}">
        {{ $seat->name }}
    </button>
@endforeach
