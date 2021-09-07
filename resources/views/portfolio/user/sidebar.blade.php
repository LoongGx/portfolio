<!-- Sidebar-->
<div class="border-end bg-gray-100" id="sidebar-wrapper">
    <div class="sidebar-heading bg-gray-100"><a href="{{ route('home') }}" class="text-decoration-none text-white"><span class="font-bold text-transparent bg-clip-text bg-gradient-to-br from-blue-400 to-red-600">LOONG-PORTFOLIO</span></a></div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action p-3 bg-gray-200 hover:bg-gray-50" href="{{ route('personal:user.index') }}">All Users</a>
        <a class="list-group-item list-group-item-action p-3 bg-gray-200 hover:bg-gray-50" href="{{ route('personal:role.index') }}">Role</a>
        <a class="list-group-item list-group-item-action p-3 bg-gray-200 hover:bg-gray-50" href="{{ route('personal:permission.index') }}">Permission</a>
        <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Book Management</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Book Checkout/Renew</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Book Return</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Search Book</a> -->
        <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Profile</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">Status</a> -->
    </div>
</div>