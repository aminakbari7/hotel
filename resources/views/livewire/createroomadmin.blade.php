<div class="card-body" dir="rtl">
    <h4 class="card-title">add room</h4>
    @if (session()->exists('msg'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    </div>
  @endif
    <form class="forms-sample" wire:submit="save">
      <div class="form-group">
        <label for="exampleInputName1">size</label>
        <input wire:model="size" name="size" type="text" class="form-control" id="exampleInputName1" placeholder="size">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail3">price</label>
        <input wire:model="price" name="price" type="text" class="form-control" id="exampleInputEmail3" placeholder="price">
      </div>
      <div class="form-group">
        <label for="exampleSelectGender">child</label>
        <select wire:model="child" class="form-control" id="exampleSelectGender">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <div class="input-group col-xs-12" dir="ltr">
          <input  type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
          <span class="input-group-append">
            <input wire:model="image" type="file" class="file-upload-browse btn btn-warning" type="button"> </button>
          </span>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleTextarea1">Textarea</label>
        <textarea  wire:model="description" class="form-control" id="exampleTextarea1" rows="4"></textarea>
      </div>
     
      <button class="btn btn-success "> save </button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>