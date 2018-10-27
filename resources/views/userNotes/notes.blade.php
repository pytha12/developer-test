@extends('layouts.app')
@section('content')
    
    <div class="container py-3">
        <div class="row">
            <div class="col">
                 <h3>Notes for <span style="color:#6cb2eb;">{{$user->name}}</span></h3>
            </div>
            <div class="col md-auto">
            </div>
            <div class="col col-lg-3">
            <a href="/">
            <button type="button" title="Back to users" class="btn btn-outline-primary">&laquo;&nbsp;users</button>
            </a>
              <button type="button" class="btn btn-outline-primary usn-anch" id="{{$user->id}}" data-user_name="{{$user->name}}">Add Note</button>
            </div>
          </div>
      
          <br/>
        <table class="table">

            <tbody>
                 
                @forelse($notes as $note)
                        <tr>
                            <td>
                                {{$note->note}}
                            </td>
                        </tr>
                @empty
                    <tr>
                        <td colspan="3">
                           No notes yet
                        </td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>

@stop

