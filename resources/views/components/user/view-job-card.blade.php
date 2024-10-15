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
    <div class="job-card">
        <!-- Job Card Header -->
        <div class="job-card-header d-flex justify-content-between">
            <!-- Company Logo -->
            <div class="company-logo">
                <img src="{{ asset($logoImgPath) }}" class="logo-img" alt="">
            </div>

            <!-- Job Title and Company -->
            <div class="job-info d-flex flex-column flex-grow-1 ps-3 justify-content-center">
                <h6 class="job-title fw-bold">{{ $title }}</h6>
                <p class="fw-light">{{ $subHeading }}</p>
            </div>

            <!-- Options Menu -->
            <div>
                <button class="btn btn-sm options-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('user/assets/img/three-dots.png') }}" alt="">
                </button>
                <div class="dropdown-menu"></div>
            </div>
        </div>

        <!-- Job Details -->
        <div class="job-details">
            <!-- Location -->
            <div class="detail-item">
                <span><img src="{{ asset($iconOne) }}" class="detail-icon" width="14" height="16" alt=""></span>
                <span class="detail-text fw-light">{{ $textOne }}</span>
            </div>

            <!-- Salary -->
            <div class="detail-item">
                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="detail-icon" width="16" height="16" alt=""></span>
                <span class="detail-text fw-light">{{ $textTwo }}</span>
            </div>

            <!-- Job Type -->
            <div class="detail-item">
                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" class="detail-icon" width="16" height="13" alt=""></span>
                <span class="detail-text fw-light">{{ $textThree }}</span>
            </div>
        </div>

        <!-- Job Description -->
        <ul class="job-description ps-3">
            <li class="lh-lg">Massa fringilla quam pretium adipiscing in non tellus. Turpis quis turpis sit euismod lobortis sapien rhoncus condimentum dolor.</li>
            <li class="lh-lg">Massa fringilla quam pretium adipiscing in non tellus.</li>
            <li class="lh-lg">Massa fringilla quam pretium.</li>
        </ul>

        <!-- Footer: Actively Hiring Button and Last Updated -->
        <div class="job-card-footer">
            <!-- Actively Hiring -->
            <a href="{{ url('job-details') }}" class="actively-hiring-btn">
                <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" class="me-2" width="15" height="15" alt="">
                Actively Hiring
            </a>

            <!-- Last Updated -->
            <p class="text-muted updated-info">
                <img src="{{ asset('user/assets/vectors/timer-vector.png') }}" width="16" height="16" alt="">
                Updated 8 hours ago
            </p>
        </div>
    </div>
</div>

