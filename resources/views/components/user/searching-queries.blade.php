@props(['title' => 'Looking for Work?','paragraph' => 'Subscribe to our Job Center for instant access to thousands of job opportunities in media.','buttonText' => 'Subscribe','path' => 'user/assets/ellipse/complete-bg.png'])
<section class="searching-queries">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="searching-background" style="background-image: url({{ asset($path) }});">
                    <div class="searching-content">
                        <h2 class="searching-title">{{ $title }}</h2>
                        <p class="searching-paragraph">{{ $paragraph }}</p>
                        <div>
                            <a href="{{ url('subscription') }}" class="btn job-center-subscribe-btn">{{ $buttonText }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
