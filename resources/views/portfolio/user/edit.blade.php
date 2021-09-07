@extends("layouts.portfolio_layouts.main")

@section("content")
<div class="card mt-3">
    <div class="card-header text-start">
        <strong>Edit User: {{ $user->full_name ?? $user->first_name." ".$user->last_name }} ({{$user->id}})</strong>
    </div>
    <div class="card-body">
        @if($message = Session::get('success'))
        <x-alert-msg type="success" :message="$message" class="mb-4" id="alertMsg"/>
        @endif

        <form action="{{ route('personal:user.update', $user->id ) }}" method="POST">
            @method('PUT')
            @csrf

            <!-- BASIC USER INFO -->
            <div class="alert bg-blue-50">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div>
                        <label for="firstName" class="w-full"><strong>First Name</strong></label>
                        <x-alt-input name="first_name" value="{{ $user->first_name }}" id="firstName"/>
                        @error('first_name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="lastName" class="w-full"><strong>Last Name</strong></label>
                        <x-alt-input name="last_name" value="{{ $user->last_name }}" id="lastName"/>
                        @error('last_name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="username" class="w-full"><strong>Username</strong></label>
                        <x-alt-input name="username" value="{{ $user->username }}" id="username"/>
                        @error('username')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="w-full"><strong>Email</strong></label>
                        <x-alt-input type="email" name="email" value="{{ $user->email }}" id="email"/>
                        @error('email')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="w-full"><strong>Password</strong></label>
                        <x-alt-input type="password" name="password" id="password"/>
                        @error('password')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="passwordConfirmation" class="w-full"><strong>Confirmed Password</strong></label>
                        <x-alt-input type="password" name="password_confirmation" id="passwordConfirmation"/>
                        @error('password_confirmation')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="company" class="w-full"><strong>Company</strong></label>
                        <x-alt-input name="company" value="{{ $user->company }}" id="company"/>
                        @error('company')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr>

            <!-- ROLE -->
            <h3 class="text-xl font-semibold bg-gray-200 p-2 my-2">Roles</h3>
            @foreach ($roles as $role)
            <div class="col-sm-12">
                <div class="form-check form-check-inline">
                    @isset($user)
                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                    @else
                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}">
                    @endisset
                    <label class="form-check-label" for="">{{ $role->display_name }}</label>
                </div>
            </div>
            @endforeach

            <div class="w-full mt-3">
                <a href="{{ route('personal:user.index') }}" class="btn btn-sm btn-secondary">Back</a>
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

<!-- 
<div class="flex flex-wrap">
    <div class="w-full md:w-1/2">
        <label for="">Test</label>
        <input type="text" class="w-full">
    </div>
    <div class="w-full md:w-1/2">
        <label for="">Test</label>
        <input type="text" class="w-full">
    </div>
</div>
-->