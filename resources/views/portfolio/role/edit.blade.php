@extends("layouts.portfolio_layouts.main")

@section("content")
<div class="card mt-3">
    <div class="card-header text-end">
        <strong class="float-left mt-1">Role Edit</strong>
    </div>
    <div class="card-body">
        @if($message = Session::get('success'))
            <x-alert-msg type="success" :message="$message" class="mb-4" id="alertMsg"/>
        @endif

        <form action="{{ route('personal:role.update', $role->id) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="alert bg-blue-50">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div>
                        <label for="name" class="w-full required"><strong>Name</strong></label>
                        <x-alt-input name="name" id="name" value="{{ $role->name }}"/>
                        @error('name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="displayName" class="w-full"><strong>Display Name</strong></label>
                        <x-alt-input name="display_name" id="displayName" value="{{ $role->display_name }}"/>
                        @error('display_name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label for="desc" class="w-full"><strong>Description</strong></label>
                        <x-alt-input name="description" id="desc" value="{{ $role->description }}"/>
                        @error('description')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr>

            <fieldset>
                <legend>Permissions</legend>
                <div class="grid grid-cols-1 md:grid-cols-4">
                @foreach ($permissions as $permission)
                    <div>
                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="permission{{ $permission->id }}" {{ $role->permissions->contains($permission->id)? "checked": "" }}>
                        <label for="permission{{ $permission->id }}">{{ $permission->name}}</label>
                    </div>
                @endforeach
                </div>
            </fieldset>
            

            <div class="w-full mt-3">
                <a href="{{ route('personal:role.index') }}" class="btn btn-sm btn-secondary">Back</a>
                <button type="submit" class="btn btn-success btn-sm">Update</button>
            </div>
        </form>
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
