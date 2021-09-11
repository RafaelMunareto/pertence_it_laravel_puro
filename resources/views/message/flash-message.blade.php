
@if ($message = Session::get('successEmail'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card  teal accent-4 ">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{$message}}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif

@if (session('status'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card  teal accent-4 ">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ session('status') }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif


@if ($message = Session::get('errorEmail'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card red darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $message }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card red darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $message }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif

@if ($message = Session::get('cadastroOK'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card teal accent-4">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $message }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif

@if ($message = Session::get('exclusao'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card red darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $message }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif

@if ($errors->any())
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card red darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
             @foreach ($errors->all() as $error)
                 <p>{{ $error }}</p>
            @endforeach
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif


@if ($message = Session::get('exclusaoHistorico'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card red darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $exclusaoHistorico }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card amber">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $message }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif


@if ($message = Session::get('info'))
<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card blue lighten-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <p>{{ $message }}</p>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>
@endif
