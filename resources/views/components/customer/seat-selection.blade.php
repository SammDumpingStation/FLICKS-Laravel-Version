@props(['seats', 'cinemaID'])

@foreach ($seats as $key => $seat)
    @php
        $seatStatus = $seat->bookingSeat->where('cinema_id', $cinemaID)->pluck('seat_status_id')->first();
        $disabled = 'disabled';
        $seatColor = null;
        if ($seatStatus === 2) {
            $seatColor = 'bg-grey text-white/70';
        } elseif ($seatStatus === 3) {
            $seatColor = 'bg-green/50 text-black/50';
        } elseif ($seatStatus === 4) {
            $seatColor = 'bg-red/70 text-black/50';
        } else {
            $disabled = null;
            $seatColor = 'bg-white text-secondary-black hover:bg-green hover:text-white';
        }

    @endphp
    <button value="{{ $seat->id }}" {{ $disabled }}
        class="flex-1 basis-full max-w-[40px] h-[40px] {{ $seatColor }}">
        {{ $seat->name }}
    </button>
@endforeach
