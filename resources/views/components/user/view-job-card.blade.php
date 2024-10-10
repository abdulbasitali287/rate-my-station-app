@props([
    'logoImgPath' => 'user/assets/img/7-abc.png',
    'title' => 'Assistant News Director',
    'subHeading' => 'KABC',
    'iconOne' => 'user/assets/vectors/map-icon-30x30.png',
    'textOne' => 'Los Angeles, CA',
    'textTwo' => '$100,000 - $130,000',
    'textThree' => 'Full time'
])

<div class="col-md-6">
    <div class="job-card bg-white my-4">
        <!-- Job Card Header -->
        <div class="d-flex justify-content-between">
            <!-- Company Logo -->
            <div class="company-logo">
                <img src="{{ asset($logoImgPath) }}" class="w-100 h-100" alt="">
            </div>

            <!-- Job Title and Company -->
            <div class="d-flex flex-column flex-grow-1 ps-3">
                <h6 class="job-title">{{ $title }}</h6>
                <p class="text-muted">{{ $subHeading }}</p>
            </div>

            <!-- Options Menu -->
            <div>
                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('user/assets/img/three-dots.png') }}" alt="">
                </button>
                <div class="dropdown-menu"></div>
            </div>
        </div>

        <!-- Job Details -->
        <div class="job-details d-flex justify-content-around my-3">
            <!-- Location -->
            <div class="pe-4">
                <span><img src="{{ asset($iconOne) }}" class="detail-icon" alt=""></span>
                <span class="detail-text">{{ $textOne }}</span>
            </div>

            <!-- Salary -->
            <div class="pe-4">
                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="detail-icon" alt=""></span>
                <span class="detail-text">{{ $textTwo }}</span>
            </div>

            <!-- Job Type -->
            <div class="pe-4">
                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" class="detail-icon" alt=""></span>
                <span class="detail-text">{{ $textThree }}</span>
            </div>
        </div>

        <!-- Job Description -->
        <ul class="job-description">
            <li>Massa fringilla quam pretium adipiscing in non tellus. Turpis quis turpis sit euismod lobortis sapien rhoncus condimentum dolor.</li>
            <li>Massa fringilla quam pretium adipiscing in non tellus.</li>
            <li>Massa fringilla quam pretium.</li>
        </ul>

        <!-- Footer: Actively Hiring Button and Last Updated -->
        <div class="d-flex justify-content-between align-items-center pt-3">
            <!-- Actively Hiring -->
            <a href="{{ url('job-details') }}" class="btn actively-hiring-btn">
                <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt="">
                Actively Hiring
            </a>

            <!-- Last Updated -->
            <p class="text-muted updated-info">
                <img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt="">
                Updated 8 hours ago
            </p>
        </div>
    </div>
</div>
