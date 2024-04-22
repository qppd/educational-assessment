<script src="{{ url('faceapi/face-api.min.js') }}"></script>

@include('includes/header')


<style>
    .card {
        position: relative;
        width: 100%;
        background-image: url('{{ url('storage/images/topcitlogoblurred.png') }}');
        background-size: cover;
        background-position: center;
    }
</style>

<style>
    #cameraView {
        width: 300px;
        height: 250px;
        margin: 0 auto;
        background: black;
        border: 5px solid black;
        border-radius: 10px;
        box-shadow: 0 5px 50px #333
    }
</style>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('storage/images/topcitlogo.png') }}" alt="TOPCIT Logo" height="180"
                width="180">
            <h1>TOPCIT</h1>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->

            {{-- <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Examinations</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Examinations</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> --}}

            <section class="content">

                @if ($errors->any())
                    <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-warning'></i> Error!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Success!</h4>
                        <ul>
                            {{ session()->get('success') }}
                        </ul>
                    </div>
                @endif

                <div class="container-fluid">

                    <div class="row">
                        <div class="card">
                            <div class="card-header">

                                <div class="card-header">
                                    @foreach ($examination as $exam)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="text-left">TOPCIT</h3>
                                                    <h3 class="text-left"><b>{{ $exam->title }}</b></h3>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <h5 id="countdown-{{ $exam->id }}"></h5>
                                            </div>
                                        </div>
                                        <p>{{ $exam->description }}.</p>
                                    @endforeach
                                </div>
                                {{-- <a href="#add" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fas fa-plus"></i> New</a> --}}
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body" id="examContent" style="display: none;">

                                <form id="form-submit" action="/portal/examination/submit" method="POST"
                                    class="form-horizontal"
                                    onsubmit="return confirm('Are you sure you want to submit your answers?');">
                                    @csrf
                                    @foreach ($examination as $exam)
                                        <input type="hidden" name="examination_id" value="{{ $exam['id'] }}">
                                    @endforeach

                                    @foreach ($questions as $index => $question)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="question_ids[{{ $index + 1 }}]"
                                                    value="{{ $question['id'] }}">
                                                <p><b>{{ $index + 1 }}.</b> {!! $question['question'] !!}</b></p>
                                                {{-- <td>{!! $question['question'] !!}</td> --}}
                                                @if ($question['type'] == 'Multiple choice')
                                                    <div class="form-group clearfix">
                                                        @for ($i = 1; $i <= 4; $i++)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="icheck-primary d-inline"
                                                                        style="margin-right:10%;">
                                                                        <input type="radio"
                                                                            style="margin-bottom:50px;"
                                                                            id="radioPrimary{{ $index + 1 }}_{{ $i }}"
                                                                            name="answers[{{ $index + 1 }}]"
                                                                            value="{{ $question['choice_' . $i] }}"
                                                                            {{-- @if ($i == 1) checked @endif --}} required>
                                                                        <label
                                                                            for="radioPrimary{{ $index + 1 }}_{{ $i }}">
                                                                            {{ $question['choice_' . $i] }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                @elseif ($question['type'] == 'Fill in the blank')
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control"
                                                                name="fill_in_the_blank_answers[{{ $index + 1 }}]"
                                                                placeholder="Enter your answer..." required>
                                                        </div>
                                                    </div>
                                                @elseif ($question['type'] == 'Enumeration')
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control"
                                                                name="enumeration_answers[{{ $index + 1 }}]"
                                                                placeholder="Enter your answer..." required>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach

                                    <button type="hidden" id="submitButton"
                                        class="btn bg-gradient-primary float-right">SUBMIT
                                        ANSWER</button>
                                </form>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

                                <div id="cameraContainer">
                                    <canvas id="faceCanvas" width="300" height="250"
                                        style="position: absolute;"></canvas>
                                    <video id="cameraView" autoplay playsinline muted></video>

                                </div>
                                <p id="countdownTimer"></p>
                            </div>
                        </div>
                        <!-- /.card -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{-- @include('includes/footer') --}}

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('includes/scripts')

</body>

<script>
    // Function to start the countdown timer
    function startCountdown(durationInMinutes, elementId, formId) {
        var endTime = new Date();
        endTime.setMinutes(endTime.getMinutes() + durationInMinutes);

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = endTime - now;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById(elementId).innerHTML = minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById(elementId).innerHTML = "EXPIRED";

                // Auto-submit the form when the countdown reaches zero
                document.getElementById(formId).submit();
            }
        }, 1000);
    }
</script>

<script>
    const video = document.getElementById("cameraView");
    const canvas = document.getElementById("faceCanvas");


    Promise.all([
        faceapi.nets.ssdMobilenetv1.loadFromUri("/weights"),
        faceapi.nets.faceLandmark68Net.loadFromUri("/weights"),
        faceapi.nets.faceRecognitionNet.loadFromUri("/weights"),
        faceapi.nets.faceLandmark68Net.loadFromUri("/weights"),
    ]).then(startWebcam);

    function startWebcam() {
        navigator.mediaDevices
            .getUserMedia({
                video: true,
                audio: false,
            })
            .then((stream) => {
                video.srcObject = stream;
            })
            .catch((error) => {
                console.error(error);
            });
    }

    function getLabeledFaceDescriptions() {
        var labels = @json($studentUsernames);

        console.log(labels);
        return Promise.all(
            labels.map(async (label) => {
                const descriptions = [];
                for (let i = 1; i <= 2; i++) {

                    const assetLink = `{{ asset('storage/images/students/${label}/${i}.jpg') }}`;
                    console.log("LINK:" + assetLink);

                    const image = await faceapi.fetchImage(assetLink);

                    const detections = await faceapi
                        .detectSingleFace(image)
                        .withFaceLandmarks()
                        .withFaceDescriptor();
                    descriptions.push(detections.descriptor);
                }
                return new faceapi.LabeledFaceDescriptors(label, descriptions);
            })
        );
    }

    let faceRecognitionInterval;
    let noFaceTimer = 0;
    const noFaceThreshold = 30; // Set the threshold in seconds

    // Add this function to update the countdown timer display
    function updateCountdownTimer() {
        const seconds = Math.floor(noFaceTimer / 1000); // Convert milliseconds to seconds
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        const countdownText = `${minutes}m ${remainingSeconds}s`;
        $("#countdownTimer").text(countdownText);
    }

    video.addEventListener("play", async () => {
        // Initialize face recognition and set up interval

        const labeledFaceDescriptors = await getLabeledFaceDescriptions();
        const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors);

        $("#submitButton").show();
        $("#examContent").show();

        // Start the countdown for each examination
        @foreach ($examination as $exam)
            startCountdown({{ $exam['duration'] }}, 'countdown-{{ $exam->id }}', 'form-submit');
        @endforeach

        const displaySize = {
            width: 300,
            height: 250
        };

        let consecutiveNonMatches = 0;
        const requiredConsecutiveNonMatches = 5; // Set the required consecutive non-matches

        faceRecognitionInterval = setInterval(async () => {
            const detections = await faceapi
                .detectAllFaces(video)
                .withFaceLandmarks()
                .withFaceDescriptors();

            if (detections.length > 0) {
                // Reset the no face timer if a face is detected
                noFaceTimer = 0;
            } else {
                // Increment the no face timer if no face is detected
                noFaceTimer += 100; // Increment by 100 milliseconds
                updateCountdownTimer();

                if (noFaceTimer >= noFaceThreshold *
                    1000) { // Convert threshold to milliseconds
                    // Face not detected for 30 seconds, submit the form
                    clearInterval(faceRecognitionInterval);
                    document.getElementById('form-submit').submit();
                }
            }

            const resizedDetections = faceapi.resizeResults(detections, displaySize);

            canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);
            faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);
            const results = resizedDetections.map((d) => {
                return faceMatcher.findBestMatch(d.descriptor);
            });

            results.forEach(async (result, i) => {
                const label = result._label;
                const distance = result._distance;

                // Convert the session value to a number using parseInt
                const sessionStudentId = parseInt("{{ session('student_no') }}");

                if (label == sessionStudentId) {
                    // Reset the counter if a match is found
                    consecutiveNonMatches = 0;
                } else if (label !== sessionStudentId || label == "Unknown") {
                    // Increment the counter for consecutive non-matches
                    consecutiveNonMatches++;

                    if (consecutiveNonMatches >= requiredConsecutiveNonMatches) {
                        // Submit the form if the required consecutive non-matches are reached
                        clearInterval(faceRecognitionInterval);
                        document.getElementById('form-submit').submit();
                    }
                }

                const box = detections[i].detection.box;
                const drawBox = new faceapi.draw.DrawBox(box, {
                    label: label,
                });

                drawBox.draw(canvas);
            });
        }, 100);
    });
</script>

</html>
