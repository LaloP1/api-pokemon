@foreach($pokemon['types'] as $type)
    @switch($type)
        @case('Planta')
        <span class="bg-[#11A846] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('Veneno')
        <span class="bg-[#E01A94] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('Fuego')
        <span class="bg-[#FC5415] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('Volador')
        <span class="bg-[#21B1E6] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('Agua')
        <span class="bg-[#2183E6] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('Tierra')
        <span class="bg-[#C69756] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('Roca')
        <span class="bg-[#9D550D] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('')
        <span class="bg-[] font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break
        @case('')
        <span class="bg-[] font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>
            @break

        @default
        <span class="bg-[#000000] not-italic font-normal text-[10px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal opacity-1">{{$type}}</span>

    @endswitch
@endforeach
