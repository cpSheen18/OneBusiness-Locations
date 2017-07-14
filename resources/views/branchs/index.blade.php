@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Branch Lists</h3>
              <form class="col-xs-3 pull-right" method="GET">
                <select name="status" class="form-control" id="filter-branchs">
                    <option value="all">All</option>
                    <option {{ $status == "active" ? "selected" : "" }} value="active">Active</option>
                    <option {{ $status == "inactive" ? "selected" : "" }} value="inactive">Inactive</option>
                </select>
              </form>
            </div>
            <div class="box-body">
              @if(count($branchs))
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th >Province</th>
                            <th>City</th>
                            <th>Acitve</th>
                            <th>Branch Name</th>
                            <th>Operator</th>
                            <th>Street</th>
                            <th>Units</th>
                            <th></th>
                        </tr>
                        @foreach($branchs as $province)
                            @php $index = 0; @endphp
                            @foreach($province['cities'] as $city)
                                @foreach($city as $branch)
                                <tr class="text-center">
                                    @if($index == 0)
                                    <td rowspan="{{ $province['count'] }}">{{ $branch->city->province->Province }}</td>
                                    @endif
                                    @if($loop->index == 0)
                                        <td rowspan="{{ count($city) }}">{{ $branch->city->City }}</td>
                                    @endif
                                    <td class="text-center">
                                        <div class="control-checkbox">
                                            <input type="checkbox" {{ $branch->Active == 1 ? 'checked' : ''}}>
                                            <label>&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>{{ $branch->Branch }}</td>
                                    <td>{{ $branch->Description }}</td>
                                    <td>{{ $branch->Street }}</td>
                                    <td>{{ $branch->MaxUnits }}</td>
                                    <td>
                                        <a href="{{ route('branchs.edit', [$branch]) }}" style="margin-right: 10px;" class="btn btn-info btn-xs"
                                            title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" style="margin-right: 10px;" class="btn btn-success btn-xs"
                                            title="Rates template and scheduling">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php $index++; @endphp
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
              @else
                <div class="error">
                    {{ __('No data to display') }}
                </div>
              @endif
            </div>
            <div class="box-footer">
                <a href="/home" class="btn btn-default">
                    <i class="fa fa-reply"></i> Back
                </a>
                @if(\Auth::user()->checkAccess("Branch Setup & Details", "A"))
                    <a href="{{ route('branchs.create') }}" class="btn btn-success">New Branch</a>
                @endif
            </div>
          </div>
        </div>
      </div>
</section>
@endsection