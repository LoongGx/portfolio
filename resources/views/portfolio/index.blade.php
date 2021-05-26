@extends('layouts.sp-app')

@section('styles')
<style>
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #000000;
    opacity: 0.5;
}

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.btn:focus, .btn:active:focus, .btn.active:focus, input[type="email"]:focus{
    outline:none;
    box-shadow:none;
}
</style>
@endsection

@section('content')
<div class="container mt-20">
    <div class="main-body">
        <div class="row gutters-sm">

            <div class="col-md-4 mb-3">

                <!-- Simple Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('img/profile/avatar7.png') }}" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>Chen</h4>
                                <p class="text-secondary mb-1">Full Stack Web Developer</p>
                                <p class="text-muted font-size-sm">Batu Arang, Selangor</p>
                                <a href="{{ route('personal:portfolio.generateCvPdf') }}" target="_blank" class="btn btn-sm btn-outline-primary">Preview CV</a>
                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mailModal">Mail CV</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Contact -->
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0 d-inline-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                            <a href="https://loong-portfolio.herokuapp.com/" target="_blank" class="text-secondary text-decoration-none">Loong-Portfolio</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0 d-inline-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                            <a href="https://git.io/JsZUb" target="_blank" class="text-secondary text-decoration-none">Loong Github</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0 d-inline-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                            <span class="text-secondary">Sample Twitter</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0 d-inline-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                            <span class="text-secondary">Sample Instagram</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0 d-inline-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                            <span class="text-secondary">Sample Facebook</span>
                        </li>
                    </ul>
                </div>

            </div>
            
            <div class="col-md-8">
                <!-- Personal Info -->
                <div class="card mb-3">
                    <div class="card-body">

                        <!-- Full Name -->
                        <div class="row">
                            <div class="col-sm-3"><h6 class="mb-0">Full Name</h6></div>
                            <div class="col-sm-9 text-secondary">Chen Kuok Loong</div>
                        </div>
                        <hr>
                        <!-- Age -->
                        <div class="row">
                            <div class="col-sm-3"><h6 class="mb-0">Certificate</h6></div>                                
                            <div class="col-sm-9 text-secondary">Diploma in Internet Technology</div>
                        </div>
                        <hr>
                        <!-- Email -->
                        <div class="row">
                            <div class="col-sm-3"><h6 class="mb-0">Email</h6></div>
                            <div class="col-sm-9 text-secondary">kuokloong0294@gmail.com</div>
                        </div>
                        <hr>
                        <!-- Contact no -->
                        <div class="row">
                            <div class="col-sm-3"><h6 class="mb-0">Phone</h6></div>
                            <div class="col-sm-9 text-secondary">(017) 6928 368</div>
                        </div>
                        <hr>
                        
                        <div class="row">
                            <div class="col-sm-3"><h6 class="mb-0">Address</h6></div>
                            <div class="col-sm-9 text-secondary">
                                NO C364, JALAN 0-C-8, 48100 BATU ARANG, SELANGOR
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Involved Status -->
                <div class="row gutters-sm">
                    <!-- First Column -->
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3">
                                    <i class="text-info mr-2">Assignment</i>
                                    Project Participate Status
                                </h6>

                                <small>Complaint System (80%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <small>Sales System (50%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <small>Barcode System (35%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                                <small>Vendor Portal System (70%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <small>Gate Entry System (70%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Column -->
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="text-info mr-2">Assignment</i>Project Participate Status</h6>

                                <small>Shipment System (95%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                                <small>Transport System (96%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                                <small>QrCode Generator System (99%)</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                                <small>System 3</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                                <small>System 4</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mailModalLabel">Mail CV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnClosed"></button>
            </div>
            
            <div class="modal-body">
                <div class="alert alert-dismissible fade" role="alert" id="mailMsg" style="display:none;">
                    <strong id="msg"></strong>
                    <button type="button" class="btn-close" id="errCloseBtn"></button>
                </div>
                <div class="input-group">
                    <input type="email" name="mail" class="form-control" placeholder="sample123@email.com" id="mail">
                    <button type="button" class="btn btn-sm btn-outline-success" id="sendMail">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
const sendMail = document.getElementById("sendMail");
var mail = document.getElementById("mail");
sendMail.addEventListener("click", sendCv);

document.getElementById("errCloseBtn").addEventListener("click", function(){
    document.getElementById("mailMsg").style.display = "none";
});

document.getElementById("btnClosed").addEventListener("click", function(){
    document.getElementById("mail").value = "";
})
function sendCv(){

    let headers = {
        "Access-Control-Allow-Origin": "*",
        "Content-Type": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-TOKEN": "{{ csrf_token() }}"
    };

    var data = {
        "email": mail.value
    };
    
    fetch("{{ route('personal:portfolio.mailcv') }}", {
        method: "POST",
        headers: headers,
        body: JSON.stringify(data)
    })
    .then((response) => {
        if (response.ok) {
            return response.json();
        }else{
            throw response
        }
    })
    .then(function(data){ 
        document.getElementById("mailMsg").classList.add("alert-success");
        document.getElementById("mailMsg").style.display = "block";
        document.getElementById("mailMsg").classList.add("show");
        document.getElementById("msg").innerHTML = "Email has been delivered to "+data.mail+" successfully"
        document.getElementById("mail").value = "";
    })
    .catch( err => {
        err.json().then( errMsg => {
            document.getElementById("mailMsg").classList.add("alert-danger");
            document.getElementById("mailMsg").style.display = "block";
            document.getElementById("mailMsg").classList.add("show");

            document.getElementById("msg").innerHTML = errMsg.errors.email[0];
        })
    });

}
</script>
@endsection