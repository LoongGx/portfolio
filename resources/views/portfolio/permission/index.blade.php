@extends("layouts.portfolio_layouts.main")

@section("content")
<div class="card mt-3">
    <div class="card-header text-end">
        <strong class="float-left mt-1">Permission List</strong>
        <a href="{{ route('personal:permission.create') }}" class="btn btn-primary btn-sm">Create</a>
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
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Display Name</th>
                        <th class="text-nowrap">Description</th>
                        <th class="text-nowrap">Created At</th>
                        <th class="text-nowrap">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                    <tr>
                        <td class="text-center text-nowrap">
                            <a href="{{ route('personal:permission.edit', $permission->id) }}" class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></a>
                        </td>
                        <td class="text-nowrap">{{ $permission->id }}</td>
                        <td class="text-nowrap">{{ $permission->name }}</td>
                        <td class="text-nowrap">{{ $permission->display_name }}</td>
                        <td class="text-nowrap">{{ $permission->description }}</td>
                        <td class="text-nowrap">{{ \Carbon\Carbon::parse($permission->created_at)->format('d/m/Y h:i A') }}</td>
                        <td class="text-nowrap">{{ \Carbon\Carbon::parse($permission->updated_at)->format('d/m/Y h:i A') }}</td>
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
