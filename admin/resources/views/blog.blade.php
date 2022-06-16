@extends('layout.master')


@section('contant')
    


<footer>

    <div class="container" >
        
           
        <a href="" type="button" class="btn btn-primary " style="margin-left: 1049px;margin-top: 83px; width:200px">Add User</a>
            <table class="table table-info table-striped" style=" margin-top: 2px;width: 1000px;margin-left: 248px; box-shadow: 10px 3px 15px grey;">
        
          
                <thead>
                  <tr>
                    <th scope="col">Blog ID</th>
                    <th scope="col">Tixt Content</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><a href=""type="button" class="btn btn-primary">Edit</a></td>
                    <td><a href=""type="button" class="btn btn-danger ">Delete</a></td>
                  </tr>

                </tbody>
              </table>
             

          </footer>



    </div>
    


@endsection




@include('layout.nav')