@foreach($disks as $disk)
    <div class='item'>
        <div class='name'>{{ $disk->disk_fullname }}
        <br>    
        <img src='{{asset("images/disk/" . $disk->disk_image_path)}}' alt='Disks' class='image'>
        </div>
        <div class='capacity'>{{ $disk->disk_capacity }}</div>
        <div class='interface'>{{ $disk->disk_interface }}</div>
        <div class='format'>{{ $disk->disk_foramt }}</div>
        <div class='read_speed'>{{ $disk->disk_read_speed }}</div>
        <div class='write_speed'>{{ $disk->disk_write_speed }}</div>
        <div class='price'>{{ $disk->disk_price }} zł</div>
        <a href="{{ url('adddisk-to-cart/'.$disk->id) }}" class="add">Dodaj</a>
    </div>
@endforeach