@extends('pages.base')

@section('content')

    <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student):?>
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->user->full_name}}</td>
                        <td>{{$student->status}}</td>
                        
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
        
@endsection