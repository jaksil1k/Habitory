@extends('layouts.app')

@section('css-link')
    <style type="text/css">
        body {
            width: 90%;
            margin: auto;
        }
        .header {
            margin: 22px 0px 0px 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

    </style>
@endsection

@section('content')
<header class="header">
    <div>
        <h5 id="h5">Habit</h5>
    </div>

    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Open modal
        </button>
    </div>

    </div>
</header>

<div class="modal mt-5" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="popup-title primary-text text-def">Create Habit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="">
                    @csrf
                    <div  class="row">
                        <label for="habitName" class="col-sm-3 col-form-label">Habit Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Daily Check-in" maxlength="64" value="" name="habitName">
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-sm-3 col-form-label">Frequency</label>
                        <div class="col-sm-6">
                            <input type="number" name="quantity" min="1" max="7" placeholder="Days per week" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <label for="goal" class="col-sm-3 col-form-label">Goal</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="Achive it all" name="goal">
                        </div>
                    </div>


                    <div class="row">
                        <label for="goalDays" class="col-sm-3 col-form-label">Goal</label>
                        <div class="col-sm-6">
                            <input type="number" name="goalDays" min="1" max="365" placeholder="1-365" class="form-control">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Habit name</th>
            <th scope="col">days per a week</th>
            <th scope="col">goal</th>
            <th scope="col">duration</th>
        </tr>
    </thead>
    <tbody>
        {{$i = 1}}
        @foreach($habits as $habit)
          @if($habit->user_id == auth()->user()->id)
              <tr>
                  <th scope="row">{{$i}}</th>{{$i++}}
                  <td>{{$habit->name}}</td>
                  <td>{{$habit->quantity}}</td>
                  <td>{{$habit->goal}}</td>
                  <td>{{$habit->days}}</td>
              </tr>
          @endif
        @endforeach
    </tbody>
</table>
@endsection
