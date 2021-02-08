<div class="card mb-3">
    <img src="https://www.tiaformazione.org/wp-content/uploads/2020/02/keycompetences-european-union-768x432.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List Of Students</h5>
        <p class="card-text">You can find here all the information about students in the system </p>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First name</th>
                    <th scope="col">Second name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->cne}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->secondName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->specialty}}</td>
                    <td>
                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>