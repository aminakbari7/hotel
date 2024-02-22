<div class="container-fluid">
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
              <tr style="background-color: burlywood">
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
            <tr style="background-color: rgb(159, 191, 180)">
              <th scope="row" style="background-color: rgb(219, 183, 183)">new</th>
              <td><input wire:model="newsize" type="text" placeholder="{{$room->size }}" value="{{$room->size }}"></td>
              <td><input wire:model="newchild" type="text" placeholder="{{$room->child }}"value="{{$room->child }}" ></td>
              <td><input wire:model="newprice" type="text" placeholder="{{$room->price }}" value="{{$room->price }}"></td>
              <td><input wire:model="newimage" type="file" placeholder="{{$room->image }}" value="{{$room->image }}"></td>
              <td><textarea wire:model="newdescription" type="text" placeholder=" {{$room->description}}"value=" {{$room->description}}"></textarea></td>
              <td><a wire:click="editroom({{ $room->id }})" class="btn btn-success  text-center ">save</a> </td>
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
                    <a wire:click="destroyroom({{ $room->id }})" class="btn btn-danger  text-center "><svg width="25" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                  </svg></a>
                    <a wire:click="updateroom({{ $room->id }})" class="btn btn-warning  text-center "><svg width="25" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                  </svg></a>
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