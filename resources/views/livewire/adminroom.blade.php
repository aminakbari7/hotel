<div class="container-fluid">
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">size</th>
                  <th scope="col">child</th>
                  <th scope="col">price</th>
                  <th scope="col">image</th>
                  <th scope="col">description</th>
                  <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($rooms as $room )
            @if($keyroom==1 && $uroom==$room->id)
            <tr>
              <th scope="row">{{ $room->id }}</th>
              <td><input wire:model="newsize" type="text" placeholder="{{$room->size }}" value="{{$room->size }}"></td>
              <td><input wire:model="newchild" type="text" placeholder="{{$room->child }}"value="{{$room->child }}" ></td>
              <td><input wire:model="newprice" type="text" placeholder="{{$room->price }}" value="{{$room->price }}"></td>
              <td><input wire:model="newimage" type="text" placeholder="{{$room->image }}" value="{{$room->image }}"></td>
              <td><input wire:model="newdescription" type="text" placeholder=" {{$room->description}}"value=" {{$room->description}}"></td>
              <td>
                  <a wire:click="editroom({{ $room->id }})" class="btn btn-success  text-center ">save</a> </td>
                  <td><a wire:click="cancelroom" class="btn btn-warning  text-center ">cancel</a>
              </td>
          </tr>
            @endif
            @if($keyroom==-1 && $uroom!=$room->id)
            <tr>
                <th scope="row">{{ $room->id }}</th>
                <td>{{ $room->size }}</td>
                <td>{{ $room->child }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->image }}</td>
                <td>{{ $room->description }}</td>
                <td>
                    <a href="delete-products.html" class="btn btn-danger  text-center ">delete</a>
                    <button wire:click="updateroom({{ $room->id }})" class="btn btn-warning  text-center ">update</button>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table> 
</div>
    </div>
  </div>
</div>
</div>