<div class="col-lg-6">
    <div class="wow fadeInUp" data-wow-delay="0.2s">
        <form>
            {{ $room->size }}
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating date" id="date3" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                        <label for="checkin">Check In</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating date" id="date4" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                        <label for="checkout">Check Out</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                        <label for="message">Special Request</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                </div>
            </div>
        </form>
    </div>
</div>