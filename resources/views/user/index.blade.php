@extends('contacts.layout')
@section('content')
    <div class="pull-left">
        <h2>Profile create </h2>

    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <a class="btn btn-success" href="{{route('user.create'}}">create profile</a>
            </div>

        </div>

    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>

    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Father Name</th>
        </tr>
        @foreach($user as $user)
    <tr>
             <td>{{ ++$i }}</td>
             <td>{{ $item->name }}</td>
             <td>{{ $item->fathername }}</td>
             <td>
                 <form action="{{route('user.destroy',$user->id}}" method="POST">
                 <a class="btn btn-info" href="{{route('user.show',$user->id}}">Show</a>
                 <a class="btn btnprimary" href="{{route('user.edit',$user->id}}">Edit</a>
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger" ></i> Delete</button>
                 </form>
             </td>
     </tr>
     @endforeach
    </table>
                                
                                        
 
                                       
                              
                            
                     