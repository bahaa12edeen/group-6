@extends('layout.master')


@section('contant')
    


<footer>

    <div class="container">
  
      <a href="{{url('volunteerInsert')}}" type="button" class="btn btn-primary" style="margin-left: 1049px;margin-top: 83px; width:200px">Add Volunteer</a>

            
            <table class="table table-info table-striped"style=" margin-top: 2px;width: 1000px;margin-left: 248px; box-shadow: 10px 3px 15px grey;">
                <thead >
                  <tr>
                    <th scope="col">Volunteer ID</th>
                    <th scope="col">Volunteer Name</th>
                    <th scope="col">Volunteer Email</th>
                    <th scope="col">Volunteer Password</th>
                    <th scope="col">Volunteer Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @foreach ($show as $item)
                  <tr>
                    <th scope="row">{{$item->volunteer_id}}</th>
                    <td>{{$item->volunteer_name}}</td>
                    <td>{{$item->volunteer_email}}</td>
                    <td>{{$item->volunteer_password}}</td>
                    <td><img src="/files/{{ ($item->volunteer_img) }}" style="width:40px" /></td>

                    <td><a href="{{url('volunteer/'.$item->volunteer_id)}}"type="button" class="btn btn-primary">Update</a></td>

                    <td><a href="{{url('volunteers/'.$item->volunteer_id)}}"type="button" class="btn btn-danger ">Delete</a></td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
      
          </footer>



    </div>
    


@endsection



@include('layout.nav')