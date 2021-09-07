@extends("layouts.portfolio_layouts.main")

@section('title')
User List
@endsection

@section("content")
<div class="card mt-3">
    <div class="card-header text-end">
        <strong class="float-left mt-1">User List</strong>
    </div>
    <div class="card-body">
        @if($message = Session::get('success'))
        <x-alert-msg type="success" :message="$message" class="mb-4" id="alertMsg"/>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th></th>
                        <th class="text-nowrap">ID</th>
                        <th class="text-nowrap">First Name</th>
                        <th class="text-nowrap">Last Name</th>
                        <th class="text-nowrap">Username</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center text-nowrap">
                            <a href="{{ route('personal:user.edit', $user->id) }}" class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="text-nowrap">{{ $user->id }}</td>
                        <td class="text-nowrap">{{ $user->first_name }}</td>
                        <td class="text-nowrap">{{ $user->last_name }}</td>
                        <td class="text-nowrap">{{ $user->username }}</td>
                        <td class="text-nowrap">{{ $user->email }}</td>
                        <td class="text-nowrap">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y h:i A') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
const alertMsg = document.getElementById("alertMsg");

if(alertMsg){
    setTimeout(()=>{
        alertMsg.style.display = 'none';
    },3000);
}
</script>
@endsection