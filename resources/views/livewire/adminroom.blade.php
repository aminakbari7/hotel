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
            <tr>
                <th scope="row">{{ $room->id }}</th>
                <td>{{ $room->size }}</td>
                <td>{{ $room->child }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->image }}</td>
                <td>{{ $room->description }}</td>
                <td>
                    <a href="delete-products.html" class="btn btn-danger  text-center ">delete</a>
                    <a href="delete-products.html" class="btn btn-warning  text-center ">update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
</div>
    </div>
  </div>
</div>
</div>