@include('includes.head')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="table-responsive">
                    <table class="table align-middle table-dark">
                        <thead class="align-middle">
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        <tbody>
{{--                        @for($i = 0; $i < count($users); $i ++)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $users[$i]['name'] }}</td>--}}
{{--                                <td>{{ $users[$i]['age'] }}</td>--}}
{{--                            </tr>--}}
{{--                        @endfor--}}
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['age'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @foreach($users as $user)
            @foreach($user as $key=>$value)
                <p>{{ $key }}</p>
                <small>{{ $value }}</small>
            @endforeach
        @endforeach
    </div>

@include('includes.scripts')
