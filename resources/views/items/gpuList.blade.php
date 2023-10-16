@foreach($gpus as $gpu)
    <div class='item'>
        <div class='name'>{{ $gpu->gpu_fullname }}
        <br>    
        <img src='{{ $gpu->gpu_image_path }}' alt='gpus' class='image'>
        </div>
        <div class='connector'>{{ $gpu->gpu_connector }}</div>
        <div class='memory'>{{ $gpu->gpu_memory }}</div>
        <div class='memory_bus'>{{ $gpu->gpu_memory_bus }}</div>
        <div class='timing'>{{ $gpu->gpu_timing }}</div>
        <div class='outputs'>{{ $gpu->gpu_outputs }}</div>
        <div class='price'>{{ $gpu->gpu_price }} zł</div>
        <button class='add' onClick='add("{{ $gpu->gpu_fullname }}", {{ $gpu->gpu_price }})'>Dodaj</button>
    </div>
@endforeach