@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <div> 
                        <br/>
                        <form class="form-horizontal" role="form" method="GET" action="{{ url('/info-pag-ibig') }}">
                        <button class="btn btn-primary ">
                            Pag-ibig Data &nbsp  &nbsp
                            <span class="glyphicon glyphicon glyphicon-plus"> </span>
                        </button>
                        </form>
                         <form class="form-horizontal" role="form" method="GET" action="{{ url('/info-bir') }}">
                        <button class="btn btn-warning ">
                            BIR Data &nbsp  &nbsp
                            <span class="glyphicon glyphicon glyphicon-plus"> </span>
                        </button>
                    </form>
                         <form class="form-horizontal" role="form" method="GET" action="{{ url('/info-SSS') }}">
                        <button class="btn btn-danger ">
                            SSS Data &nbsp  &nbsp
                            <span class="glyphicon glyphicon glyphicon-plus"> </span>
                        </button>
                        <br/>
                    </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
