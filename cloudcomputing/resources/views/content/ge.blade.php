@extends('navbar')
@section('content')
<div class="container-fluid move-down">
  <!-- Top ten chart -->
  <h1><span class="fa fa-star"></span> Top 10 Vocabularies</h1>
  @foreach($topTenData as $key => $value)
    <input id="topChartData{{ $key+1 }}" name="topChartData{{ $key+1 }}" type="hidden" value="{{ $value->ge }}" data-word="{{ $value->words }}" data-token="{{ csrf_token() }}">
  @endforeach
  <div class="center-block" style="max-width: 960px; max-height:540px;">
    <canvas id="topChart" width="960" height="540"></canvas>
  </div>

  <!-- Vocabulary list -->
  <h1><span class="fa fa-list-ol"></span> Vocabularies List</h1>
  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Vocabulary</th>
          <th>Total count</th>
          <th>Anthropology & Archaeology</th>
          <th>Art</th>
          <th></th>
          <th>Astronomy</th>
          <th>Biology & Ecology</th>
          <th  class="danger">Geology & EarthScience</th>
          <th>Science</th>
          <th>SocialScience</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($toeicData as $key => $value)
          <tr>
            <td>{{ ($toeicData->currentPage()-1)*($toeicData->perPage())+($key+1) }}</td>
            <td>{{ $value->words }}</td>
            <td>{{ $value->all }}</td>
            <td>{{ $value->aa }}</td>
            <td>{{ $value->ar }}</td>
            <td></td>
            <td>{{ $value->as }}</td>
            <td>{{ $value->be }}</td>
            <td  class="warning">{{ $value->ge }}</td>
            <td>{{ $value->sc }}</td>
            <td>{{ $value->ss }}</td>
            <td>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#wordChart{{ $value->id}}">
              <!-- <button id="btn{{ $value->id}}" onclick="btnClick({{ $value->id}})" type="button" class="btn btn-danger" data-toggle="modal" data-target="#wordChart{{ $value->id}}" data-id="{{ $value->id}}" data-word="{{ $value->words }}" data-all="{{ $value->all }}" data-aa="{{ $value->aa }}" data-ar="{{ $value->ar }}" data-as="{{ $value->as }}" data-be="{{ $value->be }}" data-ge="{{ $value->ge }}" data-sc="{{ $value->sc }}" data-ss="{{ $value->ss }}"> -->
                <span class="fa fa-pie-chart"></span>
              </button>
            </td>
          </tr>
          <input id="chartData{{$key+1}}" name="chartData{{$key+1}}" type="hidden" value="" data-token="{{ csrf_token() }}" data-id="{{ $value->id}}" data-word="{{ $value->words }}" data-all="{{ $value->all }}" data-aa="{{ $value->aa }}" data-ar="{{ $value->ar }}" data-as="{{ $value->as }}" data-be="{{ $value->be }}" data-ge="{{ $value->ge }}" data-sc="{{ $value->sc }}" data-ss="{{ $value->ss }}">
          <!-- chart modal -->
          <!-- <input id="chart" name="chart" type="hidden" value="" data-token="{{ csrf_token() }}"> -->
          <div class="modal fade" id="wordChart{{ $value->id}}" class="wordChart" tabindex="-1" role="dialog" aria-labelledby="wordChartLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="text-center">
                    <h3 class="modal-title" id="wordChartLabel{{ $value->id}}">Chart</h3>
                    <canvas id="myChart{{ $value->id}}" width="400" height="400"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="text-center">
    {!!$toeicData->render()!!}
  </div>
</div>
<!-- set navbar active -->
<script>
  $(".nav").find(".active").removeClass("active");
  $("#nav-ge").addClass("active");
</script>
{!! HTML::script('js/custom.js') !!}
@stop
