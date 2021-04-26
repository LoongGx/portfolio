@extends('layouts.sp-app')

@section('content')
    <div class="w-full pt-14 block h-full">
        
    </div>

    <div class="">
        <div class="p-6" id="aboutMeSection">
            <div class="flex flex-wrap sm:flex-nowrap bg-gray-100 rounded-lg p-3">
                <h3 class="block sm:hidden w-full text-center text-lg font-bold mb-2">About me</h3>
                <div class="rounded-md mx-auto">
                    <img class="w-48 sm:w-1/2 mx-auto" src="{{ asset('img/profile/img_avatar.png') }}" alt="self-img">
                </div>
                <div class="flex-grow py-3 sm:py-0">
                    <h3 class="text-gray-900 font-bold text-xl hidden sm:block mb-3">About Me</h3>
                    <p class="text-sm text-gray-700 mb-1">Hi My Name is Chen Kuok Loong, I am a Backend Web Developer with PHP and Python.</p>
                    <p class="text-sm text-gray-700 mb-1">I am working as an one of the team member of Research and Development (R&D) Department in current company.</p>
                    <p class="text-sm text-gray-700 mb-1">during weekend, i will utilize my freetime to learn and practice programming</p>
                    <p class="text-sm text-gray-700 mb-1">so that, i am able to troubleshoot and debug different problem when i work.</p>
                </div>
            </div>
        </div>

        <div class="p-6" id="myExpSection">
            <div class="flex flex-wrap sm:flex-nowrap bg-gray-100 rounded-lg p-3">
                <h3 class="block sm:hidden w-full text-center text-lg font-bold mb-2">My Experience</h3>
                <div class="py-3 sm:py-0 flex-grow">
                    <h3 class="text-gray-900 font-bold text-xl hidden sm:block mb-3">My Experience</h3>
                    <p class="text-sm text-gray-700 mb-2">I am graduated Diploma in Internet Technology in 2015.</p>
                    <p class="text-sm text-gray-700 mb-2">Currently working as a Assistant Senior Web Developer in a company.</p>
                    <p class="text-sm text-gray-700 mb-2">I have 2 years experience in <span class="font-medium" style="color: #FF2D20;">Laravel Framework</span> and currently also learning <span class="font-medium" style="color: #44B78B;">Django Framework</span> currently.</p>

                    <h5 class="text-sm font-medium">What project i have involved before?</h5>
                    <div class="">
                        <ul class="list-disc list-inside">
                            <li>Complaint System</li>
                            <li>Barcode System</li>
                            <li>Sales System</li>
                            <li>Vendor Portal System</li>
                            <li>Shipment System</li>
                            <li>Gate Entry System</li>
                        </ul>
                    </div>
                </div>
                <div class="rounded-md m-auto">
                    <canvas class="" id="myExpChart" width="250px"></canvas>
                </div>
            </div>
        </div>

        <div class="p-6" id="mySkill">
            <div class="flex flex-wrap sm:flex-nowrap bg-gray-100 rounded-lg p-3">
                <h3 class="block sm:hidden w-full text-center text-lg font-bold mb-2">My Skill</h3>
                <div class="py-3 sm:py-0 w-full">
                    <h3 class="text-gray-900 font-bold text-xl hidden sm:block mb-3">My Skill</h3>
                    <canvas id="mySkillChart" height="100px;"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myExpChart');
const skillChart = document.getElementById('mySkillChart');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['PHP', 'Python', 'JS', 'HTML', 'CSS'],
        datasets: [{
            label: '',
            data: [10, 10, 10, 10, 10],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        
    }
});

var mySkillChart = new Chart(skillChart, {
    type: 'bar',
    data: {
        labels: ['PHP', 'Python', 'JS', 'HTML', 'CSS'],
        datasets: [{
            label: 'My First Dataset',
            data: [10, 10, 10, 10, 10],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
});

const aboutMe = document.getElementById('aboutMe');
const myExp = document.getElementById('myExp');

aboutMe.addEventListener('click', function(){
    document.getElementById('aboutMeSection').scrollIntoView({ block: 'end',  behavior: 'smooth' });
});

myExp.addEventListener('click', function(){
    document.getElementById('myExpSection').scrollIntoView({ block: 'end',  behavior: 'smooth' });
});
</script>
@endsection
<!-- 
    <h3 class="text-center font-bold text-lg sm:text-left">About Me</h3>
    <hr class="my-4">
    <div class="grid sm:grid-cols-2">
        <div>
            <img class="w-48 m-auto" src="{{ asset('img/profile/img_avatar.png') }}" alt="">
        </div>
        <div class="py-4 text-left">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa animi numquam pariatur vitae quaerat excepturi, minima aliquid illo non rem sapiente accusantium impedit tempora consequuntur incidunt corporis beatae quod? Fugiat.</p>
        </div>
    </div>
 -->