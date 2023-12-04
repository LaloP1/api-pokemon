@foreach ($debilidades as $debilidad)
    @switch($debilidad)
    @case('Planta')
    <span class="bg-[#11A846] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('Veneno')
    <span class="bg-[#E01A94] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('Fuego')
    <span class="bg-[#FC5415] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('Volador')
    <span class="bg-[#21B1E6] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('Agua')
    <span class="bg-[#2183E6] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('Tierra')
    <span class="bg-[#C69756] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('Roca')
    <span class="bg-[#9D550D] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('')
    <span class="bg-[] font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break
    @case('')
    <span class="bg-[] font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>
        @break

    @default
    <span class="bg-[#000000] not-italic font-normal text-[18px] font-geologica text-[#ffffff] p-[5px] rounded-[17px] tracking-normal">{{$debilidad}}</span>

    @endswitch
@endforeach
