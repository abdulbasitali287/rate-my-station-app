@props(['name' => 'unknown', 'img' => ''])
<div class="col-md-6">
    <div class="bg-white p-4 mb-3 job-applied-candidates-section">
        <div class="row pb-3">
            <div class="col-md-2">
                <img src="{{ asset($img) }}" class="job-img" alt="">
            </div>
            <div class="col-md-6">
                <strong class="job-name">{{ $name }}</strong>
                <p class="job-position">News Director</p>
            </div>
            <div class="col-md-4 text-end">
                <strong class="hire-highlight">Why hire me?</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row mb-3">
                    <div class="col-2"></div>
                    <div class="col-md-5">
                        <strong class="job-title">Job Title</strong>
                        <p class="station-name">At Station’s names</p>
                    </div>
                    <div class="col-md-5 text-end">
                        <p class="date-range">Oct 2021 - Apr 2022</p>
                        <span class="time-duration">7 months</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"></div>
                    <div class="col-md-5">
                        <strong class="job-title">Job Title</strong>
                        <p class="station-name">At Station’s names</p>
                    </div>
                    <div class="col-md-5 text-end">
                        <p class="date-range">Oct 2021 - Apr 2022</p>
                        <span class="time-duration">7 months</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"></div>
                    <div class="col-md-5">
                        <strong class="job-title">Job Title</strong>
                        <p class="station-name">At Station’s names</p>
                    </div>
                    <div class="col-md-5 text-end">
                        <p class="date-range">Oct 2021 - Apr 2022</p>
                        <span class="time-duration">7 months</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6">
                <a href="#" class="d-block btn-decline text-center fw-bold">Decline</a>
            </div>
            <div class="col-md-6">
                <a href="#" class="d-block btn-interview">Request for interview</a>
            </div>
        </div>
    </div>
</div>
