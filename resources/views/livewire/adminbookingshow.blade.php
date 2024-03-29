<div class="container-fluid" wire:poll>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                  <tr style="background-color: burlywood">
                      <th scope="col">user id</th>
                      <th scope="col">room id</th>
                      <th scope="col">start</th>
                      <th scope="col">end</th>
                      <th scope="col">day</th>
                      <th scope="col">totalprice</th>
                      <th scope="col">status</th>
                      <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($bookings as $booking )
                @if($keybooking==1 && $ubooking==$booking->id)
                <tr style="background-color: rgb(184, 194, 190)">
                  <th scope="row" style="background-color: rgb(219, 183, 183)">{{ $booking->user_id }}</th>
                  <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->start }}</td>
                    <td>{{ $booking->end }}</td>
                    <td>{{ $booking->day }}</td>
                    <td>{{ $booking->totalprice }}</td>
                  <td>
                    <select wire:model="newstatus" class="form-control" id="exampleSelectGender">
                      <option>select status</option>
                      <option>waitting</option>
                      <option>accept</option>
                      <option>deny</option>
                    </select>
                  </td>
                  <td><a wire:click="update" class="btn btn-success  text-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      </svg>
                </a> </td>
                  </td>
              </tr>
                @endif
                @if($keybooking==-1 && $ubooking!=$booking->id)
                <tr>

                    
                    <th scope="row">{{ $booking->user_id }}</th>
                    <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->start }}</td>
                    <td>{{ $booking->end }}</td>
                    <td>{{ $booking->day }}</td>
                    <td>{{ $booking->totalprice }}</td>

                    @if($booking->status=='waitting')
                    <td class="text-warning">
                     <strong> {{ $booking->status }}</strong>
                    </td>
                    @endif
                    @if($booking->status=='deny')
                    <td class="text-danger">
                     <strong> {{ $booking->status }}</strong>
                    </td>
                    @endif
                    @if($booking->status=='accept')
                    <td class="text-success">
                      <strong>{{ $booking->status }}</strong>
                    </td>
                    @endif


                    <td>
                        <a  wire:click="deletebooking({{ $booking->id }})" wire:key="booking-{{ $booking->id }}" class="btn btn-danger  text-center "><svg width="25" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                      </svg></a>
                        <a wire:click="edit({{ $booking->id }})" class="btn btn-warning  text-center ">
                        <svg width="25" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                         </svg>
                    </a>

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