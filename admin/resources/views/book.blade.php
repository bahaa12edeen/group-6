@extends('layout.master')


@section('contant')
    


<footer>

    <div class="container" >
        
           
        <a href="{{url('bookInsert')}}" type="button" class="btn btn-primary " style="margin-left: 1049px;margin-top: 83px; width:200px">Add Book</a>
            <table class="table table-info table-striped" style=" margin-top: 2px;width: 1000px;margin-left: 248px; box-shadow: 10px 3px 15px grey;">
        
               

                <thead>
                  <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Book Author </th>
                    <th scope="col">Book Image</th>
                    <th scope="col">Book File</th>
                    <th scope="col">UpDate</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                
                <tbody class="table-group-divider">
                    @foreach ($show as $item)
                        
                    
                  <tr>
                    <th scope="row">{{$item->book_id}}</th>
                    <td>{{$item->book_name}}</td>
                    <td>{{$item->book_description}}</td>
                    <td>{{$item->book_author}}</td>
                    <td> <img src="/files/{{ ($item->book_image) }}" style="width:40px" />  </td>
                    <td>{{$item->book_file}}</td>
                    <td><a href="{{url('bookUpdate/'.$item->book_id)}}"type="button" class="btn btn-primary">Update</a></td>
                    <td><a href="{{url('bookDelete/'.$item->book_id)}}"type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
             

          </footer>



    </div>
    


@endsection




@include('layout.nav')