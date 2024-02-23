<div class="col-lg-6">
    <div class="wow fadeInUp" data-wow-delay="0.2s">
        <form wire:submit="save">
            
            <div class="row g-3">
                <div class="col-md-6">
                {{ $room->price }}
            </div>

                <div class="col-md-6">
                {{ $room->size }}
                </div>
                <div class="col-md-6">
                    <div class="form-floating date" id="date3" data-target-input="nearest">
                        <input wire:model="start" type="date" class="form-control datetimepicker-input" placeholder="Check In"/>
                        <label for="checkin">Check In</label>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating date" id="date4" data-target-input="nearest">
                        <input wire:model="end" type="date" class="form-control datetimepicker-input"  placeholder="Check Out"  />
                        <label for="checkout">Check Out</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <h1>start={{ $start }}</h1>
                        <h1>end={{ $end }}</h1>
                        <h1>day={{ $day }}</h1>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-success w-100 py-3" type="submit"><strong style="color: black">Book Now</strong></button>
                </div>
            </div>
        </form>
    </div>
</div>