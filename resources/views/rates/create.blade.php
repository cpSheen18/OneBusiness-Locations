<form action="{{ route('branchs.rates.store', [$branch]) }}" method="POST">
  {{ csrf_field() }}
<div class="col-md-12 text-center">
  <div class="form-group {{ $errors->has('template_name') ? 'has-error' : '' }}"
      style="display:inline-block;">
    <label for="">Template name:</label>
    <input type="text" class="form-control" name="template_name" style="width: 300px;display:inline-block;">
    @if($errors->has('template_name'))
      <span class="help-block">{{ $errors->first('template_name') }}</span>
    @endif
  </div>
  <div class="form-group" style="display:inline-block;vertical-align: top;">
    <label for="">Choose color:</label>
    <div class="color-picker"></div>
    <input type="hidden" name="Color">
  </div>

  <hr style="margin: 10px 0px 0px 0px;">
</div>

<div class="col-md-12">
  <h4>Miscellaneous</h4>
  <div class="row">
    <div class="control-radio col-xs-6">
      <input type="radio" name="charge_mode" id="per_min" value="1" checked>
      <label for="per_min">Per Min</label>
    </div>
    <div class="control-radio col-xs-6">
      <input type="radio" name="charge_mode" id="per_5_min" value="5">
      <label for="per_5_min">Per 5 Mins</label>
    </div>
  </div>
  <hr style="margin: 10px 0px;">
  <div class="form-group">
    <div class="row">
      <div class="col-xs-6">
        <div class="control-checkbox" style="margin-top: 5px;">
          <input type="checkbox" name="MinimumChrg" id="change_minimum" value="1">
          <label for="change_minimum">Change Minimum</label>
        </div>
      </div>
      <div class="col-xs-6">
        <input type="number" name="MinimumTime" class="form-control" style="width: 100px;display:inline-block;"
          disabled="true"
        > (mins)
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-6">
        <label for="">Timezone 1:</label>
        <input type="time" class="form-control" name="ZoneStart1">
      </div>
      <div class="col-xs-6">
        <label for="">Discount 1:</label>
        <input type="number" class="form-control" name="Discount1">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-6">
        <label for="">Timezone 1:</label>
        <input type="time" class="form-control" name="ZoneStart2">
      </div>
      <div class="col-xs-6">
        <label for="">Discount 1:</label>
        <input type="number" class="form-control" name="Discount2">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-6">
        <label for="">Timezone 1:</label>
        <input type="time" class="form-control" name="ZoneStart3">
      </div>
      <div class="col-xs-6">
        <label for="">Discount 1:</label>
        <input type="number" class="form-control" name="Discount3">
      </div>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <div class="row">
      <div class="col-xs-6">
        <div class="control-checkbox" style="margin-top: 25px;">
          <input type="checkbox" name="DiscStubPrint" id="DiscStubPrint" value="1">
          <label for="DiscStubPrint">Enable Discount Stub</label>
        </div>
      </div>
      <div class="col-xs-6">
        <label for="">Discount Stub Validity:</label>
        <input type="number" class="form-control" style="width: 100px;display:inline-block;"
          name="DiscValidity"> (days)
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="">Discount Stub Msg:</label>
    <input type="text" class="form-control" name="DiscStubMsg">
  </div>
  <hr style="margin: 0px 0px 10px 0px;">
  <div class="form-group text-center">
    <button class="btn btn-sm btn-success">
      <i class="fa fa-save"></i> Create
    </button>
    <a class="btn btn-sm btn-default" href="{{ route('branchs.rates.index', [$branch]) }}">
      <i class="fa fa-reply"></i> Back
    </a>
  </div>
</div>
</form>