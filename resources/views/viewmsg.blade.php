@extends('layout.main')

@section('content')
<body>
    <div class="navbar">
        <div class="logo">
            <br>
            <a href="/"><img src="{{ asset('imgs/agplogo.png') }}" width="200px"></a>

        </div>
        <nav>
            <ul id="MenuItems">
                <li>
                    <a href="/process/logout" class="btn"><b> LOG-OUT </b></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h1>ADMIN DASHBOARD</h1>
        <p>Welcome to the admin dashboard!</p>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{$message->last_name}}</td>
                            <td>{{$message->first_name}}</td>
                            <td>{{$message->email}}</td>
                            <td><textarea name="text" id="" cols="50" rows="5">{{$message->message}}
                                    </textarea></td>
                            <td><a href="/transact/{{$message->message_id}}" class="btn">Transaction</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection

<style>

/* Reset styles */
body {
    margin: 0;
    padding: 0;
}

/* Content area styles */
.content {
    padding: 20px;
}

.content h1 {
    margin-bottom: 20px;
}

.content p {
    color: #666;
}

/* Table styles */
.table-container {
    margin-top: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

table th {
    background-color: #61381e;
}

table th:nth-child(5),
table td:nth-child(5),
table th:nth-child(6),
table td:nth-child(6) {
    width: 100px;
}

table th:nth-child(5),
table td:nth-child(5) {
    text-align: center;
}

table td {
    text-align: center;
}
table td textarea{
    align-items: center;
    padding-right: 10px
}

</style>
